<?php
if (isset($_POST['event_id']) && !empty($_POST['event_id'])) {
    $event_id = $_POST['event_id'];

    include 'config.php';

    // Prepare SQL statement
    $sql = "DELETE FROM events WHERE event_id = ?";

    $stmt = $conn->prepare($sql);

    if ($stmt) {
        // Bind the event ID parameter
        $stmt->bind_param('i', $event_id);

        // Execute SQL query and handle success/error
        if ($stmt->execute()) {
            session_start();
            $_SESSION['message'] = 'Event deleted successfully.';
            header("Location: " . $_SERVER["HTTP_REFERER"]);
            exit();
        } else {
            session_start();
            $_SESSION['error'] = 'An error occurred while deleting the event.';
            header("Location: " . $_SERVER["HTTP_REFERER"]);
            exit();
        }
    } else {
        // Error preparing the SQL statement
        session_start();
        $_SESSION['error'] = 'An error occurred while deleting the event.';
        header("Location: " . $_SERVER["HTTP_REFERER"]);
        exit();
    }
} else {
    // Invalid request
    session_start();
    $_SESSION['error'] = 'Invalid request.';
    header("Location: myEvents.php");
    exit();
}
?>
