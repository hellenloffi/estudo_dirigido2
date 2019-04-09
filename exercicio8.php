<?php

print "Digite o preço do 1º produto: ";
$n1= (float) fgets(STDIN);

print "Digite o preço do 2º produto: ";
$n2= (float) fgets(STDIN);

print "Digite o preço do 3º segundo: ";
$n3= (float) fgets(STDIN);

if ($n1<$n2 && $n1<$n3) 
    {print "O preço do 1º produto é mais barato\n";}

if ($n2<$n1 && $n2<$n3) 
    {print "O preço do 2º produto é mais barato\n";}

if ($n3<$n1 && $n3<$n2) 
    {print "O preço do 3º produto é mais barato\n";}

if ($n1==$n2 && $n2==$n3) 
    {print "Todos os produtos custam a mesma quantia\n";}

    if ((float)($n1 and $n2 and $n3))

        {if ($n1==$n2 and $n1>$n3) 
            {print "O 1º e 2º produto custam o mesmo valor ($n1 R$) e são mais caros que o 3º produto ($n3 R$)\n";}
            
        if ($n2==$n3 and $n2>$n1) 
            {print "O 2º e 3º produto custam o mesmo valor ($n2 R$) e são mais caros que o 1º produto ($n1 R$)\n";}
            
        if ($n3==$n1 and $n3>$n2) 
            {print "O 1º e 3º produto custam o mesmo valor ($n3 R$) e são mais caros que o 2º produto ($n2 R$)\n";}



             if ($n1==$n2 and $n1<$n3) 
            {print "O 1º e 2º produto custam o mesmo valor ($n1 R$) e são mais baratos que o 3º produto ($n3 R$)\n";}
            
             if ($n2==$n3 and $n2<$n1) 
            {print "O 2º e 3º produto custam o mesmo valor ($n2 R$) e são mais baratos que o 1º produto ($n1 R$)\n";}
            
             if ($n3==$n1 and $n3<$n2) 
            {print "O 1º e 3º produto custam o mesmo valor ($n3 R$) e são mais baratos que o 2º produto ($n2 R$)\n";}}