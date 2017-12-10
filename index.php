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
    $dbConnector = new DB_Connector();
    $db = $dbConnector->connect();

    $user = new User();

    //$_GET = Utilities::clean($_GET);//TODO: Activate later when clean() is implemented

    include "views/includes/header.php";

    if(isset($_GET['action'])) {

        $action = $_GET['action'];
        switch ($action) {

            case Action::$Logout:

                $user->logout();
                break;

            case Action::$Login:

                include "views/login.php";
                break;

            case Action::$Signup_Do:
                include "views/signup.php";
                break;

            default:
                Utilities::goToError("Request contains invalid parameters.");
                break;
        }

    } else if(isset($_GET['page'])) {

        include "views/" . $_GET['page'] .".php";//TODO

    } else {

        include "views/home.php";

    }

    include "views/includes/footer.php";

    /*
     * Disconnecting DB once everything is included
     */
    $dbConnector->disconnect();

?>