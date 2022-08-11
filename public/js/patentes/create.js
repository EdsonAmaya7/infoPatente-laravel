let patente = document.getElementById("nombrePatente").value;
// Modal de autores
function mensajeSwal(message, icon, title) {
    Swal.fire({
        timer: 1500,
        icon: icon,
        title: title,
        text: message,
    });
}
document.getElementById("NumAutores").onchange = async () => {
    let representante = [];
    let autores = document.getElementById("NumAutores").value;
    patente = document.getElementById("nombrePatente").value;

    let html = "";

    // if ([patente].includes('')) {
    //     mensajeSwal("Favor de ingresar el nombre de la patente para continuar", "error", "Error")
    //     // $("#NumAutores").val("0");
    //     autores = 0
    // }
    // else {
    for (let i = 1; i <= autores; i++) {

        const url = route('ultimaPatenteByUser');

        const init = {
            method: "GET",
            headers: {
                Accept: "application/json"
            }
        }

        const req = await fetch(url, init);

        if (req.ok) {
            const res = await req.json();

            console.log(res);

            tituloModal = document.getElementById("tituloModal").innerHTML = "Agregar Autores"

            html += `
              <h5 class="text-center">Datos Autor ${i}</h5>
                <div class="row">
                <input class="form-control" type="text" id="ultimo_id" value="${res.id}">
                  <div class="col-md-4 mt-2">
                    <label class="text-dark" for="NombreAutor${i}">Nombre </label>
                    <input id="NombreAutor${i}" name="NombreAutor${i}" type="text" class="form-control" placeholder="">
                  </div>
                  <div class="col-md-4 mt-2 ">
                    <label class="text-dark" for="ApellidoPAutor${i}">Apellido Paterno</label>
                    <input id="ApellidoPAutor${i}" name="ApellidoPAutor${i}" type="text" class="form-control" placeholder="">
                  </div>
                  <div class="col-md-4 mt-2 ">
                    <label class="text-dark" for="ApellidoMAutor${i}">Apellido Materno</label>
                    <input id="ApellidoMAutor${i}" name="ApellidoMAutor${i}" type="text" class="form-control" placeholder="">
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-4 mt-2">
                    <label class="text-dark" for="Direccion1Autor${i}">Direccion 1 (Calle y Numero)</label>
                    <input id="Direccion1Autor${i}" name="Direccion1Autor${i}" type="text" class="form-control" placeholder="">
                  </div>
                  <div class="col-md-4 mt-2">
                    <label class="text-dark" for="Direccion1Autor${i}">Direccion 2 (Colonia)</label>
                    <input id="Direccion2Autor${i}" name="Direccion2Autor${i}" type="text" class="form-control" placeholder="">
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-4 mt-2">
                    <label class="text-dark" for="Pais${i}">Pais</label>
                    <select id="PaisAutor${i}" name="PaisAutor${i}" class="form-control">
                      <option disabled selected value>Seleccione pais</option>
                      <option value="Mexico">Mexico</option>
                    </select>
                  </div>
                  <div class="col-md-4 mt-2">
                    <label class="text-dark" for="Estado${i}">Estado</label>
                    <select id="EstadoAutor${i}" name="EstadoAutor${i}" class="form-control">
                      <option disabled selected value>Seleccione Estado</option>
                      <option value="Aguascalientes">Aguascalientes</option>
                      <option value="Baja California">Baja California</option>
                      <option value="Baja California Sur">Baja California Sur</option>
                      <option value="Campeche">Campeche</option>
                      <option value="Coahuila">Coahuila</option>
                      <option value="Colima">Colima</option>
                      <option value="Chiapas">Chiapas</option>
                      <option value="Chihuahua">Chihuahua</option>
                      <option value="Ciudad de Mexico">Ciudad de Mexico</option>
                      <option value="Durango">Durango</option>
                      <option value="Guanajuato">Guanajuato</option>
                      <option value="Guerrero">Guerrero</option>
                      <option value="Hidalgo">Hidalgo</option>
                      <option value="Jalisco">Jalisco</option>
                      <option value="Mexico">México</option>
                      <option value="Michoacan">Michoacán</option>
                      <option value="Morelos">Morelos</option>
                      <option value="Nayarit">Nayarit</option>
                      <option value="Nuevo Leon">Ciudad de Mexico</option>
                      <option value="Oaxaca">Durango</option>
                      <option value="Puebla">Puebla</option>
                      <option value="Queretaro">Querétaro</option>
                      <option value="Quintana Roo">Quintana Roo </option>
                      <option value="San Luis Potosi">San Luis Potosí</option>
                      <option value="Sinaloa ">Sinaloa</option>
                      <option value="Sonora">Sonora</option>
                      <option value="Tabasco">Tabasco</option>
                      <option value="Tamaulipas">Tamaulipas</option>
                      <option value="Tlaxcala">Tlaxcala</option>
                      <option value="Veracruz">Veracruz</option>
                      <option value="Yucatan">Yucatán</option>
                      <option value="Zacatecas">Zacatecas</option>
                    </select>
                  </div>
                  <div class="col-md-4 mt-2">
                    <label class="text-dark" for="CiudadAutor${i}">Ciudad</label>
                    <input id="CiudadAutor${i}" name="CiudadAutor${i}" type="text" class="form-control" placeholder="">
                  </div>
                  <div class="col-md-4 mt-2">
                    <label class="text-dark" for="CPAutor${i}">Codigo Postal</label>
                    <input id="CPAutor${i}" name="CPAutor${i}" type="text" class="form-control" placeholder="" maxlength="5">
                  </div>
                </div>
              </div>
            `
        }
        document.getElementById("modal-contenido-autores").innerHTML = html;

        $('#modal-autores').modal('show');
    }
}




