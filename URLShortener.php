<?php
// Ejecutar: composer require guzzlehttp/guzzle:*
require'vendor/autoload.php';

$headers=array(
'Content-Type'=>'application/x-www-form-urlencoded',
'Accept'=>'application/json',
);

$client= new \GuzzleHttp\Client();

// Define la matriz del cuerpo de la solicitud.
$request_body = array(
     "client"=>"AQUI_SU_CLIENT",
     "key"=>"AQUI_SU_KEY",
     "name"=>"AQUI_NOMBE_DE_URL",
     "url-long"=>"AQUI_URL_LARGA",
     "alias"=>"OPCIONAL_AQUI_ALIAS",
     "is-premium" => "OPCIONAL_AQUI_TRUE_OR_FALSE_DEFAULT_FALSE",
     "group-name" => "OPCIONAL_AQUI_NOMBRE_DE_GRUPO",
     "domain-name" => "OPCIONAL_AQUI_NOMBRE_DOMINIO_REGISTRADO",
     "expiration-time-statistics" => "OPCIONAL_AQUI_TIEMPO_ALMACENAMIENTO-ESTADITICAS"
);

try{
$response=$client->request('POST','https://www.onurix.com/api/v1/url/short',array(
'headers'=>$headers,
'form_params'=>$request_body,
)
);
print_r($response->getBody()->getContents());
}
catch(\GuzzleHttp\Exception\BadResponseException $e){
// Manejar excepciones o errores de API
print_r($e->getMessage());
}
