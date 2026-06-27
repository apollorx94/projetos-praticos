<?php

// ===== Funções (definidas primeiro) =====

function somar($numero1, $numero2) {
    return $numero1 + $numero2;
}

function subtrair($numero1, $numero2) {
    return $numero1 - $numero2;
}

function multiplicar($numero1, $numero2) {
    return $numero1 * $numero2;
}

function dividir($numero1, $numero2) {
    if ($numero2 == 0) {
        return "Erro: divisão por zero não é permitida.";
    }
    return $numero1 / $numero2;
}

function operacao($numero1, $numero2, $operacao) {
    if ($operacao == "somar") {
        return somar($numero1, $numero2);
    } elseif ($operacao == "subtrair") {
        return subtrair($numero1, $numero2);
    } elseif ($operacao == "multiplicar") {
        return multiplicar($numero1, $numero2);
    } elseif ($operacao == "dividir") {
        return dividir($numero1, $numero2);
    } else {
        return "Selecione uma operação válida!";
    }
}

function ehNumerico($resultado) {
    if (is_numeric($resultado)) {
        return "O resultado é: " . number_format($resultado, 2, ',', '.');
    } else {
        return $resultado;
    }
}

// ===== Programa principal =====

$numero1 = (float) readline("Digite o primeiro número: ");
$numero2 = (float) readline("Digite o segundo número: ");
$operacao = readline("Digite a operação (somar, subtrair, multiplicar, dividir): ");

echo "Você digitou: $numero1, $numero2, $operacao" . PHP_EOL;

$chamaOperacao = operacao($numero1, $numero2, $operacao);
$resultado = ehNumerico($chamaOperacao);

echo $resultado . PHP_EOL;