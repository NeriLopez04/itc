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
                <form action="{{ ('/rrhh') }}" method="post" enctype="multipart/form-data">
                    Datos Personales <br>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="">Nombre Completo</label><b>*</b>
                                <input type="text" class="form-control"@required(true)>
                            </div>
                        </div>
                        <!--<div class="col-md-2">
                            <div class="form-group">
                                <label for="">Apellido Paterno</label><b>*</b>
                                <input type="text" class="form-control"@required(true)>
                            </div>
                        </div> -->
                        <!--<div class="col-md-2">
                            <div class="form-group">
                                <label for="">Apellido Materno</label><b>*</b>
                                <input type="text" class="form-control"@required(true)>
                            </div>
                        </div>-->
                        <div class="col-md-2">
                            <div class="form-group">
                                <label for="birthdate">Fecha de Nacimiento</label><b>*</b>
                                <input type="date" id="birthdate" name="birthdate" class="form-control"@required(true)>
                            </div>
                        </div>
                        <div class="col-md-1">
                            <div class="form-group">
                                <label for="age">Edad</label>
                                <input type="text" id="age" name="age" class="form-control"@readonly(true)>
                            </div>
                        </div>

                        <div class="col-md-1.5">
                            <div class="form-group">
                                <label for="genero">Sexo</label><b>*</b>
                                <!--    Para dar el mismo formato de los botones usar: class"form-control"  -->
                                <select class="form-control" name="genero" id="genero"@required(true)>
                                    @foreach($tipoGenero as $genero)
                                        <option value="{{ $genero }}">{{ ucfirst($genero) }}</option>
                                     @endforeach
                                </select>

                                <!--<input type="submit" class="form-control"> -->
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="file">Foto</label>
                                <input type="file" id="file" class="form-control">
                                <center><output id="list"></output></center>
                                <script>
                                    function archivo(evt){
                                        var files = evt.target.files;
                                        //obtenemos la imagen del campo "file".
                                        for (var i=0, f; f = files[i]; i++){
                                            //solo admitimos imagenes.
                                            if (!f.type.match('image.*')){
                                                continue;
                                            }
                                            var reader = new FileReader();
                                            reader.onload = (function (theFile){
                                                return function (e){
                                                    //insertamos la imagen
                                                    document.getElementById("list").innerHTML = ['<img class="thumb thumbnail" src="',e.target.result,'"width="70%" title="', escape(theFile.name),'"/>'].join('');
                                                };
                                            }) (f);
                                            reader.readAsDataURL(f);
                                        }

                                    }
                                    document.getElementById('file').addEventListener('change',archivo, false);
                                </script>

                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="">Numero de Seguro Social</label><b>*</b>
                                <input type="number" class="form-control"@required(true)>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="form-group">
                                <label for="">RFC</label><b>*</b>
                                <input type="text" class="form-control"@required(true)>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="">CURP</label><b>*</b>
                                <input type="text" class="form-control"@required(true)>
                            </div>
                        </div>
                        
                    </div>
                    
                    <div class="row">

                        <div class="col-md-2">
                            <div class="form-group">
                                <label for="estado_civil">Estado Civil</label><b>*</b>
                                <select class="form-control" name="estado_civil" id="estado_civil"@required(true)>
                                    @foreach($estadoCivil as $estado_civil)
                                        <option value="{{ $estado_civil }}">{{ ucfirst($estado_civil) }}</option>
                                     @endforeach
                                </select>
                                
                            </div>
                        </div>

                        <div class="col-md-1.5">
                            <div class="form-group">
                                <label for="sangre">Tipo Sangre</label><b>*</b>
                                <select class="form-control" name="sangre" id="sangre"@required(true)>
                                    @foreach($tipoSangre as $sangre)
                                        <option value="{{ $sangre }}">{{ ucfirst($sangre) }}</option>
                                     @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="">Telefono </label><b>*</b>
                                <input type="number" class="form-control"@required(true)>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="">Telefono 2</label>
                                <input type="number" class="form-control"@required(false)>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="">Correo de Contacto</label>
                                <input type="email" class="form-control"@required(false)>
                            </div>
                        </div>
                        <!--<div class="col-md-2">
                            <div class="form-group">
                                <label for="">a</label>
                                <input type="text" class="form-control">
                            </div>
                        </div> -->
                    </div>
                    Dirección <br>
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
                                <label for="">Numero Inerior</label><b>*</b>
                                <input type="number" class="form-control"@required(true)>
                            </div>
                        </div>
                    </div>

                    Datos de Emergencia <br>
                    <div class="row">
                        <div class="col-md-2">
                            <div class="form-group">
                                <label for="parentesco">Parentesco</label><b>*</b>
                                <select class="form-control" name="parentesco" id="parentesco"@required(true)>
                                    @foreach($tipoParentesco as $parentesco)
                                        <option value="{{ $parentesco }}">{{ ucfirst($parentesco) }}</option>
                                     @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="">Nombre</label><b>*</b>
                                <input type="text" class="form-control"@required(true)>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="form-group">
                                <label for="">Apellido Paterno</label><b>*</b>
                                <input type="text" class="form-control"@required(true)>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="form-group">
                                <label for="">Apellido Materno</label><b>*</b>
                                <input type="text" class="form-control"@required(true)>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="">Telefono</label><b>*</b>
                                <input type="number" class="form-control"@required(true)>
                            </div>
                        </div>
                              
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <a href="listtrabajadores" class="btn btn-secondary"> Cancelar </a>
                                <button type="submit" class="btn btn-primary">Guardar Trabajador</button>
                                <a  href="" class="btn btn-primary" style="float: right;">Agregar datos Administrativos</a>
                                
                            </div>
                        </div>
                    </div>
                </form>
                <script>
                    // Función para calcular la edad
                    function calculateAge(birthdate) {
                        var today = new Date();
                        var birthDate = new Date(birthdate);
                        var age = today.getFullYear() - birthDate.getFullYear();
                        var monthDifference = today.getMonth() - birthDate.getMonth();
            
                        // Ajuste para los meses y días antes del cumpleaños en el año actual
                        if (monthDifference < 0 || (monthDifference === 0 && today.getDate() < birthDate.getDate())) {
                            age--;
                        }
            
                        return age;
                    }
            
                    $(document).ready(function() {
                        $('#birthdate').on('change', function() {
                            var birthdate = $(this).val();
                            
                            if (birthdate) {
                                var age = calculateAge(birthdate);
                                $('#age').val(age);
                            } else {
                                $('#age').val(''); // Si no hay fecha de nacimiento, limpia el campo de edad
                            }
                        });
                    });
                </script>
            </div>
        </div>
    </div>
</div>
@endsection