<?php
namespace App\Http\Controllers;
use App\Models\Moneda;

use Illuminate\Http\Request;


class MonedaController extends Controller
{
    public function index()
    {
        $monedas = Moneda::all();
        return view('moneda.index', compact('monedas'));
    }

    public function create()
    {
        return view('moneda.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'coin' => 'required|unique:monedas,coin|max:255',
            'conversion' => 'required|numeric|min:0',
        ]);

        Moneda::create($request->all());

        return redirect()->route('moneda.index')->with('success', 'Moneda creada correctamente.');
    }

    public function edit(Moneda $moneda)
    {
        return view('moneda.edit', compact('moneda'));
    }

    public function update(Request $request, Moneda $moneda)
    {
        $request->validate([
            'coin' => 'required|max:255|unique:monedas,coin,' . $moneda->id,
            'conversion' => 'required|numeric|min:0',
        ]);

        $moneda->update($request->all());

        return redirect()->route('moneda.index')->with('success', 'Moneda actualizada correctamente.');
    }

    public function destroy(Moneda $moneda)
    {
        $moneda->delete();
        return redirect()->route('moneda.index')->with('success', 'Moneda eliminada correctamente.');
    }
}

