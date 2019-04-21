<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class activacionController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    function index(){
        return view('Logica.Activacion');
    }
}
