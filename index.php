<?php

require_once("vendor/autoload.php");

use \Slim\Slim;
use Hcode\Page;
use Hcode\PageAdmin;

$app = new Slim();

$app->config('debug', true);

// Rota para a raiz do site
$app->get('/', function() {
    $page = new Page();
    $page->setTpl('index');
});

// Rota para o admin do site
$app->get('/admin', function() {
    $page = new PageAdmin();
    $page->setTpl('index');
});

// Roda todo o template
$app->run();
?>