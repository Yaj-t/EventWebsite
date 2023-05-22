<!DOCTYPE html>
<html>
<head>
    <title>Event Website - Browse Events</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <style>
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

        .card {
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
    <div class="container mt-4">
        <h1>Browse Events</h1>
        
        <form method="GET" action="" class="mb-4">
            <div class="form-row align-items-end">
                <div class="col">
                    <label for="start-date">Start Date:</label>
                    <input type="date" id="start-date" name="start-date" class="form-control" value="" required>
                </div>
                <div class="col">
                    <label for="end-date">End Date:</label>
                    <input type="date" id="end-date" name="end-date" class="form-control" value="" required>
                </div>
                <div class="col">
                    <button type="submit" class="btn btn-primary">Apply</button>
                </div>
            </div>
        </form>

        <?php
        include 'config.php';

        if (isset($_GET['start-date']) && isset($_GET['end-date'])) {
            $startDate = $_GET['start-date'];
            $endDate = $_GET['end-date'];
        } else {
            // Default to the nearest date
            $startDate = date("Y-m-d");
            $endDate = date('Y-m-d', strtotime($startDate . ' +6 days'));
        }

        // Retrieve events within the specified date range
        $limit = 12; // Maximum number of events per page

        // Get the total count of events
        $countSql = "SELECT COUNT(*) AS total FROM events WHERE date >= '$startDate' AND date <= '$endDate'";
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
        $sql = "SELECT * FROM events WHERE date >= '$startDate' AND date <= '$endDate' ORDER BY date ASC LIMIT $limit OFFSET $offset";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            // Display events as cards
            echo '<div class="card-columns">';
            while ($row = $result->fetch_assoc()) {
                echo '<div class="card">
                        <div class="card-body">
                            <h5 class="card-title">'.$row["title"].'</h5>
                            <p class="card-text">'.$row["description"].'</p>
                            <p class="card-text"><strong>Date:</strong> '.$row["date"].'</p>
                            <p class="card-text"><strong>Time:</strong> '.$row["time"].'</p>
                            <p class="card-text"><strong>Location:</strong> '.$row["location"].'</p>
                        </div>
                    </div>';
            }
            echo '</div>';
            // Display pagination buttons
            echo '<div class="pagination-container">';
            echo '<div class="pagination">';
            if ($currentPage > 1) {
                echo '<a href="?page='.($currentPage - 1).'&start-date='.$startDate.'&end-date='.$endDate.'">Previous</a>';
            }
            for ($i = 1; $i <= $totalPages; $i++) {
                echo '<a href="?page='.$i.'&start-date='.$startDate.'&end-date='.$endDate.'" class="'.($currentPage == $i ? 'active' : '').'">'.$i.'</a>';
            }
            if ($currentPage < $totalPages) {
                echo '<a href="?page='.($currentPage + 1).'&start-date='.$startDate.'&end-date='.$endDate.'">Next</a>';
            }
            echo '</div>';
            echo '</div>';
        } else {
            echo 'No events found within the specified date range.';
        }

        $conn->close();
        ?>

    </div>
</body>
</html>
