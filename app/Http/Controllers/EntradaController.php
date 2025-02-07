<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Entrada;

class EntradaController extends Controller
{
    public function index(){
        return view('entradas.index', [
            'entradas' => Entrada::latest()->paginate()
        ]);
    }
}
