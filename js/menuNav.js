console.log("test");
const nav = document.querySelectorAll(".li-nav");

nav.forEach((e) =>{
    e.addEventListener("click", (element) =>{
        element.classList.toggle("active");
    });
});

