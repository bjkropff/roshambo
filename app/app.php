<?php
    require_once __DIR__."/../vendor/autoload.php";
    require_once __DIR__."/../src/RockPaperScissors.php";

    $app = new Silex\Application();

    $app->register(new Silex\Provider\TwigServiceProvider(), array(
        'twig.path'=>__DIR__."/../views"
    ));

    $app->get("/", function() use ($app){
        return $app['twig']->render('front.twig');
    });

    $app->get("/playgame", function() use ($app){
        $play1 = new RockPaperScissors($_GET['input1'], $_GET['input2']);

        return $app['twig']->render('playgame.twig', array('game_results' => $play1));
    });

    $app->get("/computer", function() use ($app){
        $computerpick = array(0 => 'scissors', 1 => 'rock', 2 => 'paper');
        $random_number = rand(0,2);
        $comp = new RockPaperScissors($_GET['input1'], $computerpick[$random_number]);

        return $app['twig']->render('computer.twig', array('WINNING' => $comp));

    });


    return $app;
?>
