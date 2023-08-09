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
        <ol class="breadcrumb" style="background:linear-gradient(to right,rgba(71, 135, 185, 0.8),rgba(94, 177, 239, 0.8))">
            <li class="breadcrumb-item"><a href="../../../loggedin.php" style="color:white;font-size:bold;">Home</a>
            </li>
            <li class="breadcrumb-item active" aria-current="page"><a href="C3_formation.php" style="color:white;">Dealing with the troubling behavior of a person with dementia</a></li>
            <li class="breadcrumb-item active" aria-current="page"><a style="color:white;">The Wellness Approach</a>
            </li>
        </ol>
    </nav>

    <div class="C1">
        <h1>The Wellness Approach</h1>
    </div>
    <div class="Chapter3">
        <p>
            The Wellness Approach focuses on the capabilities a person still has
            instead on what is missing or lost. Realistically, focusing on the
            positive helps the person with dementia reach his or her highest
            level of functioning.
        </p>
        <p>The Wellness Approach is partly an attitude and partly a matter of
            techniques, such as:
        </p>
        <p>
        <ul>
            <li>Identifying, emphasizing, and building on remaining abilities.</li>
            <li>Respectfully praising even small successes in an adult way.</li>
            <li>Encouraging independence instead of taking over for the person.</li>
            <li>Respecting the person's dignity, privacy, and individuality at all times.</li>
        </ul>
        </p>
        <p>The overall goal of care is to make the person's life as positive and
            fulfilling as possible through meaningful, satisfying relationships
            and activities provided in a nurturing and caring way. </p>
        &nbsp
        <h1>Three keys to successful care</h1>
        <h4>Key 1: Build trust and a sense of competence in the person. </h4>
        &nbsp
        <h4>Key 2: Search for, and build on, the person's remaining capacities.</h4>
        <ul>
            <li><b>Emotional capacity</b>. The ability to experience feelings,
                although the expression of these emotions may not be
                understood.</li>
            <li><b>Awareness of environment</b>. Awareness and
                responsiveness to the environment, even if not fully
                comprehended by a person with dementia.</li>
            <li><b>Ability to communicate</b>. A person with dementia may
                still be able to communicate with words, and usually
                remain able to communicate emotions nonverbally.</li>
            <li><b>Ability to make logical connections</b>. A person with
                dementia may still be able to make some logical
                connections. What may seem irrational to us may be
                logically connected to an impaired person's perceptions.</li>
        </ul>
        &nbsp
        <h4>Key 3: Look for the meaning and purpose behind behavior.</h4>
        <ul>
            <li>Pay attention to the environment and the person,
                including his or her reactions to different situations,
                people, and surroundings. Notice things that upset or
                calm the person.</li>
            <li>Learn about the individual's interests and background,
                how to predict when he or she will become upset and
                how to help if this happens. Family members can serve as a vital link to the
                individual's past and personality. </li>
            <li>Listen to the person's emotional communication, rather
                than just his or her words. </li>
            <li>Remain calm and reassuring in the face of difficult
                situations.</li>
        </ul>
    </div>
    &nbsp

    <div class="previous">
        <a href="C3_chapter2.php" class="previous">Previous</a>
    </div>
    <p></p>
    <div class="next">
        <a href="C3_chapter4.php" class="next">Next</a>
    </div>
    <p></p>

    <button id="mark" chapter='3' number='3'>Mark as done</button>

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