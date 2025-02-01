<?php
namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Moneda;

class MonedaForm extends Component
{
    public $monedaId, $coin, $conversion;
    public $isEdit = false;

    protected $rules = [
        'coin' => 'required|string|max:255',
        'conversion' => 'required|numeric|min:0',
    ];

    public function mount($monedaId = null)
    {
        if ($monedaId) {
            $moneda = Moneda::findOrFail($monedaId);
            $this->monedaId = $moneda->id;
            $this->coin = $moneda->coin;
            $this->conversion = $moneda->conversion;
            $this->isEdit = true;
        }
    }

    public function save()
    {
        $this->validate();

        Moneda::updateOrCreate(
            ['id' => $this->monedaId],
            ['coin' => $this->coin, 'conversion' => $this->conversion]
        );

        session()->flash('message', $this->monedaId ? 'Moneda actualizada con éxito.' : 'Moneda creada con éxito.');

        return redirect()->route('monedas.index');
    }

    public function render()
    {
        return view('livewire.moneda-form')->extends('layout.app');
    }
}
