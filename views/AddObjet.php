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
            <?php echo form_open_multipart('Upload/do_upload')?>
                <div class="champ">
                    <label for="">
                        Nom:
                    </label>
                    <input type="text" name="nom" id="">
                </div>
                <div class="champ">
                    <label for="">
                        Category:
                    </label>
                    <select name="idcategory" id="">
                        <?php foreach($liste as $category){ ?>
                            <option value="<?php echo $category['idcategory'] ;?>">
                                <?php echo $category['nom'] ;?>
                            </option>
                    <?php    } ?>
                    </select>
                </div>
                <div class="champ">
                    <label for="">
                        Prix:
                    </label>
                    <input type="text" name="prix" id="">
                </div>
                <div class="champ">
                    <label for="">
                        Description:
                    </label>
                    <input type="text" name="description" id="">
                </div>
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