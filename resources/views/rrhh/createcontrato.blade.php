@extends ('layouts.admin')

@section ('content')
<div class="section">
    <div class="section">

        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Nuevo Contrato</h3>

            </div>
            <div class="card-body" style="">
                <form action="{{ url('/rrhh/createcontrato') }}" method="post" enctype="multipart/form-data">

                <br><h6 class="custom-text">Datos Para Nuevo Contrato</h6><br>

                    <div class="row">
                        <div class="col-md-5">
                            <div class="form-group">
                                <label for="">ID & Nombre del Empleado</label>
                                <input type="text" class="form-control"@readonly(true)>
                            </div>
                        </div>
                    </div>


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
                        <div class="col-md-3">
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
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for=""> Fecha de Inicio de Contrato </label>
                                <input type="date" class="form-control"@required(true)>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="form-group">
                                <label for=""> Días Contratado </label>
                                <input type="number" class="form-control"@required(true)>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for=""> Fecha de Fin de Conrtato </label>
                                <input type="date" class="form-control"@readonly(true)>
                            </div>
                        </div>
                        
                    </div><br><br>
                    
                    <div class="row justify-content-center">
                        <div class="col-md-2">
                            <button type="submit" class="btn btn-primary">Guardar Contrato</button>
                        </div>
                            <button type="print" class="btn btn-secondary">
                                <i class="bi bi-printer"></i>  Imprimir
                            </button>
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