<?php

// inscription

function uneInscription($pseudo, $mdp, $tel, $mail){
	$dbb = getBdd();
	$dbb->query("insert into Utilisateur(pseudo_uti, mdp_uti, mail_uti, tel_uti, administraeur) values ('$pseudo', '$mdp', '$tel', '$mail', 0);");
}

// Connection
function seConnecter($pseudo, $mdp){
	$dbb = getBdd();
	$testConnexion = $dbb->query("select * from utilisateur where pseudo_uti = '$pseudo' and mdp_uti = '$mdp';");
	if($testConnexion->rowCount() == 1){
		return $testConnexion->fetch();
        }else
		throw new Exception("Pseudo ou Mot de passe incorrect");
}

function getArtiste(){
	$dbb = getBdd();
	$lesArtistes = $dbb->query("select * from Artiste;");
	return $lesArtistes;
}

function getAlbum(){
	$dbb = getBdd();
	$lesAlbums = $dbb->query("select * from Album;");
	return $lesAlbums;
}

function getAlbumFromArtiste($idArtiste){
	$dbb = getBdd();
	$lesAlbums = $dbb->query("select * from Album where id_artiste = $idArtiste;");
	return $lesAlbums;
}

function getUnAlbum($idAlbum){
	$dbb = getBdd();
	$lAlbum = $dbb->query("select * from Album where id_album = $idAlbum;");
	return $lAlbum[1];
}

function getMusique(){
	$dbb = getBdd();
	$lesMusiques = $dbb->query("select * from Musique;");
	return $lesMusiques;
}

function getBiblio($idUtilisateur){
	$dbb = getBdd();
	$mesAlbums = $dbb->query("select * from Album inner join Acheter on Album.id_album = Acheter.id_album inner join Utilisateur on Utilisateur.id_uti = Acheter.id_client where Acheter.id_client = $idUtilisateur;");
	return $mesAlbums;
}


// Effectue la connexion à la BDD
// Instancie et renvoie l'objet PDO associé
function getBdd() {
try{
    $bdd = new PDO('pgsql:host=localhost;dbname=DB_NoLabel;', 'postgres',
            'P@ssw0rdsio');
    return $bdd;
}catch(PDOException $e){
   erreur($e->getMessage());
}
}