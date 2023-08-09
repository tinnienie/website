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
            <li class="breadcrumb-item active" aria-current="page"><a style="color:white;">Validation Therapy</a></li>
        </ol>
    </nav>

    <div class="C1">
        <h1>Validation Therapy</h1>
    </div>
    <div class="Chapter3">
        <p>
            Validation Therapy is based on our understanding that after a
            certain point in dementia the person's sense of “present time” no
            longer functions. Therefore, to communicate with people with dementia and meet
            their needs, caregivers have to relate to where the person with
            dementia is, rather than try to reorient the person to the present. The use of Validation Therapy reduces
            anxiety in many people
            with dementia by making them feel safe and less confused.

        </p>
        <p>For example, a person with dementia calls out for her mother who
            died decades earlier. The caregiver does <b>not</b> disagree with or
            correct her. Rather, staff mimic her feelings with sympathetic
            facial expressions and ask questions, such as “Do you miss your
            mother?” “What would you like to tell her?” to get her talking
            about her feelings and concerns and bring a level of comfort.
        </p>
        <p>Validation therapy also helps to decrease unwanted behaviors,
            such as biting, stripping, episodes of incontinence, crying,
            swearing, yelling, and pacing. Close eye contact, a clear, low tone of voice, and gentle touch,
            also are key to reaching people with severe cognitive loss.
        </p>
        &nbsp
        <h3>Keys to Using Validation Therapy</h3>
        <ul>
            <li>Be non-judgmental, accept, and respect the wisdom of the
                person.</li>
            <li>Help the person be at peace.</li>
            <li>Acknowledge and validate feelings.</li>
            <li>Listen with empathy.</li>
            <li>Do not treat the person as a child.</li>
            <li>Do not punish, threaten, or patronize. Do not shut off the
                person's feelings.</li>
            <li>Tune into the person, listen to verbal clues, and observe nonverbal clues.</li>
            <li>Put the person's feelings into words to affirm them.</li>
            <li>Do not expect all people with dementia to act alike. Respect
                the unique differences.</li>
        </ul>
    </div>
    <div class="previous">
        <a href="C3_chapter3.php" class="previous">Previous</a>
    </div>
    <p></p>
    <div class="next">
        <a href="C3_chapter5.php" class="next">Next</a>
    </div>
    <p></p>

    <button id="mark" chapter='3' number='4'>Mark as done</button>

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