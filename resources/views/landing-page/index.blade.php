<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>MediaLand</title>
    @vite(['resources/js/app.js', 'resources/scss/app.scss'])

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>

</head>
<body>

<main>
    <header>
        <div class="logo"></div>
        <nav>
            <ul>
                <li>Branches</li>
                <li>Projects</li>
                <li>Our Network</li>
                <li>Awards</li>
                <li>Contact Us</li>
            </ul>
        </nav>
    </header>

    <section id="hero">

        <div class="section-wrapper">
            <div class="section-outer">
                <div class="cover ">
                    <div class='layer-bg layer parallax '></div>
                    <div class='layer-1 layer parallax' data-depth='0.20'></div>
                    <div class='layer-2 layer parallax' data-depth='0.30'></div>
                    <div class='layer-overlay layer parallax'></div>
                    <div class='end layer parallax'></div>

                </div>
            </div>

            <div class="section-inner">

                <!-- <div class="logo-container">
                    <div class="spinner">
                        <div class="spinner-layer-1"></div>
                        <div class="spinner-layer-2"></div>
                        <div class="spinner-layer-3"></div>
                        <div class="logo"></div>
                    </div>
                </div> -->

                <div class="section-info about-us">
                    <div class="wrapper">
                        <div class="title"> who are we
                        </div>
                        <div class="description">
                            Media Land Group is a pioneering company where creativity, innovation, and technology
                            converge to shape extraordinary spaces and events.
                        </div>

                        <div class="button">
                            Learn more
                        </div>
                    </div>

                </div>


                <div class="section-info our-mission">
                    <div class="wrapper">
                        <div class="title"> our mission
                        </div>
                        <div class="description">
                            At MLG, we blend creativity with precision, empowering visions through collaborative
                            partnerships and multidisciplinary services. Our commitment to excellence,
                            sustainability, and innovation drives us to create iconic landmarks and memorable
                            experiences. We aim to leave a lasting impact on the communities and industries we
                            serve.
                        </div>

                        <div class="button">
                            Learn more
                        </div>
                    </div>

                </div>
            </div>

        </div>

        </div>


    </section>

    <section id="statistics">

        <div class="section-inner">
            <div class="section-title">
                our stats

            </div>
            <div class="section-content">
                <div class="statistics">

                    <div class="statistic-item  members">
                        <div class="spinner">
                            <div class="spinner-layer-1"></div>
                            <div class="spinner-layer-2"></div>
                            <div class="stat-number" data-target="400"> 0</div>
                        </div>
                        <div class="stat-description">
                            <p>TEAM MEMBER</p>
                        </div>
                    </div>
                    <div class="statistic-item  projects">
                        <div class="spinner">
                            <div class="spinner-layer-1"></div>
                            <div class="spinner-layer-2"></div>
                            <div class="stat-number" data-target="100">0
                            </div>


                        </div>
                        <div class="stat-description">
                            <p>DELIVERED PROJECTS</p>
                        </div>
                    </div>
                    <div class="statistic-item partners">
                        <div class="spinner">
                            <div class="spinner-layer-1"></div>
                            <div class="spinner-layer-2"></div>
                            <div class="stat-number" data-target="75">0</div>

                        </div>
                        <div class="stat-description">
                            <p>PARTNER & VENDOR</p>
                        </div>

                    </div>
                    <div class="statistic-item countries">
                        <div class="spinner">
                            <div class="spinner-layer-1"></div>
                            <div class="spinner-layer-2"></div>
                            <div class="stat-number" data-target="3">0</div>

                        </div>
                        <div class="stat-description">
                            <p>PRESENT IN 3 COUNTRIES</p>
                        </div>

                    </div>
                </div>
            </div>
        </div>

    </section>
     @if($branches->isNotEmpty() )
        <section id="branches">
            <div class="section-warpper">

                <div class="section-inner">


                    <div class="section-content">
                        <div class="showcase-pin">
                            <div class="show-text">
                                <div class="show-text-contain">

                                    @foreach ($branches as $branch)

                                        <div class="show-text-item" >
                                            <div class="title" data-marker-content="{{$branch->id}}" >{{ $branch->name }}</div>
                                            <div class="text">
                                                {{ $branch->description }}

                                            </div>
                                            <div class="btn">
                                                <a href="{{ route('branches.show', $branch->id) }}"> Learn more</a>

                                            </div>
                                        </div>

                                    @endforeach


                                </div>


                            </div>


                            <div class="show-images">
                                <div class="show-img-contain">
                                    @foreach ($branches as $branch)

                                        <div class="show-image" id="branch-img-{{$branch->id}}">
                                             <img src="/storage/{{$branch->cover->image_path }}"
                                                 alt=""/>
                                        </div>
                                    @endforeach

                                </div>
                            </div>

                        </div>


                    </div>


                </div>


            </div>
        </section>

    @endif()

    @if($projects->isNotEmpty())

        <section id="projects">
            <div class="section-warpper">

                <div class="gallery">
                    <div class="gallery-filter">
                        <div class="btn selected">All</div>

                        @foreach ($branches as $branch)
                            <div class="btn">{{ $branch->name }}</div>
                        @endforeach
                    </div>

                    <div class="gallery-container">

                        @foreach ($projects as $project)

                            <div class="gallery-block">
                                <div class="gallery-block-content">
                                    <div class="gallery-block-image">
                                        <a href="single-work.html">
                                            <img src="/storage/{{$project->cover->image_path }}"
                                                 alt=""/>
                                        </a>

                                    </div>
                                    <div class="gallery-block-title">{{ $project->name }}</div>
                                    <div class="gallery-block-heading">{{ $project->branch->name }}</div>
                                    <div class="gallery-block-more">
                                        <a class="view-more" href="{{ route('projects.show', $project->id) }}">View
                                            Project
                                            <i
                                                class="fa-solid fa-arrow-right fa-fw"></i></a>

                                    </div>
                                </div>
                            </div>

                        @endforeach


                    </div>
                </div>


                <div class="section-inner">
                    <div class="section-inner-warpper">
                        <div class="section-title">
                        </div>
                        <div class="section-content">


                        </div>

                        <div class="section-buttons">

                        </div>
                    </div>


                </div>


            </div>

        </section>
    @endif()

    <!--

      <section id="awards">
            <div class="section-warpper">
                <div class="section-outer"></div>
                <div class="section-inner">
                    <div class="section-title">

                    </div>

                    <div class="section-content">


                    </div>

                </div>
            </div>
        </section>



    -->

    <div class="heighlight">

        <section id="network">
            <div class="section-warpper">
                <div class="section-outer"></div>
                <div class="section-inner">
                    <div class="section-title">
                    </div>

                    <div class="section-content">

                        <img src="https://placehold.co/400x300" height="400" width="300" alt=""/>
                        <img src="https://placehold.co/400x300" height="400" width="300" alt=""/>
                        <img src="https://placehold.co/400x300" height="400" width="300" alt=""/>
                        <img src="https://placehold.co/400x300" height="400" width="300" alt=""/>
                        <img src="https://placehold.co/400x300" height="400" width="300" alt=""/>
                        <img src="https://placehold.co/400x300" height="400" width="300" alt=""/>

                    </div>

                </div>
            </div>
        </section>

        <footer></footer>
    </div>


