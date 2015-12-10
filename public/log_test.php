<?php

require_once "../lib/Log.php";
$myLog = new Log('cli');
$myLog->logInfo('message');
$myLog->logError('message');
