<?php
// Make sure to install Guzzle using Composer: composer require guzzlehttp/guzzle

use GuzzleHttp\Client;

// Replace the following values with your own
$prodUrl = '<REPLACE_WITH_PROD_URL>';
$token = '<REPLACE_WITH_YOUR_API_KEY>';

$client = new Client();
$headers = [
    'Authorization' => 'Bearer ' . $token,
    'Content-Type' => 'application/json'
];
$body = '{
  "complaintTypeId": 1,
  "customerBankAccountNumber": "1234567890",
  "customerName": "Nom du client",
  "customerPhoneNumber": "2250555607018",
  "customerEmail": "email@example.com",
  "description": "Description de la réclamation",
  "dynamicInfo": "{\"name\": \"my name\"}" // Objet stringifié
}';
$response = $client->request('POST', $prodUrl . '/api/v1/complaints', [
    'headers' => $headers,
    'body' => $body
]);

echo $response->getBody();
?>
