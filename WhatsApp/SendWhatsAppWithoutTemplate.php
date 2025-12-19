<?php
// Ejecutar: composer require guzzlehttp/guzzle:*
require 'vendor/autoload.php';

$clientId = "AQUI_SU_CLIENT_ID";
$key = "AQUI_SU_SECRET_KEY";
$phoneSenderId = "AQUI_EL_ID_DEL_NUMERO_DE_TELEFONO_REMITENTE";
$from_phone_meta_id = "AQUI_EL_META_ID_DEL_TELEFONO";
$phone = "AQUI_EL_TELEFONO_DESTINO";
$message = "AQUI_EL_MENSAJE";

$client = new \GuzzleHttp\Client();

$body = [
    "from_phone_meta_id" => $from_phone_meta_id,
    "phone" => $phone,
    "message" => [
        "type" => "text",
        "value" => $message
    ]
];

$response = $client->post("https://www.onurix.com/api/v1/whatsapp/send/no-template?key=$key&client=$clientId&phone-sender-id=$phoneSenderId", [
    'headers' => ['Content-Type' => 'application/json'],
    'body' => json_encode($body)
]);

echo $response->getBody()->getContents();
