<?php
// Ejecutar: composer require guzzlehttp/guzzle:*
require'vendor/autoload.php';

$headers=array(
'Content-Type'=>'application/x-www-form-urlencoded',
'Accept'=>'application/json',
);

$client= new \GuzzleHttp\Client();

try{
    $response=$client->request('DELETE','localhost:7474/api/v1/contacts/group/remove?key=AQUI_SU_KEY&client=AQUI_SU_ID&group-id=AQUI_ID_GRUPO&id=AQUI_ID_CONTACTO',
    array('headers'=>$headers,));
    print_r($response->getBody()->getContents());
    }
    catch(\GuzzleHttp\Exception\BadResponseException $e){
    // Manejar excepciones o errores de API
    print_r($e->getMessage());
    }