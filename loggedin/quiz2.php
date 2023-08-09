<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quiz!!!</title>
    <link rel="stylesheet" href="stylequiz.css">
</head>

<body chapter='2'>
    <div class="container">
        <b> Q1 There are some general changes in communication you are likely to see. The person with dementia may ____ (except)? </b> <hr>
        <input type="radio" name="question1" >Experience difficulty with writing<br>
        <input type="radio" name="question1" id="correct1">Can easily understand everything people tell them<br>
        <input type="radio" name="question1" >Have difficulty expressing emotions appropriately<br>
        <input type="radio" name="question1" >Speak easily but not make sense<br>
        <button class="next" onclick="next(1)">NEXT</button>
    </div>

    <div class="container">
        <b> Q2 what memory symptoms occur in a late phase dementia patient (except)? </b><hr>
        <input type="radio" name="question2" >Cannot form new memories<br>
        <input type="radio" name="question2" >Fails to recognize self or family members<br>
        <input type="radio" name="question2" >Does not know the time, place, and person<br>
        <input type="radio" name="question2" id="correct2">Easily remember what they did earlier in the day<br>
        <button class="next" onclick="next(2)">NEXT</button>
    </div>

    <div class="container">
        <b> Q3 Which of the following is a proper way of approaching someone with dementia? </b> <hr>
        <input type="radio" name="question3" id="correct3">Use a friendly tone of voice and facial expressions<br>
        <input type="radio" name="question3" >Being vulgar<br>
        <input type="radio" name="question3" >Talk to them nervously<br>
        <input type="radio" name="question3" >Approach them aggressively<br>
        <button class="next" onclick="next(3)">NEXT</button>
    </div>

    <div class="container">
        <b> Q4 Which of the following is a non-verbal gesture of approaching someone with dementia? </b> <hr>
        <input type="radio" name="question4" >Introducing yourself every time you approach the person<br>
        <input type="radio" name="question4" >Use a friendly tone of voice and facial expressions<br>
        <input type="radio" name="question4" id="correct4">Touching and holding the person's hand may help keep his or her attention<br>
        <input type="radio" name="question4" >Call the person by name and tell him or her what you are there for<br>
        <button class="next" onclick="next(4)">NEXT</button>
    </div>

    <div class="container">
        <b> Q5 How to make the environment more conducive to quality communication (except)?  </b> <hr>
        <input type="radio" name="question5">Ensure the lighting is adequate for the person to see you but not so bright that it causes a glare<br>
        <input type="radio" name="question5">Always check that any problems a person may be having communicating is not due to the person's impaired vision, hearing, or poorly fitting dentures.<br>
        <input type="radio" name="question5">Avoid competing noises. Turn the television on mute, turn down the radio, or move to a quieter location, if needed<br>
        <input type="radio" name="question5" id="correct5">Have loud noises to allow for a more emmersive chatting experience<br>
        <button class= "result" onclick="submit()">SUBMIT QUIZ</button>
        <button class="next"><a href="all_courses.php">Back to Home</a></button>
    
    </div>

    <script>
        const userId = <?php echo json_encode($_SESSION['userId']); ?>;
    </script>
    <script src="../js/quiz_progress.js"></script>
</body>
</html>