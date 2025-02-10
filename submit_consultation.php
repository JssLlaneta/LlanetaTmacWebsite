<?php
// Enable error reporting for debugging
error_reporting(E_ALL);
ini_set('display_errors', 1);

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

$name = $phone = $date = $time = "";
$message = "";

// Handle form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $conn->real_escape_string($_POST['name']);
    $phone = $conn->real_escape_string($_POST['phone']);
    $date = $conn->real_escape_string($_POST['date']);
    $time = $conn->real_escape_string($_POST['time']);

    $sql = "INSERT INTO consultations (name, phone, date, time) VALUES ('$name', '$phone', '$date', '$time')";

    if ($conn->query($sql) === TRUE) {
        $message = "Your consultation has been successfully booked!";
    } else {
        $message = "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consultation Confirmation</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-image: url("img/newbg.png");
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            margin: 0;
        }
        .container {
            background-color: #ffffff;
            padding: 30px;
            max-width: 500px;
            width: 100%;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            text-align: center;
        }
        h1 {
            color: #333;
        }
        .message {
            margin: 20px 0;
            padding: 15px;
            background-color: #e3fcec;
            color: #2e7d32;
            border: 1px solid #c8e6c9;
            border-radius: 5px;
        }
        table {
            width: 100%;
            margin-top: 20px;
            border-collapse: collapse;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 10px;
            text-align: left;
        }
        th {
            background-color: #f4f4f4;
        }
        .btn-container {
            margin-top: 20px;
        }
        .btn {
            padding: 10px 20px;
            background-color: orangered;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            text-decoration: none;
            font-size: 14px;
        }
        .btn:hover {
            background-color: #d45529;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Consultation Confirmation</h1>
        
        <?php if (!empty($message)): ?>
            <div class="message"><?php echo $message; ?></div>
        <?php endif; ?>

        <h2>Your Submitted Details</h2>
        <table>
            <tr>
                <th>Full Name</th>
                <td><?php echo htmlspecialchars($name); ?></td>
            </tr>
            <tr>
                <th>Phone Number</th>
                <td><?php echo htmlspecialchars($phone); ?></td>
            </tr>
            <tr>
                <th>Preferred Date</th>
                <td><?php echo htmlspecialchars($date); ?></td>
            </tr>
            <tr>
                <th>Preferred Time</th>
                <td><?php echo htmlspecialchars($time); ?></td>
            </tr>
        </table>

        <div class="btn-container">
            <a href="uploaddesign.php" class="btn">Return to Homepage</a>
        </div>
    </div>
</body>
</html>
