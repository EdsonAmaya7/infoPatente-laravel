
          <div class="container-fluid ms-5 me-5  p-5 mt-3 card 
          d-flex justify-content-center">

              <div class="d-flex justify-content-center">
                  <h4>Usuarios Registradas</h4>
              </div>
              <div class=" card-body ">
          {{-- <table class="table table-striped table-bordered dt-responsive nowrap" id="tabla-usuarios"> --}}
          <table class="table " id="tabla-usuarios">
            <thead>
              <th>id</th>
              <th>Tipo</th>
              <th>Empresa</th>
              <th>Matricula</th>
              <th>Nombre</th>
              <th>Correo</th>
              <th>Telefono</th>
              <th>Fecha Modificacion</th>
              <th style="width: 10%;">Acciones</th>
            </thead>
          </table>
        </div>
      </div>


@push('scripts')
<!-- Datatables -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.12.1/datatables.min.js"></script>

<script src="{{ asset('js/usuarios/usuarios-view.js') }}" defer></script>


@endpush
