<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>show customer</title>
</head>
<body> 
<table border="1">
    <thead>
        <tr>
            <th>first name</th>
            <th>last name</th>
            <th>email</th>
            <th>address</th>
            <th>age</th>
            
           
            
        
            </tr>
        </thead>
        <tbody> 
<?php
            try{
        $pdo= new pdo ("mysql:host=localhost;dbname=customers","root","");
        $id = $_GET['id'];
        $data = $pdo->query("select*from customers where id='$id'");
        $row = $data->fetch(PDO::FETCH_ASSOC);
        ?>
         <tr>
        <td><?php echo $row['fname'] ?></td>
        <td><?php echo $row['lname'] ?></td>
        <td><?php echo $row['email'] ?></td>
        <td><?php echo $row['address'] ?></td>
        <td><?php echo $row['age'] ?></td>
        
            </tr>
            <?php
    } catch(PDOEXCEPTION $error){
        echo $error ;
    
    } 
    $pdo=null;
    ?>
 </tbody>
    </table>

</body>

</html>
            
</body>
</html>