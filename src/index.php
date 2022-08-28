<?php

require 'C:\Users\Admin\composerphp\vendor\autoload.php';

use Monolog\Logger;
use Monolog\Handler\StreamHandler;

$logger = new Logger('nomedocanal');
$logger ->pushHandler(new StreamHandler(__DIR__ .'/App.log',Logger::DEBUG));
$logger ->info('Este e uma String de info');
$logger ->warning('Isto é um aviso...');
$logger ->error('Esta e uma mensagem de erro');

$variable = array(1, 17, "hello", null);
var_dump($variable);