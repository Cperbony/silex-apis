<?php
/**
 * Created by PhpStorm.
 * User: Claus Perbony
 * Date: 28/03/2018
 * Time: 00:34
 */

require_once __DIR__ . '/../bootstrap.php';

use Code\Sis\Entity\Cliente;
use Code\Sis\Mapper\ClienteMapper;
use Symfony\Component\HttpFoundation\Response;
use Code\Sis\Service\ClienteService;

$response = new Response();

$app['clienteService'] = function () {
    $clienteEntity = new Cliente();
    $clienteMapper = new ClienteMapper();

    $clienteService = new ClienteService($clienteEntity, $clienteMapper);
    return $clienteService;

};

$app->get('/', function () {
    return "Olá Mundo sem response";
});

$app->get('/ola', function () use ($response) {
    $response->setContent("Olá Mundo Silex com Response");
    return $response;
    //echo "Olá Mundo Silex";
});

$app->get('/ola/{nome}', function ($nome) {
    return "Olá {$nome}";
});

$app->get('/cliente', function () use ($app) {
    $dados['nome'] = "Claus Perboni";
    $dados['email'] = "claus@email.com";

    //Desacoplar estas instâncias
//    $clienteEntity = new Cliente();
//    $clienteMapper = new ClienteMapper();
//
//    $clienteService = new ClienteService($clienteEntity, $clienteMapper);
//    $result = $clienteService->insert($dados);

    $result = $app['clienteService']->insert($dados);

    return $app->json($result);
});

$app->run();