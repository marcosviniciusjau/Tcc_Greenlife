<?php

define('BASEDIR', dirname(__FILE__, 2));
define('VIEWS', BASEDIR . '/App/View/modules/');
define('UPLOADS', BASEDIR . '/App/View/Uploads/');
define('PATH_VIEW', dirname(__FILE__, 2) . '/App/View/');


$_ENV['db']['host'] = $_ENV['DB_HOST'];
$_ENV['db']['user'] = $_ENV['DB_USER'];
$_ENV['db']['pass'] = $_ENV['DB_PASS'];
$_ENV['db']['database'] = $_ENV['DB_DATABASE'];
