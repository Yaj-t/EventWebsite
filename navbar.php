<head>
  <style>
    .create-event-form {
      position: fixed;
      display: none;
      left: 50%;
      top: 50%;
      z-index: 9999;
      background-color: #fff;
      padding: 20px;
      border: 1px solid #ccc;
      border-radius: 5px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
      transform: translate(-50%, -50%);
      }

      .alert {
            padding: 10px;
            border-radius: 4px;
            margin-bottom: 10px;
        }

        .success {
            background-color: #dff0d8;
            color: #3c763d;
        }

        .error {
            background-color: #f2dede;
            color: #a94442;
        }
    </style>
</head>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="#">GROUPR</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <?php
          if(isset($_SESSION['email'])){
            echo'<ul class="navbar-nav ml-auto">
              <li class="nav-item">
                <a class="nav-link" href="dashboard.php">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#" id="create-event-link">Create Event</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="myEvents.php">My Events</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="logout.php">Logout</a>;
              </li>
            </ul>';
          }else{
            echo'<ul class="navbar-nav ml-auto">
              <li class="nav-item">
                <a class="nav-link" href="index.php">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="login.php">Create Event</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="login.php">My Events</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="login.php">Login</a>;
              </li>
            </ul>';
          }
        ?>
        
    </div>
  </nav>
<div class="modal" id="create-event-modal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Create Event</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="createEvent.php" method="POST">
                    <div class="form-group">
                        <label for="event-name">Event Name:</label>
                        <input type="text" class="form-control" id="event-name" name="event-name" required>
                    </div>
                    <div class="form-group">
                        <label for="event-description">Event Description:</label>
                        <textarea class="form-control" id="event-description" name="event-description" required></textarea>
                    </div>
                    <div class="form-group">
                        <label for="date">Event Date:</label>
                        <input type="date" class="form-control" id="date" name="date" required>
                    </div>
                    <div class="form-group">
                        <label for="time">Event Time:</label>
                        <input type="time" class="form-control" id="time" name="time" required>
                    </div>
                    <div class="form-group">
                        <label for="location">Event Location:</label>
                        <input type="text" class="form-control" id="location" name="location" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Create</button>
                </form>
            </div>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function() {
        // Show the Create Event modal when the link is clicked
        $("#create-event-link").click(function() {
            $("#create-event-modal").modal("show");
        });
    });
</script>