<?php
session_start();

if (isset($_SESSION['pass'])) {

    echo " <p> {$_SESSION['pass']}</p>";
};

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
</body>

</html>