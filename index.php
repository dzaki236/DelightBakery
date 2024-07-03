<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Cake</title>
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="assets/style.css" />
  <link rel="stylesheet" href="assets/font.css" />
  <link rel="stylesheet" href="assets/grid.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
  <!-- Navbar Section -->
  <nav class="navbar-top inter-regular">
    <div class="container">
      <div class="logo">
        <img src="./assets/image/Logo.png" alt="" />
      </div>
      <div class="menu">
        <ul>
          <li><a href="#home">Home</a></li>
          <li><a href="#about-us">About Us</a></li>
          <li><a href="#catalog">Catalog</a></li>
          <li><a href="#contact-us">Contact Us</a></li>
        </ul>
      </div>
    </div>
  </nav>
  <nav class="navbar-bottom inter-regular">
    <div class="container">
      <div class="items">
        <a href="#home" class="text-center">
          <i class="fas fa-home    "></i>
          <span>Home</span>
        </a>
      </div>
      <div class="items">
        <a href="#about-us" class="text-center">
          <i class="fab fa-dashcube    "></i>
          <span>About Us</span>
        </a>
      </div>
      <div class="items">
        <a href="#catalog" class="text-center">
          <i class="fas fa-tags    "></i>
          <span>Catalog</span>
        </a>
      </div>
      <div class="items">
        <a href="#contact-us" class="text-center">
          <i class="fas fa-phone    "></i>
          <span>Contact Us</span>
        </a>
      </div>
    </div>
  </nav>
  <!-- End Navbar Section -->

  <!-- Header / Home Section -->
  <div class="header" id="home">
    <div class="container">
      <div class="rows row-2">
        <h1>Cake’s From The Heart</h1>
        <div class="description">
          <p class="inter-regular">
            Nikmati berbagai pilihan kue lezat dan berkualitas, kami hadir untuk melengkapi setiap momen spesial Anda. Semoga hari Anda semanis kue-kue kami!
          </p>

          <a href="#about-us" class="inter-semiBold">Learn More ></a>
        </div>
      </div>
      <div class="image-background">
        <img src="assets/image/photo-1579255139426-84ab54106ce4.jpeg" alt="" />
      </div>
    </div>
  </div>
  <!-- End Header/Home Section -->

  <!-- About Us Section -->
  <div class="about-us" id="about-us">
    <div class="container">
      <div class="rows row-2">
        <div class="image-container">
          <img src="assets/image/photo-1607478900766-efe13248b125.jpeg" alt="" />
        </div>
        <div class="description">
          <h1>Merubah Rasa Menjadi Suka!</h1>
          <p class="inter-light">
            Berhasil merubah rasa menjadi suka sejak 5 tahun lalu, dalam
            menciptakan sebuah pengalaman rasa yang tak tertandingi lagi dan
            menghadirkan rasa dan suka dalam setiap variant kue dan cookie
            kami.
          </p>
          <br />
          <a href="#catalog" class="inter-semiBold">Lihat Katalog Kami > </a>
        </div>
      </div>
    </div>
  </div>
  <!-- End About Us Section -->

  <!-- Catalog Section -->
  <div class="catalog" id="catalog">
    <div class="container text-center">
      <h1>Catalog</h1>
      <p class="inter-light">
        Kami memiliki beberapa katalog kue yang dapat anda temukan!
      </p>
      <br />
      <div class="category-slider inter-regular">
        <div class="content">
          <a href="./#catalog" class="<?= !isset($_GET['category']) ? 'active' : '' ?>">Best Seller</a>
          <a href="?category=Dessert#catalog" class="<?= isset($_GET['category']) && $_GET['category'] == 'Dessert' ? 'active' : ''; ?>">Dessert</a>
          <a href="?category=KueUltah#catalog" class="<?= isset($_GET['category']) && $_GET['category'] == 'KueUltah' ? 'active' : ''; ?>">Kue Ultah</a>
          <a href="?category=Signature#catalog" class="<?= isset($_GET['category']) && $_GET['category'] == 'Signature' ? 'active' : ''; ?>">Signature</a>
          <a href="?category=SpecialCake#catalog" class="<?= isset($_GET['category']) && $_GET['category'] == 'SpecialCake' ? 'active' : ''; ?>">Special Cake</a>
        </div>
      </div>
      <br />
      <div class="rows row-3 inter-regular" id="products">

      </div>
    </div>
  </div>
  <!-- End Catalog Section -->

  <!-- Contact Us Section -->
  <div class="contact-us" id="contact-us">
    <div class="container text-center">
      <h1>Contact Us!</h1>
      <p class="inter-light">
        Hubungi kami untuk pertanyaan dan kebutuhan lainnya, kami siap membantu! </p>
    </div>
    <form id="contact-form" method="post" class="contact-form inter-regular" autocomplete="off">
      <div class="rows row-2">
        <input type="text" class="input-form" required name="FirstName" placeholder="First Name">
        <input type="text" class="input-form" required name="LastName" placeholder="Last Name">
      </div>
      <br>
      <div class="rows">
        <input type="email" class="input-form" required name="Email" placeholder="Email Address">
      </div>
      <br>
      <div class="rows">
        <input type="number" class="input-form" required name="NoHandphone" placeholder="Nomor Handphone">
      </div>
      <br>
      <div class="rows">
        <input type="text" class="input-form" required name="Subject" placeholder="Subject">
      </div>
      <br>
      <div class="rows">
        <textarea class="input-form" name="Message" required placeholder="Your Message"></textarea>
      </div>
      <br>
      <button class="inter-regular" type="submit">Submit</button>
    </form>
  </div>
  <!-- End Contact Us Section -->

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
<script src="./assets/main.js"></script>
<script>
  const form = document.querySelector("#contact-form");
  const scriptURL =
    "https://script.google.com/macros/s/AKfycbwCvDqG-LYX0B4UngBOldrCpVDZwH_vhhD29BOuIDIdr9-FJi_-BsXimv1C_HbmDqNT/exec";

  form.addEventListener("submit", (e) => {
    e.preventDefault();
    let requestBody = new FormData(form);
    fetch(scriptURL, {
        method: "POST",
        body: requestBody,
      })
      .then((response) => {
        alert("Success!", response);
        location.reload();
      })
      .catch((error) => {
        alert("Error!", error.message);
        location.reload();
      });
  });
</script>

</html>