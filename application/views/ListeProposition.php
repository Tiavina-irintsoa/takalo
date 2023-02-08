
    <div id="content">
        <div id='title'>
            <h1>
                Vos propositions d'echange
            </h1>
        </div>
       <?php  if(count($liste)==0){ ?>
            <div id="default_message">
                Aucune proposition en attente
            </div>
    <?php    } else{ ?>
    <?php 
        foreach($liste as $propo) { ?>   
        <a href="<?php echo site_url("Utilisateur/detailobjet").'?id='.$propo['idProposition']; ?>">
            <div id="notif">
                <span id="username"><?php echo $propo["username"];?> </span> <span>a propose d'echanger votre <?php echo  $propo["nomobjet2"]; ?> par son <?php echo $propo["objet1nom"]; ?></span>
            </div>
        </a>
    </div>
    <?php }  }?>
    </div>
