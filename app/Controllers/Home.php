<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(){
        return view('principal.php');
    }

    public function electroVolt(){
        return view('principal.php');
    }

    public function nosotros(){
        return view('nosotros.php');
    }

   public function construccion(){
        return view('construccion.php');
   }
}
