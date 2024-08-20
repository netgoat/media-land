<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>MediaLand</title>

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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.11.3/font/bootstrap-icons.min.css" integrity="sha512-dPXYcDub/aeb08c63jRq/k6GaKccl256JQy/AnOq7CAnEZ9FzSL9wSbcZkMp4R26vBsMLFYH4kQ67/bbV8XaCQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    @vite(['resources/js/app.js', 'resources/scss/app.scss'])

</head>
<body>
<div class="menu-panel">
    <div class="menu-container">

        <div class="menu-items">
            <div class="menu-item">Branches</div>
            <div class="menu-item">Projects</div>
            <div class="menu-item">Our Network</div>
            <div class="menu-item">Awards</div>
            <div class="menu-item">Contact Us</div>
        </div>


    </div>
</div>

<main>
    <header>
        <div class="logo"></div>
        <nav>
            <ul>
                <li class="nav-item">Branches</li>
                <li class="nav-item">Projects</li>
                <li class="nav-item">Our Network</li>
                <li class="nav-item">Awards</li>
                <li class="nav-item">Contact Us

                <li class="menu">
                    <svg class="menuLines l1" xmlns="http://www.w3.org/2000/svg" width="27" height="3"
                         viewBox="0 0 27 3">
                        <rect id="Rectangle_298" data-name="Rectangle 298" width="25" height="2.5" rx="1.5"
                              fill="#F5F5F7"></rect>
                    </svg>
                    <svg class="menuLines l2" xmlns="http://www.w3.org/2000/svg" width="27" height="3"
                         viewBox="0 0 27 3">
                        <rect id="Rectangle_298" data-name="Rectangle 298" width="25" height="2.5" rx="1.5"
                              fill="#F5F5F7"></rect>
                    </svg>


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

                        <div class="button-wrap">
                            <div class="button-overlay"> Learn more
                            </div>
                            <div class="button">
                                Learn more
                            </div>
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

                        <div class="button-wrap">
                            <div class="button-overlay"> Learn more
                            </div>
                            <div class="button">
                                Learn more
                            </div>
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
                            <div class="stat-number" data-target="400"> 400</div>
                        </div>
                        <div class="stat-description">
                            <p>TEAM MEMBER</p>
                        </div>
                    </div>
                    <div class="statistic-item  projects">
                        <div class="spinner">
                            <div class="spinner-layer-1"></div>
                            <div class="spinner-layer-2"></div>
                            <div class="stat-number" data-target="100">100
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
                            <div class="stat-number" data-target="75">75</div>

                        </div>
                        <div class="stat-description">
                            <p>PARTNER & VENDOR</p>
                        </div>

                    </div>
                    <div class="statistic-item countries">
                        <div class="spinner">
                            <div class="spinner-layer-1"></div>
                            <div class="spinner-layer-2"></div>
                            <div class="stat-number" data-target="3">3</div>

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

                                        <div class="show-text-item" data-marker-content="{{$branch->id}}">

                                            <div class="title">{{ $branch->name }}</div>
                                            <div class="text">{{ $branch->description }}</div>

                                            <div class="button-wrap">
                                                <div class="button-overlay">
                                                    <a href="{{ route('branches.show', $branch->id) }}"> Learn more</a>
                                                </div>
                                                <div class="button">
                                                    <a href="{{ route('branches.show', $branch->id) }}"> Learn more</a>
                                                </div>
                                            </div>


                                        </div>

                                    @endforeach


                                </div>


                            </div>


                            <div class="show-images">
                                <div class="show-img-contain">
                                    @foreach ($branches as $branch)

                                        <div class="show-image" id="branch-img-{{$branch->id}}"  style="z-index: {{100 - $branch->id}}">
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


    <section id="projects">
        <div class="section-warpper">

            <div class="gallery">
                <div class="gallery-filter">
                    <div class="btn selected">All</div>

                    @foreach ($branches as $branch)
                        <div class="btn" onclick="filter({{$branch->id}})">{{ $branch->name }}</div>
                    @endforeach
                </div>

                <div class="gallery-container">
                    @if($projects->isNotEmpty())
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
                    @endif()

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

    <section id="testimonials" class="testimonials">
        <div class="container aos-init aos-animate" data-aos="zoom-in">

            <div class="testimonials-slider swiper swiper-initialized swiper-horizontal swiper-pointer-events aos-init aos-animate" data-aos="fade-up" data-aos-delay="100">

                <div class="swiper-wrapper" id="swiper-wrapper-838ec9ef97f301fa" aria-live="off" style="transform: translate3d(-7776px, 0px, 0px); transition-duration: 0ms;"><div class="swiper-slide swiper-slide-duplicate swiper-slide-duplicate-prev" data-swiper-slide-index="0" role="group" aria-label="1 / 5">
                        <div class="testimonial-item">
                            <img src="/storage//testimonials/testimonials-1.jpg" class="testimonial-img" alt="">
                            <h3>Saul Goodman</h3>
                            <h4>Ceo &amp; Founder</h4>
                            <p>
                                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper.
                                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                            </p>
                        </div>
                    </div>

                    <div class="swiper-slide swiper-slide-duplicate swiper-slide-duplicate-active" data-swiper-slide-index="1" role="group" aria-label="2 / 5">
                        <div class="testimonial-item">
                            <img src="/storage//testimonials/testimonials-2.jpg" class="testimonial-img" alt="">
                            <h3>Sara Wilsson</h3>
                            <h4>Designer</h4>
                            <p>
                                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid cillum eram malis quorum velit fore eram velit sunt aliqua noster fugiat irure amet legam anim culpa.
                                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                            </p>
                        </div>
                    </div><div class="swiper-slide swiper-slide-duplicate swiper-slide-duplicate-next" data-swiper-slide-index="2" role="group" aria-label="3 / 5">
                        <div class="testimonial-item">
                            <img src="/storage//testimonials/testimonials-3.jpg" class="testimonial-img" alt="">
                            <h3>Jena Karlis</h3>
                            <h4>Store Owner</h4>
                            <p>
                                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem veniam duis minim tempor labore quem eram duis noster aute amet eram fore quis sint minim.
                                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                            </p>
                        </div>
                    </div>
                    <div class="swiper-slide swiper-slide-duplicate" data-swiper-slide-index="3" role="group" aria-label="4 / 5">
                        <div class="testimonial-item">
                            <img src="/storage//testimonials/testimonials-4.jpg" class="testimonial-img" alt="">
                            <h3>Matt Brandon</h3>
                            <h4>Freelancer</h4>
                            <p>
                                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim fugiat minim velit minim dolor enim duis veniam ipsum anim magna sunt elit fore quem dolore labore illum veniam.
                                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                            </p>
                        </div>
                    </div>
                    <div class="swiper-slide swiper-slide-duplicate" data-swiper-slide-index="4" role="group" aria-label="5 / 5">
                        <div class="testimonial-item">
                            <img src="/storage//testimonials/testimonials-5.jpg" class="testimonial-img" alt="">
                            <h3>John Larson</h3>
                            <h4>Entrepreneur</h4>
                            <p>
                                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor noster veniam enim culpa labore duis sunt culpa nulla illum cillum fugiat legam esse veniam culpa fore nisi cillum quid.
                                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                            </p>
                        </div>
                    </div>

                    <div class="swiper-slide swiper-slide-prev" data-swiper-slide-index="0" role="group" aria-label="1 / 5">
                        <div class="testimonial-item">
                            <img src="/storage//testimonials/testimonials-1.jpg" class="testimonial-img" alt="">
                            <h3>Saul Goodman</h3>
                            <h4>Ceo &amp; Founder</h4>
                            <p>
                                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper.
                                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                            </p>
                        </div>
                    </div><!-- End testimonial item -->

                    <div class="swiper-slide swiper-slide-active" data-swiper-slide-index="1" role="group" aria-label="2 / 5">
                        <div class="testimonial-item">
                            <img src="/storage//testimonials/testimonials-2.jpg" class="testimonial-img" alt="">
                            <h3>Sara Wilsson</h3>
                            <h4>Designer</h4>
                            <p>
                                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid cillum eram malis quorum velit fore eram velit sunt aliqua noster fugiat irure amet legam anim culpa.
                                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                            </p>
                        </div>
                    </div><!-- End testimonial item -->

                    <div class="swiper-slide swiper-slide-next" data-swiper-slide-index="2" role="group" aria-label="3 / 5">
                        <div class="testimonial-item">
                            <img src="/storage//testimonials/testimonials-3.jpg" class="testimonial-img" alt="">
                            <h3>Jena Karlis</h3>
                            <h4>Store Owner</h4>
                            <p>
                                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem veniam duis minim tempor labore quem eram duis noster aute amet eram fore quis sint minim.
                                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                            </p>
                        </div>
                    </div><!-- End testimonial item -->

                    <div class="swiper-slide" data-swiper-slide-index="3" role="group" aria-label="4 / 5">
                        <div class="testimonial-item">
                            <img src="/storage//testimonials/testimonials-4.jpg" class="testimonial-img" alt="">
                            <h3>Matt Brandon</h3>
                            <h4>Freelancer</h4>
                            <p>
                                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim fugiat minim velit minim dolor enim duis veniam ipsum anim magna sunt elit fore quem dolore labore illum veniam.
                                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                            </p>
                        </div>
                    </div><!-- End testimonial item -->

                    <div class="swiper-slide" data-swiper-slide-index="4" role="group" aria-label="5 / 5">
                        <div class="testimonial-item">
                            <img src="/storage//testimonials/testimonials-5.jpg" class="testimonial-img" alt="">
                            <h3>John Larson</h3>
                            <h4>Entrepreneur</h4>
                            <p>
                                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor noster veniam enim culpa labore duis sunt culpa nulla illum cillum fugiat legam esse veniam culpa fore nisi cillum quid.
                                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                            </p>
                        </div>
                    </div><!-- End testimonial item -->

                </div>
                <div class="swiper-pagination swiper-pagination-clickable swiper-pagination-bullets swiper-pagination-horizontal"><span class="swiper-pagination-bullet" tabindex="0" role="button" aria-label="Go to slide 1"></span><span class="swiper-pagination-bullet swiper-pagination-bullet-active" tabindex="0" role="button" aria-label="Go to slide 2" aria-current="true"></span><span class="swiper-pagination-bullet" tabindex="0" role="button" aria-label="Go to slide 3"></span><span class="swiper-pagination-bullet" tabindex="0" role="button" aria-label="Go to slide 4"></span><span class="swiper-pagination-bullet" tabindex="0" role="button" aria-label="Go to slide 5"></span></div>
                <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span></div>

        </div>
    </section>

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

        <footer>
            <div class="company-info">

                <div class="logo-container">
                    <div class="spinner">
                        <div class="spinner-layer-1"></div>
                        <div class="spinner-layer-2"></div>
                        <div class="spinner-layer-3"></div>
                        <div class="logo"></div>
                    </div>
                </div>

                <div class="branches-info-container">
                    <div class="branche-info">
                        <div class="branche-info-title">UAE (HEAD OFFICE)</div>
                        <div class="branche-info-address">Plot No. 598-532, DIP – Phase 1 P.O Box 502174, Dubai, UAE
                        </div>
                        <div class="branche-info-tel">Tel: +97142551113</div>
                        <div class="branche-info-mob">Mob: +971528996616</div>
                    </div>

                    <div class="branche-info">
                        <div class="branche-info-title">SAUDI ARABIA - RIYADH</div>
                        <div class="branche-info-address">King Abdul Aziz Road, 7633.2154.13312 1st Floor, office
                            No.22
                        </div>
                        <div class="branche-info-tel">Tel: +966 112049991</div>
                        <div class="branche-info-mob">Mob: +966 504453361</div>
                    </div>

                    <div class="branche-info">
                        <div class="branche-info-title">EGYPT - NEW CAIRO</div>
                        <div class="branche-info-address">Office 1.C, Building B2 Mivida Business Park</div>
                        <div class="branche-info-tel">Tel: +20244872110</div>
                        <div class="branche-info-mob">Mob: +20120044413</div>
                    </div>
                </div>

            </div>
            <div class="box-container">
                <div class="box">
                </div>

                <div class="box">
                    <div class="box-title">
                        <h4>Units</h4>
                    </div>
                    <div class="box-content">

                        <ul>
                            <li>CONSTRUCTION & ARCHITECTURE</li>
                            <li>EXHIBITIONS & CONFERENCES
                            </li>
                            <li>EVENT PRODUCTION
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="box">
                    <div class="box-title">
                        <h4>Categories</h4>
                    </div>
                    <div class="box-content">

                        <ul>
                            <li>Construction</li>
                            <li>Architecture</li>
                            <li>Fit-Out Services</li>
                            <li>Event Planning and Coordination</li>
                            <li>Event Marketing and Promotion</li>
                            <li>On-Site Event Management</li>
                            <li>EVenue Management</li>
                            <li>Event Planning and Coordination</li>
                            <li>Post-Event Services</li>
                        </ul>
                    </div>
                </div>
                <div class="box">
                    <div class="box-title">
                        <h4>About Us</h4>
                    </div>
                    <div class="box-content">

                        <ul>
                            <li>our mission</li>
                            <li>our vision</li>
                            <li>our expertise</li>
                        </ul>
                    </div>
                </div>


            </div>
            <div class="copy-write">


                <span>
                    Copywrite@mediaLand 2024
                </span>

            </div>


        </footer>
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

    async function filter(branch_id) {
      var content  = document.querySelector(".gallery-container")

        const response = await fetch('/filtred-projects/' + branch_id);

        if (response.status >= 200 && response.status < 300) {
            const data = await response.json()
             content.innerHTML = data.content
        } else {
            console.error(response)
        }

    }

</script>
</body>
</html>
