<!DOCTYPE html>
<html lang="en">
<head>
  <title>login</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.6/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js"></script>
</head>

<body style="height:1500px">

<div class="container-fluid" style="background-image:url('./bootstrap/png/images.jpg')">

<div class="container-fluid">
  <h2>TRAVELLERS</h2>
</div>
<div class="container-fluid">
  <div class="row">
    <div class="col-8 ">
     Your ...................priority
      <div class="row">
        <div class="col-6 bg-light"></div>
        <div class="col-6 ">logo</div>
      </div>
    </div>
    <div class="col-4"><a href="./signin.html"style="text-decoration:none;text align:right">Sign-in</a></div>
  </div>
</div>










<nav class="navbar navbar-expand-sm   navbar-dark sticky-top" style="background-color:green;" >
  <a class="navbar-brand" href="nav.php">Home</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="#">About</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Travel Blog</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Registration</a>
      </li> 
	   <!-- Dropdown -->
    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
        Tours
      </a>
      <div class="dropdown-menu">
        <a class="dropdown-item" href="local.php">local</a>
        <a class="dropdown-item" href="#">abroad</a>
      </div>
    </li>
	 <li class="nav-item">
        <a class="nav-link" href="#">Online Booking</a>
      </li> 
	   <li class="nav-item">
        <a class="nav-link" href="#">Contact Us</a>
      </li> 
    </ul>
  </div>  
</nav>
<br>

<div class="container" style="background-color:gray">
 <form action="booking.php" method="POST">
  <h3>Online Booking</h3>
  <p>Fill this form for online booking </p>
  <form>
	 <div class="form-group">
        <label for="name">Id Name</label>
        <input type="text" class="form-control" name="name" id="name" placeholder="name">
    </div>
	 <div class="form-group">
        <label for="package_id">package Id</label>
        <input type="text" class="form-control" name="pid" id="pid" placeholder="Package Id">
    </div>
	 <div class="form-group">
        <label for="tid">TrxId</label>
        <input type="text" class="form-control" name="tid" id="tid" placeholder="Package Id">
    </div>
    <div class="form-group">
        <label for="Password">Password</label>
        <input type="password" class="form-control" name="password" id="Password" placeholder="Password">
    </div>
	 
    <button type="submit" class="btn btn-primary">Login</button>
</form>
</div>

</body>
</html>


