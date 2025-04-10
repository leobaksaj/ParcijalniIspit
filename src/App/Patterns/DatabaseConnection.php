<?php 
namespace App\Patterns;

use PDO;
use PDOException;

class DatabaseConnection{
    private static ?DatabaseConnection $instance = null; // ? ispred naziva klase znači da može biti i null
    private ?PDO $connection = null;

    private function __construct(){
        try{
            $this->connection = new PDO(
                'mysql:host=localhost;dbname=videoteka','root','Loyinka123!'
            );
        }catch(PDOException){
            echo "I am in the catch block!";
        }
    }

    public static function getInstance():DatabaseConnection{
        if(self::$instance === null ){
            self::$instance = new DatabaseConnection();
        }
        return self::$instance;
    } 

    public function getConnection(): ?PDO {
        return $this->connection;
    }

}