<?php

namespace App\Http\Controllers;

use App\Models\Equipment;
use Illuminate\Http\Request;

class EquipmentsController extends Controller
{
    public function index()
    {
        dd('Estoy en la vista del equipo');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name'=>'required|min:5|max:30',
            'type'=>'required|min:5|max:30',
        ]);

        Equipment::create([
            'name'=>$request->name,
            'type'=>$request->type,
        ]);
    }
}