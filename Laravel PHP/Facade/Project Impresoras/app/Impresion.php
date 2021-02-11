<?php

Namespace App;

class Impresion {

    private $hoja;
    private $color;
    private $texto;  
    
    public function getHoja(){
        return $this->hoja;
    }
    
    public function setHoja($hoja){
        $this->hoja = $hoja;
    }
    public function IsColor(){
        if($this->color==TRUE){
            return "Impresión a color";
        } else{
            return "Impresión Blanco y Negro";
        }
    }
    
    public function setColor($color){
        $this->color = $color;
    }
    
    public function getTexto(){
        return $this->texto;
    }
    
    public function setTexto($texto){
        $this->texto = $texto;
    }

    public function imprimir(){
        return ("Formato de impresión<br>"."Texto: ".$this->texto."<br>Formato Hoja: ".$this->hoja."<br>Color o Blanco/Negro: ".$this->IsColor());
    }
}