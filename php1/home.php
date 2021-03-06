<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>

    <title>La épicerie</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="icon" sizes="300*300" href="logo.png">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="css/bootstrap/bootstrap.min.css" rel="stylesheet">
    <link href="css/homepage.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Pacifico" rel="stylesheet">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-black.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<style>
body {
    font-family: Arial;
}

.coupon {
    border: 5px dotted #bbb;
    width: 80%;
    border-radius: 7px;
    margin: 0 auto;
    max-width: 400px;
}

.container {
    padding: 2px 5px;
    background-color: #f1f1f1;
}

.promo {
    background: #ccc;
    padding: 3px;
}

.expire {
    color: red;
}
.container-3{
  width: 300px;
  vertical-align: middle;
  white-space: nowrap;
  position: relative;
}
 
.container-3 input#search{
  width: 300px;
  height: 50px;
  background: #2b303b;
  border: none;
  font-size: 10pt;
  float: left;
  color: #262626;
  padding-left: 45px;
  -webkit-border-radius: 5px;
  -moz-border-radius: 5px;
  border-radius: 5px;
  color: #fff;
}
.container-3 input#search::-webkit-input-placeholder {
   color: #65737e;
}
 
.container-3 input#search:-moz-placeholder { /* Firefox 18- */
   color: #65737e;  
}
 
.container-3 input#search::-moz-placeholder {  /* Firefox 19+ */
   color: #65737e;  
}
 
.container-3 input#search:-ms-input-placeholder {  
   color: #65737e;  
}
.container-3 .icon{
  position: absolute;
  top: 50%;
  margin-left: 17px;
  margin-top: 17px;
  z-index: 1;
  color: #4f5b66;
 
   -webkit-transition: all .55s ease;
  -moz-transition: all .55s ease;
  -ms-transition: all .55s ease;
  -o-transition: all .55s ease;
  transition: all .55s ease;
}
</style>
</head>
<title>La  épicerie</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-black.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<body id="myPage">

<!-- Sidebar on click -->
<nav class="w3-sidebar w3-bar-block w3-white w3-card w3-animate-left w3-xxlarge" style="display:none;z-index:2" id="mySidebar">
  <a href="javascript:void(0)" onclick="w3_close()" class="w3-bar-item w3-button w3-display-topright w3-text-teal">Close
    <i class="fa fa-remove"></i>
  </a>
 
 
  <img src="images/coupon.png" alt="Avatar" style="width:80%;"> <br><br>
  <img src="images/coupon2.png" alt="Avatar" style="width:80%;">
  
</nav>


<!-- Navbar -->
<div class="w3-top">
 <div class="w3-bar w3-theme-d2 w3-left-align">
  <a class="w3-bar-item w3-button w3-hide-medium w3-hide-large w3-right w3-hover-white w3-theme-d2" href="javascript:void(0);" onclick="openNav()"><i class="fa fa-bars"></i></a>
  <a href="#" class="w3-bar-item w3-button w3-teal"><i class="fa fa-home w3-margin-right"></i>La épicerie</a>
  <a href="#team" class="w3-bar-item w3-button w3-hide-small w3-hover-white">Team</a>
  <div class="w3-dropdown-hover w3-hide-small">
    <button class="w3-button" title="Notifications">Products <i class="fa fa-caret-down"></i></button>     
    <div class="w3-dropdown-content w3-card-4 w3-bar-block">
      <a href="fruits.php" class="w3-bar-item w3-button">Fruits</a>
	  <a href="vegetable.php" class="w3-bar-item w3-button">Vegetables</a>
      <a href="dairy.php" class="w3-bar-item w3-button">Dairy products</a>
      <a href="grains.php" class="w3-bar-item w3-button">Grains</a>
	  
    </div>

  </div>
   <a href="#bestselling" class="w3-bar-item w3-button w3-hide-small w3-hover-white">Best Selling</a>
  <a href="#work" class="w3-bar-item w3-button w3-hide-small w3-hover-white">Special offers</a>
 
  <a href="#contact" class="w3-bar-item w3-button w3-hide-small w3-hover-white">Contact</a>
    <a href="#partners" class="w3-bar-item w3-button w3-hide-small w3-hover-white">Affiliated Partners</a>
   <form action="search.php" style="position:absolute;top:03px;right:220px;color:#000000" method="post" >
      <input type="text" placeholder="Search.." name="search">
      <button type="submit"><i class="fa fa-search"></i></button>
    </form>
 <!--  <a href="logout.asp" class="w3-bar-item w3-button w3-hide-small w3-hover-white" style="position:absolute;top:00px;right:20px">Logout</a>-->
 
  
  <a href="#" class="w3-bar-item w3-button w3-hide-large w3-right w3-hover-teal" title="Cart"><i class="material-icons">
  <a href="cart.php" class="w3-button " style="position:absolute;top:-02px;right:150px">
