<?php
    session_start();

class User
{
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

    function signup() {

    }

    function logout() {
        $_SESSION['user_name'] = null;
        session_unset();
        Utilities::goToURL(Page::$Home);
    }
}