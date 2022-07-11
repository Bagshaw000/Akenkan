function payWithPaystack(email,amount,user_id) {


    event.preventDefault();
    order_status="processing";
  
   billing_add= document.getElementById('exampleFormControlTextarea1').value;
  
    
    
    let handler = PaystackPop.setup({
      key: 'pk_live_bd5356607a881f3a0d6843b75d3172b74b9675cd', // Replace with your public key
      email: email,
      amount: amount * 100,
      ref: ''+Math.floor((Math.random() * 1000000000) + 1),
      currency:'GHS',
       // generates a pseudo-unique reference. Please replace with a reference you generated. Or remove the line entirely so our API will generate one for you
      // label: "Optional string that replaces customer email"
      onClose: function(){
        alert('Window closed.');
      },
      callback: function(response){
        let message = 'Payment complete! Reference: ' + response.reference;
        
      
        if(response.status == "success"){
    
  
          dataString = 'email='+ email +'&amount='+amount+'&ref='+response.reference+'&res='+response.status +'&o_stat='+order_status+'&bill_add='+billing_add+'&user_id='+user_id;
          $.ajax({
              type:"POST",
              url:"../actions/payment_processor.php",
              data: dataString,
              cache:false,
              success:function(result){
                  alert(result);
              }
          })
          alert ("Payment Successful");
        
      }else{
        alert ("Payment Failed");
      }
        alert(message);
      }
    });
    handler.openIframe();
  }