<img src="images/carts.png"></i></a></a>

<div class="w3-dropdown-hover w3-hide-small" style="position:absolute;top:-02px;right:15px">
    <button class="w3-button" title="Notifications">Welcome <?php $uid; $uid=$_SESSION["username"]; echo $uid;?>
	<i class="fa fa-caret-down"></i></button>     
    <div class="w3-dropdown-content w3-card-4 w3-bar-block">
      <a href="logout.php" class="w3-bar-item w3-button">Logout</a>
	  </div>
	  </div>
 </div>

  <!-- Navbar on small screens -->
  <div id="navDemo" class="w3-bar-block w3-theme-d2 w3-hide w3-hide-large w3-hide-medium">
    <a href="#team" class="w3-bar-item w3-button">Team</a>
    <a href="#work" class="w3-bar-item w3-button">Work</a>
    <a href="#bestselling" class="w3-bar-item w3-button">Best Selling</a>
    <a href="#contact" class="w3-bar-item w3-button">Contact</a>
    <a href="#" class="w3-bar-item w3-button">Search</a>
  </div>
</div>

<!-- Image Header -->
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2></h2>  
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
	  <li data-target="#myCarousel" data-slide-to="3"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
      <div class="item active">
       <center> <img src="images/fruitsmain.jpg" alt="FRUITS" style="width:80%;"> </center>
      </div>

      <div class="item">
       <center> <img src="images/vegetablesmain.jpg" alt="VEGETABLES" style="width:90%;"> </center>
      </div>
    
      <div class="item">
      <center>  <img src="images/dairymain.jpg" alt="DAIRY" style="width:90%;"></center>
      </div>
    
	<div class="item">
     <center>   <img src="images/grainsmain.jpg" alt="GRAINS & GROCERY" style="width:80%;"></center>
      </div>
    </div>
</div>
    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>

<!-- Modal -->
<div id="id01" class="w3-modal">
  <div class="w3-modal-content w3-card-4 w3-animate-top">
    <header class="w3-container w3-teal w3-display-container"> 
      <span onclick="document.getElementById('id01').style.display='none'" class="w3-button w3-teal w3-display-topright"><i class="fa fa-remove"></i></span>
      <h4></h4>
      <h5><i class="fa fa-smile-o"></i></h5>
    </header>
    <div class="w3-container">
      <p></p>
      <p><a class="w3-text-teal" href=""></a> </p>
    </div>
    <footer class="w3-container w3-teal">
      <p></p>
    </footer>
  </div>
</div>

<!-- Team Container -->
<div class="w3-container w3-padding-64 w3-center" id="team">
<h2>OUR TEAM</h2>
<p>Meet the team </p>

<div class="w3-row"><br>

<div class="w3-third">
  <img src="vidhi.jpg" style="width:80%" class="w3-circle w3-hover-opacity">
  <h3>Vidhi Panchal</h3>
  <p></p>
</div>

<div class="w3-third">
  &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <img src="meeti.jpg" style="width:80%" class="w3-circle w3-hover-opacity">
  <h3>Meeti Shah</h3>
  <p></p>
</div>

<div class="w3-third">
 &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp  <img src="jeel.png" style="width:80%" class="w3-circle w3-hover-opacity">
  <h3>Jeel Sanghavi</h3>
  <p></p>
</div>



</div>
</div>
<br>
<br>
<br>
<br>
<!-- Work Row -->
<div class="w3-row-padding w3-padding-64 w3-theme-l1" id="work">

<div class="w3-quarter">
<h2>Special Offers</h2>
<br>
<h4>To shop in packages La épicerie has brought you offers like:</h4>
</div>

<div class="w3-quarter">
<div class="w3-card-2 w3-white">
  <img src="images/vege.jpg" alt="Vernazza" style="width:80%">
  <div class="w3-container">
  <h3>FRUITS & VEGETABLES</h3>
  <h4>20% OFF on your forst shopping.</h4>
  <p>Use coupon promo code for more discount.</p>
  <p>Free home delivery.</p>
  <p>Upcoming sales : 31st December 2017 to 1st January 2018</p>
  </div>
  </div>
</div>

