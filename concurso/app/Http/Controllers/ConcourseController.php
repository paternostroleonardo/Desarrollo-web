<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Concourse;

class ConcourseController extends Controller
{

    public function Sorteo(Request $request)
    {
      $filas = User::count();
      $min = 5;
      if( $filas >= $min){
           $winner = User::all()->random(1);
           $name = $winner->implode('name', ' ');
           Concourse::create(['winner' => $name]);
           return view('User/winner', compact('winner'));
       } else {
           return view('User/loser');
       }
    }
}

