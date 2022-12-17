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
            <div class="field field-even">
                <label required>Evento</label>
                <div id="bg-label">
                    <?php
                    require("./php/cn.php");
                    $sen = "SELECT * FROM guardados";
                    $res = mysqli_query($con, $sen);
                    $c = -1;
                    while ($row = mysqli_fetch_array($res)) {
                        $c++;
                        echo "
                            <input type='radio' name='rad' ide='" . $row['id'] . "' id='che" . $row['id'] . "'>
                            <Label style='--bg:" . $row['color'] . "' class='" . ($c == 0 ? 'active' : '') . "' for='che" . $row['id'] . "'>" . $row['evento'] . "</Label>
                            ";
                    }
                    ?>
                </div>
            </div>
            <div class="field field-nor">
                <label for="" required>Fecha</label>
                <input type="date" required value="2022-12-15">
            </div>
            <div class="field field-check">
                <input type="checkbox" name="" id="checkbox">
                <label for="checkbox">Todo el dia</label>
            </div>
            <div class="field field-time">
                <label required>Hora</label>
                <div>
                    <label>De </label>
                    <input type="time" required>
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
        document.getElementById("bg-label").addEventListener("click", e => {
            if (e.target.tagName != "DIV" && e.target.tagName != "INPUT") {
                document.querySelector("label[class='active']").classList.remove("active")
                e.target.classList.add("active");
            }
        })
    </script>
</body>

</html>