<?php

namespace App;

class Propiedad
{
   public $id_propiedades;
   public $titulo;
   public $precio;
   public $imagen;
   public $descripcion;
   public $habitaciones;
   public $wc;
   public $estacionamiento;
   public $fk_id_vendedores;

   public function __construct(array $data = [])
   {
      $this->id_propiedades   = $data[ 'id_propiedades' ] ?? '';
      $this->titulo           = $data[ 'titulo' ] ?? '';
      $this->precio           = $data[ 'precio' ] ?? '';
      $this->imagen           = $data[ 'imagen' ] ?? '';
      $this->descripcion      = $data[ 'descripcion' ] ?? '';
      $this->habitaciones     = $data[ 'habitaciones' ] ?? '';
      $this->wc               = $data[ 'wc' ] ?? '';
      $this->estacionamiento  = $data[ 'estacionamiento' ] ?? '';
      $this->fk_id_vendedores = $data[ 'fk_id_vendedores' ] ?? '';
   }
}