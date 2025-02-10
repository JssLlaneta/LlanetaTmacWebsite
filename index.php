<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tmac Sportswear and Printing</title>
    <link rel="stylesheet" href="styles.css">
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
                <a href="login.php" class="btn" id="login">Login</a><li>
                <a href="signup.php" class="btn" id="signup">Signup</a></li>
                <a href="logout.php">Logout</a>
    </nav>
    <!-- Hero Section -->
    <main class="hero">
        <div class="hero-content">
            <video autoplay muted loop id="video">
                <source src="video/vidtmac.mp4" type="video/mp4">
            </video>
            <img src="img/banner.jpg" alt="Tmac Banner">
            <p>Your one-stop shop for all Clothing Printing Services</p>
            <a href="bookconsultation.php" class="btn">CANVAS NOW!</a>
        </div>
    </main>

    <!-- About Section -->
    <section id="about" class="section">
        <div class="content">
            <h2>About Us</h2>
            <p>We provide the latest designs at unbeatable prices.</p>
            <p>Ready to take your game to the next level this summer? Whether you’re hitting the court, field, or track, our premium sportswear is designed to keep you cool, comfortable, and performing at your peak.<br> 
                <strong>🔥 Breathable Fabrics</strong><br> 
                <strong>🔥 Moisture-Wicking Technology</strong><br>  
                <strong>🔥 Flexible Fit for Maximum Movement</strong><br>  
                <strong>🔥 Any event's Uniforms</strong><br>
                <strong>🔥 Branded Printer And Presser</strong><br>
                Make every play count in gear that works as hard as you do. Our shop is open daily and get ready to dominate your summer league! 🏅🏆</p>
        </div> 
        <div class="row">
            <div class="column">
                <img src="img/team1.jpg" alt="Product Image 1">
            </div>
            <div class="column">
                <img src="img/team2.jpg" alt="Product Image 2">
            </div>
            <div class="column">
                <img src="img/team3.jpg" alt="Product Image 3">
            </div>
        </div>
    </section>
    <!-- Contact Section -->
    <section id="contact" class="section">
        <div class="content">
            <h2>Contact Us</h2>
            <p>Have questions? Get in touch via the form below or email us at jssllaneta@gmail.com.</p>
        </div>
        <form class="contact-form">
            <input type="text" placeholder="Your Name" required>
            <input type="email" placeholder="Your Email" required>
            <input type="number" placeholder="Your Contact Number" required>
            <textarea placeholder="Your Message" rows="5" required></textarea>
            <button type="submit" class="btn">Send</button>
        </form>
    </section>

    <!-- Footer -->
    <footer>
        <div class="footer">
            <p>Tmac Sportswear and Printing Services 2025</p>
        </div>
    </footer>
    
    <script src="scripts.js"></script>
</body>
</html>