<div id="content">
    <?php
        foreach($liste as $objet){ ?>
            <div id="all">
                <a href="<?php echo site_url("Utilisateur/details").'?id='.$objet['idobjet']?>">
                    <div id="objet">
                        <div id="nomecart" >
                            <div id="nom">
                                <?php echo $objet['nom'];
                                    $photo=$objet['nomphoto'];
                                ?>
                            </div>
                            <div  id="ecart">
                                <span>
                                    <?php echo $objet['ecart'];?> %
                                </span> 
                            </div>
                        </div>
                        <div id="photo" style="background-image: url('<?php echo base_url().'assets/img/'.$photo; ?>')">
                        </div>
                        <div id="description">
                            <?php echo $objet['description']; ?>, estime a <?php echo $objet['prix']; ?>
                        </div>
                    </div>
                </a>
                <a href="<?php echo site_url("Proposition/PropositionEchange");?>?idobjet1=<?php echo $idobjet; ?>&idobjet2=<?php echo $objet['idobjet']; ?>&utilisateur2=<?php echo $objet['idutilisateur'];?>">
                    Echanger
                </a>
            </div>
    <?php    }
    ?>
</div>