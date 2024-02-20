<?php
// Replace the following values with your own
$prodUrl = '<REPLACE_WITH_PROD_URL>';
$token = '<REPLACE_WITH_YOUR_API_KEY>';

$headers = [
    'Authorization: Bearer ' . $token,
    'Content-Type: application/json'
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

$ch = curl_init($prodUrl . '/api/v1/complaints');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_POSTFIELDS, $body);

$response = curl_exec($ch);

if($response === false)
{
    echo 'Curl error: ' . curl_error($ch);
}
else
{
    echo $response;
}

curl_close($ch);
?>
