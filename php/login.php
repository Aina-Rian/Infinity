<?php session_start();
if (isset($_POST['login'])) {
    extract($_POST);

    $q = $db -> prepare("SELECT * FROM Users WHERE Email = :email");
    $q->execute(['email' => $email]);
    $result = $q ->fetch();

    if ($result == true) {

        $hashpass = $result['Password'];
        if (password_verify($password, $hashpass)) {
            $_SESSION['Avatar'] = $result['Avatar'];
            $_SESSION['Id'] = $result['Id'];
            $_SESSION['Username'] = $result['Username'];
            $_SESSION['Email'] = $result['Email'];
            $_SESSION['Key'] = $result['Userkey'];
            header('location: ../Espace_membres/index.php');
        } else {
            $ob = 'Your password is incorrect';
            include '../pages/login.php';
        }
    } else {
        $ob = 'The system cannot find your email, please signup';
        include '../pages/signip.php';
    }
}
?>