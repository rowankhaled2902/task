<?php
 try{
    $id=$_GET['id'];
    $pdo=new pdo("mysql:host=localhost;dbname=customers","root","");

    $pdo->query("delete from customers where id='$id'");
    header("location:customers.php");

 } catch(PDOEXCEPTION $e) {
echo $e;
 }
 $pdo=null;