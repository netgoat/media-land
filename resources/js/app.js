import './bootstrap';


// Initialize Lenis for smooth scrolling
const lenis = new Lenis();
lenis.on("scroll", (e) => {
    //console.log(e);
});

function raf(time) {
    lenis.raf(time);
    requestAnimationFrame(raf);
}

requestAnimationFrame(raf);

// Initialize GSAP animations
function initGsapAnimations() {
    // Hero section animation
    const tl = gsap.timeline({
        scrollTrigger: {
            trigger: "#hero",
            start: "top top",
            end: "bottom top",
            toggleActions: "play complete reverse reset",
            scrub: true,
            pin: "#hero",
            ease: "power2",
            // markers: true,
        },
    });

    gsap.utils.toArray(".parallax").forEach((layer) => {
        const depth = layer.dataset.depth;
        const movement = layer.offsetHeight * depth;
        tl.to(layer, {y: movement * 1.5, ease: "none"}, 0);
    });

    tl.to(
        ".end",
        {
            opacity: 1,
            ease: "none",
        },
        "80%"
    );

    tl.to(
        "header",
        {
            position: "absolute",
            ease: "slow",
        },
        "80%"
    );


    tl.to(
        "#hero  .section-inner    .about-us",
        {
            y: 0,
            opacity: 1,
            ease: "power3",
        },
        "60%"
    );

    tl.to(
        "#hero  .section-inner    .about-us",
        {
            y: -100,
            opacity: 0,
            ease: "power3",
        },
        "50%"
    );

    tl.to(
        "#hero  .section-inner    .our-mission",
        {
            y: 0,
            opacity: 1,
            ease: "slow",
        },
        "40%"
    );

    //Statistics section title animation
    const statisticsSectionTitleAnimation = gsap.timeline({
        scrollTrigger: {
            trigger: "#statistics",
            start: "top center",
            end: "top 20%",
            toggleActions: "play complete play reset",
            scrub: true,
            // markers:true
        },
    });

    statisticsSectionTitleAnimation.to("#statistics .section-title", {
        opacity: 1,
        y: 0,
    });

    //Statistics   items  animation
    const statisticsPinAnimation = gsap.timeline({
        scrollTrigger: {
            trigger: "#statistics",
            start: "top top",
            pin: "#statistics",
            end: "bottom top",
            toggleActions: "play complete play reset",
            scrub: true,
        },
    });

    //Statistics   items  animation
    const statisticsItemsAnimation = gsap.timeline({
        scrollTrigger: {
            trigger: "#statistics",
            start: "top 30%",
            end: "bottom top",
            toggleActions: "play complete play reset",
            scrub: true,
            // markers: true,
        },
    });
    statisticsItemsAnimation.to(
        ".projects ",
        {
            opacity: 0.7,
            x: 0,
            y: 0,
            ease: "power3",
        },
        "60%"
    );
    statisticsItemsAnimation.to(
        ".partners ",
        {
            opacity: 0.7,
            x: 0,
            y: 0,
            ease: "power3",
        },
        "60%"
    );
    statisticsItemsAnimation.to(
        ".members ",
        {
            opacity: 0.7,
            x: 0,
            y: 0,
            ease: "power3",
        },
        "40%"
    );
    statisticsItemsAnimation.to(
        ".countries ",
        {
            opacity: 0.7,
            x: 0,
            y: 0,
            ease: "power3",
        },
        "40%"
    );


    //Statistics section title animation
    const showcasePineAnimation = gsap.timeline({
        scrollTrigger: {
            trigger: ".show-text",
            start: "top top",
            end: "bottom 80%",
            toggleActions: "play complete play reset",
            pin: ".show-images",
            onUpdate: (self) => {
                getCurrentSection()
            },
            scrub: true,
        },
    });


    const contentMarkers = gsap.utils.toArray(".showcase-pin  .show-text .show-text-contain .show-text-item");

    contentMarkers.forEach(marker => {

        marker.content = document.querySelector(`#branch-img-${marker.dataset.markerContent}`);
        gsap.set(marker.content, {transformOrigin: "center"});

        marker.content.enter = function () {
            gsap.fromTo(marker.content, {autoAlpha: 0}, {duration: 0.3, autoAlpha: 1});
        }

        marker.content.leave = function () {
            gsap.fromTo(marker.content, {autoAlpha: 1}, {duration: 0.1, autoAlpha: 0});
        }

    });
    let lastContent;

    function getCurrentSection() {
        let newContent;
        let currentSection;
        const currScroll = scrollY;
        // Find the current section
        const element = document.querySelector('.show-img-contain');
        contentMarkers.forEach(marker => {

            if (marker.getBoundingClientRect().bottom < element.getBoundingClientRect().bottom && marker.getBoundingClientRect().bottom > element.getBoundingClientRect().top) {
                currentSection = marker
            }

        });


        let inset  = ( ( ( element.getBoundingClientRect().bottom  -  currentSection.getBoundingClientRect().bottom ) /  element.getBoundingClientRect().height ) * 100 )

        gsap.to( "#branch-img-"+currentSection.dataset.markerContent  , {
            clipPath: "inset(0% 0% "+customRound(inset)+"% 0%)",

        })
/*
        console.log(`#branch-img-${currentSection.dataset.markerContent} bottom : ${JSON.stringify(currentSection.getBoundingClientRect().bottom)} `)
        console.log("img-container bottom: " + JSON.stringify(element.getBoundingClientRect().bottom))
        console.log("img-container top : " + JSON.stringify(element.getBoundingClientRect().top)
            */

    }

    function customRound(value) {
        if (value % 1 >= 0.5 && value >= 99) {
            return Math.ceil(value);
        } else {
            return Math.floor(value);
        }
    }


    /*
    *
    *   function getCurrentSection() {
        let newContent;
        let currentSection;
        const currScroll = scrollY;
        // Find the current section
        const element = document.querySelector('.show-img-contain');
        contentMarkers.forEach(marker => {
            if (marker.getBoundingClientRect().top < element.getBoundingClientRect().bottom) {
                newContent = marker.content;
                currentSection = marker.content
            }

        });

        console.log(currentSection)

        if (newContent
            && (lastContent == null
                || !newContent.isSameNode(lastContent))) {
            // Fade out last section
            if (lastContent) {
                lastContent.leave();
            }

            // Animate in new section
            newContent.enter();

            lastContent = newContent;
        }

    }


  */
    const projectSectionAnimation = gsap.timeline({
        scrollTrigger: {
            trigger: ".show-text",
            start: "top top",
            end: "bottom 80%",
            toggleActions: "play complete play reset",
            scrub: true,
        },
    });


    const awardsSectionAnimation = gsap.timeline({
        scrollTrigger: {
            trigger: "#network",
            start: "-200% top",
            end: "bottom -30%",
            toggleActions: "play complete play reset",
            scrub: true,
        },
    });

    awardsSectionAnimation.to(
        " #network .section-content",
        {
            x: "-50%",
            ease: "ease",
        }
    );


    const footerSectionAnimation = gsap.timeline({
        scrollTrigger: {
            trigger: "#network",
            start: "top top ",
            end: "bottom top",
            toggleActions: "play complete play reset",
        },
    });


    footerSectionAnimation.to(
        ".heighlight",
        {
            background: "linear-gradient(180deg,  #00011b , #5ab597)",
            duration: 1,
            ease: "none"
        }
    );

}


