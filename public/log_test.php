<?php

require_once "Log.php";
$myLog = new Log('cli');
$myLog->logInfo('message');
$myLog->logError('message');
var_dump($myLog->filename);