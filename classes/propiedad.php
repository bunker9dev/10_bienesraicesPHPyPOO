<?php

namespace App;

class Propiedad {
    public $id;
    public $titulo;
    public $precio;
    public $imagen;
    public $descripcion;
    public $habitaciones;
    public $wc;
    public $estacionamiento;
    public $creado;
    public $vendedor_id;

    public function __construct($arg = [])
    {
        $this->id = $arg['id'] ?? '';
        $this->titulo = $arg['titulo'] ?? '';
        $this->precio = $arg['precio'] ?? '';
        $this->imagen = $arg['imagen'] ?? '';
        $this->descripcion = $arg['descripcion'] ?? '';
        $this->habitaciones = $arg['habitaciones'] ?? '';
        $this->wc = $arg['wc'] ?? '';
        $this->estacionamiento = $arg['estacionamiento'] ?? '';
        $this->creado = $arg['creado'] ?? '';
        $this->vendedor_id = $arg['vendedor_id'] ?? '';
        
    }


    public function guardar() {
        echo "Guardando en la Bsse de datos";
    }
    
}