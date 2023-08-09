<?php
session_start();
?>
<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="styleprogress.css">

    <title>Forgetel</title>
</head>

<body>
    <div class="topnav" id="myTopnav">
        <a href="loggedin.php" class="active">Home</a>
        <?php
        if (isset($_SESSION['userId'])) {
            echo '<a href="loggedin/profile.php" name="profile">Profile</a>
          <a href="progress.php" name="progress">Progress</a>
                <a href="includes/logout.inc.php" name="logout-submit">Log Out</a>';
        } else {
            echo '<a href="#aboutus">ABOUT US</a>
          <a href="#contact">CONTACT</a>
          <a href="javascript:void(0);" class="icon" onclick="myFunction()">
            <i class="fa fa-bars"></i>
          </a>
          <a href="signup.php">SIGN UP</a>';
            echo '<a href="signin.php">SIGN IN</a>';
        }
        ?>

    </div>

    </header>

    <header>
        <h1>Reading Progress Report</h1>
        <hr width="90%" ;>
    </header>

    <div class="report-container" id="report">
        <div class="row mb-5 justify-content-left">
            <div class="col-lg-7 text-left">
                <h2>My Progress</h2>
                <div class="progress">
                    <div class="outer">
                        <div class="inner">
                            <div id="number"></div>
                        </div>
                    </div>
                    <svg xmlns="http://www.w3.org/2000/svg" version="1.1" width="160px" height="160px">
                        <defs>
                            <linearGradient id="GradientColor">
                                <stop offset="0%" stop-color="#e91e63" />
                                <stop offset="100%" stop-color="#673ab7" />
                            </linearGradient>
                        </defs>
                        <!-- <circle cx="80" cy="80" r="70" stroke-linecap="round" /> -->
                        <circle id="progress-circle" cx="80" cy="80" r="70" stroke-linecap="round" />

                    </svg>
                </div>

            </div>
        </div>
    </div>
    </div>

    <section id="content" class="my-5 pb-5">
        <div class="content-container">
            <h3>Chapter Content</h3>
        </div>

        <div class="table-container">
            <div class="card">
                <table class="table">
                    <tr>
                        <th style="text-align:start">Chapter 1: What is dementia</th>
                        <th style="text-align:end" id="complete-1">Complete 0 of 2</th>
                    </tr>
                    <tr>
                        <td style="text-align:start">Chapter 1</td>
                        <td style="text-align:end" id="chap-1">Completed %</td>
                    </tr>
                    <tr>
                        <td style="text-align:start">Quiz 1</td>
                        <td style="text-align:end" id="quiz-1">Completed %</td>
                    </tr>
                </table>
            </div>
        </div>

        <div class="table-container">
            <div class="card">
                <table class="table">
                    <tr>
                        <th style="text-align:start">Chapter 2: Tips for communicating with a person with dementia</th>
                        <th style="text-align:end" id="complete-2">Complete 0 of 2</th>
                    </tr>
                    <tr>
                        <td style="text-align:start">Chapter 2</td>
                        <td style="text-align:end" id="chap-2">Completed %</td>
                    </tr>
                    <tr>
                        <td style="text-align:start">Quiz 2</td>
                        <td style="text-align:end" id="quiz-2">Completed %</td>
                    </tr>
                </table>
            </div>
        </div>

        <div class="table-container">
            <div class="card">
                <table class="table">
                    <tr>
                        <th style="text-align:start">Chapter 3: Dealing with the troubling behavior of a person with dementia</th>
                        <th style="text-align:end" id="complete-3">Complete 0 of 2</th>
                    </tr>
                    <tr>
                        <td style="text-align:start">Chapter 3</td>
                        <td style="text-align:end" id="chap-3">Completed %</td>
                    </tr>
                    <tr>
                        <td style="text-align:start">Quiz 3</td>
                        <td style="text-align:end" id="quiz-3">Completed %</td>
                    </tr>
                </table>
            </div>
        </div>

        <p></p>
        <div class="text-center">
            <button id="certificate-button" class="btn btn-primary" disabled>Get Your Certificate!</button>
        </div>
    </section>

    <script src="./js/jquery-3.3.1.min.js"></script>
    <script>
        //progress
        $(document).ready(function() {
            let total_chapter = [4, 3, 5];

            // Get user chapter progress
            const getChapterProgressPromise = new Promise((resolve) => {
                getProgress("chapter", function(data) {
                    let chapter_progress = [0, 0, 0];
                    let progress = [0, 0, 0];

                    for (let i = 0; i < total_chapter.length; i++) {
                        for (let j = 0; j < data.length; j++) {
                            if (data[j].chapter == i + 1) {
                                progress[i]++;
                            }
                        }
                    }

                    for (let i = 0; i < total_chapter.length; i++) {
                        percent = Math.round((progress[i] / total_chapter[i]) * 100);
                        $(`#chap-${i + 1}`).html(`Completed ${percent}%`);
                        chapter_progress[i] = percent;
                    }

                    resolve(chapter_progress);
                });
            });

            // Get user quiz progress
            const getQuizProgressPromise = new Promise((resolve) => {
                let quiz_progress = [0, 0, 0];
                const totalChapters = 3; // Total number of quiz chapters

                getProgress("quiz", function(data) {
                    for (let i = 0; i < totalChapters; i++) {
                        let chapterFound = false; // Flag to check if the chapter is found in data

                        for (let j = 0; j < data.length; j++) {
                            if (data[j].chapter === (i + 1).toString()) {
                                $(`#quiz-${i + 1}`).html(`Result: ${data[j].result}`);
                                quiz_progress[i] = 1;
                                chapterFound = true;
                                break;
                            }
                        }

                        if (!chapterFound) {
                            $(`#quiz-${i + 1}`).html("Not Completed");
                        }
                    }

                    resolve(quiz_progress);
                });
            });

            // Wait for both promises to complete
            Promise.all([getChapterProgressPromise, getQuizProgressPromise]).then(
                ([chapter_progress, quiz_progress]) => {
                    let complete_count = 0;
                    let total_count = 0;
                    for (let i = 0; i < chapter_progress.length; i++) {
                        complete_count = 0;
                        if (chapter_progress[i] == 100) {
                            complete_count++;
                            total_count++;
                        }
                        if (quiz_progress[i] == 1) {
                            complete_count++;
                            total_count++;
                        }

                        $(`#complete-${i+1}`).html(`Complete ${complete_count} of 2`);
                    }

                    // Update progress bar
                    let percent = Math.round((total_count / 6) * 100);

                    let number = document.getElementById("number");
                    let circle = document.getElementById("progress-circle"); // Add this line
                    let counter = 0;
                    let circumference = Math.PI * 2 * circle.getAttribute("r"); // Calculate the circle's circumference
                    let animationInterval = setInterval(() => {
                        if (counter == percent) {
                            clearInterval(animationInterval);
                        } else if (percent == 0) {
                            number.innerHTML = "0%";
                        } else {
                            counter += 1;
                            number.innerHTML = counter + "%";

                            // Calculate the stroke-dashoffset based on the current percentage
                            let dashOffset = circumference * (1 - counter / 100);
                            circle.style.strokeDashoffset = dashOffset;
                        }
                    }, 30);

                    //enable the button upon the progress is 100%
                    if (percent == 100 || total_count == 6) {
                        document.getElementById("certificate-button").disabled = false;
                    }

                }
            );


            // Get certificate button
            $("#certificate-button").click(function() {
                window.location.href = "cert.php";
            });
        });

        function getProgress(dataType, callback) {
            $.ajax({
                url: "./includes/progress.inc.php",
                method: "GET",
                dataType: "json",
                data: {
                    userId: <?php echo $_SESSION['userId']; ?>,
                    data: dataType
                },
                success: function(data) {
                    callback(data);
                }
            });
        }
    </script>
</body>