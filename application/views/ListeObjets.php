<?php   
        if(count($liste)==0){ ?>
            <div id="default">
                Aucun objet trouve
            </div>
    <?php    }
    ?>
<div id="content">
    
    <?php
        foreach($liste as $objet){ ?>
            <div id="all">
                <a href="<?php echo site_url("Utilisateur/details").'?id='.$objet['idobjet']?>">
                    <div id="objet">
                        <div id="nom">
                            <?php echo $objet['nom']; 
                                $photo=$objet['nomphoto'];
                            ?> estime a <?php echo $objet['prix']; ?>
                        </div>
                        <div id="photo" style="background-image: url('<?php echo base_url().'assets/img/'.$photo; ?>')">
                        </div>
                        <div id="description">
                            <?php echo $objet['description']; ?>
                        </div>
                    </div>
                </a>
                <div id="link">
                <a href="<?php echo site_url("ObjetPrix/getprixproche")?>?id=<?php echo $objet['idobjet']?>&pourcentage=10">+/-10%</a>
                <a id="link2" href="<?php echo site_url("ObjetPrix/getprixproche")?>?id=<?php echo $objet['idobjet']?>&pourcentage=20">+/-20%</a>
                </div>
            </div>
    <?php    } 
    ?>
</div>