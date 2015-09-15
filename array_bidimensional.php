<?php
/**
 * creamos un arreglo bidimensional
 * */
$paises[0][0]="Chile"; 
$paises[0][1]="Perú";
$paises[0][2]="Venezuela";
$paises[0][3]="Bolivia";

$paises[1][0]="México"; 
$paises[1][1]="Costa Rica";
$paises[1][2]="El Salvador";
$paises[1][3]="Guatemala";

$paises[2][0]="España"; 
$paises[2][1]="Holanda";
$paises[2][2]="Inglaterra";
$paises[2][3]="Italia";

for($i=0;$i<sizeof($paises);$i++)
{
    for($j=0;$j<sizeof($paises[$i]);$j++)
    {
        echo "Fila : ".$i;
        echo "<br />";
        echo "Columna : ".$j;
        echo "<br />";
        echo $paises[$i][$j];
        echo "<hr />";
    }
}

 
