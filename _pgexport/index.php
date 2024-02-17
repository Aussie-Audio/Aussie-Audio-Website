<?php get_header(); ?>

        <nav class="bg-primary navbar navbar-expand-lg navbar-light pb-3 pb-lg-1 pt-3 pt-lg-4"> 
            <div class="align-items-center d-flex flex-wrap justify-content-around pt-4 w-100"> 
                <div class="col-lg-3 d-flex header-hide justify-content-center">
                    <div> <a href="https://www.facebook.com/profile.php?id=100077723080073" aria-label="facebook" class="pe-2 ps-2"> <svg viewBox="0 0 24 24" fill="currentColor" width="20" height="20" class="text-white"> 
                                <path d="M14 13.5h2.5l1-4H14v-2c0-1.03 0-2 2-2h1.5V2.14c-.326-.043-1.557-.14-2.857-.14C11.928 2 10 3.657 10 6.7v2.8H7v4h3V22h4v-8.5z"/> 
                            </svg> </a> <a href="https://twitter.com/aussieaudio_web" aria-label="twitter" class="pe-2 ps-2"> <svg viewBox="0 0 24 24" fill="currentColor" width="20" height="20" class="text-white"> 
                                <path d="M22.162 5.656a8.384 8.384 0 0 1-2.402.658A4.196 4.196 0 0 0 21.6 4c-.82.488-1.719.83-2.656 1.015a4.182 4.182 0 0 0-7.126 3.814 11.874 11.874 0 0 1-8.62-4.37 4.168 4.168 0 0 0-.566 2.103c0 1.45.738 2.731 1.86 3.481a4.168 4.168 0 0 1-1.894-.523v.052a4.185 4.185 0 0 0 3.355 4.101 4.21 4.21 0 0 1-1.89.072A4.185 4.185 0 0 0 7.97 16.65a8.394 8.394 0 0 1-6.191 1.732 11.83 11.83 0 0 0 6.41 1.88c7.693 0 11.9-6.373 11.9-11.9 0-.18-.005-.362-.013-.54a8.496 8.496 0 0 0 2.087-2.165z"/> 
                            </svg> </a> <a href="https://www.linkedin.com/in/simeon-brazzell-73001269/" aria-label="linkedin" class="pe-2 ps-2"> <svg viewBox="0 0 24 24" fill="currentColor" width="20" height="20" class="text-white"> 
                                <path d="M6.94 5a2 2 0 1 1-4-.002 2 2 0 0 1 4 .002zM7 8.48H3V21h4V8.48zm6.32 0H9.34V21h3.94v-6.57c0-3.66 4.77-4 4.77 0V21H22v-7.93c0-6.17-7.06-5.94-8.72-2.91l.04-1.68z"/> 
                            </svg> </a> 
                    </div>
                </div><a href="https://www.aussieaudio.com" class="col-lg-4 d-flex justify-content-center "><div class="header-logo">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/4%20Clear.png" class="img-fluid" alt="Aussie Audio Logo">
                    </div></a> 
                <div class="col-lg-3 d-flex header-hide justify-content-center"><a href="consultation.html#schedule"><button type="button" class="btn btn-info btn-outline-secondary btn-sm pb-2 pe-3 ps-3 pt-2 text-light text-nowrap">
                            <?php _e( 'Schedule a Meeting', 'aussie_audio_theme' ); ?>
                        </button></a>
                </div>
                <button class="bg-primary-subtle navbar-toggle-position navbar-toggler position-absolute" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown-6" aria-controls="navbarNavDropdown-6" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span> 
                </button>                 
                <div class="collapse navbar-collapse  pt-lg-3 w-100" id="navbarNavDropdown-6"> 
                    <ul class="align-items-end d-flex me-auto ms-auto navbar-nav pe-3 pe-lg-0"> 
                        <li class="nav-item"> <a class="active nav-item nav-link px-lg-3 py-lg-4 text-light" aria-current="page" href="/"><?php _e( 'Home', 'aussie_audio_theme' ); ?></a> 
                        </li>                         
                        <li class="nav-item"> <a class="nav-item nav-link px-lg-3 py-lg-4 text-light" href="services.html"><?php _e( 'Services', 'aussie_audio_theme' ); ?></a> 
                        </li>                         
                        <li class="dropdown nav-item text-end"> <a class="dropdown-toggle nav-link px-lg-3 py-lg-4 text-light" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false"><?php _e( 'Our Process and Reviews&nbsp;', 'aussie_audio_theme' ); ?></a> 
                            <div class="bg-primary dropdown-menu text-end text-light" aria-labelledby="navbarDropdownMenuLink"> <a class="custom-dropdown-items dropdown-item text-light" href="ourprocess.html"><?php _e( 'Our Process', 'aussie_audio_theme' ); ?></a> <a class="custom-dropdown-items dropdown-item text-light" href="webtest.html"><?php _e( 'Website Testimonials', 'aussie_audio_theme' ); ?></a> <a class="custom-dropdown-items dropdown-item text-light" href="podtest.html"><?php _e( 'Podcast Testimonials', 'aussie_audio_theme' ); ?></a> 
                            </div>                             
                        </li>
                        <li class="nav-item"> <a class="nav-link px-lg-3 py-lg-4 text-light" href="consultation.html"><?php _e( 'Free Consultation', 'aussie_audio_theme' ); ?></a> 
                        </li>                         
                        <div class="col-lg-4 d-flex justify-content-center nav-hide  pb-3">
                            <div class="text-nowrap"> <a href="#" aria-label="facebook" class="pe-2 ps-2"> <svg viewBox="0 0 24 24" fill="currentColor" width="20" height="20" class="text-white"> 
                                        <path d="M14 13.5h2.5l1-4H14v-2c0-1.03 0-2 2-2h1.5V2.14c-.326-.043-1.557-.14-2.857-.14C11.928 2 10 3.657 10 6.7v2.8H7v4h3V22h4v-8.5z"/> 
                                    </svg> </a> <a href="#" aria-label="twitter" class="pe-2 ps-2"> <svg viewBox="0 0 24 24" fill="currentColor" width="20" height="20" class="text-white"> 
                                        <path d="M22.162 5.656a8.384 8.384 0 0 1-2.402.658A4.196 4.196 0 0 0 21.6 4c-.82.488-1.719.83-2.656 1.015a4.182 4.182 0 0 0-7.126 3.814 11.874 11.874 0 0 1-8.62-4.37 4.168 4.168 0 0 0-.566 2.103c0 1.45.738 2.731 1.86 3.481a4.168 4.168 0 0 1-1.894-.523v.052a4.185 4.185 0 0 0 3.355 4.101 4.21 4.21 0 0 1-1.89.072A4.185 4.185 0 0 0 7.97 16.65a8.394 8.394 0 0 1-6.191 1.732 11.83 11.83 0 0 0 6.41 1.88c7.693 0 11.9-6.373 11.9-11.9 0-.18-.005-.362-.013-.54a8.496 8.496 0 0 0 2.087-2.165z"/> 
                                    </svg> </a> <a href="#" aria-label="linkedin" class="pe-2 ps-2"> <svg viewBox="0 0 24 24" fill="currentColor" width="20" height="20" class="text-white"> 
                                        <path d="M6.94 5a2 2 0 1 1-4-.002 2 2 0 0 1 4 .002zM7 8.48H3V21h4V8.48zm6.32 0H9.34V21h3.94v-6.57c0-3.66 4.77-4 4.77 0V21H22v-7.93c0-6.17-7.06-5.94-8.72-2.91l.04-1.68z"/> 
                                    </svg> </a> 
                            </div>
                        </div>
                        <div class="col-lg-4 d-flex justify-content-center nav-hide  text-nowrap">
                            <button type="button" class="btn btn-light btn-outline-primary btn-sm p-2 text-nowrap">
                                <?php _e( 'Schedule a Meeting', 'aussie_audio_theme' ); ?>
                            </button>
                        </div>                         
                    </ul>                     
                </div>                 
            </div>             
        </nav>
        <section class="home-topper">
            <section class="d-flex justify-content-center pb-5 pt-5">
                <div class="block1">
                    <h5 class="pb-4 text-center text-uppercase text-white"><?php _e( 'Honoring Christ with', 'aussie_audio_theme' ); ?></h5>
                    <h2 class="text-center text-uppercase text-white"><?php _e( 'Upfront, Honest Work and Pricing', 'aussie_audio_theme' ); ?></h2>
                </div>
            </section>
            <div class="background-center-center background-cover block2 pb-5 pt-5" data-pg-ia-scene='{"l":[{"t":"this","p":"scroll","s":"30%","a":{"l":[{"t":"","l":[{"t":"set","p":0,"d":0,"l":{"backgroundPositionY":"30%"},"e":"Power1.easeOut"},{"t":"tween","p":0,"d":1,"l":{"backgroundPositionY":"50%"},"e":"Linear.easeNone"}]}]}}]}'>
                <div class="align-items-center bg-opacity-50 bg-white d-flex flex-column justify-content-center pb-5 pt-5"> 
                    <h1 class="display-3 text-center"><?php _e( 'We Provide Professional Grade...', 'aussie_audio_theme' ); ?></h1>
                    <ul class="col-8"> 
                        <li class="fs-3">
                            <?php _e( 'Full Website Design', 'aussie_audio_theme' ); ?>
                        </li>                         
                        <li class="fs-3">
                            <?php _e( 'Website Maintenance and Hosting', 'aussie_audio_theme' ); ?>
                        </li>                         
                        <li class="fs-3">
                            <?php _e( 'Podcast Audio Editing', 'aussie_audio_theme' ); ?>
                        </li>
                        <li class="fs-3">
                            <?php _e( 'Podcast Posting and Servicing', 'aussie_audio_theme' ); ?>
                        </li>                         
                    </ul>                     
                </div>
            </div>
            <section class="bg-secondary block3">
                <div class="align-items-center align-items-lg-center container d-flex d-lg-flex d-md-flex flex-column flex-lg-row flex-md-row justify-content-around justify-content-lg-around pb-5 pt-5 text-center" data-pg-ia-scene='{"l":[{"name":"text enter","t":"#gt# div:nth-of-type(1)","a":"slideInLeft","p":"time"},{"name":"image enter","t":".img-fluid","a":"slideInRight","p":"time"}]}'>
                    <div class="col-12 col-lg-4 col-md-6 mb-5 mb-md-0" data-pg-ia-hide>
                        <h3 class="text-center text-light"><?php _e( '&nbsp;ABOUT THE OWNER&nbsp;', 'aussie_audio_theme' ); ?></h3>
                        <p class="text-light"><?php _e( 'My name is Simeon Brazzell. My story has taken me all over the globe, through various occupations, and helped me to understand the world God created and the people in it. Aussie Audio and Web Design is a dream of mine to help people accomplish what God has for them by assisting them with the technical side of life. Most people do not have the time or know-how to deal with their website or podcast. I have significant experience in podcasting (hosting, guest appearances, editing, and everything in between) as well as web design. My desire is to use the tools God has equipped me with so that you achieve the things on your heart. Schedule a free consultation with us, and let&rsquo;s discover what we can accomplish together!&nbsp;&nbsp;', 'aussie_audio_theme' ); ?></p>
                        <a href="consultation.html#schedule"><button type="button" class="btn btn-info btn-outline-primary btn-sm pb-2 pe-3 ps-3 pt-2 text-light text-nowrap">
                                <?php _e( 'Schedule a Meeting', 'aussie_audio_theme' ); ?>
                            </button></a>
                    </div>
                    <div class="col-12 col-lg-4 col-md-5">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/20231017_171049.jpg" class="img-fluid" data-pg-ia-hide loading="lazy" sizes="66vw,
