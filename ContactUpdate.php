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
    "id"=>"AQUI_ID_CONTACT",
    "name"=>"OPCIONAL_AQUI_NOMBRE_CONTACTO",
    "lastname" => "OPCIONAL_AQUI_APELLIDO_CONTACTO",
    "email" => "OPCIONAL_AQUI_EMAIL_CONTACTO",
    "phone" => "OPCIONAL_AQUI_TELEFONO_CONTACTO"
);
try{
    $response=$client->request('POST','localhost:7474/api/v1/contacts/update',
    array('headers'=>$headers,'form_params'=>$request_body,));
    print_r($response->getBody()->getContents());
    }
    catch(\GuzzleHttp\Exception\BadResponseException $e){
    // Manejar excepciones o errores de API
    print_r($e->getMessage());
    }