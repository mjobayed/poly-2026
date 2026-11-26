<?php

session_start();
if ($_SESSION['ulogin'] != true) {
    header('location:../login.php');
} else {
    session_destroy();
    session_unset();
    header('location:../login.php');
}
