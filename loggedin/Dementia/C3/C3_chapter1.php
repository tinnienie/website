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
            <li class="breadcrumb-item active" aria-current="page"><a style="color:white;">Creative Approaches to
                    Challenging Behaviors</a>
            </li>
        </ol>
    </nav>

    <div class="C1">
        <h1>Creative Approaches to Challenging Behaviors</h1>
    </div>
    <div class="Chapter3">
        <p>
            As caretaker, you must occasionally deal with difficult behaviours and situations. Your responsibility is to
            try to figure out what is driving the behaviour and manage the problem with knowledge and respect.
        </p>
        <p>One thing to keep in mind when dealing with an individual with
            dementia is there may be many things going on with the person
            that may contribute to his or her behavior. In order to decide how best to respond to a challenging
            behavior,
            you need to take a step back and try to figure out what the
            person's behavior may be telling you.
        </p>
        <ol>
            <li>Is there something the person needs?</li>
            <li>What is happening in the person's living space?</li>
            <li>Is the person trying to communicate a need or desire?</li>
            <li>Does the behavior put the person or anyone else at risk of
                harm?</li>
            <li>Is the person getting positive attention for the behavior?</li>
        </ol>
        <p>There is no one size fits all solution when dealing with
            challenging behaviors with people with dementia. Different
            people will have different needs. </p>
        <p>There are a number of methods and tools that have proven
            successful. They are presented in the rest of this section. </p>
    </div>
    &nbsp
    <p></p>
    <div class="next">
        <a href="C3_chapter2.php" class="next">Next</a>
    </div>
    <p></p>
    <button id="mark" chapter='3' number='1'>Mark as done</button>

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