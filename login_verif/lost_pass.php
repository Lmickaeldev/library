<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"
        integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="/login/css/style.css">
    <title>login</title>
</head>

<body>
    <div class="container">
        <div class="form signin">
            <form action="">
                <h2>mots de passe perdu</h2>
                <div class="inputBox">
                    <input type="text" required="required">
                    <i class="fa-regular fa-user"></i>
                    <span>nom d'utilisateur</span>
                </div>
                <div class="inputBox">
                    <input type="text" required="required">
                    <i class="fa-regular fa-envelope"></i>
                    <span>adresse email</span>
                </div>
                <div class="inputBox">
                    <input type="submit" value="envoyer">
                </div>
                <p>pas encore menbre ?/ <a href="new_user.html" class="login">Créer un comptre</a></p>
                <p>nom d'utilisateur oublié ?/ <a href="lost_user.html" class="login">recuperation nom d'utilisateur </a></p>
            </form>
        </div>
</body>

</html>