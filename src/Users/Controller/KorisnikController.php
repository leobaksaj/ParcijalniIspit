<?php 

namespace Users\Controller;

use Users\Model\Korisnik;

class KorisnikController{
    public function prikazi(){
        $korisnik = new Korisnik();
        $korisnik->pozdrav();
    }
}