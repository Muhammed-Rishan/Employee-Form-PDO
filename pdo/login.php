<?php 
session_start(); // start session
$error_message = '';

if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    if ($username == 'admin' && $password == 'password') {
        $_SESSION['username'] = $username;
        header('Location: dashboard.php'); 
         exit;
    } else {
        $error_message = "Invalid username or password";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Login</title>
</head>
<body>
<h1>Login Form</h1>
<form method="POST" action="login.php">
<label for="username">Username:</label>
<input type="text" id="username" name="username">
<br><br>
<label for="password">Password:</label>
<input type="password" id="password" name="password">
<br><br>
<input type="submit" name="submit" value="Login">
<span style="color: red;"><?php echo $error_message; ?></span> 
</form>
</body>
</html>
<style>
        body {
            font-family: Arial, sans-serif;
        }
        
        h1 {
            text-align: center;
            margin-top: 50px;
        }
        
        form {
            max-width: 400px;
            margin: 0 auto;
        }
        
        label {
            display: block;
            margin-bottom: 10px;
        }
        
        input[type="text"],
        input[type="password"] {
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            width: 100%;
            box-sizing: border-box;
        }
        
        input[type="submit"] {
            background-color: #4CAF50;
            color: #fff;
            border: none;
            border-radius: 5px;
            padding: 10px 20px;
            cursor: pointer;
            margin-top: 20px;
        }
        
        input[type="submit"]:hover {
            background-color: #3e8e41;
        }
        
        .error-message {
            color: red;
            margin-top: 10px;
        }
    </style>

