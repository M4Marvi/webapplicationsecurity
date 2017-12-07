<?php

    include 'models/User.php';
    include 'models/enums/Response.php';
    include 'models/enums/Page.php';
    include 'models/enums/Action.php';
    include 'models/Utilities.php';

    $user = new User();

    include "views/includes/header.php";

    if(isset($_GET['page'])) {

        include "views/" . $_GET['page'].".php";

    }else if(isset($_GET['action'])) {

        $action = $_GET['action'];
        switch ($action) {

            case Action::$Logout:

                $user->logout();
                break;

            case Action::$Login:

                include "views/login.php";
                break;

            default:
                die('<div class="alert alert-danger">Request contains invalid parameters.</div>');//TODO
                break;
        }

    }else {

        include "views/home.php";

    }

    include "views/includes/footer.php";

?>