(min-width: 576px) 510px,
(min-width: 768px) 288px,
(min-width: 992px) 310px,
(min-width: 1200px) 370px,
(min-width: 1400px) 430px" alt="Simeon Brazzell and his wife">
                    </div>
                </div>
            </section>
            <section class="block4 mb-md-5 mt-md-5 pb-3 pb-md-5 pt-5 pt-md-5" data-pg-ia-scene='{"l":[{"name":"header appear","t":"h2","a":"fadeIn","p":"time"},{"name":"column appear","t":".index-column-appear","p":"time","a":{"l":[{"t":"","l":[{"t":"set","p":0,"d":0,"l":{"autoAlpha":0,"y":"100%"},"e":"Power1.easeOut"},{"t":"tween","p":0,"d":1,"s":0.25,"l":{"autoAlpha":1,"y":"0%"},"e":"Power1.easeOut"}]}]}}]}'>
                <div class="pe-2 ps-2">
                    <h2 class="text-center text-uppercase text-white" data-pg-ia-hide><?php _e( 'Work With Aussie Audio and Web Design', 'aussie_audio_theme' ); ?></h2>
                </div>
                <div class="d-flex justify-content-center">
                    <div class="align-items-start container d-flex d-sm-flex flex-column flex-sm-row flex-sm-wrap justify-content-sm-center mt-md-3 pe-md-5 ps-md-5 pt-5 pt-md-5">
                        <div class="align-items-center col-11 col-md-4 col-sm-5 d-flex flex-column index-column-appear pb-4 pe-3 ps-3 text-center" data-pg-ia-hide>
                            <h4 class="mb-4 text-white"><?php _e( 'Full Website Design', 'aussie_audio_theme' ); ?></h4> 
                            <p class="mb-4 text-white"><?php _e( 'Whether business or personal, get a designed or redesigned site fully suited to meet your needs!', 'aussie_audio_theme' ); ?></p>
                            <a href="services.html#webservices"><button type="button" class="btn btn-light btn-sm fw-bolder pb-2 pe-3 ps-3 pt-2 text-nowrap text-primary">
                                    <?php _e( 'Learn More', 'aussie_audio_theme' ); ?>
                                </button></a> 
                        </div>
                        <div class="align-items-center col-11 col-md-4 col-sm-5 d-flex flex-column index-column-appear pb-4 pe-3 ps-3 text-center" data-pg-ia-hide>
                            <h4 class="mb-4 text-white"><?php _e( 'Web Maintehance and Hosting', 'aussie_audio_theme' ); ?></h4> 
                            <p class="mb-4 text-white"><?php _e( 'Secure your very own web professional to upkeep, post articles and podcasts, and more!', 'aussie_audio_theme' ); ?></p>
                            <a href="services.html#webservices"><button type="button" class="btn btn-light btn-sm fw-bolder pb-2 pe-3 ps-3 pt-2 text-nowrap text-primary">
                                    <?php _e( 'Learn More', 'aussie_audio_theme' ); ?>
                                </button></a> 
                        </div>
                        <div class="align-items-center col-11 col-md-4 col-sm-5 d-flex flex-column index-column-appear pb-4 pe-3 ps-3 text-center" data-pg-ia-hide>
                            <h4 class="mb-4 text-white"><?php _e( 'Podcast Editing and Production', 'aussie_audio_theme' ); ?></h4> 
                            <p class="mb-4 text-white"><?php _e( 'Whether you need a professional intro, someone to edit your audio, or just post your content, we&rsquo;ve got you covered!', 'aussie_audio_theme' ); ?></p>
                            <a href="services.html#audioservices"><button type="button" class="btn btn-light btn-sm fw-bolder pb-2 pe-3 ps-3 pt-2 text-nowrap text-primary">
                                    <?php _e( 'Learn More', 'aussie_audio_theme' ); ?>
                                </button></a> 
                        </div>
                    </div>
                </div>
            </section>
            <section class="block5 pb-5">
                <div class="border-2 border-top border-white container d-flex d-md-flex flex-column flex-md-row justify-content-between pb-5 pb-md-5 pe-md-5 ps-md-5 pt-4 pt-md-4" data-pg-ia-scene='{"l":[{"name":"image slider","t":".img-fluid","a":"slideInLeft","p":"time"},{"name":"Column appear","t":".index-column-appear","p":"time","a":{"l":[{"t":"","l":[{"t":"set","p":0,"d":0,"l":{"y":"100%"},"e":"Power1.easeOut"},{"t":"tween","p":0,"d":0.1,"l":{"autoAlpha":1},"e":"Power1.easeOut"},{"t":"tween","p":0,"d":1,"s":0.25,"l":{"y":"0%"},"e":"Power1.easeOut"}]}]}}]}'>
                    <div class="align-items-center align-items-md-start col-12 col-md-3 d-flex flex-column">
                        <h5 class="h3 text-white"><?php _e( 'WEB SERVICES', 'aussie_audio_theme' ); ?></h5>
                        <div class="align-items-center d-flex justify-content-center picture-div">
                            <img src="https://images.unsplash.com/photo-1584438784894-089d6a62b8fa?ixid=M3wyMDkyMnwwfDF8c2VhcmNofDExfHxwaG9uZXxlbnwwfHx8fDE3MDU4MzMwMDV8MA&ixlib=rb-4.0.3q=85&fm=jpg&crop=faces&cs=srgb&w=600&h=600&fit=crop" class="img-fluid" data-pg-ia-hide loading="lazy" sizes="66vw,
