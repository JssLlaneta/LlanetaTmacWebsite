<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us</title>

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
/* About Us Section */
.about {
    padding: 50px;
    background-color: #f9f9f9;
    font-family: Arial, sans-serif;
}

.about-content {
    text-align: center;
    margin-bottom: 30px;
}

.about-content h2 {
    font-size: 2.5em;
    color: #333;
    margin-bottom: 20px;
}

.about-content p {
    font-size: 1.2em;
    color: #666;
    line-height: 1.6;
    max-width: 800px;
    margin: 0 auto;
}

.owner {
    display: flex;
    flex-direction: column;
    align-items: center;
    text-align: center;
}

.owner-photo {
    width: 200px;
    height: auto;
    border-radius: 50%;
    margin-bottom: 20px;
}

.owner h3 {
    font-size: 2em;
    color: #333;
    margin-bottom: 10px;
}

.owner p {
    font-size: 1.1em;
    color: #666;
    line-height: 1.6;
    max-width: 600px;
    margin: 0 auto;
}
</style>
</head>
<body>
    <!-- Sticky Navbar -->
    <nav class="navbar">
        <img src="img/logotmac.jpg" class="logo" alt="Tmac Logo">
                <a href="index.php">Home</a></li>
                <a href="products.php">Products</a></li>
                <a href="bookconsultation.php">Book Consultation</a></li>
                <a href="uploaddesign.php">Upload Design</a></li>
                <a href="aboutus.php">About Us</a></li>
                <a href="logout.php">Logout</a>
            
        
    </nav>

    <!-- About Us Section -->
    <main class="about">
        <div class="about-content">
            <h2>About Us</h2>
            <p>Established in 2010, Tmac Sportswear and Printing is a family-owned business that specializes in custom clothing printing services. We offer a wide range of services including screen printing, embroidery, and direct-to-garment printing. Our team of experienced designers and printers are dedicated to providing high-quality products and exceptional customer service. Whether you need custom t-shirts for your business, sports team, or special event, we have you covered. Contact us today to learn more about our services and get started on your next project!</p>
        </div>
        <div class="owner">
            <img src="img/boss.jpg" class="owner-photo" alt="Owner Photo">
            <h3>Meet Our Founder</h3>
            <p>John Doe, the founder of Tmac Sportswear and Printing, has over 20 years of experience in the printing and apparel industry. With a passion for quality and customer satisfaction, John started this company to provide top-notch custom printing services to businesses and individuals alike. His expertise and dedication have been the driving force behind the success of Tmac Sportswear and Printing.</p>
        </div>
        </main>
    </body>
</html>