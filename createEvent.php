<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    session_start();
    $host = $_SESSION['user_id'];
    $eventName = $_POST["event-name"];
    $eventDescription = $_POST["event-description"];
    $eventDate = $_POST["date"];
    $eventTime = $_POST["time"];
    $eventLocation = $_POST["location"];

    include 'config.php';

    $sql = "INSERT INTO events (user_id, title, description, date, time, location) VALUES ('$host', '$eventName', '$eventDescription', '$eventDate', '$eventTime', '$eventLocation')";

    if ($conn->query($sql) === TRUE) {
        $_SESSION['message'] = "Event created successfully!";
    } else {
        $_SESSION['error'] = "Error creating event: " . $conn->error;
    }

    $conn->close();

    header("Location: " . $_SERVER["HTTP_REFERER"]);
    exit();
}
?>
