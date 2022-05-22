


<section>
  <div class="card">
    <div class="card-content">
      <span class="card-title center-align">Usuarios Registrados</span>
      <div class="row">
        <div class="container-fluid">
          <table class="responsive-table" style="width: 100%;" id="tabla-usuarios">
            <thead>
              <th>ID</th>
              <th>Tipo</th>
              <th>Empresa</th>
              <th>Matricula o folio</th>
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

<script src="{{ asset('js/usuarios/usuarios-view.js') }}" defer></script>
@endpush