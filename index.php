<?php
include './partials/function.php';

session_start();

if (isset($_GET['length'])) {
    $_SESSION['pass'] = generatePassword($_GET['length']);
    header('Location: ./results.php');
}
?>

<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">

<head>
    <meta charset=" UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Strong Password Generator</title>
</head>

<body>

    <div class="container">
        <div class="row mt-5">
            <h1 class="text-center mb-5">Strong Password Generator</h1>
            <div class="card py-5">
                <form method="GET">
                    <div class="mb-3 text-center d-flex gap-2 justify-content-center ">
                        <input class="w-50 py-2 form-control" type="number" name="length" min="8" max="16" placeholder="Enter the length of your password to be generated">
                        <button class="btn btn-danger" type="submit">Generate</button>
                    </div>
                </form>
            </div>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>