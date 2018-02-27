
/* global $ */

function validateDetails(){
    
    //declariing values
    var pin = pin = document.getElementById("user_pin").value;
      var email= document.getElementById("user_email").value;
      var name = document.getElementById("full_name").value;
      
       
    //if pin is empty
    if (pin == ""){
        alert("Please enter your PIN");
    }
    
    //if pin is less than 4 characters long
    else if (String(pin).length < 4){
        alert("Please make sure your PIN is accurate");
    }
    
    //if name box is empty
   else if(name == ""){
        alert("Please enter your Name"); 
    }
    
    //if email box is empty
    else if(email == ""){
        alert("Please enter your Email"); 
    } 
     
    
    else{
        enablebtnPurchase();
    }
    
    
    
}

function enablebtnPurchase(){
    $('#btnPurchase').prop('disabled', false);
}

function disablebtnPurchase() {
    $('#btnPurchase').prop('disabled', true);
}