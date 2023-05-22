<?php
session_start();
// Check if the user is not logged in
if (!isset($_SESSION["email"])) {
  header("location: logout.php");
}

// Display success message
if (isset($_SESSION['message'])) {
    echo '<div class="alert success">';
    echo $_SESSION['message'];
    echo '</div>';

    unset($_SESSION['message']);
}

// Display error message
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
  <title>GROUPR</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <style>
    body {
      display: flex;
      flex-direction: column;
      min-height: 100vh;
    }

    .content {
      flex: 1;
    }

    footer {
      background-color: #343a40;
      color: white;
      padding: 20px;
    }
  </style>
</head>
<body>
    <?php include 'navbar.php'; ?>
    <div class="content container mt-4">
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
                // Display event details
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
                // Include edit event modal
                include'editEvent.php';
                // Include delete event modal
                include'deleteEvent.php';
            }

            echo '</tbody></table>';
        } else {
            echo 'No events found.';
        }

        $conn->close();
        ?>
    </div>
    <div class="footer">
        <?php include'footer.html';?>
    </div>
    

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</body>
</html>