</main>


<script src="https://cdnjs.cloudflare.com/ajax/libs/particlesjs/2.2.2/particles.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/11.0.5/swiper-bundle.min.js"
        integrity="sha512-Ysw1DcK1P+uYLqprEAzNQJP+J4hTx4t/3X2nbVwszao8wD+9afLjBQYjz7Uk4ADP+Er++mJoScI42ueGtQOzEA=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/gsap.min.js"
        integrity="sha512-7eHRwcbYkK4d9g/6tD/mhkf++eoTHwpNM9woBxtPUBWm67zeAfFC+HrdoE2GanKeocly/VxeLvIqwvCdk7qScg=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/ScrollTrigger.min.js"
        integrity="sha512-onMTRKJBKz8M1TnqqDuGBlowlH0ohFzMXYRNebz+yOcc5TQr/zAKsthzhuv0hiyUKEiQEQXEynnXCvNTOk50dg=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://unpkg.com/lenis@1.1.5/dist/lenis.min.js"></script>

<script>

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
                onUpdate:(self) => {
                    getCurrentSection()
                },
                scrub: true,
                //  markers:true,
            },
        });



        const contentMarkers = gsap.utils.toArray(".showcase-pin  .show-text .show-text-contain .show-text-item  .title ");

        contentMarkers.forEach(marker => {

            marker.content = document.querySelector(`#branch-img-${marker.dataset.markerContent}  img`);
            gsap.set(marker.content, {transformOrigin: "center"});

            marker.content.enter = function () {
                gsap.fromTo(marker.content, {  autoAlpha: 0 }, {duration: 0.3, autoAlpha: 1 });
            }

            marker.content.leave = function () {
                gsap.fromTo(marker.content, { autoAlpha: 1 } , {duration: 0.1, autoAlpha: 0});
            }

        });
        let lastContent;
        function getCurrentSection() {
            let newContent;

            const currScroll = scrollY;
            // Find the current section
            const element = document.querySelector('.show-img-contain');
            contentMarkers.forEach(marker => {



                if(marker.getBoundingClientRect().top < element.getBoundingClientRect().bottom) {
                    newContent = marker.content;
                }

            });


            if(newContent
                && (lastContent == null
                    || !newContent.isSameNode(lastContent))) {
                // Fade out last section
                if(lastContent) {
                    lastContent.leave();
                }

                // Animate in new section
                newContent.enter();

                lastContent = newContent;
            }

        }





        const projectSectionAnimation = gsap.timeline({
            scrollTrigger: {
                trigger: ".show-text",
                start: "top top",
                end: "bottom 80%",
                toggleActions: "play complete play reset",
                scrub: true,
                //  markers:true,
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
        //initSwiper();
    });


</script>
</body>
</html>
