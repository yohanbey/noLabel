<?php $titre = 'Inscription'; ?>

<?php ob_start(); ?>

<div class="login-form">
    <form action="index.php?action=uneInscription" method="post">
        <h2 class="text-center">Inscription</h2>       
        <div class="form-group">
            <input type="text" class="form-control" placeholder="Nom d'utilisateur" required name="Pseudo">
        </div>
        <div class="form-group">
            <input type="password" class="form-control" placeholder="Mot de passe" required name="Password">
        </div>
        <div class="form-group">
            <input type="password" class="form-control" placeholder="Confirmation mot de passe" required>
        </div>
        <div class="form-group">
            <input type="tel" class="form-control" placeholder="téléphone" required name="tel">
        </div>
        <div class="form-group">
            <input type="email" class="form-control" placeholder="email" required name="email">
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary btn-block">S'inscrire</button>
        </div>       
    </form>
    <p class="text-center">Vous avez déja un compte?<a href="/PPE/index.php?action=connexion">Connexion</a></p>
</div>

<?php $contenu = ob_get_clean(); ?>

<?php require 'gabarit.php'; ?>