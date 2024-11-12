@extends ('layouts.admin')

@section ('content')
<div class="section">
    <div class="section">
        <div class="card">
            <div class="card-header">
                <h2 class="card-title">CREAR NUEVO PROYECTO</h2>

            </div>
            <div class="card-body" style="">
                <form action="{{ ('#') }}" method="post" enctype="multipart/form-data">
                <div class="row-md-12">
                    <div class="col-md-2"  style="float:left;">
                        <div class="form-group" >
                            <label for="">ID Proyecto</label><b>*</b><br>
                            <input class="form-control" type="text" id='id' name="id_itc" @readonly(true)>
                        </div>
                    </div>
                    <div class="col-md-2"  style="float:left;">
                        <div class="form-group" >
                            <label for="">ID Proyecto (ITC)</label><b>*</b>
                            <input class="form-control" type="text" id="id_itc" name="id_itc" @required(true)>
                        </div>
                    </div>
                    <div class="form-group-md-2" style="float:right">
                       <br> <a href="listproyectos" class="btn btn-primary"> Agregar Cliente</a>
                    </div>
                    
                </div><br><br><br>

                

                <br><h6 class="custom-text">DATOS GENERALES DEL PROYECTO</h6>
                    <div class="row">   
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="">Nombre del Proyecto</label><b>*</b>
                                <input class="form-control" id="nombre_proy" type="text" name="nombre_proy" @required(true)>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="">Nombre del Cliente</label><b>*</b>
                                <input type="text" name="" class="form-control"@required(true)>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="">Categoria de Trabajo</label><b>*</b>
                                <input type="text" id="categoria_laboral" name="categoria_laboral" class="form-control"@required(true)>
                            </div>
                        </div>
                    </div>

                    <br><h6 class="custom-text">DIRECCION</h6>
                    <div class="row">
                        <div class="col-md-2">
                            <div class="form-group">
                                <label for="">CP</label><b>*</b>
                                <input type="number" id="cp" name="cp" class="form-control"@required(true)>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="">Pais</label>
                                <input type="text" id="pais" name="pais" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="">Estado</label>
                                <input type="text" id="estado" name="estado" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="">Ciudad</label>
                                <input type="text" id="ciudad" name="ciudad" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="">Colonia</label><b>*</b>
                                <input type="text" id="colonia" name="colonia" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="">Calle</label><b>*</b>
                                <input type="text" id="calle" name="calle" class="form-control"@required(true)>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="form-group">
                                <label for="">Numero Exterior</label><b>*</b>
                                <input type="number" id="numero_ext" name="numero_ext" class="form-control"@required(true)>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="form-group">
                                <label for="">Numero Inerior</label>
                                <input type="number" id="numero_int" name="numero_int" class="form-control"@required(false)>
                            </div>
                        </div>
                    </div>
                    
                    <br><h6 class="custom-text">DATOS EN GENERAL</h6>
                    <div class="row">

                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="">Registro Patronal</label><b>*</b>
                                <input type="text" id="reg_patronal" name="reg_patronal" class="form-control"@required(true)>
                            </div>
                        </div>

                        <div class="col-md-2">
                            <div class="form-group">
                                <label for="birthdate">Fecha de Nacimiento</label><b>*</b>
                                <input type="date" id="fecha_inicio" name="fecha_inicio" class="form-control"@required(true)>
                            </div>
                        </div>

                        <div class="col-md-2">
                            <div class="form-group">
                                <label for=""> Fin de Contrato </label><b>*</b>
                                <input type="date" id="fecha_fin" name="fecha_fin" class="form-control"@required(true)>
                            </div>
                        </div>

                        <div class="col-md-2">
                            <div class="form-group">
                                <label for=""> Monto del Contrato </label>
                                <input class="form-control" type="number" id="monto_contrato" name="monto_contrato" step="0.01" @required(true)>
                            </div>
                        </div>

                        <!--  Campo de tabla relacionada  -->
                        <div class="col-md-2">
                            <div class="form-group">
                                <label for=""> Moneda del Contrato </label><b>*</b>
                                <input type="text" name="moneda" class="select"@readonly(true)>
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="form-group">
                                <label for=""> Comentarios </label>
                                <textarea name="comentarios" id="comentarios" name="comentarios" class="form-control" cols="50" rows="3"@required(true)></textarea>
                            </div>  
                        </div>
                    </div>
                    <div class="form-group">
                        <br><a href="/listproyectos" class="btn btn-secondary"> Cancelar </a>
                        <button type="submit" class="btn btn-primary">Guardar Trabajador</button>
                        
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