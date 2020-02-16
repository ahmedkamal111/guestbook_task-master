<?php
//We start sessions
session_start();

/******************************************************
------------------Required Configuration---------------
Please edit the following variables so the Guest Book
can work correctly.
******************************************************/

//We log to the DataBase
mysql_connect('127.0.0.1', 'root', '');
mysql_select_db('guestbook');



/******************************************************
-----------------Optional Configuration----------------
******************************************************/

//Home page file name
$url_home = 'index.php';

//Design Name
$design = 'default';
?>
