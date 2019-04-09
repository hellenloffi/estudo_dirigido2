  <?php

print "Digite M ou F: ";
$sexo= (string) fgetc (STDIN);

if ($sexo == "M" or $sexo == "m") {
  echo "Masculino\n";
}
elseif ($sexo == "F" or $sexo == "f") {
  echo "Feminino\n";
}

else {
  echo "sexo inválido\n";
}