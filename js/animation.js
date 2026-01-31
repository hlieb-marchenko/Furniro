const animItems = document.querySelectorAll("._anim-item")

if(animItems.length) {
    function animOnScroll(){
        animItems.forEach(item => {
            const itemHeight = item.offsetHeight;
            const itemPosition = offset(item).top;
            const animCoeff = 4;

            let animItemPoint = window.innerHeight - itemHeight / animCoeff

            itemHeight > window.innerHeight ? animItemPoint = window.innerHeight - window.innerHeight / animCoeff : console.log();

            if(pageYOffset > itemPosition - animItemPoint && pageYOffset < itemPosition + animItemPoint){
                item.classList.add("active")
            } else{
                item.classList.remove("active")
            }
        })
    }
    function offset(el){
        const rect = el.getBoundingClientRect(),
          scrollLeft = window.pageXOffset || document.documentElement.scrollLeft,
          scrollTop = window.pageYOffset || document.documentElement.scrollTop;
  
        return {top: rect.top + scrollTop, left: rect.left + scrollLeft}
      }
    setTimeout(animOnScroll, 250)
    window.addEventListener("scroll", animOnScroll)
}







