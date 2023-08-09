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
            <li class="breadcrumb-item active" aria-current="page"><a href="C1_formation.php" style="color:white;">What
                    is dementia</a></li>
            <li class="breadcrumb-item active" aria-current="page"><a style="color:white;">Differentiating the
                    Dementias</a></li>
        </ol>
    </nav>

    <div class="C1">
        <h1>Differentiating the Dementias</h1>
        <img src="Chapter2.png" width="550" height="1000">
        &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
        <img src="Chapter2.1.png" width="550" height="1000">
        <hr>
        <h1>
            How Does Dementia Affect the Brain?
        </h1>
        <p>The diseases, injuries, and illnesses listed on the previous page
            damage the brain and destroy brain cells. Because cells are dead
            or dying, the overall size of the brain shrinks and holes develop
            in certain parts of it. Though different diseases cause damage to different parts of the
            brain, some damage is universal to all types of dementia. For
            example, there is memory loss with all types of dementia. </p>
        <p>
            &nbsp
        <h2>People with dementia often:</h2>
        <p>Cannot remember things.</p>
        <p>Have trouble understanding words.</p>
        <p>Forget how to do things they have done for years.</p>
        <p>Become disoriented.</p>
        <p>Have ideas or perceptions that are not real.</p>
        <p>Become frustrated easily.</p>
        <p>Ask the same questions or tell the same stories over and
            over.</p>
        <p>Have personality changes.</p>
        </p>
        </hr>
    </div>

    <div class="previous">
        <a href="C1_chapter1.php" class="previous">Previous</a>
    </div>
    <p></p>
    <div class="next">
        <a href="C1_chapter3.php" class="next">Next</a>
    </div>
    <p></p>
    <button id="mark" chapter='1' number='2'>Mark as done</button>

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