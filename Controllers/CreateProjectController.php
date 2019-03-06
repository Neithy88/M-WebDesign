<?php

require('Models/Home.php');

//Pensez à vérifier sur chaque page que l'utilisateur est connecté
if(isset($_SESSION['id']) && !empty($_SESSION['id'])) :

    // $id = $_GET['idProject'];

    // on peut utiliser une déclaration de variable comme  $id_project = $_POST['idProjet']; auquel cas, dans le prépare on met id=? et dans l'execute on utilise $id_projet.  Sinon, on remet directement dans l'execute execute([$_POST['idProjet'], $_POST['titre'], ...])) . Attention bien mettre dans le même ordre partout.
    
    $titre = $_POST['titre'];
    $description = $_POST['description'];


    // dans les champs qui accèptent les NULL pour contourner le required 

    if(!empty($_POST['url_image'])){
        $url_image = $_POST['url_image'];
    }
    else{
        $url_image = "n/a";
    }

    if(!empty($_POST['lien_git'])){
        $lien_git = $_POST['lien_git'];
    }
    else{
        $lien_git = "n/a";
    }

    if(!empty($_POST['lien_demo'])){
        $lien_demo = $_POST['lien_demo'];
    }
    else{
        $lien_demo = "n/a";
    }
    

    $query = $pdo->prepare("INSERT INTO projets (titre, description, url_image, lien_git, lien_demo) VALUES (?,?,?,?,?)");
        
    if($query->execute([$titre, $description, $url_image, $lien_git, $lien_demo])){
        ?>
            <p>Le projet <?=$titre?> a été créé.</p>
        <?php
    }
    else{
        echo "<p> projet non trouvé </p>";
    }

endif;