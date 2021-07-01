const submenuBtn = document.querySelector(".menu-item-has-children");
const submenu = document.querySelector(".sub-menu");

submenuBtn.addEventListener('click', function(event) {
    submenu.classList.toggle('active');
});
