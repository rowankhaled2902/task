<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>task3</title>
</head>
<body>

 <ul>
    <?php
    //1-while loop:
    $x = 1;
    while ($x <= 12) {
     
    ?>
        <li><?php echo $x;  ?></li>
    <?php
        $x++;
    }
    echo "<br></br>";
    ?>
</ul>


<ul>
    <?php
    //1-while loop using break:
    $x = 1;
    while ($x <= 12) {
        if ($x == 8) {
        break;
     }
  
    ?>
        <li><?php echo $x;  ?></li>
    <?php
        $x++;
    }
    echo "<br></br>";
    ?>
</ul>


<ul>
   <?php
   //1-while loop using continue:
$x = 1;
while($x <= 12) {
    if ($x == 8) {
    $x++;
    continue;
  }

  ?>
       <li><?php echo $x;  ?></li>
  <?php
    $x++;
}
echo "<br></br>";
   ?>
</ul>

<ul>
<?php
//2-do while loop : 
$x = 1;
do {
    ?>
    <li><?php echo $x; ?></li>
    <?php
      $x++;    
}
while($x <= 12) 

?>
</ul>

<ul>
<?php
    //3-for loop:
    for($x=1; $x <= 12; $x++){
        ?>
    <li><?php echo $x;?></li>
       <?php
    }
    
    ?>
</ul>

<?php
//4-define constant value and print it in h1 html header
define("pi",3.14);
?>
<h1><?php echo pi ?></h1>

<?php
//5-write a program with HTML page and php script to print student grade status
//if statment 
$grade = 51;
if ($grade >= 50) {
echo"<h1>pass</h1>";

}elseif ($grade >= 55) {
echo"<h1>pass</h1>";

}elseif ($grade >= 60) {
echo"<h1>good</h1>";

}elseif ($grade > 70 && $grade <90){
echo"<h1>verygood</h1>";

}elseif ($grade >= 90) {
echo"<h1>excellent</h1>";

}else {
    echo"<h1>faill</h1>";
}


?>

<?php
//switch case:
    $grade = 71;
switch ($grade) {
    case "50":
        echo "<h1>pass</h1>";
        break;
    case "55":
        echo "<h1>pass</h1>";
        break;
    case "60":
        echo "<h1>good</h1>";
            break;
    case "70":
        echo "<h1>verygood</h1>";
                break;
    case "90":
        echo "<h1>excellent</h1>";
                    break;

    default:
        echo "THERE IS A mistake";
}

?> 
</body>
</html>