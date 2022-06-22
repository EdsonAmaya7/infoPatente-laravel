
function mensajeSwal(message, icon, title) {
    Swal.fire({
        timer: 1500,
        icon: icon,
        title: title,
        text: message,
    });
}
let tablaEmpresa = $('#tabla-empresas').DataTable({

    language: {
        url: "https://cdn.datatables.net/plug-ins/1.11.4/i18n/es_es.json",
    },
    // scrollY: "300px",
    // scrollX: "500px",
    // scrollCollapse: true,
    info: false,
    paging: false,
    // autoWidth: true,
    searching: false,
    responsive: true,
    ajax: {
        url: route('getEmpresas'),
        type: "get",
    },
    columns: [
        { data: "id" },
        { data: "nombre" },
        { data: "nombre_rl" },
        { data: "direccion1_rl" },
        { data: "direccion2_rl" },
        { data: "email_rl" },
        { data: "telefono" },
        {
            data: "updated_at",
            render: function (fecha) {
                if (fecha == null) {
                    return "N/A";
                }
                return fecha.slice(0, 10);
            }
        },
        {
            data: "id",
            render: function (type, data, row) {
                return `<div class="row">
                <div class="col">
                    <a target="_blank" onclick='ActualizarEmpresa(${row.id}, "${row.email}")' class="" data-position="bottom" data-tooltip="Autorizar">
                    <i class="fas fa-check"style="color:#008F39"></i>
                     </a>
                 </div>
                <div class="col">
                    <a onclick='deleteEmpresa(${row.id})' class="" data-position="bottom" data-tooltip="Borrar">
                    <i class="fas fa-trash" style="color:#FF0000"></i>
                    </a>
                </div>
            </div>`
            }
        },
    ],
    // columnDefs: [
    //     {
    //         target: 0,
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
        $('#tabla-empresas').Tabledit({

            url: route('empresas.store'),
            editButton: false,
            deleteButton: false,
            hideIdentifier: true,
            columns: {
                identifier: [0, 'id'],
                editable: [
                    [1, 'nombre'],
                    [2, 'nombre_rl'],
                    [3, 'direccion1_rl'],
                    [4, 'direccion2_rl'],
                    [5, 'email_rl'],
                    [6, 'telefono'],
                    // [7, 'nombre_sol'],
                    // [8, 'email_sol'],
                    // [9, 'telefono_sol'],
                ],
                onSuccess(data, textStatus, jqXHR) {
                    // console.log("SIU");
                }
            }
        })



    },
})


async function deleteEmpresa(id) {
    event.preventDefault();

    let url = route('empresas.destroy', id)
    let init = {
        method: "DELETE",
        headers: {
            "X-CSRF-TOKEN": window.CSRF_TOKEN,
            "Content-Type": "application/json",
            Accept: "application/json",
        },
    }
    let req = await fetch(url, init)
    if (req.ok) {
        await tablaEmpresa.ajax.url(route('getEmpresas')).load()
        mensajeSwal("Empresa Eliminada", "success", "success")
    } else {
        mensajeSwal("Algo Fallo ", "error", "Error")
    }
}
