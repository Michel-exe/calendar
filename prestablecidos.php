<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>

<head>
    <title>Agendar</title>
    <link rel="stylesheet" type="text/css" href="style.css" media="all" />
</head>

<body>
    <?php
    require("./components/header.php");
    require("./php/cn.php");
    $sen = "SELECT * FROM guardados";
    $res = mysqli_query($con, $sen);
    $c = -1;
    $inp="";
    $lab="";
    while ($row = mysqli_fetch_array($res)) {
        $c++;
        $inp.="<input type='radio' name='rad' ide='" . $row['id'] . "' id='che" . $row['id'] . "' " . ($c == 0 ? 'checked' : '') . " >";
        $lab.="<Label style='--bg:" . $row['color'] . "' class='" . ($c == 0 ? 'active' : '') . "' for='che" . $row['id'] . "'>" . $row['evento'] . "</Label>";
    }
    ?>
    <div id="agendar" class="agendar">
        <?php echo $inp; ?>
        <form>
            <div class="field field-even">
                <label required>Evento</label>
                <div id="bg-label">
                    <?php echo $lab; ?>
                </div>
            </div>
            <div class="field field-nor">
                <label for="" required>Fecha</label>
                <input type="date" required value="2022-12-15">
            </div>
            <div class="field field-check">
                <input type="checkbox" name="" id="checkbox" checked>
                <label for="checkbox">Todo el dia</label>
            </div>
            <div class="field field-time">
                <label required>Hora</label>
                <div>
                    <label>De </label>
                    <input type="time" >
                    <label> a </label>
                    <input type="time">
                </div>
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
            data.append("type","prestab");
            data.append("ide",form.ide);
            data.append("day",d);
            data.append("mounth",m);
            data.append("year",y);
            data.append("check",form.check);
            data.append("i_fecha",form.fecha);
            data.append("t_fecha","");
            data.append("i_hora",form.i_hora);
            data.append("t_hora",form.f_hora);
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
                ide:document.querySelector("input[name='rad']:checked").getAttribute("ide"),
            }
            if(form.fecha.length==0){
                alert("Campo Fecha vacio");
                return
            }
            if(form.check==false && form.i_hora.length<5){
                alert("Por favor especifique una hora o rellene la casiila de 'Todo el Dia'")
                return
            }
            enviar(form)
        })

        document.getElementById("bg-label").addEventListener("click", e => {
            if (e.target.tagName != "DIV" && e.target.tagName != "INPUT") {
                document.querySelector("label[class='active']").classList.remove("active")
                e.target.classList.add("active");
            }
        })
    </script>
</body>

</html>