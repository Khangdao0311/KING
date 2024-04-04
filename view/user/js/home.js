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






















// var array_image = [
//     'https://cdn0.fahasa.com/media/magentothem/banner7/Saigonbooks_Gold_Ver2_Slide_840x320.jpg',
//     'https://cdn0.fahasa.com/media/magentothem/banner7/HSO_T1_T324_Banner_resize_Slide_840x320.jpg',
//     'https://cdn0.fahasa.com/media/magentothem/banner7/BachVietT3_Slide_840x320.jpg',
//     'https://cdn0.fahasa.com/media/magentothem/banner7/MayTinh_Slide_840x320_1.jpg',
//     'https://cdn0.fahasa.com/media/magentothem/banner7/tranglego_resize_slidebanner_840x320_2.png'
// ]
// var index = 0
// var html_slide_nav = ''
// array_image.forEach(() => {
//     html_slide_nav += `
//         <div onclick="select(${index++})" class="slide-nav_item"></div>`
// })
// document.querySelector('.slide-nav').innerHTML =  html_slide_nav

// var lenght = array_image.length
// var count_slide = -1
// function slide() {
//     count_slide++
//     if (count_slide == lenght)  count_slide = 0 
//     document.querySelector('.slide-img').src = array_image[count_slide]; 
//     count_color = 0
//     array_image.forEach(() => {
//         document.getElementsByClassName('slide-nav_item')[count_color++].style.backgroundColor = '#FFF'; 
//     })
//     document.getElementsByClassName('slide-nav_item')[count_slide].style.backgroundColor = '#C92127'; 
// }

// setTimeout(slide,0)
// var slide_setInterval = setInterval(slide,2500)

// function next(){
//     count_slide++
//     if (count_slide == lenght)  count_slide = 0 
//     document.querySelector('.slide-img').src = array_image[count_slide];
//     count_color = 0
//     array_image.forEach(() => {
//         document.getElementsByClassName('slide-nav_item')[count_color++].style.backgroundColor = '#FFF'; 
//     })
//     document.getElementsByClassName('slide-nav_item')[count_slide].style.backgroundColor = '#C92127'; 
// }
// function previous(){
//     count_slide--
//     if (count_slide == -1)  count_slide = lenght - 1
//     document.querySelector('.slide-img').src = array_image[count_slide];
//     count_color = 0
//     array_image.forEach(() => {
//         document.getElementsByClassName('slide-nav_item')[count_color++].style.backgroundColor = '#FFF'; 
//     })
//     document.getElementsByClassName('slide-nav_item')[count_slide].style.backgroundColor = '#C92127'; 
// }
// function select(index) {
//     // clearTimeout(slide_setInterval);
//     count_slide = index
//     document.querySelector('.slide-img').src = array_image[count_slide];
//     count_color = 0
//     array_image.forEach(() => {
//         document.getElementsByClassName('slide-nav_item')[count_color++].style.backgroundColor = '#FFF'; 
//     })
//     document.getElementsByClassName('slide-nav_item')[count_slide].style.backgroundColor = '#C92127'; 
//     // setTimeout(() => {slide_setInterval = setInterval(slide,1000)},3000)
// }


