<?php

print "Digite o primeiro número (não repita números): ";
$Primeiro =  fgets(STDIN);

print "Digite o segundo número (não repita números): ";
$Segundo =  fgets(STDIN);

print "Digite o terceiro número (não repita números): ";
$Terceiro =  fgets(STDIN);


if ( $Primeiro > $Segundo and $Segundo > $Terceiro) {
    print "A ordem decrescente é: $Primeiro $Segundo $Terceiro\n";
}

elseif ( $Primeiro > $Terceiro and $Terceiro > $Segundo) {
    print "A ordem decrescente é: $Primeiro $Terceiro $Segundo\n";
}


elseif ($Segundo > $Primeiro and $Primeiro > $Terceiro) {
    print "A ordem decrescente é: $Segundo $Primeiro $Terceiro\n";
}

elseif ($Segundo > $Terceiro and $Terceiro > $Primeiro) {
    print "A ordem decrescente é: $Segundo $Terceiro $Primeiro\n";
}


elseif ($Terceiro > $Primeiro and $Primeiro > $Segundo) {
    print "A ordem decrescente é: $Terceiro $Primeiro $Segundo\n";
}

elseif ($Terceiro > $Segundo and $Segundo > $Primeiro) {
    print "A ordem decrescente é: $Terceiro $Segundo $Primeiro\n";
}