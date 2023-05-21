
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="#">Event Website</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a class="nav-link" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Create Event</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">My Events</a>
        </li>
        <li class="nav-item">
        <?php
          session_start();
          if(isset($_SESSION['email'])){
            echo'<a class="nav-link" href="logout.php">Logout</a>';
          }else{
            echo'<a class="nav-link" href="login.php">Login</a>';
          }
        ?>
        </li>
      </ul>
    </div>
  </nav>