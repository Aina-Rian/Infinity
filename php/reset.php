<?php include 'database.php';
global $db;
require "PHPMailer/PHPMailerAutoload.php";
    if(isset($_POST['send'])){
        $email = $_POST['email'];

        $requ = $db->prepare('SELECT * FROM Users WHERE Email = ?');
        $requ->execute([$email]);

        if($requ->rowCount() > 0){
            $result = $requ->fetch();

            function smtpmailer($to, $from, $from_name, $subject, $body)
                {
                    $mail = new PHPMailer();
                    $mail->IsSMTP();
                    $mail->SMTPAuth = true;

                    $mail->SMTPSecure = 'ssl';
                    $mail->Host = 'smtp.gmail.com';
                    $mail->Port = 465;
                    $mail->Username = 'infinity.loopping@gmail.com';
                    $mail->Password = 'hrvcoouuyyzyvrgl';

            //   $path = 'reseller.pdf';
            //   $mail->AddAttachment($path);

                    $mail->IsHTML(true);
                    $mail->From="infinity.loopping@gmail.com";
                    $mail->FromName=$from_name;
                    $mail->Sender=$from;
                    $mail->AddReplyTo($from, $from_name);
                    $mail->Subject = $subject;
                    $mail->Body = $body;
                    $mail->AddAddress($to);
                    if(!$mail->Send())
                    {
                        $error ="Please try Later, Error Occured while Processing...";
                        return $error;
                    }
                    else
                    {
                        $error = "Thanks You !! Your email is sent.";
                        return $error;
                        
                    }
                }

                $to   = $email;
                $from = 'infinity.loopping@gmail.com';
                $name = 'Infinite Loop';
                $subj = 'Email de recuperation';
                $msg = '<p>Click on the link below to reset your password</p>
                <p><a href="http://localhost:8008/pages/reset.html">reset pasword</a></p>';

                $error=smtpmailer($to,$from, $name ,$subj, $msg);


        }
    }

?>