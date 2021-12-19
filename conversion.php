
<html>
    <head>
        <title>Resultado</title>
    </head>
    <body>
        <h2>Ese color hexademical en RGB es:</h2>
        <br>
        <?php
        $color = $_POST["color"];
        $primerPar = substr($color, 1, 2);
        $segundoPar = substr($color, 3, 2);
        $tercerPar = substr($color, 5, 2);
        $primerParToDec = hexdec($primerPar);
        $segundoParToDec = hexdec($segundoPar);
        $tercerParToDec = hexdec($tercerPar);
        echo "<br>
        rgb(".$primerParToDec.".".$segundoParToDec.".".$tercerParToDec.")";
        ?>
    </body>
</html>
