// dodanie klas po zjechaniu
let scrollTop = window.scrollY;
const scrolled = document.querySelector(".menu-scroll");
const topButton = document.querySelector("#topButton");

function add_class_on_scroll() {
    scrolled.classList.add("show");
    topButton.classList.add("top");
}
function remove_class_on_scroll() {
    scrolled.classList.remove("show");
    topButton.classList.remove("top");
} 

window.addEventListener('scroll', function() {
    scrollTop = window.scrollY;
    if (scrollTop >= 400) { add_class_on_scroll() }
    else { remove_class_on_scroll() }
})


//guzik skrolujący na górę strony
function topFunction() {
    document.body.scrollTop = 0; // For Safari
    document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
} 

//hamburger menu toggle
const hamburger = document.querySelector(".menu-mobile");

hamburger.addEventListener('click', function() {
    hamburger.classList.toggle('toggle_menu');
})