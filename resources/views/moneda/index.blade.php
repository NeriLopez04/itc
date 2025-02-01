@extends ('layouts.admin')

@section ('content')
<div class="section">
    <h2 class="card-title">Lista de Monedas</h2>

    @livewire('moneda-edit')

</div>
@endsection

@push('scripts')

@endpush

@livewireScripts