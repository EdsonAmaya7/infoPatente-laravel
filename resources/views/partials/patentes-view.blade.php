<div class="container-fluid ms-5 me-5  p-5 mt-3 card
d-flex justofy-content-center">

    <div class="d-flex justify-content-center">
        <h4>Patentes Registradas</h4>
    </div>
    <div class=" card-body ">
        <table class="table" style="width: 100%;" id="tabla-patentes">
            <thead>
                <th>ID</th>
                <th>Nombre</th>
                <th>Pais de presentacion</th>
                <th>Entidad pequeña</th>
                <th>Tipo</th>
                <th>Aplicacion</th>
                <th>Autorizado</th>
                <th>Fecha Modificacion</th>
                <th>Acciones</th>
            </thead>
        </table>
    </div>
</div>
{{-- <script src="js/patentes-view.js"></script> --}}




@push('scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.12.1/datatables.min.js"></script>

    <script src="{{ asset('js/patentes/tabla.js') }}" defer></script>
@endpush
