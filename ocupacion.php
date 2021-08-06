<?php

if (isset($_POST['enviar'])){
    
    $fila = $_POST['fila'];
    $asiento = $_POST['puesto'];
    $estado = $_POST['estado'];
    $silleteria = $_POST['sillas'];
    $sillas = [];
    
    $i = 0;
    
    for($m = 0; $m<5; $m++) {
        for($n = 0; $n<5; $n++) {
            $i = 5*$m + $n;
            $sillas[$m][$n] = substr($silleteria, $i, 1);
        }
    }
    
    if ($estado == "reservar"){
        if($sillas[$fila-1][$asiento-1] == 'L'){
            $sillas[$fila-1][$asiento-1] = 'R';
        }
        else if($sillas[$fila-1][$asiento-1] == 'L'){
            echo '<script language="javascript>alert()"';
        }
    }
}
