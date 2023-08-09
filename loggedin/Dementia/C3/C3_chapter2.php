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
            <li class="breadcrumb-item active" aria-current="page"><a style="color:white;">Framework for Action</a>
            </li>
        </ol>
    </nav>

    <div class="C1">
        <h1>Framework for Action</h1>
    </div>
    <div class="Chapter3">
        <p>
            The Framework for Action is a four-step method for dealing with
            challenging behaviors.
        </p>
        &nbsp
        <h4>Step 1: Describe and try to understand the behavior</h4>
        <p>
        <ul>
            <li>What exactly is the person doing, when, and with whom?</li>
            <li>Have you seen this behavior with this person before? Are there any patterns you can see?</li>
            <li>Is the person trying to communicate a need or desire?</li>
            <li>What happened in the environment or with other people at the time of the behavior that may have
                triggered it?</li>
            <li>Have there been any changes in the person's physical health?</li>
        </ul>
        </p>
        &nbsp
        <h4>Step 2: Decide if there is a problem and for whom</h4>
        <ul>
            <li>Is anyone in physical or other danger because of the
                behavior?</li>
            <li>Can the behavior be explained as a way a person with
                dementia reacts to situations? </li>
            <li>Who is concerned or being impacted by the behavior
                (family members, caregiving staff, the person with
                dementia, other residents)?</li>
            <li>Does the behavior need to change or can you help the
                person concerned better understand it?</li>
        </ul>
        &nbsp
        <h4>Step 3: Decide what action, if any, needs to be taken</h4>
        <ul>
            <li>Does anything need to be done?</li>
            <li>If yes, what other help do you need? What do you expect
                others to do?</li>
            <li>Is there something you expect the person with dementia
                to do?</li>
            <li>Are there any other resources you will need to carry out
                your plan?</li>
        </ul>
        &nbsp
        <h4>Step 4: Check if your plan worked</h4>
        <ul>
            <li>Did your plan of action work?</li>
            <li>What worked well? Is there anything that didn't work? </li>
            <li>Did you learn anything that might help you better understand or deal with this behavior in the future?
            </li>
            <li>Is there anything you want to do differently if the
                behavior happens again? </li>
        </ul>
    </div>
    &nbsp
    <div class="previous">
        <a href="C3_chapter1.php" class="previous">Previous</a>
    </div>
    <p></p>
    <div class="next">
        <a href="C3_chapter3.php" class="next">Next</a>
    </div>
    <p></p>

    <button id="mark" chapter='3' number='2'>Mark as done</button>

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