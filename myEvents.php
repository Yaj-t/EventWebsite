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

    .pagination-container {
      display: flex;
      justify-content: center;
      margin-top: 20px;
      margin-bottom: 20px;
    }

    .pagination {
      display: inline-block;
    }

    .pagination a {
      display: inline-block;
      padding: 8px 16px;
      text-decoration: none;
      color: #000;
      background-color: #f2f2f2;
      border-radius: 5px;
      margin-right: 5px;
    }

    .pagination a.active {
      background-color: #4CAF50;
      color: white;
    }

    .pagination a:hover {
      background-color: #ddd;
    }
  </style>
</head>
<body>
    <?php session_start(); include 'navbar.php'; ?>
    <div class="content container mt-4">
        <h1>My Events</h1>
        <?php
        $userId = $_SESSION['user_id'];
        $currentDate = date("Y-m-d");
        $limit = 10; // Maximum number of events per page

        // Get the total count of events
        include'config.php';
        $countSql = "SELECT COUNT(*) AS total FROM events WHERE user_id = $userId";
        $countResult = $conn->query($countSql);
        $row = $countResult->fetch_assoc();
        $totalEvents = $row['total'];

        // Calculate the number of pages
        $totalPages = ceil($totalEvents / $limit);

        // Get the current page from the URL parameter
        $currentPage = isset($_GET['page']) ? $_GET['page'] : 1;

        // Calculate the offset for the events query
        $offset = ($currentPage - 1) * $limit;

        // Retrieve events for the current page
        $sql = "SELECT * FROM events WHERE user_id = $userId ORDER BY date LIMIT $limit OFFSET $offset";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            echo '<table class="table">
                    <thead>
                        <tr>
                            <th>Event Name</th>
                            <th>Date</th>
                            <th>Time</th>
                            <th>Location</th>
                            <th>Description</th>
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
                        <td>' . $row["description"] . '</td>
                        <td>
                            <a href="#" data-toggle="modal" data-target="#editModal' . $row["event_id"] . '">Edit</a> |
                            <a href="#" data-toggle="modal" data-target="#deleteModal' . $row["event_id"] . '">Delete</a>
                        </td>
                    </tr>';
                // Include edit event modal
                include 'editEvent.php';
                // Include delete event modal
                include 'deleteEvent.php';
            }

            echo '</tbody></table>';

            // Display pagination buttons
            echo '<div class="pagination-container">';
            echo '<div class="pagination">';
            if ($currentPage > 1) {
                echo '<a href="?page=' . ($currentPage - 1) . '">Prev</a>';
            }
            for ($i = 1; $i <= $totalPages; $i++) {
                if ($i == $currentPage) {
                    echo '<a href="?page=' . $i . '" class="active">' . $i . '</a>';
                } else {
                    echo '<a href="?page=' . $i . '">' . $i . '</a>';
                }
            }
            if ($currentPage < $totalPages) {
                echo '<a href="?page=' . ($currentPage + 1) . '">Next</a>';
            }
            echo '</div>';
            echo '</div>';
        } else {
            echo 'No events found.';
        }

        $conn->close();
        ?>
    </div>
    <div class="footer">
        <?php include 'footer.html'; ?>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</body>
</html>
