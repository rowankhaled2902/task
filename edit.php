<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>


<?php
            try{
        $pdo=new pdo("mysql:host=localhost;dbname=customers","root","");
        $id = $_GET['id'];
        $data = $pdo->query("select*from customers where id='$id'");
        $row = $data->fetch(PDO::FETCH_ASSOC);
    
            
    } catch(PDOEXCEPTION $error){
        echo $error ;
    
    } 
    $pdo=null;
    ?>
    <form action="update.php" method="POST">
    <input type="hidden" name="id" value=" <?php echo $row['id'] ?> ">
        <input type="text" name="fname" value=" <?php echo $row['fname'] ?> " placeholder="enter your fname">
        <input type="text" name="lname" value=" <?php echo $row['lname'] ?> " placeholder="enter your lname">
        <input type="email" name="email" value=" <?php echo $row['email'] ?> " placeholder="enter your email">
        <input type="text" name="address" value=" <?php echo $row['address'] ?> " placeholder="enter your address">
        <input type="text" name="age" value=" <?php echo $row['age'] ?> " placeholder="enter your age">
        <input type="submit" value="update">

    </form>
</body>

</html>