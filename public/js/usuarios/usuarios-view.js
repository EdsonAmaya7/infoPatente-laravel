
let empresas = {}
let empresasJson = {}



async function getEmpresas()
{
    let url= route('getEmpresas');
    let init = {
        method: "get",
    };
    let req = await fetch(url,init);
    let { data } = await req.json();
    empresas = data
 empresasJson = empresas.reduce((acc, opt, index) => {
  acc[opt.id] = opt.nombre;
  return acc;
}, {})
console.log(JSON.stringify(empresasJson))
}
getEmpresas()

addEventListener('DOMContentLoaded',() =>{
let tablausuario = $('#tabla-usuarios').DataTable({
    language: {
        url: "https://cdn.datatables.net/plug-ins/1.11.4/i18n/es_es.json",
    },
    scrollY: "300px",
    scrollX: "500px",
    scrollCollapse: true,
    info: false,
    paging: false,
    autoWidth: true,
    responsive: true,
    ajax: {
        url: route('getUsuarios'),
        type: "get",
    },
    columns: [
        { data: "id" },
        { data: "tipo_usuario" },
        { data: "empresa_id" },
        { data: "num_identificacion" },
        { data: "name" },
        { data: "email" },
        { data: "telefono" },
        {
            data: "updated_at",
            render: function (fecha) {
                return fecha.slice(0, 10);
            }
        },
        {
            data: "id",
            render: function (id, data, row) {
                return `
            <div class="row">
                <div class="col">
                    <a target="_blank" onclick='ActualizarU(${id}, "${row.email}")' class="" data-position="bottom" data-tooltip="Autorizar">
                    <i class="fas fa-check"style="color:#008F39"></i>
                     </a>
                 </div>
                <div class="col">
                    <a onclick='deleteUsuario(${id})' class="" data-position="bottom" data-tooltip="Borrar">
                    <i class="fas fa-trash" style="color:#FF0000"></i>
                    </a>
                </div>
            </div>`
            }
        },
    ],
    // columnDefs: [
    //     {
    //         target: 1,
    //         visible: false,
    //         searchable: false,
    //     }
    // ],

    drawCallback: function () {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': window.CSRF_TOKEN
            }
        });
        $('#tabla-usuarios').Tabledit({

            url: route('usuarios.store'),
            editButton: false,
            deleteButton: false,
            hideIdentifier: true,
            columns: {
                identifier: [0, 'id'],
                editable: [
                    [1, 'tipo_usuario'],
                    [2, 'empresa_id', '{"1":"N/A","2":"uadec","3":"tec"}' ],
                    // [2, 'empresa_id', empresasJson ],
                    [3, 'num_identificacion'],
                    [4, 'name'],
                    [5, 'email'],
                    [6, 'telefono'],
                    [7, 'name'],
                ],
                onSuccess(data, textStatus, jqXHR) {
                    // console.log("SIU");
                }
            }
        })



    },

})
})

async function deleteUsuario(id) {
    event.preventDefault();

    let url = route('usuarios.destroy', id);
    let init = {
        method: "DELETE",
        headers: {
            "X-CSRF-TOKEN": window.CSRF_TOKEN,
            "Content-Type": "application/json",
            Accept: "application/json",
        },
    }
    let req = await fetch(url, init);
    if (req.ok) {
        Swal.fire({
            timer: 1500
            , icon: 'success'
            , title: 'Success'
            , text: "Usuario eliminado con exito"
        });
        await tablausuario.ajax.url(route('getUsuarios')).load();
    } else {

        Swal.fire({
            icon: 'error'
            , title: 'Error'
            , text: "Error al eliminar cliente"
        });
    }

}


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


