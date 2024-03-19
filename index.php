<?php
include './partials/function.php';

session_start();

$_SESSION["password"] = generatePassword($pwdLength);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Strong Password Generator</title>
</head>

<body>

    <form method="GET" action="./results.php">
        <input type="number" name="length" placeholder="Enter the length of your password to be generated">
        <button type="submit">Generate</button>
        <p><?php echo generatePassword($pwdLength) ?></p>

    </form>



</body>

</html>