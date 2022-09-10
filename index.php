<?php
require_once( './includes/_Globals.php' );
require_once( './includes/routes/Routes.php' );

function __autoload($class_name) {
      require_once './includes/classes/'.$class_name.'.php';
}

$app = new App();
$app->run();
