<?php
require('dbh.inc.php');

//$data = table name
function getAllData($data)
{
    global $conn;
    $sql = "SELECT * FROM $data";
    $result = $conn->query($sql);

    // Check if any rows were returned
    if ($result->num_rows > 0) {
        $data = array();

        // Fetch the data from the result set
        while ($row = $result->fetch_assoc()) {
            $data[] = $row;
        }

        // Set the response content type to JSON
        header('Content-Type: application/json');

        // Send the JSON response
        echo json_encode($data);
    } else {
        echo "No data found.";
    }

    $conn->close();
}

// create/update/delete data
function createData($sql)
{
    global $conn;

    // Execute the query
    if ($conn->query($sql)) {
        $response = array("status" => "success", "message" => "Congratulations! You have successfully complete this chaptor.");
    } else {
        $response = array("status" => "error", "message" => "Error: " . $conn->error);
    }

    // Close the database connection
    $conn->close();

    // Return the response as JSON
    echo json_encode($response);
}


function selectDataWithQuery($cmd)
{
    global $conn;
    $result = $conn->query($cmd);

    // Check if any rows were returned
    if ($result->num_rows > 0) {
        $data = array();

        // Fetch the data from the result set
        while ($row = $result->fetch_assoc()) {
            $data[] = $row;
        }

        // Set the response content type to JSON
        header('Content-Type: application/json');

        // Send the JSON response
        echo json_encode($data);
    } else {
        $data = array(); // Create an empty array
        $json = json_encode($data); // Encode the array as JSON
        echo $json; // return empty json
    }

    $conn->close();
}
