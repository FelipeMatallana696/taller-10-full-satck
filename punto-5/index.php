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

if (strtoupper ($membershiptype) == "A"){
echo "el valor de su tickete es" . " " . $totalprice * 0.7;
}else if (strtoupper($membershiptype) == "B"){
echo  "el valor de su tickete es" . " " . $totalprice * 0.7;
}else {
echo "el valor de su tickete es" . " " . $totalprice;
}
?>