<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Entrada;

class PageController extends Controller
{
    public function Home(Request $request){
        $buscar = $request->buscar;

        // $entradas = Entrada::get();
        // $entradas = Entrada::latest()->paginate();
        // $entradas = Entrada::orderBy('title', 'asc')->paginate();
        $entradas = Entrada::where('title', 'LIKE', "%{$buscar}%")
            ->with('user')
            ->orderBy('title', 'asc')
            ->paginate();

        // dd($entradas);

        return view('blog', ["entradas" => $entradas]);
    }

    public function Entrada(Entrada $mi_entrada){
        return view('entrada', ["entrada" => $mi_entrada]);
    }
}
