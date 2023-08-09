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

<body chapter='1'>
    <div class="container">
        <b> Q1. Dementia is a broad term used to describe symptoms that result when the brain is damaged by (except)? </b> <hr>
        <input type="radio" name="question1" id="correct1">bad posture<br>
        <input type="radio" name="question1">disease<br>
        <input type="radio" name="question1">injury<br>
        <input type="radio" name="question1">illness<br>
        <button class="next" onclick="next(1)">NEXT</button>
    </div>

    <div class="container">
        <b> Q2. What kind of symptom is universal to all types of dementias? </b> <hr>
        <input type="radio" name="question2" >Nightmares<br>
        <input type="radio" name="question2" id="correct2">Memory loss<br>
        <input type="radio" name="question2" >Fever<br>
        <input type="radio" name="question2" >Wandering<br>
        <button class="next" onclick="next(2)">NEXT</button>
    </div>

    <div class="container">
        <b> Q3. Which of the following symptoms do delirium and dementia have in common? </b> <hr>
        <input type="radio" name="question3" >Present physical illness<br>
        <input type="radio" name="question3" id="correct3">Short term impaired memory<br>
        <input type="radio" name="question3">Months to Years long durations<br>
        <input type="radio" name="question3">Hours to weeks long durations<br>
        <button class="next" onclick="next(3)">NEXT</button>
    </div>

    <div class="container">
        <b> Q4 Which of the following symptoms do dementia and depression have in common? </b> <hr>
        <input type="radio" name="question4" >Loss of ability to interpret senses<br>
        <input type="radio" name="question4" >Too much effort to hide symptoms<br>
        <input type="radio" name="question4" id="correct4">Loss of interests<br>
        <input type="radio" name="question4" >Absent physical illness<br>
        <button class="next" onclick="next(4)">NEXT</button>
    </div>

    <div class="container">
        <b> Q5 A Dementia patient may experience decline and loss of (except)? </b> <hr>
        <input type="radio" name="question5" >Concentration<br>
        <input type="radio" name="question5" >Memory<br>
        <input type="radio" name="question5" id="correct5">Muscles<br>
        <input type="radio" name="question5" >Judgement<br>
        <button class= "result" onclick="submit()">SUBMIT QUIZ</button>
        <button class="next"><a href="all_courses.php">Back to Home</a></button>
    </div>    

    <script>
        const userId = <?php echo json_encode($_SESSION['userId']); ?>;
    </script>
    <script src="../js/quiz_progress.js"></script>
</body>
</html>