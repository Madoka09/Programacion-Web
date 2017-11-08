<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="css/style.css">
        <body>
            <div class="bloque">
                <h1 class="titulo">Manda</h1>
                <a href="recibe.php?id=Hola&nombre=Paconcha">Otra pagina</a>

                <form action="recibe.php" method="post">
                    <div>
                        <label>Nombre
                            <input type="text" name="nombre" id="nombre">
                        </label>
                    </div>
                    <div>
                        <label>Carrera
                            <input type="text" name="carrera" id="carrera">
                        </label>
                    </div>
                    <input type="submit" value="Enviar">
                </form>

            </div>
        </body>
    </head>
</html>