<?php

namespace App\Http\Controllers;

use App\Models\Faccionado;
use Illuminate\Http\Request;

class FaccionadoController extends Controller
{
    public function index()
    {
        $faccionados = Faccionado::all();
        return view('faccionados.index', compact('faccionados'));
    }

    public function create()
    {
        return view('faccionados.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nome_faccionado' => 'required|string',
            'genero' => 'required|in:Masculino,Feminino,Outro',
            'organizacao_faccionado' => 'required|string',
        ]);

        Faccionado::create($request->all());
        return redirect()->route('faccionados.index')->with('success', 'Faccionado adicionado com sucesso!');
    }

    public function show(Faccionado $faccionado)
    {
        return view('faccionados.show', compact('faccionado'));
    }

    public function edit(Faccionado $faccionado)
    {
        return view('faccionados.edit', compact('faccionado'));
    }

    public function update(Request $request, Faccionado $faccionado)
    {
        $request->validate([
            'nome_faccionado' => 'required|string',
            'genero' => 'required|in:Masculino,Feminino,Outro',
            'organizacao_faccionado' => 'required|string',
        ]);

        $faccionado->update($request->all());
        return redirect()->route('faccionados.index')->with('success', 'Faccionado atualizado com sucesso!');
    }

    public function destroy(Faccionado $faccionado)
    {
        $faccionado->delete();
        return redirect()->route('faccionados.index')->with('success', 'Faccionado deletado com sucesso!');
    }
}
