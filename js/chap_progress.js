const doneBtn = document.getElementById("mark");

//Check the current progress of the user
$(document).ready(function() {
    request("GET", function(data) {
        if (data.length != []) {
            // If the user has completed the chapter, disable the button
            doneBtn.disabled = true;
        }
    });
});

// update progression
doneBtn.addEventListener("click", function () {
    request("POST", function (data) {
        alert(data.message);
        doneBtn.disabled = true;
    });
});

function request(method, callback) {
    const xhr = new XMLHttpRequest();
    const url = "../../../includes/progress.inc.php";
    const chapter = doneBtn.getAttribute("chapter");
    const number = doneBtn.getAttribute("number");

    if (method === "GET") {
        // Append the data as parameters in the URL for GET request
        const urlWithParams = url + `?chapter=${chapter}&number=${number}&userId=${userId}`;
        xhr.open(method, urlWithParams, true);
    } else {
        xhr.open(method, url, true);
        xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    }

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

    // For GET request, send() doesn't take any data as it's in the URL
    // For POST request, send the data in the request body
    const data = method === "POST" ? `chapter=${chapter}&number=${number}&userId=${userId}` : null;
    xhr.send(data);
}