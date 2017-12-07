<?php

//    if(isset($_SESSION['user_name'])) {
//        echo '<div class="alert alert-success"> You are already logged in.</div>';
//        echo '<a href="index.php?action=logout"></a>';
//    }

$response = $user->login();
if($response == Response::$Not_Authenticated){

    echo '<div class="alert alert-danger"> Email or Password is wrong.</div>';

}
?>
<div class="row top_margin">
    <div class="col-md-4 offset-md-4">
        <form action="index.php?page_name=login&" method="get">
            <div class="form-group">
                <label for="email">Email address</label>
                <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" placeholder="Enter email">
                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" class="form-control" id="password" name="password" placeholder="Password">
            </div>
            <button type="submit" class="btn btn-primary" name="action" value="login">Login</button>
        </form>
    </div>
</div>