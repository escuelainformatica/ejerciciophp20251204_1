<?php

$clientes=[
    ['nombre'=>'bob','telefono'=>'2222','saldo'=>100],
    ['nombre'=>'anna','telefono'=>'333','saldo'=>555],
    ['nombre'=>'peter','telefono'=>'444','saldo'=>666],
];
foreach($clientes as $cliente) {
    echo "{$cliente['nombre']} {$cliente['telefono']} {$cliente['saldo']}\n";
}