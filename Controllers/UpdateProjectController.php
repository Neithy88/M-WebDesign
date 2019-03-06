<?php

require('Models/Home.php');

//Pensez à vérifier sur chaque page que l'utilisateur est connecté
if(isset($_SESSION['id']) && !empty($_SESSION['id'])) :

    // $id = $_GET['idProject'];

    // on peut utiliser une déclaration de variable comme  $id_project = $_POST['idProjet']; auquel cas, dans le prépare on met id=? et dans l'execute on utilise $id_projet.  Sinon, on remet directement dans l'execute execute([$_POST['idProjet'], $_POST['titre'], ...])) . Attention bien mettre dans le même ordre partout.

    $id_projet = $_POST['idProjet'];
    $titre = $_POST['titre'];
    $description = $_POST['description'];
    $url_image = $_POST['url_image'];
    $lien_git = $_POST['lien_git'];
    $lien_demo = $_POST['lien_demo'];

    $query = $pdo->prepare("UPDATE projets SET titre =?, description=?, url_image=?, lien_git=?, lien_demo=?  where id=?");
        
    if($query->execute([$titre, $description, $url_image, $lien_git, $lien_demo,$id_projet ])){
        ?>
            <p>Le projet <?=$id_projet?> a été mis à jour</p>
        <?php
    }
    else{
        echo "<p> projet non trouvé </p>";
    }

endif;