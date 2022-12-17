<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
    <title>Agendar</title>
    <link rel="stylesheet" type="text/css" href="style.css" media="all" />
</head>
<body>
    <?php
        require("./components/header.php");
    ?>
    <div id="agendar" class="agendar">
        <form>
            <div class="field field-nor">
                <label for="" required>Fecha</label>
                <input type="date" value="2022-12-15">
            </div>
            <div class="field field-check">
                <input type="checkbox" name="" id="checkbox" checked>
                <label for="checkbox">Todo el dia</label>
            </div>
            <div class="field field-time">
                <label required>Hora</label>
                <div>
                    <label >De </label>
                    <input type="time" >
                    <label> a </label>
                    <input type="time">
                </div>
            </div>
            <div class="field field-cont">
                <label required >Evento</label>
                <input class="inp-Max" type="text" cont="0" maxlength="50" value="Comida">
                <span> <b>0 </b> / 50 </span>
                <label required>Descripcion</label>
                <textarea class="inp-Max" cont="0" maxlength="500">Chilaquiles</textarea>
                <span> <b>0 </b> / 500 </span>
                <label >Ubicacion</label>
                <textarea class="inp-Max" cont="0" maxlength="200"></textarea>
                <span> <b>0 </b> / 200 </span>
            </div>
            <div class="field field-col">
                <label for="" required>Color</label>
                <section>
                    <input type="radio" name="col" col="#dc3545" id="bg-red">
                    <input type="radio" name="col" col="#007bff" id="bg-blue" checked>
                    <input type="radio" name="col" col="#28a745" id="bg-green">
                    <input type="radio" name="col" col="#ec00b9" id="bg-pink">
                    <input type="radio" name="col" col="#ffc107" id="bg-yellow">
                    <input type="radio" name="col" col="#d78c09" id="bg-choco">
                    <input type="radio" name="col" col="" id="bg-new">
                    <input type="color" id="bg-color">
                    <div id="bg-label">
                        <label id="bg-red" for="bg-red"></label>
                        <label id="bg-blue" class="active" for="bg-blue"></label>
                        <label id="bg-green" for="bg-green"></label>
                        <label id="bg-pink" for="bg-pink"></label>
                        <label id="bg-yellow" for="bg-yellow"></label>
                        <label id="bg-newLabel" for="bg-color"></label>
                    </div>
                </section>
            </div>
            <div class="eveAgendar">
                <input type="submit" value="Agendar">
            </div>
        </form>
    </div>
    <script>
        const enviar=async(form)=>{
            const data = new FormData();
            let [y,m,d] = form.fecha.split("-");
            console.log(form.fecha.split("-"));
            data.append("type","agendar");
            data.append("evento",form.evento);
            data.append("description",form.descri);
            data.append("ubicacion",form.ubica);
            data.append("day",d);
            data.append("mounth",m);
            data.append("year",y);
            data.append("check",form.check);
            data.append("i_fecha",form.fecha);
            data.append("t_fecha","");
            data.append("i_hora",form.i_hora);
            data.append("t_hora",form.f_hora);
            data.append("color",form.color);
            await fetch("./php/agendar.php",{
                method:"POST",
                body: data
            })  .then(res=>res.text())
                .then(r=>console.log(r))
        }
        window.addEventListener("submit",e =>{
            e.preventDefault();
            const tar = e.target;
            let form = {
                fecha:tar[0].value,
                check:tar[1].checked,
                i_hora:tar[2].value,
                f_hora:tar[3].value,
                evento:tar[4].value,
                descri:tar[5].value,
                ubica:tar[6].value,
                color:document.querySelector("input[name='col']:checked").getAttribute("col"),
            }
            if(form.fecha.length==0){
                alert("Campo Fecha vacio");
                return
            }
            if(form.check==false && form.i_hora.length<5){
                alert("Por favor especifique una hora o rellene la casiila de 'Todo el Dia'")
                return
            }
            if(form.evento.length<1 || form.descri.length<1){
                alert("Por favor Especifique el nombre del evento y una descripcion")
                return
            }
            enviar(form)
            console.log(form);
        })
        document.getElementById("bg-label").addEventListener("click",e=>{
            if(e.target.tagName!="DIV"){
                document.querySelector("label[class='active']").classList.remove("active")
                e.target.classList.add("active");
            }
        })
        document.getElementById("bg-color").addEventListener("input", e =>{
            document.getElementById("bg-new").checked=true;
            document.getElementById("bg-new").setAttribute("col",e.target.value)
            document.getElementById("bg-newLabel").style.background=e.target.value
            console.log();
        })
        document.querySelectorAll(".inp-Max").forEach(i=>{i.addEventListener("keyup",e=>{e.target.nextElementSibling.firstElementChild.innerHTML=e.target.value.length})})
    </script>
</body>

</html>