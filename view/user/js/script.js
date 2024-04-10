
function addcart(el) {
    const id = el.nextSibling.nextSibling.value; 
    $.post("model/jQuery/load_addcart.php", {
        'id': id
    },
        function (data, textStatus, jqXHR) {
            $('.header-quantity').html(data);
        },
    );
    var cart_add_success = document.createElement('div');
    cart_add_success.classList.add('cart_add_success');
    cart_add_success.textContent = 'Thêm vào giỏ hàng thành công!';
    document.body.appendChild(cart_add_success);
    setTimeout(() => {
        document.body.removeChild(cart_add_success);
    }, 500);
}
