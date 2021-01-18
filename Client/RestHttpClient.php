<?php

namespace Mpp\PreventgoBundle\Client;

use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\ClientException;
use GuzzleHttp\Psr7\Response as GuzzleResponse;
use Mpp\PreventgoBundle\Model\Result;
use Psr\Log\LoggerInterface;
use Symfony\Component\OptionsResolver\Options;
use Symfony\Component\OptionsResolver\OptionsResolver;

class RestHttpClient
{
    protected LoggerInterface $logger;

    protected ClientInterface $httpClient;

    /**
     * @param LoggerInterface $logger
     * @param ClientInterface $httpClient
     */
    public function __construct(LoggerInterface $logger, ClientInterface $httpClient)
    {
        $this->logger = $logger;
        $this->httpClient = $httpClient;
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
        $resolvedParameters = $resolver->resolve(array_merge($parameters, [
            'file_1' => $filePath,
        ]));

        $method = 'POST';
        $url = '/v2/any';

        $this->logger->info('PreventGo Api call', [
            'method' => $method,
            'url' => $url,
            'parameters' => $resolvedParameters,
            'headers' => $this->httpClient->getConfig('headers'),
        ]);

        return $this->httpClient->request($method, $url, $resolvedParameters);
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
            ->setRequired('file_1')->setAllowedTypes('file_1', ['string'])->setNormalizer('file_1', function(Options $options, $value) {

            })
        ;
    }
}