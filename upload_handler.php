<?php
// File upload handling
$uploadDir = "uploads/";
if (!is_dir($uploadDir)) {
    mkdir($uploadDir, 0777, true);
}

$uploadSuccess = false;
if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_FILES["design_file"])) {
    $fileName = basename($_FILES["design_file"]["name"]);
    $targetFilePath = $uploadDir . $fileName;

    // Allow only image files
    $fileType = pathinfo($targetFilePath, PATHINFO_EXTENSION);
    $allowedTypes = ['jpg', 'jpeg', 'png', 'gif'];

    if (in_array(strtolower($fileType), $allowedTypes)) {
        if (move_uploaded_file($_FILES["design_file"]["tmp_name"], $targetFilePath)) {
            $uploadSuccess = true;
        } else {
            $uploadError = "Error uploading the file. Please try again.";
        }
    } else {
        $uploadError = "Only image files (JPG, JPEG, PNG, GIF) are allowed.";
    }
}

// Fetch all uploaded images
$uploadedImages = array_diff(scandir($uploadDir), array('..', '.'));

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload Design - Gallery</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            background-image: url("img/newbg.png");
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
            text-align: center;
        }

        .container {
            width: 50%;
            height: auto;
            margin: auto;
            padding: 20px;
            background-color: white;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }

        h1 {
            color: #333;
            margin-bottom: 20px;
        }

        .message {
            color: green;
            margin-bottom: 10px;
        }

        .error {
            color: red;
            margin-bottom: 10px;
        }

        .gallery {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 20px;
            margin-top: 20px;
        }

        .image-card {
            position: relative;
            overflow: hidden;
            border-radius: 8px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.15);
        }

        .image-card img {
            width: 50%;
            height: auto;
            margin: auto;
            border-radius: 8px;
        }

        button {
            padding: 10px 20px;
            margin-top: 20px;
            border: none;
            background-color: #007bff;
            color: white;
            cursor: pointer;
            border-radius: 5px;
        }

        button:hover {
            background-color: orangered;
        }

        .return-btn {
            margin-top: 30px;
            background-color: #4CAF50;
            color: white;
        }

        .return-btn:hover {
            background-color: orangered;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Uploaded Designs</h1>

        <?php if ($uploadSuccess): ?>
            <p class="message">File uploaded successfully!</p>
        <?php elseif (isset($uploadError)): ?>
            <p class="error"><?php echo $uploadError; ?></p>
        <?php endif; ?>

        <div class="gallery">
            <?php if (!empty($uploadedImages)): ?>
                <?php foreach ($uploadedImages as $image): ?>
                    <div class="image-card">
                        <img src="<?php echo $uploadDir . $image; ?>" alt="Uploaded Design">
                    </div>
                <?php endforeach; ?>
            <?php else: ?>
                <p>No uploaded designs available.</p>
            <?php endif; ?>
        </div>

        <button onclick="window.location.href='index.php'" class="return-btn">Return to Homepage</button>
    </div>
</body>
</html>
