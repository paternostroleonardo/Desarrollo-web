<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\City;
use App\Models\Department;
use App\Models\User;

class RegisterStepTwoController extends Controller
{
    public function create(){
        $Cities = City::all();
        $Departments = Department::all();
        return view('auth.register-step2', compact('Cities', 'Departments'));
    }

    public function store(Request $request){
        auth()->user()->update([
            'lastname' => $request->lastname,
            'phone' => $request->phone,
            'identification' => $request->identification,
            'city_id' => $request->city_id,
            'department_id' => $request->department_id,
        ]);


         return redirect()->route('dashboard');
    }
}
