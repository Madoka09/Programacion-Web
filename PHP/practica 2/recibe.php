<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="css/style.css">
        <body>
            <div class="bloque">
                <h1 class="titulo">Recibe</h1>
                <?php
                    function imprimir($texto,$numero){
                        echo($texto." ".$numero);
                        
                    }
                ?>
                <pre>
                <?php
                    
                    //$datos = $_GET;
                    //print_r($datos);
                    
                    $datos1 = $_GET['id'];
                    $datos = $_POST;
                    var_dump($datos);
                    $nombre = $_POST['nombre'];

                ?>
                </pre>
                <?php
                echo($nombre);
                echo($datos1. "<br>");
                imprimir("Hola","asjasjasja");
                echo($var);
                ?>
            </div>
        </body>
    </head>
</html>