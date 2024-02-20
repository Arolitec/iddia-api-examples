<?php
require 'vendor/autoload.php';

use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;

$apiUrl = '<REPLACE_WITH_PROD_URL>/api/v1/complaint-types';
$token = '<REPLACE_WITH_YOUR_API_KEY>';

$client = new Client();

try {
    $response = $client->request('GET', $apiUrl, [
        'headers' => [
            'Authorization' => 'Bearer ' . $token,
            'Content-Type' => 'application/json',
        ]
    ]);

    echo $response->getBody();
} catch (RequestException $e) {
    if ($e->hasResponse()) {
        echo 'Erreur lors de la récupération des types de réclamations: ' . $e->getResponse()->getBody();
    } else {
        echo 'Erreur lors de la requête: ' . $e->getMessage();
    }
}
?>
