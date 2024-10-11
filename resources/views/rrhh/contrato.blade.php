@extends ('layouts.admin')

@section ('content')
<div class="section">
    <h1>Dar Nuevo Contrato al Trabajador</h1>
    <div class="section">

        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Nuevo Contrato</h3>

            </div>
            <div class="card-body" style="">
                <form action="{{ url('/rrhh/createcontrato') }}" method="post" enctype="multipart/form-data">

                <br><h6 class="custom-text">Datos Para Nuevo Contrato</h6> <br>
                    <div class="row">
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="">Registro Patronal</label><b>*</b>
                                <input type="text" class="form-control"@required(true)>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="">Registro de Obra</label><b>*</b>
                                <input type="text" class="form-control"@required(true)>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="">Categoria del Trabajador</label><b>*</b>
                                <input type="text" class="form-control"@required(true)>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="">Cargo</label><b>*</b>
                                <input type="text" class="form-control"@required(true)>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="form-group">
                                <label for="">Salario Diario</label>
                                <input type="number" class="form-control"@required(true)>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="form-group">
                                <label for="">Costo H.E</label>
                                <input type="number" class="form-control"@required(false)>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-2">
                            <div class="form-group">
                                <label for=""> Fecha de inicio de Contrato </label>
                                <input type="date" class="form-control"@required(true)>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="form-group">
                                <label for=""> Días Contratado </label>
                                <input type="number" class="form-control"@required(true)>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="form-group">
                                <label for=""> Fecha de Fin de Conrtato </label>
                                <input type="number" class="form-control"@readonly(true)>
                            </div>
                        </div>
                    </div>
                    <br> <h6 class="custom-text">DÍAS COTIZADOS</h6>
                    <div class="row">
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for=""> De Aguinaldo  </label>
                                <input type="number" class="form-control"@readonly(true)>
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="form-group">
                                <label for=""> De Vacaciones  </label>
                                <input type="number" class="form-control"@readonly(true)>
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="form-group">
                                <label for=""> De Prima de Antiguedad  </label>
                                <input type="number" class="form-control"@readonly(true)>
                            </div>
                        </div>
                    </div>    
            </div>
                    

                    <div class="row" style="">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for=""> Observaciones </label>
                                <input type="text" class="form-control">
                            </div>
                        </div>
                    </div>
        </div>
    </div>

        <style>
            .custom-text {
                color: rgba(88, 87, 87, 0.767); /* Cambia el color aquí */
            }
        </style>

</div>

@endsection