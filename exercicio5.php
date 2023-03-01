<?php
echo "Digite uma string: ";
$string = fgets(STDIN);

//Usuário entra com "Me contrata, Target!"

$inverted_string = "";
for ($i = strlen($string) - 1; $i >= 0; $i--) {
    $inverted_string .= $string[$i];
}

echo "String invertida: " . $inverted_string;

//String invertida: tegraT ,ataroc eM
?>