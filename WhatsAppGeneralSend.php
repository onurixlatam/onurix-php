<?php
// Ejecutar: composer require guzzlehttp/guzzle:*
require'vendor/autoload.php';

$clientId = "AQUI_SU_CLIENT";
$key = "AQUI_SU_KEY";
$templateId = "AQUI_EL_ID_DE_LA_PLANTILLA";
$client = new \GuzzleHttp\Client();
$headers = [
  'Content-Type' => 'application/json'
];

$data = 'AQUI_EL_ARREGLO_CON_LOS_VALORES_PARA_LA_PLANTILLA';
$response = $client->post("https://www.onurix.com/api/v1/whatsapp/send?key=$key&client=$clientId&templateId=$templateId",['body' => json_encode($data)]);
echo $response->getBody()->getContents();
