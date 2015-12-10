<?php

function logMessage($logLevel, $message)
{
	$today = date("Y-m-d");
	$filename = 'log-'.$today.'log';
	$todayLog = date("Y-m-d h:i:s");
	$handle = fopen($filename, 'a');
	fwrite($handle, $todayLog.' '.$logLevel .' '.$message.PHP_EOL);
	fclose($handle);
}
function logInfo($message)
{
	logMessage("INFO", $message);
}
function logError($message)
{
	logMessage("ERROR", $message);
}

	// logMessage("INFO", "This is an info message.");		
logInfo("This is an info message");
	// logMessage("ERROR", "This is an error message.");		
logError("This is an error message");