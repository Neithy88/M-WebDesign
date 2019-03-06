<?php

require('Models/Home.php');

//Pensez à vérifier sur chaque page que l'utilisateur est connecté
if(isset($_SESSION['id']) && !empty($_SESSION['id'])) :

    // $id = $_GET['idProject'];
    $id_project = $_POST['idProjet'];

        $query = $pdo->prepare("DELETE FROM projets where id=?");
        
    
    
    if($query->execute([$id_project])){
        ?>
            <p>Le projet <?=$id_project?> a été supprimé avec succès :-)</p>
        <?php
    }
    else{
        echo "<p> projet non trouvé </p>";
    }

endif;