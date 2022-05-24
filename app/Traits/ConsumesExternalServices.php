<?php

namespace App\Traits;

use GuzzleHttp\Client;

trait ConsumesExternalServices
{
    public function makeRequest($method , $requestUrl , $formParams = [] ,
     $headers = [] , $queryParams = [] , $isJsonRequest = false )
    {
        $client = new Client([
            'base_url' => $this->baseUrl,
        ]);

        if(method_exists($this , 'resolveAuthorization')){
            $this->resolveAuthorization($queryParams , $headers , $formParams);
        }


        $response = $client->request($method , $requestUrl , [
            $isJsonRequest ? 'json' : 'form_params' => $formParams,
            'headers' => $headers,
            'query' => $queryParams,
        ]);

        $response = $response->getBody()->getContents();
        if(method_exists($this , 'decodeResponse')){
            $response =$this->decodeResponse($response);
        }

        return $response;

    }
}