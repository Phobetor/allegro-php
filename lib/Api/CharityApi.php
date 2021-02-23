<?php
/**
 * CharityApi
 * PHP version 7.2
 *
 * @category Class
 * @package  Phobetor\Allegro
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Allegro REST API
 *
 * https://developer.allegro.pl/about  Documentation is generated from [this](https://developer.allegro.pl/swagger.yaml) OpenAPI 3.0 specification file.
 *
 * The version of the OpenAPI document: latest
 * 
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.0.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Phobetor\Allegro\Api;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\RequestOptions;
use Phobetor\Allegro\ApiException;
use Phobetor\Allegro\Configuration;
use Phobetor\Allegro\HeaderSelector;
use Phobetor\Allegro\ObjectSerializer;

/**
 * CharityApi Class Doc Comment
 *
 * @category Class
 * @package  Phobetor\Allegro
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class CharityApi
{
    /**
     * @var ClientInterface
     */
    protected $client;

    /**
     * @var Configuration
     */
    protected $config;

    /**
     * @var HeaderSelector
     */
    protected $headerSelector;

    /**
     * @var int Host index
     */
    protected $hostIndex;

    /**
     * @param ClientInterface $client
     * @param Configuration   $config
     * @param HeaderSelector  $selector
     * @param int             $hostIndex (Optional) host index to select the list of hosts if defined in the OpenAPI spec
     */
    public function __construct(
        ClientInterface $client = null,
        Configuration $config = null,
        HeaderSelector $selector = null,
        $hostIndex = 0
    ) {
        $this->client = $client ?: new Client();
        $this->config = $config ?: new Configuration();
        $this->headerSelector = $selector ?: new HeaderSelector();
        $this->hostIndex = $hostIndex;
    }

    /**
     * Set the host index
     *
     * @param int $hostIndex Host index (required)
     */
    public function setHostIndex($hostIndex)
    {
        $this->hostIndex = $hostIndex;
    }

    /**
     * Get the host index
     *
     * @return int Host index
     */
    public function getHostIndex()
    {
        return $this->hostIndex;
    }

    /**
     * @return Configuration
     */
    public function getConfig()
    {
        return $this->config;
    }

    /**
     * Operation searchFundraisingCampaigns
     *
     * Search fundraising campaigns
     *
     * @param  int $limit Maximum number of returned results. (required)
     * @param  string $phrase Fundraising campaign name or it&#39;s Organization name prefix to search for. (required)
     *
     * @throws \Phobetor\Allegro\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Phobetor\Allegro\Model\FundraisingCampaigns
     */
    public function searchFundraisingCampaigns($limit, $phrase)
    {
        list($response) = $this->searchFundraisingCampaignsWithHttpInfo($limit, $phrase);
        return $response;
    }

    /**
     * Operation searchFundraisingCampaignsWithHttpInfo
     *
     * Search fundraising campaigns
     *
     * @param  int $limit Maximum number of returned results. (required)
     * @param  string $phrase Fundraising campaign name or it&#39;s Organization name prefix to search for. (required)
     *
     * @throws \Phobetor\Allegro\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Phobetor\Allegro\Model\FundraisingCampaigns, HTTP status code, HTTP response headers (array of strings)
     */
    public function searchFundraisingCampaignsWithHttpInfo($limit, $phrase)
    {
        $request = $this->searchFundraisingCampaignsRequest($limit, $phrase);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? (string) $e->getResponse()->getBody() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()
                );
            }

            $responseBody = $response->getBody();
            switch($statusCode) {
                case 200:
                    if ('\Phobetor\Allegro\Model\FundraisingCampaigns' === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = (string) $responseBody;
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Phobetor\Allegro\Model\FundraisingCampaigns', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\Phobetor\Allegro\Model\FundraisingCampaigns';
            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = (string) $responseBody;
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Phobetor\Allegro\Model\FundraisingCampaigns',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation searchFundraisingCampaignsAsync
     *
     * Search fundraising campaigns
     *
     * @param  int $limit Maximum number of returned results. (required)
     * @param  string $phrase Fundraising campaign name or it&#39;s Organization name prefix to search for. (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function searchFundraisingCampaignsAsync($limit, $phrase)
    {
        return $this->searchFundraisingCampaignsAsyncWithHttpInfo($limit, $phrase)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation searchFundraisingCampaignsAsyncWithHttpInfo
     *
     * Search fundraising campaigns
     *
     * @param  int $limit Maximum number of returned results. (required)
     * @param  string $phrase Fundraising campaign name or it&#39;s Organization name prefix to search for. (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function searchFundraisingCampaignsAsyncWithHttpInfo($limit, $phrase)
    {
        $returnType = '\Phobetor\Allegro\Model\FundraisingCampaigns';
        $request = $this->searchFundraisingCampaignsRequest($limit, $phrase);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = (string) $responseBody;
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'searchFundraisingCampaigns'
     *
     * @param  int $limit Maximum number of returned results. (required)
     * @param  string $phrase Fundraising campaign name or it&#39;s Organization name prefix to search for. (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function searchFundraisingCampaignsRequest($limit, $phrase)
    {
        // verify the required parameter 'limit' is set
        if ($limit === null || (is_array($limit) && count($limit) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $limit when calling searchFundraisingCampaigns'
            );
        }
        if ($limit > 100) {
            throw new \InvalidArgumentException('invalid value for "$limit" when calling CharityApi.searchFundraisingCampaigns, must be smaller than or equal to 100.');
        }
        if ($limit < 1) {
            throw new \InvalidArgumentException('invalid value for "$limit" when calling CharityApi.searchFundraisingCampaigns, must be bigger than or equal to 1.');
        }

        // verify the required parameter 'phrase' is set
        if ($phrase === null || (is_array($phrase) && count($phrase) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $phrase when calling searchFundraisingCampaigns'
            );
        }

        $resourcePath = '/charity/fundraising-campaigns';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if ($limit !== null) {
            if('form' === 'form' && is_array($limit)) {
                foreach($limit as $key => $value) {
                    $queryParams[$key] = $value;
                }
            }
            else {
                $queryParams['limit'] = $limit;
            }
        }
        // query params
        if ($phrase !== null) {
            if('form' === 'form' && is_array($phrase)) {
                foreach($phrase as $key => $value) {
                    $queryParams[$key] = $value;
                }
            }
            else {
                $queryParams['phrase'] = $phrase;
            }
        }




        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/vnd.allegro.beta.v1+json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/vnd.allegro.beta.v1+json'],
                []
            );
        }

        // for model (json/xml)
        if (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $formParamValueItems = is_array($formParamValue) ? $formParamValue : [$formParamValue];
                    foreach ($formParamValueItems as $formParamValueItem) {
                        $multipartContents[] = [
                            'name' => $formParamName,
                            'contents' => $formParamValueItem
                        ];
                    }
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\build_query($formParams);
            }
        }

        // this endpoint requires OAuth (access token)
        if ($this->config->getAccessToken() !== null) {
            $headers['Authorization'] = 'Bearer ' . $this->config->getAccessToken();
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $query = \GuzzleHttp\Psr7\build_query($queryParams);
        return new Request(
            'GET',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Create http client option
     *
     * @throws \RuntimeException on file opening failure
     * @return array of http client options
     */
    protected function createHttpClientOption()
    {
        $options = [];
        if ($this->config->getDebug()) {
            $options[RequestOptions::DEBUG] = fopen($this->config->getDebugFile(), 'a');
            if (!$options[RequestOptions::DEBUG]) {
                throw new \RuntimeException('Failed to open the debug file: ' . $this->config->getDebugFile());
            }
        }

        return $options;
    }
}
