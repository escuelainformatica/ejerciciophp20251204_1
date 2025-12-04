<?php

$productos=[
    ['nombre'=>'cocacola','cantidad'=>3],
    ['nombre'=>'fanta','cantidad'=>2],
    ['nombre'=>'sprite','cantidad'=>10]
];
// mostrar los productos que cantidad es mayor que 5.
foreach($productos as $producto) {
    if($producto['cantidad']>5) {
        echo $producto['nombre']."\n";
    }
}
// sumar las cantidades
$total=0;
foreach($productos as $producto) {
    $total=$total+$producto["cantidad"]; // $total+=
}
echo "el total es $total\n";