(min-width: 576px) 510px,
(min-width: 768px) 156px,
(min-width: 992px) 216px,
(min-width: 1200px) 261px,
(min-width: 1400px) 306px"/>
                        </div>
                    </div>
                    <div class="col-12 col-md-7 d-flex flex-column flex-wrap">
                        <div class="row">
                            <h2 class="h3 mb-5 mb-md-5 pb-md-4 pt-4 pt-md-0 text-start text-white"><?php _e( 'What Can We Do For Your Web Presence?', 'aussie_audio_theme' ); ?></h2>
                        </div>
                        <div class="row">
                            <div class="col-12 col-md-6 d-flex flex-column index-column-appear justify-content-between mb-4 mb-md-0">
                                <h4 class="mb-3 text-white"><?php _e( 'Full Website Design and Maintenance', 'aussie_audio_theme' ); ?></h4>
                                <p class="pb-1 text-white"><?php _e( 'Get a fully adjustable website that looks great on all size screens, is perfectly suited to meet your needs, and is optimized to be found on search engines. We can even manage it for you so you can keep your focus where it needs to be.&nbsp;&nbsp;', 'aussie_audio_theme' ); ?></p>
                                <a href="webtest.html" class="home-column-link link-light"><?php _e( 'View Testimonials', 'aussie_audio_theme' ); ?></a>
                            </div>
                            <div class="col-12 col-md-6 d-flex flex-column index-column-appear justify-content-between">
                                <h4 class="mb-3 text-capitalize text-white"><?php _e( 'Schedule a Meeting', 'aussie_audio_theme' ); ?></h4>
                                <p class="pb-1 text-white"><?php _e( 'Every project is unique, and we want to be sure to meet all of your online needs. To do this, we personally meet with every client either in person or via video call to discuss your situation. Whether business or personal, we will do our best to meet all of your expectations.', 'aussie_audio_theme' ); ?></p>
                                <a href="consultation.html#schedule" class="home-column-link link-light"><?php _e( 'Schedule a Meeting', 'aussie_audio_theme' ); ?></a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="block6 pb-5">
                <div class="border-2 border-top border-white container d-flex d-md-flex flex-column flex-md-row justify-content-between pb-5 pb-md-5 pe-md-5 ps-md-5 pt-4 pt-md-4" data-pg-ia-scene="{&quot;l&quot;:[{&quot;name&quot;:&quot;image slider&quot;,&quot;t&quot;:&quot;.img-fluid&quot;,&quot;a&quot;:&quot;slideInLeft&quot;,&quot;p&quot;:&quot;time&quot;},{&quot;name&quot;:&quot;Column appear&quot;,&quot;t&quot;:&quot;.index-column-appear&quot;,&quot;p&quot;:&quot;time&quot;,&quot;a&quot;:{&quot;l&quot;:[{&quot;t&quot;:&quot;&quot;,&quot;l&quot;:[{&quot;t&quot;:&quot;set&quot;,&quot;p&quot;:0,&quot;d&quot;:0,&quot;l&quot;:{&quot;y&quot;:&quot;100%&quot;},&quot;e&quot;:&quot;Power1.easeOut&quot;},{&quot;t&quot;:&quot;tween&quot;,&quot;p&quot;:0,&quot;d&quot;:0.1,&quot;l&quot;:{&quot;autoAlpha&quot;:1},&quot;e&quot;:&quot;Power1.easeOut&quot;},{&quot;t&quot;:&quot;tween&quot;,&quot;p&quot;:0,&quot;d&quot;:1,&quot;s&quot;:0.25,&quot;l&quot;:{&quot;y&quot;:&quot;0%&quot;},&quot;e&quot;:&quot;Power1.easeOut&quot;}]}]}}]}">
                    <div class="align-items-center align-items-md-start col-12 col-md-3 d-flex flex-column">
                        <h5 class="h3 text-white"><?php _e( 'Audio Services', 'aussie_audio_theme' ); ?></h5>
                        <div class="align-items-center d-flex justify-content-center picture-div">
                            <img src="https://images.unsplash.com/photo-1607033379710-044f964ccfde?ixid=M3wyMDkyMnwwfDF8c2VhcmNofDUzfHxtaWNyb3Bob25lfGVufDB8fHx8MTcwNTgzMzU1M3ww&ixlib=rb-4.0.3q=85&fm=jpg&crop=faces&cs=srgb&w=600&h=800&fit=crop" class="img-fluid" data-pg-ia-hide loading="lazy" sizes="66vw,
