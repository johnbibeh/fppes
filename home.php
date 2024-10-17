<!DOCTYPE html>
<html lang="en">
<head>
  <style type="text/css">
    * {
      font-family: Century Gothic;
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    /* Banner Background */
    .banner-w3layouts {
      background: url('C:\xampp\htdocs\FPPES\assets\user\bg1.jpg') no-repeat center center;
      background-size: cover;
      height: 100vh;
      display: flex;
      align-items: center;
      justify-content: space-between;
      padding: 20px;
      position: relative;
    }

    /* Logo Styling */
    .navbar-header img {
      position: absolute;
      top: 20px;
      left: 20px;
      height: 150px;
      width: 150px;
      object-fit: contain;
    }

    /* Register Button (Top-Right) */
    .register-btn {
      position: absolute;
      top: 20px;
      right: 20px;
      background-color: #dc3545;
      color: white;
      padding: 10px 20px;
      border-radius: 5px;
      text-decoration: none;
      font-size: 16px;
      display: flex;
      align-items: center;
      gap: 5px;
      transition: background-color 0.3s;
    }

    .register-btn:hover {
      background-color: #c82333;
    }

    /* Banner Content (Slider and Login Form) */
    .content-container {
      display: flex;
      width: 80%;
      gap: 30px;
      align-items: center;
    }

    .slider {
      flex: 2;
    }

    .callbacks_container {
      height: 400px;
    }

    .rslides li {
      display: none;
      height: 100%;
      text-align: center;
      color: white;
      padding: 40px;
    }

    .rslides li.active {
      display: block;
    }

    /* Login Form Styling */
    .banner-form-agileinfo {
      flex: 1;
      padding: 30px;
      background-color: rgba(255, 255, 255, 0.8);
      border-radius: 8px;
      text-align: center;
    }

    .banner-form-agileinfo input {
      width: 90%;
      margin: 10px 0;
      padding: 12px;
      border: 1px solid #ddd;
      border-radius: 4px;
    }

    /* Features Section (Mission, Vision, and Core Values) */
    .features {
      background-color: #f5d1d0; /* Light Purple Background */
      padding: 80px 20px;
      color: black;
      text-align: center;
      border-radius: 8px;
      margin: 40px 0;
    }

    .features h2 {
      margin-bottom: 20px;
      font-size: 36px;
      text-transform: uppercase;
    }

    .features .section {
      margin-bottom: 40px;
    }

    .features p {
      font-size: 18px;
      margin-bottom: 15px;
    }

    /* Footer */
    footer {
      background-color: #333;
      color: white;
      text-align: center;
      padding: 10px 0;
      position: fixed;
      bottom: 0;
      width: 100%;
    }

    footer .social-icons a {
      font-size: 18px;
      margin: 5px;
      color: white;
      text-decoration: none;
    }

    footer .social-icons a:hover {
      opacity: 0.7;
    }
  </style>

  <title>PES | Feeding Program</title>
  <link rel="shortcut icon" href="/FPPES/assets/user/main-logo.png">
  <link href="home_assets/css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
  <link href="home_assets/css/style.css" rel="stylesheet" type="text/css" media="all" />
  <link href="home_assets/css/font-awesome.min.css" rel="stylesheet" type="text/css" media="all" />
  <script src="home_assets/js/jquery-2.1.4.min.js"></script>
</head>

<body <?php include 'tc-forms/template/notif.php'; ?>>

  <!-- Banner Section -->
  <div class="banner-w3layouts" id="home">
    <div class="navbar-header">
      <img src="assets/user/main-logo.png" alt="Logo">
    </div>

    <a href="reg.php" class="register-btn">
      <span class="fa fa-user-plus"></span> REGISTER ACCOUNT
    </a>

    <div class="content-container">
      <!-- Slider Section -->
      <div class="slider">
        <div class="callbacks_container">
          <ul class="rslides" id="slider3">
            <li class="active">
              <div class="slider_banner_info">
                <h4>Hunger should kick the can!</h4>
                <p>Can you imagine a world without hunger?</p>
              </div>
            </li>
            <li>
              <div class="slider_banner_info">
                <h4>Don't be rude, donate some food.</h4>
                <p>Discover a better way of transport.</p>
              </div>
            </li>
            <li>
              <div class="slider_banner_info">
                <h4>Take a bite out of hunger.</h4>
                <p>Can you imagine a world without hunger?</p>
              </div>
            </li>
            <li>
              <div class="slider_banner_info">
                <h4>Dude, let's give some food.</h4>
                <p>Discover a better way of transport.</p>
              </div>
            </li>
          </ul>
        </div>
      </div>

      <!-- Login Form -->
      <div class="banner-form-agileinfo">
        <form action="loginprocess.php" method="post" class="loginform" onsubmit="return validateForm();">
          <label for="email">Email:</label>
          <input type="email" id="email" name="email" placeholder="Email" required />

          <label for="uname">Username:</label>
          <input type="text" id="uname" name="uname" placeholder="Username" required />

          <label for="pword">Password:</label>
          <input type="password" id="pword" name="pword" placeholder="Password" required />

          <label for="confirmPword">Confirm Password:</label>
          <input type="password" id="confirmPword" name="confirmPword" placeholder="Confirm Password" required />

          <input type="submit" value="Get started">
        </form>
      </div>
    </div>
  </div>

  <!-- Features Section -->
<div class="features">
  <h2>Our Vision, Mission, and Core Values</h2>

  <div class="feature-container">
    <div class="feature-box">
      <h3>Our Vision</h3>
      <p>Every student has access to nutritious meals at school, ensuring their optimal health and well-being.</p>
    </div>

    <div class="feature-box">
      <h3>Our Mission</h3>
      <p>We empower and support school nutrition professionals in advancing the accessibility, quality, and integrity of school nutrition programs.</p>
    </div>

    <div class="feature-box">
      <h3>Core Values</h3>
      <p><strong>Integrity:</strong> We act with honesty and adhere to the highest standards of moral and ethical values.</p>
      <p><strong>Compassion:</strong> We care about the needs of others and work to alleviate hunger and suffering.</p>
      <p><strong>Community:</strong> We believe in the power of collaboration and working together for a better future.</p>
      <p><strong>Excellence:</strong> We strive for excellence in all our efforts to provide the best service possible.</p>
    </div>
  </div>
</div>

<style>
  /* Features Section Styling */
  .features {
    background-color: #f5d1d0; /* Light Purple Background */
    padding: 60px 20px;
    text-align: center;
    color: black;
    border-radius: 8px;
  }

  .features h2 {
    margin-bottom: 40px;
    font-size: 36px;
    text-transform: uppercase;
  }

  /* Feature Container: Horizontal Alignment */
  .feature-container {
    display: flex;
    justify-content: center; /* Align boxes horizontally */
    gap: 30px; /* Space between boxes */
    flex-wrap: wrap; /* Allow wrapping on smaller screens */
  }

  /* Individual Feature Box Styling */
  .feature-box {
    background-color: white;
    border-radius: 8px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    width: 30%; /* Each box takes 30% of the container */
    max-width: 300px;
    min-width: 250px; /* Ensure boxes don't shrink too much */

    /* Center Content with Flexbox */
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    text-align: center;
    padding: 20px;
  }

  .feature-box h3 {
    font-size: 24px;
    margin-bottom: 15px;
  }

  .feature-box p {
    font-size: 16px;
    line-height: 1.6;
  }

  /* Responsive Design for Smaller Screens */
  @media (max-width: 768px) {
    .feature-container {
      flex-direction: column; /* Stack boxes vertically on smaller screens */
      align-items: center;
    }

    .feature-box {
      width: 80%; /* Full width for smaller screens */
    }
  }
</style>


  <!-- Footer -->
  <footer>
    <p>&copy; Phase 7-B Bagong Silang, Brgy 176 Katarungan Rd., Caloocan, Metro Manila | contact@immaculadaconcepcion.edu.ph | +63 948 629 8755 </p>
    <div class="social-icons">
      <a href="#" class="fa fa-facebook"></a>
      <a href="#" class="fa fa-twitter"></a>
      <a href="#" class="fa fa-instagram"></a>
    </div>
  </footer>

  <script src="home_assets/js/responsiveslides.min.js"></script>
  <script>
    $(function () {
      $("#slider3").responsiveSlides({
        auto: true,
        speed: 500,
        timeout: 3000,
        pager: true,
        nav: true,
        namespace: "callbacks",
      });
    });
  </script>
</body>
</html>
