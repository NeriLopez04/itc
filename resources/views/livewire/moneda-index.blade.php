@extends('layouts.app')

@section('content')
<div>
    <button wire:click="redirectToCreate" class="btn btn-primary">Nueva Moneda</button>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Moneda</th>
                <th>Conversión</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($monedas as $moneda)
            <tr>
                <td>{{ $moneda->id }}</td>
                <td>{{ $moneda->coin }}</td>
                <td>{{ $moneda->conversion }}</td>
                <td>
                    <button wire:click="redirectToEdit({{ $moneda->id }})" class="btn btn-warning btn-sm">Editar</button>
                    <button wire:click="delete({{ $moneda->id }})" class="btn btn-danger btn-sm">Eliminar</button>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection


