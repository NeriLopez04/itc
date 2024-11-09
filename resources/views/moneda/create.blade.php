@extends ('layouts.admin')

@section ('content')
<div class="section">
    <div class="section">
        <div class="card">
            <div class="card-header">
                <h2 class="card-title">Agregar Nuevo Tipo de Moneda</h2>

            </div>
            <div class="card-body" style="">
                @if(session('success'))
            <div style="color: green;">
                {{ session('success') }}
            </div>
            @endif
                <form action="{{ route('moneda.store') }}" method="POST" enctype="multipart/form-data">
                
                @csrf
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="">Moneda</label><b>*</b>
                            <input type="text" id="coin" name="coin" class="form-control"@required(true)>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="">Tipo de Conversion en Peso Mexicano</label><b>*</b>
                            <input class="form-control" type="number" id="conversion" name="conversion" step="0.01" @required(true)>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <br><a href="/prm/moneda" class="btn btn-secondary"> Cancelar </a>
                    <button type="submit" class="btn btn-primary">Guardar Moneda</button>
                </div>
            </div><br>
           
        </div>


        <style>
            .custom-text {
                color: rgba(88, 87, 87, 0.767); /* Cambia el color aquí */
            }
        </style>

    </div>
</div>
@endsection