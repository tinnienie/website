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
            <li class="breadcrumb-item active" aria-current="page"><a href="C3_formation.php"
                    style="color:white;">Dealing with the troubling behavior of a person with dementia</a></li>
            <li class="breadcrumb-item active" aria-current="page"><a style="color:white;">Activity Based Alzheimer's
                    Care</a></li>
        </ol>
    </nav>

    <div class="C1">
        <h1>Activity Based
            Alzheimer Care</h1>
    </div>
    <div class="Chapter3">
        <p>
            <b>Activity Based Alzheimer's Care</b> suggests that activities are the
            foundation of care. Every event, encounter, or exchange is an
            activity, be it a bath, meal, song, or smile. An activity is defined
            as an interaction between the individual and the environment.
        </p>
        <p><b>Activity Philosophy</b>: The activities that make up a person's daily
            experience should reflect, as much as possible, the individual's
            preferred lifestyle while enabling a sense of usefulness, pleasure,
            success, and as normal a level of functioning as possible.
        </p>
        <p>Activities are meaningful when they reflect these components.
            Activities are appropriate when they are meaningful and when
            they respect the person's age, beliefs, culture, values, and life
            experiences.
        </p>
        <h3>Activity Based Assessment</h3>
        <p>A thorough Activity Based Alzheimer's Care assessment should include:</p>
        <ol>
            <li>Medical information.</li>
            <li>Background information/family history.
            </li>
            <li>Social/cultural information. </li>
            <li>Occupational background.</li>
            <li>Interests/abilities.</li>
            <li>Current abilities regarding cognition, motor status,
                sensory status, and social abilities. </li>
            <li>Needs—both physical and social.</li>
            <li>Strengths—both physical and social. </li>
        </ol>
        <p><b>Programs should have a flexible structure</b>and be responsive
            and adaptive to change and need. <b>Programs should be strength-based</b>on the person’s abilities,
            interests, and strengths, rather than his or her problems,
            weaknesses, or losses. </p>
    </div>
    <div class="previous">
        <a href="C3_chapter4.php" class="previous">Previous</a>
    </div>
    <p></p>
    <div class="next">
        <a href="C3_formation.php" class="next">Back to beginning</a>
    </div>
    <p></p>

    <button id="mark" chapter='3' number='5'>Mark as done</button>

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

<?php require "../../../footer.php" ?>