// Oficina de patentes americana
document.getElementById("boton_oficina_patentes").onclick = () => {
    let input = document.getElementById("word_american_patent").value
    if (input == "") {
        window.open("https://patft.uspto.gov/netahtml/PTO/search-bool.html");
    } else {
        window.open("https://patft.uspto.gov/netacgi/nph-Parser?Sect1=PTO2&Sect2=HITOFF&p=1&u=%2Fnetahtml%2FPTO%2Fsearch-bool.html&r=0&f=S&l=50&TERM1=" + input + "&FIELD1=&co1=AND&TERM2=&FIELD2=&d=PTXT");
    }
}

// wipo
document.getElementById("boton_wipo").onclick = () => {
    let input = document.getElementById("word_wipo_patent").value;
    window.open("https://patentscope.wipo.int/search/en/structuredSearch.jsf");
}

// SpaceNet
document.getElementById("boton_spacenet").onclick = () => {
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
    let input = document.getElementById("word_espaniola_patent").value;
    window.open("http://invenes.oepm.es/InvenesWeb/faces/busquedaInternet.jsp;jsessionid=-cFpg6g-keG+QsvJs2UdTX0A.srvvarsovia2");
}

// IMPI
document.getElementById("boton_impi").onclick = () => {
    let input = document.getElementById("word_impi_patent").value;
    window.open("https://siga.impi.gob.mx/newSIGA/content/common/principal.jsf");
}

// Google
document.getElementById("boton_google").onclick = () => {
    let input = document.getElementById("word_google_patent").value;
    if (input == "") {
        window.open("https://www.google.com");
    } else {
        window.open("https://www.google.com/search?q=" + input)
    }
}
