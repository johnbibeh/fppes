<!DOCTYPE html>
<html lang="en">
<head>
  <style type="text/css">
  

  :root {
    --baseColor: #f81d03;
  }

  /* .align {
    align-items: center;
    display: flex;
    flex-direction: column;
    justify-content: center;
  } */

  /* helpers/grid.css */

  :root {
    --gridMaxWidth: 20rem;
    --gridWidth: 90%;
  }

  .grid {
    margin-left: auto;
    margin-right: auto;
    max-width: var(--gridMaxWidth);
    width: var(--gridWidth);
  }
  .hidden {
    border: 0;
    clip: rect(0 0 0 0);
    height: 1px;
    margin: -1px;
    overflow: hidden;
    padding: 0;
    position: absolute;
    width: 1px;
  }

  :root {
    --iconFill: var(--baseColor);
  }

  .icons {
    display: none;
  }

  .icon {
    display: inline-block;
    fill: var(--iconFill);
    font-size: 1rem;
    height: 1em;
    vertical-align: middle;
    width: 1em;
  }
  :root {
    --htmlFontSize: 100%;

    --bodyBackgroundColor: #F5F5F5
    --bodyColor: var(--baseColor);
    --bodyFontFamily: 'Open Sans';
    --bodyFontFamilyFallback: sans-serif;
    --bodyFontSize: 0.875rem;
    --bodyFontWeight: 400;
    --bodyLineHeight: 1.5;
  }

  * {
    box-sizing: inherit;
  }

  html {
    box-sizing: border-box;
    font-size: var(--htmlFontSize);
    height: 100%;
  }

  body {
    /* background:url('home_assets/images/hpbanner.jpg')no-repeat 0px 0px !important;  */
    background-color: var(--bodyBackgroundColor);
    
    color: var(--bodyColor);
    font-family: var(--bodyFontFamily), var(--bodyFontFamilyFallback);
    font-size: var(--bodyFontSize);
    font-weight: var(--bodyFontWeight);
    height: 100%;
    line-height: var(--bodyLineHeight);
    margin: 0;
    min-height: 100vh;
  }

  :root {
    --anchorColor: #eee;
  }

  a {
    color: var(--anchorColor);
    outline: 0;
    text-decoration: none;
  }

  a:focus,
  a:hover {
    text-decoration: underline;
  }

  :root {
    --formFieldMargin: 0.875rem;
  }

  input {
    background-image: none;
    border: 0;
    color: inherit;
    font: inherit;
    margin: 0;
    outline: 0;
    padding: 0;
    transition: background-color 0.3s;
  }

  input[type='submit'] {
    cursor: pointer;
  }

  .form {
    margin: calc(var(--formFieldMargin) * -1);
  }

  .form input[type='password'],
  .form input[type='text'],
  .form input[type='submit'] {
    width: 100%;
  }

  .form__field {
    display: flex;
    margin: var(--formFieldMargin);
  }

  .form__input {
    flex: 1;
  }

  :root {
    --loginBorderRadus: 0.25rem;
    --loginColor: #eee;

    --loginInputBackgroundColor: transparent;
    --loginInputHoverBackgroundColor: #f81d03;

    --loginLabelBackgroundColor: #363b41;

    --loginSubmitBackgroundColor: #f81d03;
    --loginSubmitColor: #eee;
    --loginSubmitHoverBackgroundColor: transparent;
  }

  .login {
    color: var(--loginColor);
  }

  .login label,
  .login input[type='text'],
  .login input[type='password'],
  .login input[type='submit'] {
    border-radius: var(--loginBorderRadus);
    padding: 1rem;
  }

  .login label {
    background-color: var(--loginInputBackgroundColor);
    border-bottom-right-radius: 0;
    border-top-right-radius: 0;
    padding-left: 1.25rem;
    padding-right: 1.25rem;
    border: 1px solid var(--loginInputHoverBackgroundColor);
  }

  .login input[type='password'],
  .login input[type='text'] {
    background-color: var(--loginInputBackgroundColor);
    border-bottom-left-radius: 0;
    border-top-left-radius: 0;
    border: 1px solid var(--loginInputHoverBackgroundColor);
    color: #f81d03;
  }

  .login input[type='password']:focus,
  .login input[type='password']:hover,
  .login input[type='text']:focus,
  .login input[type='text']:hover {
    /* background-color: var(--loginInputHoverBackgroundColor); */
  }

  .login input[type='submit'] {
    background-color: var(--loginSubmitBackgroundColor);
    color: var(--loginSubmitColor);
    font-weight: 700;
    text-transform: uppercase;
  }

  .login input[type='submit']:focus,
  .login input[type='submit']:hover {
    /* background-color: var(--loginSubmitHoverBackgroundColor); */
    /* border: 1px solid var(--loginSubmitBackgroundColor); */
    /* color: var(--loginSubmitBackgroundColor); */
  }

  /* modules/text.css */

  :root {
    --paragraphMarginBottom: 1.5rem;
    --paragraphMarginTop: 1.5rem;
  }

  p {
    margin-bottom: var(--paragraphMarginBottom);
    margin-top: var(--paragraphMarginTop);
    color: gray;
  }

  .text--center {
    text-align: center;
  }


  .error_mess {
    color:white; !important;
    text-align: center !important;
    margin-top: -15px;
    padding: 10px;
    background: #C01403;
    border-radius: 5px;

  }
  </style>

  <title>PES | Feeding Program</title>
  <link rel="shortcut icon" href="/FPPES/assets/user/main-logo.png">
  <link href="home_assets/css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
  <link href="home_assets/css/style.css" rel="stylesheet" type="text/css" media="all" />
  <link href="home_assets/css/font-awesome.min.css" rel="stylesheet" type="text/css" media="all" />
  <script src="home_assets/js/jquery-2.1.4.min.js"></script>
