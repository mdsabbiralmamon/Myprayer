// ==============================
//=================== loading
// ==============================

window.addEventListener("load", () => {
    setTimeout(() => {
        document.querySelector(".loading").classList.add("reload");
        document.body.classList.add("reload");
    }, 3000)
});



// ===============================================
//=================== navbar menu active click
// ===============================================

let menu = document.querySelector(".menu");
let btnOpen = document.querySelector(".open-menu");
let btnClose = document.querySelector(".close-menu");

btnOpen.addEventListener("click", () => {
    menu.classList.add("active");
    btnClose.addEventListener("click", () => {
        menu.classList.remove("active");
    })
})




// ===============================================
//=================== navbar link active click
// ===============================================




let section = document.querySelectorAll("section");
let navLink = document.querySelectorAll(".nav-link");



navLink.forEach((e) => {
    e.addEventListener("click", (x) => {
        x.preventDefault()
        navLink.forEach((el) => {
            el.classList.remove("active")
        })

        e.classList.add("active");
        menu.classList.remove("active");
        for (let sect of section) {

            sect.classList.add("hidden")
            if (sect.getAttribute("data-section") === e.getAttribute("data-section")) {
                sect.classList.remove("hidden")
            }
        }
    })
});