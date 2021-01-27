<?php

namespace Mpp\PreventgoBundle\Client;

use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\ClientException;
use GuzzleHttp\Psr7\Response as GuzzleResponse;
use Mpp\PreventgoBundle\Model\RequestError;
use Mpp\PreventgoBundle\Model\Result;
use Psr\Log\LoggerInterface;
use Symfony\Component\OptionsResolver\Options;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Serializer\SerializerInterface;

class RestHttpClient
{
    protected LoggerInterface $logger;

    protected ClientInterface $httpClient;

    protected SerializerInterface $serializer;

    /**
     * @param LoggerInterface $logger
     * @param ClientInterface $httpClient
     * @param SerializerInterface $serializer
     */
    public function __construct(LoggerInterface $logger, ClientInterface $httpClient, SerializerInterface $serializer)
    {
        $this->logger = $logger;
        $this->httpClient = $httpClient;
        $this->serializer = $serializer;
    }

    /**
     * Retrieve logger.
     *
     * @return LoggerInterface
     */
    public function getLogger(): LoggerInterface
    {
        return $this->logger;
    }

    /**
     * Retrieve http client.
     *
     * @return ClientInterface
     */
    public function getHttpClient(): ClientInterface
    {
        return $this->httpClient;
    }

    /**
     * @param array $parameters
     * @param string $filePath
     *
     * @return Result
     */
    public function check(array $parameters, string $filePath): Result
    {
        $resolver = new OptionsResolver();
        $this->configureParameters($resolver);
        $resolvedParameters = $resolver->resolve($parameters);

        $method = 'POST';
        $url = '/v2/any';
        $multipart = self::buildMultipart($resolvedParameters, [$filePath]);

        $this->logger->info('PreventGo Api call', [
            'method' => $method,
            'url' => $url,
            'multipart' => $multipart,
            'headers' => $this->httpClient->getConfig('headers'),
        ]);

        try {
            $response = $this->httpClient->request($method, $url, ['multipart' => $multipart]);

            return $this->serializer->deserialize($response->getBody(), Result::class, 'json');
        } catch (\Exception $e) {
            $error = new RequestError();
            $error
                ->setMessage($e->getMessage())
                ->setCode(-1)
            ;

            return (new Result())
                ->setError($error)
            ;
        }
    }

    private function configureParameters(OptionsResolver $resolver)
    {
        $resolver
            ->setDefault('holder', null)->setAllowedTypes('holder', ['null', 'array'])
            ->setDefault('bank_account', null)->setAllowedTypes('bank_account', ['null', 'array'])
            ->setDefault('taxHousehold', null)->setAllowedTypes('taxHousehold', ['null', 'array'])
            ->setDefault('vehicle', null)->setAllowedTypes('vehicle', ['null', 'array'])
            ->setDefault('options', null)->setAllowedTypes('options', ['null', 'array'])
            ->setDefault('additional', null)->setAllowedTypes('additional', ['null', 'array'])
        ;
    }

    private static function buildMultipart(array $parameters, array $files): array
    {
        $multipart = [];
        foreach ($parameters as $name => $contents) {
            if (null !== $contents) {
                $multipart[] = self::buildMultipartItem($name, $contents);
            }
        }

        foreach ($files as $i => $filePath) {
            $multipart[] = self::buildMultipartFileItem($filePath, $i);
        }

        return $multipart;
    }

    private static function buildMultipartItem(string $name, $contents): array
    {
        return ['name' => $name, 'contents' => json_encode($contents)];
    }

    private static function buildMultipartFileItem(string $filePath, int $fileIndex = 0): array
    {
        return [
            'Content-type' => 'multipart/form-data',
            'name' => sprintf('file_%d', $fileIndex + 1),
            'contents' => fopen($filePath, 'r'),
        ];
    }
}