<!DOCTYPE html>
<html>
    <head>
        
        <!--Title-->
    <title>Select Product</title>
    
    <!--Stylesheet refrence-->
    <link rel="stylesheet" href="ebus.css" type="text/css" />
    
    <!--JQuery-->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
       <script type="text/javascript" src="cost_calc.js"></script>
    
    
    </head>
    
    <body id=products>
        
        <!--navbar links-->
           <ul>
 <li><a href="Cloudservices.html">Mainpage</a></li>
  <li><a href="products.html">Products</a></li>
  <li style="float:right"><a class="active" href="../Homepage.html">Homepage</a></li>
</ul>


        <!--Heading-->        
        <h1>Select a Product</h1>
        
        <br/>
        
        <div>

        <!--button for salesforce-->        
         <form method="POST" action="Ebus2.php">
            
            <label for="salesforce"> 
                <input type="radio"  id="salesforce" name="product" checked onClick="disablebtnProceed()"/>
                Salesforce @ 100
            </label>
            
         
            <!--button for aws-->
            <label for="aws">
                <input type="radio" id="aws" name="product"  onClick="disablebtnProceed()"/>
                AWS @ $300
            </label>
            
            <!--button for cloud9-->
            <label for="cloud9">
                <input type="radio" id="cloud9" name="product"  onClick="disablebtnProceed()"/>
                Cloud 9 @ $200
            </label>
            
         
            <!--button for fmail-->
            <label for="gmail">
                <input type="radio" id="gmail" name="product"  onClick="disablebtnProceed()"/>
                Gmail @ $400
            </label>
            
     
            
            
            <br/>
        
            <br/>
            
            <!--subtotal box-->
            <label for="subtotal">
                Sub Total
                <input type="text" id="subtotal" value ="0.00" readonly/>
            </label>
            
            <br/>
            <br/>
            
            
            <!--discount box-->
             <label for="discount">
                Discount @ 5%: 
                <input type="text" id="discount" value="0.00" readonly/>
            </label>
            
            <br/>
            <br/>
            
            <!--VAT box-->
             <label for="vat">
                vat @ 10%: 
                <input type="text" id="vat" value="0.00" readonly/>
            </label>
            
            <br/>
            <br/>
            
            <!--Total box-->
            <label for="total">
                Total
                <input type="text" id="total" name="total" value="0.00" readonly/>
            </label>
            
            <br/>
            
            <!-- add item to shopping cart and proceed to next page-->
           <button type="submit" id="btnProceed" disabled>Add to Shopping Cart</button>
            
            </form>
            
            <!--Calculate cost-->
            <br/>
            <button onClick="calcSub()">Calculate Cost</button>
            
            <!--clear choice-->
            <a role="button" href="Ebus1.php">Clear Choice</a>
            
            
            </div>
            
            
            
    </body>
</html>


