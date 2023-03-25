<?php
// Função para calcular o IMC
function calcularIMC($peso, $altura) {
  $imc = $peso / ($altura * $altura);
  return $imc;
}

// Exemplo de uso da função
$peso = 70; // em quilogramas
$altura = 1.75; // em metros
$imc = calcularIMC($peso, $altura);
echo "Seu IMC é: " . number_format($imc, 2);
?>
