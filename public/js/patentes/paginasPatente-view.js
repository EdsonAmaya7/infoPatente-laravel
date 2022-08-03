// Oficina de patentes americana
document.getElementById("boton_oficina_patentes").onclick = async () => {
    document.getElementById("select_patente_americana").removeAttribute("hidden");
    document.getElementById("input_patente_americana").removeAttribute("hidden");
    let input = document.getElementById("word_american_patent").value
    if (input == "") {
        window.open("https://patft.uspto.gov/netahtml/PTO/search-bool.html");
    } else {

        // URL
        const url = route('paginas.store');

        // FormData
        const formData = new FormData();

        // Datos
        formData.append("palabra", document.getElementById("word_american_patent").value);

        // Init
        const init = {
            method: 'POST',
            body: formData,
            headers: {
                Accept: 'application/json',
                'X-CSRF-TOKEN': $('#csrf').attr('content')
            }
        }

        const req = await fetch(url, init);

        window.open("https://patft.uspto.gov/netacgi/nph-Parser?Sect1=PTO2&Sect2=HITOFF&p=1&u=%2Fnetahtml%2FPTO%2Fsearch-bool.html&r=0&f=S&l=50&TERM1=" + input + "&FIELD1=&co1=AND&TERM2=&FIELD2=&d=PTXT");
    }
}

// wipo
document.getElementById("boton_wipo").onclick = () => {
    document.getElementById("select_wipo").removeAttribute("hidden");
    document.getElementById("input_wipo").removeAttribute("hidden");
    let input = document.getElementById("word_wipo_patent").value;
    window.open("https://patentscope.wipo.int/search/en/structuredSearch.jsf");
}

// SpaceNet
document.getElementById("boton_spacenet").onclick = () => {
    document.getElementById("select_space_net").removeAttribute("hidden");
    document.getElementById("input_space_net").removeAttribute("hidden");
    let input = document.getElementById("word_spacenet_patent").value;
    var campo = input.split(" ");
    if (input == "") {
        window.open("https://lp.espacenet.com/");
    } else {
        window.open("http://lp.espacenet.com/searchResults?DB=lp.espacenet.com&locale=es_LP&query=" + campo.join('+'));
    }
}

// Oficina española
document.getElementById("boton_oficina_espaniola").onclick = () => {
    document.getElementById("select_oficina_espaniola").removeAttribute("hidden");
    document.getElementById("input_oficina_espaniola").removeAttribute("hidden");
    let input = document.getElementById("word_espaniola_patent").value;
    window.open("http://invenes.oepm.es/InvenesWeb/faces/busquedaInternet.jsp;jsessionid=-cFpg6g-keG+QsvJs2UdTX0A.srvvarsovia2");
}

// IMPI
document.getElementById("boton_impi").onclick = () => {
    document.getElementById("select_impi").removeAttribute("hidden");
    document.getElementById("input_impi").removeAttribute("hidden");
    let input = document.getElementById("word_impi_patent").value;
    window.open("https://siga.impi.gob.mx/newSIGA/content/common/principal.jsf");
}

// Google
document.getElementById("boton_google").onclick = () => {
    document.getElementById("select_google").removeAttribute("hidden");
    document.getElementById("input_google").removeAttribute("hidden");
    let input = document.getElementById("word_google_patent").value;
    if (input == "") {
        window.open("https://www.google.com");
    } else {
        window.open("https://www.google.com/search?q=" + input)
    }
}

// TODO: QUITAR ATRIBUTO HIDDEN
