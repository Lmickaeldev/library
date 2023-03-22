<?php
    session_start();
    require'script-php/database.php';
    $bdd = Database::connect();

    if(isset($_POST['email']) && isset($_POST['password']))
    {
        $email = htmlspecialchars($_POST['email']);
        $password = htmlspecialchars($_POST['password']);

        $check = $bdd->prepare('SELECT pseudo, email, pass_user FROM utilisateur WHERE email =?');
        $check->execute(array($email));
        $data = $check->fetch();
        $row = $check->rowCount();

        if($row == 1){

            if(filter_var($email, FILTER_VALIDATE_EMAIL))
            {
                $password = hash('sha256',$password);
                if ($data['password'] === $pass_user) {
                    
                    $_SESSION['user'] =$data['pseudo'];
                    header('Location:landing.php');
                }else 
                header('Location:index.php?login_err=password');
            }else
            header('Location:index.php?login_err=email');

        }else
        header(Location:'index.php?login_err=already');


     }
     header('Location:index.php');
        
    


?>