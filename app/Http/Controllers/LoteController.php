<?php

namespace App\Http\Controllers;

use App\Models\Lote;
use App\Models\Medicamento;
use Illuminate\Http\Request;

class LoteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $lotes = Lote::with('medicamento')->get();
        return view('lotes.index', compact('lotes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $medicamentos = Medicamento::all();
        return view('lotes.create', compact('medicamentos'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'medicamento_id' => 'required|exists:medicamentos,id',
            'cantidad' => 'required|integer|min:1',
            'fecha_vencimiento' => 'required|date',
            'fecha_registro' => 'required|date',
            'origen' => 'required|string|max:255',
            'estatus' => 'required|in:disponible,agotado,vencido',
        ]);

        Lote::create($request->all());

        return redirect()->route('lotes.index')->with('success', 'Lote registrado con éxito.');
    
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
