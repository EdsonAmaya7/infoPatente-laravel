<div class="modal" id="modal-autores">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="container shadow-lg p-2 mb-5 mt-1 bg-body rounded ">

                <h2 style="text-align:center" id="tituloModal" class="p-3 fondo-nomina"></h2>
                <div>
                    <div class="d-flex justify-content-end">
                        <button type="button" class="btn-closemt-3 me-3"
                        data-dismiss="modal"
                        {{-- data-bs-dismiss="modal" --}}
                        >X</button>
                    </div>
                </div>

                <form id="gastoOperacionFormModal" onsubmit="actualizarGastoOperacion()"
                    class="container-fluid  pt-5 pb-3" novalidate>
                    {{-- @csrf --}}
                    {{-- @include('nominas.nomina.gastosOperacion.partials.form') --}}
                    <div id="modal-contenido-autores"></div>
                    <div class="d-flex justify-content-end">
                        <button type="submit" class="btn boton-nomina mb-0 m-0 mt-5" type="button">Guardar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
