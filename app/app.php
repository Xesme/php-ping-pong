<?php
    date_default_timezone_set('America/Los_Angeles');
    require_once __DIR__."/../vendor/autoload.php";
    require_once __DIR__."/../src/PingPongGenerator.php";


    $app = new Silex\Application();

    $app->register(new Silex\Provider\TwigServiceProvider(), ['twig.path' => __DIR__.'/../views']);

    $app->get("/", function() use($app) {
        return $app['twig']->render('ping-pong.html.twig');
    });

    $app->post('/result', function() use($app) {
        $input_number = new PingPongGenerator();
        $result = $input_number->makePingPong($_POST["number"]);
        // $new_num = $number->getNumber();
        $result = implode($result, " ");
        return $app['twig']->render('ping-pong-result.html.twig', array("result" => $result));
    });
    return $app;
?>
