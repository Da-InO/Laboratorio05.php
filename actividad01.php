    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Ejercicio 01 -Operaciones con php</title>
    </head>
    <body>
        <form method="post" action="">
        Ingresar Valor 1:<br>  <input type="text" name="valor1"><br>
        Ingresar Valor 2:<br>  <input type="text" name="valor2"><br>
        Resultado :<br>
        <input type="submit" name="Suma" valor="Suma">

        </form>
    <?php
    //declaracion de variables
        $numero1=$_POST['valor1'];
        $numero2=$_POST['valor2'];
            $suma=$numero1 + $numero2;
            
            echo "El Resultado de la Suma es  : ".$suma;
            
    ?>
    </body>
    </html>