// Modal de representante legal
document.getElementById("representante_legal").onchange = () => {
    let representante = [];
    let representanteLegal = document.getElementById("representante_legal").value;
    console.log(representanteLegal, 'representanteLegal')
    if (representanteLegal == 1) {
        tituloModal = document.getElementById("tituloModal").innerHTML = "Agregar Representante Legal"
        let html =
            `<h5 class="center-align">Datos Representante Legal</h5>
             <div class="col">
               <div class="row">
                 <div class="col-md-4">
                   <input id="NombreRL" name="NombreRL" type="text" class="form-control" placeholder="">
                   <label class="text-dark" for="NombreRL">Nombre </label>
                 </div>
                 <div class="col-md-4">
                   <input id="ApellidoPRL" name="ApellidoPRL" type="text" class="form-control" placeholder="">
                   <label class="text-dark" for="ApellidoPRL">Apellido Paterno</label>
                 </div>
                 <div class="col-md-4">
                   <input id="ApellidoMRL" name="ApellidoMRL" type="text" class="form-control" placeholder="">
                   <label class="text-dark" for="ApellidoMRL">Apellido Materno</label>
                 </div>
               </div>
               <div class="row">
                 <div class="col-md-4">
                   <input id="Direccion1RL" name="Direccion1RL" type="text" class="form-control" placeholder="">
                   <label class="text-dark" for="Direccion1RL">Direccion 1 (Calle y Numero)</label>
                 </div>
                 <div class="col-md-4">
                   <input id="Direccion2RL" name="Direccion2RL" type="text" class="form-control" placeholder="">
                   <label class="text-dark" for="Direccion1RL">Direccion 2 (Colonia)</label>
                 </div>
               </div>
               <div class="row">
                 <div class="col-md-4">
                   <select id="PaisRL" name="PaisRL" class="browser-default">
                     <option disabled selected value>Seleccione pais</option>
                     <option value="Mexico">Mexico</option>
                   </select>
                 </div>
                 <div class="col-md-4">
                   <select id="EstadoRL" name="EstadoRL" class="browser-default">
                     <option disabled selected value>Seleccione Estado</option>
                     <option value="Aguascalientes">Aguascalientes</option>
                     <option value="Baja California">Baja California</option>
                     <option value="Baja California Sur">Baja California Sur</option>
                     <option value="Campeche">Campeche</option>
                     <option value="Coahuila">Coahuila</option>
                     <option value="Colima">Colima</option>
                     <option value="Chiapas">Chiapas</option>
                     <option value="Chihuahua">Chihuahua</option>
                     <option value="Ciudad de Mexico">Ciudad de Mexico</option>
                     <option value="Durango">Durango</option>
                     <option value="Guanajuato">Guanajuato</option>
                     <option value="Guerrero">Guerrero</option>
                     <option value="Hidalgo">Hidalgo</option>
                     <option value="Jalisco">Jalisco</option>
                     <option value="Mexico">México</option>
                     <option value="Michoacan">Michoacán</option>
                     <option value="Morelos">Morelos</option>
                     <option value="Nayarit">Nayarit</option>
                     <option value="Nuevo Leon">Ciudad de Mexico</option>
                     <option value="Oaxaca">Durango</option>
                     <option value="Puebla">Puebla</option>
                     <option value="Queretaro">Querétaro</option>
                     <option value="Quintana Roo">Quintana Roo </option>
                     <option value="San Luis Potosi">San Luis Potosí</option>
                     <option value="Sinaloa ">Sinaloa</option>
                     <option value="Sonora">Sonora</option>
                     <option value="Tabasco">Tabasco</option>
                     <option value="Tamaulipas">Tamaulipas</option>
                     <option value="Tlaxcala">Tlaxcala</option>
                     <option value="Veracruz">Veracruz</option>
                     <option value="Yucatan">Yucatán</option>
                     <option value="Zacatecas">Zacatecas</option>
                   </select>
                 </div>
                 <div class="col-md-4">
                   <input id="CiudadRL" name="CiudadRL" type="text" class="form-control" placeholder="">
                   <label class="text-dark" for="CiudadRL">Ciudad</label>
                 </div>
                 <div class="col-md-4">
                   <input id="CPRL" name="CPRL" type="text" class="form-control" placeholder="" maxlength="5">
                   <label class="text-dark" for="CPRL">Codigo Postal</label>
                 </div>
               </div>
             </div>`

        document.getElementById("modal-contenido-autores").innerHTML = html;

        $('#modal-autores').modal('show');
    }
}
