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
            <li class="breadcrumb-item active" aria-current="page"><a href="C2_formation.php" style="color:white;">Tips
                    for communicating with a person with dementia</a></li>
            <li class="breadcrumb-item active" aria-current="page"><a style="color:white;">Changes in Communication
                    Ability as Dementia Progresses</a></li>
        </ol>
    </nav>

    <div class="C1">
        <h1>Changes in Communication Ability as Dementia Progresses</h1>
    </div>
    <div class="Chapter3">
        <h2>Early Phase of Dementia</h2>
        <h5><b>Memory</b></h5>
        <ol>
            <p>
                <li>May experience mild loss of recent memory.</li>
            </p>
        </ol>
        <p>
        <h5><b>Comprehension</b></h5>
        </p>
        <ol>
            <p>
                <li>May have difficulty understanding complex
                    conversations, talking that is too fast, and talking that
                    takes place in noisy or distracting environments.</li>
                <li>Understands facial expressions, gestures, and other nonverbal cues, but may be unable to understand
                    humor and sarcasm.</li>
                <li>Can follow directions if the directions are clearly stated.</li>
                <li>Can understand written notes that remind or cue the
                    person to do something. For example, “Take your heart
                    medication at 2 pm.”</li>
            </p>
        </ol>
        <h5><b>Language skills</b></h5>
        </p>
        <ol>
            <p>
                <li>May have some problems thinking what to say. </li>
                <li>May have difficulties with words and use related words,
                    such as “sugar” for “salt.”</li>
                <li>Will often correct mistakes themselves. </li>
                <li>Will continue to use good grammar if they have
                    previously done so. </li>
            </p>
        </ol>

        <h5><b>Social communication</b></h5>
        </p>
        <ol>
            <p>
                <li>Changes the subject to hide that they are having
                    difficulties. </li>
                <li>Tend to repeat themselves. </li>
                <li>Rely heavily on <b>clichés</b>.</li>
                <li>Manage to get along in most social situations.</li>
            </p>
        </ol>
        <hr>
        </hr>

        <h2>Middle Phase of Dementia</h2>
        <h5><b>Memory</b></h5>
        <ol>
            <p>
                <li>May experience moderate loss of long and short-term
                    memory.
                </li>
                <li>Cannot remember less common words or concepts and
                    less familiar names. </li>
                <li>Will no longer be able to hide memory problems. </li>
                <li>Learning new material becomes very difficult. </li>
            </p>
        </ol>
        <p>
        <h5><b>Comprehension</b></h5>
        </p>
        <ol>
            <p>
                <li>Will have trouble understanding day-to-day
                    conversations. </li>
                <li>Will be unable to understand when people talk too fast. </li>
                <li>Will have difficulty focusing and paying attention. </li>
                <li>Are easily distracted by noise and other people talking. </li>
                <li>May require repetition of simple directions. </li>
                <li>Can read but may or may not understand the meaning.</li>
                <li>Miss facial expressions but are still aware of their
                    emotional meaning. </li>
            </p>
        </ol>
        <h5><b>Language skills</b></h5>
        </p>
        <ol>
            <p>
                <li>Lose the ability to remember names and words. </li>
                <li>Ability to process words into ideas is slower. </li>
                <li>Often use slang or “gibberish.” </li>
                <li>May endlessly repeat questions, words, or ideas. </li>
                <li>May still use relatively good grammar. </li>
                <li>Have difficulty reading and writing, use fewer words,
                    and spelling errors are common. </li>
            </p>
        </ol>

        <h5><b>Social communication</b></h5>
        </p>
        <ol>
            <p>
                <li>Talking becomes unclear, empty, and not related to the
                    conversation. </li>
                <li>May not be interested in starting a conversation. </li>
                <li>Ask fewer questions and seldom comment or correct
                    themselves.</li>
                <li>Answers to questions are often inappropriate. May
                    forget the question that was asked. </li>
                <li>Can still handle some casual social situations. </li>
            </p>
        </ol>
        <hr>
        </hr>

        <h2>Late Phase of Dementia</h2>
        <h5><b>Memory</b></h5>
        <ol>
            <p>
                <li>Does not know the time, place, and person.</li>
                <li>Fails to recognize self or family members. </li>
                <li>Cannot form new memories. </li>
            </p>
        </ol>
        <p>
        <h5><b>Comprehension</b></h5>
        </p>
        <ol>
            <p>
                <li>Does not understand the meaning of words.</li>
                <li>May be unaware that someone is speaking to them. </li>
            </p>
        </ol>
        <h5><b>Language skills</b></h5>
        </p>
        <ol>
            <p>
                <li>May repeat things over and over or repeat what others
                    say. </li>
                <li>May use poor grammar.
                </li>
                <li>May speak only in slang or nonsense or not talk at all. </li>
                <li>Revert back to language of origin. </li>
            </p>
        </ol>

        <h5><b>Social communication</b></h5>
        </p>
        <ol>
            <p>
                <li>No longer aware of social interactions and what is
                    expected. </li>
                <li>May withdraw partially or completely. </li>
            </p>
        </ol>
        <hr>
        </hr>

    </div>
    <div class="previous">
        <a href="C2_chapter1.php" class="previous">Previous</a>
    </div>
    <p></p>
    <div class="next">
        <a href="C2_chapter3.php" class="next">Next</a>
    </div>
    <p></p>
    <button id="mark" chapter='2' number='2'>Mark as done</button>

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