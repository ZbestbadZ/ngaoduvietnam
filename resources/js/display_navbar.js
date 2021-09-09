var nav = document.querySelector("js-navbar");

window.addEventListener("scroll", function () {
    if (window.pageYOffset > 0) {
        nav.classList.add("bg-dark", "shadow");
    } else {
        nav.classList.remove("bg-dark", "shadow");
    }
});
