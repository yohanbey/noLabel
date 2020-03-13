<?php

require 'Modele/Modele.php';


function accueil() {
    
    require 'Vue/vueAccueil.php';
}

function connexion() {
    require 'Vue/vueConnexion.php';
}

function unalbum($idAlbum){

	//$lAlbum = getUnAlbum($idAlbum);
	require 'Vue/vueUnAlbum.php';
}

function albums() {
	$liste = getAlbum();
    require 'Vue/vueAlbums.php';
}

function bibliotheque() {
    require 'Vue/vueBibliotheque.php';
}

function inscription() {
    require 'Vue/vueInscription.php';
}


// Affiche une erreur
function erreur($msgErreur) {
    require 'Vue/vueErreur.php';
}

