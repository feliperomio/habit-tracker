<?php

namespace App\Http\Controllers;

class SiteController extends Controller
{
    //GET
    public function index(){

        $name = 'felipe';
        $habits = ['ler', 'correr', 'estudar', 'viajar'];

        return view('home',[
            'name' => $name,
            'habits' => $habits

        ]);
    }
    
    public function dashboard(){
        return view('dashboard');
    }


}
