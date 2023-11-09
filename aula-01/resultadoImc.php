<?php

$peso = $_POST['TXTPeso'];
$altura = $_POST['TXTAltura'];

$imc = $peso/($altura*$altura);
//echo "$peso <br> $altura"
//eu subistitui esse comando mas ele esta correto //echo "O imc é $imc<br>";
//echo'O imc é: '.$imc;

/*outro modo de mostrar "echo'O imc é:'.$imc;" */

if ($imc<18.5){
    echo" <br> Abaixo do peso";
}
else if ($imc<=24.9){
    echo" <br> Peso Normal";
}
else if ($imc<=34.9){
    echo" <br> Obesidade Grau I";
}
else if ($imc<=39.9){
    echo" <br> Obesidade Grau II";
}

echo $imc
?>
 <?php

//echo"<input type=\"text\" name=\"N2\" class=\"card\" value=\"$imc\"/>";


?>
