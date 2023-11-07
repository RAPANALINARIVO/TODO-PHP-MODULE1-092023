<?php
include('fct/request.php');
include('fct/getItem.php');
include('config/app.php');
$element=validate($_POST['element']);


//verifier si file_name exist
if(!file_exists(FILE_NAME))
{
    //creation de fichier s'il n'existe pas avec initialisation
    file_put_contents(FILE_NAME,serialize([]));
}

// recuperation du contenus
$items =getitem();
$items[] = [
    'item'=>$element,
    'checked'=>false
    ];

//insertion des donnees ici
file_put_contents(FILE_NAME,serialize($items));

//redirection vers l'index
header('location:index.php');