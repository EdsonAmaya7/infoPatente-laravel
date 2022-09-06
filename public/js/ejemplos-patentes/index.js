
const tiposVentanas = document.querySelector('#tiposVentanas'),
    divEjemplosPatentes = document.querySelector('#ejemplosPatentes'),
    divShowResultados = document.querySelector('#showResultados'),
    divSeccion = document.querySelector('#seccion'),
    frameResultados = document.querySelector('#frameResultados'),
    selectEjemplosPatentes = document.querySelector('#ejemplosEspecificos'),
    btnanterior = document.querySelector('#anterior'),
    btnsiguiente = document.querySelector('#siguiente'),
    divLeyenda = document.querySelector('#leyenda');

const rutasPatentes = {
    'joyeria': '/patentesEjemplos/MEX/Joyeria/Joyeria_Example0001.htm',
    'joyeria2': '/patentesEjemplos/MEX/Joyeria/Joyeria_Example0002.htm',
    'alimentacion': '/patentesEjemplos/MEX/Alimentacion/Alimentacion_Example0001.htm',
    'alimentacion2': '/patentesEjemplos/MEX/Alimentacion/Alimentacion_Example0002.htm',
    'automotriz': '/patentesEjemplos/MEX/Automotriz/Automotriz_Example0001.htm',
    'automotriz2': '/patentesEjemplos/MEX/Automotriz/Automotriz_Example0002.htm',
    'medico': '/patentesEjemplos/MEX/Medico/Medico_Example0001.htm',
    'medico2': '/patentesEjemplos/MEX/Medico/Medico_Example0002.htm',
    'farmaceutico': '/patentesEjemplos/MEX/Farmaceutico/Farmaceutico_Example0001.HTM',
    'farmaceutico2': '/patentesEjemplos/MEX/Farmaceutico/Farmaceutico_Example0002.HTM',
    'materiales': '/patentesEjemplos/MEX/Materiales/Materiales_Example0001.htm',
    'materiales2': '/patentesEjemplos/MEX/Materiales/Materiales_Example0002.htm',
    'computadoras': '/patentesEjemplos/MEX/Computadoras/Computadoras_Example0001.htm',
    'computadoras2': '/patentesEjemplos/MEX/Computadoras/Computadoras_Example0002.htm',
}

const rutaPreseleccionada = rutasPatentes['joyeria'];

