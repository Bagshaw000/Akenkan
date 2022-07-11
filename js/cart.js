function addCart(user_id,ip_addr, book_id,qty){
        event.preventDefault();
        dataString = 'uid='+ user_id +'&ip='+ip_addr+'&book_id='+book_id+'&qty='+qty;
        
        $.ajax({
            type:"POST",
            url:"../actions/cart_processor.php",
            data: dataString,
            cache:false,
            success:function(result){
                alert(result);
            }
        })
}

function removeCart(product_id, user_id){
    event.preventDefault();
    dataString = 'uid='+ user_id +'&pid='+product_id;
    
    $.ajax({
            type:"POST",
            url:"../actions/delete_cart_processor.php",
            data: dataString,
            cache:false,
            success:function(result){
                alert(result);
                window.location= "../web/cart.php";
            }
        })
}

function updateCart(product_id, user_id,ip){
    event.preventDefault();
    qty= document.getElementById('quantity').value;
    dataString = 'uid='+ user_id +'&pid='+product_id+'&qty='+ qty+'&ip='+ip;
    
    $.ajax({
            type:"POST",
            url:"../actions/update_cart_processor.php",
            data: dataString,
            cache:false,
            success:function(result){
                alert(result);
                window.location= "../web/cart.php";
            }
        })
}