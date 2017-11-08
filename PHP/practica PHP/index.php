<!DOCTYE html>
<html>
    <head>

    </head>
    <body>
        <?php
        $nombre = "El Hugazo";
        $apellido = "Mancinoner";
        $numero1 = 18;
        $numero2 = 12;
        $numero3 = 3;


        /*if($numero1>$numero2){
                        echo 'El numero '.$numero1.' es mayor al '.$numero2;
                    }else if($numero2>$numero1){
                        echo 'El numero '.$numero2.' es mayor al '.$numero1;
                    }
                    else{
                        echo 'son iguales';
                    }

                    echo '<br>';
                    $numero = 4;            

                    switch($numero){
                        case 0:
                            echo 'Cero';
                            break;
                        case 1:
                            echo 'Uno';
                            break;
                        case 2:
                            echo 'Dos';
                            break;
                        case 3:
                            echo 'Zri';
                            break;
                        default:
                            echo 'E ue k pes?';
                            break;

                    }*/

        $arreglo = ['big shaq', 'manz not hot', 'tis ting'];
        echo $arreglo[0];

        echo '<hr>';

        $arreglo2 = array('no ketchup', 'just sauce', 'raw sauce');
        echo $arreglo2[0];

        print_r($arreglo);

        $ultimo = array_pop($arreglo);

        echo('<hr>');
        echo($ultimo);
        echo('<hr>');
        print_r($arreglo);
        $arreglo[] = "Alan";
        echo('<hr>');
        print_r($arreglo);
        $arreglo[7] = "Paoloner";
        echo('<hr>');
        print_r($arreglo);
        var_dump($arreglo);
        echo('<hr>');
        print_r($arreglo2);
        $tercer = [array(
            'namae'=>'Hugazo'
            ['primer'=>'Hugo','segundo'=>'Antonio']
            'paterno'=>'Manzanas',
            'materno'=>'Briseñoner'
        )];
        
        echo('<hr>');
        print_r($tercer);
        echo('<hr>');
        echo($tercer[0]['nombre']['primer']);



        /*echo 'EL resultado del hugazo es:'.($numero1 / $numero2);
                    echo '<br>';
                    echo '<p>Segunda linea</p>';*/

        ?>
    </body>
</html>