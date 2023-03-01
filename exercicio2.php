<?php

//Entrada de dados pelo usuário
echo "Digite um número para verificar na sequência de Fibonacci: ";
$numero_verificar = intval(fgets(STDIN));

//Inicializa as variáveis de início da sequência de Fibonacci
$fibonacci_anterior = 0;
$fibonacci_atual = 1;

//Soma os 2 valores prévios na sequência de Fibonacci até encontrar um valor maior ou igual ao número a ser verificado
while ($fibonacci_atual < $numero_verificar) {
    // calcula o próximo valor da sequência
    $proximo_fibonacci = $fibonacci_anterior + $fibonacci_atual;
    // atualiza as variáveis para a próxima iteração
    $fibonacci_anterior = $fibonacci_atual;
    $fibonacci_atual = $proximo_fibonacci;
}

//Verifica se o número a ser verificado é igual ao valor atual da sequência de Fibonacci
if ($fibonacci_atual == $numero_verificar) {
    echo "O número $numero_verificar pertence à sequência de Fibonacci.";
} else {
    echo "O número $numero_verificar não pertence à sequência de Fibonacci.";
}
?>