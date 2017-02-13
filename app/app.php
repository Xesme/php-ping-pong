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
        $new_input = ($_POST['number']);
        $input_number = new PingPongGenerator($new_input);
        $input_number->makePingPong($new_input);
        // $new_num = $number->getNumber();
        return $app['twig']->render('ping-pong-result.html.twig', ["result" => $output_num]);
    });
    return $app;
?>
