class MobileNavbar {
    constructor(){
        this.MobileNavbar = document.querySelector(MobileNavbar);
        this.navList = document.querySelector(navList);
        this.navLinks = document.querySelectorAll(MnavLink);
        this.activeClass = "active";

        this.handleClick = this.handleClick.bind(this);
    }
    animateLinks(){
        this.navLinks.forEach((link, index)=>{
            link.style.animation
            ?(link.style.animation = " ")
            :(link.style.animation) = 'navLinkFade 0.5s ease forwards $
            {index / 7 + 0.3}s');
        })

    }
    handleClick(){
       
        this.navList.classList.toggle(this.activeClass);
        this.mobileMenu.classList.toggle(this.activeClass);
        this.animateLinks();
    }
    

    addClickEvent(){
        this.mobileMenu.addEventListener("click" , this.handleClick);
    }

    init() {
        if (this.mobileMenu){
            this.addClickEvent
        }
        return this;
    }
    const mobileNavbar = new mobileNavbar(
        ".mobile.menu",
        ".nav-list",
        ".nav-list li",
    );
    mobileNavbar.init();
}