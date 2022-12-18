<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>

<head>
    <title>Calendario</title>
    <link rel="stylesheet" type="text/css" href="style.css" media="all" />
</head>
<body>
    <?php
        require("./components/header.php");
    ?>
    <div id="calendario">
        <div id="buscafecha">
            <form action="#" name="buscar">
                <select name="buscames">
                    <option value="0">Enero</option>
                    <option value="1">Febrero</option>
                    <option value="2">Marzo</option>
                    <option value="3">Abril</option>
                    <option value="4">Mayo</option>
                    <option value="5">Junio</option>
                    <option value="6">Julio</option>
                    <option value="7">Agosto</option>
                    <option value="8">Septiembre</option>
                    <option value="9">Octubre</option>
                    <option value="10">Noviembre</option>
                    <option value="11">Diciembre</option>
                </select>
                <input type="number" name="buscaanno" maxlength="4" size="4" />
                <input type="button" value="BUSCAR" onclick="mifecha()" />
            </form>
        </div>
        <div id="fechaactual" onclick="actualizar()"></div>
        <div id="cabecera">
            <div class="dir" id="anterior" onclick="mesantes()">
                <svg stroke="currentColor" fill="none" stroke-width="2" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                    <polyline points="15 18 9 12 15 6"></polyline>
                </svg>
            </div>
            <h2 id="titulos"></h2>
            <div class="dir" id="posterior" onclick="mesdespues()">
                <svg stroke="currentColor" fill="none" stroke-width="2" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                    <polyline points="9 18 15 12 9 6"></polyline>
                </svg>
            </div>
        </div>
        <main id="diasc">
            <nav id="fila0">
                <section></section>
                <section></section>
                <section></section>
                <section></section>
                <section></section>
                <section></section>
                <section></section>
            </nav>
            <nav class="days" id="fila1">
                <section><span></span><div></div></section>
                <section><span></span><div></div></section>
                <section><span></span><div></div></section>
                <section><span></span><div></div></section>
                <section><span></span><div></div></section>
                <section><span></span><div></div></section>
                <section><span></span><div></div></section>
            </nav>
            <nav class="days" id="fila2">
                <section><span></span><div></div></section>
                <section><span></span><div></div></section>
                <section><span></span><div></div></section>
                <section><span></span><div></div></section>
                <section><span></span><div></div></section>
                <section><span></span><div></div></section>
                <section><span></span><div></div></section>
            </nav>
            <nav class="days" id="fila3">
                <section><span></span><div></div></section>
                <section><span></span><div></div></section>
                <section><span></span><div></div></section>
                <section><span></span><div></div></section>
                <section><span></span><div></div></section>
                <section><span></span><div></div></section>
                <section><span></span><div></div></section>
            </nav>
            <nav class="days" id="fila4">
                <section><span></span><div></div></section>
                <section><span></span><div></div></section>
                <section><span></span><div></div></section>
                <section><span></span><div></div></section>
                <section><span></span><div></div></section>
                <section><span></span><div></div></section>
                <section><span></span><div></div></section>
            </nav>
            <nav class="days" id="fila5">
                <section><span></span><div></div></section>
                <section><span></span><div></div></section>
                <section><span></span><div></div></section>
                <section><span></span><div></div></section>
                <section><span></span><div></div></section>
                <section><span></span><div></div></section>
                <section><span></span><div></div></section>
            </nav>
            <nav class="days" id="fila6">
                <section><span></span><div></div></section>
                <section><span></span><div></div></section>
                <section><span></span><div></div></section>
                <section><span></span><div></div></section>
                <section><span></span><div></div></section>
                <section><span></span><div></div></section>
                <section><span></span><div></div></section>
            </nav>
        </main>
    </div>
    <script src="eventos.js"></script>
    <script src="calendario.js"></script>
</body>

</html>