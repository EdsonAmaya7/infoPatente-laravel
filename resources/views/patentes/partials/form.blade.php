
            <div class="col-md-12 text-center mt-4">
                <h1>  {{ isset($patente) == false ? 'Nueva Patente' : 'Editar Patente' }}</h1>
            </div>
            @if (session('mensaje'))
            <div class="mt-2 p-3 bg-success text-white text-center rounded-pill ">
                <div>{{ session('mensaje') }}</div>
            </div>
            @endif

            <div class="row">
                <div class="col-md-6">
                    <div class="item item-label mb-3" style="margin-left: 150px">
                        <div class="">
                            <label style="font-size: 20px" for="">Nombre de la Patente</label>
                            <input id="nombrePatente" type="text" class="form-control" name="nombre"
                            value="{{ isset($patente) == false ? '' : $patente->nombre }}">
                            <div class="d-flex justify-content-end mt-2">
                                <i class="fa fa-question" data-bs-toggle="tooltip"
                                    title="Trate de ser conciso y descriptivo de lo que es o hace la patente. Este nombre no es un nombre de archivo."></i>
                            </div>
                            @error('nombre')
                            <p>{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div style="margin-left: 100px">
                        <div class="">
                            <h4 for="">Pais donde esta patente sera presentada</h4>
                            <select name="pais_presentacion" id="pais_presentacion" class="form-control"
                                style="width: 60%;">
                                <option value="" disabled selected>Selecciona una opcion</option>
                                <option value="1"
                                {{ isset($patente) == false ? '' : 'selected' }}
                                >Mexico</option>
                            </select>
                            <div class="d-flex justify-content-end mt-2" style="width: 60%;">
                                <i class="fa fa-question" data-bs-toggle="tooltip"
                                    title="Si el pais que necesita no esta disponible, contactar: adiministrador@infopatente.mx"></i>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <div class="row mt-5">
                <div class="col-md-6">
                    <div style="margin-left: 100px">
                        <div class="">
                            <h4 for="">¿Se clasifica como entidad pequeña?</h4>
                            <select name="entidad_pequenia" id="entidad_pequenia" class="form-control"
                                style="width: 60%;">
                                <option value="" disabled selected>Selecciona una opcion</option>
                                <option value="1"
                                {{ isset($patente) == false ? '' : $patente->entidad_pequenia == 1 ? 'selected' : '' }}
                                >
                                Si</option>
                                <option value="0"
                                {{ isset($patente) == false ? '' : $patente->entidad_pequenia == 0 ? 'selected' : '' }}
                                >No</option>
                            </select>
                            <div class="d-flex justify-content-end mt-2" style="width: 60%;">
                                <i class="fa fa-question" data-bs-toggle="tooltip"
                                    title="Una entidad pequeña se define como: persona, empresa pequeña u organización sin fines de lucro"></i>
                            </div>
                        </div>
                        @error('entidad_pequenia')
                        <p>{{ $message }}</p>
                        @enderror
                    </div>
                </div>
                <div class="col-md-6">
                    <div style="margin-left: 100px">
                        <div class="">
                            <h4 for="">Seleccione tipo de patente</h4>
                            <select name="tipo" id="tipo" class="form-control" style="width: 60%;">
                                <option value="" disabled selected>Selecciona una opcion</option>
                                <option value="Utilidad"
                                {{ isset($patente) == false ? '' : $patente->tipo == 'Utilidad' ? 'selected' : '' }}
                                >Utilidad</option>
                                <option value="Diseño"
                                {{ isset($patente) == false ? '' : $patente->tipo == 'Diseño' ? 'selected' : '' }}
                                >Diseño</option>
                                <option value="Planta"
                                {{ isset($patente) == false ? '' : $patente->tipo == 'Planta' ? 'selected' : '' }}
                                
                                >Planta</option>
                            </select>
                            <div class="d-flex justify-content-end mt-2" style="width: 60%;">
                                <i class="fa fa-question" data-bs-toggle="tooltip"
                                    title="Seleccione una opcion para desplegar una pequeña descripcion"></i>
                            </div>
                        </div>
                        @error('tipo')
                        <p>{{ $message }}</p>
                        @enderror
                    </div>
                </div>


            </div>
            <div class="row mt-5">
                <div class="col-md-6">
                    <div style="margin-left: 100px">
                        <div class="">
                            <h4 for="">Seleccione tipo de aplicación</h4>
                            <select name="aplicacion" id="aplicacion" class="form-control" style="width: 60%;">
                                <option value="" disabled selected>Selecciona una opcion</option>
                                <option value="nueva"
                                {{ isset($patente) == false ? '' : $patente->aplicacion == 'nueva' ? 'selected' : '' }}
                                >Nueva aplicacion</option>
                            </select>
                            <div class="d-flex justify-content-end mt-2" style="width: 60%;">
                                <i class="fa fa-question" data-bs-toggle="tooltip"
                                    title="Seleccione una opcion para desplegar una pequeña descripcion"></i>
                            </div>
                        </div>
                        @error('aplicacion')
                        <p>{{ $message }}</p>
                        @enderror
                    </div>
                </div>
                <div class="col-md-6">
                    <div style="margin-left: 100px">
                        <div class="">
                            <h4 for="">Tarifa de descuento</h4>
                            <select name="tarifa_descuento" id="tarifa_descuento" class="form-control"
                                style="width: 60%;">
                                <option value="" disabled selected>Selecciona una opcion</option>
                                <option value="1"
                                {{ isset($patente) == false ? '' : $patente->tarifa_descuento == '1' ? 'selected' : '' }}
                                >Si</option>
                                <option value="0"
                                {{ isset($patente) == false ? '' : $patente->tarifa_descuento == '0' ? 'selected' : '' }}
                                >No</option>
                            </select>
                            <div class="d-flex justify-content-end mt-2" style="width: 60%;">
                                <i class="fa fa-question" data-bs-toggle="tooltip"
                                    title="Cuando la prestación de los servicios sea solicitada por inventores personas físicas, por micro o pequeñas industrias, por instituciones de educación superior públicas o privadas, por institutos de investigación científica y tecnológica del sector público, podrán pagar únicamente el 50% de las cuotas de la Tarifa."></i>
                            </div>
                        </div>
                        @error('tarifa_descuento')
                        <p>{{ $message }}</p>
                        @enderror
                    </div>
                </div>
            </div>

