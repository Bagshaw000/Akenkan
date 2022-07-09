<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <title>Document</title>
    <link rel="stylesheet" href="../css/homepage.css">
</head>
<body>
    <!-- Navbar -->
    <nav class="nav-div">
      <ul class="nav">
        <li class= "nav-name" >Akenkan</li>
        <li class="nav-form">
          <form  method="get">
            <input type="text" name="" id="nav-search">
            <button id="nav-search-btn"><img
    src="../images/Vector.svg"
    alt="triangle with all three sides equal"
   id="search"/></button>
          </form>
        </li>
        <li class="nav-person"><img src="../images/person.svg" alt="" srcset=""></li>
        <li>
         <div class="nav-dropdown">
            <a class="" href="#" id="dropdownMenuLink" 
            style='color:black; text-decoration: none;'
            data-bs-toggle="dropdown" aria-expanded="false">
              Account
            </a>

            <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
              <li><a class="dropdown-item" href="#">Action</a></li>
              <li><a class="dropdown-item" href="#">Another action</a></li>
              <li><a class="dropdown-item" href="#">Something else here</a></li>
            </ul>
         </div>
        </li>

        <li class="nav-cart">
          <img src="../images/cartlogo.svg" alt="">
          <a href="" id="cart">Cart</a>

        </li>
      </ul>
    </nav>
</body>
</html>