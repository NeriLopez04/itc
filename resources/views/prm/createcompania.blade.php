@extends ('layouts.admin')

@section ('content')
<div class="section" style="margin-left: 10px">
    
    <div class="section">
        <!-- Tabla 01 -->
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Nuevo Registro de Compañia</h3>
                    <div class="card-tools">
                        <!--<a href="{{ url('/prm/createcompania') }}" class="btn btn-primary">
                            <i class="bi bi-person-plus-fill"></i> Nuevo Trabajador
                        </a>-->
                    </div>
            </div>
            <div class="card-body" style="">
                <form action="{{ ('/prm/createcompania') }}" method="post" enctype="multipart/form-data">
                    <div class="row">
                        <div class="col-md-12">
                            @csrf
                            <br>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for=""> Nombre de la Compañia </label><b>*</b>
                                        <input type="text" name="nombre" class="form-control"@required(true)>
                                    </div>
                                </div>

                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label for="birthdate">ID Compañia</label><b>*</b>
                                        <input type="text" id="id_compania" name="id_compania" class="form-control"@readonly(true)>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label for=""> Categoria </label><b>*</b>
                                        <select class="form-control" name="compania" id="compania"  @required(true)>
                                            @foreach ($tipoCompania as $compania )
                                                <option value="{{ $compania }}">{{ ucfirst($compania) }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>


                            </div>
                            Dirección <br>
                            <div class="row">
                                <div class="col-md-1">
                                    <div class="form-group">
                                        <label for="">CP</label><b>*</b>
                                        <input type="number" name="cp" class="form-control"@required(true)>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label for="">Pais</label>
                                        <input type="text" name="pais" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label for="">Estado</label>
                                        <input type="text" name="estado" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="">Ciudad</label>
                                        <input type="text" name="ciudad" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="">Colonia</label>
                                        <input type="text" name="colonia" class="form-control">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="">Calle</label><b>*</b>
                                        <input type="text" name="calle" class="form-control"@required(true)>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label for="">Numero Exterior</label><b>*</b>
                                        <input type="number" name="numero_ext" class="form-control"@required(true)>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label for="">Numero Inerior</label>
                                        <input type="number" name="numero_int" class="form-control"@required(false)>
                                    </div>
                                </div>
                            </div>
                            Datos del Contacto <br>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="">Nombre del Contacto</label><b>*</b>
                                        <input type="text" name="nombre_contacto" class="form-control"@required(false)>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label for="">Titulo que Posee</label><b>*</b>
                                        <input type="text" name="titulo_contacto" class="form-control"@required(true)>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for=""> Telefono </label><b>*</b>
                                        <input type="number" name="telefono" class="form-control"@required(true)>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for=""> Telefono 2 </label>
                                        <input type="number" name="telefono2" class="form-control"@required(true)>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for=""> Correo </label><b>*</b>
                                        <input type="email" name="correo" class="form-control"@required(true)>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for=""> Pagina Web </label>
                                        <input type="text" name="webpage" class="form-control"@required(false)>
                                    </div>
                                </div>
                                
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for=""> Nombre del Contacto en ITC </label>
                                        <input type="text" name="contacto_itc" class="form-control"@required(false)>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for=""> Productos </label>
                                        <input type="text" name="producto_giro" class="form-control"@required(false)>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for=""> Observaciones </label>
                                        <input type="text" name="observaciones" class="form-control"@required(false)>
                                    </div>
                                </div>
                            </div>  

                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <br><a href="/prm/compania" class="btn btn-secondary"> Cancelar </a>
                                        <button type="submit" class="btn btn-primary">Guardar Trabajador</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>        
            </div>
        </div>
    </div>
</div>
@endsection