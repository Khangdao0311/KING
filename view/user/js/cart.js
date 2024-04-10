function minus_cart(el) {
    const quantity = el.nextElementSibling;
    const id = el.nextElementSibling.nextElementSibling.nextElementSibling.innerText
    const voucher_id = el.nextElementSibling.nextElementSibling.nextElementSibling.nextElementSibling.value
    const quantity_new = quantity.value - 1;
    if (quantity_new > 0) {
        $.post("model/jQuery/update_quantity_cart.php", {
            "quantity":quantity_new,
            "id":id,
            "voucher_id":voucher_id
        },
            function (data, textStatus, jqXHR) {
                $(".cart-container").html(data);
            },
        );
    }
}
function plus_cart(el) {
    const quantity = el.previousElementSibling;
    const id = el.nextElementSibling.innerText;
    const voucher_id = el.nextElementSibling.nextElementSibling.value;
    const quantity_new = quantity.value * 1 + 1;
    if (quantity_new <= 10) {
        $.post("model/jQuery/update_quantity_cart.php", {
            "quantity":quantity_new,
            "id":id,
            "voucher_id":voucher_id
        },
            function (data, textStatus, jqXHR) {
                $(".cart-container").html(data);
            },
        );
    }
    
}

function delete_cart(el) {
    var id = el.nextElementSibling.value
    var voucher_id = el.nextElementSibling.nextElementSibling.value
    var header_cart = document.querySelector('.header-quantity')
    var header_cart_new = header_cart.innerText * 1 - 1
    header_cart.innerText = header_cart_new;
    $.post("model/jQuery/load_cart_delete.php", {
        "id": id,
        "voucher_id": voucher_id
    },
        function (data, textStatus, jqXHR) {
            $('.cart-container').html(data);
        },
    );
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

function voucher_show(el) {
    const voucher_id = el.value
    
    document.querySelectorAll('#voucher_id').forEach(item => {
        item.value = voucher_id
    });
    $.post("model/jQuery/load_voucher_cart.php", {
        "voucher_id": voucher_id
    },
        function (data, textStatus, jqXHR) {
            $('.cart-payment').html(data);
        },
    );
}
