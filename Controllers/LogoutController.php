<?php

session_start();

$_SESSION = [];
session_destroy();?>
<p>Vous allez être redirigé vers la page de connexion</p>
 <?php 
header("refresh:3;url=BackOffice");