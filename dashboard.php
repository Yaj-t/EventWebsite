<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Event Website</title>
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
</head>
<body>
  <!-- Navigation bar -->
  <?php include'navbar.php'; ?>

  <!-- Hero section -->
  <section class="jumbotron text-center">
    <div class="container">
      <h1 class="display-4">Discover Exciting Events</h1>
      <p class="lead">Find and join events happening near you!</p>
      <a href="#" class="btn btn-primary">Browse Events</a>
    </div>
  </section>

  <!-- About Us section -->
  <section class="container my-5">
    <h2 class="text-center mb-4">About Us</h2>
    <div class="row">
      <div class="col-md-6">
        <img src="eventPic.jpg" class="img-fluid" alt="About Us">
      </div>
      <div class="col-md-6">
        <h3>Who We Are</h3>
        <p>We are a group of passionate students dedicated to connecting people with amazing events. Our platform is designed to make it easy for event organizers to showcase their offerings and for individuals to discover and participate in exciting events happening in their area.</p>
        <h3>Our Mission</h3>
        <p>At GROUPR, our mission is to create a vibrant and inclusive community where people can explore, create, and share memorable experiences. We believe that events have the power to inspire, educate, and bring people together. Through our platform, we aim to foster a culture of discovery, creativity, and connection.</p>
      </div>
    </div>
  </section>

  <!-- Footer -->
  <footer class="bg-dark text-white text-center py-4">
    <p>Event Website &copy; 2023</p>
  </footer>

  <!-- Bootstrap JS -->
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</body>
</html>