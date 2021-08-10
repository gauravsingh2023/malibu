<?php
require_once('config.php');
?>
<!DOCTYPE html>
  
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="style.css">
    <script src="script.js"></script>
    
    
    <title>Malibu Hotels and Resorts</title>
</head>
<body>
<div>
        <?php
        if(isset($_POST['create'])){
         $name         = $_POST['name'];
        $email         = $_POST['email'];
        $phone         = $_POST['phone'];
         $message      = $_POST['message'];
  

         $sql = "INSERT INTO malibumssg (name, email, phone, message) VALUES(?,?,?,?)";
         $stmtinsert = $db->prepare($sql);
         $result = $stmtinsert->execute([$name, $email, $phone, $message]);   
      
        
            if($result){
                echo "Succesfully Saved.";
                
            }else {
                echo "Error saving data";
            }
        }
        ?>
    </div>
  
  <div class="mobile-nav" id="mobile-nav">
   <div > <i class="fa fa-meetup" id="logo" aria-hidden="true">MAL<span class="ibu">IBU</span></i></div>
 
   <div> <a href="javascript:void(0)" id="bars"><i id="baricon" onclick="myFunction()" class="fa fa-bars"></i></a>
    <ul class="nav" id="myLinks">
      <li><a href="#home">Home</a></li>
      <li><a href="#about">About</a></li>
      <li><a href="#rooms">Rooms</a></li>
      <li><a href="#gallery">Gallery</a></li>
      <li><a href="#contact">Contact</a></li>


  </ul>
</div>
  </div>
    <header>
   


  <div class="nav-bar">
        <i class="fa fa-meetup" id="logo" aria-hidden="true">MAL<span class="ibu">IBU</span></i>
 
         <ul class="nav">
             <li><a href="#home">Home</a></li>
             <li><a href="#about">About</a></li>
             <li><a href="#rooms">Rooms</a></li>
             <li><a href="#gallery">Gallery</a></li>
             <li><a href="#contact">Contact</a></li>

 
         </ul>
           
        
     </div>
     </header>
     <div class="content-1" id="home">
        <div class="overlay">
            <h1>Welcome To <Strong>MAL<span class="ibu">IBU</span></Strong> <br>
                <p class="sub-stmt">Place of dreams</p> </h1>

	 </div>
       </div>
       <h2>About Us</h2>
      <div class="content-2" id="about">
        
        <div class="about-img">  <img src="images/home-bg1.jpeg" alt=""></div>
        <div>
      
        <p class="about-text">Modern rooms have flat-screen TVs and Wi-Fi, plus minibars and tea and coffeemaking facilities.<br> Club rooms and suites add lounge access and free breakfast; suites also add living areas with sofas. Room service is available 24/7.
            There's an international restaurant, a cafe and a Mexican cantina, plus 2 bars. <br>The outdoor pool has a waterfall. Other perks include a gym, an Asian-inspired spa, a business centre and parking. There are dozens of meeting rooms.</p>
        
        </div>

      </div>
      <h2>Hotel Features</h2>
      <div class="features">
        <div class="feature-box">
            <img src="images/swimming.png" class="feature"  alt="">
          <h4>Swimming Pool </h4>
          
        </div>
        <div class="feature-box">
            <img src="images/hair-dryer.png" class="feature"  alt="">
          <h4>Hair Dryer</h4>
          
        </div>  <div class="feature-box">
            <img src="images/hotel teller.png" class="feature"  alt="">
          <h4>Hotel Teller </h4>
          
        </div>
        <div class="feature-box">
            <img src="images/fire-exit.png" class="feature"  alt="">
          <h4>Fire Exit </h4>
          
        </div>
          <div class="feature-box">
            <img src="images/car-parking.png" class="feature"  alt="">
          <h4>Car Parking </h4>
          
        </div>
        <div class="feature-box">
            <img src="images/minibar.png" class="feature"  alt="">
          <h4>Mini Bar </h4>
          
        </div>   <div class="feature-box">
            <img src="images/drinks.png" class="feature"  alt="">
          <h4>Drinks </h4>
          
        </div>   <div class="feature-box">
            <img src="images/car-airport.png" class="feature"  alt="">
          <h4>Car Airport </h4>
          
        </div>
       </div> 
       
  <!--Rooms-->
  <h2>Rooms</h2>

  <div class="Rooms" id="rooms">
    <div class="room">
    <img src="images/standard-room.jpg" class="room-img" alt="">
    <h3>Standard Room </h3>
  
  </div>
  <div class="room">
    <img src="images/family-room.jpg" class="room-img" alt="">
    <h3>Family Room </h3>
  
  </div>  <div class="room">
    <img src="images/single-room.jpg" class="room-img" alt="">
    <h3>Single Room </h3>
  
  </div>  <div class="room">
    <img src="images/standard-room.jpg" class="room-img" alt="">
    <h3>Deluxe Room </h3>
  
  </div>
  <div class="room">
    <img src="images/family-room.jpg" class="room-img" alt="">
    <h3>Luxury Room </h3>
  
  </div> <div class="room">
    <img src="images/single-room.jpg" class="room-img" alt="">
    <h3>Single Room </h3>
  
  </div>
