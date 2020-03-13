<!DOCTYPE html>
<html lang="fr">
<head>
  <title><?= $titre ?></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="Contenu/style.css">
</head>

<style>
     .navbar-inverse .navbar-nav>li>a:hover {
    color: #fff;
    background-color: #1ED760;
    
}

.navbar-inverse {
    border-radius: 0px;
}


</style>

    <body>
        <div id="global">
<header>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="index.php">NoLabel</a>
    </div>
    <ul class="nav navbar-nav">
        <li><a href="index.php"><span class="glyphicon glyphicon-home"></span> Accueil</a></li>
        <li><a href="index.php?action=albums">Albums</a></li>
      <li><a href="index.php?action=bibliotheque">Bibliothèque</a></li>
    </ul>
<ul class="nav navbar-nav navbar-right">
<?php if(!isset($_SESSION['pseudo'])){ ?>
    

        <li><a href="index.php?action=inscription"><span class="glyphicon glyphicon-user"></span> Inscription</a></li>
      <li><a href="index.php?action=connexion"><span class="glyphicon glyphicon-log-in"></span> Connexion</a></li>
    
<?php }else{ ?>
      <li><a><span class="glyphicon glyphicon-user"></span> <?php echo $_SESSION['pseudo'];?></a></li>      
<li><a href="index.php?action=deconnexion"><span class="glyphicon glyphicon-log-in"></span> Déconnexion</a></li>
<?php }?>
</ul>
  </div>
</nav>
    
    </header>


  
            <div id="contenu">
                <?= $contenu ?>
            </div> <!-- #contenu -->
            <footer id="piedBlog">
                
            </footer>
        </div> <!-- #global -->
    </body>
</html>
