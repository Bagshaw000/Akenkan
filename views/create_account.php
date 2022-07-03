<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

  <!-- easyGo CSS -->
  <link rel="stylesheet" href="../css/general.css" crossorigin="anonymous">
  <link rel="stylesheet" href="../css/auth.css" crossorigin="anonymous">


  <title>Akenkan - Create Account</title>
</head>

<body>

<!-- Start of nav bar  -->
<nav>
  Akenkan logo
</nav>
<!-- End of nav bar  -->


<div class="row" id="body-row">

<!-- Start of left column -->
  <section class="col col-6" id="left-column">
    <img src="../images/login.svg" alt="" id="login-image">
</section> <!-- End of left column -->

  <!-- Start of right column -->
  <section class="col col-6" id="right-column">
    <h2>Create Account</h2>
	<h6>Fill up your details to continue</h6>


  <!-- Start of form  -->
  <form action="" method="post">

  <input type="text" name="username" id="username" placeholder="Username">
  <input type="email" name="email" id="email" placeholder="Email">

  <div class="row" id="password-row"><!-- Start of password row -->
    <input type="password" name="password" id="password" placeholder="Password" class="half-input">
    <input type="password" name="confirm_password" id="confirm_password" placeholder="Confirm Password" class="half-input">
  </div> <!-- End of password row -->

  <button class="btn btn-filled">Create Account</button>

  </form>
  <!-- End of form -->

  <p>Already have an account ? <a href="login.php">Login</a></p>



  </section><!-- End of right column -->
</div>
  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>