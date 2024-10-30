<header>
    <section class="nav-bar">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-3 col-6">
                    <a href="./" class="logo" aria-label="Logo">
                        <img class="logo-size" src="assets/images/logo.png" titile="Amazon Publishing Plus"
                            alt="Logo">    
                    </a>
                </div>
                <div class="col-md-9">
                    <div class="mobile-screen">
                        <a href="javascript:" onclick="navOpen()" class="btn" id="list-btn"  aria-label="Open">
                            <i class="fas fa-bars"></i>
                        </a>
                    </div>
                    <a href="javascript:" onclick="navClosed()" class="btn" id="cross"  aria-label="Close">
                        <i class="fas fa-times"></i>
                    </a>
                    <nav class="mobile-view main-menu" id="menu-list">
                        <ul class="menu">
                            <li><a href="./">Home</a></li>
                            <!-- Dropdown start -->
                            <li class="nav-item dropdown">
                                <a class="dropdown-toggle" href="javascript:void(0)">Services </a>
                                <div class="dropdown-menu">
                                        <a class="dropdown-item" href="ebook-writing-publishing/">E-Book Writing & Publishing</a>
                                        <a class="dropdown-item" href="audio-book-service/">Audio Book Service</a>
                                        <a class="dropdown-item" href="book-editing-proofreading/">Book Editing & Proofreading</a>
                                        <a class="dropdown-item" href="book-cover-design/">Book Cover Design</a>
                                        <a class="dropdown-item" href="book-illustration/"> Book Illustrations </a>
                                        <a class="dropdown-item" href="book-publishing/"> Book Publishing </a>
                                        <a class="dropdown-item" href="book-printing/"> Book Printing </a>
                                        <a class="dropdown-item" href="book-marketing/"> Book Marketing </a>
                                        <a class="dropdown-item" href="author-website/"> Author Website </a>
                                        <a class="dropdown-item" href="amazon-publishing-service/"> Amazon-publishing </a>
                                   
                                         
                                </div>
                            </li>
                            <!-- Dropdown end -->
                            <li><a href="portfolio/">Portfolio</a></li>
                            <li><a href="testimonial/">Testimonials</a></li>
                            <!-- <li><a href="blogs/">Blogs</a></li> -->
                            <li><a href="contact-us/">Contact Us</a></li>
                            
                            <li><a class="btn btn-yellow" href="tel:<?php echo $phone;?>"><span class="d-block"> <i class="fas fa-phone-alt"></i> <?php echo $phone;?> </span></a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </section>
</header>