</head>


<body class="align">
    <img src="/FPPES/assets/user/main-logo.png" width="300" height="auto">
<!-- <h2> D&K FURNITURE AND BEDFRAMES </h2> -->

  <div class="grid">

    <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
        <symbol id="user" viewBox="0 0 24 24">
            <path d="M12 12c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm0 2c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4z"/>
        </symbol>
        <symbol id="password" viewBox="0 0 24 24">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M12 1c-3.86 0-7 3.14-7 7v2h-1c-1.1 0-2 .9-2 2v10c0 1.1.9 2 2 2h18c1.1 0 2-.9 2-2V12c0-1.1-.9-2-2-2h-1V8c0-3.86-3.14-7-7-7zm-1 16c0 .55-.45 1-1 1s-1-.45-1-1v-2c0-.55.45-1 1-1s1 .45 1 1v2zm6 0c0 .55-.45 1-1 1s-1-.45-1-1v-2c0-.55.45-1 1-1s1 .45 1 1v2zm-3-8V8c0-2.76 2.24-5 5-5s5 2.24 5 5v1H5zm5-5c-2.76 0-5 2.24-5 5v1h10V8c0-2.76-2.24-5-5-5z"/>
        </symbol>
    </svg>

    <br>
<br>

<?php session_start(); if(isset($_SESSION['err'])){ echo '<p class="error_mess"> Invalid Credentials </p>'; unset($_SESSION['err']); session_destroy();} ?>

    <form method="POST" class="form login" action="loginprocess.php">
      <div class="form__field">
        <label for="login__email"><svg class="icon">
      <path d="M14 2H2C0.89 2 0 2.9 0 4v8c0 1.1.89 2 2 2h12c1.1 0 2-.9 2-2V4c0-1.1-.9-2-2-2zm0 4l-6 3.75L2 6V4l6 3.75L14 4v2zm0 8H2V8l6 3.75L14 8v6z"/>
        </svg>
      <span class="hidden">Email Address</span></label>
        <input id="login__email" type="text" name="email" class="form__input" placeholder="Email Address" required>
      </div>

      <div class="form__field">
        <label for="login__username"><svg class="icon"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#user"></use></svg><span class="hidden">Username</span></label>
        <input id="login__username" type="text" name="uname" class="form__input" placeholder="Username" required>
      </div>

      <div class="form__field">
        <label for="login__password"><svg class="icon"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#password"></use></svg><span class="hidden">Password</span></label>
        <input id="login__password" type="password" id="password" name="pword" class="form__input" placeholder="Password" required>
       </div>


      
      <div class="form__field">
        <input type="submit" value="Sign In">
      </div>      
    </form>

    <br>
    <p class="text--center">Not registered? <a href="reg.php">Create an account</a></p>

  </div>


</body>
</html>
