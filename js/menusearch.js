const menuIcon = document.getElementById("menu-icon");
const slideoutMenu = document.getElementById("mobile-navigation");
const searchIcon = document.getElementById("mainsearch-icon");
const searchBox = document.getElementById("main-searchbox");

searchIcon.addEventListener('click', function () {
    if (searchBox.style.top == '4em') {
        searchBox.style.top = '0';
        searchBox.style.pointerEvents = 'none';
    } else {
        searchBox.style.top = '4em';
        searchBox.style.pointerEvents = 'auto';
    }
});

menuIcon.addEventListener('click', function () {
    if (slideoutMenu.style.opacity == '1') {
        slideoutMenu.style.opacity = '0';
        slideoutMenu.style.pointerEvents = 'none';
    } else {
        slideoutMenu.style.opacity = '1';
        slideoutMenu.style.pointerEvents = 'auto';
    }
});