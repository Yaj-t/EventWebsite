<?php
session_start();

if (!isset($_SESSION["email"])) {
    header("Location: logout.php");
    exit();
}

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $eventId = $_POST["event_id"];
    $eventName = $_POST["event-name"];
    $eventDescription = $_POST["event-description"];
    $eventDate = $_POST["date"];
    $eventTime = $_POST["time"];
    $eventLocation = $_POST["location"];

    include 'config.php';

    $sql = "UPDATE events SET title = '$eventName', description = '$eventDescription', date = '$eventDate', time = '$eventTime', location = '$eventLocation' WHERE event_id = '$eventId'";

    if ($conn->query($sql) === TRUE) {
        $_SESSION['message'] = 'Event updated successfully.';
    } else {
        $_SESSION['error'] = 'Error updating event: ' . $conn->error;
    }

    $conn->close();

    header("Location: " . $_SERVER["HTTP_REFERER"]);
    exit();
} else {
    header("Location: " . $_SERVER["HTTP_REFERER"]);
    exit();
}
?>
