<?php

print "Digite o primeiro número: ";
$numero1= (float) fgets(STDIN);
print "Digite o segundo número: ";
$numero2= (float) fgets(STDIN);

if ($numero1>$numero2)  
    {print "O número $numero1 é maior que $numero2\n";
    }
if ($numero1<$numero2)  
    {print "O número $numero2 é maior que $numero1\n";
    }
if ($numero1==$numero2)  
        {print "Ambos são iguais\n";}