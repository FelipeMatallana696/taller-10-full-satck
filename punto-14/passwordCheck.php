<?php
  function passwordHasSecurityLong($pass) { 
    return strlen($pass) >= 8;
  }


  function hasUpperLetter($pass) {
  $arrayPass = str_split($pass);

    foreach($arrayPass as $letter) {
      if($letter == strtoupper($letter)) {
      return true;
      }
    }
   return false; 
  }


  function hasNumber($pass) {
    $arrayPass = str_split($pass);

    foreach($arrayPass as $numeric) {
      if(is_numeric($numeric)) {
        return true;
      }
    }
    return false;

  }

?>