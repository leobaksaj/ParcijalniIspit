<?php
namespace App;

use App\Interface\CoderInterface;
use App\CustomException;
use Exception;

abstract class Coder implements CoderInterface{
    public function writeCode( $is_junior = false )
    {
        try{
            if($is_junior){
                throw new CustomException();
            }else{
                throw new Exception("neka poruka");
            }
        }catch(CustomException $message){
            echo "Ovo je junior: " . $message->getMessage(). "<br>";
        }catch(Exception $e){
            echo "Ovo je senior: ". $e->getMessage(). "<br>";
        }finally{
            echo "Ovo se uvijek izvršava!<br>"; 
        }
        // return "Ja sam Developer i pišem programski kod! <br>";
    }

    public function debugCode()
    {
        return "Ovdje tražim što sam zeznuo u pisanju koda (DEBUG)! <br>";
    }
}