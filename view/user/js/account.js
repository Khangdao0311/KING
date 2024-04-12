const inputflie = document.getElementById('inputfile');
const image = document.getElementById('imagechange');
inputflie.addEventListener('change', (el) => {
    image.src = URL.createObjectURL(el.target.files[0])
});

function order_status(status) {
    $.post("model/jQuery/load_show_order_status.php", {
        "status": status
    },
        function (data, textStatus, jqXHR) {
            $('.account-main').html(data);
        },
    );
}
function cancel(el) {
    const status = el.previousElementSibling.value
    const order_id = el.nextElementSibling.value
    $.post("model/jQuery/load_show_order_status.php", {
        "order_id": order_id,
        "status": status
    },
        function (data, textStatus, jqXHR) {
            $('.account-main').html(data);
        },
    );
}
function show_hidden(el) {
    if (el.previousElementSibling.type == 'password') {
        el.innerText = 'Ẩn'
        el.previousElementSibling.type = 'text'
    } else {
        el.innerText = 'Hiện'
        el.previousElementSibling.type = 'password'
    }
}
const inputpassword = document.getElementById('password')
const p_uppercase = document.querySelector('.uppercase')
const p_number = document.querySelector('.number')
const p_special = document.querySelector('.special')
const p_minlength = document.querySelector('.minlength')
let minlength = 8;
let uppercase = /[A-Z]/;
let number = /[0-9]/;
let special = /[!,@,#,$,%,^,&,*,?]/;
function active(el) {
    el.style.color = 'blue'
    el.style.opacity = '1'
    el.style.fontWeight = 'bold'
}
function non_active(el) {
    el.style.color = '#000'
    el.style.opacity = '0.5'
    el.style.fontWeight = '500'
}
function check() {
    if (inputpassword.value.match(uppercase)) {
        check_uppercase = true;
        active(p_uppercase)
    } else {
        check_uppercase = false
        non_active(p_uppercase)
    }
    if (inputpassword.value.match(number)) {
        check_number = true;
        active(p_number)
    } else {
        check_number = false
        non_active(p_number)
    }
    if (inputpassword.value.match(special)) {
        check_special = true;
        active(p_special)
    } else {
        check_special = false
        non_active(p_special)
    }
    if(inputpassword.value.length >= minlength) {
        check_minlength = true;
        active(p_minlength)
    } else {
        check_minlength = false;
        non_active(p_minlength)
    }

    if (check_minlength && check_number && check_special && check_uppercase) {
        document.querySelector('.account-submit').removeAttribute('disabled'); 
        document.querySelector('.account-submit').type = 'submit'; 
        document.querySelector('.account-submit').style.opacity = '1'; 
    } else {
        document.querySelector('.account-submit').setAttribute('disabled',''); 
        document.querySelector('.account-submit').type = 'text'; 
        document.querySelector('.account-submit').style.opacity = '0.5'; 
    }
}

function delete_comment(el) {
    var id = el.previousElementSibling.value
    $.post("model/jQuery/load_account_comment.php", {
        "id": id
    },
        function (data, textStatus, jqXHR) {
            $('.account_comment-box').html(data);
        },
    );
}