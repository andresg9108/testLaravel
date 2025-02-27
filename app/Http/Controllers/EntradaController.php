<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Entrada;
use Illuminate\Support\Str;

class EntradaController extends Controller
{
    public function index(){
        return view('entradas.index', [
            'entradas' => Entrada::latest()->paginate()
        ]);
    }

    public function create(Entrada $misentrada){
        return view('entradas.create', ['entrada' => $misentrada]);
    }

    public function store(Request $request){
        $request->validate([
            'title' => 'required',
            'entrada_id' => 'required|unique:entrada,entrada_id',
            'body' => 'required'
        ]);
        $entrada = $request->user()->entradas()->create([
            'title' => $title = $request->title,
            'entrada_id' => $request->entrada_id,
            'body' => $request->body
        ]);

        return redirect()->route('misentradas.edit', $entrada);
    }

    public function edit(Entrada $misentrada){
        return view('entradas.edit', ['entrada' => $misentrada]);
    }

    public function update(Request $request, Entrada $misentrada){
        $request->validate([
            'title' => 'required',
            'entrada_id' => 'required|unique:entrada,entrada_id,' . $misentrada->id,
            'body' => 'required'
        ]);
        $misentrada->update([
            'title' => $title = $request->title,
            'entrada_id' => $request->entrada_id,
            'body' => $request->body
        ]);

        return redirect()->route('misentradas.edit', $misentrada);
    }

    public function destroy(Entrada $misentrada){
        $misentrada->delete();

        return back();
    }
}
