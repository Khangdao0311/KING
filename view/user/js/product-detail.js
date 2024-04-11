function show_image(el) {
    document.querySelector('.productdetail_image-main').innerHTML = el.innerHTML;
}
function minus() {
    const quantity = document.querySelector('.productdetail_quantity_button-number').value*1
    const quantity_new = quantity - 1;
    if (quantity_new > 0) {
        document.querySelector('.productdetail_quantity_button-number').value = quantity_new
        document.querySelector('.quantity_new').value = quantity_new;
    }
} 
function plus() {
    const quantity = document.querySelector('.productdetail_quantity_button-number').value*1
    const quantity_new = quantity + 1;
    document.querySelector('.productdetail_quantity_button-number').value = quantity_new
    document.querySelector('.quantity_new').value = quantity_new;
} 
function check_describe(el) {
    const p = document.querySelector('.productdetail_innerbook-describe')
    if (el.innerHTML == 'Xem thêm') {
        p.style.webkitLineClamp = 'unset'
        el.innerHTML = 'Ẩn bớt'
    } else {
        p.style.webkitLineClamp = '2'
        el.innerHTML = 'Xem thêm'
    }
}
function star_rating(el) {
    document.getElementById('number_start').value = el.value;
}
function submit_comment(el) {
    var id = el.nextSibling.nextSibling.nextSibling.nextSibling.value
    var star = el.nextSibling.nextSibling.value
    var content = el.previousSibling.previousSibling.value
    if (content) {
        $.post("model/jQuery/load_comment.php", {
            "id": id,
            "star": star,
            "content": content,
        },
            function (data, textStatus, jqXHR) {
                $('.productdetail_comment-container').html(data);            
            },
        );
    }

}