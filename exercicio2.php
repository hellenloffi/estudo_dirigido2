<?php

print "Digite o número: ";
$n= (float) fgets(STDIN);

if ($n<0)
    {print "O número $n é negativo\n";}
if ($n>0)
    {print "O número $n é positivo\n";}
if ($n==0)
    {print "O número $n é neutro\n";}