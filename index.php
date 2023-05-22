<?php
  session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>GROUPR</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
</head>
<body>
  <?php include 'navbar.php'; ?>

  <div id="default-content">
    <?php include 'defaultContent.php'; ?>
  </div>

  <div id="browse-content" class="hidden">
    <?php include 'browse.php'; ?>
  </div>

  <?php include'footer.html';?>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</body>
</html>