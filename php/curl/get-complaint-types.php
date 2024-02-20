<?php
$apiUrl = '<REPLACE_WITH_PROD_URL>/api/v1/complaint-types';
$token = '<REPLACE_WITH_YOUR_API_KEY>';

$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => $apiUrl,
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'GET',
  CURLOPT_HTTPHEADER => array(
    'Authorization: Bearer ' . $token,
    'Content-Type: application/json'
  ),
));

$response = curl_exec($curl);

curl_close($curl);

echo $response;
?>