(min-width: 576px) 510px,
(min-width: 768px) 156px,
(min-width: 992px) 216px,
(min-width: 1200px) 261px,
(min-width: 1400px) 306px"/>
                        </div>
                    </div>
                    <div class="col-12 col-md-7 d-flex flex-column flex-wrap">
                        <div class="row">
                            <h2 class="h3 mb-5 mb-md-5 pb-md-4 pt-4 pt-md-0 text-start text-white"><?php _e( 'What Can We Do For Your Audio Presence?', 'aussie_audio_theme' ); ?></h2>
                        </div>
                        <div class="row">
                            <div class="col-12 col-md-6 d-flex flex-column index-column-appear justify-content-between mb-4 mb-md-0" data-pg-ia-hide>
                                <h4 class="mb-3 text-white"><?php _e( 'Podcast Intro, Outro, And Bumper Creation', 'aussie_audio_theme' ); ?></h4>
                                <p class="pb-1 text-white"><?php _e( 'The best podcasts gain the interest of their audience with a familiar intro that captures their attention and communicates their style. Aussie Audio can customize unique sound clips to make your podcast sound great within your budget.', 'aussie_audio_theme' ); ?></p><a href="podtest.html" class="home-column-link link-light"><?php _e( 'View Testimonials', 'aussie_audio_theme' ); ?></a>
                            </div>
                            <div class="col-12 col-md-6 d-flex flex-column index-column-appear justify-content-between" data-pg-ia-hide>
                                <h4 class="mb-3 text-capitalize text-white"><?php _e( 'Podcast Editing, Posting, And Scheduling', 'aussie_audio_theme' ); ?></h4>
                                <p class="pb-1 text-white"><?php _e( 'The most stressful and time consuming part of podcasting is maintenance! Let us take care of the stress of that so you can focus on what matters, your content. We can edit, host, post, and schedule your episodes so that you can keep your focus where it needs to be.', 'aussie_audio_theme' ); ?></p><a href="consultation.html#schedule" class="home-column-link link-light"><?php _e( 'Schedule a Meeting', 'aussie_audio_theme' ); ?></a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </section>
        <footer class="bg-secondary pt-5 text-white"> 
            <div class="border-2 border-bottom border-info container"> 
