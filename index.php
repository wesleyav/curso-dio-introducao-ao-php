<?php

$categorias = [];
$categorias[0] = "Infantil";
$categorias[1] = "Adolescente";
$categorias[2] = "Adulto";
$categorias[3] = "Idoso";

//print_r($categorias);

$nome = "Wesley";
$idade = 26;

//var_dump($nome);
//var_dump($idade);


if ($idade >= 6 && $idade <= 12){
    //echo 'Infantil';
    for ($i = 0; $i < count($categorias); $i++){
        if($categorias[$i] == 'Infantil')
        echo "O nadador ". $nome. " compete na categoria " .$categorias[$i];
        // var_dump($categorias);
    }
}
else if ($idade >= 13 && $idade <= 18){
    //echo 'Adolescente';
    for ($i = 0; $i < count($categorias); $i++){
        if($categorias[$i] == 'Adolescente')
        echo "O nadador ". $nome. " compete na categoria " .$categorias[$i];
    }
}
else{
    //echo 'Adulto';
    for ($i = 0; $i < count($categorias); $i++){
        if($categorias[$i] == 'Adulto')
        echo "O nadador ". $nome. " compete na categoria " .$categorias[$i];
    }
}

