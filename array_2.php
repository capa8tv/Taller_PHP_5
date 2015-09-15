<?php
/**
 * creamos un arreglo al vuelo, unidimensional
 * */
$paises[]="Chile";
$paises[]="Argentina";
$paises[] =56;
$paises[] = true;

for($i=0;$i< sizeof($paises);$i++)
{
    echo $paises[$i];
    echo "<br /> ";
}
 
