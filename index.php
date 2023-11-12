<?php
require "global.php";
// require " pdo.php";
if (exist_param("login")) {
    $view_name = "site/view/login.php";
} else if (exist_param("register")) {
    $view_name = "site/view/register.php";
} else if (exist_param("seat-show")) {
    $view_name = "site/view/seat-show.php";
} else if (exist_param("seat")) {
    $view_name = "site/view/seat.php";
} else if (exist_param("list-ticket")) {
    $view_name = "site/view/list-ticket.php";
} else if (exist_param("ticket-detail")) {
    $view_name = "site/view/ticket-deatail.php";
} else if (exist_param("payment")) {
    $view_name = "site/view/payment.php";
} else {
    $view_name = "site/view/home.php";
}

require "layout.php";
