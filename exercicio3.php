<?php
//Lê o arquivo JSON com os dados de faturamento diário
$faturamento_diario_json = file_get_contents('faturamento_diario.json');
$faturamento_diario = json_decode($faturamento_diario_json, true);

//Inicializa as variáveis para o cálculo do menor, maior e s média de faturamento
$menor_faturamento = PHP_FLOAT_MAX;
$maior_faturamento = PHP_FLOAT_MIN;
$total_faturamento = 0;
$dias_com_faturamento_acima_da_media = 0;

//Soma sobre o vetor de faturamento diário para calcular o menor, maior e média de faturamento
foreach ($faturamento_diario as $faturamento) {
    if ($faturamento < $menor_faturamento) {
        $menor_faturamento = $faturamento;
    }
    if ($faturamento > $maior_faturamento) {
        $maior_faturamento = $faturamento;
    }
    $total_faturamento += $faturamento;
}

//calcula a média de faturamento diário, ignorando os dias sem faturamento
$media_faturamento = $total_faturamento / count(array_filter($faturamento_diario));


foreach ($faturamento_diario as $faturamento) {
    if ($faturamento > $media_faturamento) {
        $dias_com_faturamento_acima_da_media++;
    }
}

//exibe os resultados
echo "Menor valor de faturamento diário: R$ " . number_format($menor_faturamento, 2) . "\n";
echo "Maior valor de faturamento diário: R$ " . number_format($maior_faturamento, 2) . "\n";
echo "Número de dias com faturamento acima da média mensal: " . $dias_com_faturamento_acima_da_media . "\n";
?>