<?php

class Log
{
	private $filename = '';
	private $handle = '';

	public function __construct($prefix='log')
	{
		$today = date("Y-m-d");		
		$this->setFilename($prefix.$today.'log');
		$this->setHandle(fopen($this->filename, 'a'));
	}
	public function __destruct ()
	{
		fclose($this->handle);
	}
	protected function setFilename($filename)
	{
		$this->filename = $filename;
	}
	protected function setHandle($handle)
	{
		$this->handle = $handle;
	}
	public function logMessage($logLevel, $message)
	{
		$todayLog = date("Y-m-d h:i:s");
		fwrite($this->handle, $todayLog.' '.$logLevel .' '.$message.PHP_EOL);
	}
	public function logInfo($message)
	{
		$this->logMessage("INFO", $message);
	}
	public function logError($message)
	{
		$this->logMessage("ERROR", $message);
	}
}