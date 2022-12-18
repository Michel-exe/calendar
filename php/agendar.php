<?php
    if(!isset($_POST['type'])) die("Peticion Denegada");

function agendar(){
    require("./cn.php");
    $evento=$_POST["evento"];
    $description=$_POST["description"];
    $ubicacion=$_POST["ubicacion"];
    $day=$_POST["day"];
    $mounth=$_POST["mounth"];
    $year=$_POST["year"];
    $check=$_POST["check"];
    $i_fecha=$_POST["i_fecha"];
    $t_fecha=$_POST["t_fecha"];
    $i_hora=$_POST["i_hora"];
    $t_hora=$_POST["t_hora"];
    $color=$_POST["color"];

    $sen="INSERT INTO fecha (evento, description, ubicacion, day, mounth, year, i_fecha, t_fecha, i_hora, t_hora, color) VALUES ('$evento','$description','$ubicacion','$day','$mounth','$year','$i_fecha','$t_fecha','$i_hora','$t_hora','$color')";
    $res=mysqli_query($con,$sen);
    
    if(!$res) die("Hubo un error");
    echo true;
}
function prestablecidos(){
    require("./cn.php");
    $type = $_POST["type"];
    $ide = $_POST["ide"];
    $day = $_POST["day"];
    $mounth = $_POST["mounth"];
    $year = $_POST["year"];
    $check = $_POST["check"];
    $i_fecha = $_POST["i_fecha"];
    $t_fecha = $_POST["t_fecha"];
    $i_hora = $_POST["i_hora"];
    $t_hora = $_POST["t_hora"];

    
    $sen = "SELECT * FROM guardados WHERE id='$ide'";
    $res = mysqli_query($con, $sen);
    while ($row = mysqli_fetch_array($res)) {
        $evento = $row['evento'];
        $description = $row['description'];
        $ubicacion = $row['ubicacion'];
        $color = $row['color'];
    }

    $sen="INSERT INTO fecha (evento, description, ubicacion, day, mounth, year, i_fecha, t_fecha, i_hora, t_hora, color) VALUES ('$evento','$description','$ubicacion','$day','$mounth','$year','$i_fecha','$t_fecha','$i_hora','$t_hora','$color')";
    $res=mysqli_query($con,$sen);

    if(!$res) die("Hubo un error");
    echo true;
}
$type = $_POST['type'];
if($type=="agendar"){
    agendar();
}else{
    prestablecidos();
}
?>