<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\RegisterRequest;

class RegisterController extends Controller
{
    public function index(){
        return view('register');
    }

    public function save(RegisterRequest $request)
    {
        try {
            return redirect('/register')->with('success '.$request->titulo.' Guardado');
        } catch (\Exception $e) {
            return redirect('/register')->with('error', 'Error al guardar el libro: ' . $e->getMessage());
        }
    }

}
