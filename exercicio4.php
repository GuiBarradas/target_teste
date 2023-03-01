<?php

$faturamento_estados = [
    "SP" => 67836.43,
    "RJ" => 36678.66,
    "MG" => 29229.88,
    "ES" => 27165.48,
    "Outros" => 19849.53,
];

$total_faturamento = array_sum($faturamento_estados);

echo "Faturamento total: R$" . number_format($total_faturamento, 2, ',', '.') . "\n\n";

foreach ($faturamento_estados as $estado => $faturamento) {
    $percentual = $faturamento / $total_faturamento * 100;
    echo "O estado de $estado representa " . number_format($percentual, 2) . "% do faturamento total.\n";
}