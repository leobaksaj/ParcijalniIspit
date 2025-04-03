<?php 

interface HasName {
	
    public function getName();
    public function setName(string $name);
}
    
interface HasLastName {
    public function getLastName();
    public function setLastName(string $lastName);
}

abstract class Name {
    protected string $name;

    public function __construct(string $name){
        $this->name = $name;
    }

    public function getName(){}

    public function setName(string $name){
        $this->name = $name;
    }	
}

class User extends Name implements HasName, HasLastName {

    private string $lastName;

    public function getName(){
        return $this->name;
    }

    public function getLastName(){
        return $this->lastName."\n";
    }

    public function setLastName(string $lastName){
        $this->lastName = $lastName;
    }

}

class Animal extends Name implements HasName {
    public function getName(){
        return $this->name." je ime zivotinje\n";
    }
}

$user = new User("ime");
echo $user->getName();
$user->setLastName("prezime");
echo $user->getLastName();

$animal = new Animal("zivotinja");
	echo $animal->getName();

	if($user instanceof HasName){
		echo $user->getName();
	} 