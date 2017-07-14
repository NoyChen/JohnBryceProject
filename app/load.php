<?php
session_start();

define("AUTH_REQUIRED", true);

//Create a new router
$router = new Router();

//add all available routes
$router->addRoute("/login", "login.php");
$router->addRoute("/", "home.php", AUTH_REQUIRED);
$router->addRoute("/admin", "admin.php", AUTH_REQUIRED);

//get the URI from the request
$uri = $_SERVER["REQUEST_URI"];

//shiw the correct page
$router->go($uri);