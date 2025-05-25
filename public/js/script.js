let burger_status = false;

window.onload = function() {
    let button = document.getElementById("burger-menu-button");
    button.addEventListener("click", function() {
        let menu = document.getElementById("burger-menu");
        if (burger_status) {
            menu.style.display = "none";
            burger_status = false;
        } else {
            menu.style.display = "flex";
            burger_status = true;
        }
    });
}