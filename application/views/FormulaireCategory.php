<div id="content">
    <div id="maincontent">
    <div id="title">
            <?php echo $titre; ?>
        </div>
        <div id="erreur">
            <?php if(isset($erreur)){ 
                echo $erreur;
          } ?>
        </div>
        <div id="form">
            <form action="<?php echo $action;?>" method="post">
                <?php
                    if(isset($id)==true){ ?>
                        <input type="hidden" name="id" value="<?php echo $id; ?>">
                    <?php    }
                    ?>
                <div class="champ">
                    <label for="">
                        Nom:
                    </label>
                    <input type="text" name="nom" id="" value="<?php echo $nom; ?>">
                </div>
               
                <div id="submit">
                    <input type="submit" value="Valider">
                </div>
            </form>
        </div>
    </div>
</div>