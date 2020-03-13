<?php $titre = 'Albums'; ?>

<?php ob_start(); ?>

<?php $test =0; ?>
<div class="row">
<?php 
foreach ($liste as $element):
?>
    <body class="bodytime">

 

<?php if(0==$test){ ?>
    <div class="col-sm-6">
    <div class="card">
      <div align="center" class="card-body" class="imagealbum">
        <h3 class="card-title"><?= $element[1]?> </h3>
        <img  src="<?= $element['url_couverture_album']?>" style="width: 250px; border-color:	#2d3139; " class="imagealbum" alt="...">
        <br><br>
        <a href="/PPE/index.php?action=unalbum&AMP;id=<?= $element['id_album']?>" class="btn btn-primary">Découvrir</a>
      </div>
    </div>
        <br><br><br><br>
  </div>  
        
        
        </body>
     <?php } ?>
    

 
    
<?php 
endforeach;
$contenu = ob_get_clean(); ?>



<?php require 'gabarit.php'; ?>