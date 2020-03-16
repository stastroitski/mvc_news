<?php

$host = explode('?', $_SERVER['REQUEST_URI'])[0];
$n = substr_count($host, '/');
$path = explode('/', $host)[$n];

if($path == '' || $path == 'index.php' || $path == 'index'){
    $response = Controller::startSite();
}

elseif($path == 'all'){
    $response = Controller::AllNews();
}

elseif($path == 'category' and isset($_GET['id'])){
    $response = Controller::NewsByCatID($_GET['id']);
}
elseif($path == 'news' and isset($_GET['id'])){
    $response = Controller::NewsByID($_GET['id']);
}

else{
    $response = Controller::error404();
}


