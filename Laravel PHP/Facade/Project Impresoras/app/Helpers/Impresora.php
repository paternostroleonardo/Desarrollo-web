<?php

namespace App\Helpers;
use App\Impresion;

class Impresora
{
    public static function impresionNormalColor($texto){
        $impresora = new Impresion();
        $impresora->setHoja("A4");
        $impresora->setColor(TRUE);
        $impresora->setTexto($texto);

        return $impresora->imprimir();
    }

    public static function impresionNormalBN($texto){
        $impresora = new Impresion();
        $impresora->setHoja("A4");
        $impresora->setColor(FALSE);
        $impresora->setTexto($texto);

        return $impresora->imprimir();
    }
} 