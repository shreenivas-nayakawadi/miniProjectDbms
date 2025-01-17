<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Student Feedback Management System</title>
    <link rel="icon" type="image/png" href="images/favicon.ico">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
    <style>
    .size {
        width: 200px;
    }



    wi .box:hover {
        cursor: pointer;
        background-color: #EEF7FF;
        box-shadow: 0px 3px 24px 0px rgba(0, 0, 0, 1);
        -webkit-box-shadow: 0px 3px 24px 0px rgba(0, 0, 0, 1);
        -moz-box-shadow: 0px 3px 24px 0px rgba(0, 0, 0, 1);
        text-color: black;
    }

    @media only screen and (max-width: 600px) {
        .responsive {
            flex-direction: column;
        }
    }

    @media only screen and (max-width: 500px) {
        .size {
            width: 100px;
        }
    }
    </style>
</head>

<body class="m-1">
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
                    <a class="nav-link disabled fs-5" aria-disabled="true" href="#">Home</a>
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
            <ul class=" navbar-nav d-flex flex-row">
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
    <!-- navbar component ---------------------------------------------------------------------------------- -->
    <!-- form component ---------------------------------------------------------------------------------- -->
    <div class="container mx-auto my-3 bg-dark-subtle p-4 rounded">
        <h3 class="text-center my-2">
            Fill this student feedback form so that we can make our teaching better.
        </h3>
        <h3 class="text-center my-2">Student Details And Subject Details</h3>
        <h6 class="text-center my-2">NOTE: please fill the data correctly as per our requirement</h6>
        <form action="php/feedback.php" method="post">
            <div class="student-details">
                <div id="USN">
                    <label class="fw-bold " for="USN" ">USN:</label>
               <input type=" TEXT" placeholder=" last 3 digits of USN only" name="USN"
                        style=" margin-left: 116px; padding: 0px;" class="mt-2 size" />
                </div>
                <label class="fw-bold" for="year">Academic Year:</label>
                <select name="year" id="year" style="margin-left: 38px;" class="mt-2">
                    <option value="2024">2024</option>
                    <option value="2023">2023</option>
                    <option value="2022">2022</option>
                    <option value="2021">2021</option>
                </select>
                <br />
                <label class="fw-bold" for="sem">Semester:</label>
                <select name="sem" id="sem" style="margin-left: 78px;" class="mt-2">
                    <option value="1">Sem 1</option>
                    <option value="2">Sem 2</option>
                    <option value="3">Sem 3</option>
                    <option value="4">Sem 4</option>
                    <option value="5">Sem 5</option>
                    <option value="6">Sem 6</option>
                    <option value="7">Sem 7</option>
                    <option value="8">Sem 8</option>
                </select>
                <br />
                <label class="fw-bold" for="date">Date of Feedback:</label>
                <input type="date" id="date" name="date" style="margin-left: 17px;" class="mt-2 size" />
                <br />
                <label class="fw-bold" for="branch">Branch:</label>
                <select name="branch" id="branch" style="margin-left: 96px;" class="mt-2">
                    <option value="CSE">CSE</option>
                    <option value="ISE">ISE</option>
                </select>
                <br />
                <label class="fw-bold" for="section">Section:</label>
                <select name="section" id="section" style="margin-left: 92px;" class="mt-2">
                    <option value="A">Sec A</option>
                    <option value="B">Sec B</option>
                    <option value="C">Sec C</option>
                </select>
                <br />
                <label class="fw-bold" for="subject">Subject:</label>
                <select name="subject" id="subject" style="margin-left: 92px;" class=" size my-2">
                    <option value="DBMS">Database Managemet System</option>
                    <option value="CO/CA">Computer Organization / Computer Architecture</option>
                    <option value="DAA">Design And Analysis of Algorithms</option>
                    <option value="JAVA">Advanced Java</option>
                </select>
                <br />
            </div>
    </div>
    </div>
    <div class="body2 container mx-auto my-3 bg-dark-subtle p-4 rounded">
        <div class="student-feedback fw-normal medium">
            <!-- Question 1 -->
            <h4 class="fw-bold">
                1) Has the Teacher covered entire Syllabus as prescribed by
                University?
            </h4>
            <div class="container responsive  d-flex justify-content-around">
                <label class="my-2  box border border-white border-2 rounded p-1 ">
                    <input type="radio" id="ques-1-5" class="sucess" name="ques1" value="5" />
                    5- Excellent
                </label>
                <label class="my-2  box  border border-white border-2 rounded p-1 ">
                    <input type="radio" id="ques-1-4" class="primary" name="ques1" value="4" />
                    4- Very Good
                </label>
                <label class="my-2  box  border border-white border-2 rounded p-1 ">
                    <input type="radio" id="ques-1-3" class="info" class="warning" name="ques1" value="3" />
                    3- Good
                </label>
                <label class="my-2  box  border border-white border-2 rounded p-1 ">
                    <input type="radio" id="ques-1-2" class="warning" name="ques1" value="2" />
                    2- Average
                </label>
                <label class="my-2  box  border border-white border-2 rounded p-1 ">
                    <input type="radio" id="ques-1-1" class="danger" name="ques1" value="1" />
                    1- Below Average
                </label>
            </div>
            <br /><br />
            <!-- Question 2 -->
            <h4 class="fw-bold">2) Effectiveness of Teacher in terms of:</h4>
            <!-- Question 2-i -->
            <h4 class="fw-bold">i. Technical Content</h4>
            <div class="container responsive  d-flex justify-content-around">
                <label class="my-2  box  border border-white border-2 rounded p-1">
                    <input type="radio" id="ques-2i-5" name="ques-2i" value="5" />
                    5- Excellent
                </label>
                <label class="my-2  box  border border-white border-2 rounded p-1">
                    <input type="radio" id="ques-2i-4" name="ques-2i" value="4" />
                    4- Very Good
                </label>
                <label class="my-2  box  border border-white border-2 rounded p-1">
                    <input type="radio" id="ques-2i-3" name="ques-2i" value="3" />
                    3- Good
                </label>
                <label class="my-2  box  border border-white border-2 rounded p-1">
                    <input type="radio" id="ques-2i-2" name="ques-2i" value="2" />
                    2- Average
                </label>
                <label class="my-2  box  border border-white border-2 rounded p-1">
                    <input type="radio" id="ques-2i-1" name="ques-2i" value="1" />
                    1- Below Average
                </label>
            </div>
            <br /><br />
            <!-- Question 2-ii -->
            <h4 class="fw-bold">ii. Communication Skills</h4>
            <div class="container responsive  d-flex justify-content-around">
                <label class="my-2  box  border border-white border-2 rounded p-1">
                    <input type="radio" id="ques-2ii-5" name="ques-2ii" value="5" />
                    5- Excellent
                </label>
                <label class="my-2  box  border border-white border-2 rounded p-1">
                    <input type="radio" id="ques-2ii-4" name="ques-2ii" value="4" />
                    4- Very Good
                </label>
                <label class="my-2  box  border border-white border-2 rounded p-1">
                    <input type="radio" id="ques-2ii-3" name="ques-2ii" value="3" />
                    3- Good
                </label>
                <label class="my-2  box  border border-white border-2 rounded p-1">
                    <input type="radio" id="ques-2ii-2" name="ques-2ii" value="2" />
                    2- Average
                </label>
                <label class="my-2  box  border border-white border-2 rounded p-1">
                    <input type="radio" id="ques-2ii-1" name="ques-2ii" value="1" />
                    1- Below Average
                </label>
            </div>
            <br /><br />
            <!-- Question 2-iii -->
            <h4 class="fw-bold">
                iii. Availability beyond normal classes and co-operation to solve
                individual problems
            </h4>
            <div class="container responsive  d-flex justify-content-around">
                <label class="my-2  box  border border-white border-2 rounded p-1">
                    <input type="radio" id="ques-2iii-5" name="ques-2iii" value="5" />
                    5- Excellent
                </label>
                <label class="my-2  box  border border-white border-2 rounded p-1">
                    <input type="radio" id="ques-2iii-4" name="ques-2iii" value="4" />
                    4- Very Good
                </label>
                <label class="my-2  box  border border-white border-2 rounded p-1">
                    <input type="radio" id="ques-2iii-3" name="ques-2iii" value="3" />
                    3- Good
                </label>
                <label class="my-2  box  border border-white border-2 rounded p-1">
                    <input type="radio" id="ques-2iii-2" name="ques-2iii" value="2" />
                    2- Average
                </label>
                <label class="my-2  box  border border-white border-2 rounded p-1">
                    <input type="radio" id="ques-2iii-1" name="ques-2iii" value="1" />
                    1- Below Average
                </label>
            </div>
            <br /><br />
            <!-- Question 2-iv -->
            <h4 class="fw-bold">iv. Pace on which contents were covered</h4>
            <div class="container responsive  d-flex justify-content-around">
                <label class="my-2  box  border border-white border-2 rounded p-1">
                    <input type="radio" id="ques-2iv-5" name="ques-2iv" value="5" />
                    5- Excellent
                </label>
                <label class="my-2  box  border border-white border-2 rounded p-1">
                    <input type="radio" id="ques-2iv-4" name="ques-2iv" value="4" />
                    4- Very Good
                </label>
                <label class="my-2  box  border border-white border-2 rounded p-1">
                    <input type="radio" id="ques-2iv-3" name="ques-2iv" value="3" />
                    3- Good
                </label>
                <label class="my-2  box  border border-white border-2 rounded p-1">
                    <input type="radio" id="ques-2iv-2" name="ques-2iv" value="2" />
                    2- Average
                </label>
                <label class="my-2  box  border border-white border-2 rounded p-1">
                    <input type="radio" id="ques-2iv-1" name="ques-2iv" value="1" />
                    1- Below Average
                </label>
            </div>
            <br /><br />
            <!-- Question 2-v -->
            <h4 class="fw-bold">v. Overall effectiveness</h4>
            <div class="container responsive  d-flex justify-content-around">
                <label class="my-2  box  border border-white border-2 rounded p-1">
                    <input type="radio" id="ques-2v-5" name="ques-2v" value="5" />
                    5- Excellent
                </label>
                <label class="my-2  box  border border-white border-2 rounded p-1">
                    <input type="radio" id="ques-2v-4" name="ques-2v" value="4" />
                    4- Very Good
                </label>
                <label class="my-2  box  border border-white border-2 rounded p-1">
                    <input type="radio" id="ques-2v-3" name="ques-2v" value="3" />
                    3- Good
                </label>
                <label class="my-2  box  border border-white border-2 rounded p-1">
                    <input type="radio" id="ques-2v-2" name="ques-2v" value="2" />
                    2- Average
                </label>
                <label class="my-2  box  border border-white border-2 rounded p-1">
                    <input type="radio" id="ques-2v-1" name="ques-2v" value="1" />
                    1- Below Average
                </label>
            </div>
            <br /><br />
            <!-- Question 3 -->
            <h4 class="fw-bold">3) How do you rate the contents of the curricular?</h4>
            <div class="container responsive  d-flex justify-content-around">
                <label class="my-2  box  border border-white border-2 rounded p-1">
                    <input type="radio" id="ques3-5" name="ques3" value="5" />
                    5- Excellent
                </label>
                <label class="my-2  box  border border-white border-2 rounded p-1">
                    <input type="radio" id="ques3-4" name="ques3" value="4" />
                    4- Very Good
                </label>
                <label class="my-2  box  border border-white border-2 rounded p-1">
                    <input type="radio" id="ques3-3" name="ques3" value="3" />
                    3- Good
                </label>
                <label class="my-2  box  border border-white border-2 rounded p-1">
                    <input type="radio" id="ques3-2" name="ques3" value="2" />
                    2- Average
                </label>
                <label class="my-2  box  border border-white border-2 rounded p-1">
                    <input type="radio" id="ques3-1" name="ques3" value="1" />
                    1- Below Average
                </label>
            </div>
            <br /><br />
            <!-- Question 4 -->
            <h4 class="fw-bold">4) How do you rate lab experiments, if applicable?</h4>
            <div class="container responsive  d-flex justify-content-around">
                <label class="my-2  box   border border-white border-2 rounded p-1">
                    <input type="radio" id="ques4-5" name="ques4" value="5" />
                    5- Excellent
                </label>
                <label class="my-2  box  border border-white border-2 rounded p-1">
                    <input type="radio" id="ques4-4" name="ques4" value="4" />
                    4- Very Good
                </label>
                <label class="my-2  box  border border-white border-2 rounded p-1">
                    <input type="radio" id="ques4-3" name="ques4" value="3" />
                    3- Good
                </label>
                <label class="my-2  box  border border-white border-2 rounded p-1">
                    <input type="radio" id="ques4-2" name="ques4" value="2" />
                    2- Average
                </label>
                <label class="my-2  box  border border-white border-2 rounded p-1">
                    <input type="radio" class="border border-white border-2 rounded" id="ques4-1" name="ques4"
                        value="1" />
                    1- Below Average
                </label>
            </div>
            <br /><br />
            <!-- Question 5 -->
            <h4 class="fw-bold">5) Any Remarks</h4>
            <textarea id="" remark" name="remarks" rows="5" cols="100"></textarea>
            <br /><br />
        </div>
    </div>
    </div>
    <div class="submit mb-5 ms-5 container">
        <input type="submit" class="btn btn-primary" name="submit" value="Submit" id="submit" />
    </div>
    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>
<!-- footer component ---------------------------------------------------------------------------------- -->
<footer class=" m-1 bg-secondary-subtle fs-5 text-center fixed-bottom">
    @ copyright Shreenivas And Prashant 2024
</footer>
<!-- footer component ---------------------------------------------------------------------------------- -->

</html>

<?php
 ?>