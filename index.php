<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Sistema de reservas</title>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Merienda:wght@400;700&display=swap" rel="stylesheet">
        <link href="./assets/css/main.css" rel="stylesheet">
        <script src="https://kit.fontawesome.com/69c8e727d8.js" crossorigin="anonymous"></script>
    </head>
    <body>
        <main class="flex-col">
            <h1 class="titles">¡Reserva tu asiento!</h1>
            <p>En este sitio puedes reservar tus asientos preferidos.</p>  
            
            <?php
                include './escenario.php';    
                if(isset($_REQUEST(["reset"])) || !isset($_REQUEST(["enviar"]))) {
                    $sillas=[
                        ['L','L','L','L','L'],
                        ['L','L','L','L','L'],
                        ['L','L','L','L','L'],
                        ['L','L','L','L','L'],
                        ['L','L','L','L','L']
                    ];
                    mostrar($sillas);                
                }
            ?>
            
            <form method="post">
                <fieldset class="flex-col">
                    <div class="flex-row">
                        <div class="text-input">
                            <label for="fila">Fila: </label>
                            <input id="fila" type="text" name="fila" placeholder="1 al 5" size="3">
                        </div>
                        <div class="text-input">
                            <label for="puesto">Puesto: </label>
                            <input id="puesto" type="text" name="puesto" placeholder="1 al 5" size="3">
                        </div>
                    </div>
                    <div class="flex-row radiales">
                        <label for="reservar">Reservar</label>
                        <input id="reservar" type="radio" name="estado" value="reservar">
                    </div>
                    <div class="flex-row radiales">
                        <label for="comprar">Comprar</label>
                        <input id="comprar" type="radio" name="estado" value="comprar">
                    </div>
                    <div class="flex-row radiales">
                        <label for="liberar">Liberar</label>
                        <input id="liberar" type="radio" name="estado" value="liberar">
                    </div>  
                    <div class="flex-row acciones">                        
                        <input type="submit" name="enviar" value="Enviar">
                        <input type="submit" name="reset" value="Resetear">
                    </div>
                </fieldset>
            </form>
        </main>        
    </body>
</html>
