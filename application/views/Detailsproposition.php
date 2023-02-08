<?php
        $photo2=$detailobjet2['nomphoto']; 
        $photo1=$detailobjet1['nomphoto'];
        ?>
    <div id="content">
        <div id="objets">
            <div class="objet">
                <div class="image left" style="background-image: url('<?php echo base_url();?>assets/img/<?php echo $photo2; ?>');">
                    
                </div>
                <div id="details">
                        <h2>
                            Votre objet: <?php echo $detailobjet2["nom"];?>
                        </h2>
                        <div id="descri">
                            <?php echo $detailobjet2["description"];?>
                        </div>
                        <div>
                            Prix estime: <?php echo $detailobjet2["prix"];?>
                        </div>
                </div>
            </div>
            <div class="objet">
                <div class="image right" style="background-image: url('<?php echo base_url();?>assets/img/<?php echo $photo1; ?>');">
                    
                </div>
                <div id="details">
                    <h2>
                        Son objet: <?php echo $detailobjet1["nom"];?>
                    </h2>
                    <div id="descri">
                    <?php echo $detailobjet1["description"];?>
                    </div>
                    <div>
                        Prix estime: <?php echo $detailobjet1["prix"];?>
                    </div>
                    
            </div>
            </div>
        </div>
        <div id="links">
            <a href="<?php echo site_url("Utilisateur/Accepter");?>?id=<?php echo $detailobjet1["idProposition"];?>&demandeur=<?php echo $liste['idutilisateur1']; ?>&objet2=<?php echo $detailobjet2['idobjet']; ?>&objet1=<?php echo $detailobjet1['idobjet'];?>">
                <div>
                    Accepter
                </div>
            </a>
            <a href="<?php echo site_url("Utilisateur/Refuser");?>?id=<?php echo $detailobjet1["idProposition"];?>">
                <div id="refus">
                    Refuser
                </div>
            </a>
        </div>
    </div>