<?php
namespace Models;

use GuzzleHttp\Client;

class RequestFacade
{

    public function makeRequest(Client $client, array $params, array $post_data, string $query_str, string $method, string $paramType)
    {

        foreach ($params as $key => $value) {
            if (!empty($post_data['args'][$value])) {
                $body[$key] = $post_data['args'][$value];
            }
        }

        $result = $client->request($method, $query_str, [
            $paramType => $body
        ]);

        return $result;
    }

}
