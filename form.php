<?php
include __DIR__ . '/functions.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Strong Password Generator</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>


<body class="bg-primary vh-100">
    <header class="text-center container-fluid p-3">
        <h1 class="text-white">Strong Password Generator</h1>
        <h2 class="text-white">Genera una password sicura</h2>
    </header>

    <main class="bg-dark container-fluid h-100 pt-3 ">
        
        <div class="card bg-secondary text-center text-white w-50 mx-auto m-4">
            <div class="card-body">
                <form method="get">
                        <label for="lunghezza" class="form-label">Lunghezza Password:</label>
                        <input type="number" class="form-control" id="lunghezza" name="lunghezza" >
                    <button type="submit" class="btn btn-dark mt-2">Genera Password</button>
                </form>
                <h2 class="mt-3">Password</h2>
                <p>Ecco la tua password:  <?php echo $password ?></p>
            </div>
        </div>
    </main>
</body>

</html>