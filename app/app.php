
<?php
    require_once __DIR__ ."/../vendor/autoload.php";
    require_once __DIR__ ."/../src/task.php";

    session_start();

    $app = new Sliex\Application();
    
$app->register(new Silex\Provider\TwigServiceProvder(), array(
    'twig.path' => __DIR__.'/../views'

))
?>
