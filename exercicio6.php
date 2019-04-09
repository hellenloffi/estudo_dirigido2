<?php

print "Digite o 1º número: ";
$n1 = (float) fgets(STDIN);

print "Digite o 2º número: ";
$n2 = (float) fgets(STDIN);

print "Digite o 3º número: ";
$n3 = (float) fgets(STDIN);

if ($n1>$n2 and $n1>$n3) 
    {print "O 1º número ($n1) é maior\n";}

if ($n2>$n1 and $n2>$n3) 
    {print "O 2º número ($n2) é o maior\n";}

if ($n3>$n1 and $n3>$n2) 
    {print "O 3º número ($n3) é o maior\n";}
 
if ($n1==$n2 and $n1==$n3) 
    {print "Ambos 3 números são iguais\n";
    }

if ((float)($n1 and $n2 and $n3))

        {if ($n1==$n2 and $n1>$n3) 
            {print "O 1º e 2º número são iguais ($n1) e maiores que o 3º número ($n3)\n";}
            
        if ($n2==$n3 and $n2>$n1) 
            {print "O 2º e 3º número são iguais ($n2) e maiores que o 1º número ($n1)\n";}
            
        if ($n3==$n1 and $n3>$n2) 
            {print "O 1º e 3º número são iguais ($n3) e maiores que o 2º número ($n2)\n";}



             if ($n1==$n2 and $n1<$n3) 
            {print "O 1º e 2º número são iguais ($n1) e menores que o 3º número ($n3)\n";}
            
             if ($n2==$n3 and $n2<$n1) 
            {print "O 2º e 3º número são iguais ($n2) e menores que o 1º número ($n1)\n";}
            
             if ($n3==$n1 and $n3<$n2) 
            {print "O 1º e 3º número são iguais ($n3) e menores que o 2º número ($n2)\n";}}
