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

<body chapter='3'>
    <div class="container">
        <b> Q1 Which step is INCORRECT when dealing with someone with challenging behaviors? </b> <hr>
        <input type="radio" name="question1" >Step 1: Describe and try to understand the behavior<br>
        <input type="radio" name="question1" >Step 2: Decide if there is a problem and for whom<br>
        <input type="radio" name="question1" id="correct1">Step 3: Conduct whatever action you like<br>
        <input type="radio" name="question1">Step 4: Check if your plan worked<br>
        <button class="next" onclick="next(1)">NEXT</button>
    </div>

    <div class="container">
        <b> Q2 The Wellness Approach is partly an attitude and partly a matter of techniques,such as (except)? </b> <hr>
        <input type="radio" name="question2" >Identifying, emphasizing, and building on remaining abilities<br>
        <input type="radio" name="question2" id="correct2">Not praising anyones successes<br>
        <input type="radio" name="question2">Encouraging independence instead of taking over for the person<br>
        <input type="radio" name="question2">Respecting the person's dignity, privacy, and individuality at all times<br>
        <button class="next" onclick="next(2)">NEXT</button>  
    </div>

    <div class="container">
        <b> Q3 Which of the following is an INCORRECT key to successful care? </b><hr>
        <input type="radio" name="question3" >Key 1: Build trust and a sense of competence in the person<br>
        <input type="radio" name="question3" >Key 2: Search for, and build on, the person's remaining capacities<br>
        <input type="radio" name="question3" >Key 3: Look for the meaning and purpose behind behavior<br>
        <input type="radio" name="question3" id="correct3">Key 4: Bring them in as part of a family<br>
        <button class="next" onclick="next(3)">NEXT</button>
    </div>

    <div class="container">
        <b> Q4 Which of the following is NOT one of the keys to using Validation Therapy? </b> <hr>
        <input type="radio" name="question4" id="correct4">Treat the person like a child<br>
        <input type="radio" name="question4" >Be non-judgmental, accept, and respect the wisdom of the person<br>
        <input type="radio" name="question4" >Help the person be at peace<br>
        <input type="radio" name="question4" >Listen with empathy<br>
        <button class="next" onclick="next(4)">NEXT</button>
    </div>

    <div class="container">
        <b> Q5 A thorough Activity Based Alzheimer's Care assessment should includeA thorough Activity Based Alzheimer's Care assessment should include: (except)? </b> <hr>
        <input type="radio" name="question5" >Medical information<br>
        <input type="radio" name="question5">Background information/family history<br>
        <input type="radio" name="question5">Social/cultural information<br>
        <input type="radio" name="question5" id="correct5">Their biggest insecurities<br>
        <button class= "result" onclick="submit()">SUBMIT QUIZ</button>
        <button class="next"><a href="all_courses.php">Back to Home</a></button>
    
    </div>
    
    <script>
        const userId = <?php echo json_encode($_SESSION['userId']); ?>;
    </script>
    <script src="../js/quiz_progress.js"></script>
</body>
</html>