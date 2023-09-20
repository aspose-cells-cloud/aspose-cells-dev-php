<?php
/*--------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="CellsDevApi.cs">
 *   Copyright (c) 2023 Aspose.Cells Dev
 * </copyright>
 * <summary>
 *   Permission is hereby granted, free of charge, to any person obtaining a copy
 *  of this software and associated documentation files (the "Software"), to deal
 *  in the Software without restriction, including without limitation the rights
 *  to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 *  copies of the Software, and to permit persons to whom the Software is
 *  furnished to do so, subject to the following conditions:
 * 
 *  The above copyright notice and this permission notice shall be included in all
 *  copies or substantial portions of the Software.
 * 
 *  THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 *  IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 *  FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 *  AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 *  LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 *  OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
 *  SOFTWARE.
 * </summary>
 *--------------------------------------------------------------------------------------------------------------------
*/

namespace Aspose\Cells\Dev\Api;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\RequestOptions;
use Aspose\Cells\Dev\ApiException;
use Aspose\Cells\Dev\Configuration;
use Aspose\Cells\Dev\HeaderSelector;
use Aspose\Cells\Dev\ObjectSerializer;

 use Aspose\Cells\Dev\Model\ConvertRequest;
 use Aspose\Cells\Dev\Model\DigitalSignaturFile;
 use Aspose\Cells\Dev\Model\DigitalSignaturRequest;
 use Aspose\Cells\Dev\Model\MergeRequest;
 use Aspose\Cells\Dev\Model\ProtectionRequest;
 use Aspose\Cells\Dev\Model\ReplaceRequest;
 use Aspose\Cells\Dev\Model\RequestFile;
 use Aspose\Cells\Dev\Model\RequestParameter;
 use Aspose\Cells\Dev\Model\ResponseFile;
 use Aspose\Cells\Dev\Model\ResponseFiles;
 use Aspose\Cells\Dev\Model\SearchRequest;
 use Aspose\Cells\Dev\Model\SplitRequest;
 use Aspose\Cells\Dev\Model\TextItem;
 use Aspose\Cells\Dev\Model\TextItems;

class CellsDevApi
{    

    /**
     * @var ClientInterface
     */
    protected $client;

    /**
     * @var Configuration
     */
    protected $config;
    protected $headerSelector;

    protected $_appVersion;
    protected $_baseUrl;

    /**
     * @param ClientInterface $client
     * @param Configuration   $config
     * @param HeaderSelector  $selector
     */
    public function __construct(
        $baseUrl="https://api.conholdate.cloud",$version ="v1.0"
    ) {
        $this->_appVersion = $version;
        $this->_baseUrl = substr($baseUrl,-1)=="/"?substr($baseUrl,0,strlen($baseUrl)-1):$baseUrl;

        $this->client =  new Client();
        $this->config =  new Configuration();
        $this->headerSelector =  new HeaderSelector();
        $grantType = "client_credentials";
        $this->config->setHost($this->_baseUrl."/".$this->_appVersion);
        $defaultHost =  $this->config->getHost();
        $this->config->setHost($this->_baseUrl);
        $this->config->setHost( $defaultHost );
    }

    /**
     * @return Configuration
     */
    public function getConfig()
    {
        return $this->config;
    }

    /// <summary>
    /// </summary>
    /// <param name="request">Request. <see cref="GetHealthStatusRequest" /></param>
    public function getHealthStatus()
    {
        list($response) = $this->getHealthStatusWithHttpInfo();
        return  $response;
    }

