<?php
$pwdLength = $_GET['length'];

function generatePassword($pwdLength)
{
    $pwd = "";
    for ($i = 0; $i < $pwdLength; $i++) {
        $pwd .= chr(rand(33, 126));
    }
    return $pwd;
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

    <form method="GET">
        <input type="number" name="length" placeholder="Enter the length of your password to be generated">
        <button type="submit">Generate</button>
        <p><?php echo generatePassword($pwdLength) ?></p>

    </form>



</body>

</html>