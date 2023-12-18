const hamburgerMenu = document.querySelector(".navigation__hamburger");
const collapseNavigation = document.querySelector(".navigation__collapse");

hamburgerMenu.addEventListener("click", function () {
    collapseNavigation.classList.toggle("navigation__collapse--show");
});
