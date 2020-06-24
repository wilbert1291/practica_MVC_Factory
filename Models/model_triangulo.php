<?php
class triangulo implements interface_figura{
    function area($a, $b, $c){
        //Para sacar el area de un triangulo debe multiplicar la base por la altura
        $resultado = ($a * $b) / 2;
        return "El area de tu triangulo es: " . $resultado;
    }
    function perimetro($a, $b, $c){
        //Para sacar el area de un triangulo deben sumar todos los lados del triangulo
        if($c == ""){
            $resultado = $a * 3;
        } else {
            $resultado = $a + $b + $c;
        }
        
        return "El perimetro de tu triangulo es: " . $resultado;
    }
    function descripcion(){
        return "Un triángulo es la figura plana formada por una poligonal cerrada de tres lados, o bien, la figura formada por tres rectas que se cortan, a los puntos de corte se les llama vértices. Los ángulos del triángulo se designan con letras mayúsculas A,B, y C y los lados opuestos con a, b y c";
    }
}
?>