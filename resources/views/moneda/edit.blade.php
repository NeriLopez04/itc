@extends('layouts.admin')

@section('content')
<div class="section">
    <div class="card">
        <div class="card-header">
            <h2 class="card-title">Editar Moneda</h2>
        </div>
        <div class="card-body">
            <form action="{{ route('moneda.update', $moneda) }}" method="POST">
                @csrf
                @method('PUT')

                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Moneda</label><b>*</b>
                            <input type="text" name="coin" class="form-control" value="{{ $moneda->coin }}" required>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Tipo de Conversión en Peso Mexicano</label><b>*</b>
                            <input type="number" name="conversion" class="form-control" value="{{ $moneda->conversion }}" step="0.01" required>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <a href="{{ route('moneda.index') }}" class="btn btn-secondary">Cancelar</a>
                    <button type="submit" class="btn btn-primary">Actualizar Moneda</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
