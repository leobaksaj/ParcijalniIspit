<?php

class User {
  
    private string $name;
    private string $lastName;
    private int $age;

    public function __construct(string $name, string $lastName, int $age){
      $this->setName($name);
      $this->lastName = $lastName;
      $this->age = $age;
    }
    
    public function __destruct(){
      echo "\n izbrisao sam ".$this->name;
    }
    
    public function setName(string $name){
        $this->name = $name;
    }
    
    public function getName(){
        return $this->name;
    } 
     
    public function getUserData(){
        return $this->name." ".$this->lastName." ".$this->age;
    }
}

$user = new User("Mario", "Matic", 23);
$user->setName("Ana");
echo $user->getUserData();

$user2 = new User("Mario1", "Matic", 23);
echo $user2->getUserData();
$userPrint = $user2->getUserData();

?>

<!DOCTYPE html>
<html lang="hr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel='stylesheet' type='text/css' media='screen' href='../assets/style.css'>
        <title>Objektno orijentirano</title>
    </head>
    <body>
        <div class="container">
            <h2>Objektno orijentirano programiranje</h2>

            <div class="row">
                <h4> Korisničko ime je: </h4> <p class="name"><?php echo $userPrint; ?></p>
            </div>

        </div>
    </body>
    <style>
        .row {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 5px;
        }
        .name{
            color: green;
            font-weight: 600;
        }
    </style>
</html>