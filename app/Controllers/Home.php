<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(){
        return view('principal.php');
    }

    public function nosotros(){
        return view('nosotros.php');
    }

   public function construccion(){
        return view('construccion.php');
   }

   public function comercializacion(){
        return view('comercializacion.php');
   }

   public function terminos(){
        return view('tyc.php');
   }

   public function contacto(){
        return view('contacto.php');
   }
}
