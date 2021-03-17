<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\car;


class cars extends Controller
{
    
  public function search(){

    $cars = car::all();
    
    return view('test-cars', ['modelCar' => $cars]);
  }

}
