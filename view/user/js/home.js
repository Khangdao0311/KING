const swiper = new Swiper(".swiper", {
    autoplay: {
        delay: 2500
    },
    slidesPerView: 1,
    spaceBetween: 20,
    loop: true,
    pagination: {
        el: ".swiper-pagination",
        clickable: true,
    },
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev"
    },
});
const swiper_rating = new Swiper(".swiper_rating", {
    slidesPerView: 8,
    // breakpoints: {
    //     1024: { slidesPerView: 4 },
    //     768: { slidesPerView: 3 }, 
    //     500: { slidesPerView: 2 },
    // },
});
function show_rating(id) {
    $.post("model/load_show_rating.php", 
    {
        "id": id
    },
        function (data, textStatus, jqXHR) {
            $('.rating_container-right').html(data);
        },
    );
}
function show_category_rating(id) {
    $.post("model/load_show_category_rating.php", 
    {
        "id": id
    },
        function (data, textStatus, jqXHR) {
            $('.rating-container').html(data);
        },
    );
    }
