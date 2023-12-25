$(document).ready(function() {
  $(document).on('click','.increment-btn',function(e){
    e.preventDefault();

    var qtyInput = $(this).closest('.product_data').find('.input-qty');
    var qty = parseInt(qtyInput.val());
    qty = isNaN(qty) ? 0 : qty;
    if(qty < 10)
    {
      qty++;
      qtyInput.val(qty);
    }
  });

  $(document).on('click','.decrement-btn',function(e){
    e.preventDefault();

    var qtyInput = $(this).closest('.product_data').find('.input-qty');
    var qty = parseInt(qtyInput.val());
    qty = isNaN(qty) ? 0 : qty;
    if(qty > 1)
    {
      qty--;
      qtyInput.val(qty);
    }
  });
  $(document).on('click','.addToCartBtn',function(e){
    event.stopImmediatePropagation()
    e.preventDefault();

    var qty = $(this).closest('.product_data').find('.input-qty').val(); 
    var prod_id = $(this).val();
    
    $.ajax({
        method : "POST",
        url : "functions/handlecart.php",
        data: {
            "prod_id": prod_id,
            "prod_qty": qty,
            "scope": "add"
        },
        success : function (response)
        {
        if(response == 201)
        {
            alertify.success("Product added to cart");
            location.reload();
        }
        else if(response == "exist")
        {
            alertify.error("Product already in cart");

        }
        else if(response == 401)
        {
            alertify.success("Login to continue");
        }
        else if(response == 500)
        {
            alertify.success("Something went wrong");
        }
        }
    });

});

$(document).on('click','.updateQty',function(){
    event.stopImmediatePropagation();
    var qty = $(this).closest('.product_data').find('.input-qty').val(); 
    var prod_id = $(this).closest('.product_data').find('.prodId').val(); 

    $.ajax({
        method : "POST",
        url : "functions/handlecart.php",
        data: {
            "prod_id": prod_id,
            "prod_qty": qty,
            "scope": "update"
        },
        
        success : function (response)
        {
            
        }
    });
    
});
$(document).on('click', '.deleteItem', function(event) {
    event.preventDefault();
    var cart_id = $(this).val();
    $.ajax({
        method: "POST",
        url: "functions/handlecart.php",
        data: {
            "cart_id": cart_id,
            "scope": "delete"
        },

        success: function(response) {
            if (response == 200) {
                alertify.success("Item deleted successfully!");
                $('#mycart').load(location.href + " #mycart");
            } else if (response == 500) {
                alertify.error("Something went horribly wrong!");
            }
        },
    });
});
});
