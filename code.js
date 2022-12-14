let meses = ["Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre"];
let lasemana = ["Domingo", "Lunes", "Martes", "Miércoles", "Jueves", "Viernes", "Sábado"]
let diassemana = ["Lunes", "Martes", "Miércoles", "Jueves", "Viernes", "Sábado", "Domingo"]
diassemana = ["Lun", "Mar", "Mié", "Jue", "Vie", "Sáb", "Dom"]

window.onload = function () {
    hoy = new Date();
    diasemhoy = hoy.getDay();
    diameshoy = hoy.getDate();
    meshoy = hoy.getMonth();
    aniohoy = hoy.getFullYear();

    tit = document.getElementById("titulos"); 
    ant = document.getElementById("anterior"); 
    pos = document.getElementById("posterior"); 

    f0 = document.getElementById("fila0");
    pie = document.getElementById("fechaactual");
    pie.innerHTML += lasemana[diasemhoy] + " " + diameshoy + " de " + meses[meshoy] + " del " + aniohoy;
    document.buscar.buscaanno.value = aniohoy;
    mescal = meshoy; 
    annocal = aniohoy
    
    cabecera()
    primeralinea()
    escribirdias()
}
function cabecera() {
    tit.innerHTML = meses[mescal] + " - " + annocal;
}
//primera línea de tabla: días de la semana.
function primeralinea() {
    for (i = 0; i < 7; i++) {
        celda0 = f0.getElementsByTagName("section")[i];
        celda0.innerHTML = diassemana[i]
    }
}
function escribirdias() {
    primeromes = new Date(annocal, mescal, "1")
    prsem = primeromes.getDay()
    prsem--;
    if (prsem == -1) { prsem = 6; }

    diaprmes = primeromes.getDate()
    prcelda = diaprmes - prsem; 
    empezar = primeromes.setDate(prcelda)
    diames = new Date()
    diames.setTime(empezar);
    
    for (i = 1; i < 7; i++) {
        fila = document.getElementById("fila" + i);
        for (j = 0; j < 7; j++) {
            midia = diames.getDate()
            mimes = diames.getMonth()
            mianno = diames.getFullYear()
            celda = fila.getElementsByTagName("section")[j];
            celda.firstElementChild.innerHTML = midia;
            
            celda.classList.add("more");
            celda.classList.remove("hoy");
           
            if (j == 6) {
                celda.classList.add("dom");
            }
           
            if (mimes != mescal) {
                celda.classList.add("previus");
            }
            
            if (mimes == meshoy && midia == diameshoy && mianno == aniohoy) {
                celda.classList.add("hoy");
                celda.firstElementChild.innerHTML =midia;
            }
            midia = midia + 1;
            diames.setDate(midia);
        }
    }
}
function mesantes() {
    nuevomes = new Date() 
    primeromes--; 
    nuevomes.setTime(primeromes) 
    mescal = nuevomes.getMonth() 
    annocal = nuevomes.getFullYear()
    cabecera() 
    escribirdias() 
}
function mesdespues() {
    nuevomes = new Date() 
    tiempounix = primeromes.getTime() 
    tiempounix = tiempounix + (45 * 24 * 60 * 60 * 1000) 
    nuevomes.setTime(tiempounix) 
    mescal = nuevomes.getMonth() 
    annocal = nuevomes.getFullYear()
    cabecera() 
    escribirdias() 
}
function actualizar() {
    mescal = hoy.getMonth();
    annocal = hoy.getFullYear();
    cabecera()
    escribirdias()
}
function mifecha() {
    mianno = document.buscar.buscaanno.value;
    listameses = document.buscar.buscames;
    opciones = listameses.options;
    num = listameses.selectedIndex
    mimes = opciones[num].value;
    if (isNaN(mianno) || mianno < 1) {
        alert("El año no es válido:\n debe ser un número mayor que 0")
    }
    else { 
        mife = new Date(); 
        mife.setMonth(mimes);
        mife.setFullYear(mianno);
        mescal = mife.getMonth();
        annocal = mife.getFullYear();
        cabecera()
        escribirdias()
    }
}