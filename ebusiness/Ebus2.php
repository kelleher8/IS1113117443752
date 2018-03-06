<?php
// start the session
session_start();
?>

<!DOCTYPE html>
<html>

    <head>
      
      <!--Title-->
        <title>Enter Details</title>
        
        <!--Stylesheet reference-->
        <link rel="stylesheet" href="ebus.css" type="text/css" />
        <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        
        <!--jQuery-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
             <script type="text/javascript" src="ebus2_validator.js"></script>
             
             <!-- code aqquired from https://www.w3schools.com/howto/howto_css_checkout_form.asp-->
             <style>
body {
  font-family: Arial;
  font-size: 17px;
  padding: 8px;
}
* {
  box-sizing: border-box;
}
.row {
  display: -ms-flexbox; /* IE10 */
  display: flex;
  -ms-flex-wrap: wrap; /* IE10 */
  flex-wrap: wrap;
  margin: 0 -16px;
}
.col-25 {
  -ms-flex: 25%; /* IE10 */
  flex: 25%;
}
.col-50 {
  -ms-flex: 50%; /* IE10 */
  flex: 50%;
}
.col-75 {
  -ms-flex: 75%; /* IE10 */
  flex: 75%;
}
.col-25,
.col-50,
.col-75 {
  padding: 0 16px;
}
.container {
  background-color: #f2f2f2;
  padding: 5px 20px 15px 20px;
  border: 1px solid lightgrey;
  border-radius: 3px;
}
input[type=text] {
  width: 100%;
  margin-bottom: 20px;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 3px;
}
input[type=password] {
  width: 100%;
  margin-bottom: 20px;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 3px;
}
label {
  margin-bottom: 10px;
  display: block;
}
.icon-container {
  margin-bottom: 20px;
  padding: 7px 0;
  font-size: 24px;
}
.btn {
  background-color: #4CAF50;
  color: white;
  padding: 12px;
  margin: 10px 0;
  border: none;
  width: 100%;
  border-radius: 3px;
  cursor: pointer;
  font-size: 17px;
}
.btn:hover {
  background-color: #45a049;
}
a {
  color: #2196F3;
}
hr {
  border: 1px solid lightgrey;
}
span.price {
  float: right;
  color: grey;
}
/* Responsive layout - when the screen is less than 800px wide, make the two columns stack on top of each other instead of next to each other (also change the direction - make the "cart" column go on top) */
@media (max-width: 800px) {
  .row {
    flex-direction: column-reverse;
  }
  .col-25 {
    margin-bottom: 20px;
  }
}
</style>
    </head>
    
    <body>
       <form method="POST" action="Ebus3.php" name="Details">

      
      <!--Navbar links-->
      <ul>
   <li><a href="Cloudservices.html">Mainpage</a></li>
  <li><a href="products.html">Products</a></li>
  <li style="float:right"><a class="active" href="../Homepage.html">Homepage</a></li>
</ul>


<!-- heading -->
      <h2>Payment Details</h2>
      
<p>Please enter your payment details.</p>


<div class="row">
  <div class="col-75">
    <div class="container">

      
        <div class="row">
          <div class="col-50">
            
            <!--billing address-->
            <h3>Billing Address</h3>
            
            <!--Customer full name-->
            <label for="full_name"><i class="fa fa-user"></i> Full Name</label>
            <input type="text" id="full_name" name="full_name" placeholder="John M. Doe">
            
            <!--email-->
            <label for="user_email"><i class="fa fa-envelope"></i> Email</label>
            <input type="text" id="user_email" name="user_email" placeholder="john@example.com">

           
          </div>

          <div class="col-50">
            
            <!-- Payment-->
            <h3>Payment</h3>
            <label for="cards">Accepted Cards</label>
            <div class="icon-container">
              <i class="fa fa-cc-visa" style="color:navy;"></i>
              <i class="fa fa-cc-amex" style="color:blue;"></i>
              <i class="fa fa-cc-mastercard" style="color:red;"></i>
              <i class="fa fa-cc-discover" style="color:orange;"></i>
            </div>
            
            
            <!--Card name-->
            <label for="card_name">Name on Card:</label>
            <input type="text" id="card_name" name="card_name" placeholder="John More Doe">
            
            <!-- credit card number-->
            <label for="card_number">Credit card number</label>
            <input type="text" id="card_number" name="card_number" placeholder="1111222233334444" maxlength="16">
            
            
            
            <div class="row">
              <div class="col-50">
                
                <!--pin number-->
                <label for="user_pin">PIN</label>
                <input type="password" id="user_pin" name="user_pin" placeholder="Card PIN" maxlength="4" >
              </div>
            </div>
          </div>
          
        </div>
     
      
      
  
    </div>
  </div>
  
</div>
           
              <!-- proceed to next page-->
                <button type="submit" id="btnPurchase" disabled>Proceed with Purchase</button>
              
            </form>
            
            <br/>
            
            <!--make sure all boxes are filled , corrct details entered-->
            <button onClick="validateDetails()">Validate</button>
            
     
        
        <script type="text/javascript" src="ebus2_validator.js"></script>
        
        <!--these vdetails passed onto next page-->
       <?php
        $_SESSION["full_name"] = $_POST["full_name"];
        $_SESSION["user_email"] = $_POST["user_email"];
        $_SESSION["total"] = $_POST["total"];
      
        ?>

        
    </body>