<?php
class Producto {
    public string $nombre;
    public int $precio;
    public function __construct(string $nombre, int $precio) {
        $this->nombre = $nombre;
        $this->precio = $precio;
    }
}