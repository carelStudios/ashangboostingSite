<?php
define('PATH', realpath('.'));
define('SUBFOLDER', false);
define('URL', 'https://carelstudios.github.io/ashangboostingsite/' );
define('STYLESHEETS_URL', 'https://carelstudios.github.io/ashangboostingsite/' );
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
