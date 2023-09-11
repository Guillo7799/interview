<?php

namespace App\Http\Controllers;

use App\Models\People;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class PeopleController extends Controller
{
    public function index()
    {
        dd('Estoy en la vista del persona');
    }

    public function store(Request $request)
    {
        
          dd($request);
        $this->validate($request,[
            'name'=>'required|min:4|max:10',
            'email'=>'required|unique:users',
            'lastname'=>'required|min:4|max:10', 
            'phone'=>'required|min:10|max:10',
            'identification'=>'required|min:10|max:10',
        ]);
        People::create([
            'name'=>$request->name,
            'email'=>Hash::make($request->email),
            'lastname'=>$request->lastname,
            'phone'=>$request->phone,
            'identification'=>$request->identification,
        ]);
    }
}