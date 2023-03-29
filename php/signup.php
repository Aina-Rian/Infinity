<?php session_start();

    $options = [
        'cost' => 12,
    ];
    $hashpass = password_hash($cpassword, PASSWORD_BCRYPT, $options);
    $key = rand(10000000, 90000000);

    $ins = $mysqli -> prepare("INSERT INTO Users(Username, Email, Password, Userkey) VALUES (?, ?, ?, ?)");
    $ins->execute([$username,$email,$hashpass, $key]);


    $shw = $mysqli -> prepare("SELECT * FROM Users WHERE Email = ?");
    $shw ->execute([$email]);
    $abt = $shw ->fetch();
    $_SESSION['Avatar'] = $abt['Avatar'];
    $_SESSION['Id'] = $abt['Id'];
    $_SESSION['Username'] = $abt['Username'];
    $_SESSION['Name'] = $abt['Name'];
    $_SESSION['Fname'] = $abt['First_name'];
    $_SESSION['Email'] = $abt['Email'];
    $_SESSION['Phone'] = $abt['Phone'];
    $_SESSION['Key'] = $abt['Userkey'];

    $insl = $db -> prepare("INSERT INTO Users_link(Userkey, Date) VALUES (? , Now())");
    $insl->execute([$_SESSION['Key']]);

    $Userlink = $db -> prepare("SELECT * FROM Users_link WHERE Userkey = ?");
    $Userlink ->execute([$_SESSION['Key']]);
    $result = $Userlink ->fetch();
    $_SESSION['Facebook'] = $result['Facebook'];
    $_SESSION['Twitter'] = $result['Twitter'];
    $_SESSION['Github'] = $result['Github'];
    $_SESSION['WhatsApp'] = $result['WhatsApp'];
    $_SESSION['Bio'] = $result['Bio'];

    header('location: ../Espace_membres/comple.php');
 ?>