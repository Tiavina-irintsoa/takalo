<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Se connecter en tant qu'administrateur</title>
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/loginAdmin.css">
</head>
<body>
    <div id="content">
        <div id="title">
            Se connecter en tant qu'admin
        </div>
        <div id="form">
            <form action="<?php echo site_url("welcome/verifier"); ?>" method="post">
                <div class="champ">
                    <label for="">
                        Votre nom:
                    </label>
                    <input type="text" name="nom" id="" value="admin">
                </div>
                <div class="champ">
                    <label for="">
                        Votre mot de passe:
                    </label>
                    <input type="password" name="mdp" id="" value="admin1">
                </div>
                <div id="submit">
                    <input type="submit" value="Se connecter">
                </div>
            </form>
        </div>
    </div>
</body>
</html>