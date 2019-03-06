<?php

if(isset($_GET['page']) && !empty($_GET['page'])) {
  if($_GET['page']=== "test"){
        $page = '404';
    }
    else {$page = $_GET['page'];}
}
else {
    $page = 'Home';
}

$page = ucfirst($page);

if(file_exists('Controllers/'.$page.'Controller.php')) {
    include('Controllers/'.$page.'Controller.php');
}
else {
    include('Controllers/404Controller.php');
}

//  si il ne trouve pas de page dans les views il finira toujours sur page 404//
