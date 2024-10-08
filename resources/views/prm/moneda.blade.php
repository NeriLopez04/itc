@extends('layouts.admin')

@section ('content')
    <div class="section">
        <!-- Tabla 01 -->
        <div class="card">
            <div class="card-header">
            <h3 class="card-title">Listado de Trabajadores</h3>
            <div class="card-tools">
                <a href="/prm/moneda/create" class="btn btn-primary">
                    <i class="bi bi-person-plus-fill"></i> Nueva Moneda
                </a>
                
            </div>
            </div>
            
            <div class="card-body">
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th style="width: 10px">#</th>
                        <th>Moneda</th>
                        <th>Tipo de Conversion a Peso Mexicano</th>
                        <th>Editar</th>
                        <th>Eliminar</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $contador =0; ?>
                    <tr>
                        @foreach($monedas as $monedas)
                            <td><?php echo $contador = $contador +1;?></td>
                            <td>{{ $monedas->moneda }}</td>
                            <td>{{ $monedas->conversion }}</td>
                            <td>
                                <a  href="#" class="btn btn-primary">Editar</a>
                            </td>
                            
                            <td>
                                <a  href="#" class="btn btn-danger">Eliminar</a>
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