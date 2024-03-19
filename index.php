<?php
include './partials/function.php';

session_start();

if (isset($_GET['length'])) {
    $_SESSION['pass'] = generatePassword($_GET['length']);
    header('Location: ./results.php');
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Strong Password Generator</title>
</head>

<body>

    <div class="container">
        <form method="GET" action="./index.php">
            <input type="number" name="length" placeholder="Enter the length of your password to be generated">
            <button type="submit">Generate</button>
        </form>

    </div>



</body>

</html>