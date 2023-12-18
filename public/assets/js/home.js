const hamburgerMenu = document.querySelector(".navigation__hamburger");
const collapseNavigation = document.querySelector(".navigation__collapse");
const collapseNavigationBackDrop = document.querySelector(".back-drop");

hamburgerMenu.addEventListener("click", function () {
    collapseNavigation.classList.add("navigation__collapse--show");
    collapseNavigationBackDrop.classList.add("back-drop--show");
});

collapseNavigationBackDrop.addEventListener("click", function () {
    collapseNavigation.classList.remove("navigation__collapse--show");
    collapseNavigationBackDrop.classList.remove("back-drop--show");
});
