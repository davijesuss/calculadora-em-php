
<?php

$nro1 = 0;
$nro2 = 0;
$resultado = 0;
$calcular = 'somar';


if(isset($_GET["nro1"], $_GET["nro2"], $_GET["calcular"])){
   $nro1 = $_GET['nro1'];
    $nro2 = $_GET['nro2'];
    $calcular = $_GET['calcular'];

    switch($calcular){
        case 'somar':
            $resultado = $nro1 + $nro2;
            break;
            case 'subtrair':
             $resultado = $nro1 - $nro2;
            break; 
            case 'mutiplicar':
             $resultado = $nro1 * $nro2;
            break; 
            case 'dividir':
             $resultado = $nro1 / $nro2;
            break; 
            }
        
}
echo "o resultado é : ". $resultado;

?>

