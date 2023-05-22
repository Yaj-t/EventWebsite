if ($_SERVER["REQUEST_METHOD"] == "POST") {

session_start();
// Retrieve form data
$email = $_POST["email"];
$password = $_POST["password"];

// Include database configuration
include 'config.php';

// Prepare SQL statement to select user
$sql = "SELECT * FROM users WHERE email='$email'";
$result = $conn->query($sql);

// Check if user exists
if ($result->num_rows == 1) {
    // Fetch user data
    $row = $result->fetch_assoc();
    // Verify the password
    if (password_verify($password, $row['password'])) {
        // Set session variables
        $_SESSION['email'] = $email;
        $_SESSION['user_id'] = $row['user_id'];
        // Redirect to dashboard    
        header("Location: dashboard.php");
        exit;
    } else {
        // Display error message for invalid login
        echo '<div class="alert alert-danger">Invalid email or password. Please try again.</div>';
    }
} else {
    // Display error message for invalid login
    echo '<div class="alert alert-danger">Invalid email or password. Please try again.</div>';
}

// Close database connection
$conn->close();
}


<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <style>
        body {
            background-color: #f8f9fa;
            background-image: url("eventPic.jpg");
            background-repeat: no-repeat;
            background-size: cover;
        }

        .container {
            max-width: 400px;
            margin: 0 auto;
            padding-top: 100px;
        }

        .card {
            border: none;
            border-radius: 10px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }

        .card-header {
            background-color: #f8f9fa;
            border-bottom: none;
            text-align: center;
            padding: 20px 0;
        }

        .card-title {
            margin-bottom: 0;
        }

        .card-body {
            padding: 20px;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .btn-login {
            background-color: #007bff;
            border-color: #007bff;
            color: #fff;
        }

        .btn-login:hover {
            background-color: #0069d9;
            border-color: #0062cc;
            color: #fff;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Login</h4>
            </div>
            <div class="card-body">
                <form action="login.php" method="POST">
                    <div class="form-group">
                        <label for="email">Email:</label>
                        <input type="email" class="form-control" id="email" name="email" required>
                    </div>
                    <div class="form-group">
                        <label for="password">Password:</label>
                        <input type="password" class="form-control" id="password" name="password" required>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary btn-login">Login</button>
                    </div>
                    <div class="login-link">
                        <p>Don't have an account? <a href="signup.php">Sign up</a></p>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>

