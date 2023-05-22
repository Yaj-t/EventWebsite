<!DOCTYPE html>
<html>
<head>
    <title>Event Website - Browse Events</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-4">
        <h1>Browse Events</h1>

        <?php
        include'config.php';

        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        $currentDate = date("Y-m-d");
        $sql = "SELECT * FROM events WHERE date >= '$currentDate' ORDER BY date ASC";

        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            echo '<table class="table">
                    <thead>
                        <tr>
                            <th>Event Name</th>
                            <th>Date</th>
                            <th>Time</th>
                            <th>Location</th>
                        </tr>
                    </thead>
                    <tbody>';

            while ($row = $result->fetch_assoc()) {
                echo '<tr>
                        <td>'.$row["title"].'</td>
                        <td>'.$row["date"].'</td>
                        <td>'.$row["time"].'</td>
                        <td>'.$row["location"].'</td>
                    </tr>';
            }

            echo '</tbody></table>';
        } else {
            echo 'No events found.';
        }

        $conn->close();
        ?>

    </div>
</body>
</html>
