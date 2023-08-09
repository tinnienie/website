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
            <li class="breadcrumb-item active" aria-current="page"><a href="C2_formation.php" style="color:white;">Tips
                    for communicating with a person with dementia</a></li>
            <li class="breadcrumb-item active" aria-current="page"><a style="color:white;">Strategies and Tips for
                    Communicating with People Who Have Dementia</a></li>
        </ol>
    </nav>

    <div class="C1">
        <h1>Strategies and Tips for Communicating with People Who Have Dementia</h1>
    </div>
    <div class="Chapter3">
        <p>
            Because of all these changes, communicating with a person with
            dementia can be challenging. Communicating effectively may
            take more time, patience, and energy. It is important that you
            make the effort to be attentive and careful in the ways that you:
        </p>
        <ol>
            <li>Approach a person with dementia.</li>
            <li>Give and get information from the person. </li>
            <li>Listen and interpret what the person is trying to
                communicate with you. </li>
        </ol>
        <p>A person with dementia may have difficulty understanding what
            you are saying, or react or respond in ways you are not expecting.
            Often a person with dementia becomes very sensitive to feelings
            and emotions. This means you will need to take extra care in how
            you approach a person with dementia and pay special attention to
            what you might be communicating non-verbally.
        </p>
        &nbsp
        <h2>Approaching a Person with Dementia </h2>
        <ul>
            <p>
                <li>Before approaching a person with dementia, check your
                    attitude. If you are feeling tense or upset about anything,
                    the person with dementia is sure to pick up on it. Do all
                    that you can to be calm and relaxed. </li>
                <li>Always approach the person slowly from the front or
                    side. Do not approach the person from behind.
                </li>
                <li>Introduce yourself every time you approach the person.
                    Do not approach the person as if he or she should know
                    you. The person may not remember you.
                </li>
                <li> Use a friendly tone of voice and facial expressions. </li>
                <li>Call the person by name and tell him or her what you are
                    there for.</li>
            </p>
        </ul>
        &nbsp
        <h2>Non-Verbal Gestures</h2>
        </p>
        <p>
        <ul>
            <li>Touching and holding the person's hand may help keep
                his or her attention.</li>
            <li> Sit or squat beside a seated person, never stand above
                him or her.
            </li>
            <li>Watch your body language. The person with dementia
                will pick up feelings of anger or impatience. </li>
            <li>Use hand gestures and facial expressions to be more
                easily understood. </li>
            <li>Use “social cues” that are familiar to the person. For
                example, sit down with two cups of coffee when you
                want to talk with the person. In this culture, coffee is
                often associated with conversation.</li>
        </ul>
        <i><b>Watch your body language!
                The person with dementia will
                pick up feelings of anger or
                impatience. </b></i>
        <p> <i><b>One word of caution about touch, do not assume that
                    the person likes to be touched! Always ask before
                    touching the person. </b></i></p>
        </p>
        &nbsp
        <h2>Giving Information</h2>
        <p>Giving cues or instructions on completing tasks can be a large part
            of your caregiving role. When you are assisting a person with
            dementia with personal care, this can become challenging.
        <p>Below are some tips that you can use to help make the task go smoother!</p>
        </p>
        <p>
        <ul>
            <li>Use a low tone pitch of voice. A raised voice can
                signal that you are upset. </li>
            <li>Always talk slowly and clearly. </li>
            <li>Say less. Some people may only be able to process a
                few words at a time.</li>
            <li>Point or demonstrate to help a person understand what
                you are saying. </li>
            <li>Use different words to get a point across if the person
                does not understand the first time. </li>
            <li>Use the names of people and objects whenever you can. </li>
            <li>Keep sentences short and simple. Focus on one idea at a
                time.</li>
            <li>Ask, rather than tell the person what to do. You will get
                a much better reception by not commanding or ordering
                the person to do things. </li>
        </ul>
        <i><b>Say less when giving
                information to a person with
                dementia—he, she or they may only
                be able to process a few words
                at a time.
        </i></b>
        </p>
        &nbsp
        <h2>Getting Information</h2>
        <p>To the greatest extent possible, the person with dementia should
            continue to be actively involved in making decisions regarding
            care. Sometimes getting information from the person regarding
            his or her preferences can be difficult.
        <p>Below are some tips that can assist you get more information from the
            person!</p>
        </p>
        <p>
        <ul>
            <li>Allow plenty of time for the person to think about what
                was asked. Do not assume the person understands or
                agrees with you because he or she does not respond right
                away. </li>
            <li>Try not to finish the person's sentences.</li>
            <li>If the person has difficulty finding a word, ask him or her
                to explain it in a different way. </li>
            <li> Avoid or reframe open-ended questions. Instead, offer
                alternative responses and allow for spontaneity.
            </li>
            <li>Avoid reason, logic, or the mention of time. All of these
                require complex thought processes that the person may
                no longer have. </li>
            <li>Ask one question at a time.</li>
        </ul>
        <i><b>When asking for information
                from a person with dementia,
                allow plenty of time for him or
                her to think about what you
                have asked.
        </i></b>
        </p>
        &nbsp
        <h2>Listening and Interpreting Information </h2>
        <p>
        <ul>
            <li>Listen for and learn to recognize the person's feelings
                and emotions. Use your senses, as well as your intuition,
                to try and understand what the person is attempting to
                communicate. </li>
            <li>Focus on the person's feelings rather than concentrating
                on what the person is saying.
            </li>
            <li>Remain still when the person is talking. It will show the
                person that you are trying to understand.
            </li>
            <li> Remember that you do not need to react or respond to
                everything the person says. Sometimes, the most
                appropriate response is just to listen. </li>
        </ul>
        <i><b>Listen for and learn to recognize
                a person with dementia's feelings
                and emotions.
        </i></b>
        </p>
        &nbsp
        <h2>Communicating Respect</h2>
        <p>A person with dementia is sensitive to feelings and emotions. It is
            important to always be aware of, what you say, and how you say
            it. Make sure that your communication is always respectful.
        </p>
        <p>
        <ul>
            <li>Keep the person's culture in mind and know what is
                respectful communication in that culture. Talk to the
                person's family to learn more about what is respectful. </li>
            <li>Always focus on the abilities the person still has.</li>
            <li>Do not talk down to the person or treat him or her as a
                child. Conversation should be simple, but remain on an
                adult level.
            </li>
            <li>Talk to the person. Do not talk about him or her as if he
                or she were not present. Even though the person may not
                understand everything that is said, it is important to
                preserve the person's dignity and self-esteem.
            </li>
            <li>When the person's family or friends are present, continue
                to interact with the person with dementia. Let the family
                know that the person with dementia should be a part of
                the conversation. Tell the family that they will also have
                a chance to provide information.</li>
        </ul>
        <i><b>Always be aware of what you say
                and how you say it when
                communicating with a person
                with dementia.
        </i></b>
        </p>
        &nbsp
        <h2>Importance of Environment</h2>
        <p>To facilitate better communication with a person with dementia,
            make sure the environment is favorable to good communication.
        </p>
        <p>While it is difficult for anyone to carry on a conversation when
            there are too many other things going on, it is even more difficult
            for a person with dementia. A person with dementia is easily
            overwhelmed with too much stimulation or noise. </p>
        <p>To make the environment more conducive to quality
            communication: </p>
        <p>
        <ul>
            <li>Avoid competing noises. Turn the television on mute,
                turn down the radio, or move to a quieter location, if
                needed.</li>
            <li>Always check that any problems a person may be having
                communicating is not due to the person's impaired
                vision, hearing, or poorly fitting dentures. Make sure
                glasses, hearing aids, and dentures are all correctly
                prescribed and fit appropriately. </li>
            <li>Ensure the lighting is adequate for the person to see you
                but not so bright that it causes a glare.
            </li>
        </ul>
        <i><b>Make sure the environment is
                favorable to good
                communication.
        </i></b>
        </p>

    </div>
    <div class="previous">
        <a href="C2_chapter2.php" class="previous">Previous</a>
    </div>
    <p></p>
    <div class="next">
        <a href="C2_formation.php" class="next">Back to beginning</a>
    </div>
    <p></p>

    <button id="mark" chapter='2' number='3'>Mark as done</button>

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