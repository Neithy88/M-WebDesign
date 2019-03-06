<?php

require('Models/Home.php');

?>


<?php if(isset($_POST['email']) && isset($_POST['password']) ) {

$email = $_POST['email'];
$pass = $_POST['password'];

//on récupère les infos de l'user correspondant à l'email
$query = $pdo->prepare("SELECT id,email,password FROM users WHERE email=?");
$query->execute([$email]);

$user = $query->fetch();

if(isset($user))  {
    //On compare le mot de passe en clair dans $_POST avec son hash en BDD avec password_verify
    if(password_verify($pass,$user['password'])) {
        //Si tout est OK, on peut stocker l'id dans une variable de session
        $_SESSION['id'] = $user['id'];
        $_SESSION['email'] = $user['email'];
        header("refresh:3;url=Backoffice");?>
        <p>Vous allez être redirigé vers le Back Office</p>
        <!-- <a href="Backoffice"><button type="submit">envoyé</button></a> -->
       <?php 
       
   
    }
    else {
        echo "echec de la connexion";
    }
}
else {
    echo "utilisateur inconnu";
}
}
require('Views/LoginView.php');