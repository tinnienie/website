<?php
session_start();
?>
<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
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

<div class="progress-bar">
    <div class="filled"></div>
</div>

<body>
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
        <ol class="breadcrumb" style="background:linear-gradient(to right,rgba(71, 135, 185, 0.8),rgba(94, 177, 239, 0.8))">
            <li class="breadcrumb-item"><a href="../../../loggedin.php" style="color:white;font-size:bold;">Home</a>
            </li>
            <li class="breadcrumb-item active" aria-current="page"><a href="C2_formation.php" style="color:white;">Tips
                    for communicating with a person with dementia</a></li>
            <li class="breadcrumb-item active" aria-current="page"><a style="color:white;">Communication and
                    Dementia </a></li>
        </ol>
    </nav>

    <div class="C1">
        <h1>Communication and Dementia </h1>
        <p> Dementia affects the parts of the brain that control communication
            in different ways for different people. As dementia progresses,
            usually there is a gradual decline in the person's ability to
            communicate. Changes will vary throughout the progression of dementia. In
            each phase, changes can be noted in memory, <b>comprehension</b>,
            <b>language skills</b>, and <b>social communication</b>.
        </p>
        <p><i><b>Comprehension</b>, the ability to
                understand the meaning of
                something.</i></p>
        <p><i>
                <b>Language skills</b>, the use of
                words, signals, or gestures to
                communicate thoughts and
                feelings.</i></p>
        <p><i>
                <b>Social communication</b>, the
                ability to converse in social
                situations. </i></p>
    </div>
    <div class="Chapter3">
        <p>There are some general changes in communication you are likely
            to see. The person with dementia may:</p>
        <ol>
            <li>Have difficulty finding a word and say another word
                instead.</li>
            <li> Not understand what you are saying or only understand
                part of it.</li>
            <li> Speak easily but not make sense.</li>
            <li> Talk about past events but not remember recent events.</li>
            <li> Lose social graces and interrupt, ignore another speaker,
                not respond when spoken to, only talk about him or
                herself, or demand constant attention.</li>
            <li> Have difficulty expressing emotions appropriately.</li>
            <li> Experience difficulty with writing.</li>
            <li> Be able to read words but may not understand the
                meaning.</li>
        </ol>
        <p></p>
        <p>As the dementia progresses, the person may partially or
            completely lose the ability to communicate verbally. It is
            important to remember that a person with dementia: </p>
        <ul>
            <li>Can still communicate in other ways.</li>
            <li>Remains an important source of information.</li>
            <li>Should be included in conversations to the greatest extent
                possible.</li>
        </ul>
    </div>
    <div class="next">
        <a href="C2_chapter2.php" class="next">Next</a>
    </div>
    <p></p>
    <button id="mark" chapter='2' number='1'>Mark as done</button>

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