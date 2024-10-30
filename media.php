<?php
$nota1 = 7.5;
$nota2 = 3.5;
$nota3 = 5;
$nota4 = 8;

$media =($nota1+$nota2+$nota3+$nota4)/4;

if($media>=7){
    echo "media $media. Aluno APROVADO";

}else if($media>=4){
    echo "media $media. Aluno de EXAME";
}
else{
    echo "media $media. Aluno ";
}

?>