<?php
    if(!isset($_POST['mes'])) die("Peticion Denegada");

    $mesAnt = $_POST['mesAnt'];
    $mes = $_POST['mes'];
    $mesDes = $_POST['mesDes'];
    require("./cn.php");
    $sen= "SELECT * FROM fecha WHERE mounth='$mes' OR mounth='$mesAnt' OR mounth='$mesDes' ORDER BY mounth DESC";
    $res = mysqli_query($con, $sen);
    $json = array();
    while($row = mysqli_fetch_array($res)){
        $json[] = array(
           'evento' => $row['evento'],
           'description' => $row['description'],
           'ubicacion' => $row['ubicacion'],
           'day' => $row['day'],
           'mounth' => $row['mounth'],
           'year' => $row['year'],
           'i_fecha' => $row['i_fecha'],
           't_fecha' => $row['t_fecha'],
           'i_hora' => $row['i_hora'],
           't_hora' => $row['t_hora'],
           'color' => $row['color'],
        );
    }
    $jsonstring = json_encode($json);
    echo $jsonstring;
    mysqli_close($con);
?>