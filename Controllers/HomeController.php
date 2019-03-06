<?php

require('Models/Home.php');

$query = $pdo->prepare("SELECT titre, description, url_image, lien_git, lien_demo FROM projets");
$query -> fetchAll();

$projets= getAllProjects();

// /la fonction etait appelé dans le model mais netait pas appellé dans le controller//

require('Views/HomeView.php');