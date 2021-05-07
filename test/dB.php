<?php
  try{
    $conn = mysqli_connect("localhost", "root", "", "School");
  }catch(Exception $ex){
      echo "Error, Failed Connection With Data Base";
    }
 



?>