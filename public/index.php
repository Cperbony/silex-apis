<?php
/**
 * Created by PhpStorm.
 * User: Claus Perbony
 * Date: 28/03/2018
 * Time: 00:34
 */

require_once __DIR__ . '/../bootstrap.php';

use Symfony\Component\HttpFoundation\Response;

$response = new Response();



$app->get('/', function ()  {
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

/*
 * TAREFA 1
 * Nessa fase do projeto, você instalará o Silex e criará 1 rotas principal,
 * apenas para garantir que tudo está configurado e funcionando.

1)Rota: /clientes

Com a rota /clientes, faça a simulação da listagem de clientes com
Nome, Email e CPF/CNPJ vindo de um array. O formato de exibição deve ser json.
 *
 */



$app->get('/clientes/{id}', function () use ($app) {

    $cliente = array (
        1 => array (
            'nome' => 'Claudinei Perboni',
            'email' => 'cperbony@gmail.com',
            'cpf' => '1234567890'
        ),
    );

    if(!$cliente) {
        $error = array('message' => 'Cliente não encontrado');

        return $app->json($error, 404);
    }
    return $app->json($cliente);
});


$app->run();