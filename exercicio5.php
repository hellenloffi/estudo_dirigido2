<?php

print("informe a primeira nota: ");
$nota1 = (float) fgets (STDIN);

print("informe a segunda nota: ");
$nota2 = (float) fgets (STDIN);

$media = ($nota1 + $nota2)/2;

if ($media >= 7 & $media < 10) {
print("você foi aprovado com média $media\n");
}

 elseif ($media == 10){
print("você foi aprovado com distinção e média $media\n");

}elseif($media < 7){
print("você foi reprovado com média $media\n");}