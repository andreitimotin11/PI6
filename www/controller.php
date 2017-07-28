<?php
/**
 * Created by PhpStorm.
 * User: Andrei
 * Date: 28.07.2017
 * Time: 22:57
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
		$data = file(__DIR__ . '/db.txt', FILE_IGNORE_NEW_LINES);
		$ret = [];
		foreach ($data as $line) {
			$ret = $obj = new GuestBookRecord($line);
		}
		return $ret;
	}
	
}

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

$gb = new GuestBook(__DIR__ . '/guestbook');
var_dump($gb->getAll());
//var_dump(getAllGBRecords());
?>