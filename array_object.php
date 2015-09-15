<?php
/**
 * creamos un ArrayObject
 * */
 $paises=new ArrayObject
 (
    array("Chile","Perú","Nicaragua","USA","Canadá")
 );
 echo $paises->count();
 echo $paises->offsetGet(3);
 $paises->append("México");
  echo "<br/>".$paises->count();
echo "<h1>recorro con un ciclo for normal</h1>";
for($i=0;$i<$paises->count();$i++)
{
    echo $paises->offsetGet($i);
    echo "<br />";
}
echo "<h1>recorro con un ciclo for aplicando los métodos de la clase ArrayObject</h1>";
for($i=$paises->getIterator(); $i->valid() ;$i->next())
 {
    echo $i->key();
    echo "-";
    echo $i->current();
    echo "<br />";
 }
 echo "<h1>recorro con un ciclo foreach</h1>";
 foreach($paises->getIterator() as  $key=> $pais)
 {
    echo $key;
    echo "-";
    echo $pais;
    echo "<br />";
 }
echo "<h1>Los recorreremos usando un ciclo while </h1>";
$iterator=$paises->getIterator();
while($iterator->valid())
{
    echo $iterator->key();
    echo "-";
    echo $iterator->current();
    echo $iterator->next();
    echo "<br />";
}

