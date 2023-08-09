<?php
  session_start();
 ?>
<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
        integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="../styleloggedin.css">
    <title>Forgetel</title>
</head>

<body>
    <div class="topnav" id="myTopnav">
        <a href="../loggedin.php" class="active">Home</a>
        <?php
       if (isset($_SESSION['userId'])){
         echo '<a href="profile.php" name="profile">Profile</a>
         <a href="../progress.php" name="progress">Progress</a>
               <a href="../includes/logout.inc.php" name="logout-submit">Log Out</a>';
       }
        ?>
    </div>
    </header>

    <nav aria-label="breadcrumb">
        <ol class="breadcrumb"
            style="background:linear-gradient(to right,rgba(71, 135, 185, 0.8),rgba(94, 177, 239, 0.8))">
            <li class="breadcrumb-item"><a href="../loggedin.php" style="color:white;">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page" style="color:white;">Chapters</li>

        </ol>
    </nav>

    <div class="java-container">

        <div class="card">
            <img src="img1.png" class="card-img-top" alt="...">
            <div class="card-body">
                <p class="card-text">What is dementia</p>
            </div>
            <a href="Dementia/C1/C1_formation.php" class="btn btn-primary">Chapter</a><br>
            <a href="quiz.php" class="btn btn-primary">Quiz</a>
        </div>

        <div class="card">
            <img src="img2.png" class="card-img-top" alt="...">
            <div class="card-body">
                <p class="card-text">Tips for communicating with a person with dementia</p>
            </div>
            <a href="Dementia/C2/C2_formation.php" class="btn btn-primary">Chapter</a><br>
            <a href="quiz2.php" class="btn btn-primary">Quiz</a>
        </div>

        <div class="card">
            <img src="img3.png" class="card-img-top" alt="...">
            <div class="card-body">
                <p class="card-text">Dealing with the troubling behavior of a person with dementia</p>
            </div>
            <a href="Dementia/C3/C3_formation.php" class="btn btn-primary">Chapter</a><br>
            <a href="quiz3.php" class="btn btn-primary">Quiz</a>
        </div>

    </div>