<?php

/**
 * Created by PhpStorm.
 * User: Andrei
 * Date: 29.07.2017
 * Time: 00:29
 */
require __DIR__ . '/GuestBookRecord.php';
class GuestBook
{
	protected $file;
	
	public function __construct($file)
	{
		$this->file = $file;
	}
	public function getAll(){
		$data = file($this->file, FILE_IGNORE_NEW_LINES);
		$ret = [];
		foreach ($data as $line) {
			$ret[] = $obj = new GuestBookRecord($line);
		}
		return $ret;
	}
}