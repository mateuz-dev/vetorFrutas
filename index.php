<?php

$frutas =[
    "Maçã",
];

$frutas[] = "Banana";
$frutas[] = "Goiaba";
$frutas[] = "Uva";
$frutas[] = "Abacaxi";
$frutas[] = "Morango";
$frutas[] = "Laranja";
$frutas[] = "Jaca";
$frutas[] = "Melancia";
$frutas[] = "Manga";
$frutas[] = "Limão";
$frutas[] = "Ameixa";
$frutas[] = "Pêssego";
$frutas[] = "Kiwi";
$frutas[] = "Tomate";


$frutaProcurada = "Laranja";

$encontrei = false;

foreach ($frutas as $chave => $fruta){
    if ($fruta == $frutaProcurada){
        echo "$fruta deletado(a).";
        unset ($frutas[$chave]);
        $encontrei = true; 
    }
}

if(!$encontrei){
    echo "Fruta não encontrada";
}

print_r($frutas);