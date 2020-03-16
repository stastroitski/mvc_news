<?php
session_start();
include_once 'inc/database.php';

include_once 'model/Category.php';
include_once 'model/News.php';

include_once 'view/news.php';

include_once 'controller/Controller.php';
include_once 'route/routing.php';

if(isset($response)){
    echo $response;
}