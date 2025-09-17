<?php
$N = $_GET ['N'];
$C = $_GET ['C'];
$U = $_GET ['U']; 
$operacion;
$operacion = $U * $U * $U;


echo "Su nombre es:".$N;
echo "<br>";
echo "Su curso es:".$C;
echo "<br>";
if($U >=100 ) {
    echo "FELICIDADES ERES AFORTUNADO".$operacion;
}
else {
    echo "su numero es:".$U;
}
?>
