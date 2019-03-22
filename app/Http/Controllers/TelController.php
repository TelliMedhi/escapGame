<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;

class TelController extends Controller
{
    public function index(){
    
    $numero = $_POST['number'];
    
    $bonNumero = '0477904472';
    
    if($numero == $bonNumero){
        
        return view ('winvue');
        
        
        
    }
    else{
        return view('errorvue');
    }
  }
}


