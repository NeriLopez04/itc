@extends ('layouts.admin')

@section ('content')
<div class="section" style="margin-left: 10px">
    <h1>Agregar nuevo trabajador</h1>
    <div class="section">
        <!-- Tabla 01 -->
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Información General del Trabajador</h3>
                    <div class="card-tools">
                        <!--<a href="{{ url('/rrhh/createtrabajad') }}" class="btn btn-primary">
                            <i class="bi bi-person-plus-fill"></i> Nuevo Trabajador
                        </a>-->
                        </button>
                    </div>
            </div>
            <div class="card-body" style="">
                Datos Personales <br>
                <div class="row">
                    <div class="col-md-2">
                        <div class="form-group">
                            <label for="">Nombre</label>
                            <input type="text" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="form-group">
                            <label for="">Apellido Paterno</label>
                            <input type="text" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="form-group">
                            <label for="">Apellido Materno</label>
                            <input type="text" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="">Numero de Seguro Social</label>
                            <input type="text" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="">Foto</label>
                            <input type="file" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-2">
                        <div class="form-group">
                            <label for="">Genero</label>
                            <input type="text" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="form-group">
                            <label for="">RFC</label>
                            <input type="text" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="form-group">
                            <label for="">CURP</label>
                            <input type="text" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="">Telefono</label>
                            <input type="text" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="">Correo</label>
                            <input type="text" class="form-control">
                        </div>
                    </div>
                </div>
                Dirección <br>
                <div class="row">
                    <div class="col-md-1">
                        <div class="form-group">
                            <label for="">CP</label>
                            <input type="text" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="form-group">
                            <label for="">Estado</label>
                            <input type="text" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="form-group">
                            <label for="">Municipio</label>
                            <input type="text" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="">Colonia</label>
                            <input type="text" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="">Calle y Número</label>
                            <input type="text" class="form-control">
                        </div>
                    </div>
                </div>
                Datos de Emergencia <br>
                <div class="row">
                    <div class="col-md-2">
                        <div class="form-group">
                            <label for="">Parentesco</label>
                            <input type="text" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="">Nombre</label>
                            <input type="text" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="form-group">
                            <label for="">Apellido Paterno</label>
                            <input type="text" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="form-group">
                            <label for="">Apellido Materno</label>
                            <input type="text" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="">Telefono</label>
                            <input type="text" class="form-control">
                        </div>
                    </div>
                    <tfoot>
                        <tr>
                            <a href="{{ url('/rrhh/createtrabajadores') }}" class="btn btn-primary">
                                <i class="bi bi-person-plus-fill"></i> Agregar Datos Administrativos
                            </a>
                        </tr>
                    </tfoot>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection