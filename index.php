<?php

    session_start();

    include 'models/enums/Response.php';
    include 'models/enums/Page.php';
    include 'models/enums/Action.php';

    include 'models/Utilities.php';
    include 'models/DB_Connector.php';

    include 'models/User.php';

    /*
     * Imports configuration variables
     */
    $configuration = Utilities::readJSON('configuration.json');

    /*
     * Makes connection with DB
     */
    $db = new DB_Connector();
    $db->connect();

    $user = new User();

    include "views/includes/header.php";

    if(isset($_GET['page'])) {

        include "views/" . $_GET['page'] .".php";//TODO

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