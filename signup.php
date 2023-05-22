<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $name = $_POST["name"];
    $email = $_POST["email"];
    $password = $_POST["password"];

    $errors = [];
    // Validate form data
    if (empty($name)) {
        $errors[] = "Name is required.";
    }

    if (empty($email)) {
        $errors[] = "Email is required.";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Invalid email format.";
    }

    if (empty($password)) {
        $errors[] = "Password is required.";
    } elseif (strlen($password) < 6) {
        $errors[] = "Password must be at least 6 characters long.";
    }

    // Display error messages if any
    if (!empty($errors)) {
        echo '<div class="alert alert-danger">';
        echo '<ul>';
        foreach ($errors as $error) {
            echo '<li>' . $error . '</li>';
        }
        echo '</ul>';
        echo '</div>';
    } else {
        include 'config.php';
        
        // Check if email already exists
        $existingEmailQuery = "SELECT * FROM users WHERE email='$email'";
        $existingEmailResult = $conn->query($existingEmailQuery);

        if ($existingEmailResult->num_rows > 0) {
            echo '<div class="alert alert-danger">Email already exists. Please choose a different email.</div>';
        } else {
            // Hash the password
            $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

            // Insert user data into the database with the hashed password
            $insertQuery = "INSERT INTO users (name, email, password) VALUES ('$name', '$email', '$hashedPassword')";

            if ($conn->query($insertQuery) === TRUE) {
                echo '<div class="alert success">';
                echo "Signup successful! You can now <a href='login.php'>login</a> to your account.";
                echo '</div>';  
            } else {
                echo "Error: " . $insertQuery . "<br>" . $conn->error;
            }
        }

        $conn->close();
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Signup</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <style>
        body {
            background-color: #f8f9fa;
            background-image: url("eventPic.jpg");
            background-repeat: no-repeat;
            background-size: cover;
        }

        .signup-container {
            max-width: 400px;
            margin: 0 auto;
            padding: 20px;
            background-color: #ffffff;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            margin-top: 100px;
        }

        .signup-container h2 {
            text-align: center;
            margin-bottom: 30px;
        }

        .signup-container .form-control {
            border-radius: 2px;
        }

        .signup-container .btn {
            font-weight: 600;
            width: 100%;
        }

        .signup-container .login-link {
            text-align: center;
            margin-top: 10px;
        }

        .error {
            color: red;
            font-weight: bold;
            margin-bottom: 10px;
        }
        .success {
            padding: 20px;
            background-color: #dff0d8;
            color: #3c763d;
            border: 1px solid #d6e9c6;
            border-radius: 4px;
            margin-bottom: 20px;
        }

    </style>
</head>
<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="signup-container col-md-6">
                <h2>Sign Up</h2>
                <form action="signup.php" method="POST">
                    <div class="form-group">
                        <input type="text" class="form-control" name="name" placeholder="Name" required>
                    </div>
                    <div class="form-group">
                        <input type="email" class="form-control" name="email" placeholder="Email" required>
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" name="password" placeholder="Password" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Sign Up</button>
                    <div class="login-link">
                        <p>Already have an account? <a href="login.php">Log in</a></p>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
