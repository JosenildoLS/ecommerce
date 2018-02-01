<?php

require_once("vendor/autoload.php");

use \Slim\Slim;
use Hcode\Page;

$app = new Slim();

$app->config('debug', true);

// Rota para a raiz do site
$app->get('/', function() {
    $page = new Page();
    $page->setTpl('index');
});

// Roda todo o template
$app->run();
?>