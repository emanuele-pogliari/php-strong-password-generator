<?php
session_start();

if (isset($_SESSION['pass'])) {

    echo " <p> {$_SESSION['pass']}</p>";
};
