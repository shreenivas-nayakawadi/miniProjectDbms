<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>USN</title>
    <link rel="icon" type="image/x-icon" href="images/favicon.ico">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
</head>

<body class="m-2">
    <!-- navbar component ---------------------------------------------------------------------------------- -->
    <nav class="navbar navbar-expand-lg bg-secondary-subtle d-flex justify-content-between p-2 rounded">
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
    <!-- navbar component ---------------------------------------------------------------------------------- -->
    <hr />
    <div>
        <div class="d-flex my-3 justify-content-around mx-auto" style="width: 80vw">
            <form action="php/adminpage.php">
                <div class="admin-login">
                    <input type="submit" style="width: 150px" class="btn btn-primary" name="back" value="Back"
                        id="back" />
                </div>
            </form>
            <form action="php/home.php">
                <div class="admin-login">
                    <input type="submit" class="btn btn-primary" style="width: 150px" name="alltogether"
                        value="All together" id="alltogether" disabled />
                </div>
            </form>
        </div>
    </div>

    <hr />
    <!-- table component ---------------------------------------------------------------------------------- -->
    <?php 
    session_start();
    require 'php/config.php';

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
      // Get the values from the form
      $usn = $_POST['USN'];
      $branch = $_POST['branch'];
      $sem = $_POST['sem'];
      $section = $_POST['section'];

      // Query the database
      $query = "SELECT * FROM feedback WHERE USN = '$usn' AND branch='$branch' AND sem='$sem' AND section='$section'";
      $result = mysqli_query($con, $query);

      echo "<table border='1' class='table table-striped-columns my-3' id='students-table'>
              <tr>
                  <th>USN</th>
                  <th>Year</th>
                  <th>Sem</th>
                  <th>Date</th>
                  <th>Branch</th>
                  <th>Section</th>
                  <th>Subject</th>
                  <th>Ques1</th>
                  <th>Ques-2i</th>
                  <th>Ques-2ii</th>
                  <th>Ques-2iii</th>
                  <th>Ques-2iv</th>
                  <th>Ques-2v</th>
                  <th>Ques3</th>
                  <th>Ques4</th>
                  <th>Remarks</th>
              </tr>";

      while($row = mysqli_fetch_array($result)) {
        echo "<tr>";
        echo "<td>" . $row['USN'] . "</td>";
        echo "<td>" . $row['year'] . "</td>";
        echo "<td>" . $row['sem'] . "</td>";
        echo "<td>" . $row['date'] . "</td>";
        echo "<td>" . $row['branch'] . "</td>";
        echo "<td>" . $row['section'] . "</td>";
        echo "<td>" . $row['subject'] . "</td>";
        echo "<td>" . $row['ques1'] . "</td>";
        echo "<td>" . $row['ques2i'] . "</td>";
        echo "<td>" . $row['ques2ii'] . "</td>";
        echo "<td>" . $row['ques2iii'] . "</td>";
        echo "<td>" . $row['ques2iv'] . "</td>";
        echo "<td>" . $row['ques2v'] . "</td>";
        echo "<td>" . $row['ques3'] . "</td>";
        echo "<td>" . $row['ques4'] . "</td>";
        echo "<td>" . $row['remarks'] . "</td>";
        echo "</tr>";
      }

      echo "</table>";   
      echo "<br>";                                                                    
      echo "<br>";                                                                 
    }
  ?>
    <!-- table component ---------------------------------------------------------------------------------- -->
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