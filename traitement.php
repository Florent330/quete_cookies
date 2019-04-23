<?php

if (isset($_POST['loginName']) && !empty($_POST['loginName'])) {

    session_start();

    $_SESSION['loginName'] = $_POST['loginName'];
    header('location:index.php');

}






