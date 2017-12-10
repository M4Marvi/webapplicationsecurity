<?php

if(isset($_GET['action'])) {
    $response = $user->signup($db);
    if ($response != Response::$Success) {

        echo '<div class="alert alert-danger"> Something went wrong. Try again later please.</div>';

    } else {
        echo '<div class="alert alert-success"> Account created successfully. You will soon receive an email.</div>';
    }
}
?>

<div class="row top_margin">
    <div class="col-md-6 offset-md-3">
        <form action="index.php" method="get">
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" required id="email" name="email" placeholder="email@domain.com">
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" required id="password" name="password" placeholder="******">
                </div>
                <div class="form-group col-md-6">
                    <label for="cpassword">Confirm Password</label>
                    <input type="password" class="form-control" required id="cpassword" name="cpassword" placeholder="******">
                </div>
            </div>
            <button type="submit" class="btn btn-primary" name="action" value="<?=Action::$Signup_Do;?>">Create Account</button>
        </form>
    </div>
</div>