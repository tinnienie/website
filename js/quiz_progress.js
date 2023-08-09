// displaying the first block of question
document.getElementsByClassName('container')[0].style.display = "block";

// DEFINING THE NEXT FUNCTION
function next(id) {
    document.getElementsByClassName('container')[id - 1].style.display = "none";
    document.getElementsByClassName('container')[id].style.display = "block";
}
//getting final result
function submit() {
    const score = calculateResult();

    request(score, function (data) {
        console.log(data.message);
    });
}

function calculateResult() {
    var score = 0;
    if (document.getElementById('correct1').checked) {
        score++;
    }
    if (document.getElementById('correct2').checked) {
        score++;
    }
    if (document.getElementById('correct3').checked) {
        score++;
    }
    if (document.getElementById('correct4').checked) {
        score++;
    }
    if (document.getElementById('correct5').checked) {
        score++;
    }
    alert("your score is: " + score);
    return score;
}

function request(score, callback) {
    const xhr = new XMLHttpRequest();
    const url = "../includes/quiz.inc.php";
   
    const chapter = document.body.getAttribute('chapter');

    const data = `chapter=${chapter}&score=${score}&userId=${userId}`;

    xhr.open("POST", url, true);
    xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");

    xhr.onreadystatechange = function () {
        if (xhr.readyState === 4) {
            if (xhr.status === 200) {
                const data = JSON.parse(xhr.responseText);
                callback(data); // Pass the response data to the callback function
            } else {
                alert("Error: " + xhr.status);
            }
        }
    };

    xhr.send(data);
}