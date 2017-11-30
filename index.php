<?php

    include "views/includes/header.php";

    if(isset($_GET['page'])) {

        include "views/" . $_GET['page'];

    }else {

        include "views/login.php";//TODO

    }

    include "views/includes/footer.php";

?>