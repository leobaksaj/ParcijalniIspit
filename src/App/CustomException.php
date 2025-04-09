<?php 

namespace App;

use Exception;

class CustomException extends Exception{
    protected $message = 'Poruka iz CUSTOM Exception!';
}