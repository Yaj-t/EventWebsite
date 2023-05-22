<?php
session_start();
if (!isset($_SESSION["email"])) {
  header("location: logout.php");
}

if (isset($_SESSION['message'])) {
    echo '<div class="alert success">';
    echo $_SESSION['message'];
    echo '</div>';

    unset($_SESSION['message']);
}

if (isset($_SESSION['error'])) {
    echo '<div class="alert error">';
    echo $_SESSION['error'];
    echo '</div>';

    unset($_SESSION['error']);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Event Website</title>

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
</head>
<body>
    <?php include 'navbar.php'; ?>
    <div class="container mt-4">
        <h1>My Events</h1>
        <?php
        include 'config.php';

        $userId = $_SESSION['user_id'];
        $currentDate = date("Y-m-d");
        $sql = "SELECT * FROM events WHERE user_id = $userId ORDER BY date DESC";

        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            echo '<table class="table">
                    <thead>
                        <tr>
                            <th>Event Name</th>
                            <th>Date</th>
                            <th>Time</th>
                            <th>Location</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>';

            while ($row = $result->fetch_assoc()) {
                echo '<tr>
                        <td>' . $row["title"] . '</td>
                        <td>' . $row["date"] . '</td>
                        <td>' . $row["time"] . '</td>
                        <td>' . $row["location"] . '</td>
                        <td>
                            <a href="#" data-toggle="modal" data-target="#editModal' . $row["event_id"] . '">Edit</a> |
                            <a href="#" data-toggle="modal" data-target="#deleteModal' . $row["event_id"] . '">Delete</a>
                        </td>
                    </tr>';

                include'editEvent.php';

                include'deleteEvent.php';
            }

            echo '</tbody></table>';
        } else {
            echo 'No events found.';
        }

        $conn->close();
        ?>
    </div>
    <?php include'footer.html';?>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</body>
</html>
