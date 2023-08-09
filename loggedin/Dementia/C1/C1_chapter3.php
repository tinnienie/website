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
            <li class="breadcrumb-item active" aria-current="page"><a style="color:white;">Differentiating Dementia,
                    Depression, and Delirium</a></li>
        </ol>
    </nav>

    <div class="C1">
        <h1>Differentiating Dementia,
            Depression, and Delirium</h1>
        <p> Delirium, dementia, and depression can all have similar symptoms.
            The following information will help you distinguish between these
            conditions and symptoms
        </p>
    </div>
    <div class="Chapter3">
        <h1>Dementia</h1>
        <p>As it is mentioned at the Introduction, Dementia is a term for several diseases that affect memory, thinking,
            and the ability to perform daily activities.
        <p><a href="C1_chapter1.php">Click here to recap the Introduction</a></p>
        </p>
        <hr>
        </hr>
        <h1>Depression</h1>
        <p>Depression is a treatable illness that involves the body, mood, and
            thoughts. Depression is related to physical changes in the brain
            and connected to a chemical imbalance that can be inherited,
            psychological, or triggered by a stressful event or environmental
            conditions. </p>
        <p>It is important to know if a person with dementia also is depressed
            because the depression can go untreated and <b>makes the effects of
                the dementia worse.</b> For example, depression can make it even
            harder for a person with dementia to remember things. He or she
            can also be more confused, anxious, and withdrawn. </p>
        <p>
        <h3>
            What are the symptoms of depression?
            </p>
        </h3>
        <ul>
            <li>Loss of interest and pleasure in activities.</li>
            <li>Difficulty sleeping or sleeping too much.</li>
            <li>Lack of energy.</li>
            <li>Loss of appetite and weight.</li>
            <li>Being unusually emotional, crying, angry, or agitated.</li>
            <li>Expressing feelings of sadness or worthlessness.</li>
            <li>Increased confusion.</li>
            <li> Aches and pains that appear to have no physical cause.</li>
            <li> Expressing thoughts of death or suicide.</li>
        </ul>
        <p></p>
        <h3>What causes depression?</h3>
        <p>There is no single cause for depression. Often a combination of
            genetic, psychological, and environmental factors contribute to
            the onset of depression. Some contributing factors include: </p>
        <ol>
            <li>A family history or a genetic link to depression.</li>
            <li>Stressful or upsetting events, such as a disability, having to
                move, or the death of a loved one.</li>
            <li>The effects of certain illnesses or the side-effects of medication.</li>
            <li>Feelings of loneliness or isolation.</li>
            <li>Feelings of boredom or having little control over situations.</li>
            <li>Worries over issues such as money, relationships, or the future.</li>
            <li>Other psychological factors including an anxiety disorder,
                eating disorder, schizophrenia, or substance abuse.</li>
        </ol>
        <hr>
        </hr>
        <h1>Delirium</h1>
        <p>Delirium is a condition characterized by the rapid onset of acute
            confusion. It is caused by a variety of physical illnesses or
            toxicity. Delirium can be reversed with the appropriate treatment. The type
            of treatment the person will receive depends on what is causing
            the delirium. If you suspect the person may be experiencing delirium, <b>seek
                immediate medical attention. Death can occur if the delirium
                goes untreated.</b></p>
        <p> </p>
        <h3>What are the symptoms?</h3>
        <ul>
            <li>Acute and sudden changes in memory.</li>
            <li>Reduced awareness of the environment or becoming very alert.</li>
            <li>Agitation as a result of confusion.</li>
            <li>Difficulties with attention and focus.</li>
            <li>May display a wide range of emotions, including: anxiety,sadness, or extreme happiness.</li>
            <li>Changes in the person's sleep-wake pattern.</li>
            <li>Visual hallucinations.</li>
            <li>Delusions.</li>
        </ul>
        <p></p>
        <h3>What are the causes?</h3>
        <ol>
            <li>Dehydration from diuretics, low fluid intake, or hot weather.</li>
            <li>An infection, inflammation, or virus, such as a urinary tract infection or pneumonia.</li>
            <li>Fever or low body temperature.</li>
            <li>Medications, including: getting too much medication, taking medications that react with other medicines,
                or medication sideeffects.</li>
            <li>Withdrawal from stopping drinking alcohol or using drugs.</li>
            <li>A reaction to mixing over-the-counter cold, sleeping, or pain remedies with prescribed medications.</li>
            <li>Multiple, severe, and unstable medical problems.</li>
            <li>Physical injury, such as fractures.</li>
    </div>

    <div class="previous">
        <a href="C1_chapter2.php" class="previous">Previous</a>
    </div>
    <p></p>
    <div class="next">
        <a href="C1_chapter4.php" class="next">Next</a>
    </div>
    <p></p>
    <button id="mark" chapter='1' number='3'>Mark as done</button>

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