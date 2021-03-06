<?php

define('ROOT_PATH', __DIR__);

require_once(ROOT_PATH.'/vendor/autoload.php');

ob_start("ob_gzhandler");

$oCrispus = new Crispus\Crispus(ROOT_PATH.'/config/config.json');

echo $oCrispus->render();