</div>

<!--Gallery-->

<h2>Our Gallery</h2>
<div class="images" id="gallery">
  
  <img src="images/g1.jpg" class="gallery" alt="">
  <img src="images/g2.jpg" class="gallery" alt="">
  <img src="images/g3.jpeg" class="gallery" alt="">

  <img src="images/g4.jpg"  class="gallery" alt="">
  <img src="images/g5.jpg"  class="gallery" alt="">
  <img src="images/g6.jpg"  class="gallery" alt="">
  <img src="images/g7.jpg"  class="gallery" alt="">
  <img src="images/g8.jpg"  class="gallery" alt="">
  <img src="images/g1.jpg" class="gallery" alt="">
  <img src="images/g2.jpg" class="gallery" alt="">
  <img src="images/g5.jpg"  class="gallery" alt="">

  <img src="images/g3.jpeg" class="gallery" alt="">


</div>
       <!--Contact-->
       <h2>Contact Us</h2>
       <div class="Contact" id="contact">
        <form action="" method="post">
        <label for="name">Full Name</label>
        <input type="text" name="name" placeholder="Full Name" >
        <label for="email">Email</label>
        <input type="text" name="email" placeholder="Email Address" >
        <label for="number">Phone</label>
        <input type="number" name="phone" placeholder="phone #" >
        <br>
        <label for="message">Message</label>
        <textarea placeholder="Message" name="message"></textarea>
        <button  class="submit-btn"  name="create">Submit</button></form>
        <div class="address">
          <h5>Contact Info</h5><br>
         <p class="add">
          Address <br>
          
          203 Fake St. Mountain View, San Francisco, California, USA
          <br>
          <br>
          Phone <br>
           
          +1 232 3235 324
           <br>
           <br>
          Email Address <br>
          
          youremail@domain.com
         </p>
     <div class="icons">   
        <a href="" class="icon-fill" target="_blank"><i class="fa fa-twitter fa-3x"></i></a>
         <a href="https://www.instagram.com/malibu_hotels2021/" class="icon-fill" target="_blank"><i class="fa fa-instagram fa-3x"></i></a>
         <a href="" class="icon-fill" target="_blank"><i class="fa fa-facebook fa-3x"></i></a>
        </div>
        </div>

    </div>
    <footer>
      <div class="logo">
        <i class="fa fa-meetup" id="footer-logo" aria-hidden="true">MAL<span class="ibu">IBU</span></i>

      </div>
      <div class="quicklinks"> <p class="quick"> Quick Links</p> <br>
        <a href="#home">Home</a>
        <a href="#about">About</a>
        <a href="#rooms">Rooms</a>
        <a href="#gallery">Gallery</a>
        <a href="#contact">Contact</a>


      </div>
      <div class="icons">   
       <h4>let's connect</h4>
        <a href="" class="icon-fill" target="_blank"><i class="fa fa-twitter fa-3x"></i></a>
         <a href="https://www.instagram.com/malibu_hotels2021/" class="icon-fill" target="_blank"><i class="fa fa-instagram fa-3x"></i></a>
         <a href="" class="icon-fill" target="_blank"><i class="fa fa-facebook fa-3x"></i></a>
        </div>
    </footer>
</body>
</html>
