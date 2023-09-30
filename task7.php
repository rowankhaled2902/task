<?php
//1-create database using mysqli:

 $connection=new mysqli ('localhost','root','');
 if ($connection->connect_error) {
     die("failed");
 }
 echo "connected successfully";

 $connection->query("create database Employee");

---------------------------------------------------
    
//2-create table using mysqli:

 $connection=new mysqli ('localhost','root','','Employee');
 if ($connection->connect_error) {
     die("failed");
 }
 echo "connected successfully";

 $connection->query("create table Employee(id int(20)AUTO_INCREMENT primary key,
 fname text(20),
 lname text(20),
 email text(20),
 address text(20),
 salary int(20),
 age int(20))");

---------------------------------------------

//3- insert 3 rows in Employees table using mysqli:

 $connection->query("insert into Employee(fname,lname,email,address,salary,age)
 values
 ('mohammed','khaled','mkhaled@gmail.com','nasr city',3500,23),
 ('asmaa','galal','asmaag12@gmail.com','maddi',7000,25),
 ('nouran','nasr','nonmnase272@gmail.com','madinty',12500,30)
 ");

 $connection->close();

--------------------------------------------------
//1-create database using pdo

 try{
 $conn= new PDO ("mysql:host=localhost","root","");
 $conn->query("CREATE DATABASE employee_pdo");

 echo "Database created successfully<br>";
 }catch(PDOEXCEPTION $error) {
     echo $error ;
 }
 $conn=null;

--------------------------------------------------
// 2-create table using pdo:
 try{
    $conn= new PDO ("mysql:host=localhost;dbname=employee_pdo","root","");
     $conn->query("CREATE table employees (id int(20)AUTO_INCREMENT primary key,
      fname text(20),
      lname text(20),
     email text(20),
      address text(20),
      salary int(20),
      age int(20))");
    
     echo "Table created successfully<br>";
     }catch(PDOEXCEPTION $error) {
        echo $error ;
     }
     $conn=null;


----------------------------------------------
//3- insert 3 rows in Employees table using pdo and html form
 ?>
 <!DOCTYPE html>
 <html lang="en">

 <head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Document</title>
 </head>

 <body>
    <form action="task7.php" method="POST">
        <input type="text" name="fname" placeholder="enter your fname">
         <input type="text" name="lname" placeholder="enter your lname">
         <input type="email" name="email" placeholder="enter your email">
         <input type="text" name="address" placeholder="enter your address">
        <input type="text" name="salary" placeholder="enter your salary">
        <input type="text" name="age" placeholder="enter your age">
        <input type="submit" value="Add employee">

    </form>
 </body>

</html> 
<?php
 try{
     $conn= new pdo ("mysql:host=localhost;dbname=employee_pdo","root","");
 echo "connected successfully";

 var_dump($_POST);

 $fname=$_POST['fname'];
 $lname=$_POST ['lname'];
 $email=$_POST ['email'];
 $address=$_POST['address'];
 $salary=$_POST['salary'];
 $age=$_POST['age'];

 $conn->query("insert into employees(fname,lname,email,address,salary,age)
 values ('$fname','$lname','$email','$address','$salary','$age')");
 echo"inserted";
 } catch(PDOEXCEPTION $error){
     echo $error ;

 }



$conn=null;

------------------------------------------------
//7- list all Employees into html table using pdo connection
//8- show one Employee when you click on show html button
?>


 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border="1">
    <thead>
        <tr>
            <th>first name</th>
            <th>last name</th>
            <th>email</th>
            <th>address</th>
            <th>salary</th>
            <th>age</th>
            <th>show</th>
        
            </tr>
        </thead>
        <tbody> 
            <?php
            try{
        $conn= new pdo ("mysql:host=localhost;dbname=employee_pdo","root","");
        $data = $conn->query("select*from employees");
        $employees = $data->fetchall(PDO::FETCH_ASSOC);
    } catch(PDOEXCEPTION $error){
        echo $error ;
    
    } foreach ($employees as $employee) {
        ?>
        <tr>
        <td><?php echo $employee['fname']?></td>
        <td><?php echo $employee['lname']?></td>
        <td><?php echo $employee['email']?></td>
        <td><?php echo $employee['address']?></td>
        <td><?php echo $employee['salary']?></td>
        <td><?php echo $employee['age']?></td>
      
        <td><a href="show3.php?fname= <?php echo $employee['fname'] ?>
        show3.php?lname= <?php echo $employee['lname'] ?>
        show3.php?email= <?php echo $employee['email'] ?>
        show3.php?address= <?php echo $employee['address'] ?>
        show3.php?salary= <?php echo $employee['salary'] ?>
        show3.php?age= <?php echo $employee['age'] ?>
        
        ">show </a></td>
        
    </tr>

        <?php
    }
    $pdo=null;
         ?>     
        </tbody>
    </table>

</body>

</html>
            
</body>
</html>
