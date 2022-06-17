let tablePatentesAplicadas = $("#table-patentes-aplicadas").DataTable({
    info: false,
    language: {
        url: "https://cdn.datatables.net/plug-ins/1.11.4/i18n/es_es.json"
    },
    paging: false,
    sort: false,
    searching: false,
    ajax:{
        url: route('getPatentes'),
        type: 'GET',
    },
    columns: [
        { data: "nombre"},
        { data: "pais_presentacion"},
        { data: "entidad_pequenia"},
        { data: "tipo"},
        { data: "aplicacion"},
        { data: "autorizado"},
        { data: "updated_at"},
        { data: null,
            render: function(){
                return `
                <button class="btn btn-primary"><i class="fa-solid fa-trash"></i></button>
                `
            }
        }
    ]
});
