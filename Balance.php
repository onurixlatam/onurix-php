<?php

//Ejecutar composer require guzzlehttp/guzzle

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use GuzzleHttp\Client;
use GuzzleHttp\Psr7\Request;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;


class ApiController extends AbstractController
{
     /**
     * @Route("/api", name="app_api")
     */
    public function getBalance()
    {
        $client = new Client([
            'base_uri' => 'https://www.onurix.com/api/v1/'
        ]);
        $request = new Request('GET','balance?key=582876138efc20d00c3bd32c046edff0cdd3369061d4c5123747d&client=2412');
        $response = $client->sendAsync($request)->wait();
        //dump($response->getBody()->getContents());exit;
        return $response->getBody()->getContents();
    }
}