// Initialize everything
document.addEventListener("DOMContentLoaded", () => {
    initGsapAnimations();

    // Select the menu button and the panel
    const menuButton = document.querySelector(".menu");
    const menuLines1 = document.querySelector(".l1 ");
    const menuLines2 = document.querySelector(".l2");
    const menuPanel = document.querySelector(".menu-panel");
    const navItems = document.querySelectorAll(".nav-item");

    // Toggle the menu panel's clip-path on menu button click
    menuButton.addEventListener("click", function () {
        if (menuPanel.style.clipPath === "circle(300% at 100% 0%)") {
            menuPanel.style.clipPath = "circle(0% at 100%  0%)";
            menuLines1.style = "transform: translate(0px, 0px) rotate(-0deg)"
            menuLines2.style = "transform: rotate(0deg)"
                 navItems.forEach(item => {
                    item.style.opacity = "1";
                });

        } else {
            menuPanel.style.clipPath = "circle(300% at 100%  0%)";
            menuLines1.style = "transform: translate(0px, 6px) rotate(-45deg)"
            menuLines2.style = "transform: rotate(45deg)"

            navItems.forEach(item => {
                item.style.opacity = "0";
            });
        }
    });




    /**
     * Testimonials slider
     */
    new Swiper('.testimonials-slider', {
        speed: 600,
        loop: true,
        autoplay: {
            delay: 5000,
            disableOnInteraction: false
        },
        slidesPerView: 'auto',
        pagination: {
            el: '.swiper-pagination',
            type: 'bullets',
            clickable: true
        }
    });
});

