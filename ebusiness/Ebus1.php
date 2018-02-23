<!DOCTYPE html>
<html>
    <head>
    <title>Select Product</title>
    <link rel="stylesheet" href="ebus.css" type="text/css" />
    
    <!--JQuery-->
    <script src="https://ajax.googleapis.com/ajax/libs/query/3.2.1/jquery.min.js"></script>
    <script type="text/javascript" src="cost_calc.js"></script>
    

    
    
         

    
  
  
   
    
    </head>
    
    <body id=products>
        
           <ul>
  <li><a href="../cv_page1.html">Curriculum Vitae</a></li>
  <li><a href="../Interests/sports.html">Interests</a></li>
  <li><a href="../Cloudservices.html">Cloud Services Vendor</a></li>
  <li><a href="">Heroku</a></li>
  <li style="../float:right"><a class="active" href="../Homepage.html">Homepage</a></li>
</ul>
        
        <h1>Select a Product</h1>
        
        <br/>
        
        <form method "POST" action="Ebus2.php">
            
            <label for="salesforce" class="container">
                <input type="radio" id="salesforce" name="product" checked onClick="disablebtnProceed()"/>
                  <span class="checkmark"></span>
                Salesforce @ 100
            </label>
            
         
            
            <label for="aws"class="container">
                <input type="radio" id="aws" name="product"onClick="disablebtnProceed()"/>
                  <span class="checkmark"></span>
                AWS @ $300
            </label>
            
            <label for="cloud9"class="container">
                <input type="radio" id="cloud9" name="product"onClick="disablebtnProceed()"/>
                  <span class="checkmark"></span>
                Cloud 9 @ $200
            </label>
            
         
            
            <label for="gmail"class="container">
                <input type="radio" id="gmail" name="product"onClick="disablebtnProceed()"/>
                  <span class="checkmark"></span>
                Gmail @ $400
            </label>
            
     
            
            
            <br/>
        
            <br/>
            
            <label for="subtotal">
                Sub Total
                <input type="text" id="subtotal" value ="0.00" readonly/>
            </label>
            
            <br/>
            
            <label for="total">
                Total
                <input type="text" id="total" value="0.00" readonly/>
            </label>
            
            <br/>
            
            <button type="submit" id="btnProceed" >Add to Shopping Cart</button>
            
            </form>
            
            <br/>
            <button onClick="calSub()">Calculate Cost</button>
            
            <a role="button" href="Ebus1.php">Clear Choice</a>
            
    </body>
</html>


