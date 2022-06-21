<div class="container-fluid ms-5 me-5  p-5 mt-3 card
d-flex justify-content-center">

    <div class="d-flex justify-content-center">
        <h4>Empresas Registradas</h4>
    </div>
    <div class=" card-body ">
        <table class="table" style="width: 100%;" id="tabla-empresas">
            <thead>
                <th>id</th>
                <th>Nombre</th>
                <th>Representante legal</th>
                <th>Direccion 1</th>
                <th>Direccion 2</th>
                <th>Correo (Representante legal)</th>
                <th>Telefono (Representante legal)</th>
                <th>Fecha Modificacion</th>
                <th style="width: 10%;">Acciones</th>
            </thead>
        </table>
    </div>
</div>
{{-- <script src="js/empresas-view.js"></script> --}}



@push('scripts')
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.12.1/datatables.min.js"></script>

<script src="{{ asset('js/empresas/empresas-view.js') }}" defer></script>
@endpush