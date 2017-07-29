<?php
/**
 * Created by PhpStorm.
 * User: Andrei
 * Date: 28.07.2017
 * Time: 22:57
 */

$gb = new GuestBook(__DIR__ . '/guestbook');
var_dump($gb->getAll());
//var_dump(getAllGBRecords());
?>