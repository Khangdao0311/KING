function minus_cart(el) {
    const quantity = el.nextSibling.nextSibling;
    const id = el.nextSibling.nextSibling.nextSibling.nextSibling.nextSibling.nextSibling.innerText
    const quantity_new = quantity.value - 1;
    if (quantity_new > 0) {
        $.post("model/jQuery/update_quantity_cart.php", {
            "quantity":quantity_new,
            "id":id
        },
            function (data, textStatus, jqXHR) {
                $(".cart-container").html(data);
            },
        );
    }
}
function plus_cart(el) {
    const quantity = el.previousSibling.previousSibling;
    const id = el.nextSibling.nextSibling.innerText;
    const quantity_new = quantity.value * 1 + 1;
    if (quantity_new <= 10) {
        $.post("model/jQuery/update_quantity_cart.php", {
            "quantity":quantity_new,
            "id":id
        },
            function (data, textStatus, jqXHR) {
                $(".cart-container").html(data);
            },
        );
    }
    
}

function addcart(event) {
    var successOverlay = document.createElement('div');
    successOverlay.classList.add('success-overlay');
    successOverlay.textContent = 'Thêm vào giỏ hàng thành công!';
    document.body.appendChild(successOverlay);
    setTimeout(function() {
        document.body.removeChild(successOverlay);
    }, 1000);
    
}
