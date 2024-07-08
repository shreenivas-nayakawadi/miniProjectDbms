<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>About Us</title>
    <link rel="icon" type="image/x-icon" href="images/favicon.ico">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
    <style>
    @media only screen and (max-width: 500px) {
        .container {
            flex-direction: column;
        }
    }
    </style>
</head>

<body class="m-2">
    <!-- navbar component ---------------------------------------------------------------------------------- -->
    <nav class="navbar navbar-expand-lg bg-secondary-subtle d-flex justify-content-between p-2 rounded">
        <div>
            <form action="php/home.php">
                <form action="php/home.php">
                    <div class="admin-login">
                        <input type="submit" class="nav-link fs-5" aria-disabled="false" name="Home"
                            value="Student Feedback" id="Home" />
                    </div>
                </form>
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
                <li class=" nav-item mx-3">
                    <a class="nav-link disabled fs-5" aria-disabled="true" href="#">About us</a>
                </li>
            </ul>
        </div>
        <div>
            <ul class="navbar-nav d-flex flex-row">
                <li class="nav-item mx-3">
                    <form action="php/admin.php">
                        <div class="admin-login">
                            <input type="submit" class="nav-link fs-5" aria-disabled="false" name="Admin" value="Admin"
                                id="Admin" />
                        </div>
                    </form>
                </li>
            </ul>
        </div>
    </nav>
    <div class="container d-flex justify-content-evenly items-center h-100% p2 g-col-6 my-5">
        <div class="card mb-3" style="width: 18rem">
            <!-- <img src="..." class="card-img-top" alt="..."> -->
            <div class="card-body">
                <h5 class="card-title">Shreenivas Nayakawadi</h5>
                <p class="card-text">
                    DAYANANDA SAGAR COLLEGE OF ENGINEERING<br />INFORMATION SCIENCE AND
                    ENGINEERING<br />1DS22IS143<br />C - Sec <br />
                    DBMS-Batch-C1
                </p>
                <a href="mailto: 1ds22is143.dsce.edu.in" class="btn btn-primary">Contact</a>
            </div>
        </div>
        <div class="card mb-3" style="width: 18rem">
            <!-- <img src="..." class="card-img-top" alt="..."> -->
            <div class="card-body">
                <h5 class="card-title">Prashant S N</h5>
                <p class="card-text">
                    DAYANANDA SAGAR COLLEGE OF ENGINEERING<br />INFORMATION SCIENCE AND
                    ENGINEERING<br />1DS23IS415<br />C - Sec <br />
                    DBMS-Batch-C1
                </p>
                <a href="mailto: 1ds23is415.dsce.edu.in" class="btn btn-primary">Contact</a>
            </div>
        </div>
    </div>
    <!-- navbar component ---------------------------------------------------------------------------------- -->
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