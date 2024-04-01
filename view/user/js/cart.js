function minus_cart(el) {
    const quantity = el.nextSibling.nextSibling
    const quantity_new = quantity.value - 1;
    if (quantity_new > 0) {
        quantity.value = quantity_new
    }
} 
function plus_cart(el) {
    const quantity = el.previousSibling.previousSibling
    const quantity_new = quantity.value*1 + 1; 
    if (quantity_new <= 10){
        quantity.value = quantity_new
    }
}