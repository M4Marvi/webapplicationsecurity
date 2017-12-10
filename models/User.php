<?php

class User {
    function login() {
        if(isset($_GET['action'])) {
            if($_GET['email'] == "me@haseebiqbal.com" && $_GET['password'] = "123456") {
                $_SESSION['user_name'] = $_GET['email'];
                Utilities::goToURL(Page::$Home);
            }else {
                return Response::$Not_Authenticated;
            }
        }else {
            return Response::$No_Response;
        }
    }

    function signup($db) {

        $sql = "INSERT INTO user (`email`, `password`) VALUES ('$_GET[email]', '$_GET[password]')";

        if($db->query($sql) === true) {
            return Response::$Success;
        } else {;
            Utilities::goToError($db->error);
        }

    }

    function logout() {
        $_SESSION['user_name'] = null;
        session_unset();
        Utilities::goToURL(Page::$Home);
    }
}