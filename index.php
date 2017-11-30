<?php

    include "views/includes/header.php";

    if(isset($_GET['page'])) {

        include "views/" . $_GET['page'].".php";

    }else {

        include "views/login.php";//TODO

    }

    include "views/includes/footer.php";

?>