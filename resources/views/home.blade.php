<x-app-layout>
    <button class="btn" id="btn-top"><i class="fas fa-arrow-circle-up fa-3x"></i></button>
    <nav class="navbar">
        {{-- <a href="#" class="nav-logo">DiSite.</a> --}}
        <ul class="nav-menu ">
            <li class="nav-item">
                <a href="#" class="nav-link">Home
                    <hr class="line-navbar line-home" size="5">
                </a>
            </li>
            <li class="nav-item">
                <a id="about-btn" href="#About" class="nav-link">About
                    <hr class="line-navbar line-about " size="5">
                </a>
            </li>
            <li class="nav-item">
                <a id="project-btn" href="#Projects" class="nav-link">Projects
                    <hr class="line-navbar line-projects" size="5">
                </a>
            </li>
            <li class="nav-item">
                <a id="contact-btn" href="#Contacts" class="nav-link">Contact
                    <hr class="line-navbar line-contactme" size="5">
                </a>
            </li>
        </ul>
        <div class="hamburger">
            <span class="bar"></span>
            <span class="bar"></span>
            <span class="bar"></span>
        </div>
    </nav>
    <section  class="first-content">
        <div class="main-content row">
            <div class="col text-end">
                <div class="p-5 profile-image">
                    <img style="max-width: 20rem; margin-right: 7rem"
                        src="{{ asset('images/1633574850280 (1).png') }}" alt="">
                </div>
            </div>
            <div class="col d-flex flex-column justify-content-center">
                <div class="name text-primary fs-2 fw-bolder">
                    Andi Sultan Asharil Raphi
                </div>
                <div class="job fs-6 fw-bolder font-italic">
                    Junior Web Developer
                </div>
            </div>
        </div>
    </section>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path fill="#b1c5ec" fill-opacity="0.82"
            d="M0,160L80,154.7C160,149,320,139,480,160C640,181,800,235,960,224C1120,213,1280,139,1360,101.3L1440,64L1440,320L1360,320C1280,320,1120,320,960,320C800,320,640,320,480,320C320,320,160,320,80,320L0,320Z">
        </path>
    </svg>
    <section id="About" class="second-content">
        <div class="title-section" data-aos="fade-up" data-aos-duration="500" data-aos-easing="ease-in-out"
            data-aos-mirror="true" data-aos-once="true" data-aos-anchor-placement="top-center">

            <div class="title fs-2 fw-bold text-center mt-3">
                About me
            </div>
            <hr class="mt-2" size="5" style="width:15%;margin:auto;color:blue">
        </div>
        <div class="aboutme-content mt-5" data-aos="fade-up" data-aos-duration="500" data-aos-easing="ease-in-out"
            data-aos-mirror="true" data-aos-once="true" data-aos-anchor-placement="top-center">
            <div class="text-aboutme" style="width: 60%; margin:auto">
                <p class="text-center">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Explicabo dolor
                    asperiores ea maiores aliquid quibusdam. Esse facilis reprehenderit assumenda quo dolore neque
                    earum, voluptas aliquam blanditiis perferendis dolorem in quasi. Lorem ipsum dolor sit amet
                    consectetur adipisicing elit. Numquam nulla nisi, id praesentium omnis ratione atque neque qui
                    doloribus, laborum iste accusamus natus repellat deserunt? Accusantium magnam quis mollitia
                    praesentium.</p>
            </div>
            <div class="button-aboutme text-center">
                <button style="width: 7rem" class="btn btn-primary about-me-btn">More</button>
            </div>
        </div>
    </section>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path fill="#c0d0f0" fill-opacity="1"
            d="M0,256L40,245.3C80,235,160,213,240,208C320,203,400,213,480,192C560,171,640,117,720,106.7C800,96,880,128,960,165.3C1040,203,1120,245,1200,250.7C1280,256,1360,224,1400,208L1440,192L1440,0L1400,0C1360,0,1280,0,1200,0C1120,0,1040,0,960,0C880,0,800,0,720,0C640,0,560,0,480,0C400,0,320,0,240,0C160,0,80,0,40,0L0,0Z">
        </path>
    </svg>
    <section id="Projects" class="third-content">
        <div class="title-section" data-aos="fade-up" data-aos-duration="500" data-aos-easing="ease-in-out"
            data-aos-mirror="true" data-aos-once="true" data-aos-anchor-placement="top-center">
            <div class="title fs-2 fw-bold text-center mt-3">
                My Projects
            </div>
            <hr class="mt-2" size="5" style="width:20%;margin:auto;color:blue">
        </div>
        <div class="row-projects mt-5" data-aos="fade-right" data-aos-duration="500" data-aos-easing="ease-in-out"
            data-aos-mirror="true" data-aos-once="true" data-aos-anchor-placement="top-center">
            <div class="card item-project me-5" style="width: 18rem;">
                <img class="card-img-top img-project"
                    src="{{ asset('images/james-harrison-vpOeXr5wmR4-unsplash.jpg') }}" alt="Card image cap">
                <div class="card-body text-center mt-2">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                        the card's content.</p>
                    <a href="#" class="btn btn-primary">Show Github</a>
                </div>
            </div>
            <div class="card item-project me-5 ms-5" style="width: 18rem;">
                <img class="card-img-top img-project"
                    src="{{ asset('images/james-harrison-vpOeXr5wmR4-unsplash.jpg') }}" alt="Card image cap">
                <div class="card-body text-center mt-2">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                        the card's content.</p>
                    <a href="#" class="btn btn-primary">Show Github</a>
                </div>
            </div>
            <div class="card item-project ms-5" style="width: 18rem;">
                <img class="card-img-top img-project"
                    src="{{ asset('images/james-harrison-vpOeXr5wmR4-unsplash.jpg') }}" alt="Card image cap">
                <div class="card-body text-center mt-2">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                        the card's content.</p>
                    <a href="#" class="btn btn-primary">Show Github</a>
                </div>
            </div>
        </div>
        <div class="row-projects mt-5" data-aos="fade-left" data-aos-duration="500" data-aos-easing="ease-in-out"
            data-aos-mirror="true" data-aos-once="true" data-aos-anchor-placement="top-center">
            <div class="card item-project me-5" style="width: 18rem;">
                <img class="card-img-top img-project"
                    src="{{ asset('images/james-harrison-vpOeXr5wmR4-unsplash.jpg') }}" alt="Card image cap">
                <div class="card-body text-center mt-2">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                        the card's content.</p>
                    <a href="#" class="btn btn-primary">Show Github</a>
                </div>
            </div>
            <div class="card item-project ms-5" style="width: 18rem;">
                <img class="card-img-top img-project"
                    src="{{ asset('images/james-harrison-vpOeXr5wmR4-unsplash.jpg') }}" alt="Card image cap">
                <div class="card-body text-center mt-2">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                        the card's content.</p>
                    <a href="#" class="btn btn-primary">Show Github</a>
                </div>
            </div>
        </div>
        <div class="show-github">
            <div class="button-aboutme text-center">
                <button style="width: 7rem" class="btn btn-primary show-github-btn">Show All</button>
            </div>
        </div>
    </section>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path fill="#c0d0f0" fill-opacity="1"
            d="M0,32L48,48C96,64,192,96,288,133.3C384,171,480,213,576,197.3C672,181,768,107,864,96C960,85,1056,139,1152,149.3C1248,160,1344,128,1392,112L1440,96L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z">
        </path>
    </svg>
    <section id="Contacts" class="fourth-content">
        <div class="title-section" data-aos="fade-up" data-aos-duration="500" data-aos-easing="ease-in-out"
            data-aos-mirror="true" data-aos-once="true" data-aos-anchor-placement="top-center">

            <div class="title fs-2 fw-bold text-center mt-3">
                Contact Me
            </div>
            <hr class="mt-2" size="5" style="width:15%;margin:auto;color:blue">
        </div>
        <div class="contactme-content mt-5" data-aos="fade-up" data-aos-duration="500" data-aos-easing="ease-in-out"
            data-aos-mirror="true" data-aos-once="true" data-aos-anchor-placement="top-center">
            <div class="text-contactme" style="width: 70%; margin:auto">
                <div class="instagram text-center">
                    <a target="_blank" rel="noopener noreferrer"  href="https://www.instagram.com/aa.ndii/" class="instagram-link"><i class="fa-5x fab fa-instagram"></i></a>
                    <p class="fw-bolder instagram-title">Instagram</p>
                </div>
                <div class="email text-center">
                    <a class="email-link" target="_blank" rel="noopener noreferrer"  href="mailto:andiaril186@gmail.com"><i class="fa-5x fas fa-envelope"></i></i></a>
                    <p class="fw-bolder email-title text-primary">G-Mail</p>
                </div>
                <div class="whatsapp text-center">
                    <a class="whatsapp-link" target="_blank" rel="noopener noreferrer"  href="https://wa.me/+62895347047819"><i class="fa-5x fab fa-whatsapp"></i></i></a>
                    <p class="fw-bolder whatsapp-title">Whatsapp</p>
                </div>
                <div class="linkedin text-center">
                    <a class="linkedin-link" target="_blank" rel="noopener noreferrer"  href="https://www.linkedin.com/in/andi-sultan-asharil-raphi-2a77b3150/"><i class="fab fa-linkedin-in fa-5x"></i></i></a>
                    <p class="fw-bolder linkedin-title text-primary">LinkedIn</p>
                </div>
            </div>
        </div>
    </section>
    <footer class="footer">
        {{-- <div class="title-footer">

            <div class="title fs-2 fw-bold text-center mt-3">
                Contact Me
            </div>
            <hr class="mt-2" size="5" style="width:15%;margin:auto;color:blue">
        </div> --}}
        <div class="footer-content">
            <div class="text-footer" style="width: 60%; margin:auto">
                <p>Andi Sultan Asharil Raphi   <i class="fas fa-copyright"></i></p>
            </div>
        </div>
    </footer>
</x-app-layout>
