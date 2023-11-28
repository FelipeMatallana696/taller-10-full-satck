<?php
//inicio
$username = "";
$userage = 0;

//proceso
echo "Digite su nombre \n";
$username = readline();

echo  "digite su edad \n";
$userage = readline();

//output

if (strtoupper ($userage) >= 18 ){
echo "bienvenido" . " " . $username . " " . "tienes" . " " . $userage . " " . "años por lo tanto eres mayor de edad";
}else {
  echo "bienvenido" . " " . $username . " " . "tienes" . " " . $userage . " " . "años por lo tanto eres menor de edad";
}


?>