<!-- definir variáveis usando GET-->
<!-- GET; método HTML padrão, a requisição é enviada como uma string anexada a URL -->
<!-- http://localhost/php-basico-Gustavo-Rodrigues/2_opera_variaveis.php?numero1=27&numero2=42 -->

<!-- Esse programa recebe dois valores pelo URL usando o método GET -->

<?php

$numero1 = $_GET['numero1'];
$numero2 = $_GET['numero2'];

// Verifica se os valores forma passados corretamente

if(isset($numero1) && ($numero2)){

    // converter para inteiros
    $numero1 = (int)$numero1;
    $numero2 = (int)$numero2;

    //somar
    $soma = $numero1 + $numero2;
    //subtrair
    $subtracao = $numero1 - $numero2;
    //multiplicar
    $multiplicacao = $numero1 * $numero2;
    //dividir
    $divisao = $numero1 / $numero2;

    // Exibir resultados
    echo "a soma é: $soma <br>";
    echo "a subtração é: $subtracao <br>";
    echo "a multiplicação é: $multiplicacao <br>";
    echo "a divisão é: $divisao <br>";

} else {
    echo "ATENÇÃO! Por favor, forneça os valores de numero1 e numero2 pela URL.";
}

?>