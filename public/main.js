let tabs = document.querySelectorAll(".tab")
let indicator = document.querySelector(".indicator")
let panels = document.querySelectorAll(".tab-panel")

indicator.style.width = tabs[0].getBoundingClientRect().width + 'px'
indicator.style.left = tabs[0].getBoundingClientRect().left - tabs[0].parentElement.getBoundingClientRect().left + 'px'

tabs.forEach(tab => {
    tab.addEventListener("click", () => {
        let tabTarget = tab.getAttribute("aria-controls")

        indicator.style.width = tab.getBoundingClientRect().width + 'px'
        indicator.style.left = tab.getBoundingClientRect().left - tab.parentElement.getBoundingClientRect().left + 'px'


        panels.forEach(panel => {
            let panelId = panel.getAttribute("id")
            if (tabTarget === panelId) {
                panel.classList.remove("invisible", "opacity-0")
                panel.classList.add("visible", "opacity-100")
            } else {
                panel.classList.add("invisible", "opacity-0")
            }
        })
    })
})


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


$(".option").click(function() {
    $(".option").removeClass("active");
    $(this).addClass("active");

});