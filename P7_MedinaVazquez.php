<!DOCTYPE html>
<HTML LANG="es">
        <head>
            <META charset="UTF-8">
            <title> Ciclo For </title>
        </head>
    <body>
        <font color=purple size=5> Tabla de multiplicar del 2 </font>
        <br><br>
        <font color=black>

            <?php
                    for($x=0; $x<=10; $x++)
                    {
                        $y=$x*2;
                        echo "$x x 2= $y<br>";
                    }
            ?>
        </font>
    </body> 