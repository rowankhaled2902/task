<?php 
//1-POST
var_dump($_POST['1']);
var_dump($_POST['2']);
var_dump($_POST['3']);
var_dump($_POST['4']);
var_dump($_POST['5']);

//2-GET
var_dump($_GET['1']);
var_dump($_GET['2']);
var_dump($_GET['3']);
var_dump($_GET['4']);
var_dump($_GET['5']);


//3-REQUEST
var_dump($_REQUEST['1']);
var_dump($_REQUEST['2']);
var_dump($_REQUEST['3']);
var_dump($_REQUEST['4']);
var_dump($_REQUEST['5']);


//4-SERVER
var_dump($_SERVER['HTTP_USER_AGENT']);

//5-FILES
var_dump($_FILES['file']);

//6-SESSION
session_start();
echo "<br/>";
$_SESSION['name']="Laila";
echo $_SESSION['name'];

//7-COOKIES
setcookie("name", "laila", time() +86430, '/');
var_dump($_COOKIE['name']);

?>