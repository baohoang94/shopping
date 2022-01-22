function addToCart(event) {
    event.preventDefault();
    let url = $(this).data('url');
    $.ajax({
        type: "GET",
        url: url,
        dataType: 'json',
        success: function (data) {
            if (data.code === 200) {
                alert('Thêm giỏ hàng thành công');
            }
        },
        error: function (data) {
            
        }
    })
}

function updateCart() {
    
    let urlUpdateCart = $('.tableUpdateCart').data('url_update_cart');
    let idProduct = $(this).data('id_product');
    let quantity = $(this).val();
    $.ajax({
        type: "GET",
        url: urlUpdateCart,
        dataType: 'json',
        data: {"id" : idProduct, "quantity" : quantity},
        success: function (data) {
            if (data.code === 200) {
                $('.cart_wrapper').html(data.cartComponent);
            }
        },
        error: function (data) {
            
        }
    })
}

function deleteCart(event) {
    event.preventDefault();
    let urlDeleteCart = $(this).data('url_delete_cart');
    $.ajax({
        type: "GET",
        url: urlDeleteCart,
        dataType: 'json',
        success: function (data) {
            if (data.code === 200) {
                $('.cart_wrapper').html(data.cartComponent);
            }
        },
        error: function (data) {
            
        }
    })
}
$(function () {
    $('.add_to_cart').on('click', addToCart);
    $('.cart_quantity_input').on('blur', updateCart);
    $('.cart_quantity_delete').on('click', deleteCart);
})