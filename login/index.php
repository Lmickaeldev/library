<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"
        integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="/css/style.css">
    <title>login</title>
</head>

<body>
    <div class="container">
        <div class="form signin">
        <?php
            if (isset($GET['login_err'])) 
            {
                $err = htmlspecialchars($_GET['login_err']);

                switch($err)
                {
                    case'password':
                    ?>
                    <div class="alert alert-danger">
                        <strong>Erreur</strong> Mots de passe incorrect
                    </div>
                    <?php
                    break;
                    case'email':
                        ?>
                        <div class="alert alert-danger">
                            <strong>Erreur</strong> email incorrect
                        </div>
                        <?php
                        break;
                    case'already':
                        ?>
                        <div class="alert alert-danger">
                            <strong>Erreur</strong> compte non existant
                        </div>
                        <?php
                        break;
                }
            }
            ?>

            <form action="connection.php" method="post">
                <h2>connection</h2>
            <div class="inputBox">
                <input type="email" name="email">
                <i class="fa-regular fa-user"></i>
                <span>adresse mail</span>
            </div>
            <div class="inputBox">
                <input type="password" name="password">
                <i class="fa-solid fa-lock"></i>
                <span>mot de passe</span>
            </div>
            <div class="inputBox">
                <input type="submit" value="Connexion">
            </div>
            <p>pas encore menbre ?/ <a href="new_user.php" class="login">Créer un comptre</a></p>
            </form>
            
        </div>
</body>

</html>