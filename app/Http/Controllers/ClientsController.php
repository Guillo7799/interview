<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class ClientsController extends Controller
{
    public function index()
    {
        dd('Estoy en la vista del persona');
    }

    public function store(Request $request)
    {
        $request->request->add(['identification' => Str::slug($request->email)]);
        // dd('ingresa');
        $this->validate($request,[
            'name'=>'required|min:4|max:10',
            'email'=>'required|unique:users',
            'lastname'=>'required|min:4|max:10',
            'password'=>'no nullable',  
            'phone'=>'required|min:10|max:10',
            'identification'=>'required|min:10|max:10',
            
            
        ]);
        User::create([
            'name'=>$request->name,
            'email'=>Hash::make($request->email),
            'lastname'=>$request->lastname,
            'phone'=>$request->phone,
            'identification'=>$request->identification,
        ]);
    }
}