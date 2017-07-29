<?php
/**
 * Created by PhpStorm.
 * User: Andrei
 * Date: 28.07.2017
 * Time: 23:01
 */
require __DIR__ . '/classes/GuestBook.php';
require __DIR__ . '/classes/Article.php';
require __DIR__ . '/classes/News.php';
require __DIR__ . '/View.php';
//require __DIR__ . '/View.php';

//$v1 = new View();
//$v1->assign('1', 'Ala Timotin|alla.timotina@Gmail.com|asdsda');
//$v1->assign('2', 'Lena|Makarena|fudete');
//$v1->display(__DIR__ . '/templates/index.php');
$v2 = new View();



//$gb = new GuestBook(__DIR__ . '/guestbook');
//$data = $gb->getAll();

$n1 = new News();

$articles = $n1->getAllArticles();
$v2->assign('news', $articles);
//var_dump($v2->data);

$v2->display(__DIR__ . '/news.php');
//$n1->getArticle('0');

