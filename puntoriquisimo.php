<?php

$orden=$_POST['orden'];
$cantidad=$_POST['cantidad'];

if($orden=='salchipapa'){
$totalapagar=(10000*$cantidad);
    print "<p>Valor a pagar $totalapagar </p>\n";
   
}elseif($orden=='perro'){
    $totalapagar=(8500*$cantidad);
    print "<p>Valor a pagar $totalapagar </p>\n";
}elseif($orden=='hamburguesa'){
    $totalapagar=(13500*$cantidad);
    print "<p>Valor a pagar $totalapagar </p>\n";
}elseif($orden=='pizza'){
    $totalapagar=(9000*$cantidad);
    print "<p>Valor a pagar $totalapagar </p>\n";
}else{
    print "elige algo que se vea en el menu\n";
}





?>
