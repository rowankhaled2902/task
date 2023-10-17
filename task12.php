<?php



abstract class Person{
    static $name;
    static $age;
    public $height;
    public $weight;
    const address="aswan";

    abstract function about(): string;
     
    
function __construct()
{
    echo "Created";
    echo"<br>";
}
  function __set ($key, $value)
  {
       $this->$key=$value;
    }
    function __get($key)
    {
        return $this->$key;
    }
}






class Ali extends Person{
 function about():string{
    return "name is Ali and age is 25";
}
}
$Ali=new Ali();
echo $Ali->about();
echo"<br>";


class Person2{
    static $name;
    static $age;
    public $height;
    public $weight;
    const address="aswan";

    static function print(){
        echo "name is ". self::$name." and age is ". self::$age;
     }

function __construct()
{
    echo "Created";
    echo"<br>";
}
  function __set ($key, $value)
  {
       $this->$key=$value;
    }
    function __get($key)
    {
        return $this->$key;
    }
}


$Nada=new Person2();
Person2::$name="Nada";
Person2::$age="23";
Person2::print();
echo"<br>";
echo Person::address;


