<?php

require_once "App.php";

$app = new App();

$app->get('/', function(){
    echo json_encode(array("version"=>" 0.1"));
});

$app->get('/hola', function(){
    $missatge="hola a tothom";
    echo $missatge;
});

$app->get('/hola/{nom}', function(){
    $nom=App::param('nom');
    echo "hola $nom";
});

$app->run();