<?php
/**
 * este es un arreglo simple
 * que tiene un largo de 8
 * el primer índice o posición de un arreglo comienza con cero
 * 
 * */
$paises = array( "Chile","Perú",234,"Costa Rica","Venezuela",12.34,"Colombia","Ecuador","Bolivia","Argentina",34,true );
//echo $paises[6];
//echo sizeof($paises);

for($i=0;$i< sizeof($paises);$i++)
{
    echo $paises[$i];
    echo "<br /> ";
}
