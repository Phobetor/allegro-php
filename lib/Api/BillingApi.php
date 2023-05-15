<?php
/**
 * BillingApi
 * PHP version 7.4
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
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 6.6.0-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Phobetor\Allegro\Api;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\ConnectException;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\RequestOptions;
use Phobetor\Allegro\ApiException;
use Phobetor\Allegro\Configuration;
use Phobetor\Allegro\HeaderSelector;
use Phobetor\Allegro\ObjectSerializer;

/**
 * BillingApi Class Doc Comment
 *
 * @category Class
 * @package  Phobetor\Allegro
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class BillingApi
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

    /** @var string[] $contentTypes **/
    public const contentTypes = [
        'getBillingEntries' => [
            'application/json',
        ],
        'getBillingTypes' => [
            'application/json',
        ],
    ];

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
    public function setHostIndex($hostIndex): void
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
     * Operation getBillingEntries
     *
     * Get a list of billing entries
     *
     * @param  string $marketplace_id The marketplace ID where operation was made. By default the marketplace ID where the user is registered. (optional)
     * @param  \DateTime $occurred_at_gte Date from which billing entries are filtered. If occurredAt.lte is also set, occurredAt.gte cannot be later. (optional)
     * @param  \DateTime $occurred_at_lte Date to which billing entries are filtered. If occurredAt.gte is also set, occurredAt.lte cannot be earlier. (optional)
     * @param  string[] $type_id List of billing types by which billing entries are filtered. (optional)
     * @param  string $offer_id Offer ID by which billing entries are filtered. (optional)
     * @param  string $order_id Order UUID by which billing entries are filtered. (optional)
     * @param  int $limit Number of returned operations. (optional, default to 100)
     * @param  int $offset Index of the first returned payment operation from all search results. (optional, default to 0)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getBillingEntries'] to see the possible values for this operation
     *
     * @throws \Phobetor\Allegro\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Phobetor\Allegro\Model\BillingEntries|\Phobetor\Allegro\Model\AuthError|\Phobetor\Allegro\Model\ErrorsHolder|\Phobetor\Allegro\Model\ErrorsHolder
     */
    public function getBillingEntries($marketplace_id = null, $occurred_at_gte = null, $occurred_at_lte = null, $type_id = null, $offer_id = null, $order_id = null, $limit = 100, $offset = 0, string $contentType = self::contentTypes['getBillingEntries'][0])
    {
        list($response) = $this->getBillingEntriesWithHttpInfo($marketplace_id, $occurred_at_gte, $occurred_at_lte, $type_id, $offer_id, $order_id, $limit, $offset, $contentType);
        return $response;
    }

    /**
     * Operation getBillingEntriesWithHttpInfo
     *
     * Get a list of billing entries
     *
     * @param  string $marketplace_id The marketplace ID where operation was made. By default the marketplace ID where the user is registered. (optional)
     * @param  \DateTime $occurred_at_gte Date from which billing entries are filtered. If occurredAt.lte is also set, occurredAt.gte cannot be later. (optional)
     * @param  \DateTime $occurred_at_lte Date to which billing entries are filtered. If occurredAt.gte is also set, occurredAt.lte cannot be earlier. (optional)
     * @param  string[] $type_id List of billing types by which billing entries are filtered. (optional)
     * @param  string $offer_id Offer ID by which billing entries are filtered. (optional)
     * @param  string $order_id Order UUID by which billing entries are filtered. (optional)
     * @param  int $limit Number of returned operations. (optional, default to 100)
     * @param  int $offset Index of the first returned payment operation from all search results. (optional, default to 0)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getBillingEntries'] to see the possible values for this operation
     *
     * @throws \Phobetor\Allegro\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Phobetor\Allegro\Model\BillingEntries|\Phobetor\Allegro\Model\AuthError|\Phobetor\Allegro\Model\ErrorsHolder|\Phobetor\Allegro\Model\ErrorsHolder, HTTP status code, HTTP response headers (array of strings)
     */
    public function getBillingEntriesWithHttpInfo($marketplace_id = null, $occurred_at_gte = null, $occurred_at_lte = null, $type_id = null, $offer_id = null, $order_id = null, $limit = 100, $offset = 0, string $contentType = self::contentTypes['getBillingEntries'][0])
    {
        $request = $this->getBillingEntriesRequest($marketplace_id, $occurred_at_gte, $occurred_at_lte, $type_id, $offer_id, $order_id, $limit, $offset, $contentType);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? (string) $e->getResponse()->getBody() : null
                );
            } catch (ConnectException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    null,
                    null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        (string) $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    (string) $response->getBody()
                );
            }

            switch($statusCode) {
                case 200:
                    if ('\Phobetor\Allegro\Model\BillingEntries' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\Phobetor\Allegro\Model\BillingEntries' !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Phobetor\Allegro\Model\BillingEntries', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 401:
                    if ('\Phobetor\Allegro\Model\AuthError' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\Phobetor\Allegro\Model\AuthError' !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Phobetor\Allegro\Model\AuthError', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 406:
                    if ('\Phobetor\Allegro\Model\ErrorsHolder' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\Phobetor\Allegro\Model\ErrorsHolder' !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Phobetor\Allegro\Model\ErrorsHolder', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 422:
                    if ('\Phobetor\Allegro\Model\ErrorsHolder' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\Phobetor\Allegro\Model\ErrorsHolder' !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Phobetor\Allegro\Model\ErrorsHolder', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\Phobetor\Allegro\Model\BillingEntries';
            if ($returnType === '\SplFileObject') {
                $content = $response->getBody(); //stream goes to serializer
            } else {
                $content = (string) $response->getBody();
                if ($returnType !== 'string') {
                    $content = json_decode($content);
                }
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
                        '\Phobetor\Allegro\Model\BillingEntries',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Phobetor\Allegro\Model\AuthError',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 406:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Phobetor\Allegro\Model\ErrorsHolder',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 422:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Phobetor\Allegro\Model\ErrorsHolder',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation getBillingEntriesAsync
     *
     * Get a list of billing entries
     *
     * @param  string $marketplace_id The marketplace ID where operation was made. By default the marketplace ID where the user is registered. (optional)
     * @param  \DateTime $occurred_at_gte Date from which billing entries are filtered. If occurredAt.lte is also set, occurredAt.gte cannot be later. (optional)
     * @param  \DateTime $occurred_at_lte Date to which billing entries are filtered. If occurredAt.gte is also set, occurredAt.lte cannot be earlier. (optional)
     * @param  string[] $type_id List of billing types by which billing entries are filtered. (optional)
     * @param  string $offer_id Offer ID by which billing entries are filtered. (optional)
     * @param  string $order_id Order UUID by which billing entries are filtered. (optional)
     * @param  int $limit Number of returned operations. (optional, default to 100)
     * @param  int $offset Index of the first returned payment operation from all search results. (optional, default to 0)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getBillingEntries'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getBillingEntriesAsync($marketplace_id = null, $occurred_at_gte = null, $occurred_at_lte = null, $type_id = null, $offer_id = null, $order_id = null, $limit = 100, $offset = 0, string $contentType = self::contentTypes['getBillingEntries'][0])
    {
        return $this->getBillingEntriesAsyncWithHttpInfo($marketplace_id, $occurred_at_gte, $occurred_at_lte, $type_id, $offer_id, $order_id, $limit, $offset, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getBillingEntriesAsyncWithHttpInfo
     *
     * Get a list of billing entries
     *
     * @param  string $marketplace_id The marketplace ID where operation was made. By default the marketplace ID where the user is registered. (optional)
     * @param  \DateTime $occurred_at_gte Date from which billing entries are filtered. If occurredAt.lte is also set, occurredAt.gte cannot be later. (optional)
     * @param  \DateTime $occurred_at_lte Date to which billing entries are filtered. If occurredAt.gte is also set, occurredAt.lte cannot be earlier. (optional)
     * @param  string[] $type_id List of billing types by which billing entries are filtered. (optional)
     * @param  string $offer_id Offer ID by which billing entries are filtered. (optional)
     * @param  string $order_id Order UUID by which billing entries are filtered. (optional)
     * @param  int $limit Number of returned operations. (optional, default to 100)
     * @param  int $offset Index of the first returned payment operation from all search results. (optional, default to 0)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getBillingEntries'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getBillingEntriesAsyncWithHttpInfo($marketplace_id = null, $occurred_at_gte = null, $occurred_at_lte = null, $type_id = null, $offer_id = null, $order_id = null, $limit = 100, $offset = 0, string $contentType = self::contentTypes['getBillingEntries'][0])
    {
        $returnType = '\Phobetor\Allegro\Model\BillingEntries';
        $request = $this->getBillingEntriesRequest($marketplace_id, $occurred_at_gte, $occurred_at_lte, $type_id, $offer_id, $order_id, $limit, $offset, $contentType);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    if ($returnType === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
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
                        (string) $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'getBillingEntries'
     *
     * @param  string $marketplace_id The marketplace ID where operation was made. By default the marketplace ID where the user is registered. (optional)
     * @param  \DateTime $occurred_at_gte Date from which billing entries are filtered. If occurredAt.lte is also set, occurredAt.gte cannot be later. (optional)
     * @param  \DateTime $occurred_at_lte Date to which billing entries are filtered. If occurredAt.gte is also set, occurredAt.lte cannot be earlier. (optional)
     * @param  string[] $type_id List of billing types by which billing entries are filtered. (optional)
     * @param  string $offer_id Offer ID by which billing entries are filtered. (optional)
     * @param  string $order_id Order UUID by which billing entries are filtered. (optional)
     * @param  int $limit Number of returned operations. (optional, default to 100)
     * @param  int $offset Index of the first returned payment operation from all search results. (optional, default to 0)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getBillingEntries'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function getBillingEntriesRequest($marketplace_id = null, $occurred_at_gte = null, $occurred_at_lte = null, $type_id = null, $offer_id = null, $order_id = null, $limit = 100, $offset = 0, string $contentType = self::contentTypes['getBillingEntries'][0])
    {







        if ($limit !== null && $limit > 100) {
            throw new \InvalidArgumentException('invalid value for "$limit" when calling BillingApi.getBillingEntries, must be smaller than or equal to 100.');
        }
        if ($limit !== null && $limit < 1) {
            throw new \InvalidArgumentException('invalid value for "$limit" when calling BillingApi.getBillingEntries, must be bigger than or equal to 1.');
        }
        
        if ($offset !== null && $offset > 10000) {
            throw new \InvalidArgumentException('invalid value for "$offset" when calling BillingApi.getBillingEntries, must be smaller than or equal to 10000.');
        }
        if ($offset !== null && $offset < 0) {
            throw new \InvalidArgumentException('invalid value for "$offset" when calling BillingApi.getBillingEntries, must be bigger than or equal to 0.');
        }
        

        $resourcePath = '/billing/billing-entries';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $marketplace_id,
            'marketplaceId', // param base name
            'string', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $occurred_at_gte,
            'occurredAt.gte', // param base name
            'string', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $occurred_at_lte,
            'occurredAt.lte', // param base name
            'string', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $type_id,
            'type.id', // param base name
            'array', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $offer_id,
            'offer.id', // param base name
            'string', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $order_id,
            'order.id', // param base name
            'string', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $limit,
            'limit', // param base name
            'integer', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $offset,
            'offset', // param base name
            'integer', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);




        $headers = $this->headerSelector->selectHeaders(
            ['application/vnd.allegro.public.v1+json', ],
            $contentType,
            $multipart
        );

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

            } elseif (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the form parameters
                $httpBody = \GuzzleHttp\Utils::jsonEncode($formParams);
            } else {
                // for HTTP post (form)
                $httpBody = ObjectSerializer::buildQuery($formParams);
            }
        }

        // this endpoint requires OAuth (access token)
        if (!empty($this->config->getAccessToken())) {
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

        $operationHost = $this->config->getHost();
        $query = ObjectSerializer::buildQuery($queryParams);
        return new Request(
            'GET',
            $operationHost . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation getBillingTypes
     *
     * Get a list of billing types
     *
     * @param  string $accept_language Expected language of name translations. (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getBillingTypes'] to see the possible values for this operation
     *
     * @throws \Phobetor\Allegro\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Phobetor\Allegro\Model\BillingType[]|\Phobetor\Allegro\Model\AuthError
     */
    public function getBillingTypes($accept_language = null, string $contentType = self::contentTypes['getBillingTypes'][0])
    {
        list($response) = $this->getBillingTypesWithHttpInfo($accept_language, $contentType);
        return $response;
    }

    /**
     * Operation getBillingTypesWithHttpInfo
     *
     * Get a list of billing types
     *
     * @param  string $accept_language Expected language of name translations. (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getBillingTypes'] to see the possible values for this operation
     *
     * @throws \Phobetor\Allegro\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Phobetor\Allegro\Model\BillingType[]|\Phobetor\Allegro\Model\AuthError, HTTP status code, HTTP response headers (array of strings)
     */
    public function getBillingTypesWithHttpInfo($accept_language = null, string $contentType = self::contentTypes['getBillingTypes'][0])
    {
        $request = $this->getBillingTypesRequest($accept_language, $contentType);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? (string) $e->getResponse()->getBody() : null
                );
            } catch (ConnectException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    null,
                    null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        (string) $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    (string) $response->getBody()
                );
            }

            switch($statusCode) {
                case 200:
                    if ('\Phobetor\Allegro\Model\BillingType[]' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\Phobetor\Allegro\Model\BillingType[]' !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Phobetor\Allegro\Model\BillingType[]', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 401:
                    if ('\Phobetor\Allegro\Model\AuthError' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\Phobetor\Allegro\Model\AuthError' !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Phobetor\Allegro\Model\AuthError', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\Phobetor\Allegro\Model\BillingType[]';
            if ($returnType === '\SplFileObject') {
                $content = $response->getBody(); //stream goes to serializer
            } else {
                $content = (string) $response->getBody();
                if ($returnType !== 'string') {
                    $content = json_decode($content);
                }
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
                        '\Phobetor\Allegro\Model\BillingType[]',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Phobetor\Allegro\Model\AuthError',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation getBillingTypesAsync
     *
     * Get a list of billing types
     *
     * @param  string $accept_language Expected language of name translations. (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getBillingTypes'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getBillingTypesAsync($accept_language = null, string $contentType = self::contentTypes['getBillingTypes'][0])
    {
        return $this->getBillingTypesAsyncWithHttpInfo($accept_language, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getBillingTypesAsyncWithHttpInfo
     *
     * Get a list of billing types
     *
     * @param  string $accept_language Expected language of name translations. (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getBillingTypes'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getBillingTypesAsyncWithHttpInfo($accept_language = null, string $contentType = self::contentTypes['getBillingTypes'][0])
    {
        $returnType = '\Phobetor\Allegro\Model\BillingType[]';
        $request = $this->getBillingTypesRequest($accept_language, $contentType);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    if ($returnType === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
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
                        (string) $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'getBillingTypes'
     *
     * @param  string $accept_language Expected language of name translations. (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getBillingTypes'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function getBillingTypesRequest($accept_language = null, string $contentType = self::contentTypes['getBillingTypes'][0])
    {



        $resourcePath = '/billing/billing-types';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;


        // header params
        if ($accept_language !== null) {
            $headerParams['Accept-Language'] = ObjectSerializer::toHeaderValue($accept_language);
        }



        $headers = $this->headerSelector->selectHeaders(
            ['application/vnd.allegro.public.v1+json', ],
            $contentType,
            $multipart
        );

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

            } elseif (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the form parameters
                $httpBody = \GuzzleHttp\Utils::jsonEncode($formParams);
            } else {
                // for HTTP post (form)
                $httpBody = ObjectSerializer::buildQuery($formParams);
            }
        }

        // this endpoint requires OAuth (access token)
        if (!empty($this->config->getAccessToken())) {
            $headers['Authorization'] = 'Bearer ' . $this->config->getAccessToken();
        }
        // this endpoint requires OAuth (access token)
        if (!empty($this->config->getAccessToken())) {
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

        $operationHost = $this->config->getHost();
        $query = ObjectSerializer::buildQuery($queryParams);
        return new Request(
            'GET',
            $operationHost . $resourcePath . ($query ? "?{$query}" : ''),
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
