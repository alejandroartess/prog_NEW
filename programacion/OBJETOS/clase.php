<?php 
class ClaseCoche 
{
      // Declaración de una propiedad
      public $color = 'verde';
      public $tipo = 'turismo';

      // Declaración de un método
      public function mostrarColor() {
          echo $this->color;
      } 
      public function mostrarTipo() {
        echo $this->tipo;
    } 
}
