<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products</title>
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
            
        p {
            color: white;
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
        h2 {
            font-size: 2rem;
            margin-bottom: 1rem;
            color: white;
        }

        .product-image:hover {
            transform: scale(1.1);
            transition: transform 0.3s ease;
            cursor: pointer;
        }

        .product-image {
            transition: transform 0.3s ease;
        }

        .product-image:active {
            transform: scale(1.2);
        }

        .content {
            font-size: medium;
            margin: auto;
            text-align: center;
        }

        .content h2 {
            text-align: center;
            color: white;
        }

        .section {
            padding: 2rem;
            text-align: center;
        }

        .btn {
            display: inline-block;
            padding: 1rem 1rem;
            background-color: orangered;
            color: white;
            text-decoration: none;
            border-radius: 5px;
            margin-top: 1rem;
        }

        .btn:hover {
            background-color: green;
        }

        .product-gallery {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 1rem;
            margin-top: 2rem;
        }

        .product-item {
            width: 100%;
            max-width: 300px;
            text-align: center;
        }

        .product-image {
            width: 100%;
            height: auto;
            border-radius: 5px;
        }

        .product-description {
            margin-top: 10px;
            font-size: 1rem;
            color: #333;
        }

        .container {
            position: relative;
            max-width: 1000px;
            margin: auto;
        }

        .mySlides {
            display: none;
        }

        img {
            vertical-align: middle;
        }


        .numbertext {
            color: #f2f2f2;
            font-size: 12px;
            padding: 8px 12px;
            position: absolute;
            top: 0;
        }

        .row {
            display: flex;
            justify-content: center;
            margin-top: auto;
        }

        .column1 {
            flex: 16.66%;
            max-width: 16.66%;
            padding: 0 4px;
        }

        .column1 img {
            margin-top: 8px;
            vertical-align: middle;
            width: 100%;
            cursor: pointer;
        }

        .demo {
            opacity: 0.6;
        }

        .active, .demo:hover {
            opacity: 1;
        }

        .gallery {
            border: 1px solid #ccc;
            margin: 10px;
            width: calc(25% - 20px);
            box-sizing: border-box;
            display: table-cell;
            
        }

        .gallery img {
            width: 100%;
            height: auto;
        }

        .desc {
            padding: 15px;
            text-align: center;
            display: table-caption;
            color: white;
        }

        @media screen and (max-width: 800px) {
            .column1 {
                flex: 25%;
                max-width: 25%;
            }
        }

        @media screen and (max-width: 600px) {
            .column1 {
                flex: 50%;
                max-width: 50%;
            }
            .gallery {
                width: 100%;
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
            
        </nav>
    </header>

    <section id="products" class="section">
        <div class="content">
            <h2>Our Products</h2>
            <p>Explore our wide range of different designs, from Uniforms to sports jerseys.</p>
            <a href="#products" class="btn">View All Products</a>
        </div>
        <div class="product-gallery">
            <div class="product-item" onclick="showOtherDesigns('img/hood1.jpg')">
                <img src="img/hood1.jpg" alt="Product 1" class="product-image">
                <div class="product-description">Basketball Warmer Sublimation</div>
            </div>
            <div class="product-item" onclick="showOtherDesigns('img/jersey1.jpg')">
                <img src="img/jersey1.jpg" alt="Product 2" class="product-image">
                <div class="product-description">Basketball Jersey Sublimation</div>
            </div>
            <div class="product-item" onclick="showOtherDesigns('img/riding1.jpg')">
                <img src="img/riding1.jpg" alt="Product 3" class="product-image">
                <div class="product-description">Riding Longsleeve Sublimation</div>
            </div>
        </div>
    </section>

    <section id="slideshow" class="section">
        <h2>Slideshow Gallery</h2>
        <div class="container">
            <div class="mySlides">
                <div class="numbertext">1 / 6</div>
                <img src="img/leb1.jpg" style="width:100%">
            </div>
            <div class="mySlides">
                <div class="numbertext">2 / 6</div>
                <img src="img/leb2.jpg" style="width:100%">
            </div>
            <div class="mySlides">
                <div class="numbertext">3 / 6</div>
                <img src="img/leb3.jpg" style="width:100%">
            </div>
            <div class="mySlides">
                <div class="numbertext">4 / 6</div>
                <img src="img/leb4.jpg" style="width:100%">
            </div>
            <div class="mySlides">
                <div class="numbertext">5 / 6</div>
                <img src="img/leb5.jpg" style="width:100%">
            </div>
            <div class="mySlides">
                <div class="numbertext">6 / 6</div>
                <img src="img/leb6.jpg" style="width:100%">
            </div>

            <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
            <a class="next" onclick="plusSlides(1)">&#10095;</a>

            <div class="row">
                <div class="column1">
                    <img class="demo cursor" src="img/leb1.jpg" style="width:100%" onclick="currentSlide(1)" alt="Slide 1">
                </div>
                <div class="column1">
                    <img class="demo cursor" src="img/leb2.jpg" style="width:100%" onclick="currentSlide(2)" alt="Slide 2">
                </div>
                <div class="column1">
                    <img class="demo cursor" src="img/leb3.jpg" style="width:100%" onclick="currentSlide(3)" alt="Slide 3">
                </div>
                <div class="column1">
                    <img class="demo cursor" src="img/leb4.jpg" style="width:100%" onclick="currentSlide(4)" alt="Slide 4">
                </div>
                <div class="column1">
                    <img class="demo cursor" src="img/leb5.jpg" style="width:100%" onclick="currentSlide(5)" alt="Slide 5">
                </div>
                <div class="column1">
                    <img class="demo cursor" src="img/leb6.jpg" style="width:100%" onclick="currentSlide(6)" alt="Slide 6">
                </div>
            </div>
        </div>
    </section>

    <section id="product-gallery" class="section">
        <div class="gallery">
            <a target="_blank" href="img/hood1.jpg">
                <img src="img/hood1.jpg" alt="Hoodie">
            </a>
            <div class="desc">Sublimation Hoodie Jackets</div>
        </div>
        <div class="gallery">
            <a target="_blank" href="img/jersey1.jpg">
                <img src="img/jersey1.jpg" alt="Basketball Jersey">
            </a>
            <div class="desc">Full Sublimation Basketball Uniforms</div>
        </div>
        <div class="gallery">
            <a target="_blank" href="img/polo1.jpg">
                <img src="img/polo1.jpg" alt="Polo Shirts">
            </a>
            <div class="desc">Sublimation or Honeycomb</div>
        </div>
        <div class="gallery">
            <a target="_blank" href="img/riding.jpg">
                <img src="img/riding.jpg" alt="Riding Sublimation Jersey">
            </a>
            <div class="desc">Aircooled Riding Jersey longsleeves</div>
        </div>
        <div class="gallery">
            <a target="_blank" href="img/shirt1.jpg">
                <img src="img/shirt1.jpg" alt="Sublimation Shirt">
            </a>
            <div class="desc">Sublimation Shirt</div>
        </div>
        <div class="gallery">
            <a target="_blank" href="img/short1.jpg">
                <img src="img/short1.jpg" alt="Mesh Shorts">
            </a>
            <div class="desc">Quality Mesh Shorts</div>
        </div>
    </section>

    <footer>
        <p>&copy; 2023 Your Company Name</p>
    </footer>

    <script>
        let slideIndex = 0;
        showSlides();

        function showSlides() {
            let i;
            let slides = document.getElementsByClassName("mySlides");
            let dots = document.getElementsByClassName("demo");

            for (i = 0; i < slides.length; i++) {
                slides[i].style.display = "none";
            }

            slideIndex++;
            if (slideIndex > slides.length) { slideIndex = 1 }

            for (i = 0; i < dots.length; i++) {
                dots[i].className = dots[i].className.replace(" active", "");
            }

            slides[slideIndex - 1].style.display = "block";
            dots[slideIndex - 1].className += " active";

            setTimeout(showSlides, 2000); // Change image every 2 seconds
        }

        function plusSlides(n) {
            showSlides(slideIndex += n);
        }

        function currentSlide(n) {
            showSlides(slideIndex = n);
        }

        function showOtherDesigns(imageSrc) {
            const productGallery = document.querySelector('.product-gallery');
            productGallery.innerHTML = `
                <div class="product-item">
                    <img src="${imageSrc}" alt="Other Design" class="product-image">
                    <div class="product-description">Other Design Description</div>
                </div>
                <div class="product-item">
                    <img src="img/hood2.jpg" alt="Other Design 1" class="product-image">
                    <div class="product-description">Other Design 1 Description</div>
                </div>
                <div class="product-item">
                    <img src="img/hood3.jpg" alt="Other Design 2" class="product-image">
                    <div class="product-description">Other Design 2 Description</div>
                </div>
                <div class="product-item">
                    <img src="img/hood4.jpg" alt="Other Design 3" class="product-image">
                    <div class="product-description">Other Design 3 Description</div>
                </div>
                <button class="btn" onclick="backToGallery()">Back to Gallery</button>
            `;
        }

        function backToGallery() {
            const productGallery = document.querySelector('.product-gallery');
            productGallery.innerHTML = `
                <div class="product-item" onclick="showOtherDesigns('img/hood1.jpg')">
                    <img src="img/hood1.jpg" alt="Product 1" class="product-image">
                    <div class="product-description">Basketball Warmer Sublimation</div>
                </div>
                <div class="product-item" onclick="showOtherDesigns('img/jersey1.jpg')">
                    <img src="img/jersey1.jpg" alt="Product 2" class="product-image">
                    <div class="product-description">Basketball Jersey Sublimation</div>
                </div>
                <div class="product-item" onclick="showOtherDesigns('img/riding1.jpg')">
                    <img src="img/riding1.jpg" alt="Product 3" class="product-image">
                    <div class="product-description">Riding Longsleeve Sublimation</div>
                </div>
            `;
        }
    </script>
</body>
</html>