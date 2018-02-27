/* global $ */

function calcSub(){
    
    //function for if statements
    var argSubTotal; 
    
 //subtotal if salesforce is clicked
    if(document.getElementById('salesforce').checked){
    argSubTotal=100;
}

//subtotal if cloud9 is checked
else if(document.getElementById('cloud9').checked){
    argSubTotal=200;
}

//subtotal if aws is checked
else if(document.getElementById('aws').checked){
    argSubTotal=300;
}

//subtotal if gmail is clicked
    else{ 
        argSubTotal=400;
    }
    
    
    //passing the value
     calcDisVatTotal(argSubTotal);
}

//function for Vat , discount and total, declaring variables
    function calcDisVatTotal(parmSubTotal){
    var SubTotal = parmSubTotal;
    var vatAmt;
    var discountAmt;
    var TotalPrice;
   
   //calculate discount
   discountAmt = (parmSubTotal * .05);
   
   //calculate vat
   vatAmt = (parmSubTotal - discountAmt) * (.1);
   
   //calculate total price
   TotalPrice = (parmSubTotal + vatAmt - discountAmt);
   
   //passing the values
   display(SubTotal , vatAmt, discountAmt, TotalPrice);
    }

//displaying all values
function display(parm1 , parm2 , parm3 , parm4){
  
  document.getElementById("subtotal").value = parm1;
  document.getElementById("vat").value = parm2;
  document.getElementById("discount").value = parm3;
  document.getElementById("total").value = parm4;
        
  enablebtnProceed();
}


function enablebtnProceed(){
    $('#btnProceed').prop('disabled', false);
}

function disablebtnProceed() {
    $('#btnProceed').prop('disabled', true);
}