    /// <summary>
    /// </summary>
    /// <param name="request">Request. <see cref="GetHealthStatusRequest" /></param>
    public function getHealthStatusWithHttpInfo()
    {
        $returnType = '\Aspose\Cells\Dev\Model\string';
        $request = $this->getHealthStatusRequest();
        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? $e->getResponse()->getBody()->getContents() : null
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
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = $responseBody->getContents();
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
                        $returnType,
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /// <summary>
    /// </summary>
    /// <param name="request">Request. <see cref="GetHealthStatusRequest" /></param>
    public function getHealthStatusAsync()
    {
        return $this->getHealthStatusAsyncWithHttpInfo()
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /// <summary>
    /// </summary>
    /// <param name="request">Request. <see cref="GetHealthStatusRequest" /></param>
    public function getHealthStatusAsyncWithHttpInfo()
    {
        $returnType = 'string';
        $request = $this->getHealthStatusRequest();

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
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
                        $response->getBody()
                    );
                }
            );
    }

    /// <summary>
    /// </summary>
    /// <param name="request">Request. <see cref="GetHealthStatusRequest" /></param>
    public function getHealthStatusRequest()
    {
        $resourcePath = '/cells';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        $headers = $this->headerSelector->selectHeaders(
            ['application/json'],
            ['application/json']
        );
        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $query = \GuzzleHttp\Psr7\Query::build($queryParams);
        return new Request(
            'GET',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /// <summary>
    /// </summary>
    /// <param name="request">Request. <see cref="PostSearchRequest" /></param>
    public function postSearch( SearchRequest $request )
    {
        list($response) = $this->postSearchWithHttpInfo($request );
        return  $response;
    }

    /// <summary>
    /// </summary>
    /// <param name="request">Request. <see cref="PostSearchRequest" /></param>
    public function postSearchWithHttpInfo( SearchRequest $request )
    {
        $returnType = '\Aspose\Cells\Dev\Model\TextItems';
        $request = $this->postSearchRequest(  $request );
        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? $e->getResponse()->getBody()->getContents() : null
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
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = $responseBody->getContents();
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
                        $returnType,
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /// <summary>
    /// </summary>
    /// <param name="request">Request. <see cref="PostSearchRequest" /></param>
    public function postSearchAsync( SearchRequest $request )
    {
        return $this->postSearchAsyncWithHttpInfo(  $request )
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /// <summary>
    /// </summary>
    /// <param name="request">Request. <see cref="PostSearchRequest" /></param>
    public function postSearchAsyncWithHttpInfo( SearchRequest $request )
    {
        $returnType = '\Aspose\Cells\Cloud\Model\TextItems';
        $request = $this->postSearchRequest( $request );

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
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
                        $response->getBody()
                    );
                }
            );
    }

    /// <summary>
    /// </summary>
    /// <param name="request">Request. <see cref="PostSearchRequest" /></param>
    public function postSearchRequest( SearchRequest $request )
    {
        if ($request === null) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $request when calling postSearch'
            );
        }
        $resourcePath = '/cells/content/search';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        $headers = $this->headerSelector->selectHeaders(
            ['application/json'],
            ['application/json']
        );
        $httpBody = $request;
        // \stdClass has no __toString(), so we should encode it manually
        if ($httpBody instanceof \stdClass && $headers['Content-Type'] === 'application/json') {
            $httpBody = \GuzzleHttp\json_encode($httpBody);
        }
        else if (gettype($httpBody) == 'array' && $headers['Content-Type'] === 'application/json') {
            $httpBody = json_encode(ObjectSerializer::sanitizeForSerialization($httpBody));
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

        $query = \GuzzleHttp\Psr7\Query::build($queryParams);
        return new Request(
            'POST',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /// <summary>
    /// </summary>
    /// <param name="request">Request. <see cref="PostReplaceRequest" /></param>
    public function postReplace( ReplaceRequest $request )
    {
        list($response) = $this->postReplaceWithHttpInfo($request );
        return  $response;
    }

    /// <summary>
    /// </summary>
    /// <param name="request">Request. <see cref="PostReplaceRequest" /></param>
    public function postReplaceWithHttpInfo( ReplaceRequest $request )
    {
        $returnType = '\Aspose\Cells\Dev\Model\ResponseFiles';
        $request = $this->postReplaceRequest(  $request );
        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? $e->getResponse()->getBody()->getContents() : null
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
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = $responseBody->getContents();
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
                        $returnType,
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /// <summary>
    /// </summary>
    /// <param name="request">Request. <see cref="PostReplaceRequest" /></param>
    public function postReplaceAsync( ReplaceRequest $request )
    {
        return $this->postReplaceAsyncWithHttpInfo(  $request )
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /// <summary>
    /// </summary>
    /// <param name="request">Request. <see cref="PostReplaceRequest" /></param>
    public function postReplaceAsyncWithHttpInfo( ReplaceRequest $request )
    {
        $returnType = '\Aspose\Cells\Cloud\Model\ResponseFiles';
        $request = $this->postReplaceRequest( $request );

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
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
                        $response->getBody()
                    );
                }
            );
    }

    /// <summary>
    /// </summary>
    /// <param name="request">Request. <see cref="PostReplaceRequest" /></param>
    public function postReplaceRequest( ReplaceRequest $request )
    {
        if ($request === null) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $request when calling postReplace'
            );
        }
        $resourcePath = '/cells/content/replace';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        $headers = $this->headerSelector->selectHeaders(
            ['application/json'],
            ['application/json']
        );
        $httpBody = $request;
        // \stdClass has no __toString(), so we should encode it manually
        if ($httpBody instanceof \stdClass && $headers['Content-Type'] === 'application/json') {
            $httpBody = \GuzzleHttp\json_encode($httpBody);
        }
        else if (gettype($httpBody) == 'array' && $headers['Content-Type'] === 'application/json') {
            $httpBody = json_encode(ObjectSerializer::sanitizeForSerialization($httpBody));
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

        $query = \GuzzleHttp\Psr7\Query::build($queryParams);
        return new Request(
            'POST',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /// <summary>
    /// </summary>
    /// <param name="request">Request. <see cref="PostConvertWorkbookRequest" /></param>
    public function postConvertWorkbook( ConvertRequest $request )
    {
        list($response) = $this->postConvertWorkbookWithHttpInfo($request );
        return  $response;
    }

    /// <summary>
    /// </summary>
    /// <param name="request">Request. <see cref="PostConvertWorkbookRequest" /></param>
    public function postConvertWorkbookWithHttpInfo( ConvertRequest $request )
    {
        $returnType = '\Aspose\Cells\Dev\Model\ResponseFiles';
        $request = $this->postConvertWorkbookRequest(  $request );
        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? $e->getResponse()->getBody()->getContents() : null
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
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = $responseBody->getContents();
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
                        $returnType,
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /// <summary>
    /// </summary>
    /// <param name="request">Request. <see cref="PostConvertWorkbookRequest" /></param>
    public function postConvertWorkbookAsync( ConvertRequest $request )
    {
        return $this->postConvertWorkbookAsyncWithHttpInfo(  $request )
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /// <summary>
    /// </summary>
    /// <param name="request">Request. <see cref="PostConvertWorkbookRequest" /></param>
    public function postConvertWorkbookAsyncWithHttpInfo( ConvertRequest $request )
    {
        $returnType = '\Aspose\Cells\Cloud\Model\ResponseFiles';
        $request = $this->postConvertWorkbookRequest( $request );

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
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
                        $response->getBody()
                    );
                }
            );
    }

    /// <summary>
    /// </summary>
    /// <param name="request">Request. <see cref="PostConvertWorkbookRequest" /></param>
    public function postConvertWorkbookRequest( ConvertRequest $request )
    {
        if ($request === null) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $request when calling postConvertWorkbook'
            );
        }
        $resourcePath = '/cells/convert';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        $headers = $this->headerSelector->selectHeaders(
            ['application/json'],
            ['application/json']
        );
        $httpBody = $request;
        // \stdClass has no __toString(), so we should encode it manually
        if ($httpBody instanceof \stdClass && $headers['Content-Type'] === 'application/json') {
            $httpBody = \GuzzleHttp\json_encode($httpBody);
        }
        else if (gettype($httpBody) == 'array' && $headers['Content-Type'] === 'application/json') {
            $httpBody = json_encode(ObjectSerializer::sanitizeForSerialization($httpBody));
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

        $query = \GuzzleHttp\Psr7\Query::build($queryParams);
        return new Request(
            'POST',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /// <summary>
    /// </summary>
    /// <param name="request">Request. <see cref="PostMergeRequest" /></param>
    public function postMerge( MergeRequest $request )
    {
        list($response) = $this->postMergeWithHttpInfo($request );
        return  $response;
    }

    /// <summary>
    /// </summary>
    /// <param name="request">Request. <see cref="PostMergeRequest" /></param>
    public function postMergeWithHttpInfo( MergeRequest $request )
    {
        $returnType = '\Aspose\Cells\Dev\Model\ResponseFile';
        $request = $this->postMergeRequest(  $request );
        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? $e->getResponse()->getBody()->getContents() : null
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
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = $responseBody->getContents();
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
                        $returnType,
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /// <summary>
    /// </summary>
    /// <param name="request">Request. <see cref="PostMergeRequest" /></param>
    public function postMergeAsync( MergeRequest $request )
    {
        return $this->postMergeAsyncWithHttpInfo(  $request )
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /// <summary>
    /// </summary>
    /// <param name="request">Request. <see cref="PostMergeRequest" /></param>
    public function postMergeAsyncWithHttpInfo( MergeRequest $request )
    {
        $returnType = '\Aspose\Cells\Cloud\Model\ResponseFile';
        $request = $this->postMergeRequest( $request );

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
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
                        $response->getBody()
                    );
                }
            );
    }

    /// <summary>
    /// </summary>
    /// <param name="request">Request. <see cref="PostMergeRequest" /></param>
    public function postMergeRequest( MergeRequest $request )
    {
        if ($request === null) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $request when calling postMerge'
            );
        }
        $resourcePath = '/cells/merge';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        $headers = $this->headerSelector->selectHeaders(
            ['application/json'],
            ['application/json']
        );
        $httpBody = $request;
        // \stdClass has no __toString(), so we should encode it manually
        if ($httpBody instanceof \stdClass && $headers['Content-Type'] === 'application/json') {
            $httpBody = \GuzzleHttp\json_encode($httpBody);
        }
        else if (gettype($httpBody) == 'array' && $headers['Content-Type'] === 'application/json') {
            $httpBody = json_encode(ObjectSerializer::sanitizeForSerialization($httpBody));
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

        $query = \GuzzleHttp\Psr7\Query::build($queryParams);
        return new Request(
            'POST',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /// <summary>
    /// </summary>
    /// <param name="request">Request. <see cref="PostEncryptWithPasswordRequest" /></param>
    public function postEncryptWithPassword( ProtectionRequest $request )
    {
        list($response) = $this->postEncryptWithPasswordWithHttpInfo($request );
        return  $response;
    }

    /// <summary>
    /// </summary>
    /// <param name="request">Request. <see cref="PostEncryptWithPasswordRequest" /></param>
    public function postEncryptWithPasswordWithHttpInfo( ProtectionRequest $request )
    {
        $returnType = '\Aspose\Cells\Dev\Model\ResponseFiles';
        $request = $this->postEncryptWithPasswordRequest(  $request );
        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? $e->getResponse()->getBody()->getContents() : null
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
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = $responseBody->getContents();
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
                        $returnType,
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /// <summary>
    /// </summary>
    /// <param name="request">Request. <see cref="PostEncryptWithPasswordRequest" /></param>
    public function postEncryptWithPasswordAsync( ProtectionRequest $request )
    {
        return $this->postEncryptWithPasswordAsyncWithHttpInfo(  $request )
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /// <summary>
    /// </summary>
    /// <param name="request">Request. <see cref="PostEncryptWithPasswordRequest" /></param>
    public function postEncryptWithPasswordAsyncWithHttpInfo( ProtectionRequest $request )
    {
        $returnType = '\Aspose\Cells\Cloud\Model\ResponseFiles';
        $request = $this->postEncryptWithPasswordRequest( $request );

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
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
                        $response->getBody()
                    );
                }
            );
    }

    /// <summary>
    /// </summary>
    /// <param name="request">Request. <see cref="PostEncryptWithPasswordRequest" /></param>
    public function postEncryptWithPasswordRequest( ProtectionRequest $request )
    {
        if ($request === null) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $request when calling postEncryptWithPassword'
            );
        }
        $resourcePath = '/cells/protect/encrypt-with-password';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        $headers = $this->headerSelector->selectHeaders(
            ['application/json'],
            ['application/json']
        );
        $httpBody = $request;
        // \stdClass has no __toString(), so we should encode it manually
        if ($httpBody instanceof \stdClass && $headers['Content-Type'] === 'application/json') {
            $httpBody = \GuzzleHttp\json_encode($httpBody);
        }
        else if (gettype($httpBody) == 'array' && $headers['Content-Type'] === 'application/json') {
            $httpBody = json_encode(ObjectSerializer::sanitizeForSerialization($httpBody));
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

        $query = \GuzzleHttp\Psr7\Query::build($queryParams);
        return new Request(
            'POST',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /// <summary>
    /// </summary>
    /// <param name="request">Request. <see cref="PostDecryptWithPasswordRequest" /></param>
    public function postDecryptWithPassword( ProtectionRequest $request )
    {
        list($response) = $this->postDecryptWithPasswordWithHttpInfo($request );
        return  $response;
    }

    /// <summary>
    /// </summary>
    /// <param name="request">Request. <see cref="PostDecryptWithPasswordRequest" /></param>
    public function postDecryptWithPasswordWithHttpInfo( ProtectionRequest $request )
    {
        $returnType = '\Aspose\Cells\Dev\Model\ResponseFiles';
        $request = $this->postDecryptWithPasswordRequest(  $request );
        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? $e->getResponse()->getBody()->getContents() : null
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
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = $responseBody->getContents();
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
                        $returnType,
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /// <summary>
    /// </summary>
    /// <param name="request">Request. <see cref="PostDecryptWithPasswordRequest" /></param>
    public function postDecryptWithPasswordAsync( ProtectionRequest $request )
    {
        return $this->postDecryptWithPasswordAsyncWithHttpInfo(  $request )
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /// <summary>
    /// </summary>
    /// <param name="request">Request. <see cref="PostDecryptWithPasswordRequest" /></param>
    public function postDecryptWithPasswordAsyncWithHttpInfo( ProtectionRequest $request )
    {
        $returnType = '\Aspose\Cells\Cloud\Model\ResponseFiles';
        $request = $this->postDecryptWithPasswordRequest( $request );

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
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
                        $response->getBody()
                    );
                }
            );
    }

    /// <summary>
    /// </summary>
    /// <param name="request">Request. <see cref="PostDecryptWithPasswordRequest" /></param>
    public function postDecryptWithPasswordRequest( ProtectionRequest $request )
    {
        if ($request === null) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $request when calling postDecryptWithPassword'
            );
        }
        $resourcePath = '/cells/protect/decrypt-with-password';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        $headers = $this->headerSelector->selectHeaders(
            ['application/json'],
            ['application/json']
        );
        $httpBody = $request;
        // \stdClass has no __toString(), so we should encode it manually
        if ($httpBody instanceof \stdClass && $headers['Content-Type'] === 'application/json') {
            $httpBody = \GuzzleHttp\json_encode($httpBody);
        }
        else if (gettype($httpBody) == 'array' && $headers['Content-Type'] === 'application/json') {
            $httpBody = json_encode(ObjectSerializer::sanitizeForSerialization($httpBody));
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

        $query = \GuzzleHttp\Psr7\Query::build($queryParams);
        return new Request(
            'POST',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /// <summary>
    /// </summary>
    /// <param name="request">Request. <see cref="PostDigitalSignatureRequest" /></param>
    public function postDigitalSignature( DigitalSignaturRequest $request )
    {
        list($response) = $this->postDigitalSignatureWithHttpInfo($request );
        return  $response;
    }

    /// <summary>
    /// </summary>
    /// <param name="request">Request. <see cref="PostDigitalSignatureRequest" /></param>
    public function postDigitalSignatureWithHttpInfo( DigitalSignaturRequest $request )
    {
        $returnType = '\Aspose\Cells\Dev\Model\ResponseFiles';
        $request = $this->postDigitalSignatureRequest(  $request );
        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? $e->getResponse()->getBody()->getContents() : null
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
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = $responseBody->getContents();
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
                        $returnType,
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /// <summary>
    /// </summary>
    /// <param name="request">Request. <see cref="PostDigitalSignatureRequest" /></param>
    public function postDigitalSignatureAsync( DigitalSignaturRequest $request )
    {
        return $this->postDigitalSignatureAsyncWithHttpInfo(  $request )
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /// <summary>
    /// </summary>
    /// <param name="request">Request. <see cref="PostDigitalSignatureRequest" /></param>
    public function postDigitalSignatureAsyncWithHttpInfo( DigitalSignaturRequest $request )
    {
        $returnType = '\Aspose\Cells\Cloud\Model\ResponseFiles';
        $request = $this->postDigitalSignatureRequest( $request );

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
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
                        $response->getBody()
                    );
                }
            );
    }

    /// <summary>
    /// </summary>
    /// <param name="request">Request. <see cref="PostDigitalSignatureRequest" /></param>
    public function postDigitalSignatureRequest( DigitalSignaturRequest $request )
    {
        if ($request === null) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $request when calling postDigitalSignature'
            );
        }
        $resourcePath = '/cells/protect/digital-signature';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        $headers = $this->headerSelector->selectHeaders(
            ['application/json'],
            ['application/json']
        );
        $httpBody = $request;
        // \stdClass has no __toString(), so we should encode it manually
        if ($httpBody instanceof \stdClass && $headers['Content-Type'] === 'application/json') {
            $httpBody = \GuzzleHttp\json_encode($httpBody);
        }
        else if (gettype($httpBody) == 'array' && $headers['Content-Type'] === 'application/json') {
            $httpBody = json_encode(ObjectSerializer::sanitizeForSerialization($httpBody));
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

        $query = \GuzzleHttp\Psr7\Query::build($queryParams);
        return new Request(
            'POST',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /// <summary>
    /// </summary>
    /// <param name="request">Request. <see cref="PostSplitRequest" /></param>
    public function postSplit( SplitRequest $request )
    {
        list($response) = $this->postSplitWithHttpInfo($request );
        return  $response;
    }

    /// <summary>
    /// </summary>
    /// <param name="request">Request. <see cref="PostSplitRequest" /></param>
    public function postSplitWithHttpInfo( SplitRequest $request )
    {
        $returnType = '\Aspose\Cells\Dev\Model\ResponseFiles';
        $request = $this->postSplitRequest(  $request );
        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? $e->getResponse()->getBody()->getContents() : null
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
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = $responseBody->getContents();
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
                        $returnType,
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /// <summary>
    /// </summary>
    /// <param name="request">Request. <see cref="PostSplitRequest" /></param>
    public function postSplitAsync( SplitRequest $request )
    {
        return $this->postSplitAsyncWithHttpInfo(  $request )
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /// <summary>
    /// </summary>
    /// <param name="request">Request. <see cref="PostSplitRequest" /></param>
    public function postSplitAsyncWithHttpInfo( SplitRequest $request )
    {
        $returnType = '\Aspose\Cells\Cloud\Model\ResponseFiles';
        $request = $this->postSplitRequest( $request );

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
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
                        $response->getBody()
                    );
                }
            );
    }

    /// <summary>
    /// </summary>
    /// <param name="request">Request. <see cref="PostSplitRequest" /></param>
    public function postSplitRequest( SplitRequest $request )
    {
        if ($request === null) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $request when calling postSplit'
            );
        }
        $resourcePath = '/cells/split';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        $headers = $this->headerSelector->selectHeaders(
            ['application/json'],
            ['application/json']
        );
        $httpBody = $request;
        // \stdClass has no __toString(), so we should encode it manually
        if ($httpBody instanceof \stdClass && $headers['Content-Type'] === 'application/json') {
            $httpBody = \GuzzleHttp\json_encode($httpBody);
        }
        else if (gettype($httpBody) == 'array' && $headers['Content-Type'] === 'application/json') {
            $httpBody = json_encode(ObjectSerializer::sanitizeForSerialization($httpBody));
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

        $query = \GuzzleHttp\Psr7\Query::build($queryParams);
        return new Request(
            'POST',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    private function execute( $request , $returnType)
    {
     try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? $e->getResponse()->getBody()->getContents() : null
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
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = $responseBody->getContents();
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
                        $returnType,
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
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