const aplicacionDescripcion = {
    '#Abstract_Bookmark': 'Una síntesis basada en la descripción, reivindicaciones y dibujos. La síntesis indicara el sector técnico al que pertenece la invención y deberá de redactarse en tal forma que permita una comprensión del problema técnico, de la esencia de la solución de ese problema mediante la invención y del uso o usos principales de la misma',
    '#Background_Bookmark': `En esta sección debes de proceder a escribir los antecedentes: ¿Qué es lo que ya existe en el mercado igual o parecido ? Da ejemplos y citas de otras patentes si es posible. Indica sus debilidades.Su falla al hacer la función deseada eficientemente. Su alto costo, tamaño, configuración y falta de utilidad. Como se va a beneficiar el consumidor / empresa con este nuevo producto / proceso.
                              Hay que vender la idea al que lea esta patente.
                              Hay que explicar como se concibió esta invención.
                              Cual es la necesidad de esta invención y su desarrollo.
                              Como es que la presente invención va a evitar todas las debilidades y fallas, así como su función será más ventajosa con respecto a la competencia.`,
    '#Summary_Bookmark': `Este sumario debe describir los principales componentes de la patente.
                              Utiliza párrafos cortos describiendo la función principal de los componentes y sus ventajas. Las ventajas pueden ser:
                              Método de construcción.
                              Reducción del número de partes (comparado al arte previo).
                              Reducción de tamaño y costo.
                              Más eficiencia que productos previos.
                              Flexibilidad de uso con respecto a los productos competitivos`,
    '#Detail_Bookmark': `Esta sección contiene una breve descripción de los dibujos.
                              Da una breve descripción de cada figura en el dibujo.
                              Referencia en número de figura y la vista particular (ejemplo: perspectiva, corte seccional, etc.)`,
    '#Drawings_Bookmark': `La sección de descripción detallada deberá incluir el mejor método conocido por el solicitante para llevar a la práctica la invención. Es decir debes expresar las medidas y acciones para ejecutar la invención.
                              Descripción detallada de la invención
                              Esta sección empieza por referirse al dispositivo mostrado en la Figura 1. 
                              Continúa asignando números consecutivos a las diferentes partes que se describen.
                              A medida que la descripción continúa referenciando diferentes partes su interrelación y características funcionales son mencionadas.
                              El último párrafo de la descripción debe mencionar aplicaciones adicionales para la invención y cómo el aplicante puede modificar la invención para adaptarla a nuevas aplicaciones sin salirse del espíritu y alcance de las reivindicaciones adjuntas.`,
    '#Claims_Bookmark': `Las reivindicaciones son las características técnicas esenciales de una invención, para las cuales se reclama la protección legal mediante la solicitud de patente. Las reivindicaciones determinan el alcance de la protección legal otorgada.
                              Reivindicaciones.
                              Las especificaciones terminan con una o más reivindicaciones.
                              Las reivindicaciones indican el contenido que el inventor considera su invención.
                              Reivindicaciones independientes.
                              Es una reivindicación amplia que en términos generales cubre todos los elementos de la invención.
                              Reivindicación dependiente
                              Una reivindicación dependiente contiene una referencia a una reivindicación previamente establecida y explica los términos generales definidos en la reivindicación previa a la cual hace referencia.`,
    '#Actual_Drawings_Bookmark': `Indica el campo técnico al que se refiere la invención`,
    '#Resumen_Bookmark': `Indica el campo técnico al que se refiere la invención`
}

document.addEventListener('DOMContentLoaded', () => {

    crearLeyenda()

    frameResultados.src = rutaPreseleccionada
    tiposVentanas.addEventListener('change', seleccionarInfo)
    divSeccion.addEventListener('change', seleccionarInfo)
    selectEjemplosPatentes.addEventListener('change', seleccionarInfo)
    btnanterior.addEventListener('click', anterior)
    btnsiguiente.addEventListener('click', siguiente)
})

function seleccionarInfo() {
    if (tiposVentanas.value === 'descripcion') {
        divShowResultados.innerHTML = aplicacionDescripcion[divSeccion.value]
    } else {
        //divEjemplosPatentes.classList.remove('d-none')
        createUI(rutasPatentes[selectEjemplosPatentes.value])
        buscarSeccionPatente(rutasPatentes[selectEjemplosPatentes.value])
    }
}

function buscarSeccionPatente(ruta) {
    let src = ruta
    let frame = document.getElementById("frameResultados")

    if (tiposVentanas.value === "ejemplos") {

        console.log(src + divSeccion.value, "ruta");
        frame.src = src + divSeccion.value
    }
}

function createUI(ruta) {
    const frameSet = document.createElement('div')
    clearForms()
    frameSet.innerHTML = `
        <frameset id="frameset" rows="50%,*">
        <iframe  id="frameResultados" src="${ruta}" frameborder="0" height="100%" width="100%"></iframe>
        </frameset>`

    divShowResultados.insertBefore(frameSet, document.getElementById('frameset'))
}

function clearForms() {
    while (divShowResultados.firstChild) {
        divShowResultados.removeChild(divShowResultados.firstChild);
    }
}

function anterior() {
    createUI(rutasPatentes[selectEjemplosPatentes.value])
}

function siguiente() {
    createUI(rutasPatentes[selectEjemplosPatentes.value + 2])
}




const crearLeyenda = function () {
    const parrafo = document.createElement('p')

    parrafo.innerHTML = "Para una Mejor experiencia, se recomienda poner el navegador en pantalla dividida"
    parrafo.classList.add('text-white', 'text-center')
    divLeyenda.appendChild(parrafo)

    setTimeout(() => {
        divLeyenda.remove(parrafo)
    }, 7000);
}