<?php
class Eleve
{
    private $name;

    public function setName($name){
        $this -> name = $name;
    }

    public function getName(){
        return $this -> name; 
    } 

    private $firstname;

    public function setFirstname($firstname){
        $this -> firstname = $firstname;
    }

    public function getFirstame(){
      return  $this -> firstname; 
    }

    private $age;

    public function setAge($age){
        $this -> age = $age;
    }

    public function getAge(){
       return $this -> age; 
    }

    function displayName(){

       return $this -> name . " " . $this -> firstname . " ". $this->age . " ans";        
    
    }
}


$eleve1 = new Eleve();
$eleve1 ->setName("Rizzo");
$eleve1 ->setFirstname("Antonino");
$eleve1 ->setAge(33);



echo $eleve1 -> displayName();
?> 