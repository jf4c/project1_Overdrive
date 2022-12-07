const menus = document.querySelectorAll(".menu");
const boxButtons = document.querySelectorAll(".boxMenu");

menus.forEach((element, i) => {
    element.addEventListener("click", () => {
        boxButtons[i].classList.toggle("onMenu"); 
    });
});
