let tableUltimaPatente = $("#table-ultima-patente").DataTable({
    info: false,
    language: {
        url: "https://cdn.datatables.net/plug-ins/1.11.4/i18n/es_es.json",
    },
    paging: false,
    sort: false,
    searching: false,
    ajax: {
        url: route('ultimaPatente'),
        type: 'GET',
    },
    columns: [
        { data: "nombre" },
        {
            data: null,
            render: function (data) {
                if (data.pais_presentacion == 1) {
                    return "México"
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
            data: null,
            render: function () {
                return `
                <button class="btn btn-primary"><i class="fa-solid fa-trash"></i></button>
                `
            }
        }
    ]
});
