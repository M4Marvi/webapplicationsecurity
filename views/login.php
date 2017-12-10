<?php

$response = $user->login();
if($response == Response::$Not_Authenticated) {

    echo '<div class="alert alert-danger"> Email or Password is wrong.</div>';

}
?>
<div class="row top_margin">
    <div class="col-md-4 offset-md-4">
        <form action="index.php" method="get">
            <div class="form-group">
                <label for="email">Email address</label>
                <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" placeholder="Enter email">
                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" class="form-control" id="password" name="password" placeholder="Password">
            </div>
            <button type="submit" class="btn btn-primary" name="action" value="<?=Action::$Login;?>">Login</button>
        </form>
    </div>
</div>