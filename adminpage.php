<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Admin Page</title>
    <link rel="icon" type="image/x-icon" href="images/favicon.ico" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
</head>

<body class="m-2 font-monospace">
    <!-- navbar component ---------------------------------------------------------------------------------- -->
    <nav class="p-2 navbar navbar-expand-lg bg-secondary-subtle d-flex justify-content-between rounded">
        <div>
            <form action="">
                <div class="admin-login">
                    <input type="submit" class="nav-link fs-5" aria-disabled="false" name="Home"
                        value="Student Feedback" id="Home" />
                </div>
            </form>
        </div>
        <div>
            <ul class="navbar-nav d-flex flex-row">
                <li class="nav-item mx-3">
                    <a class="nav-link disabled fs-5" aria-disabled="false" href="/html/index.html">Home</a>
                </li>
                <li class="nav-item mx-3">
                    <a class="nav-link disabled fs-5" aria-disabled="false" href="/html/aboutus.html">About us</a>
                </li>
            </ul>
        </div>
        <div>
            <ul class="navbar-nav d-flex flex-row">
                <li class="nav-item mx-3">
                    <form action="php/home.php">
                        <div class="admin-login">
                            <input type="submit" class="nav-link fs-5" aria-disabled="false" name="Log Out"
                                value="Logout" id="Log Out" />
                        </div>
                    </form>
                </li>
            </ul>
        </div>
    </nav>
    <hr />
    <div>
        <div class="d-flex my-3 justify-content-around mx-auto" style="width: 80vw">
            <form action="php/home.php">
                <div class="admin-login">
                    <input type="submit" style="width: 150px" class="btn btn-primary" name="back" value="Back" id="back"
                        disabled />
                </div>
            </form>
            <form action="php/altogether.php">
                <div class="admin-login">
                    <input type="submit" class="btn btn-primary" style="width: 150px" name="alltogether"
                        value="All together" id="alltogether" />
                </div>
            </form>
        </div>
    </div>

    <hr />
    <div class="container mx-auto my-3 bg-dark-subtle p-4 rounded">
        <form action="php/subject.php">
            <legend class="fw-bold">Segregate Based on Subject</legend>
            <div class="mb-3">
                <label for="branch" class="form-label">Select Branch</label>
                <select id="branch" class="form-select">
                    <option value="CSE">CSE</option>
                    <option value="ISE">ISE</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="sem" class="form-label">Select Semester</label>
                <select id="sem" class="form-select">
                    <option value="1st">Sem 1</option>
                    <option value="2nd">Sem 2</option>
                    <option value="3rd">Sem 3</option>
                    <option value="4th">Sem 4</option>
                    <option value="5th">Sem 5</option>
                    <option value="6th">Sem 6</option>
                    <option value="7th">Sem 7</option>
                    <option value="8th">Sem 8</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="subject" class="form-label">Select Subject</label>
                <select id="subject" class="form-select">
                    <option value="DBMS">Database Managemet System</option>
                    <option value="CO/CA">
                        Computer Organization / Computer Architecture
                    </option>
                    <option value="DAA">Design And Analysis of Algorithms</option>
                    <option value="JAVA">Advanced Java</option>
                </select>
            </div>
            <div class="admin-login">
                <input type="submit" class="btn btn-primary" name="submit" value="Submit" id="submit" />
            </div>
        </form>
    </div>
    <hr />
    <div class="container mx-auto my-3 bg-dark-subtle p-4 rounded">
        <form action="php/USN.php">
            <legend class="fw-bold">Segregate Based on USN</legend>
            <div class="mb-3">
                <label for="USN" class="form-label">Usn</label>
                <input type="text" id="USN" class="form-control" placeholder="Enter last three digits of USN only" />
            </div>
            <div class="mb-3">
                <label for="branch" class="form-label">Select Branch</label>
                <select id="branch" class="form-select">
                    <option value="CSE">CSE</option>
                    <option value="ISE">ISE</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="sem" class="form-label">Select Semester</label>
                <select id="sem" class="form-select">
                    <option value="1st">Sem 1</option>
                    <option value="2nd">Sem 2</option>
                    <option value="3rd">Sem 3</option>
                    <option value="4th">Sem 4</option>
                    <option value="5th">Sem 5</option>
                    <option value="6th">Sem 6</option>
                    <option value="7th">Sem 7</option>
                    <option value="8th">Sem 8</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="section" class="form-label">Section</label>
                <select id="section" class="form-select">
                    <option value="A">Sec A</option>
                    <option value="B">Sec B</option>
                    <option value="C">Sec C</option>
                </select>
            </div>
            <div class="admin-login">
                <input type="submit" class="btn btn-primary" name="submit" value="Submit" id="submit" />
            </div>
        </form>
    </div>
    <hr />
    <div class="container mx-auto my-3 bg-dark-subtle p-4 rounded">
        <form action="section.php">
            <legend class="fw-bold">Segregate Based on Section</legend>
            <div class="mb-3">
                <label for="branch" class="form-label">Select Branch</label>
                <select id="branch" class="form-select">
                    <option value="CSE">CSE</option>
                    <option value="ISE">ISE</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="sem" class="form-label">Select Semester</label>
                <select id="sem" class="form-select">
                    <option value="1st">Sem 1</option>
                    <option value="2nd">Sem 2</option>
                    <option value="3rd">Sem 3</option>
                    <option value="4th">Sem 4</option>
                    <option value="5th">Sem 5</option>
                    <option value="6th">Sem 6</option>
                    <option value="7th">Sem 7</option>
                    <option value="8th">Sem 8</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="section" class="form-label">Section</label>
                <select id="section" class="form-select">
                    <option value="A">Sec A</option>
                    <option value="B">Sec B</option>
                    <option value="C">Sec C</option>
                </select>
            </div>
            <div class="admin-login">
                <input type="submit" class="btn btn-primary" name="submit" value="Submit" id="submit" />
            </div>
        </form>
    </div>

    <br />
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