<div class="w3-quarter">
<div class="w3-card-2 w3-white">
  <img src="images/kool.jpg" alt="Cinque Terre" style="width:100%">
  <div class="w3-container">
  <h3>DAIRY PRODUCT</h3>
 <h4>50% OFF on your forst shopping.</h4>
  <p>Use coupon promo code for more discount.</p>
  <p>Free home delivery.</p>
  <p>Upcoming sales : 31st December 2017 to 1st January 2018</p>
  </div>
  </div>
</div>

<div class="w3-quarter">
<div class="w3-card-2 w3-white">
  <img src="images/grai.jpg" alt="Monterosso" style="width:100%">
  <div class="w3-container">
  <h3>GRAINS</h3>
  <h4>10% OFF on your forst shopping.</h4>
  <p>Use coupon promo code for more discount.</p>
  <p>Free home delivery.</p>
  <p>Upcoming sales : 31st December 2017 to 1st January 2018</p>
  </div>
  </div>
</div>

</div>

<!-- Container -->
<div class="w3-container" style="position:relative">
  <a onclick="w3_open()" class="w3-button w3-xlarge w3-circle w3-teal"
  style="position:absolute;top:-28px;right:24px">+</a>
</div>

<!-- Pricing Row -->
<div class="w3-row-padding w3-center w3-padding-64" id="bestselling">
    <h2>BEST SELLING</h2>
    <p></p><br>
    <div class="w3-third w3-margin-bottom">
      <ul class="w3-ul w3-border w3-hover-shadow">
        <li class="w3-theme">
          <p class="w3-xlarge">MAGGI</p>
        </li>
        <li class="w3-padding-16"><b>Maggi Masala</b>  Rs. 39</li>
        <li class="w3-padding-16"><b>Hot & Sweet Chilli Sauce</b> Rs. 146 </li>
        <li class="w3-padding-16"><b>Cheese Macroni Pasta</b>   Rs. 71</li>
        <li class="w3-padding-16"><b>Aata Noodles</b>  Rs. 24</li>
        <li class="w3-padding-16">
         <b><class="w3-wide"> Maggi Tomato Ketchup - Free Maggi Masala Noodles</b>
          <span class="w3-opacity">Rs. 147</span>
        </li>
        <li class="w3-theme-l5 w3-padding-24">
       <!--   <button class="w3-button w3-teal w3-padding-large"><i class="fa fa-check"></i> Sign Up</button>-->
	    <img src="images/maggi.jpg" alt="Vernazza" style="width:40%"> 
        </li>
      </ul>
    </div>

    <div class="w3-third w3-margin-bottom">
      <ul class="w3-ul w3-border w3-hover-shadow">
        <li class="w3-theme-l2">
          <p class="w3-xlarge">AMUL</p>
        </li>
        <li class="w3-padding-16"><b>Amul Milk</b>  Rs.20</li>
        <li class="w3-padding-16"><b>Cheese Slice</b>   Rs. 114</li>
        <li class="w3-padding-16"><b>Garlic & Herbs Butter</b>   Rs. 46</li>
        <li class="w3-padding-16"><b>Buttermilk</b>  Rs. 11 </li>
        <li class="w3-padding-16">
          <b> <class="w3-wide">Amul Kool Rose Milk + Kesar Milk</b> <br>
          <span class="w3-opacity">Rs. 37</span>
        </li>
        <li class="w3-theme-l5 w3-padding-24">
         <!--<button class="w3-button w3-teal w3-padding-large"><i class="fa fa-check"></i> Sign Up</button>-->
		  <img src="images/amul.jpg" alt="Vernazza" style="width:30%"> 
        </li>
      </ul>
    </div>

    <div class="w3-third w3-margin-bottom">
      <ul class="w3-ul w3-border w3-hover-shadow">
        <li class="w3-theme">
          <p class="w3-xlarge">MDH </p>
        </li>
        <li class="w3-padding-16"><b>Garam Masala</b>   Rs. 60 </li>
        <li class="w3-padding-16"><b>Pav Bhaji Masala</b>   Rs. 60</li>
        <li class="w3-padding-16"><b>Chole Masala</b>   Rs. 60</li>
        <li class="w3-padding-16"><b>Sambhar Masala</b>   Rs.60</li>
        <li class="w3-padding-16">
         <b> <class="w3-wide"> Pani Puri Masala + Jal Jeera Masala</b><br>
          <span class="w3-opacity">Rs. 110</span>
        </li>
        <li class="w3-theme-l5 w3-padding-24">
         <!-- <button class="w3-button w3-teal w3-padding-large"><i class="fa fa-check"></i> Sign Up</button>-->
		 <img src="images/mdh.jpg" alt="Vernazza" style="width:45%"> 
        </li>
      </ul>
    </div>
