<?php
include "./passwordCheck.php";

// inicio
$user = "";
$password = "";

// proceso
echo  "Digite su usuario \n";
$user = readline();

echo "Digite su contraseña \n";
$password = readline();

//output
if (passwordHasSecurityLong ($password)) {
  if (hasUpperLetter ($password)) {   
   if (hasNumber ($password)) {
     echo "Felicitaciones, su contraseña es segura \n";
      } else {
      echo "su contraseña es invalida, debe tener al menos un numero. \n";
   }
    } else {
      echo  "su contraseña es invalida,debe tener al menos una letra mayuscula. \n";
  }
  } else {
  echo  "su contraseña es invalida,debe tener mas de 8 caracteres. \n";
  } 

?>