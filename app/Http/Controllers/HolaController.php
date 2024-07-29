<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HolaController extends Controller
{
    public function index(){
        return view('hola.index');
    }
    public function create(){
        return view('hola.create');
    }

    public function show($id){
        //compact('id'); es lo mismo que ['id' => $id]
        return view('hola.show', compact('id'));
    }

}
