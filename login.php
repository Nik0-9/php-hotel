<?php
include __DIR__ . "/./Controllers/auth.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
        integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link grity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <title>Hotels PHP</title>
</head>

<body>
    <main class="container py-4 my-4">
        <?php
        if (!empty($_GET['error'])) {
            echo '<div class="alert alert-danger text-center w-50 mx-auto">
                    Credenziali sbagliate. Email o password non trovati
                </div>';
        }
        ?>
        <div class="d-flex justify-content-center align-items-center mycard mt-4">
            <form id="loginform" action="login.php" method="POST">
                <img class="mb-4" src="./images/logo.png" alt="logo">
                <h1 class=" mb-3 text-white">Please sign in</h1>

                <div class="form-floating mb-4">
                    <input type="email" class="form-control" id="email" placeholder="name@example.com" name="email">
                    <label for="email">Email address</label>
                </div>
                <div class="form-floating mb-4">
                    <input type="password" class="form-control" id="password" placeholder="Password" name="password">
                    <label for="password">Password</label>
                    <button class="btn btn-primary w-100 py-2 mt-3" type="submit">Sign in</button>
                </div>

            </form>
        </div>
    </main>
</body>

</html>