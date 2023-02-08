<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $titre; ?></title>
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/login.css">
</head>
<body>
    <div id="content">
    <div id="maincontent">
        <div id="title">
            <?php echo $titre; ?>
        </div>
        <div id="form">
            <form action="<?php echo $action; ?>" method="post">
                <div class="champ">
                    <label for="">
                        Votre nom:
                    </label>
                    <input type="text" name="nom" id="">
                </div>
                <div class="champ">
                    <label for="">
                        Votre mot de passe:
                    </label>
                    <input type="password" name="mdp" id="">
                </div>
                <div id="submit">
                    <input type="submit" value="<?php echo $submitvalue; ?>">
                </div>
            </form>
            <?php if($titre=="Login utilisateur"){?>
            <a href="<?php echo site_url("Welcome/loginAdmin"); ?>">
                Se connecter en tant qu'admin
            </a>

        </div>
        <a href="<?php echo site_url("Welcome/inscriptionUtilisateur"); ?>">
                S'inscrire
            </a>
            <?php } ?>
    </div>
    </div>
</body>
</html>