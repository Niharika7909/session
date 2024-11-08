<?php
// what is a session?
//used to manage information across difference pages
//verify the user login info
session_start();
$_SESSION[ 'username' ]="Niharika";
$_SESSION[ 'favcat' ]="book";
echo"we have saved your session";

?>
