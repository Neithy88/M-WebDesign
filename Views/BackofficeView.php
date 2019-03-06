<?php
$title = "M-WebDesign : Backoffice";
include 'head.php';

?>
<div class="container">
    <div class="row">
    <div class="col">
            
<?php
    //Si on a un id dans $_SESSION, la connexion a réussi, on peut afficher le backoffice
    if(isset($_SESSION['id']) && !empty($_SESSION['id'])) : ?>
        <h1>Bonjour <?=$_SESSION['email']?></h1>
        <?php 
        $projets = $pdo->query("SELECT id, titre, description, lien_demo, url_image, lien_git
        FROM projets");
        $projets = $projets->fetchAll();
        // var_dump($projets);
        foreach ($projets as $key => $projet) :  ?>
        
            <!-- formulaire de mise à jour de projets -->
            <form action="index.php?page=UpdateProject" method="POST" class="form">
                <h2><?=$projet['titre']?></h2>
                <input type="hidden" name="idProjet" value="<?=$projet['id']?>">
                <input type="text" name="titre" placeholder="titre" value="<?=$projet['titre']?>" required>
                <input type="textarea" name="description" placeholder="description" value="<?=$projet['description']?>" required>
                <input type="text" name="url_image" placeholder="urlImage" value="<?=$projet['url_image']?>" required>
                <input type="text" name="lien_git" placeholder="lienGit"value="<?=$projet['lien_git']?>" required>
                <input type="text" name="lien_demo" placeholder="lienDémo" value="<?=$projet['lien_demo']?>" required>
                <input type="submit" value="mettre à jour">
            </form>
            
            <!-- formulaire de suppression de projets -->
            <form action="index.php?page=DeleteProject" method="POST">
                <input type="hidden" name="idProjet" value="<?=$projet['id']?>">
                <input type="submit" value="supprimer">
            </form>
      
    <?php 
    endforeach; ?>
    <!-- formulaire de mise à jour de projets -->
    <form action="index.php?page=CreateProject" method="POST">
        <h2>Créer un projet</h2>
        <input type="text" name="titre" placeholder="titre" required>
        <input type="textarea" name="description" placeholder="description" required>
        <input type="text" name="url_image" placeholder="image">
        <input type="text" name="lien_git" placeholder="lien GitHub">
        <input type="text" name="lien_demo" placeholder="lien projet">
        <input type="submit" value="créer">
    </form>
    <?php
    else: ?>
    <form action="index.php?page=Connexion" method="POST">
    <h1>connexion</h1>
        <input type="email" name="email">
        <input type="password" name="password">
        <input type="submit" value="Connexion">
    </form>

    <!-- déconnexion Back Office -->
    <a href="Logout">Déconnexion</a>
<?php 
    endif;
    
   
?>



        </div>
    </div>
</div>
  

<?php
include 'scripts.php';