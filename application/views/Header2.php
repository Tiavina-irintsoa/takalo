<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $titre; ?></title>
    <link href="<?php echo base_url(); ?>assets/bootstrap-5.0.2-dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo base_url() ;?>assets/css/<?php echo $css;?>">
    <link rel="stylesheet" href="<?php echo base_url() ;?>assets/css/template.css">
</head>
<body>
<head>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">TakaloTakalo</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="<?php echo site_url("Utilisateur/listeObjets");?>">
                        Mes objets    
                    </a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="<?php echo site_url("Utilisateur/addobjet");?>">
                        Ajouter un objet  
                    </a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="<?php echo site_url("Utilisateur/getAllObjetUser");?>">
                        Voir des objets 
                    </a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="<?php echo site_url("Utilisateur/getProposition");?>">
                        Voir les propositions 
                    </a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="<?php echo site_url("Recherche/listecategory");?>">
                        Recherche un objet
                    </a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="<?php echo site_url("Utilisateur/disconnect");?>">
                        Se deconnecter
                    </a>
                    </li>
                </ul>
                </div>
            </div>
        </nav>
</head>