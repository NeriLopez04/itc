@extends('layouts.admin')

@section ('content')
    <div class="section">
        <!-- Tabla 01 -->
        <div class="card">
            <div class="card-header">
            <h3 class="card-title">Listado de Trabajadores</h3>
            <div class="card-tools">
                <a href="/rrhh/trabajadores/create" class="btn btn-primary">
                    <i class="bi bi-person-plus-fill"></i> Nuevo Trabajador
                </a>
                
            </div>
            </div>
            
            <div class="card-body">
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th style="width: 10px">#</th>
                        <th>ID</th>
                        <th>Nombre</th>
                        <th>NSS</th>
                        <th>RFC</th>
                        <th>CURP</th>
                        <th>Telefono</th>
                        <th>Correo</th>
                        <th>Direccion</th>
                        <th>Black List</th>
                        <th>Editar</th>
                        <th>Credencial</th>
                        <th>Contrato</th>
                        <th>Finiquito</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $contador =0; ?>
                    <tr>
                        @foreach($trabajadores as $trabajadores)
                            <td><?php echo $contador = $contador +1;?></td>
                            <td>{{ $trabajadores->id_itc }}</td>
                            <td>{{ $trabajadores->nombre_trabajador }}</td>
                            <td>{{ $trabajadores->numero_seguro }}</td>
                            <td>{{ $trabajadores->rfc }}</td>
                            <td>{{ $trabajadores->curp }}</td>
                            <td>{{ $trabajadores->telefono }}</td>
                            <td>{{ $trabajadores->correo }}</td>
                            <td>{{ $trabajadores->calle }}</td>
                            <td>{{ $trabajadores->black_list }}</td>
                            <td>
                                <a  href="#" class="btn btn-primary">Editar</a>
                            </td>
                            <td>
                                <a  href="" class="btn btn-primary">Credencial</a>
                            </td>
                            <td>
                                <a  href="/rrhh/createcontrato" class="btn btn-success">Contrato</a>
                            </td>
                            <td>
                                <a  href="createfiniquito" class="btn btn-warning">Finiquito</a>
                            </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            <script>
                $(function () {
                  $("#example1").DataTable({
                    "responsive": true, "lengthChange": true, "autoWidth": false,
                    "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
                  }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
                  $('#example2').DataTable({
                    "paging": true,
                    "lengthChange": false,
                    "searching": false,
                    "ordering": true,
                    "info": true,
                    "autoWidth": false,
                    "responsive": true,
                  });
                });
              </script>
        </div>
    </div>
</div>
@endsection