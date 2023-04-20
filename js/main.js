////// Nav Bar //////

const navSlide = () => {
    const burger = document.querySelector('.menu_burger');
    const nav = document.querySelector('.nav_links');
    // Need to fix "navExtend" when not in mobile view
    const navExtend = document.querySelector('nav');
    const navLinks = document.querySelectorAll('.nav_links li');

    
    burger.addEventListener('click', () => {
        // Toggle Navigation Bar
        nav.classList.toggle('nav_links_active');
        navExtend.classList.toggle('nav_active');

        // Animation Links
        navLinks.forEach((link, index)=>{
            if(link.style.animation) {
                link.style.animation = '';
            } else {
                link.style.animation = `navLinkFade 0.5s ease forwards ${index / 7 + 0.2}s`;
            }
            
        });

        // Animation Burger
        burger.classList.toggle('toggle');

    });

    // When a link is clicked, toggle nav bar off
    nav.onclick = ()=>{
        // Toggle Navigation Bar & Burger
        nav.classList.remove('nav_links_active');
        navExtend.classList.remove('nav_active');
        burger.classList.remove('toggle');

        // Animation Links
        navLinks.forEach((link, index)=>{
            if(link.style.animation) {
                link.style.animation = '';
            }
        });
    }

    // window.addEventListener('resize',() => {
    //     if(window.innerWidth > 768)
    //     {
    //         nav.classList.remove('nav_links_active');
    //         navExtend.classList.remove('nav_active');

    //         burger.classList.remove('toggle');
    //     } else {
            
    //     }
    // });

}


navSlide();