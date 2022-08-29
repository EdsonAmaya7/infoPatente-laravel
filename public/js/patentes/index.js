let tablePatentesAplicadas = $("#table-patentes-aplicadas").DataTable({
    info: false,
    language: {
        url: "https://cdn.datatables.net/plug-ins/1.11.4/i18n/es_es.json"
    },
    paging: false,
    sort: false,
    searching: false,
    ajax: {
        url: route('getPatentes'),
        type: 'GET',
    },
    columns: [
        { data: "nombre" },
        {
            data: null,
            render: function (data) {
                if (data.pais_presentacion == 1) {
                    return "México"
                } else {
                    return "USA"
                }
            }
        },
        {
            data: null,
            render: function (data) {
                if (data.entidad_pequenia == 1) {
                    return "Si";
                } else {
                    return "No"
                }
            }
        },
        { data: "tipo" },
        { data: "aplicacion" },
        { data: "autorizacion" },
        { data: "updated_at" },
        {
            data: "id",
            render: function (id) {
                return `
                <div class="d-flex justify-content-center align-items-center">
                    <a onclick="editarPatente(${id})"
                                            title="Editar orden de venta"><i class="fas fa-edit"></i></a>
                    <button onclick="deletePatente(${id})" class="btn "><i class="fa-solid fa-trash" style="color:red"></i></button>
                </div>
                `
            }
        }
    ]
});


function mensajeSwal(message, icon, title) {
    Swal.fire({
        timer: 1500,
        icon: icon,
        title: title,
        text: message,
    });
}
function editarPatente(id) {

    location.href = route('patentes.edit', id)
    // route('patentes.edit', $patente->id)
}
async function deletePatente(id) {
    event.preventDefault();

    let url = route('patentes.destroy', id)
    let init = {
        method: "DELETE",
        headers: {
            "X-CSRF-TOKEN": $('#csrf').attr('content'),
            "Content-Type": "application/json",
            Accept: "application/json",
        },
    }
    let req = await fetch(url, init)
    if (req.ok) {
        await tablePatentesAplicadas.ajax.url(route('getPatentes')).load()
        mensajeSwal("Patente Eliminada", "success", "success")
    } else {
        mensajeSwal("Algo Fallo ", "error", "Error")
    }
}
