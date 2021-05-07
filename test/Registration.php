<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Registration Form For Applying on Amoun School">
    <title>Registration</title>
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    
    <style>
        <?php
          ob_start();
        include "Styles/registeration.css";
        ?>
    </style>
</head>    
<body>
    <div class="page-wrapper bg-gra-01 p-t-180 p-b-100 font-poppins">
        <div class="wrapper wrapper--w780">
            <div class="card card-3">
                <div class="card-heading"></div>
                <div class="card-body">
                    <h2 class="title">Welcome To Amoun</h2>
                    <form method="POST">
                        <div class="input-group">
                            <input class="input--style-3" type="text" placeholder="First Name" name="fN">
                             
                            
                             
                                


                        </div>
                        <div class="input-group">
                            <input class="input--style-3" type="text" placeholder="Second Name" name="sN">
                        </div>
                        <div class="input-group">
                              <input class="input--style-3" type="text" placeholder="Third Name" name="tN">
                        </div>
                        <div class="input-group">
                              <input class="input--style-3" type="text" placeholder="Fourth Name" name="foN">
                        </div>
                        <div class="input-group">
                            <input class="input--style-3" type="text" placeholder="National Number" name="nN">
                        </div>
                        <div class="input-group">
                            <input class="input--style-3 js-datepicker" type="text" placeholder="Birth Date" name="birthday">
                            <i class="zmdi zmdi-calendar-note input-icon js-btn-calendar"></i>
                        </div>
                        <div class="input-group">
                            <div class="rs-select2 js-select-simple select--no-search">
                                <select name='gender'>
                                    <option disabled="disabled" selected="selected"'>Gender</option>
                                    <option>Male</option>
                                    <option>Female</option>
                                    
                                </select>
                                <div class="select-dropdown"></div>
                            </div>
                        </div>
                       
                        <div class="p-t-10">
                            <button class="btn btn--pill btn--green" type="submit" name="sub">Create Account</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Jquery JS-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <!-- Vendor JS-->
    <script src="vendor/select2/select2.min.js"></script>
    <script src="vendor/datepicker/moment.min.js"></script>
    <script src="vendor/datepicker/daterangepicker.js"></script>

    <!-- Main JS-->
    <script src="Js/registration.js"></script>

</body>



</html>

<?php
include "student.php";
    if(isset($_POST['sub'])){
        if(!empty($_POST['gender'])){
    $student = new Student();
    $student->addStudent($_POST['fN'], $_POST['sN'], $_POST['tN'], $_POST['foN'], $_POST['nN'], $_POST['birthday'], $_POST['gender']);     
    header('Location:logIn.php');    
  }
}
?>