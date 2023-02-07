<div id="content">
    <?php
        foreach($liste as $objet){ ?>
            <a href="<?php echo site_url("Utilisateur/details").'?id='.$objet['idobjet']?>">
                <div id="objet">
                    <div id="nom">
                        <?php echo $objet['nom'];
                            $photo=$objet['nomphoto'];
                        ?>
                    </div>
                    <div id="photo" style="background-image: url('<?php echo base_url().'assets/img/'.$photo; ?>')">
                    </div>
                    <div id="description">
                        <?php echo $objet['description']; ?>
                    </div>
                </div>
            </a>
    <?php    }
    ?>
</div>