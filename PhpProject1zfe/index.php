<?php
session_start();
require 'Controleur/Controleur.php';

try {
    if (isset($_GET['action'])) {
        if ($_GET['action'] == 'inscription') {
            inscription();                
        }elseif($_GET['action'] == 'accueil'){
		accueil();
}elseif($_GET['action'] == 'albums'){
	albums();
}elseif($_GET['action'] == 'unalbum'){		
	unalbum($_GET['id']);
}elseif($_GET['action'] == 'uneInscription'){

			$utilisateur = uneInscription($_POST['Pseudo'],$_POST['Password'],$_POST['tel'],$_POST['email']);
			if(isset($utilisateur)){
			$_SESSION['pseudo'] = $_POST['Pseudo'];
			$_SESSION['admin'] = 0;
}
accueil();
}elseif($_GET['action'] == 'connexion'){
		connexion();
}elseif($_GET['action'] == 'deconnexion'){
		session_destroy();
		accueil();
}elseif($_GET['action'] == 'bibliotheque'){
		bibliotheque();
}elseif($_GET['action'] == 'meconnecter'){
		if(isset($_POST['pseudo']) && isset($_POST['mdp'])){
			$utilisateur = seConnecter($_POST['pseudo'],$_POST['mdp']);
			if(isset($utilisateur)){
echo $utilisateur[1];
$_SESSION['pseudo'] = $utilisateur[0];
$_SESSION['id'] = $utilisateur[5];
$_SESSION['admin'] = $utilisateur[4];
}
accueil();
}

}
        else
            throw new Exception("Action non valide");
    }
    else {  // aucune action définie : affichage de l'accueil
        accueil();
    }
}
catch (Exception $e) {
    erreur($e->getMessage());
}