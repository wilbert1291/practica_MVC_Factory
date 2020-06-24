<?php
class circulo implements interface_figura {
    function area($radio, $b, $c){
        //Para el area del circulo se debe multiplicar PI por Radio elevado al cuadrado
        $resultado = 3.1416 * pow($radio, 2);
        
        return "El area del circulo es: " . $resultado;
    }
    function perimetro($radio, $b, $c){
        //Para el perimetro del circulo se debe multiplicar 2 por PI por Radio
        $resultado = 2 * 3.1416 * $radio;
        return "El perimetro del circulo es: " . $resultado;
        
    }
    function descripcion(){
        return "Un círculo es una superficie plana limitada por una línea curva (circunferencia). A menudo se utiliza indistintamente círculo y circunferencia para nombrar la misma cosa, pero esto no es correcto.<br><br>Para calcular el area es: <br>a=π*(r^2)<br>Y para calcular el perimetro es:<br>P=2*π*r";
    }
}
?>
