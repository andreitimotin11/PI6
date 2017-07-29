<?php

/**
 * Created by PhpStorm.
 * User: Andrei
 * Date: 29.07.2017
 * Time: 00:30
 */
class GuestBookRecord
{
	protected $message;
	
	public function __construct($message)
	{
		$this->message = $message;
	}
	
	function getAllGBRecords()
	{
		$data = file(__DIR__ . '/guestbook', FILE_IGNORE_NEW_LINES);
		$ret = [];
		foreach ($data as $line) {
			$ret = $obj = new GuestBookRecord($line);
		}
		return $ret;
	}
	
	public function getMessage()
	{
		return $this->message;
	}
	
}