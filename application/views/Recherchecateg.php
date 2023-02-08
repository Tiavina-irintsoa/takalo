
<div id="all">
  <form action="<?php echo site_url("AutreRecherche/recherche");?>" method="get">
   
         Mot cle :<input type="text" name="description" value="">
      <select name="id" id="">
          <?php foreach($liste as $categ){ ?>
            <option value="<?php echo $categ["idcategory"];?>"><?php echo $categ["nom"];?></option>
              <?php } ?>
      </select>
    
    <div id="submit">
         <input type="submit"  value="rechercher">
    </div>

    <div id="ambany">

    </div>
  </form>