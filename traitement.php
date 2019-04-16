<?php

if (isset($_POST['loginName']) && !empty($_POST['loginName'])) {

    session_start();

    $_SESSION['loginName'] = $_POST['loginName'];
    header('location:index.php');

}




//else {

 // header('location:login.php');

//}
/* if (empty($_SESSION['loginName']) || !isset($_SESSION['loginName'])){

    header('location:login.php');
}




if (isset($_POST['loginName']) && !empty($_POST['loginName'])) {

    session_start();

    $_SESSION['loginName'] = $_POST['loginName'];

    header('location:index.php');




