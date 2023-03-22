<?php
require'script-php/database.php';
$bdd = Database::connect();
if(isset($_POST['pseudo']) && isset($_POST['email']) && isset($_POST['password']) && isset($_POST['password_retype'])){

    $pseudo = htmlspecialchars($_POST['pseudo']);
    $email = htmlspecialchars($_POST['email']);
    $passx = htmlspecialchars($_POST['password']);
    $password_retype = htmlspecialchars($_POST['password_retype']);

    $check = $bdd->prepare('SELECT pseudo, email, pass_user FROM utilisateur WHERE email =?');
    $check->execute(array($email));
    $data = $check->fetch();
    $row = $check->rowCount();

    if($row == 0){

        if(strlen($pseudo)<= 100){
            if(strlen($email)<= 100){
                if(filter_var($email, FILTER_VALIDATE_EMAIL)){
                    if($passx == $password_retype){
                        $pass = password_hash($passx, PASSWORD_DEFAULT);
                        

                        $insert = $bdd->prepare('INSERT INTO utilisateur(pseudo,email,pass_user) VALUES (:pseudo, :email, :pass)');

                        $insert->execute(array(

                            'pseudo' => $pseudo,
                            'email' => $email,
                            'pass'=> $pass,
                            
                        ));
                        header('Location: new_user.php?reg_err=success');
                    
                    }else header('Location: new_user.php?reg_err=password');
                }else header('Location: new_user.php?reg_err=email');
            }else header('Location: new_user.php?reg_err=email_length');
        }else header('Location: new_user.php?reg_err=pseudo_length');
    }else header('Location:new_user.php?reg_err=already');

}


?>