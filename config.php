<?php
    $connect = new mysqli('localhost', 'root', '', 'crud');

    if(!$connect){
        die(mysqli_error($connect));
    }

    function validateInput($value, $errorMsg) {
    global $errors;
    if(empty($value)) {
      $errors[] = $errorMsg;
    }else {
      return $value;
    }
  }
?>