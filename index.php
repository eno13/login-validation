<?php

session_start();


$route = substr($_SERVER['REQUEST_URI'],1);
if(isset($_SESSION["user_id"])) {
    include_once('pages/header.php');
    include_once('pages/sidebar.php');
    if ($route == "") {

        include_once('main.php');

    } elseif ($route == "about") {

        include_once('pages/.php');

    } elseif ($route == "contact") {

        include_once('pages/contact.php');

    } elseif ($route == "portofolio") {

        include_once('pages/portofolio.php');

    } else {
        include_once('');
    }
    include_once('pages/footer.php');
}else {
    include_once ('pages/login.php');
}

