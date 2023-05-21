<?php 
session_start();
if(!isset($_SESSION["email"])){
  header("location: logout.php");
};
// Check if success message is set
if (isset($_SESSION['message'])) {
    echo '<div class="alert success">';
    echo $_SESSION['message'];
    echo '</div>';

    // Clear the session variable
    unset($_SESSION['message']);
}

// Check if error message is set
if (isset($_SESSION['error'])) {
    echo '<div class="alert error">';
    echo $_SESSION['error'];
    echo '</div>';

    // Clear the session variable
    unset($_SESSION['error']);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Event Website</title>
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <style>
    body {
      display: flex;
      flex-direction: column;
      min-height: 100vh;
    }

    /* Content container */
    .content {
      flex: 1;
    }

    /* Footer styles */
    footer {
      background-color: #343a40;
      color: white;
      padding: 20px;
    }
  </style>
</head>
<body>
  <!-- Navigation bar -->
  <?php include 'navbar.php'; ?>

  <div class="content">
    <?php include 'browse.php'; ?>
  </div>

  <footer class="bg-dark text-white text-center py-4">
    <p>Event Website &copy; 2023</p>
  </footer>

  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</body>
</html>
