let patentesTab = document.querySelector('#patentes-tab');
let empresasTab = document.querySelector('#empresas-tab');
let usuariosTab = document.querySelector('#usuarios-tab');
let patentesDiv = document.getElementById('patentes-div');
let empresasDiv = document.getElementById('empresas-div');
let usuariosDiv = document.getElementById('usuarios-div');

addEventListener('DOMContentLoaded', () => {
    patentesDiv.style.display = "inline"
    empresasDiv.style.display = "none"
    usuariosDiv.style.display = "none"
    registrarEventListener()
})

function registrarEventListener() {
    patentesTab.addEventListener('click', seleccionarPatentesTab)
    empresasTab.addEventListener('click', seleccionarEmpresasTab)
    usuariosTab.addEventListener('click', seleccionarUsuariosTab)
}

function seleccionarPatentesTab(e) {
    e.preventDefault();

    patentesDiv.style.display = "inline"
    empresasDiv.style.display = "none"
    usuariosDiv.style.display = "none"

    patentesTab.classList.add('activoSeleccionad')

    if (usuariosTab.classList.contains('activoSeleccionad')) {
        usuariosTab.classList.remove('activoSeleccionad')
    }
     if (empresasTab.classList.contains('activoSeleccionad')) {
        empresasTab.classList.remove('activoSeleccionad')
    }
}

function seleccionarEmpresasTab(e) {
    e.preventDefault();
    document.getElementById('patentes-div').style.display = "none"
    document.getElementById('usuarios-div').style.display = "none"
    empresasDiv.style.display = "inline"
    patentesDiv.style.display = "none"
    usuariosDiv.style.display = "none"

    empresasTab.classList.add('activoSeleccionad')

    if (usuariosTab.classList.contains('activoSeleccionad')) {
        usuariosTab.classList.remove('activoSeleccionad')
    } else if (patentesTab.classList.contains('activoSeleccionad')) {
        patentesTab.classList.remove('activoSeleccionad')
    }
}

function seleccionarUsuariosTab(e) {
    e.preventDefault();
    document.getElementById('empresas-div').style.display = "none"
    document.getElementById('patentes-div').style.display = "none"
    patentesDiv.style.display = "none"
    empresasDiv.style.display = "none"
    usuariosDiv.style.display = "inline"

    usuariosTab.classList.add('activoSeleccionad')

    if (empresasTab.classList.contains('activoSeleccionad')) {
        empresasTab.classList.remove('activoSeleccionad')
    } else if (patentesTab.classList.contains('activoSeleccionad')) {
        patentesTab.classList.remove('activoSeleccionad')
    }
}