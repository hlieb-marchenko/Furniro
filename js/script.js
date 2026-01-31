const BUTTON_VISIBLE_PIXEL = 350

const buttonToTop = document.querySelector(".link__top")

document.addEventListener("scroll", () => {
    if(BUTTON_VISIBLE_PIXEL < window.scrollY){
        buttonToTop.classList.add("_visible")
    } else{
        buttonToTop.classList.remove("_visible")
    }
})

buttonToTop.addEventListener("click", () => {
    const html = document.querySelector("html")
    html.scrollTo({top: 0, behavior: "smooth"})
})



