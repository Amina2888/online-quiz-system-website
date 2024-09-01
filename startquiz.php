<?php 
    include("connection.php");
    include("navbar.php");

    ?>



<?php
    session_start();
    if(!isset($_SESSION['loggedin']) || isset($_SESSION['loggedin'])!=true){
        header("location:login.php");
        exit;
    }
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <title>Start Quiz - Online Quiz System</title>
    <link rel="stylesheet" href="style.css">

    <style>
      /* Styling for the start quiz page */
      body {
        background: linear-gradient(to right, #b2dfdb, #80cbc4);
        color: #333;
        text-align: center;
        font-family: Arial, sans-serif;
      }
      .startquiz-container {
        max-width: 600px;
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
      .button {
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
      .button:hover {
        background-color: #004d40;
      }
    </style>
  </head>
  <body>
    <div class="startquiz-container">
      <h1>Ready to Start the Quiz?</h1>
      <a href="quiz.html" class="button">Start Quiz</a>
    </div>
  </body>
</html>
