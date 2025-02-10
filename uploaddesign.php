<?php

session_start();
if (!isset($_SESSION["user_id"])) {
    header("Location: login.php");
    exit;
}

// Database connection settings
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "tmac_consultation";

// Create a connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch all consultations
$sql = "SELECT id, name, phone, date, time FROM consultations ORDER BY submission_date DESC";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload Design</title>
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
            
            background-color: white;
            width: 50%;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            margin: auto;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 20px;
        }

        .form-section, .table-section {
            background-color: #ffffff;
            border-radius: 10px;
            padding: 20px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        h1, h2 {
            color: #333;
            text-align: center;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 10px;
        }

        th, td {
            padding: 12px;
            border: 1px solid #ddd;
            text-align: center;
        }

        th {
            background-color: #f2f2f2;
        }

        input[type="file"], button {
            padding: 10px;
            margin-top: 10px;
            width: 100%;
            border: none;
            border-radius: 5px;
            background-color: #007bff;
            color: white;
            cursor: pointer;
        }

        button:hover {
            background-color: orangered;
        }

        /* Navbar Styling */
        .navbar {
            display: flex;
            justify-content: space-between;
            padding: 10px 20px;
            background-color: black;
            color: white;
            margin-bottom: 20px;
            border-radius: 5px;
        }

        .navbar a {
            color: white;
            text-decoration: none;
            margin: 0 10px;
        }

        .navbar img {
            height: 50px;
            width: auto;
        }

        @media (max-width: 768px) {
            table {
                font-size: 12px;
            }
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
        <div class="table-section">
            <h1>Consultation Records</h1>
            <?php if ($result->num_rows > 0): ?>
                <table>
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Full Name</th>
                            <th>Phone</th>
                            <th>Date</th>
                            <th>Time</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php while ($row = $result->fetch_assoc()): ?>
                            <tr>
                                <td><?php echo $row["id"]; ?></td>
                                <td><?php echo $row["name"]; ?></td>
                                <td><?php echo $row["phone"]; ?></td>
                                <td><?php echo $row["date"]; ?></td>
                                <td><?php echo $row["time"]; ?></td>
                            </tr>
                        <?php endwhile; ?>
                    </tbody>
                </table>
            <?php else: ?>
                <p>No consultations found.</p>
            <?php endif; ?>
        </div>

        <div class="form-section">
            <h2>Upload Design</h2>
            <form action="upload_handler.php" method="POST" enctype="multipart/form-data">
                <label for="design_file">Choose a design file to upload:</label>
                <input type="file" id="design_file" name="design_file" required>

                <button type="submit">Upload Design</button>
            </form>
        </div>
    </div>

    <?php $conn->close(); ?>
</body>
</html>
