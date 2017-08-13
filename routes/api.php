<?php 

//API group
$app->group('/api', function() use ($app){
    // Verson group
    $app->group('/v1', function() use ($app){

        $app->get('/users', function($request, $reponse){
            echo "home";
        });

        $app->get('/user/{id}', function($request, $reponse, $args){
            echo "home 2";
        });

        $app->post('/create', function($request, $reponse){
            echo "create";
            // echo $request->getParam('post_name');
        });

        $app->put('/update{id}', function($request, $reponse, $args){
            echo "update";
        });

        $app->delete('/delete{id}', function($request, $reponse, $args){
            echo "create";
        });
    });

});