<?php
// Ejecutar: composer require guzzlehttp/guzzle:*
require'vendor/autoload.php';

$headers=array(
'Content-Type'=>'application/x-www-form-urlencoded',
'Accept'=>'application/json',
);

$client= new \GuzzleHttp\Client();
$request_body=array(
    "client"=>"3",
    "key"=>"a3f3f9ea627d496c57e2cd354bb55280354b5be26491dcc974e18",
    "name"=>"alfredo",
    "lastname" => "sandoval",
    "email" => "laps1308+015@gmail.com",
    "phone" => "3209345518"
);
try{
    $response=$client->request('POST','localhost:7474/api/v1/contacts/create',
    array('headers'=>$headers,'form_params'=>$request_body,));
    print_r($response->getBody()->getContents());
    }
    catch(\GuzzleHttp\Exception\BadResponseException $e){
    // Manejar excepciones o errores de API
    print_r($e->getMessage());
    }