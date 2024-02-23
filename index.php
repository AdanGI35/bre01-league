<?php


require "vendor/autoload.php";
require "config/autoload.php";


$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();


$router = new Router();

$router->handleRequest($_GET);