@extends ('layouts.admin')

@section ('content')
<div class="section">
    <h1>NUEVO PROYECTO</h1>
    <div class="section">

        <div class="card">
            <div class="card-header">
                <h3 class="card-title">CREAR NUEVO PROYECTO</h3>

            </div>
            <div class="card-body" style="">
                <form action="{{ ('#') }}" method="post" enctype="multipart/form-data">
                <div class="row-md-12">
                    <div class="col-md-2"  style="float:left;">
                        <div class="form-group" >
                            <label for="">ID Proyecto</label><b>*</b><br>
                            <input type="text" class="form-control"@readonly(true)>
                        </div>
                    </div>
                    <div class="form-group-md-12" style="float:right">
                        <a href="listproyectos" class="btn btn-primary"> Agregar Cliente</a> <br>
                    </div>
                </div><br><br><br>

                

                <br><h6 class="custom-text">DATOS GENERALES DEL PROYECTO</h6>
                    <div class="row">
                        <div class="col-md-2">
                            <div class="form-group">
                                <label for="">Nombre del Cliente</label><b>*</b>
                                <input type="text" class="form-control"@required(true)>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="">Nombre del Proyecto</label><b>*</b>
                                <input type="text" class="form-control"@required(true)>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="">Categoria de Trabajo</label><b>*</b>
                                <input type="text" class="form-control"@required(true)>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="">Codigo Postal</label><b>*</b>
                                <input type="text" class="form-control"@required(true)>
                            </div>
                        </div>
                    </div>

                    <br><h6 class="custom-text">DIRECCION</h6>
                    <div class="row">
                        <div class="col-md-1">
                            <div class="form-group">
                                <label for="">CP</label><b>*</b>
                                <input type="number" class="form-control"@required(true)>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="form-group">
                                <label for="">Pais</label>
                                <input type="text" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="form-group">
                                <label for="">Estado</label>
                                <input type="text" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="">Ciudad</label>
                                <input type="text" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="">Colonia</label>
                                <input type="text" class="form-control">
                            </div>
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="">Calle</label><b>*</b>
                                <input type="text" class="form-control"@required(true)>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="form-group">
                                <label for="">Numero Exterior</label><b>*</b>
                                <input type="number" class="form-control"@required(true)>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="form-group">
                                <label for="">Numero Inerior</label><b>
                                <input type="number" class="form-control"@required(false)>
                            </div>
                        </div>
                    </div>
                    <br><h6 class="custom-text">DATOS EN GENERAL</h6>
                    <div class="row">
                        <div class="col-md-2">
                            <div class="form-group">
                                <label for="">ID Proyecto (ITC)</label>
                                <input type="number" class="form-control"@required(true)>
                            </div>
                        </div>

                        <div class="col-md-2">
                            <div class="form-group">
                                <label for="">Registro Patronal</label>
                                <input type="text" class="form-control"@required(true)>
                            </div>
                        </div>

                        <div class="col-md-2">
                            <div class="form-group">
                                <label for=""> Inicio de Contrato </label>
                                <input type="date" class="form-control"@required(true)>
                            </div>
                        </div>

                        <div class="col-md-2">
                            <div class="form-group">
                                <label for=""> Fin de Contrato </label>
                                <input type="date" class="form-control"@required(true)>
                            </div>
                        </div>

                        <div class="col-md-2">
                            <div class="form-group">
                                <label for=""> Monto del Contrato </label>
                                <input type="number" class="form-control"@required(true)>
                            </div>
                        </div>

                        <div class="col-md-2">
                            <div class="form-group">
                                <label for=""> Moneda del Contrato </label>
                                <input type="number" class="form-control"@required(true)>
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="form-group">
                                <label for=""> Comentarios </label>
                                <input type="number" class="form-control"@required(true)>
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
</div>
@endsection