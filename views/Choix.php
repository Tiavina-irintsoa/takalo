<div id="content">

<?php

    foreach($liste as $objet){ 
        $image=$objet['nomphoto'];
        ?>
        <div id="title">
            <h1>
                Choisir une contrepartie
            </h1>

        </div>
        <div id="objet">
            <div id="img" style="background-image:url('<?php echo base_url(); ?>assets/img/<?php echo $image; ?>');">

            </div>
            <div id="about">
                <div id="nom">
                    <?php echo $objet['nom']; ?>
                </div>
                <div id="descri"><?php echo $objet['description']; ?></div>
            </div>
            <div id="choisir">
                <a href="<?php echo site_url("Utilisateur/proposer"); ?>?owner=<?php echo $owner; ?>&idobjet2=<?php echo $objet2; ?>&idobjet1=<?php echo $objet['idobjet']; ?>" >
                Choisir
            </a>
            </div>
        </div>
        
<?php    }
?>
    </div>
