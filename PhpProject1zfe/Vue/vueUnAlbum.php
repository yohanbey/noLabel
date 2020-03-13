<?php $titre = 'Albums'; ?>

<?php ob_start(); 
 //foreach ($Albums as $album):
?>

<body class="bodytime">

    
<div class="album">

    <div class="titre">
       <img src="../Contenu/img/album/nekfeu_expension_pa.jpg" alt=""/>

        <h1>Les Etoiles Vagabondes : expansion</h1>
        <h4>Album de Nekfeu</h4>
         <img src="../Contenu/img/album/nekfeu_expension_pa.jpg" alt=""/>
        
        <div class="form-group">
            <button type="submit" class="btn btn-primary ">Lecture Aléatoire</button>
        </div> 

    </div>



 

<ul class="liste">
    <li><a class="listegroupe" href=""> 1. Les étoiles vagabondes</a> </li>
    <li><a class="listegroupe" href=""> 2. Les étoiles vagabondes</a>  </li>
    <li><a class="listegroupe" href=""> 3. Les étoiles vagabondes </a> </li>
    <li><a class="listegroupe" href=""> 4. Les étoiles vagabondes </a> </li>
    <li><a class="listegroupe" href=""> 5. Les étoiles vagabondes </a> </li>
    <li><a class="listegroupe" href=""> 6. Les étoiles vagabondes </a> </li>
    <li><a class="listegroupe" href=""> 7. Les étoiles vagabondes </a> </li>
    <li><a class="listegroupe" href=""> 8. Les étoiles vagabondes </a> </li>
    <li><a class="listegroupe" href=""> 9. Les étoiles vagabondes </a> </li>
    <li><a class="listegroupe" href=""> 10. Les étoiles vagabondes</a>  </li>
    <li><a class="listegroupe" href=""> 11. Les étoiles vagabondes </a> </li>
    <li><a class="listegroupe" href=""> 12. Les étoiles vagabondes </a> </li>
    <li><a  class="listegroupe"href=""> 13. Les étoiles vagabondes</a> </li>
    <li><a  class="listegroupe"href=""> 14. Les étoiles vagabondes </a> </li>
    <li><a  class="listegroupe"href=""> 15. Les étoiles vagabondes </a> </li>
    <li><a  class="listegroupe"href=""> 16. Les étoiles vagabondes </a> </li>
    <li><a class="listegroupe" href=""> 17. Les étoiles vagabondes </a> </li>
    <li><a  class="listegroupe"href=""> 18. Les étoiles vagabondes </a> </li>

</ul>



</div>
    
    </body>


<?php 
//endforeach;

$contenu = ob_get_clean(); ?>

<?php require 'gabarit.php'; ?>