<?php
    echo "mensaje desde php <br>";
    print_r("segundo mensaje<br>");

    echo "mensaje 3<br>";

    $num1='9';
    $num2="8";

    $suma=$num1+$num2;

    echo $suma."<br>";

    $nombre="cesar";
    $saludo="hola";

    $saludar=$saludo." ".$nombre;

    $saludar="{$saludo} {$nombre}, como estas??<br>";
    echo $saludar;


    $edad=21;
    if($edad>=18)
        echo "mayor de edad<br>";
    else
        echo "menor de edad<br>";

    for($i=1;$i<5;$i++)
        echo $i."<br>";
