<?php

 try{
   
    $pdo=new pdo("mysql:host=localhost;dbname=customers","root","");

$id=$_POST['id'];
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$email=$_POST['email'];
$address=$_POST['address'];
$age=$_POST['age'];

    $pdo->query("UPDATE customers
     SET fname='$fname', lname='$lname', email='$email', address='$address' ,age='$age' 
    WHERE id='$id'");

   //  $data=$pdo->prepare("UPDATE students
   //  SET fname=?, lname=?, email=?, address=?
   // WHERE id=?");

   //    $data->execute([$fname,$lname,$email,$address,$id]);


    header("location:customers.php");

 } catch(PDOEXCEPTION $e) {
echo $e;
 }
 $pdo=null;
 ?>