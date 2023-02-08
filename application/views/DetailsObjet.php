
<div id="content">
        <div id="maincontent">
            <div class="images slideshow-container">
                <?php
                    for($i=0;$i<count($photos);$i++){ ?>
                        <div class="mySlides image" style="background-image: url('<?php echo base_url().'assets/img/'. $photos[$i]['nomphoto']; ?>');">
                            
                        </div>
                <?php    }
                ?>
                
              <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                <a class="next" onclick="plusSlides(1)">&#10095;</a>
            </div>
            <div id="details">
                <div id="nomuser">
                    <h3>
                        Objet de <?php echo $liste["username"];?>
                    </h3>
                </div>
                <div id="objet">
                        <h1>
                        <?php echo $liste["nom"];?> estime à <?php echo $liste["prix"];?> Ar
                        </h1>
                        <span id="descri">
                            <?php echo $liste["description"];?>
                        </span>
                        <span>
                            Category: <?php echo $liste["nomcategory"];?>
                        </span>
                </div>
                <div id="button">
                    <?php
                        if($liste['idutilisateur']==$user['idutilisateur']){ ?>
                            <a href="<?php echo site_url("Utilisateur/supprimerObjet").'?id='.$liste['idobjet'];?>">
                                <div>
                                    Supprimer
                                </div>
                            </a>
                            <a href="<?php echo site_url("Utilisateur/addpic").'?id='.$liste['idobjet'];?>">
                                <div>
                                    Ajouter une photo
                                </div>
                            </a>
                        
                <?php   } else { 
                    if($isproposedbyme==false){ ?>
                        <a href="<?php echo site_url("Utilisateur/choisir").'?owner='.$liste['idutilisateur'].'&objet='.$liste['idobjet'];?>">
                            <div>
                                Proposer
                            </div>
                        </a>
                <?php    } else{
                    ?>
                    
                    <a href="">
                        <div id="proposer">
                            Deja proposee
                        </div>
                    </a> 
                    <?php } } ?>
                </div>
            </div>
        </div>
    </div>
    <script>
        let slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  let i;
  let slides = document.getElementsByClassName("mySlides");
  if (n > slides.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  slides[slideIndex-1].style.display = "block"; 
  slides[slideIndex-1].style.width = "100%";  
}
</script>