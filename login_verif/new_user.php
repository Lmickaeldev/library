<?php
require "PHPMailer/PHPMailerAutoload.php";
session_start();
$bdd=new PDO('mysql:host=localhost;dbname=cours_connection;','Lmickael','afpa404');
if(isset($_POST['inscription'])){

    if (!empty($_POST['username'])) {
    
    $cle = rand(1000000,9000000);
    $email = $_POST['email'];
    $insertuser = $bdd ->prepare('INSERT INTO users(mail_user,cle_user,confirme_user,password_user,username_user)VALUE(?,?,?,?,?)');
    $insertuser->execute(array($mail_user, $cle_user,0,$password_user,$username_user));

    $recupuser = $bdd->prepare('SELECT*FROM users WHERE mail_user = ?');
    $recupuser = $bdd->execute(array($mail_user));
        if ($recupuser->rowCount()>0) {
            $userInfo = $recupuser->fetch();
            $_SESSION['id'] = $userInfo['id'];



            

function smtpmailer($to, $from, $from_name, $subject, $body)
    {
        $mail = new PHPMailer();
        $mail->IsSMTP();
        $mail->SMTPAuth = true; 
 
        $mail->SMTPSecure = 'ssl'; 
        $mail->Host = 'smtp.gmail.com';
        $mail->Port = 465;  
        $mail->Username = 'mickael60000lachevre@gmail.com';
        $mail->Password = 'ENTER YOUR EMAIL PASSWORD';   
   
   //   $path = 'reseller.pdf';
   //   $mail->AddAttachment($path);
   
        $mail->IsHTML(true);
        $mail->From="mickael60000lachevre@gmail.com";
        $mail->FromName=$from_name;
        $mail->Sender=$from;
        $mail->AddReplyTo($from, $from_name);
        $mail->Subject = $subject;
        $mail->Body = $body;
        $mail->AddAddress($to);

    }
    
    $to   = '$email_user';
    $from = 'mickael60000lachevre@gmail.com';
    $name = 'mickael';
    $subj = 'email de confirmation';
    $msg = 'This is mail about testing mailing using PHP.';
    
    $error=smtpmailer($to,$from, $name ,$subj, $msg);
    
        }


    }else{
        echo "veuillez mettre votre nom d'utilisateur";
    }
    if (!empty($_POST['email'])) {
        
    }else{
        echo "veuillez mettre votre email";
    }
    if (!empty($_POST['password'])) {
        
    }else{
        echo "veuillez mettre votre mots de passe";
    }
    if (!empty($_POST['password-2'])) {
        
    }else{
        echo "veuillez mettre la confirmation de votre mots de passe";
    }
}
?>



<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="./css/style.css">
    <title>login</title>
</head>
<body>
    <div class="container">
        <div class="form signup"method="post" id="formulaire_inscription">
            <form action="">
                <h2>s'inscrire</h2>
                <div class="inputBox">
                    <input type="text" required="required" name="username">
                    <i class="fa-regular fa-user"></i>
                    <span>nom d'utilisateur</span>    
                </div>
                <span class="defaultusername"></span>
                <div class="inputBox">
                    <label for="email" name="email"></label>
                    <input type="text" required="required" name="email">
                    <i class="fa-regular fa-envelope"></i>
                    <span>address email</span>
                    
                </div>
                <span class="defaultemail"></span>
                <div class="inputBox">
                    <input type="password" required="required" id="password">
                    <i class="fa-solid fa-lock"></i>
                    <span>mots de passe</span>
                </div>
                <span class="defaultpassword"></span>
                <div class="inputBox">
                    <input type="password" required="required" id="password-2">
                    <i class="fa-solid fa-lock"></i>
                    <span>confirmer mots de passe</span>
                </div>
                <span class="defaultpassword2"></span>
                <div class="inputBox">
                    <input type="submit" value="Creer un compte" name="inscription">
                </div>
                <p>déja menbre ?/ <a href="index.php" class="login">Connection</a></p>
            </form>
            
        </div>
        
    </div>
</body>
</html>