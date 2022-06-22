
function mensajeSwal(message, icon, title) {
    Swal.fire({
        timer: 1500,
        icon: icon,
        title: title,
        text: message,
    });
}
let tablapatente = $('#tabla-patentes').DataTable({

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
        url: route('getPatentes'),
        type: "get",
    },
    columns: [
        { data: "id" },
        { data: "nombre" },
        { data: "pais_presentacion" },
        { data: "entidad_pequenia" },
        { data: "tipo" },
        { data: "aplicacion" },
        { data: "autorizacion" },
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
                    <a target="_blank" onclick='ActualizarPatente(${row.id}, "${row.email}")' class="" data-position="bottom" data-tooltip="Autorizar">
                    <i class="fas fa-check"style="color:#008F39"></i>
                     </a>
                 </div>
                <div class="col">
                    <a onclick='deletePatente(${row.id})' class="" data-position="bottom" data-tooltip="Borrar">
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
        $('#tabla-patentes').Tabledit({

            url: route('patentes.store'),
            editButton: false,
            deleteButton: false,
            hideIdentifier: true,
            columns: {
                identifier: [0, 'id'],
                editable: [
                    [1, 'nombre'],
                    [2, 'pais_presentacion'],
                    [3, 'entidad_pequenia'],
                    [4, 'tipo'],
                    [5, 'aplicacion'],
                    [6, 'autorizacion'],
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


async function deletePatente(id) {
    event.preventDefault();

    let url = route('patentes.destroy', id)
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
        await tablapatente.ajax.url(route('getPatentes')).load()
        mensajeSwal("Patente Eliminada", "success", "success")
    } else {
        mensajeSwal("Algo Fallo ", "error", "Error")
    }
}
