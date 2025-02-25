function show_hidden(el) {
    if (el.previousElementSibling.type == 'password') {
        el.innerText = 'Ẩn'
        el.previousElementSibling.type = 'text'
    } else {
        el.innerText = 'Hiện'
        el.previousElementSibling.type = 'password'
    }
}
const input = document.querySelector('.setting-forgotpassword-form')
const p_uppercase = document.querySelector('.forgotpassword-uppercase')
const p_number = document.querySelector('.forgotpassword-number')
const p_special = document.querySelector('.forgotpassword-special')
const p_minlength = document.querySelector('.forgotpassword-minlength')
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
    if (input.value.match(uppercase)) {
        check_uppercase = true;
        active(p_uppercase)
    } else {
        check_uppercase = false
        non_active(p_uppercase)
    }
    if (input.value.match(number)) {
        check_number = true;
        active(p_number)
    } else {
        check_number = false
        non_active(p_number)
    }
    if (input.value.match(special)) {
        check_special = true;
        active(p_special)
    } else {
        check_special = false
        non_active(p_special)
    }
    if(input.value.length >= minlength) {
        check_minlength = true;
        active(p_minlength)
    } else {
        check_minlength = false;
        non_active(p_minlength)
    }

    if (check_minlength && check_number && check_special && check_uppercase) {
        document.querySelector('.setting-forgotpassword-buttonnext').removeAttribute('disabled'); 
        document.querySelector('.setting-forgotpassword-buttonnext').type = 'submit'; 
        document.querySelector('.setting-forgotpassword-buttonnext').style.opacity = '1'; 
    } else {
        document.querySelector('.setting-forgotpassword-buttonnext').setAttribute('disabled',''); 
        document.querySelector('.setting-forgotpassword-buttonnext').type = 'text'; 
        document.querySelector('.setting-forgotpassword-buttonnext').style.opacity = '0.5'; 
    }
}