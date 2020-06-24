<?php
require 'interface_figuras.php';
$figura = (isset($_REQUEST['figura'])) ? $_REQUEST['figura'] : null;
$operacion = (isset($_REQUEST['operacion'])) ? $_REQUEST['operacion'] : "";
$a = (isset($_REQUEST['a'])) ? $_REQUEST['a'] : "";
$b = (isset($_REQUEST['b'])) ? $_REQUEST['b'] : "";
$c = (isset($_REQUEST['c'])) ? $_REQUEST['c'] : "";

switch($figura){
    case "circulo":
        require 'Models/model_circulo.php';
        switch($operacion){
            case 1:
                $area = circulo::area($a, $b, $c);
                $json[] = array("area" => $area, "perimetro"=> "", "descripcion" => "", "error" => "false", "figura" => "circulo");
                echo json_encode($json);
                break;
            case 2:
                $perimetro = circulo::perimetro($a, $b, $c);
                $json[] = array("area" => "", "perimetro"=> $perimetro, "descripcion" => "", "error" => "false", "figura" => "circulo");
                echo json_encode($json); 
                break;
            case 3:
                $descripcion = circulo::descripcion();
                $json[] = array("area" => "", "perimetro"=> "", "descripcion" => $descripcion, "error" => "false", "figura" => "circulo");
                echo json_encode($json); 
                break;
            default:
                $area = circulo::area($a, $b, $c);
                $perimetro = circulo::perimetro($a, $b, $c);
                $descripcion = circulo::descripcion();
                $json[] = array("area" => $area, "perimetro"=> $perimetro, "descripcion" => $descripcion, "error" => "false", "figura" => "circulo");
                echo json_encode($json); 
                break;
        }
        break;
    case "triangulo":
        require 'Models/model_triangulo.php';
        switch($operacion){
                case 1:
                    $area = triangulo::area($a, $b, $c);
                    $json[] = array("area" => $area, "perimetro"=> "", "descripcion" => "", "error" => "false", "figura" => "triangulo");
                    echo json_encode($json);
                    break;
                case 2:
                    $perimetro = triangulo::perimetro($a, $b, $c);
                    $json[] = array("area" => "", "perimetro"=> $perimetro, "descripcion" => "", "error" => "false", "figura" => "triangulo");
                    echo json_encode($json); 
                    break;
                case 3:
                    $descripcion = triangulo::descripcion();
                    $json[] = array("area" => "", "perimetro"=> "", "descripcion" => $descripcion, "error" => "false", "figura" => "triangulo");
                    echo json_encode($json); 
                    break;
                default:
                    $area = triangulo::area($a, $b, $c);
                    $perimetro = triangulo::perimetro($a, $b, $c);
                    $descripcion = triangulo::descripcion();
                    $json[] = array("area" => $area, "perimetro"=> $perimetro, "descripcion" => $descripcion, "error" => "false", "figura" => "triangulo");
                    echo json_encode($json); 
                    break;
            }
        break;
        
    case "cuadrilatero":
        require 'Models/model_cuadrado.php';
        switch($operacion){
                case 1:
                    $area = cuadrado::area($a, $b, $c);
                    $json[] = array("area" => $area, "perimetro"=> "", "descripcion" => "", "error" => "false", "figura" => "cuadrilatero");
                    echo json_encode($json);
                    break;
                case 2:
                    $perimetro = cuadrado::perimetro($a, $b, $c);
                    $json[] = array("area" => "", "perimetro"=> $perimetro, "descripcion" => "", "error" => "false", "figura" => "cuadrilatero");
                    echo json_encode($json); 
                    break;
                case 3:
                    $descripcion = cuadrado::descripcion();
                    $json[] = array("area" => "", "perimetro"=> "", "descripcion" => $descripcion, "error" => "false", "figura" => "cuadrilatero");
                    echo json_encode($json); 
                    break;
                default:
                    $area = cuadrado::area($a, $b, $c);
                    $perimetro = cuadrado::perimetro($a, $b, $c);
                    $descripcion = cuadrado::descripcion();
                    $json[] = array("area" => $area, "perimetro"=> $perimetro, "descripcion" => $descripcion, "error" => "false", "figura" => "cuadrilatero");
                    echo json_encode($json); 
                    break;
            }
        break;
}

?>
