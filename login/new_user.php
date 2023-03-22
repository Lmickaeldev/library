<?php
    require'script-php/database.php';

    $bdd = Database::connect();
    $insertUSER = $bdd->prepare('INSERT INTO users(username_user,mail_user,password_user)VALUE(?,?,?)');


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
        <div class="form signup">
        <?php
            if (isset($GET['reg_err']))
            {
                $err = htmlspecialchars($_GET['reg_err']);

                switch($err)
                {
                    case'success':
                    ?>
                    <div class="alert alert-success">
                        <strong>succes</strong> inscription reussie
                    </div>
                    <?php
                    break;
                    case'password':
                        ?>
                        <div class="alert alert-danger">
                            <strong>Erreur</strong> mot de passe différent
                        </div>
                        <?php
                        break;
                    case'email':
                        ?>
                        <div class="alert alert-danger">
                            <strong>Erreur</strong> email non valide
                        </div>
                        <?php
                        break;
                    case'email_length':
                        ?>
                        <div class="alert alert-danger">
                            <strong>Erreur</strong> email trop long
                        </div>
                        <?php
                        break;
                        case'pseudo_length':
                            ?>
                            <div class="alert alert-danger">
                                <strong>Erreur</strong> pseudo trop long
                            </div>
                            <?php
                            break;
                            case'already':
                                ?>
                                <div class="alert alert-danger">
                                    <strong>Erreur</strong> compte deja existant
                                </div>
                                <?php
                                break;
                }
            }
            ?>
            <form action="inscription_traitement.php" method="post"  >
                <h2>s'inscrire</h2>
                <div class="inputBox">
                    <input type="text" name="pseudo" value="">
                    <i class="fa-regular fa-user"></i>
                    <span>nom d'utilisateur</span>
                    
                </div>
                <span class="defaultusername"></span>
                <div class="inputBox">
                    <input type="text"  name="email">
                    <i class="fa-regular fa-envelope"></i>
                    <span>address email</span>
                    
                </div>
                <div class="inputBox">
                    <input type="password" name="password">
                    <i class="fa-solid fa-lock"></i>
                    <span>mots de passe</span>
                </div>
                <div class="inputBox">
                    <input type="password" name="password_retype">
                    <i class="fa-solid fa-lock"></i>
                    <span>confirmer mots de passe</span>
                </div>
                <div class="inputBox">
                    <input type="submit" value="Creer un compte" name="inscription">
                </div>
                <p>déja menbre ?/ <a href="index.php" class="login">Connection</a></p>
            </form>
            
        </div>
        
    </div>
</body>
</html>