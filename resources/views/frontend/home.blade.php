@extends('common.layout')

@section('title','Home')

@section('content')

<!-- home7 Banner Section Start -->
    <div class="home7-banner-section mb-130">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-7 col-lg-6">
                    <div class="banner-content-wrap">
                        <div class="title-area">
                            <h1>
                                <span class="banner-video-wrap">FULL
                                    <span class="banner-video">
                                        <video autoplay loop muted playsinline src="assets/video/home2-video.mp4"></video>
                                    </span>
                                </span> 
                                STACK DEVELOPER.
                            </h1>
                        </div>
                        <div class="banner-content">
                            <svg class="arrow" width="175" height="185" viewBox="0 0 175 185" xmlns="http://www.w3.org/2000/svg">
                                <path d="M146 49L20.9672 174L-3.05176e-05 153L125 29H0.999969V0H175V185H146V49Z"/>
                                <path
                                    d="M146.5 49V47.7931L145.646 48.6464L20.9675 173.293L0.708215 153.002L125.352 29.355L126.214 28.5H125H1.49997V0.5H174.5V184.5H146.5V49Z" stroke-opacity="0.15" />
                            </svg>
                            <div class="content-and-btn-area">
                                <p>I specialize in diverse areas of software development, including <span>Frontend Development, Backend Development, RESTful APIs etc.</span></p>

                                <a href="assets/Resume.pdf" class="primary-btn3 four btn-hover" download>
                                    Download Resume
                                    <svg width="10" height="10" viewBox="0 0 10 10" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M1 9L9 1M9 1C7.22222 1.33333 3.33333 2 1 1M9 1C8.66667 2.66667 8 6.33333 9 9" stroke-width="1.5" stroke-linecap="round" />
                                    </svg>
                                    <span></span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-5 col-lg-6 d-lg-block d-none">
                    <div class="banner-img-wrap">
                        <div class="banner-img magnetic-item">
                            <img src="assets/img/home7/banner-img.png" alt="">
                        </div>
                        <ul class="social-list">
                            {{-- <li><a href="https://dribbble.com/"><img src="assets/img/home7/icon/dribbble-logo.svg" alt=""></a></li> --}}
                            {{-- <li><a href="https://www.behance.net/"><img src="assets/img/home7/icon/behance-logo.svg" alt=""></a></li> --}}
                            {{-- <li><a href="https://www.pinterest.com/"><img src="assets/img/home7/icon/pinterest-logo.svg" alt=""></a></li> --}}
                            <li><a href="https://www.linkedin.com/"><img src="assets/img/home7/icon/linkedIn-logo.svg" alt=""></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- home7 Banner Section End -->

    <!-- home7 About Section Start -->
    <div class="home7-about-section mb-130">
        <div class="container">
            <div class="row justify-content-center wow animate fadeInDown" data-wow-delay="200ms" data-wow-duration="1500ms">
                <div class="col-xl-8 col-lg-10">
                    <div class="about-content">
                        <div class="sub-title">
                            <span>About Me</span>
                        </div>
                        <p>I'm passionate about building technology that is accessible and enjoyable for everyone, which is why <span>I focus on clean code, usability, and performance.</span></p>

                    </div>
                </div>
            </div>
            <div class="skill-area">
                <div class="sub-title">
                    <span>My Skills</span>
                </div>
                <svg width="6" height="70" viewBox="0 0 6 70" xmlns="http://www.w3.org/2000/svg">
                    <path d="M3.5 5L5.88675 0H0.113249L2.5 5H3.5ZM2.5 65L0.113249 70H5.88675L3.5 65H2.5ZM2.5 4.5V65.5H3.5V4.5H2.5Z"/>
                </svg>
                <ul class="skill-list">
                    <li class="single-skill">
                        <div class="icon">
                            <img src="{{ asset('assets/img/home7/icon/figma-logo.svg')}}" alt="">
                        </div>
                        <div class="content">
                            <h4>100%</h4>
                            <span>Figma Design</span>
                        </div>
                    </li>
                    <li class="single-skill">
                        <div class="icon">
                            <img src="{{ asset('assets/img/home7/icon/xd-logo.svg')}}" alt="">
                        </div>
                        <div class="content">
                            <h4>100%</h4>
                            <span>Adobe XD</span>
                        </div>
                    </li>
                    <li class="single-skill">
                        <div class="icon">
                            <img src="{{ asset('assets/img/home7/icon/webflow-logo.svg')}}" alt="">
                        </div>
                        <div class="content">
                            <h4>95%</h4>
                            <span>Webflow</span>
                        </div>
                    </li>
                    <li class="single-skill">
                        <div class="icon">
                            <img src="{{ asset('assets/img/home7/icon/zepline-logo.svg')}}" alt="">
                        </div>
                        <div class="content">
                            <h4>90%</h4>
                            <span>Zepline</span>
                        </div>
                    </li>
                    <li class="single-skill">
                        <div class="icon">
                            <img src="{{ asset('assets/img/home7/icon/miro-logo.svg')}}" alt="">
                        </div>
                        <div class="content">
                            <h4>98%</h4>
                            <span>Miro</span>
                        </div>
                    </li>
                    <li class="single-skill">
                        <div class="icon">
                            <img src="{{ asset('assets/img/home7/icon/framer-logo.svg')}}" alt="" class="light">
                            <img src="{{ asset('assets/img/home7/icon/framer-logo-light.svg')}}" alt="" class="dark">
                        </div>
                        <div class="content">
                            <h4>70%</h4>
                            <span>Framer</span>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="contact-area wow animate fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">
                <h6>Don’t Hesitate to <span>Collaborate</span> with Us.</h6>
                <a href="contact.html" class="primary-btn3 three four btn-hover">
                    Let’s Talk
                    <svg width="10" height="10" viewBox="0 0 10 10" xmlns="http://www.w3.org/2000/svg">
                        <path d="M1 9L9 1M9 1C7.22222 1.33333 3.33333 2 1 1M9 1C8.66667 2.66667 8 6.33333 9 9" stroke-width="1.5" stroke-linecap="round" />
                    </svg>
                    <span></span>
                </a>
            </div>
        </div>
    </div>
    <!-- home7 About Section End -->

    <!-- home7 Portfolio Section Start -->
    <div class="home7-portfolio-section mb-130">
        <div class="container">
            <div class="row mb-60 wow animate fadeInDown" data-wow-delay="200ms" data-wow-duration="1500ms">
                <div class="col-lg-12 d-flex justify-content-between flex-wrap gap-4">
                    <div class="section-title3">
                        <h2>Latest Work</h2>
                        <p>I’ve already done <strong>200+ Projects,</strong> to select project <span>(2015-2024).</span></p>
                    </div>
                    <div class="project-btn-duration-area">
                        <a href="portfolio-classic.html" class="primary-btn3 four btn-hover">
                            View All Work
                            <svg width="10" height="10" viewBox="0 0 10 10" xmlns="http://www.w3.org/2000/svg">
                                <path d="M1 9L9 1M9 1C7.22222 1.33333 3.33333 2 1 1M9 1C8.66667 2.66667 8 6.33333 9 9" stroke-width="1.5" stroke-linecap="round" />
                            </svg>
                            <span></span>
                        </a>
                        <div class="project-duration">
                            <h6>Selected work * <span>(2015-2024)</span></h6>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row gy-5">
                <div class="col-lg-4 col-md-6 wow animate fadeInDown" data-wow-delay="200ms" data-wow-duration="1500ms">
                    <div class="portfolio-card2 magnetic-item">
                        <div class="portfolio-img">
                            <img src="assets/img/home7/portfolio-img1.jpg" alt="">
                            <div class="details-btn-wrap">
                                <a href="portfolio-details.html" class="details-btn">
                                    View Details
                                    <svg width="10" height="10" viewBox="0 0 10 10" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M1 9L9 1M9 1C7.22222 1.33333 3.33333 2 1 1M9 1C8.66667 2.66667 8 6.33333 9 9" stroke-width="1.5" stroke-linecap="round" />
                                    </svg>
                                </a>
                                <div class="icon">
                                    <i class="bi bi-plus"></i>
                                </div>
                            </div>
                        </div>
                        <div class="portfolio-content">
                            <span>UI/UX Design</span>
                            <h4><a href="portfolio-details.html">Digital Masterpieces.</a></h4>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 wow animate fadeInDown" data-wow-delay="400ms" data-wow-duration="1500ms">
                    <div class="portfolio-card2 magnetic-item">
                        <div class="portfolio-img">
                            <img src="assets/img/home7/portfolio-img2.jpg" alt="">
                            <div class="details-btn-wrap">
                                <a href="portfolio-details.html" class="details-btn">
                                    View Details
                                    <svg width="10" height="10" viewBox="0 0 10 10" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M1 9L9 1M9 1C7.22222 1.33333 3.33333 2 1 1M9 1C8.66667 2.66667 8 6.33333 9 9" stroke-width="1.5" stroke-linecap="round" />
                                    </svg>
                                </a>
                                <div class="icon">
                                    <i class="bi bi-plus"></i>
                                </div>
                            </div>
                        </div>
                        <div class="portfolio-content">
                            <span>Branding Design</span>
                            <h4><a href="portfolio-details.html">Engagement Redefined.</a></h4>
                        </div>
                    </div>
                </div>
                <div class="col-xl-5 col-lg-4 col-md-6 wow animate fadeInDown" data-wow-delay="600ms" data-wow-duration="1500ms">
                    <div class="portfolio-card2 magnetic-item">
                        <div class="portfolio-img">
                            <img src="assets/img/home7/portfolio-img3.jpg" alt="">
                            <div class="details-btn-wrap">
                                <a href="portfolio-details.html" class="details-btn">
                                    View Details
                                    <svg width="10" height="10" viewBox="0 0 10 10" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M1 9L9 1M9 1C7.22222 1.33333 3.33333 2 1 1M9 1C8.66667 2.66667 8 6.33333 9 9" stroke-width="1.5" stroke-linecap="round" />
                                    </svg>
                                </a>
                                <div class="icon">
                                    <i class="bi bi-plus"></i>
                                </div>
                            </div>
                        </div>
                        <div class="portfolio-content">
                            <span>Creative Art</span>
                            <h4><a href="portfolio-details.html">Brand Amplifiers.</a></h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7 col-md-6 wow animate fadeInDown" data-wow-delay="800ms" data-wow-duration="1500ms">
                    <div class="portfolio-card2 magnetic-item">
                        <div class="portfolio-img">
                            <img src="assets/img/home7/portfolio-img4.jpg" alt="">
                            <div class="details-btn-wrap">
                                <a href="portfolio-details.html" class="details-btn">
                                    View Details
                                    <svg width="10" height="10" viewBox="0 0 10 10" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M1 9L9 1M9 1C7.22222 1.33333 3.33333 2 1 1M9 1C8.66667 2.66667 8 6.33333 9 9" stroke-width="1.5" stroke-linecap="round" />
                                    </svg>
                                </a>
                                <div class="icon">
                                    <i class="bi bi-plus"></i>
                                </div>
                            </div>
                        </div>
                        <div class="portfolio-content">
                            <span>Branding Design</span>
                            <h4><a href="portfolio-details.html">Seamless Interfaces.</a></h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 col-md-6 wow animate fadeInDown" data-wow-delay="800ms" data-wow-duration="1500ms">
                    <div class="portfolio-card2 magnetic-item">
                        <div class="portfolio-img">
                            <img src="assets/img/home7/portfolio-img5.jpg" alt="">
                            <div class="details-btn-wrap">
                                <a href="portfolio-details.html" class="details-btn">
                                    View Details
                                    <svg width="10" height="10" viewBox="0 0 10 10" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M1 9L9 1M9 1C7.22222 1.33333 3.33333 2 1 1M9 1C8.66667 2.66667 8 6.33333 9 9" stroke-width="1.5" stroke-linecap="round" />
                                    </svg>
                                </a>
                                <div class="icon">
                                    <i class="bi bi-plus"></i>
                                </div>
                            </div>
                        </div>
                        <div class="portfolio-content">
                            <span>Ecommerce</span>
                            <h4><a href="portfolio-details.html">E-commerce Excellence.</a></h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- home7 Portfolio Section End -->

    <!-- home7 Service Section Start -->
    <div class="home7-service-section mb-130">
        <div class="container">
            <div class="service-wrapper">
                <div class="sub-title wow animate fadeInDown" data-wow-delay="200ms" data-wow-duration="1500ms">
                    <span>What I Do</span>
                </div>
                <ul class="service-list">
                    <li class="single-service wow animate fadeInDown" data-wow-delay="200ms" data-wow-duration="1500ms">
                        <h2><span>1.</span><a href="service-details.html">Product Design</a></h2>
                        <svg class="vector" width="180" height="180" viewBox="0 0 180 180" xmlns="http://www.w3.org/2000/svg">
                            <g>
                                <path
                                    d="M163.004 133.225C162.84 133.501 162.612 133.734 162.338 133.903L90.6542 178.319C90.3446 178.511 89.9889 178.616 89.6248 178.621C89.2607 178.627 88.9019 178.534 88.5865 178.352L16.3837 136.665C16.0684 136.483 15.8083 136.219 15.6311 135.901C15.454 135.583 15.3664 135.223 15.3778 134.859L18.0012 50.5695C18.0122 50.2366 18.105 49.9117 18.2715 49.6233C18.438 49.3349 18.673 49.092 18.9558 48.9161L90.6404 4.4999C90.9499 4.30811 91.3057 4.20383 91.6698 4.19816C92.0339 4.1925 92.3927 4.28566 92.7081 4.46775L164.911 46.154C165.226 46.3361 165.486 46.6003 165.663 46.9184C165.841 47.2366 165.928 47.5968 165.917 47.9608L163.293 132.25C163.282 132.594 163.183 132.93 163.004 133.225ZM67.3534 131.756L157.891 130.233L113.941 51.0639L23.4038 52.5869L67.3534 131.756ZM117.429 49.0495L159.495 124.824L161.854 49.0401L128.539 29.8062L117.429 49.0495ZM89.557 174.261L154.009 134.326L67.3533 135.784L56.243 155.027L89.557 174.261ZM113.941 47.0356L125.051 27.7924L91.7373 8.55849L27.2856 48.4933L113.941 47.0356ZM52.7549 153.014L63.865 133.77L21.7998 57.9951L19.4409 133.78L52.7549 153.014Z"/>
                            </g>
                        </svg>
                    </li>
                    <li class="single-service wow animate fadeInDown" data-wow-delay="400ms" data-wow-duration="1500ms">
                        <h2><span>2.</span><a href="service-details.html">Branding Design</a></h2>
                        <svg class="vector" width="180" height="180" viewBox="0 0 180 180" xmlns="http://www.w3.org/2000/svg">
                            <g>
                                <path
                                    d="M168.071 164.056C168.069 164.056 168.066 164.056 168.064 164.056H11.9275C11.5927 164.056 11.2637 163.969 10.9729 163.803C10.6821 163.637 10.4395 163.399 10.2689 163.11C10.0984 162.822 10.0058 162.495 10.0003 162.16C9.99473 161.825 10.0764 161.495 10.2374 161.201L48.7629 91L10.2378 20.7985C10.0767 20.505 9.99491 20.1746 10.0004 19.8399C10.0058 19.5051 10.0984 19.1776 10.2689 18.8895C10.4394 18.6014 10.6821 18.3627 10.9729 18.1968C11.2637 18.031 11.5927 17.9438 11.9275 17.9437H168.064C168.745 17.9437 169.375 18.3034 169.722 18.8894C170.07 19.4754 170.081 20.2013 169.754 20.7985L131.229 91L169.677 161.061C169.87 161.351 169.981 161.688 169.997 162.037C170.014 162.385 169.936 162.732 169.771 163.039C169.606 163.347 169.361 163.604 169.062 163.783C168.762 163.962 168.42 164.056 168.071 164.056ZM93.2524 160.201H164.807L129.03 95.0067L93.2524 160.201ZM15.1844 160.201H86.739L50.9615 95.0067L15.1844 160.201ZM53.1605 91L89.9955 158.122L126.831 91L89.9955 23.8781L53.1605 91ZM93.2524 21.7989L129.03 86.9933L164.807 21.7989H93.2524ZM15.1844 21.7989L50.9619 86.9933L86.739 21.7989H15.1844Z"/>
                            </g>
                        </svg>
                    </li>
                    <li class="single-service wow animate fadeInDown" data-wow-delay="600ms" data-wow-duration="1500ms">
                        <h2><span>3.</span><a href="service-details.html">Webflow</a></h2>
                        <svg class="vector" width="180" height="180" viewBox="0 0 180 180" xmlns="http://www.w3.org/2000/svg">
                            <g>
                                <path
                                    d="M164.274 133.093C153.736 151.346 136.448 165.258 116.366 171.683C93.7289 178.926 68.4677 176.145 47.9067 164.274C17.9321 146.968 -0.734006 109.879 6.67351 75.5899C8.65409 66.4209 12.0187 56.06 16.7262 47.9065C27.2821 29.623 44.9803 15.09 65.3232 9.13782C88.0701 2.48203 112.461 4.81361 133.093 16.726C163.086 34.0423 181.751 71.1711 174.319 105.48C172.337 114.629 168.972 124.956 164.274 133.093ZM129.997 161.29C142.39 154.403 153.128 144.187 160.719 131.041C168.309 117.894 171.787 103.487 171.555 89.3097L127.932 90.5343L143.5 119.076C143.668 119.385 143.754 119.732 143.749 120.083C143.745 120.435 143.65 120.78 143.474 121.084C143.298 121.389 143.047 121.643 142.745 121.823C142.442 122.003 142.099 122.102 141.747 122.111L109.245 122.899L129.997 161.29ZM125.726 86.4888L171.384 85.2076C170.802 76.5257 168.836 67.9925 165.563 59.9302L111.949 61.2312L125.726 86.4888ZM101.557 170.791C110.176 169.594 118.549 167.03 126.359 163.193L104.639 123.011L75.8774 123.709L101.557 170.791ZM107.055 118.846L138.284 118.088L123.326 90.6634L94.1515 91.4821C94.1333 92.1524 93.7477 92.8195 93.1764 93.1709L107.055 118.846ZM109.738 57.1783L163.783 55.8667C156.985 41.4267 145.879 28.8483 131.041 20.2814C116.202 11.7145 99.7563 8.38571 83.8516 9.71803L109.738 57.1783ZM17.2169 125.133C24.0154 139.573 35.121 152.151 49.9594 160.718C64.7977 169.285 81.2438 172.614 97.1485 171.282L71.262 123.821L17.2169 125.133ZM92.2738 87.4277L121.12 86.6183L107.334 61.3434L78.5518 62.0418L92.2738 87.4277ZM73.6665 119.656L102.448 118.958L88.7265 93.5717L59.8805 94.3814L73.6665 119.656ZM87.1224 88.5498C87.2955 88.2501 87.5379 88.0042 87.8233 87.8286L73.9454 62.1536L42.7159 62.9117L57.6741 90.3363L86.8482 89.5174C86.8579 89.1771 86.9522 88.8446 87.1224 88.5498ZM76.3609 57.988L105.123 57.29L79.4425 10.2082C70.8237 11.4047 62.4512 13.9695 54.6411 17.8058L76.3609 57.988ZM15.4372 121.069L69.0511 119.768L55.2746 94.5105L9.61624 95.7919C10.1988 104.474 12.1638 113.007 15.4372 121.069ZM37.5251 59.9147C37.8829 59.295 38.5376 58.9065 39.2532 58.8888L71.7546 58.1004L51.0035 19.7095C38.6101 26.5964 27.8718 36.8125 20.2815 49.9592C12.6913 63.1059 9.21306 77.5135 9.44533 91.6895L53.0682 90.4654L37.5005 61.9238C37.3321 61.6149 37.2459 61.2679 37.2502 60.9161C37.2545 60.5643 37.3492 60.2195 37.5251 59.9147Z"/>
                            </g>
                        </svg>
                    </li>
                    <li class="single-service wow animate fadeInDown" data-wow-delay="800ms" data-wow-duration="1500ms">
                        <h2><span>4.</span><a href="service-details.html">Digital Marekting</a></h2>
                        <svg class="vector" width="180" height="180" viewBox="0 0 180 180" xmlns="http://www.w3.org/2000/svg">
                            <g>
                                <path
                                    d="M90.4189 175.839C89.892 175.839 89.3867 175.629 89.0142 175.257L75.1078 161.349C74.9233 161.165 74.777 160.946 74.6771 160.705C74.5773 160.464 74.5259 160.205 74.5259 159.945C74.5259 159.684 74.5773 159.425 74.6771 159.184C74.777 158.944 74.9233 158.725 75.1078 158.54L157.136 76.5129L146.039 65.4157L64.0126 147.444C63.8282 147.629 63.6092 147.775 63.3681 147.875C63.1271 147.975 62.8687 148.026 62.6078 148.026C62.3469 148.026 62.0886 147.975 61.8476 147.875C61.6065 147.775 61.3875 147.629 61.2031 147.444L47.2983 133.539C47.1138 133.355 46.9675 133.136 46.8676 132.895C46.7678 132.654 46.7164 132.396 46.7164 132.135C46.7164 131.874 46.7678 131.616 46.8676 131.375C46.9675 131.134 47.1138 130.915 47.2983 130.731L129.325 48.7018L118.23 37.6062L36.2015 119.633C35.829 120.006 35.3238 120.215 34.797 120.215C34.2703 120.215 33.765 120.006 33.3924 119.634L19.486 105.729C19.1136 105.356 18.9043 104.851 18.9042 104.324C18.9041 103.797 19.1133 103.292 19.4857 102.92L101.515 20.8907L90.4189 9.79556L8.39045 91.8221C8.01794 92.1946 7.51269 92.4038 6.98588 92.4038C6.45906 92.4038 5.95382 92.1946 5.5813 91.8221C5.20879 91.4495 4.99951 90.9443 4.99951 90.4175C4.99951 89.8907 5.20879 89.3854 5.5813 89.0129L89.0145 5.58162C89.3871 5.20921 89.8923 5 90.4191 5C90.9459 5 91.4511 5.20921 91.8237 5.58162L105.728 19.4864C106.101 19.8589 106.31 20.3641 106.31 20.8909C106.31 21.4178 106.101 21.923 105.728 22.2955L23.7 104.324L34.7972 115.42L116.826 33.3927C117.199 33.0203 117.704 32.8111 118.23 32.8111C118.757 32.8111 119.262 33.0203 119.635 33.3927L133.54 47.2975C133.912 47.67 134.121 48.1752 134.121 48.702C134.121 49.2288 133.912 49.7341 133.54 50.1066L51.5123 132.135L62.6078 143.231L144.635 61.2022C144.82 61.0177 145.038 60.8714 145.279 60.7715C145.52 60.6717 145.779 60.6203 146.04 60.6203C146.3 60.6203 146.559 60.6717 146.8 60.7715C147.041 60.8714 147.259 61.0177 147.444 61.2022L161.35 75.1085C161.535 75.293 161.681 75.512 161.781 75.753C161.881 75.9941 161.932 76.2524 161.932 76.5133C161.932 76.7742 161.881 77.0326 161.781 77.2736C161.681 77.5146 161.535 77.7336 161.35 77.9181L79.3217 159.945L90.4189 171.043L172.448 89.0129C172.822 88.6482 173.325 88.4456 173.847 88.4489C174.37 88.4523 174.87 88.6613 175.239 89.0308C175.608 89.4002 175.817 89.9004 175.821 90.4228C175.824 90.9453 175.621 91.448 175.257 91.8221L91.8233 175.257C91.6389 175.441 91.42 175.588 91.179 175.688C90.9381 175.788 90.6798 175.839 90.4189 175.839Z"/>
                            </g>
                        </svg>
                    </li>
                    <li class="single-service wow animate fadeInDown" data-wow-delay="800ms" data-wow-duration="1500ms">
                        <h2><span>5.</span><a href="service-details.html">Video Editing</a></h2>
                        <svg class="vector" width="180" height="180" viewBox="0 0 180 180" xmlns="http://www.w3.org/2000/svg">
                            <g>
                                <path
                                    d="M89.8318 177C89.5548 177 89.2805 176.946 89.0246 176.84C88.7687 176.734 88.5363 176.578 88.3407 176.382L27.6177 115.659C27.4219 115.463 27.2665 115.231 27.1605 114.975C27.0546 114.72 27 114.445 27 114.169C27 113.892 27.0546 113.618 27.1605 113.362C27.2665 113.106 27.4219 112.874 27.6177 112.678L50.7957 89.4998L27.6181 66.3221C27.2227 65.9267 27.0006 65.3905 27.0006 64.8313C27.0006 64.2721 27.2227 63.7358 27.6181 63.3404L88.3411 2.61736C88.7366 2.22206 89.2729 2 89.832 2C90.3912 2 90.9274 2.22206 91.3229 2.61736L152.046 63.3404C152.441 63.7358 152.663 64.2721 152.663 64.8313C152.663 65.3905 152.441 65.9267 152.046 66.3221L128.868 89.4998L152.046 112.678C152.242 112.874 152.397 113.106 152.503 113.362C152.609 113.618 152.664 113.892 152.664 114.169C152.664 114.445 152.609 114.72 152.503 114.975C152.397 115.231 152.242 115.463 152.046 115.659L91.3229 176.382C91.1273 176.578 90.8949 176.734 90.639 176.84C90.3831 176.946 90.1088 177 89.8318 177ZM50.1181 132.196L89.8318 171.91L129.546 132.196L107.859 110.509L91.3225 127.045C91.1267 127.241 90.8943 127.396 90.6385 127.502C90.3827 127.608 90.1085 127.663 89.8316 127.663C89.5547 127.663 89.2805 127.608 89.0247 127.502C88.7689 127.396 88.5364 127.241 88.3407 127.045L71.8046 110.509L50.1181 132.196ZM110.841 107.527L132.528 129.214L147.573 114.169L125.886 92.4816L110.841 107.527ZM32.0909 114.169L47.1363 129.214L68.8233 107.527L53.7775 92.4816L32.0909 114.169ZM74.7868 107.527L89.8318 122.572L104.877 107.527L89.8318 92.4816L74.7868 107.527ZM92.814 89.4998L107.859 104.545L122.904 89.4998L107.859 74.4544L92.814 89.4998ZM56.7597 89.4998L71.8051 104.545L86.85 89.4998L71.8046 74.4544L56.7597 89.4998ZM110.841 71.4726L125.887 86.518L147.573 64.8311L132.528 49.7857L110.841 71.4726ZM74.7868 71.4726L89.8318 86.518L104.877 71.4726L89.8318 56.4272L74.7868 71.4726ZM32.0909 64.8311L53.7779 86.518L68.8233 71.4726L47.1363 49.7857L32.0909 64.8311ZM89.8318 51.3371C90.3711 51.3371 90.9113 51.5428 91.3225 51.9544L107.859 68.4905L129.546 46.8035L89.8318 7.08978L50.1177 46.8039L71.8046 68.4909L88.3407 51.9548C88.5363 51.7587 88.7687 51.6031 89.0246 51.4971C89.2805 51.3911 89.5548 51.3367 89.8318 51.3371Z"/>
                            </g>
                        </svg>
                    </li>
                </ul>
                <div class="contact-btn-area two wow animate fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">
                    <h6>Don’t Hesitate to <span>Collaborate</span> with Us.</h6>
                    <a href="contact.html" class="primary-btn3 four btn-hover">
                        Let’s Talk
                        <svg width="10" height="10" viewBox="0 0 10 10" xmlns="http://www.w3.org/2000/svg">
                            <path d="M1 9L9 1M9 1C7.22222 1.33333 3.33333 2 1 1M9 1C8.66667 2.66667 8 6.33333 9 9" stroke-width="1.5" stroke-linecap="round" />
                        </svg>
                        <span></span>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- home7 Service Section End -->

    <!-- home7 Video Section Start -->
    <div class="home4-video-section mb-130">
        <video autoplay loop muted playsinline src="assets/video/home4-video.mp4"></video>
    </div>
    <!-- home7 Video Section End -->

    <!-- home7 Testimonial Section Start -->
    <div class="home7-testimonial-section mb-130">
        <div class="container">
            <div class="row mb-60 wow animate fadeInDown" data-wow-delay="200ms" data-wow-duration="1500ms">
                <div class="col-lg-12 d-flex justify-content-center">
                    <div class="section-title3">
                        <h2>They Loves Us</h2>
                        <p>We’re the greatest part on the digital platform & to achieve many awards.</p>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-xl-8 col-lg-10">
                    <div class="testimonial-slider-area">
                        <div class="swiper home1-testimonial-slider">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="testimonial-card two">
                                        <div class="company-logo">
                                            <img src="assets/img/home1/testimonial-company-logo1.png" alt="" class="light">
                                            <img src="assets/img/home1/testimonial-company-logo1-white.png" alt="" class="dark">
                                        </div>
                                        <div class="testimonial-content">
                                            <p>Outstanding Apps! They are very helpful & mindblowing to get services. Providing comprehensive care and creativity for customer satisfaction.</p>
                                        </div>
                                        <div class="author-area">
                                            <div class="author-img">
                                                <img src="assets/img/home1/testimonial-author-img1.png" alt="">
                                            </div>
                                            <div class="author-content">
                                                <h5>Robertson Hilton</h5>
                                                <span>Project Manager (HR)</span>
                                            </div>
                                        </div>
                                        <svg class="quote" width="198" height="198" viewBox="0 0 198 198" xmlns="http://www.w3.org/2000/svg">
                                            <g>
                                                <path
                                                    d="M4.78284 171.064L4.78227 171.064C0.431774 171.609 -1.21285 165.63 2.76471 163.878L2.76514 163.878C23.1329 154.887 33.6138 143.404 34.9712 131.878L34.4746 131.82L34.9712 131.878C35.9809 123.298 31.2964 115.626 25.1818 114.166L25.1816 114.166C17.8494 112.417 11.6832 107 7.34059 99.6022C2.9995 92.2067 0.506521 82.8702 0.506521 73.3744C0.506521 61.0498 5.44113 49.2292 14.2261 40.5131C23.0112 31.797 34.9271 26.8996 47.3528 26.8996C60.9546 26.8996 72.6525 32.4665 80.957 42.1551C89.2656 51.8485 94.1987 65.6945 94.1991 82.2722C94.028 130.412 57.5668 164.51 4.78284 171.064ZM108.084 171.064L108.083 171.064C103.733 171.609 102.088 165.63 106.066 163.878L106.066 163.878C126.434 154.887 136.915 143.404 138.272 131.878C139.282 123.298 134.597 115.626 128.483 114.166L128.483 114.166C121.15 112.417 114.984 107 110.642 99.6022C106.3 92.2067 103.807 82.8702 103.807 73.3744C103.807 61.0498 108.742 49.2292 117.527 40.5131C126.312 31.797 138.228 26.8996 150.654 26.8996C164.256 26.8996 175.953 32.4665 184.258 42.1551C192.567 51.8485 197.5 65.6945 197.5 82.2722C197.329 130.412 160.868 164.51 108.084 171.064Z"/>
                                            </g>
                                        </svg>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="testimonial-card two">
                                        <div class="company-logo">
                                            <img src="assets/img/home1/testimonial-company-logo2.png" alt="" class="light">
                                            <img src="assets/img/home1/testimonial-company-logo2-white.png" alt="" class="dark">
                                        </div>
                                        <div class="testimonial-content">
                                            <p>Excellent Work! Evaluate the effectiveness of the team’s communication and collaboration throughout the project. I prefer that.</p>
                                        </div>
                                        <div class="author-area">
                                            <div class="author-img">
                                                <img src="assets/img/home1/testimonial-author-img2.png" alt="">
                                            </div>
                                            <div class="author-content">
                                                <h5>Robert Baruni</h5>
                                                <span>QA Engineer</span>
                                            </div>
                                        </div>
                                        <svg class="quote" width="198" height="198" viewBox="0 0 198 198" xmlns="http://www.w3.org/2000/svg">
                                            <g>
                                                <path
                                                    d="M4.78284 171.064L4.78227 171.064C0.431774 171.609 -1.21285 165.63 2.76471 163.878L2.76514 163.878C23.1329 154.887 33.6138 143.404 34.9712 131.878L34.4746 131.82L34.9712 131.878C35.9809 123.298 31.2964 115.626 25.1818 114.166L25.1816 114.166C17.8494 112.417 11.6832 107 7.34059 99.6022C2.9995 92.2067 0.506521 82.8702 0.506521 73.3744C0.506521 61.0498 5.44113 49.2292 14.2261 40.5131C23.0112 31.797 34.9271 26.8996 47.3528 26.8996C60.9546 26.8996 72.6525 32.4665 80.957 42.1551C89.2656 51.8485 94.1987 65.6945 94.1991 82.2722C94.028 130.412 57.5668 164.51 4.78284 171.064ZM108.084 171.064L108.083 171.064C103.733 171.609 102.088 165.63 106.066 163.878L106.066 163.878C126.434 154.887 136.915 143.404 138.272 131.878C139.282 123.298 134.597 115.626 128.483 114.166L128.483 114.166C121.15 112.417 114.984 107 110.642 99.6022C106.3 92.2067 103.807 82.8702 103.807 73.3744C103.807 61.0498 108.742 49.2292 117.527 40.5131C126.312 31.797 138.228 26.8996 150.654 26.8996C164.256 26.8996 175.953 32.4665 184.258 42.1551C192.567 51.8485 197.5 65.6945 197.5 82.2722C197.329 130.412 160.868 164.51 108.084 171.064Z"/>
                                            </g>
                                        </svg>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="testimonial-card two">
                                        <div class="company-logo">
                                            <img src="assets/img/home1/testimonial-company-logo3.png" alt="" class="light">
                                            <img src="assets/img/home1/testimonial-company-logo3-white.png" alt="" class="dark">
                                        </div>
                                        <div class="testimonial-content">
                                            <p>Fantastic Apps! They provide amazing services and are very helpful. delivering all-encompassing care and innovation to ensure client happiness.</p>
                                        </div>
                                        <div class="author-area">
                                            <div class="author-img">
                                                <img src="assets/img/home1/testimonial-author-img3.png" alt="">
                                            </div>
                                            <div class="author-content">
                                                <h5>Hanry Macle</h5>
                                                <span>Support Engineer</span>
                                            </div>
                                        </div>
                                        <svg class="quote" width="198" height="198" viewBox="0 0 198 198" xmlns="http://www.w3.org/2000/svg">
                                            <g>
                                                <path
                                                    d="M4.78284 171.064L4.78227 171.064C0.431774 171.609 -1.21285 165.63 2.76471 163.878L2.76514 163.878C23.1329 154.887 33.6138 143.404 34.9712 131.878L34.4746 131.82L34.9712 131.878C35.9809 123.298 31.2964 115.626 25.1818 114.166L25.1816 114.166C17.8494 112.417 11.6832 107 7.34059 99.6022C2.9995 92.2067 0.506521 82.8702 0.506521 73.3744C0.506521 61.0498 5.44113 49.2292 14.2261 40.5131C23.0112 31.797 34.9271 26.8996 47.3528 26.8996C60.9546 26.8996 72.6525 32.4665 80.957 42.1551C89.2656 51.8485 94.1987 65.6945 94.1991 82.2722C94.028 130.412 57.5668 164.51 4.78284 171.064ZM108.084 171.064L108.083 171.064C103.733 171.609 102.088 165.63 106.066 163.878L106.066 163.878C126.434 154.887 136.915 143.404 138.272 131.878C139.282 123.298 134.597 115.626 128.483 114.166L128.483 114.166C121.15 112.417 114.984 107 110.642 99.6022C106.3 92.2067 103.807 82.8702 103.807 73.3744C103.807 61.0498 108.742 49.2292 117.527 40.5131C126.312 31.797 138.228 26.8996 150.654 26.8996C164.256 26.8996 175.953 32.4665 184.258 42.1551C192.567 51.8485 197.5 65.6945 197.5 82.2722C197.329 130.412 160.868 164.51 108.084 171.064Z"/>
                                            </g>
                                        </svg>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="slider-btn-grp">
                            <div class="slider-btn testimonial-slider-prev">
                                <svg width="14" height="14" viewBox="0 0 14 14" xmlns="http://www.w3.org/2000/svg">
                                    <g>
                                        <path
                                            d="M10.9999 13.0009C9.99994 10.5009 4.99994 8.00092 1.99994 7.00092C4.99994 6.00092 9.49994 4.50092 10.9999 1.00092" stroke-width="1.5" stroke-linecap="round" />
                                    </g>
                                </svg>
                            </div>
                            <div class="slider-btn testimonial-slider-next">
                                <svg width="14" height="14" viewBox="0 0 14 14" xmlns="http://www.w3.org/2000/svg">
                                    <g>
                                        <path d="M3 13.0009C4 10.5009 9 8.00092 12 7.00092C9 6.00092 4.5 4.50092 3 1.00092" stroke-width="1.5" stroke-linecap="round" />
                                    </g>
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- home7 Testimonial Section End -->

    <!-- home7 Testimonial Section Start -->
    {{-- <div class="home7-award-section mb-130">
        <div class="container">
            <div class="row justify-content-between mb-60 wow animate fadeInDown" data-wow-delay="200ms" data-wow-duration="1500ms">
                <div class="col-lg-7">
                    <div class="section-title3 white">
                        <h2>Award & <br> Recognition</h2>
                        <p>I’ve already done <strong>200+ Projects,</strong> to select project <span>(2015-2024).</span></p>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="vector">
                        <svg width="60" height="59" viewBox="0 0 60 59" xmlns="http://www.w3.org/2000/svg">
                            <path d="M29.9825 0V29.0284H0V59H29.9825V29.9716H60V0H29.9825Z"/>
                        </svg>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <table class="award-table">
                        <tbody>
                            <tr class="wow animate fadeInLeft" data-wow-delay="200ms" data-wow-duration="1500ms">
                                <td>
                                    <a href="#">1. Digital Innovation</a>
                                </td>
                                <td>Digigo Platform
                                    <img src="assets/img/home7/award-img1.jpg" alt="">
                                </td>
                                <td><span>2023</span></td>
                            </tr>
                            <tr class="wow animate fadeInLeft" data-wow-delay="400ms" data-wow-duration="1500ms">
                                <td>
                                    <a href="#">2. InnovateXcel Award</a>
                                </td>
                                <td>Microsoft Platform
                                    <img src="assets/img/home7/award-img2.jpg" alt="">
                                </td>
                                <td><span>2023</span></td>
                            </tr>
                            <tr class="wow animate fadeInLeft" data-wow-delay="600ms" data-wow-duration="1500ms">
                                <td>
                                    <a href="#">3. Digital Vanguard</a>
                                </td>
                                <td>Adobe Platform
                                    <img src="assets/img/home7/award-img3.jpg" alt="">
                                </td>
                                <td><span>2024</span></td>
                            </tr>
                            <tr class="wow animate fadeInLeft" data-wow-delay="800ms" data-wow-duration="1500ms">
                                <td>
                                    <a href="#">4. Mastermind</a>
                                </td>
                                <td>Behance Platform
                                    <img src="assets/img/home7/award-img4.jpg" alt="">
                                </td>
                                <td><span>2021</span></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div> --}}
    <!-- home7 Testimonial Section End -->

    <!-- home7 Blog Section Start -->
    <div class="home7-blog-section mb-130">
        <div class="container">
            <div class="row mb-60 wow animate fadeInDown" data-wow-delay="200ms" data-wow-duration="1500ms">
                <div class="col-lg-12 d-flex justify-content-center">
                    <div class="section-title3">
                        <h2>Latest Article.</h2>
                        <p>We provides a wide range of services aimed at helping <strong>Businesses & Organizations.</strong></p>
                    </div>
                </div>
            </div>
            <div class="blog-slider-area">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="swiper home3-blog-slider">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="blog-card2">
                                        <div class="row align-items-center g-xl-4 g-lg-2 g-md-4 g-sm-3 g-4">
                                            <div class="col-lg-6 col-md-5 col-sm-6">
                                                <a href="news-insight-details.html" class="blog-img">
                                                    <img src="assets/img/home3/blog-img1.jpg" alt="">
                                                </a>
                                            </div>
                                            <div class="col-lg-6 col-md-7 col-sm-6">
                                                <div class="blog-content-wrap">
                                                    <ul class="blog-meta">
                                                        <li><a href="news-insight-grid.html">Creative Design</a></li>
                                                        <li>
                                                            <svg width="30" height="6" viewBox="0 0 30 6" xmlns="http://www.w3.org/2000/svg">
                                                                <path d="M5 2.5L0 0.113249V5.88675L5 3.5V2.5ZM25 3.5L30 5.88675V0.113249L25 2.5V3.5ZM4.5 3.5H25.5V2.5H4.5V3.5Z"/>
                                                            </svg>
                                                        </li>
                                                        <li class="blog-date"><a href="news-insight-grid.html">02 April, 2023</a></li>
                                                    </ul>
                                                    <h3><a href="news-insight-details.html">Celebrates Major Milestone in Digital Services.</a></h3>
                                                    <a href="news-insight-details.html" class="primary-btn3 three transparent btn-hover">
                                                        Read More
                                                        <svg width="10" height="10" viewBox="0 0 10 10" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M1 9L9 1M9 1C7.22222 1.33333 3.33333 2 1 1M9 1C8.66667 2.66667 8 6.33333 9 9" stroke-width="1.5" stroke-linecap="round" />
                                                        </svg>
                                                        <span></span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="blog-card2">
                                        <div class="row align-items-center g-xl-4 g-lg-2 g-md-4 g-sm-3 g-4">
                                            <div class="col-lg-6 col-md-5 col-sm-6">
                                                <a href="news-insight-details.html" class="blog-img">
                                                    <img src="assets/img/home3/blog-img2.jpg" alt="">
                                                </a>
                                            </div>
                                            <div class="col-lg-6 col-md-7 col-sm-6">
                                                <div class="blog-content-wrap">
                                                    <ul class="blog-meta">
                                                        <li><a href="news-insight-grid.html">Design Trends</a></li>
                                                        <li>
                                                            <svg width="30" height="6" viewBox="0 0 30 6" xmlns="http://www.w3.org/2000/svg">
                                                                <path d="M5 2.5L0 0.113249V5.88675L5 3.5V2.5ZM25 3.5L30 5.88675V0.113249L25 2.5V3.5ZM4.5 3.5H25.5V2.5H4.5V3.5Z"/>
                                                            </svg>
                                                        </li>
                                                        <li class="blog-date"><a href="news-insight-grid.html">05 April, 2023</a></li>
                                                    </ul>
                                                    <h3><a href="news-insight-details.html">Powerful Impact in Digital Marketplace in One Era.</a></h3>
                                                    <a href="news-insight-details.html" class="primary-btn3 three transparent btn-hover">
                                                        Read More
                                                        <svg width="10" height="10" viewBox="0 0 10 10" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M1 9L9 1M9 1C7.22222 1.33333 3.33333 2 1 1M9 1C8.66667 2.66667 8 6.33333 9 9" stroke-width="1.5" stroke-linecap="round" />
                                                        </svg>
                                                        <span></span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="blog-card2">
                                        <div class="row align-items-center g-xl-4 g-lg-2 g-md-4 g-sm-3 g-4">
                                            <div class="col-lg-6 col-md-5 col-sm-6">
                                                <a href="news-insight-details.html" class="blog-img">
                                                    <img src="assets/img/home3/blog-img3.jpg" alt="">
                                                </a>
                                            </div>
                                            <div class="col-lg-6 col-md-7 col-sm-6">
                                                <div class="blog-content-wrap">
                                                    <ul class="blog-meta">
                                                        <li><a href="news-insight-grid.html">Brutalism</a></li>
                                                        <li>
                                                            <svg width="30" height="6" viewBox="0 0 30 6" xmlns="http://www.w3.org/2000/svg">
                                                                <path d="M5 2.5L0 0.113249V5.88675L5 3.5V2.5ZM25 3.5L30 5.88675V0.113249L25 2.5V3.5ZM4.5 3.5H25.5V2.5H4.5V3.5Z"/>
                                                            </svg>
                                                        </li>
                                                        <li class="blog-date"><a href="news-insight-grid.html">08 September, 2024</a></li>
                                                    </ul>
                                                    <h3><a href="news-insight-details.html">Essential Social Media Strategies for-2024.</a></h3>
                                                    <a href="news-insight-details.html" class="primary-btn3 three transparent btn-hover">
                                                        Read More
                                                        <svg width="10" height="10" viewBox="0 0 10 10" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M1 9L9 1M9 1C7.22222 1.33333 3.33333 2 1 1M9 1C8.66667 2.66667 8 6.33333 9 9" stroke-width="1.5" stroke-linecap="round" />
                                                        </svg>
                                                        <span></span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="blog-card2">
                                        <div class="row align-items-center g-xl-4 g-lg-2 g-md-4 g-sm-3 g-4">
                                            <div class="col-lg-6 col-md-5 col-sm-6">
                                                <a href="news-insight-details.html" class="blog-img">
                                                    <img src="assets/img/home3/blog-img4.jpg" alt="">
                                                </a>
                                            </div>
                                            <div class="col-lg-6 col-md-7 col-sm-6">
                                                <div class="blog-content-wrap">
                                                    <ul class="blog-meta">
                                                        <li><a href="news-insight-grid.html">Web Design</a></li>
                                                        <li>
                                                            <svg width="30" height="6" viewBox="0 0 30 6" xmlns="http://www.w3.org/2000/svg">
                                                                <path d="M5 2.5L0 0.113249V5.88675L5 3.5V2.5ZM25 3.5L30 5.88675V0.113249L25 2.5V3.5ZM4.5 3.5H25.5V2.5H4.5V3.5Z"/>
                                                            </svg>
                                                        </li>
                                                        <li class="blog-date"><a href="news-insight-grid.html">08 November, 2024</a></li>
                                                    </ul>
                                                    <h3><a href="news-insight-details.html">The Power of Influencer Marketing Insights and Tips.</a></h3>
                                                    <a href="news-insight-details.html" class="primary-btn3 three transparent btn-hover">
                                                        Read More
                                                        <svg width="10" height="10" viewBox="0 0 10 10" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M1 9L9 1M9 1C7.22222 1.33333 3.33333 2 1 1M9 1C8.66667 2.66667 8 6.33333 9 9" stroke-width="1.5" stroke-linecap="round" />
                                                        </svg>
                                                        <span></span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="slider-btn-grp three">
                    <div class="slider-btn blog-slider-prev">
                        <svg width="14" height="14" viewBox="0 0 14 14" xmlns="http://www.w3.org/2000/svg">
                            <g>
                                <path
                                    d="M11.002 13.0005C10.002 10.5005 5.00195 8.00049 2.00195 7.00049C5.00195 6.00049 9.50195 4.50049 11.002 1.00049" stroke-width="1.5" stroke-linecap="round" />
                            </g>
                        </svg>
                    </div>
                    <div class="slider-btn blog-slider-next">
                        <svg width="14" height="14" viewBox="0 0 14 14" xmlns="http://www.w3.org/2000/svg">
                            <g>
                                <path
                                    d="M2.99805 13.0005C3.99805 10.5005 8.99805 8.00049 11.998 7.00049C8.99805 6.00049 4.49805 4.50049 2.99805 1.00049" stroke-width="1.5" stroke-linecap="round" />
                            </g>
                        </svg>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- home7 Blog Section End -->
    
@endsection