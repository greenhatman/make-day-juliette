<?php

namespace App\Library\Services;

class RootApi
{
    private $httpClient;
    private $baseUrl;
    private $apiKey;

    /**
     * DataServicesApi constructor.
     * @param \GuzzleHttp\Client $client
     */
    function __construct(\GuzzleHttp\Client $client)
    {
        $this->httpClient = $client;
        $this->baseUrl = env('ROOT_API_BASE_URL');
        $this->apiKey = env('ROOT_API_KEY');
    }

    function getGadgetModels()
    {
        $response = $this->httpClient->get(
            "{$this->baseUrl}/v1/insurance/modules/root_gadgets/models", [
            'auth' => [
                $this->apiKey,
                null
            ]
        ]);

        return $response->getBody()->getContents();
    }
}
