<?php

if (!defined('DS')) {
    define('DS', DIRECTORY_SEPARATOR);
}

if (!defined('SRC_DIR')) {
    define('SRC_DIR', dirname(__FILE__) . DS . 'src');
}

ini_set('include_path', ini_get('include_path') . ':' . SRC_DIR);