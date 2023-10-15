<?php
//1,2,3,4
class person {

    public $name;
    public $age;
    private  $height;
    private $weight;

   

  function __set ($key, $value)
  {
       $this->$key=$value;
    }
    function __get($key)
    {
        return $this->$key;
    }
}
$object1=new person();
$object2=new person();
$object1->height="182cm";
$object2->height="163cm";
echo $object1->height;
echo $object2->height;




// //5
class person {

    public $name;
    public $age;
    private  $height;
    private $weight;

function __construct()
{
    echo "Created";
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

$Ali=new person();
$Nada=new person();

//6

class person {

    public $name;
    public $age;
    private  $height;
    private $weight;
    
    public function print()
    {
            echo"person name is $this->name person age $this->age 
            person height $this->height person weight $this->weight ";
        }
        public function setheight($height)
        {
            $this->height =$height;
        }
        public function setweight($weight)
        {
            $this->weight =$weight;
        }
    }

        $object1=new person();
        $object1->name="ali";
        $object1->age="23";
        $object1->setheight("182cm");
        $object1->setweight("80kg");
        
        $object1->print();


        $object2=new person();
        $object2->name="nada";
        $object2->age="21";
        $object2->setheight("163cm");
        $object2->setweight("55kg");

        $object2->print();
        











