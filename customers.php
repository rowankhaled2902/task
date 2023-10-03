<?php

try{

 $pdo=new pdo ("mysql:host=localhost","root","");
 echo "connected sucessfuly";
 $pdo->query("create database customers");

 }catch(PDOEXCEPTION $e){

     echo $e ;
 }

// ---------------------------------------------------------------------------
 try{

 $pdo=new pdo ("mysql:host=localhost;dbname=customers","root","");
echo "connected sucessfuly";
 $pdo->query("create table customers(id int(20) auto_increment primary key,
 fname text(20),
 lname text(20),
 email text(20),
 address text(20),
 age int(20))");

 }catch(PDOEXCEPTION $e){

     echo $e ;
 }

// -----------------------------------------------------------------------
?>
 
<!DOCTYPE html>
 <html lang="en">

 <head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>new customer</title>
 </head>

 <body>
    <form action="customers.php" method="POST">
        <input type="text" name="fname" placeholder="enter your fname">
         <input type="text" name="lname" placeholder="enter your lname">
         <input type="email" name="email" placeholder="enter your email">
         <input type="text" name="address" placeholder="enter your address">
        <input type="text" name="age" placeholder="enter your age">
        <input type="submit" value="Add customer">

    </form>
 </body>

</html>
<?php
 try{
    $pdo= new pdo ("mysql:host=localhost;dbname=customers","root","");
 echo "connected successfully";

var_dump($_POST);

 $fname = $_POST['fname'];
 $lname = $_POST['lname'];
 $email = $_POST['email'];
 $address = $_POST['address'];
 $age = $_POST['age'];



 $pdo->query("insert into customers(fname,lname,email,address,age)
 values ('$fname','$lname','$email','$address','$age')");
 echo"inserted";

 } catch(PDOEXCEPTION $error){
      echo $error ;

 }



 $pdo=null;


//------------------------------------------------------------
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>customers data</title>
</head>
<body>
    
<table border="1">
    <thead>
        <tr>
            <th>First name</th>
            <th>Last name</th>
            <th>Email</th>
            <th>Address</th>
            <th>Age</th>
            <th>Actions</th>
        
            </tr>
        </thead>
        <tbody>  
<?php
 try{
 $pdo= new pdo ("mysql:host=localhost;dbname=customers","root","");
 $data = $pdo->query("select*from customers");
 $customers = $data->fetchall(PDO::FETCH_ASSOC);
 } catch(PDOEXCEPTION $error){
echo $error ;

 } foreach ($customers as $customer) {
 ?>
 <tr>
 <td><?php echo $customer['fname']?></td>
 <td><?php echo $customer['lname']?></td>
 <td><?php echo $customer['email']?></td>
 <td><?php echo $customer['address']?></td>
 <td><?php echo $customer['age']?></td>

 <td><a href="show4.php?id=<?php echo $customer['id'] ?>">show </a>
        <a href="delete.php?id=<?php echo $customer['id'] ?>">delete</a>
        <a href="edit.php?id=<?php echo $customer['id'] ?>">edit</a>
    </td> 


<?php
 }
 $pdo=null;
?>     
 </tbody>
</table>
</body>
</html>

 ------------------------------------------------------------------ 

