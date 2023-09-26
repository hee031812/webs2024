//모달
const modalBtn = document.querySelector(".modal__btn");
const modalClose = document.querySelector(".modal__close");
const modalCont = document.querySelector(".modal__cont");

modalBtn.addEventListener("click", () => {
    modalCont.classList.add("show");
    modalCont.classList.remove("hide");

})
modalClose.addEventListener("click", () => {
    modalCont.classList.add("hide");
    modalCont.classList.remove("show");

})

//탭메뉴
const tapBtn = document.querySelectorAll(".modal__box .taps > div");
const tapCont = document.querySelectorAll(".modal__box .cont > div");

tapBtn.forEach((Element, index) => {
    Element.addEventListener("click", (e) => {
        e.preventDefault();

        tapBtn.forEach(li => {li.classList.remove("active")});
        Element.classList.add("active");

        tapCont.forEach(div => {div.style.display = "none"});
        tapCont[index].style.display = "block";
    })
})