<?php $titre = 'Accueil'; ?>

<?php ob_start(); ?>
<div class='page_accueil'>

<h1>Bienvenue sur NoLablel</h1>

<h2>Des milliers d'albums a acheter sur notre plateforme</h2>

<a href='index.php?action=inscription' class="lien_btn"><button type="submit" class="btn btn-primary btn-block btn_accueil">S'inscrire</button></a>

<a href='index.php?action=connexion' class="lien_btn"><button type="submit" class="btn btn-primary btn-block btn_accueil" href='www.google.fr'>Se connecter</button></a>
</div>

<?php $contenu = ob_get_clean(); ?>

<?php require 'gabarit.php'; ?>