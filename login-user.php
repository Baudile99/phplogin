<?php require_once "controllerUserData.php"; ?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Formulaire de connexion</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-4 offset-md-4 form login-form">
                <form action="login-user.php" method="POST" autocomplete="">
                    <h2 class="text-center">Formulaire de connexion</h2>
                    <p class="text-center">Connectez-vous avec votre email et votre mot de passe.</p>
                    <?php
                    if(count($errors) > 0){
                        ?>
                        <div class="alert alert-danger text-center">
                            <?php
                            foreach($errors as $showerror){
                                echo $showerror;
                            }
                            ?>
                        </div>
                        <?php
                    }
                    ?>


                    <div class="form-group">
                        <input class="form-control" type="email" name="email" placeholder="Email " required value="<?php echo $email ?>">
                    </div>
                    <div class="form-group">
                        <input class="form-control" type="password" name="password" placeholder="Mot de paase" required>
                    </div>
                    <div class="link forget-pass text-left"><a href="forgot-password.php">Mot de passe oublié?</a></div>
                    <div class="form-group">
                        <input class="form-control button" type="submit" name="login" value="Login">
                    </div>
                    <div class="link login-link text-center">Pas encore membre? <a href="signup-user.php">Inscription</a></div>
                </form>
            </div>
        </div>
    </div>
    
</body>
</html>