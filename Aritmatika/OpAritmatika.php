<?php

$operand1=$_REQUEST['operand1'];
$operand2=$_REQUEST['operand2'];
$operator=$_REQUEST['operator'];

$perhitungan = $operand1 . $operator . $operand2;
eval ("\$hasil = $perhitungan;");
echo "hasil perhitungan : <b> $hasil </b>" ;
?>
