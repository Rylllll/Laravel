document.addEventListener('alpine:init', () => {
    Alpine.data('topBtn', () => ({
        scrolltoTop() {
            document.body.scrollTop = 0;
            document.documentElement.scrollTop = 0;
        }
    }));
});

const topBtn = document.getElementById("topButton");
window.onscroll = () => {
    (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) ?
    topBtn.classList.remove("hidden"): topBtn.classList.add("hidden");

}


const navbar = document.querySelector('nav');

let prevScrollpos = window.pageYOffset;

window.onscroll = function() {
    const currentScrollPos = window.pageYOffset;
    if (prevScrollpos > currentScrollPos) {
        navbar.classList.remove('navbar-hidden');
        navbar.classList.add('navbar-visible');
    } else {
        navbar.classList.remove('navbar-visible');
        navbar.classList.add('navbar-hidden');
    }
    prevScrollpos = currentScrollPos;
}