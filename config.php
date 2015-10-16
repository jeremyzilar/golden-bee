<?php

// Config options
ini_set('display_errors',1);
ini_set('display_startup_errors',1);
error_reporting(-1);

$doc_root = rtrim($_SERVER['DOCUMENT_ROOT'], '/');
//$request_uri — comes from the app specific function.php

$host = 'http://' . $_SERVER['HTTP_HOST'] . '/' . substr(dirname(__FILE__), strlen($_SERVER['DOCUMENT_ROOT']));
define('HOST', $host);

$root = $doc_root . '/' . substr(dirname(__FILE__), strlen($_SERVER['DOCUMENT_ROOT']));
define('ROOT', $root);

$func = $root . '/functions';
define('FUNC', $func);

$inc = $root . '/inc';
define('INC', $inc);

$img = HOST . '/assets/img';
define('IMG', $img);

$actual_link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
$basename = str_replace('.php','',basename($actual_link));
$basename = ($basename == 'golden-bee') ? '' : $basename .'-space';
