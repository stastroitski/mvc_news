<?php

ob_start();
?>
<h2>404 ошибка</h2>
<article>
    <p>
        Страница по вашему запросу не существует.
    </p>
    <img src="public/images/404.png">


<?php
$content = ob_get_clean();
include_once 'view/layout.php';