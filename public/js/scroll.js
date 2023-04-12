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


window.addEventListener('scroll', function() {
    var navbar = document.querySelector('nav');
    var scrollPosition = window.pageYOffset;
    if (scrollPosition > 0) {
        navbar.classList.add('shadow-lg');
    } else {
        navbar.classList.remove('shadow-lg');
    }
});

const sr = ScrollReveal({
        distance: '60px',
        duration: 2800,

    })
    // ScrollReveal({ reset: true });


sr.reveal(".latest_up, .latest", {
    origin: 'left',
})

sr.reveal(".slide-down, .slide-right", {
    origin: 'top',
    interval: 100,
})