</div>

<!-- Contact Container -->
<div class="w3-container w3-padding-64 w3-theme-l5" id="contact">
  <div class="w3-row">
    <div class="w3-col m5">
    <div class="w3-padding-16"><span class="w3-xlarge w3-border-teal w3-bottombar">Contact Us</span></div>
      <h3>Address</h3>
      <p>Groceries and more, delivered straight to your door!</p>
      <p><i class="fa fa-map-marker w3-text-teal w3-xlarge"></i> Mumbai,Maharashtra.</p>
      <p><i class="fa fa-phone w3-text-teal w3-xlarge"></i>  +91 9619324771</p>
      <p><i class="fa fa-envelope-o w3-text-teal w3-xlarge"></i> laepicerie123@gmail.com</p>
    </div>
    <div class="w3-col m7">
      <form method="post" class="w3-container w3-card-4 w3-padding-16 w3-white" action="contact.php">
      <div class="w3-section">      
        <label name="Name">Name</label>
        <input class="w3-input" type="text" name="Name" required>
      </div>
   
      <div class="w3-section">      
        <label>Message</label>
        <input class="w3-input" type="text" name="Message" required>
      </div>  
      <input class="w3-check" type="checkbox" checked name="Like">
      <label>I Like it!</label>
      <input type="submit" class="w3-button w3-right w3-theme" value="Send">
      </form>
    </div>
  </div>
</div>

<!-- Google Maps -->
<div style="width:100%;height:500px;" id="partners">
<center><h2>AFFILIATED PARTNERS</h2></center>
<br>
<img src="images/banner" height="350px" width="350px" alt="no pic" style="margin-left:150px;"/>

<img src="images/bakesale" height="350px" width="350px" alt="no image" style="margin-left:330px;"/>
</div>
<script>
function myMap()
{
  myCenter=new google.maps.LatLng(41.878114, -87.629798);
  var mapOptions= {
    center:myCenter,
    zoom:12, scrollwheel: false, draggable: false,
    mapTypeId:google.maps.MapTypeId.ROADMAP
  };
  var map=new google.maps.Map(document.getElementById("googleMap"),mapOptions);

  var marker = new google.maps.Marker({
    position: myCenter,
  });
  marker.setMap(map);
}
 
</script>

<!--
To use this code on your website, get a free API key from Google.
Read more at: https://www.w3schools.com/graphics/google_maps_basic.asp
-->

<!-- Footer 
<footer class="w3-container w3-padding-32 w3-theme-d1 w3-center">
  <h4>Follow Us</h4>
  <a class="w3-button w3-large w3-teal" href="www.facebook.com" title="Facebook"><i class="fa fa-facebook"></i></a>
  <a class="w3-button w3-large w3-teal" href="www.twitter.com" title="Twitter"><i class="fa fa-twitter"></i></a>
  <a class="w3-button w3-large w3-teal" href="" title="Google +"><i class="fa fa-google-plus"></i></a>
  <a class="w3-button w3-large w3-teal" href="javascript:void(0)" title="Google +"><i class="fa fa-instagram"></i></a>
  <a class="w3-button w3-large w3-teal w3-hide-small" href="javascript:void(0)" title="Linkedin"><i class="fa fa-linkedin"></i></a>-->
 <footer class="py-5 bg-dark">
      
        <p class="m-0 text-center text-white" style="font-family: 'Pacifico', cursive;font-size: 30px">La épicerie ©</p>
      
   

  <div style="position:relative;bottom:100px;z-index:1;" class="w3-tooltip w3-right">
    <span class="w3-text w3-padding w3-teal w3-hide-small">Go To Top</span>   
    <a class="w3-button w3-theme" href="#myPage"><span class="w3-xlarge">
    <i class="fa fa-chevron-circle-up"></i></span></a>
  </div>
  
</footer>

<script>
// Script for side navigation
function w3_open() {
    var x = document.getElementById("mySidebar");
    x.style.width = "300px";
    x.style.paddingTop = "10%";
    x.style.display = "block";
}

// Close side navigation
function w3_close() {
    document.getElementById("mySidebar").style.display = "none";
}

// Used to toggle the menu on smaller screens when clicking on the menu button
function openNav() {
    var x = document.getElementById("navDemo");
    if (x.className.indexOf("w3-show") == -1) {
        x.className += " w3-show";
    } else { 
        x.className = x.className.replace(" w3-show", "");
    }
}
</script>

</body>
</html>
