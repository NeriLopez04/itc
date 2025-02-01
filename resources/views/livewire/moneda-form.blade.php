@extends ('layouts.admin')

@section ('content')
<div>
    <form wire:submit.prevent="save">
        <label>Moneda</label>
        <input type="text" wire:model="coin" class="form-control">
        
        <label>Conversión</label>
        <input type="number" wire:model="conversion" class="form-control" step="0.01">
        
        <button type="submit" class="btn btn-primary mt-3">{{ $isEdit ? 'Actualizar' : 'Guardar' }}</button>
    </form>
</div>
@endsection