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

    <style>
    .progress-bar {
        position: fixed;
        width: 100%;
        height: 15px;
        background-color: white;
    }

    .filled {
        width: 0%;
        height: 100%;
        background-image: linear-gradient(to right, red, orange);
    }
    </style>
    <script src="" defer></script>
    <title>Forgetel</title>
</head>

<body>
    <div class="progress-bar">
        <div class="filled"></div>
    </div>

    <div class="topnav" id="myTopnav">
        <a href="../../../loggedin.php" class="active">Home</a>
        <?php
        if (isset($_SESSION['userId'])) {
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
            <li class="breadcrumb-item"><a href="../../../loggedin.php" style="color:white;font-size:bold;">Home</a>
            </li>
            <li class="breadcrumb-item active" aria-current="page"><a href="C1_formation.php" style="color:white;">What
                    is dementia</a></li>
            <li class="breadcrumb-item active" aria-current="page"><a style="color:white;">Distinguishing Between
                    Delirium, Dementia, and
                    Depression</a></li>
        </ol>
    </nav>

    <div class="Chapter3">
        <h1>Distinguishing Between Delirium, Dementia, and Depression</h1>
        <p> Delirium, dementia, and depression can all have similar characteristics or symptoms. The following
            information will help you distinguish between these conditions and their characteristics or symptoms.
            If you see any of the symptoms associated with these conditions, get the person to a medical professional
            as quickly as possible. An accurate diagnosis needs to be made and appropriate treatment prescribed.
        </p>
        <img src="Chapter4.png" width="850" height="1000">

    </div>
    </div>

    <div class="previous">
        <a href="C1_chapter3.php" class="previous">Previous</a>
    </div>
    <p></p>
    <div class="previous">
        <a href="C1_formation.php" class="previous">Back to beginning</a>
    </div>
    <p></p>
    <button id="mark" chapter='1' number='4'>Mark as done</button>

    <script src="../../../js/jquery-3.3.1.min.js"></script>
    <script src="../../../js/chap_progress.js"></script>
    <script>
    const filled = document.querySelector(".filled");

    function update() {
        filled.style.width = `${
            (window.scrollY / (document.body.scrollHeight - window.innerHeight)) *
            100
            }%`;
        requestAnimationFrame(update);
    }

    update();

    const userId = <?php echo json_encode($_SESSION['userId']); ?>;
    </script>
</body>

<p></p>

<?php require "../../../footer.php" ?>