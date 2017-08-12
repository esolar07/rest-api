<?php

require 'vendor/autoload.php';

$app = new \Slim\App;

$container = $app->getContainer;


$app->get('/', function($request, $reponse){
    echo "home";
});

$app->get('/{id}', function($request, $reponse){
    echo "home 2";
});

$app->post('/create', function($request, $reponse){
    echo "create";
    // echo $request->getParam('post_name');
});

$app->put('/update{id}', function($request, $reponse){
    echo "update";
});

$app->delete('/delete{id}', function($request, $reponse){
    echo "create";
});

$app->run();