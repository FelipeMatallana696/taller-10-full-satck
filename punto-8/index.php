<?php
// inicio
const TIKETPRICE = 25000;
$membershiptype = "";
$numberperson = 0;

// proceso
echo "Digite el numero de personas que jugaran en la bolera \n ";
$numberperson = readline();
echo "Digite su tipo de afiliacion \n ";
$membershiptype = readline();

//output
$totalprice = TIKETPRICE * $numberperson;

switch(strtoupper($membershiptype)) {
      case "A":
        $totalprice = $totalprice * 0.7;
        break;
      case "B":
        $totalprice = $totalprice * 0.75;
        break;
      case "C":
        $totalprice = $totalprice * 0.9;
        break;
      case "D":
        $totalprice = $totalprice * 0.95;
        break;
      default:
        echo "No tienes descuento \n";
        break;
}

echo "El total a pagar es: \n" . $totalprice ;

?>