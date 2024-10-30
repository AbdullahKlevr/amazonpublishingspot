<section class="signup">
    <div class="container" data-aos="fade-down" data-aos-duration="1200">

        <div class="row">
            <div class="col-md-5">
                <div class="btm_frm">
                    <img class="lazy"
                        src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw=="
                        data-src="assets/images/p-1.png">
                </div>
            </div>
            <div class="col-md-7">
                <h2>Interested in collaboration?</h2>
                <p class="pt-2 pb-4">Get Your Book Written and Published in Less Than A Month! <span class="d-block">
                        Call Us at <a href="tel:<?php echo $phone;?>"> <?php echo $phone;?></a>
                    </span> </p>
                <form class="validate-letsget form-get-quote" action="" method="POST">
                    <input type="text" class="required input-control form-control" name="name" required id="name"
                        placeholder="Full Name" />
                    <input type="email" class="required input-control form-control email" required name="email"
                        placeholder="Email Address">
                    <input type="number" class="required input-control form-control" required name="phone"
                        placeholder="Phone Number">
                    <select name="quote[service]" id="ser-select" class="required input-control form-control" required>
                        <option selected>Book type?</option>
                        <option value="Digital Book Publishing">Digital Book Publishing</option>
                        <option value="Book Marketing Service">Book Marketing Service</option>
                        <option value="Ghostwriting Service">Ghostwriting Service</option>
                        <option value="Fiction Writing Service">Fiction Writing Service</option>
                        <option value="Children’s Books Service">Children’s Books Service</option>
                        <option value="Book Editing & Proofreading Service">Book Editing & Proofreading Service</option>
                        <option value="Book Cover Designing">Book Cover Designing</option>
                        <option value="Illustrations & Graphics Service">Illustrations & Graphics Service</option>
                        <option value="Book Printing Service">Book Printing Service</option>
                        <option value="Audiobook Production">Audiobook Production</option>
                        <option value="Author Website Service">Author Website Service</option>
                        <option value="Blurb Writing Service">Blurb Writing Service</option>
                        <option value="Amazon Book Description">Amazon Book Description</option>
                        <option value="Amazon Book Listing Optimization">Amazon Book Listing Optimization</option>
                        <option value="Amazon Book Paid Ads">Amazon Book Paid Ads</option>
                        <option value="Amazon Central Account">Amazon Central Account</option>
                        <option value="Amazon A + Content">Amazon A + Content</option>
                        <option value="Book Trailer">Book Trailer</option>
                        <option value="Featured Articles">Featured Articles</option>
                    </select>
                    <textarea class="required input-control form-control" autocomplete="nope" name="brief" required
                        placeholder="Share your idea"></textarea>
                    <label class="chota_fnt">
                        <input type="checkbox" name="bn_emailPromotional" required="" checked> Please CHECK THE BOX to
                        COMMUNICATE VIA SMS OR EMAIL ( <a href="../privacy-policy.php">PRIVACY POLICY </a> & <a
                            href="../terms-and-conditions.php">TERM & CONDITIONS</a> ) - Carrier charges may apply for
                        SMS. Reply STOP or UNSUBSCRIBE to STOP to unsbscribe anytime. </label>
                    <div class="py-3 text-center">
                        <input type="submit" id="register" class="btn btn-black" name="send_data" value="Send Message">
                        <br />
                    </div>
                    <input type="hidden" name="route" value="/book-printing/">
                    <input type="hidden" name="brand" value="">
                    <input type="hidden" name="token"
                        value="016cf1b56f6618083243d90d3046d3c2044c9aeb2310c532313c61f7a7cecc12">
                    <input type="hidden" name="tag" value="top-form">
                    <input type="hidden" name="price" value="null">
                    <input type="hidden" name="news" value="1">
                    <input type="hidden" name="subject" value="Banner Form (<?php echo $url;?>)">
                </form>
            </div>
        </div>
    </div>
</section>