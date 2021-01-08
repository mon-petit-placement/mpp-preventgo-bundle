<?php

namespace Mpp\PreventgoBundle\Client;

use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\ClientException;
use GuzzleHttp\Psr7\Response as GuzzleResponse;
use Mpp\PreventgoBundle\Model\Result;
use Psr\Log\LoggerInterface;

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
        die('TODO');
    }
}