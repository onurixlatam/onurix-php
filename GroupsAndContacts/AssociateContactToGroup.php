<?php
// Ejecutar: composer require guzzlehttp/guzzle:*
require'vendor/autoload.php';

$headers=array(
'Content-Type'=>'application/x-www-form-urlencoded',
'Accept'=>'application/json',
);

$client= new \GuzzleHttp\Client();
$request_body=array(
    "client"=>"AQUI_SU_CLIENT",
    "key"=>"AQUI_SU_KEY",
    "group-id"=>"AQUI_ID_GRUPO",
    "id" =>"AQUI_ID_CONTACTO"
);
try{
    $response=$client->request('POST','https://www.onurix.com/api/v1/contacts/group/add',
    array('headers'=>$headers,'form_params'=>$request_body,));
    print_r($response->getBody()->getContents());
    }
    catch(\GuzzleHttp\Exception\BadResponseException $e){
    // Manejar excepciones o errores de API
    print_r($e->getMessage());
    }