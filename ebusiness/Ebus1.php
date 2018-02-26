<!DOCTYPE html>
<html>
    <head>
    <title>Select Product</title>
    <link rel="stylesheet" href="ebus.css" type="text/css" />
    
    <!--JQuery-->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
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
        
        <div>
        
        <form method="POST" action="Ebus2.php">
            
            <label for="salesforce"> 
                <input type="radio"  id="salesforce" name="product" checked onClick="disablebtnProceed()"/>
                Salesforce @ 100
            </label>
            
         
            
            <label for="aws">
                <input type="radio" id="aws" name="product"  onClick="disablebtnProceed()"/>
                AWS @ $300
            </label>
            
            <label for="cloud9">
                <input type="radio" id="cloud9" name="product"  onClick="disablebtnProceed()"/>
                Cloud 9 @ $200
            </label>
            
         
            
            <label for="gmail">
                <input type="radio" id="gmail" name="product"  onClick="disablebtnProceed()"/>
                Gmail @ $400
            </label>
            
     
            
            
            <br/>
        
            <br/>
            
            <label for="subtotal">
                Sub Total
                <input type="text" id="subtotal" value ="0.00" readonly/>
            </label>
            
            <br/>
            <br/>
            
            
            
             <label for="discount">
                Discount @ 5%: 
                <input type="text" id="discount" value="0.00" readonly/>
            </label>
            
            <br/>
            <br/>
            
             <label for="vat">
                vat @ 10%: 
                <input type="text" id="vat" value="0.00" readonly/>
            </label>
            
            <br/>
            <br/>
            
            <label for="total">
                Total
                <input type="text" id="total" value="0.00" readonly/>
            </label>
            
            <br/>
            
           <button type="submit" id="btnProceed" disabled>Add to Shopping Cart</button>
            
            </form>
            
            <br/>
            <button onClick="calcSub()">Calculate Cost</button>
            
            <a role="button" href="Ebus1.php">Clear Choice</a>
            
            </div>
            
    </body>
</html>


