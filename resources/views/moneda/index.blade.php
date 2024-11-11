@extends('layouts.admin')

@section ('content')
<div class="section">
        <!-- Tabla 01 -->
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Listado de Monedas</h3>
            <div class="card-tools">
                <a href="/moneda/create" class="btn btn-primary">
                    <i class="bi bi-person-plus-fill"></i> Nueva Moneda
                </a>
            </div>
        </div>
            
        <div class="card-body">
            @if(session('success'))
            <div style="color: green;">
                {{ session('success') }}
            </div>
            @endif
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
                        @foreach($monedas as $moneda)
                            <td><?php echo $contador = $contador +1;?></td>
                            <td>{{ $moneda->coin }}</td>
                            <td>${{ number_format($moneda->conversion,2,'.',',') }}</td>
                            <td>
                                <button class="btn btn-primary btn-edit" data-id="{{ $moneda->id }}" data-toggle="modal" data-target="#editModal">Editar</button>
                            </td>
                            <td>
                                <form action="{{ route ('moneda.destroy', $moneda->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger" onclick="return confirm('Estas seguro de eliminar la Moneda')">Eliminar</button>
                                    <!-- <a  href="#" class="btn btn-danger">Eliminar</a> -->
                                </form>
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

                <div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="editModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="editModalLabel">Editar Moneda</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form id="editForm">
                                    @csrf
                                    @method('PUT')
                                    <input type="hidden" id="moneda_id" name="moneda_id">

                                    <div class="col-md-8">
                                        <div class="form-group">
                                            <label for="">Moneda</label><b>*</b>
                                            <input type="text" name="coin" class="form-control"@required(true)>
                                        </div>
                                    </div>
                                    <div class="col-md-8">
                                        <div class="form-group">
                                            <label for="">Tipo de Conversion en Peso Mexicano</label><b>*</b>
                                            <input class="form-control" type="number" name="conversion" step="0.01" @required(true)>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                                <button type="button" class="btn btn-primary" id="updateButton">Actualizar</button>
                            </div>
                        </div>
                    </div>
                </div>

                <!--<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
                <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
                <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script> -->
                <script>
                    $(document).ready(function() {
                        $('.btn-edit').on('click', function() {
                            const id = $(this).data('id');
                            const url = `{{ url('/moneda') }}/${id}/edit`;

                            // Hacer la solicitud AJAX para obtener los datos del producto
                            $.get(url, function(data) {
                                $('#moneda_id').val(data.id);
                                $('#coin').val(data.coin);
                                $('#conversion').val(data.conversion);
                            });
                        });

                        $('#updateButton').on('click', function() {
                            const id = $('#moneda_id').val();
                            const url = `{{ url('moneda/index') }}/${id}`;

                            // Hacer la solicitud AJAX para actualizar el producto
                            $.ajax({
                                type: 'PUT',
                                url: url,
                                data: $('#editForm').serialize(),
                                success: function(response) {
                                    location.reload(); // Recargar la página para ver los cambios
                                },
                                error: function(response) {
                                    console.error(error.responseText);
                                    // Manejar errores aquí
                                    console.log(response);
                                }
                            });
                        });
                    });
                </script>

        </div>
    </div>
</div>
@endsection