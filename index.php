<?php

    function Equations($x1, $x2, $Equation){
            switch($Equation){
                case "Adição":
                    echo "A soma dos valores é : ".($x1 + $x2)."</br>";
                    break;
                case "Subtração":
                    echo "A subtração dos valores é : ".($x1 - $x2)."</br>";
                    break;
                case "Multiplicação":
                    echo "A multiplicação dos valores é : ".($x1 * $x2)."</br>";
                    break;
                case "Divisão":
                    echo "A divisão dos valores é : ".($x1 / $x2)."</br>";
                    break;
                default:
                    echo "Não foi possível concluir a equação";
            };
        }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
<body>
    <h3><?php 
    Equations(20, 10, "Adição");
    Equations(15, 5, "Divisão");
    Equations(100, 25, "Multiplicação")
    ?></h3>
</body>
</html>

