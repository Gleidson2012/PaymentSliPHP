<?php

if (!defined('DS')) {
    define('DS', DIRECTORY_SEPARATOR);
}

if (!defined('SRC_DIR')) {
    define('SRC_DIR', dirname(__FILE__) . DS . 'src' . DS);
}

ini_set('include_path', ini_get('include_path') . ':' . SRC_DIR);

if(!@include('PHPUnit' . DS . 'Autoload.php')){
	throw new Exception('Framework PHPUnit não encontrado. Adicione o PHPUnit/Autoload.php no include_path.');
}
?>