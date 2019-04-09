<?php

print "Digite alguma letra: ";
$letra = (string) fgetc (STDIN);

if ($letra == "a" or $letra == "e" or $letra == "i" or $letra == "o" or $letra == "u") {
  echo "Essa letra é uma vogal\n";
} 
else {
 echo "Essa letra é uma consoante\n"; }
