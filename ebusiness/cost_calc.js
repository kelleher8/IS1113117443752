/* global $ */

function calcSub(){
    
    var argSubTotal; 
    
    // If statments to calculate subtotal based on which radio button is chcecked.
    
    if(document.getElementById('salesforce').checked){
    argSubTotal=100;
}

else if(document.getElementById('cloud9').checked){
    argSubTotal=200;
}

else if(document.getElementById('aws').checked){
    argSubTotal=300;
}
    else{ 
        argSubTotal=400;
    }
    
    display(argSubTotal);
    }
   

function display(parm1){
  
  document.getElementById("subtotal").value = parm1;
  document.getElementById("total").value = parm1;
        
  enablebtnProceed();
}


function enablebtnProceed(){
    $('#btnProceed').prop('disabled', false);
}

function disablebtnProceed() {
    $('#btnProceed').prop('disabled', true);
}