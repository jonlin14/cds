<?php

    require_once __DIR__."/../vendor/autoload.php";
    require_once __DIR__."/../src/cd.php";

    session_start();

    if (empty($_SESSION['list_of_cds'])) {
        $_SESSION['list_of_cds'] = array();
    }

    $app = new Silex\Application();
    $app->register(new Silex\Provider\TwigServiceProvider(), array (
        'twig.path'=>__DIR__.'/../views'
    ));

    $app-> get("/", function() use ($app) {
        return $app['twig'] -> render('front.php', array('cd' => CD::getAll()));
    });

    return $app;

















?>
