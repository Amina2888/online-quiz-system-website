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
    
    <title>Contact Us - Online Quiz System</title>
    <link rel="stylesheet" href="style.css">
    <style>
        /* Styling for the contact us page */
        /* body {
            background: linear-gradient(to right, #cfe9e7, #b2dfdb);
            color: #333;
            text-align: center;
            font-family: Arial, sans-serif;
        } */
        /* .navbar {
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
        } */
        .contact-container {
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
            font-size: 18px;
            color: #004d40;
            margin-bottom: 20px;
        }
        form {
            margin-top: 20px;
        }
        input, textarea {
            padding: 10px;
            margin: 10px 0;
            border-radius: 8px;
            border: 1px solid #00796b;
            width: 100%;
            box-sizing: border-box;
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
    <!-- <div class="navbar">
        <a href="index.html">Home</a>
        <a href="signup.html">Sign Up</a>
        <a href="login.html">Login</a>
        <a href="services.html">Services</a>
        <a href="contactus.html">Contact Us</a>
    </div> -->

    <div class="contact-container">
        <h1>We'd Love to Hear from You!</h1>
        <p>Thank you for visiting our Online Quiz System! We’re here to assist you with any questions, feedback, or concerns you might have. Whether you need support, have a suggestion, or just want to say hello, feel free to reach out to us using the form below.</p>
        <p>Your input is invaluable in helping us improve and provide the best experience possible. We strive to respond to all inquiries as quickly as possible, so please be assured that your message is important to us.</p>
        <p>We look forward to connecting with you!</p>

        <form id="contactForm">
            <input type="text" name="name" id="name" placeholder="Your Name" required>
            <input type="email" name="email" id="email" placeholder="Your Email" required>
            <textarea name="message" id="message" rows="5" placeholder="Your Message" required></textarea>
            <button type="submit" class="button">Send Message</button>
        </form>
    </div>

    <script>
        document.getElementById('contactForm').addEventListener('submit', function(event) {
            event.preventDefault(); // Prevent the default form submission

            // Get form data
            const name = document.getElementById('name').value;
            const email = document.getElementById('email').value;
            const message = document.getElementById('message').value;

            // Basic form validation
            if (name && email && message) {
                // Redirect to thank you page
                window.location.href = 'send_message.html';
            } else {
                alert('Please fill out all fields.');
            }
        });
    </script>
</body>
</html>
