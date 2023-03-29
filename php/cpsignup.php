<?php
    require 'database.php';
    global $mysqli;

    if(isset($_POST['signup'])){
        extract($_POST);

        $qr = $mysqli -> mysql_query("SELECT * FROM Users WHERE Username = ?");
        $qr ->execute([$username]);
        $cpr = $qr -> fetch();

        if($cpr == true){ $obs = 'has-error'; $obst = 'This username is already taken !'; }else{ $obs = 'has-success'; $obst = '&nbsp;';}

        $q = $mysqli -> prepare("SELECT * FROM Users WHERE Email = ?");
        $q ->execute([$email]);
        $cps = $q -> fetch();
        if($cps == true){ $obr = 'has-error'; $obrt = 'This email is already used !';  }else{ $obr = 'has-success'; $obrt = '&nbsp;';}

        if(($cpr == false) && ($cps == false)){
            include 'signup.php';
        }else{
            include '../pages/signup.php';
        }
        if(($cpr == true) && ($cps == true)){
            include '../pages/login.php';
        }
    }
?>