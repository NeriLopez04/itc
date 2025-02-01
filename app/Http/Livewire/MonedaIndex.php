<?php
namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Moneda;

class MonedaIndex extends Component
{
    public $monedas;

    public function mount()
    {
        $this->monedas = Moneda::orderBy('id', 'asc')->get();
    }

    public function redirectToCreate()
    {
        return redirect()->route('monedas.create');
    }

    public function redirectToEdit($id)
    {
        return redirect()->route('monedas.edit', ['monedaId' => $id]);
    }

    public function delete($id)
    {
        Moneda::findOrFail($id)->delete();
        session()->flash('message', 'Moneda eliminada correctamente.');
        return redirect()->route('monedas.index');
    }

    public function render()
    {
        return view('livewire.moneda-index')->extends('layouts.app');
    }
}
