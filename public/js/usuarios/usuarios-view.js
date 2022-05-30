// $(function () {
//TABLA DE USUARIOS


let tablausuario = $('#tabla-usuarios').DataTable({
    language: {
        url: "https://cdn.datatables.net/plug-ins/1.11.4/i18n/es_es.json",
    },
    responsive: true,
    "order": [
        [0, "desc"]
    ],
    "bLengthChange": false,
    ajax: {
        url: route('getUsuarios'),
        type: "get",
    },
    columns: [ //tipo empresa matricula nombrecompleto(concatenarvalores) correo telefono fechamodificacion acciones
        { data: "tipo" },
        { data: "empresa" },
        { data: "num_identificacion" },
        { data: "nombre" },
        { data: "email" },
        { data: "telefono" },
        { data: "updated_at" },
        { data: "id" },
    ]
})

// let tablausuarioOriginal = $('#tabla-usuarios').DataTable({
//     responsive: true,
//     "order": [
//         [0, "desc"]
//     ],
//     "bLengthChange": false,
//     "language": language,
//     ajax: {
//         url: `Controlador/UsuarioController.php`,
//         data: {
//             flag: 1
//         },
//         method: "POST"
//     },
//     columns: [{
//         "data": "id"
//     },
//     {
//         "data": "tipo"
//     },
//     {
//         "data": "empresa"
//     },
//     {
//         "data": "num_identificacion"
//     },
//     {
//         "data": null,
//         render: function (data) {
//             return `${data.nombre} ${data.apellido_paterno} ${data.apellido_materno}`
//         }
//     },
//     {
//         "data": "email"
//     },
//     {
//         "data": "telefono"
//     },
//     {
//         "data": "fecha_mod",
//         render: function (data) {
//             let fecha = new Date(data);
//             let options = {
//                 year: 'numeric',
//                 month: 'long',
//                 day: 'numeric'
//             };
//             return fecha.toLocaleDateString("es-ES", options)
//         }
//     },
//     {
//         "data": "id",
//         render: function (id, data, row) {
//             return `
//                 <div class="row">
//                     <div class="col s6">
//                         <a target="_blank" onclick='ActualizarU(${id}, "${row.email}")' class="btnAutorizarP light-green  btn-small tooltipped" data-position="bottom" data-tooltip="Autorizar">
//                             <i class="material-icons">check</i>
//                          </a>
//                      </div>
//                     <div class="col s6">
//                         <a onclick='deleteUsuario(${id})' class="btnBorrarP red btn-small tooltipped" data-position="bottom" data-tooltip="Borrar">
//                             <i class="material-icons">delete</i>
//                         </a>
//                     </div>
//                 </div>`
//         }
//     }
//     ]
// })

// //DATATABLE EDIT
// $('#tabla-usuarios').on('draw.dt', function () {
//     $('#tabla-usuarios').Tabledit({
//         url: 'Controlador/UsuarioController.php',
//         editButton: false,
//         deleteButton: false,
//         hideIdentifier: true,
//         columns: {
//             identifier: [0, 'id'],
//             editable: [
//                 [5, 'email'],
//                 [6, 'telefono']
//             ]
//         }
//     });
// });
// });

function deleteUsuario(id) {
    Swal.fire({
        title: '¿Estas seguro de que quieres eliminar a este usuario?',
        showDenyButton: true,
        showCancelButton: false,
        confirmButtonText: `Aceptar`,
        denyButtonText: `Cancelar`,
    }).then((result) => {
        /* Read more about isConfirmed, isDenied below */
        if (result.isConfirmed) {
            $.ajax({
                url: `Controlador/UsuarioController.php`,
                data: {
                    flag: 2,
                    id: id
                },
                method: "POST",
                success: location.reload()
            })
        }
    })
};


function ActualizarU(id, email) {
    Swal.fire({
        title: '¿Estas seguro de que quieres autorizar a esta usuario?',
        showDenyButton: true,
        showCancelButton: false,
        confirmButtonText: `Aceptar`,
        denyButtonText: `Cancelar`,
    }).then((result) => {
        /* Read more about isConfirmed, isDenied below */
        if (result.isConfirmed) {
            $.ajax({
                url: `Controlador/UsuarioController.php`,
                data: {
                    flag: 6,
                    id: id,
                    email: email
                },
                method: "POST",
                success: location.reload()
            })
        }
    })
}


