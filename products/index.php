<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Cake</title>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="../assets/style.css" />
    <link rel="stylesheet" href="../assets/font.css" />
    <link rel="stylesheet" href="../assets/grid.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <!-- Navbar Section -->
    <nav class="navbar-top inter-regular">
        <div class="container">
            <div class="logo">
                <img src="../assets/image/Logo.png" alt="" />
            </div>
            <div class="menu">
                <ul>
                    <li><a href="../#home">Home</a></li>
                    <li><a href="../#about-us">About Us</a></li>
                    <li><a href="../#catalog">Catalog</a></li>
                    <li><a href="../#contact-us">Contact Us</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <nav class="navbar-bottom inter-regular">
        <div class="container">
            <div class="items">
                <a href="../#home" class="text-center">
                    <i class="fas fa-home    "></i>
                    <span>Home</span>
                </a>
            </div>
            <div class="items">
                <a href="../#about-us" class="text-center">
                    <i class="fab fa-dashcube    "></i>
                    <span>About Us</span>
                </a>
            </div>
            <div class="items">
                <a href="../#catalog" class="text-center">
                    <i class="fas fa-tags    "></i>
                    <span>Catalog</span>
                </a>
            </div>
            <div class="items">
                <a href="../#contact-us" class="text-center">
                    <i class="fas fa-phone    "></i>
                    <span>Contact Us</span>
                </a>
            </div>
        </div>
    </nav>
    <!-- End Navbar Section -->

    <!-- Section Produk Detail -->
    <div class="product-detail inter-regular" id="product-detail">
        <div class="container">
            <div class="rows row-2" style="align-items: center;">
                <div id="image" class="image-container">
                </div>
                <div class="description">
                    <h2 id="title">
                        </h1>
                        <h3 id="price"></h3>
                        <p id="description"></p>
                        <p id="rate_bestSeller"></p>
                        <br />
                        <a href="" id="sent-message" class="inter-semiBold">Pesan sekarang</a>
                </div>
            </div>
        </div>
    </div>
    <!-- End Section Product Detail -->

    <!-- Footer Section -->
    <footer class="footer" id="footer">
        <div class="container text-center">
            <div class="social-icon">
                <h2><i class="fa-brands fa-twitter"></i></h2>
                <h2><i class="fa-brands fa-instagram"></i></h2>
                <h2><i class="fa-brands fa-youtube"></i></h2>
                <h2><i class="fa-brands fa-facebook"></i></h2>
            </div>
            <p class="inter-regular">Copyright 2024 - Kelompok Delight Bakery</p>
        </div>
    </footer>
    <!-- End Footer Section -->

    <!-- ini sebenarnya untuk membuat footer agar keliatan dan agak ke atas -->
    <div class="paddingers"></div>
</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/js/all.min.js" integrity="sha512-u3fPA7V8qQmhBPNT5quvaXVa1mnnLSXUep5PS1qo5NRzHwG19aHmNJnj1Q8hpA/nBWZtZD4r4AX6YOt5ynLN2g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="../assets/products.js"></script>

</html>