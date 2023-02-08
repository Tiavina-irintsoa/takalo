
<div id="content">
  <span><?php echo $titre;?></span>
  <div id="image1" style="background-image: url('<?php echo base_url().'assets/img/'.$detailobjet1["nomphoto"]; ?>')">
  
    <div id="description">
      <span>nom:</span>
      <span>description:<?php echo $detailobjet1["description"];?></span>
      <span>prix:<?php echo $detailobjet1["prix"];?></span>

   </div>
  </div>
  <div id="image2" >
    <div id="description2" >
      <span>nom;</span>
      <span>description:<?php echo $detailobjet2["description"];?></span>
      <span>prix:<?php echo $detailobjet2["prix"];?></span>
     </div>
  </div>

  <div id="button">
    <a href="<?php echo site_url("Utilisateur/Accepter");?>?id=<?php echo $detailobjet1["idProposition"];?>&demandeur=<?php echo $liste['idutilisateur1']; ?>&objet2=<?php echo $detailobjet2['idobjet']; ?>&objet1=<?php echo $detailobjet1['idobjet'];?>"><button>accepter</button></a>
    <a href="<?php echo site_url("Utilisateur/Refuser");?>?id=<?php echo $detailobjet1["idProposition"];?>"><button>Refuser</button></a> 
  </div>

</div>

</body>



