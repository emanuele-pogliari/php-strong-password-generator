<?php
session_start();

if (isset($_SESSION['password'])) {

    echo $_SESSION['password'];
} else {
    header('Location: ./index.php');
}
