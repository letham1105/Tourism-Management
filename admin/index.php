<?php
session_start();
include('includes/config.php');
if(isset($_POST['login']))
{
$uname=$_POST['username'];
$password=md5($_POST['password']);
$sql ="SELECT UserName,Password FROM admin WHERE UserName=:uname and Password=:password";
$query= $dbh -> prepare($sql);
$query-> bindParam(':uname', $uname, PDO::PARAM_STR);
$query-> bindParam(':password', $password, PDO::PARAM_STR);
$query-> execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
if($query->rowCount() > 0)
{
$_SESSION['alogin']=$_POST['username'];
echo "<script type='text/javascript'> document.location = 'dashboard.php'; </script>";
} else{
	
	echo "<script>alert('Invalid Details');</script>";

}

}

?>

<!DOCTYPE HTML>
<html>
<head>
<title>TMS | Admin Sign in</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
<style>
    body {
        font-family: 'Roboto', sans-serif;
        background: #fff;
        margin: 0;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
        color: #333;
    }

    .main-wthree {
        width: 100%;
        max-width: 400px;
        padding: 20px;
        background: #fff;
        border-radius: 10px;
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
    }

    .sin-w3-agile {
        text-align: center;
    }

    .sin-w3-agile h2 {
        margin-bottom: 20px;
        font-size: 24px;
        font-weight: 700;
        color: #56ab2f;
    }

    .sin-w3-agile form {
        margin-top: 20px;
    }

    .username, .password-agileits {
        margin-bottom: 20px;
        text-align: left;
    }

    .username span, .password-agileits span {
        font-size: 16px;
        margin-bottom: 8px;
        display: inline-block;
        color: #333;
    }

    input[type="text"], input[type="password"] {
        width: 90%;
        padding: 10px;
        border: 1px solid #ccc;
        border-radius: 5px;
        font-size: 14px;
        background: #f9f9f9;
        color: #333;
    }

    input[type="text"]:focus, input[type="password"]:focus {
        outline: none;
        border-color: #56ab2f;
        background: #fff;
    }

    .login-w3 {
        margin-top: 20px;
    }

    input[type="submit"] {
        width: 100%;
        padding: 10px;
        border: none;
        border-radius: 5px;
        font-size: 16px;
        background: #56ab2f;
        color: #fff;
        cursor: pointer;
        transition: background 0.3s ease;
    }

    input[type="submit"]:hover {
        background: #469c27;
    }

    .back a, a {
        text-decoration: none;
        color: #56ab2f;
        font-size: 14px;
    }

    .back {
        margin-top: 20px;
    }

    a:hover {
        text-decoration: underline;
    }
</style>
</head>
<body>
    <div class="main-wthree">
        <div class="sin-w3-agile">
            <h2>Sign In</h2>
            <form method="post">
                <div class="username">
                    <span class="username">User Name:</span>
                    <input type="text" name="username" class="name" placeholder="Enter your username" required>
                </div>
                <div class="password-agileits">
                    <span class="username">Password:</span>
                    <input type="password" name="password" class="password" placeholder="Enter your password" required>
                </div>
                <div>
                    <a href="forgot-password.php">Forgot Password?</a>
                </div>
                <div class="login-w3">
                    <input type="submit" class="login" name="login" value="Sign In">
                </div>
            </form>
            <div class="back">
                <a href="../index.php">Back to home</a>
            </div>
        </div>
    </div>
</body>
</html>
