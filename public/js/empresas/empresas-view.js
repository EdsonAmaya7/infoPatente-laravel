

let tablaEmpresa = $('#tabla-empresas').DataTable({

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
        url: route('getEmpresas'),
        type: "get",
    },
    columns: [
       { data : "id"},
       { data : "nombre"},
       { data : "nombre_rl"},
       { data : "direccion1_rl"},
       { data : "direccion2_rl"},
       { data : "email_rl"},
       { data : "telefono"},
       { data : "updated_at"},
       { data : "id"},
    ],

})