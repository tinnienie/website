<?php
  session_start();
 ?>
<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
        integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="../java/accordionstyle.css">
    <link rel="stylesheet" href="../../../style.css">
    <title>Forgetel</title>
</head>

<body>
    <div class="topnav" id="myTopnav">
        <a href="../../../loggedin.php" class="active">Home</a>
        <?php
       if (isset($_SESSION['userId'])){
         echo '<a href="../../profile.php" name="profile">Profile</a>
         <a href="../../../progress.php" name="progress">Progress</a>
               <a href="../../../includes/logout.inc.php" name="logout-submit">Log Out</a>';
       }
        ?>
    </div>
    </header>

    <nav aria-label="breadcrumb">
        <ol class="breadcrumb"
            style="background:linear-gradient(to right,rgba(71, 135, 185, 0.8),rgba(94, 177, 239, 0.8))">
            <li class="breadcrumb-item"><a href="../../../loggedin.php" style="color:white;">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page"><a href="../../dementia.php"
                    style="color:white;font-size:bold;">What is dementia</a></li>

        </ol>
    </nav>


    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
        <div class="card-body">
            <ol>
                <li><a href="C1_chapter1.php">Introduction</a><br></li>
                <li><a href="C1_chapter2.php">Differentiating the Dementias</a><br></li>
                <li><a href="C1_chapter3.php">Differentiating Dementia, Depression, and Delirium</a><br></li>
                <li><a href="C1_chapter4.php">Distinguishing Between Delirium, Dementia, and Depression</a><br></li>
            </ol>
        </div>
    </div>


    <?php require "../../../footer.php" ?>