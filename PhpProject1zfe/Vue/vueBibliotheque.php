<?php $titre = 'Albums'; ?>

<?php ob_start(); ?>
<p>Biblio</p>
<?php $contenu = ob_get_clean(); ?>

<?php require 'gabarit.php'; ?>