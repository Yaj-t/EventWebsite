<!DOCTYPE html>
<html>
<head>
    <title>Event Website - Browse Events</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-4">
        <h1>Browse Events</h1>
        
        <form method="GET" action="" class="mb-4">
            <div class="form-row">
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
        $sql = "SELECT * FROM events WHERE date >= '$startDate' AND date <= '$endDate' ORDER BY date ASC";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            // Display events in a table
            echo '<table class="table">
                    <thead>
                        <tr>
                            <th>Event Name</th>
                            <th>Date</th>
                            <th>Time</th>
                            <th>Location</th>
                            <th>Description</th>
                        </tr>
                    </thead>
                    <tbody>';

            // Loop through each event and display its details
            while ($row = $result->fetch_assoc()) {
                echo '<tr>
                        <td>'.$row["title"].'</td>
                        <td>'.$row["date"].'</td>
                        <td>'.$row["time"].'</td>
                        <td>'.$row["location"].'</td>
                        <td>'.$row["description"].'</td>
                    </tr>';
            }

            echo '</tbody></table>';
        } else {
            echo 'No events found within the specified date range.';
        }

        $conn->close();
        ?>

    </div>
</body>
</html>
