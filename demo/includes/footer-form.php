<section class="our-contact">
        <div class="oc"></div>
        <div class="container aos-init aos-animate" data-aos="fade-up" data-aos-duration="2200">
            <div class="row g-4">
                <div class="col-md-6">
                    <div class="info-form">
                        <div class="sec-heading">
                            <h2>
                                Let’s <span>Collaborate! </span>
                            </h2>
                        </div>

                        <form action="" class="app_contact_form" method="GET">
                            <div class="row g-4">
                                <div class="col-md-12">
                                    <input type="text" name="popupname" id="cn" placeholder="Name"
                                        class="required form-control" required>
                                    <input type="email" name="popupemail" id="em" placeholder="Email Address"
                                        class="required email form-control" required>
                                    <input type="tel" class="required form-control ftpn" required name="phone"
                                        minlength="7" maxlength="14" placeholder="Your Phone">
                                    <input type="hidden" name="leadsource" value="ghostwritingalpha">
                                </div>
                                <div class="col-md-12">
                                    <textarea name="message" id="msg" class="required form-control"
                                        placeholder="Enter a brief description about your book" aria-required="true"
                                        required></textarea>
                                </div>

                                <div class="col-md-12 ">
                                    <input type="submit" name="submit" class="submit-btn" value="Get Started">
                                </div>

                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-md-5 offset-md-1">
                    <div class="detail-contact">
                        <div class="sec-heading">
                            <h2 class="text-white">
                                Reach Out to Us Now
                            </h2>
                        </div>
                        <ul class="contact-ul">
                            <li>
                                <img src="assets/images/cont1.webp" alt="" loading="lazy" width="100px" height="100px" width="1" height="1">
                                <a href="javascript:;"> live Chat</a>
                            </li>
                            <li>
                                <img src="assets/images/cont2.webp" alt="" loading="lazy" width="100px" height="100px" width="1" height="1">
                                <a href="tel:<?php echo $phone;?>">
                                    <?php echo $phone;?> <span>Call us now</span>
                                </a>
                            </li>

                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>