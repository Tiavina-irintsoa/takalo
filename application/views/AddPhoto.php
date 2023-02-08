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
            <?php echo form_open_multipart('Upload/addpic')?>
            <input type="hidden" name="id" value="<?php echo $idobjet; ?>">
                <div class="champ">
                    <label for="">
                        Photo:
                    </label>
                    <input type="file" name="userfile">
                </div>
                <div id="submit">
                    <input type="submit" value="Valider">
                </div>
            </form>
        </div>
    </div>
</div>