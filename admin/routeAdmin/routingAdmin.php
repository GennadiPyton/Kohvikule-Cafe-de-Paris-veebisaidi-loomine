<?php

//вычислить маршрут из адресной строки
$host = explode('?', $_SERVER['REQUEST_URI'])[0];
$num = substr_count($host, '/');
$path = explode('/', $host)[$num];

if ($path == "" OR $path == "index") {
    //Главная страница входа
    $response = controllerAdmin::formLoginSite();
} elseIf ($path == 'login') {
    //форма входа
    $response = controllerAdmin::loginAction();
} elseIf ($path == 'logout') {
    //Выход
    $response = controllerAdmin::logoutAction();
}

    //-------------------------------listItems
elseif($path=='itemsAdmin') {
    $response=controllerAdminItems::ItemsList();
}

//-----------------add items
    elseif($path=='itemsAdd') {
        $response=controllerAdminItems::itemsAddForm();

}
elseif($path == 'itemsAddResult') {
    $response = controllerAdminItems::itemsAddResult();
}
//----------------------edit items
elseif($path=='itemsEdit' && isset($_GET['id'])) {
    $response=controllerAdminItems::itemsEditForm($_GET['id']);
}
elseif($path == 'itemsEditResult' && isset($_GET['id'])) {
    $response = controllerAdminItems::itemsEditResult($_GET['id']);
}
//----------------------delete items
elseif($path=='itemsDel' && isset($_GET['id'])) {
    $response=controllerAdminItems::itemsDeleteForm($_GET['id']);
}
elseif($path == 'itemsDelResult' && isset($_GET['id'])) {
    $response = controllerAdminItems::itemsDeleteResult($_GET['id']);
}
else {
    // страница не существует
    $response = controllerAdmin::error404();
}



