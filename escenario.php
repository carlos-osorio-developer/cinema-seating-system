<?php

function mostrar ($silleteria){
    echo "<div class='sala'>";
    echo "<div id='pantalla' class='pantalla flex-col'><svg xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" version=\"1.1\" x=\"0px\" y=\"0px\" width=\"60\" height=\"60\" viewBox=\"0 0 100 95\" xml:space=\"preserve\"><g><path d=\"M9.5,86.1c0-3.3,2.7-6,6-6s6,2.7,6,6c0,1.1,0.9,2,2,2s2-0.9,2-2c0-5.5-4.5-10-10-10s-10,4.5-10,10c0,1.1,0.9,2,2,2   S9.5,87.2,9.5,86.1z\"/><path d=\"M28.5,86.1c0,1.1,0.9,2,2,2s2-0.9,2-2c0-3.3,2.7-6,6-6s6,2.7,6,6c0,1.1,0.9,2,2,2s2-0.9,2-2c0-5.5-4.5-10-10-10   S28.5,80.6,28.5,86.1z\"/><path d=\"M51.6,86.1c0,1.1,0.9,2,2,2s2-0.9,2-2c0-3.3,2.7-6,6-6c3.3,0,6,2.7,6,6c0,1.1,0.9,2,2,2s2-0.9,2-2c0-5.5-4.5-10-10-10   S51.6,80.6,51.6,86.1z\"/><path d=\"M84.5,76.1c-5.5,0-10,4.5-10,10c0,1.1,0.9,2,2,2s2-0.9,2-2c0-3.3,2.7-6,6-6s6,2.7,6,6c0,1.1,0.9,2,2,2s2-0.9,2-2   C94.5,80.6,90,76.1,84.5,76.1z\"/><path d=\"M27,62.1c-5.5,0-10,4.5-10,10c0,1.1,0.9,2,2,2s2-0.9,2-2c0-3.3,2.7-6,6-6s6,2.7,6,6c0,1.1,0.9,2,2,2s2-0.9,2-2   C36.9,66.6,32.5,62.1,27,62.1z\"/><path d=\"M50,62.1c-5.5,0-10,4.5-10,10c0,1.1,0.9,2,2,2s2-0.9,2-2c0-3.3,2.7-6,6-6c3.3,0,6,2.7,6,6c0,1.1,0.9,2,2,2s2-0.9,2-2   C60,66.6,55.5,62.1,50,62.1z\"/><path d=\"M67.1,72.1c0-3.3,2.7-6,6-6s6,2.7,6,6c0,1.1,0.9,2,2,2s2-0.9,2-2c0-5.5-4.5-10-10-10s-10,4.5-10,10c0,1.1,0.9,2,2,2   S67.1,73.2,67.1,72.1z\"/><path d=\"M92.5,11.9H7.5c-1.1,0-2,0.9-2,2v40.7c0,1.1,0.9,2,2,2h84.9c1.1,0,2-0.9,2-2V13.9C94.5,12.8,93.6,11.9,92.5,11.9z    M90.5,52.6H9.5V15.9h80.9V52.6z\"/></g></svg></div>";
    
    $cabecera = ['<i class="fas fa-chair"></i>',1,2,3,4,5];
    
    echo "<div class='cabecera flex-row'>";
    foreach ($cabecera as $col) {
        echo "<div class='item flex-col'>$col</div>";
    }
    echo "</div>";
    
    $bg = '';
    $i = 1;
    foreach ($silleteria as $fila){
        echo "<div class='fila flex-row'>";
        echo "<div class='item flex-col'>$i</div>";
        foreach ($fila as $silla) {
            switch ($silla) {
                case 'R':
                    $bg = 'amarillo';
                    break;
                
                case 'V':
                    $bg = 'rojo';
                    break;

                default:
                    $bg = '';
                    break;
            }
            echo "<div class='item $bg flex-col'>$silla</div>";
        }
        echo "</div>";
        
        $i += 1;
    }
    
    
    echo "</div>";
}
