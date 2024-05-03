<?php
include __DIR__ . "/./Controllers/auth.php";

include __DIR__ . "/Views/header.php";

?>

<main>
<div class="d-flex justify-content-center align-items-center mycard">
        <form id="loginform" action="login.php" method="POST" >
            <img class="mb-4" src="./images/logo.png" alt="logo" >
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
