
<div id="content">
    <?php
        foreach($liste as $objet){ ?>
                <div id="objet">
                    <div id="nom">
                        <?php echo $objet['nom']; ?>
                    </div>
                    <div id="photo" style="background-image: url('<?php echo base_url().'assets/img/'.$objet["nomphoto"]; ?>')">
                    </div>
                    <div id="description">
                        <?php echo $objet['description']; ?>
                        <p><?php echo $objet["prix"];?></p>
                    </div>

             
                </div>
        
    <?php    }
    ?>
        <a href="<?php echo site_url("Recherche/listecategory");?>">retour</a>
</div>