</div>
            <div class="container"> 
                <div class="row"> 
                    <div class="col-lg-6 col-md-9 col-xl-4 order-first order-md-first py-3"> <a href="#" class="d-inline-block h2 mb-4 text-decoration-none text-uppercase"><?php _e( 'Aussie Audio and Web Design', 'aussie_audio_theme' ); ?></a> 
                        <p class="mb-3"><?php _e( 'Honoring Christ with upfront, honest work and pricing', 'aussie_audio_theme' ); ?></p> 
                        <div class="mb-4"> <a href="tel:+18657667670" class="text-white"><?php _e( '+1 (865) 766-7670', 'aussie_audio_theme' ); ?></a> <br> <a href="mailto:aussieaudioandweb@gmail.com" class="text-white"><?php _e( 'aussieaudioandweb@gmail.com', 'aussie_audio_theme' ); ?></a> 
                        </div>                         
                    </div>                     
                    <div class="col-lg-3 col-md-6 col-xl-2 order-3 order-lg-0 order-md-2 py-3"> 
                        <h2 class="fw-bold h5 mb-4 text-capitalize text-white"><?php _e( 'Our Process and Reviews', 'aussie_audio_theme' ); ?></h2> 
                        <ul class="list-unstyled"> 
                            <li class="mb-3"> <a href="ourprocess.html" class="text-white"><?php _e( 'Our Process', 'aussie_audio_theme' ); ?></a> 
                            </li>                             
                            <li class="mb-3"> <a href="webtest.html" class="text-white"><?php _e( 'Website Reviews', 'aussie_audio_theme' ); ?></a> 
                            </li>                             
                            <li class="mb-3"> <a href="podtest.html" class="text-white"><?php _e( 'Podcast Reviews', 'aussie_audio_theme' ); ?></a> 
                            </li>                             
                        </ul>                         
                    </div>                     
                    <div class="col-lg-3 col-md-5 col-xl-2 order-4 order-lg-1 py-3"> 
                        <h2 class="fw-bold h5 mb-4 text-capitalize text-white"><?php _e( 'Services', 'aussie_audio_theme' ); ?></h2> 
                        <ul class="list-unstyled"> 
                            <li class="mb-3"> <a href="services.html#webservices" class="text-white"><?php _e( 'Web Services', 'aussie_audio_theme' ); ?></a> 
                            </li>                             
                            <li class="mb-3"> <a href="services.html#audioservices" class="text-white"><?php _e( 'Audio Services', 'aussie_audio_theme' ); ?></a> 
                            </li>                             
                        </ul>                         
                    </div>
                    <div class="col-md-12 col-xl-8 order-1 order-lg-3 order-md-1 py-3"> 
                        <h2 class="fw-bold h5 mb-4 text-capitalize text-white"><?php _e( 'Schedule a Consultation', 'aussie_audio_theme' ); ?></h2>
                        <p class="mb-3"><?php _e( 'As always, Our consultations are 100% free. We&apos;ll find out what your project is, how we can help you, and what the best options and pricing strategy is!', 'aussie_audio_theme' ); ?></p><a href="consultation.html#schedule"><button type="button" class="btn btn-info btn-lg btn-outline-primary text-white">
                                <?php _e( 'Schedule', 'aussie_audio_theme' ); ?>
                            </button></a> 
                    </div>
                    <div class="col-md-3 order-0 order-lg-2 order-md-0 pb-3 pt-3">
                        <h2 class="fw-bold h5 mb-3 text-capitalize text-white"><?php _e( 'Follow us on Social Media', 'aussie_audio_theme' ); ?></h2>
                        <div class="d-inline-flex flex-wrap"> <a href="https://www.facebook.com/profile.php?id=100077723080073" class="p-1 text-secondary" aria-label="facebook"> <svg viewBox="0 0 24 24" fill="currentColor" width="20" height="20" class="footer-social text-info"> 
                                    <path d="M14 13.5h2.5l1-4H14v-2c0-1.03 0-2 2-2h1.5V2.14c-.326-.043-1.557-.14-2.857-.14C11.928 2 10 3.657 10 6.7v2.8H7v4h3V22h4v-8.5z"/> 
                                </svg> </a> <a href="https://twitter.com/aussieaudio_web" class="p-1 text-secondary" aria-label="twitter"> <svg viewBox="0 0 24 24" fill="currentColor" width="20" height="20" class="footer-social text-info"> 
                                    <path d="M22.162 5.656a8.384 8.384 0 0 1-2.402.658A4.196 4.196 0 0 0 21.6 4c-.82.488-1.719.83-2.656 1.015a4.182 4.182 0 0 0-7.126 3.814 11.874 11.874 0 0 1-8.62-4.37 4.168 4.168 0 0 0-.566 2.103c0 1.45.738 2.731 1.86 3.481a4.168 4.168 0 0 1-1.894-.523v.052a4.185 4.185 0 0 0 3.355 4.101 4.21 4.21 0 0 1-1.89.072A4.185 4.185 0 0 0 7.97 16.65a8.394 8.394 0 0 1-6.191 1.732 11.83 11.83 0 0 0 6.41 1.88c7.693 0 11.9-6.373 11.9-11.9 0-.18-.005-.362-.013-.54a8.496 8.496 0 0 0 2.087-2.165z"/> 
                                </svg> </a> <a href="https://www.linkedin.com/in/simeon-brazzell-73001269/" class="p-1 text-secondary" aria-label="linkedin"> <svg viewBox="0 0 24 24" fill="currentColor" width="20" height="20" class="footer-social text-info"> 
                                    <path d="M6.94 5a2 2 0 1 1-4-.002 2 2 0 0 1 4 .002zM7 8.48H3V21h4V8.48zm6.32 0H9.34V21h3.94v-6.57c0-3.66 4.77-4 4.77 0V21H22v-7.93c0-6.17-7.06-5.94-8.72-2.91l.04-1.68z"/> 
                                </svg> </a> 
                        </div>
                    </div>                     
                </div>                 
                <div class="pb-3 pt-3 small"> 
                    <hr class="mt-0 "> 
                    <div class="align-items-center row">
                        <div class="col-md pb-2 pt-2">
                            <p class="mb-0"><?php _e( '&copy; 2020-2024. All Rights Reserved - Aussie Audio and Web Design', 'aussie_audio_theme' ); ?></p>
                        </div>
                    </div>                     
                </div>                 
            </div>             
        </footer>        

<?php get_footer(); ?>