
<section>
  <div class="card">
    <div class="card-content">
      <span class="card-title center-align">Usuarios Registrados</span>
      <div class="row">
        <div class="container-fluid col-md-12">
          <table class="responsive-table" id="tabla-usuarios">
            <thead>
              <th>Id</th>
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
    </div>
  </div>
  {{-- <script src="js/usuarios-view.js"></script> --}}
</section>

@push('scripts')
<!-- Datatables -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.12.1/datatables.min.js"></script>

<script src="{{ asset('js/usuarios/usuarios-view.js') }}" defer></script>


@endpush
