<?php 
    include("connection.php");
    include("navbar.php");

    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <title>Services - Online Quiz System</title>
    <link rel="stylesheet" href="style.css">
    <style>
        /* Styling for the services page */
        /* body {
            background: linear-gradient(to right, #b2dfdb, #80cbc4);
            color: #333;
            text-align: center;
            font-family: Arial, sans-serif;
        } */
        .services-container {
            max-width: 700px;
            margin: 50px auto;
            background-color: #ffffff;
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0px 0px 15px rgba(0, 0, 0, 0.2);
        }
        h1 {
            font-size: 36px;
            color: #00796b;
        }
        p {
            font-size: 20px;
            color: #004d40;
            margin-bottom: 20px;
        }
        a.button {
            display: inline-block;
            padding: 15px 30px;
            background-color: #00796b;
            color: white;
            border: none;
            border-radius: 8px;
            font-size: 20px;
            cursor: pointer;
            text-decoration: none;
            transition: background-color 0.3s;
        }
        a.button:hover {
            background-color: #004d40;
        }
        .navbar {
            background-color: #00796b;
            padding: 10px;
            text-align: center;
        }
        .navbar a {
            color: white;
            margin: 0 15px;
            text-decoration: none;
            font-size: 18px;
        }
        .navbar a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <!-- <div class="navbar">
        <a href="index.html">Home</a>
        <a href="signup.html">Sign Up</a>
        <a href="login.html">Login</a>
        <a href="services.html">Services</a>
    </div> -->

    <div class="services-container">
        <h1>Our Services</h1>
        <p>Welcome to our online quiz system. Here are the services we offer:</p>
        <p>1. <strong>Interactive Quizzes:</strong> A variety of quizzes related to computers and technology.</p>
        <p>2. <strong>Timed Challenges:</strong> Test your knowledge under time constraints.</p>
        <p>3. <strong>Detailed Results:</strong> Get detailed results and insights after completing each quiz.</p>
        <p>4. <strong>User Management:</strong> Create and manage your account with ease.</p>
        <p>5. <strong>Secure Login:</strong> Enjoy a secure and seamless login experience.</p>
        <a href="index.php" class="button">Back to Home</a>
    </div>
</body>
</html>
