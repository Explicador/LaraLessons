<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OlaMundoController extends Controller
{
    public function index ($senha, $usuario)
    {

        return view('olaMundo');

    }
}
