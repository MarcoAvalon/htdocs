<?php
$qhoras = 0;
$vhoras = 0;
$desconto = 0;
$pdesconto = 0;
$sbruto = 0;
$sliquido = 0;
if (isset($POST ["Enviar"])){
   $qhoras = ["qtdhora"];
   $vhoras = $POST["vhoras"];
   $pdesconto = $POST["desconto"];
   
   $sbruto = qhoras * $vhoras;
   // sb = 100
   // d = pdesconto
   $desconto = ($sbruto * $pdesconto) / 100;
   $sliquido = $sbruto - $desconto;
}
?>