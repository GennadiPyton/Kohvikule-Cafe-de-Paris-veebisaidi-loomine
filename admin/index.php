<?php

session_start();
//session_destroy();
require_once('../inc/Database.php'); //База данных

include_once("modelAdmin/modelAdmin.php");
include_once("modelAdmin/modelAdminItems.php");
include_once("modelAdmin/modelAdminCategory.php");


include_once("controllerAdmin/controllerAdmin.php");
include_once("controllerAdmin/controllerAdminItems.php");

include_once("routeAdmin/routingAdmin.php");


echo $response;