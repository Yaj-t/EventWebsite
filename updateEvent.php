<?php
session_start();

// Check if the user is logged in
if (!isset($_SESSION["email"])) {
    header("Location: logout.php");
    exit();
}

// Process the form submission if it's a POST request
if ($_SERVER["REQUEST_METHOD"] === "POST") {

    // Retrieve form data
    $eventId = $_POST["event_id"];
    $eventName = $_POST["event-name"];
    $eventDescription = $_POST["event-description"];
    $eventDate = $_POST["date"];
    $eventTime = $_POST["time"];
    $eventLocation = $_POST["location"];

    include 'config.php';
    // Update the event in the database
    $sql = "UPDATE events SET title = '$eventName', description = '$eventDescription', date = '$eventDate', time = '$eventTime', location = '$eventLocation' WHERE event_id = '$eventId'";

    if ($conn->query($sql) === TRUE) {
        $_SESSION['message'] = 'Event updated successfully.';
    } else {
        $_SESSION['error'] = 'Error updating event: ' . $conn->error;
    }

    $conn->close();
} 
    // Redirect back to the previous page
    header("Location: " . $_SERVER["HTTP_REFERER"]);
    exit();

?>
