<?php $titre = 'Connexion'; ?>

<?php ob_start(); ?>
<div class="login-form">
    <form action="index.php?action=meconnecter" method="post">
        <h2 class="text-center">Pour continuer, connectez-vous à NoLabel</h2>       
        <div class="form-group">
            <input type="text" name="pseudo" class="form-control" placeholder="Nom d'utilisateur" required="required">
        </div>
        <div class="form-group">
            <input type="password" name="mdp" class="form-control" placeholder="Mot de passe" required="required">
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary btn-block">Se connecter</button>
        </div>
        
    </form>
    <div class="form-group">
            <a  class="btn btn-primary btn-block" id="button2" href="index.php?action=inscription">Je n'ai pas de compte NoLabel</a>
        </div>
   
</div>
    
   
</div>
<?php $contenu = ob_get_clean(); ?>

<?php require 'gabarit.php'; ?>