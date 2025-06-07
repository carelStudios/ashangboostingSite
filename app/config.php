<?php
define('PATH', realpath('.'));
define('SUBFOLDER', false);
define('URL', 'http://ashangboosting.store/' );
define('STYLESHEETS_URL', 'http://ashangboosting.store/' );
date_default_timezone_set('Asia/Manila');

/* 
 ini_set("display_errors","1");
error_reporting(E_ERROR);  */  

error_reporting(0);
return [
  'db' => [
    'name'    =>  'smmsite' ,
    'host'    =>  'localhost',
    'user'    =>  'root' ,
    'pass'    =>  'Marinay..023' ,
    'charset' =>  'utf8mb4'
  ]
];

?>
