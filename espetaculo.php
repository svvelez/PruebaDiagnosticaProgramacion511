<?php
$boletas=$_POST['cantidad'];
$entrada = 90000;
 
if($boletas<=4){
     if($boletas==1){
        $total=$entrada;
     }elseif ($boletas == 2) {
        $descuento=(($entrada*10)/100);
        $total=($entrada-$descuento);
    }elseif($boletas==3){
        $descuento=(($entrada*15)/100);
        $total=($entrada-$descuento);
    }elseif($boletas==4){
        $descuento=(($entrada*20)/100);
        $total=($entrada-$descuento);
    }
    print "<p>Valor a pagar $total </p>\n";
}else{
    print "<p>Solo se puede comprar hasta 4 boletas</p>\n";
}


?>

