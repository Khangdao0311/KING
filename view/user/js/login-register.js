function show_hidden(el) {
    if (el.previousElementSibling.type == 'password') {
        el.innerText = 'Ẩn'
        el.previousElementSibling.type = 'text'
    } else {
        el.innerText = 'Hiện'
        el.previousElementSibling.type = 'password'
    }
}