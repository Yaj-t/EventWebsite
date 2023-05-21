<?php
// Check if the event_id is set and not empty
if (isset($_POST['event_id']) && !empty($_POST['event_id'])) {
    $event_id = $_POST['event_id'];

    // TODO: Perform necessary validation and security checks

    // Include your database connection
    include 'config.php';

    // Prepare the SQL statement to delete the event
    $sql = "DELETE FROM events WHERE event_id = ?";

    // Prepare the statement
    $stmt = $conn->prepare($sql);

    if ($stmt) {
        // Bind the event_id parameter
        $stmt->bind_param('i', $event_id);

        // Execute the statement
        if ($stmt->execute()) {
            // Event deleted successfully
            // Redirect to the my-events.php page with a success message
            session_start();
            $_SESSION['message'] = 'Event deleted successfully.';
            header("Location: " . $_SERVER["HTTP_REFERER"]);
            exit();
        } else {
            // Error occurred while deleting the event
            // Redirect to the my-events.php page with an error message
            session_start();
            $_SESSION['error'] = 'An error occurred while deleting the event.';
            header("Location: " . $_SERVER["HTTP_REFERER"]);
            exit();
        }
    } else {
        // Error occurred while preparing the statement
        // Redirect to the my-events.php page with an error message
        session_start();
        $_SESSION['error'] = 'An error occurred while deleting the event.';
        header("Location: " . $_SERVER["HTTP_REFERER"]);
        exit();
    }
} else {
    // event_id is not set or empty
    // Redirect to the my-events.php page with an error message
    session_start();
    $_SESSION['error'] = 'Invalid request.';
    header("Location: myEvents.php");
    exit();
}
?>
