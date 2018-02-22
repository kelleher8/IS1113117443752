<!DOCTYPE html>
<html>
    <head>
    <title>Select Product</title>
    <link rel="stylesheet" href="ebus.css" type="text/css" />
    
    <!--JQuery-->
    <script src="https://ajax.googleapis.com/ajax/libs/query/3.2.1/jquery.min.js"></script>
    <script type="text/javascript" src="cost_calc.js"></script>
    
    <style>
    
    .radio-label {
   display: inline-block;
    vertical-align: top;
    margin-right: 3%;
}
.radio-input {
   display: inline-block;
    vertical-align: top;
}
         
/* The container */
.container {
    display: block;
    position: relative;
    padding-left: 35px;
    margin-bottom: 12px;
    cursor: pointer;
    font-size: 22px;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
}

/* Hide the browser's default radio button */
.container input {
    position: absolute;
    opacity: 0;
    cursor: pointer;
}

/* Create a custom radio button */
.checkmark {
    position: absolute;
    top: 0;
    left: 0;
    height: 25px;
    width: 25px;
    background-color: #eee;
    border-radius: 50%;
}

/* On mouse-over, add a grey background color */
.container:hover input ~ .checkmark {
    background-color: #ccc;
}

/* When the radio button is checked, add a blue background */
.container input:checked ~ .checkmark {
    background-color: #2196F3;
}

/* Create the indicator (the dot/circle - hidden when not checked) */
.checkmark:after {
    content: "";
    position: absolute;
    display: none;
}

/* Show the indicator (dot/circle) when checked */
.container input:checked ~ .checkmark:after {
    display: block;
}

/* Style the indicator (dot/circle) */
.container .checkmark:after {
 	top: 9px;
	left: 9px;
	width: 8px;
	height: 8px;
	border-radius: 50%;
	background: white;
}
</style>
    
  
    
    
    </head>
    
    <body id=products>
        
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

