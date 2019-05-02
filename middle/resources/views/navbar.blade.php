<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.7.0/css/all.css' integrity='sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ' crossorigin='anonymous'>
<style>
body {font-family: Arial, Helvetica, sans-serif;}

.navbar {
  width: 100%;
  background-color: #4CAF50;
  overflow: auto;
}

.navbar a {
  float: left;
  padding: 15px;
  color: white;
  text-decoration: none;
  font-size: 17px;
}

.navbar a:hover {
  background-color: #000;
}

.active {
  background-color: #4CAF50;
}
.logo {
  float: right;
  padding: 12px;

}

@media screen and (max-width: 500px) {
  .navbar a {
    float: none;
    display: block;
  }
}
</style>
</head>
<body background="img/2.jpg">

<div class="navbar">
  <a class="active" href="/"><i class="fa fa-fw fa-home"></i> Home</a> 
  <a href="/about"><i class="fab fa-autoprefixer"></i> About</a> 
  <a href="/contactus"><i class="fa fa-fw fa-envelope"></i> Contact us</a> 
  <a href="/product"><i class="fas fa-laptop"></i> product</a>
  <a href="https://www.google.com"><i class="fa fa-fw fa-search"></i> Search</a> 
</div>
<div class="logo">
  <img src="/img/logo.jpg"alt="Trulli" width="200" height="100">
</div>

@yield('content')
</body>
</html>