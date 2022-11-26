const activePage = window.location.pathname;
const navBar = document.querySelectorAll(".link-nav");
console.log(navBar);

navBar.forEach(link =>{
    if(link.href.includes(`${activePage}`)){
        link.classList.add('active');
    }
});


