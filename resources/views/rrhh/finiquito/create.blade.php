@extends ('layouts.admin')

@section ('content')
<div class="section">
    <h1>Finiquitar a Empleados</h1>
    <div class="section">

        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Finiquito del Trabajador</h3>

            </div>
            <div class="card-body" style="">
                <form action="{{ url('rrhh/finiquito') }}" method="post" enctype="multipart/form-data">
                <div class="row">
                    <div class="col-md-3"  style="float:right;">
                    <h6 class="custom-text">PARA EL SISTEMA</h6> <br>
                        <div class="form-group">
                            <label for="">Fecha del Finiquito</label><b>*</b><br>
                            <input type="date" class="form-control"@required(true)>
                        </div>
                    </div>
                </div>

                <br><h6 class="custom-text">DATOS DEL TRABAJADOR OBTENIDOS DE SU ULTIMO CONTRATO</h6> <br>
                    <div class="row">
                        <div class="col-md-2">
                            <div class="form-group">
                                <label for="">ID Trabajador</label><b>*</b>
                                <input type="text" class="form-control"@readonly(true)>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="">Nombre Completo</label><b>*</b>
                                <input type="text" class="form-control"@readonly(true)>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="">Categoria del Trabajador</label><b>*</b>
                                <input type="text" class="form-control"@readonly(true)>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="">NSS</label><b>*</b>
                                <input type="text" class="form-control"@readonly(true)>
                            </div>
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="col-md-2">
                            <div class="form-group">
                                <label for="">Salario Diario</label>
                                <input type="number" class="form-control"@readonly(true)>
                            </div>
                        </div>

                        <div class="col-md-2">
                            <div class="form-group">
                                <label for=""> Inicio de Contrato </label>
                                <input type="date" class="form-control"@readonly(true)>
                            </div>
                        </div>

                        <div class="col-md-2">
                            <div class="form-group">
                                <label for=""> Fin de Contrato </label>
                                <input type="date" class="form-control"@readonly(true)>
                            </div>
                        </div>

                        <div class="col-md-2">
                            <div class="form-group">
                                <label for=""> Días trabajados </label>
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
                    <br><h6 class="custom-text">PERCEPCIONES</h6>
                    <div class="row">
                        <div class="col-md-2">
                            <div class="form-group">
                                <label for=""> Prima de Antiguedad Art. 162 LFT III </label>
                                <input type="number" class="form-control"@readonly(true)>
                            </div>
                        </div>

                        <div class="col-md-2">
                            <div class="form-group">
                                <label for=""> Aguinaldo </label>
                                <input type="number" class="form-control"@readonly(true)>
                            </div>
                        </div>

                        <div class="col-md-2">
                            <div class="form-group">
                                <label for=""> Vacaciones </label>
                                <input type="number" class="form-control"@readonly(true)>
                            </div>
                        </div>

                        <div class="col-md-2">
                            <div class="form-group">
                                <label for=""> Prima Vacacional </label>
                                <input type="number" class="form-control"@readonly(true)>
                            </div>
                        </div>

                        <div class="col-md-2">
                            <div class="form-group">
                                <label for=""> Gratificaciones </label>
                                <input type="number" class="form-control"@required(true)>
                            </div>
                        </div>

                        <div class="col-md-2">
                            <div class="form-group">
                                <label for=""> Total de Percepciones </label>
                                <input type="number" class="form-control"@readonly(true)>
                            </div>
                        </div>
                    </div>
                    <br><h6 class="custom-text">DEDUCCIONES</h6>
                    <div class="row">
                        <div class="col-md-2">
                            <div class="form-group">
                                <label for=""> ISPT Por Retener </label>
                                <input type="number" class="form-control"@readonly(true)>
                            </div>
                        </div>

                        <div class="col-md-2">
                            <div class="form-group">
                                <label for=""> Credito al Salario </label>
                                <input type="number" class="form-control"@readonly(true)>
                            </div>
                        </div>


                        <div class="col-md-3">
                            <div class="form-group">
                                <label for=""> Total de Deducciones </label>
                                <input type="number" class="form-control"@readonly(true)>
                            </div>
                        </div>
                    </div>
                    <br><h6 class="custom-text">TOTAL</h6>
            <center><div class="row-md-12" style="float:unset">
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for=""> Neto a Pagar </label>
                                <input type="number" class="form-control"@readonly(true)>
                            </div>
                        </div>
                    </div></center>

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
</div>
@endsection