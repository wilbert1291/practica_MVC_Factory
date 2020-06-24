<?php
class cuadrado implements interface_figura{
    function area($base, $altura, $c){
        if($base != $altura){
            //Esto es un rectangulo
            $resultado = $base * $altura;
            return "El area de tu rectangulo es:" . $resultado;           
        } else {
            //Esto es un cuadrado
            $resultado = $base * $base;
            return "El area de tu cuadrado es:" . $resultado;           
        }
    }
    function perimetro($base, $altura, $c){
        if($base != $altura){
            //Esto es un rectangulo
            $resultado = ($base *2) + ($altura*2);
            return "El perimetro de tu rectangulo es:" . $resultado;           
        } else {
            //Esto es un cuadrado
            $resultado = $base * 4;
            return "El perimetro de tu cuadrado es:" . $resultado;           
        }
    }
    function descripcion(){
        return "Un cuadrilátero es un polígono que tiene cuatro lados. Los cuadriláteros pueden tener distintas formas, pero todos ellos tienen cuatro vértices y dos diagonales, y la suma de sus ángulos internos siempre da como resultado 360º";
    }
}
?>
