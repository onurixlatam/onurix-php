<?php
// Ejecutar: composer require guzzlehttp/guzzle:*
require'vendor/autoload.php';

$clientId = "AQUI_SU_CLIENT";
$key = "AQUI_SU_KEY";
$template = "AQUI_EL_NOMBRE_DE_LA_PLANTILLA";
$client = new \GuzzleHttp\Client();
$headers = [
  'Content-Type' => 'application/json'
];
//$data = ['phone' => '+573201234567','body' => ['Parametro1','Parametro2']];
$data = 'AQUI_EL_ARREGLO_CON_LOS_VALORES_PARA_LA_PLANTILLA';
$response = $client->post("https://www.onurix.com/api/v1/whatsapp/send?key=$key&client=$clientId&template=$template",['body' => json_encode($data)]);
echo $response->getBody()->getContents();
