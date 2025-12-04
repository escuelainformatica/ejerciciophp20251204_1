<?php
// las clases deberian partir en mayuscula.

class Producto {
    public string $nombre;
    public int $precio;
    public function __construct(string $nombre, int $precio) {
        $this->nombre = $nombre;
        $this->precio = $precio;
    }
}
$productos=[
    new Producto("cocacola",100),
    new Producto("fanta",240),
    new Producto("sprite",500),
];
// pisando el valor
$productos[0]=new Producto("cocacola",100);
// [] indica agregar un valor al final
$productos[]=new Producto("7up",560);
foreach ($productos as $producto) {
    echo $producto->nombre." ".$producto->precio."\n";
}