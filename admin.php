<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Admin Login</title>
    <link rel="icon" type="image/x-icon" href="images/favicon.ico">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
</head>

<body class="m-2">
    <!-- navbar component ---------------------------------------------------------------------------------- -->
    <nav class="navbar navbar-expand-lg bg-secondary-subtle d-flex justify-content-between p-2 rounded">
        <div>
            <form action="php/home.php">
                <div class="admin-login">
                    <input type="submit" class="nav-link fs-5" aria-disabled="false" name="Home"
                        value="Student Feedback" id="Home" />
                </div>
            </form>
        </div>
        <div>
            <ul class="navbar-nav d-flex flex-row">
                <li class="nav-item mx-3">
                    <form action="php/home.php">
                        <div class="admin-login">
                            <input type="submit" class="nav-link fs-5" aria-disabled="false" name="Home" value="Home"
                                id="Home" />
                        </div>
                    </form>
                </li>
                <li class="nav-item mx-3">
                    <form action="php/aboutus.php">
                        <div class="admin-login">
                            <input type="submit" class="nav-link fs-5" aria-disabled="false" name="aboutus"
                                value="About us" id="aboutus" />
                        </div>
                    </form>
                </li>
            </ul>
        </div>
        <div>
            <ul class="navbar-nav d-flex flex-row">
                <li class="nav-item mx-3">
                    <a class="nav-link disabled fs-5" aria-disabled="true" href="#">Admin</a>
                </li>
            </ul>
        </div>
    </nav>
    <!-- navbar component ---------------------------------------------------------------------------------- -->
    <!-- login component ---------------------------------------------------------------------------------- -->
    <form action="php/checklogin.php" method="POST" class="container bg-secondary-subtle my-5 p-5 rounded">
        <div class="mb-3">
            <label for="email" class="form-label fw-bold">Email address</label>
            <input type="email" placeholder="email" class="form-control" id="email" name="email"
                aria-describedby="emailHelp" />
        </div>
        <div class="mb-3">
            <label for="password" class="form-label fw-bold">Password</label>
            <input type="password" class="form-control" id="password" placeholder="password" name="password" />
        </div>
        <div class="submit-form ">
            <input type="submit" class="btn btn-primary pill fw-bold" id=" login" name="login" value="Login" />
        </div>
    </form>
    <!-- login component ---------------------------------------------------------------------------------- -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>
<!-- footer component ---------------------------------------------------------------------------------- -->
<footer class="bg-secondary-subtle fs-5 text-center fixed-bottom">
    @ copyright Shreenivas Prashant 2024
</footer>
<!-- footer component ---------------------------------------------------------------------------------- -->

</html>

<?php 
?>