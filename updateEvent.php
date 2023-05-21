<?php
session_start();

// Check if user is logged in
if (!isset($_SESSION["email"])) {
    header("Location: logout.php");
    exit();
}

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $eventId = $_POST["event_id"];
    $eventName = $_POST["event-name"];
    $eventDescription = $_POST["event-description"];
    $eventDate = $_POST["date"];
    $eventTime = $_POST["time"];
    $eventLocation = $_POST["location"];

    include 'config.php';


    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "UPDATE events SET title = '$eventName', description = '$eventDescription', date = '$eventDate', time = '$eventTime', location = '$eventLocation' WHERE event_id = '$eventId'";

    if ($conn->query($sql) === TRUE) {
        // Event updated successfully
        $_SESSION['message'] = 'Event updated successfully.';
    } else {
        // Error updating event
        $_SESSION['error'] = 'Error updating event: ' . $conn->error;
    }

    $conn->close();

    // Redirect back to the my-events page
    header("Location: " . $_SERVER["HTTP_REFERER"]);
    exit();
} else {
    // Redirect to the my-events page if accessed directly without form submission
    header("Location: " . $_SERVER["HTTP_REFERER"]);
    exit();
}
?>
