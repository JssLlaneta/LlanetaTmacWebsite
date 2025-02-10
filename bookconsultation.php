<?php
session_start();
if (!isset($_SESSION["user_id"])) {
    header("Location: login.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book Consultation</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            scroll-behavior: smooth;
            background-image: url("img/newbg.png");
        }

        
        .navbar {
            position: sticky;
            top: 0;
            width: 100%;
            background-color: black;
            opacity: 90%;
            color: white;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 10px 20px;
            z-index: 1000;
        }

        .navbar img {
            height: 80px;
            width: 100px;
        }

        .navbar a {
            color: white;
            text-align: center;
            padding: 10px 20px;
            text-decoration: none;
        }

        .navbar a:hover {
            background-color: orangered;
        }

        .navbar .btn {
            padding: 10px 20px;
            border-radius: 30px;
            background-color: orangered;
            color: white;
            border: none;
            cursor: pointer;
        }

        .navbar .btn:hover {
            background-color: #e68a00;
        }

        .container {
            display: flex;
            justify-content: center;
            gap: 20px;
            width: 80%;
            margin: 50px auto;
        }

        .form-container {
            background-color: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 50%;
        }

        .form-container label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }

        .form-container input {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        .form-container input:hover {
            border-color: #888;
        }

        .form-container button {
            padding: 10px 20px;
            background-color: orangered;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .form-container button:hover {
            background-color: #e68a00;
        }

        .advertisement {
            background-color: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 30%;
            text-align: center;
        }

        .advertisement img {
            max-width: 100%;
            border-radius: 10px;
        }

        .map-container {
            margin-top: 20px;
            text-align: center;
        }

        .map-container h2 {
            margin-bottom: 20px;
            color: white;
        }

        .map-container .map-wrapper {
            position: relative;
            width: 75%;
            padding-bottom: 50%;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            margin-bottom: 50px;
            display: -webkit-inline-box;
        }
        

        .map-container iframe {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            border: 0;
        }
    </style>
</head>
<body>
    <header>
        <nav class="navbar">
            <img src="img/logotmac.jpg" class="logo" alt="Tmac Logo">
                <a href="index.php">Home</a></li>
                <a href="products.php">Products</a></li>
                <a href="bookconsultation.php">Book Consultation</a></li>
                <a href="uploaddesign.php">Upload Design</a></li>
                <a href="aboutus.php">About Us</a></li>
                <a href="logout.php">Logout</a>
            
        </nav>
    </header>

    <div class="container">
        <div class="form-container">
            <h2>How to Book a Consultation</h2>
            <p>Please fill out the form below to book a consultation with us.</p>
            <form action="submit_consultation.php" method="POST">
                <label for="name">Full Name:</label>
                <input type="text" id="name" name="name" required><br>
                <label for="phone">Phone Number:</label>
                <input type="tel" id="phone" name="phone" required><br>

                <label for="date">Preferred Date:</label>
                <input type="date" id="date" name="date" required><br>

                <label for="time">Preferred Time:</label>
                <input type="time" id="time" name="time" required><br>

                <button type="submit">Book Consultation</button>
            </form>
        </div>
        <div class="advertisement">
            <h2>Special Offer!</h2>
            <p>Get 20% off on your first consultation. Consult us now!</p>
            <img src="img/advertise.jpg" alt="Advertisement">
        </div>
    </div>

    <div class="map-container">
        <h2>Visit Our Physical Store</h2>
        <div class="map-wrapper">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3153.019282509073!2d144.9630579153169!3d-37.81410797975195!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6ad642af0f11fd81%3A0xf577d8b1f4b0b1c!2sFederation%20Square!5e0!3m2!1sen!2sau!4v1633072800000!5m2!1sen!2sau" allowfullscreen="" loading="lazy"></iframe>
        </div>
    </div>
</body>
</html>