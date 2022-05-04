<?php

//вычислить маршрут из адресной строки
$host = explode('?', $_SERVER['REQUEST_URI'])[0];
$num = substr_count($host, '/');
$path = explode('/', $host)[$num];


if ($path == '' OR $path == 'index' OR $path == 'index.php') {
    $response = Controller::StartSite();
} elseif ($path == 'all') {
    $response = Controller::AllItems();
} elseif ($path == 'category' and isset($_GET['id'])) {
    $response = Controller::ItemsByCatID($_GET['id']);
} elseif ($path == 'items' and isset($_GET['id'])) {
    $response = Controller::ItemsByID($_GET['id']);
}elseif ($path == 'search' and isset($_GET['otsi'])) {
    $response = Controller::SearchItems($_GET['otsi']);
} elseif ($path == 'insertcomment' and isset($_GET['comment'], $_GET['id'])) {
    $response = Controller::InsertComment($_GET['comment'], $_GET['id']);
}elseif ($path == 'info' ) {
    $response = Controller::info();
}
//error page
else {
    $response = Controller::error404();
}
?>