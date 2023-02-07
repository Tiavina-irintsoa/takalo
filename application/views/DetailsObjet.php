
<div>
<div id="image">

  

</div>

<div id="all">
  <?php
    if($liste['idutilisateur']!=$user['idutilisateur']){ ?>
        <span>User: <?php echo $liste["username"];?></span>
     <?php } 

  ?>
  <span><?php echo $titre;?></span>
  <span>nom: <?php echo $liste["nom"];?></span>
  <span>category:<?php echo $liste["nomcategory"];?></span>
  <span>prix:<?php echo $liste["prix"];?></span>
  <span>description:<?php echo $liste["description"];?></span>
      <?php
        if($liste['idutilisateur']==$user['idutilisateur']){ ?>
          <div id="bouton">
            <a href="<?php echo site_url("Utilisateur/supprimerObjet").'?id='.$liste['idobjet'];?>"><input type="submit" value="supprimer"></a>
            <a href="<?php echo site_url("Details/update")?>"><input type="submit" value="modifier"></a>
            <a href="<?php echo site_url("Utilisateur/addpic").'?id='.$liste['idobjet'];?>"><input type="submit" value="Ajouter une photo"></a>

          </div>
      <?php  }
      else{  ?>
          <a href="<?php echo site_url("Utilisateur/choisir").'?owner='.$liste['idutilisateur'].'&objet='.$liste['idobjet'];?>">
              <div>
                Proposer un echange
              </div>
          </a>
    <?php  } ?>
</div>
</div>
