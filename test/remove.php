<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,height=device-height,initial-scale=1.0"/>

    <meta name="description" content="Registration Form For Applying on Amoun School">
    
    <title></title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <style> 
  </style>
</head>    
<body>

    <form method="POST" action="">
   
    <div class="container">
            <div class="form">
                <div class="heading">
                    <img src="Images/logo.jpeg" class="logo">
                </div>
                <h1>Remove Student</h1>
                   
    <input type="text" name="nN" placeholder="first name" id='in'>
<br><br>

<input type="submit" name="sub" value="Remove">
<input type="reset">
</div>
</div>
</div>

</div>
</form>
</body>
</html>


<?php
include "student.php";
    if(isset($_POST['sub'])){
        if(strlen($_POST['nN']) <= 13 || strlen($_POST['nN']) >= 15){
            echo '<script>alert("Error, Invalid National Number")</script>';
            return;
        }
    
    else{
           $student = new Student();
           $student->removeStudentFromSchool($_POST['nN']); 
    }
  } 

?>