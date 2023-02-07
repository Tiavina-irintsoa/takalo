<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/listeproposition.css">
</head>
<body>
    <div id="content">
    <?php 
        foreach($liste as $propo) { ?>   
        <a href="<?php echo site_url("Utilisateur/detailobjet").'?id='.$propo['idProposition']; ?>">
            <div id="notif1">
                <?php echo $propo["username"];?> a propose d'echanger votre <?php echo  $propo["nomobjet2"]; ?> par <?php echo $propo["objet1nom"]; ?>
            </div>
        </a>
    </div>
    <?php   }?>
</body>
</html>