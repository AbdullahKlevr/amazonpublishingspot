<!doctype html>
<html lang="en">

<head>
    <?php include("../includes/compatibility.php");?>
    <title>Amazon Publishing Service: Become a Published Author</title>
    <meta name="keywords" content="">
    <meta name="description" content="">


    <?php include("../includes/styles.php");?>


</head>

<script>
var isloading = true;

function removeLoading() {
    if (isloading) {
        $("head").append(`  `);

        $('.myLazy').each(function() {
            $(this).attr("src", $(this).attr('data-src'))
        })
        isloading = false
    }
}
$(document).mousemove(removeLoading)
$(document).on("touchmove", removeLoading)
setInterval(removeLoading, 5000);
</script>

<body>




    <?php include("../includes/header.php")?>

    <section class="banner inner-banner inner-banner8">
        <div class="container" data-aos="--fade-up" data-aos-duration="1000">
            <div class="row align-items-center">
                <div class="col-md-7" data-aos="--fade-left" data-aos-duration="1200">
        
                    <h1 class="text-white">Grow your reach with a <span class="d-content primary-color">customized author's website </span>
                    </h1>
                    <p class="text-white py-3">Do you want to create an author's website that demonstrates your works,
                        expands your readership, and draws in publishers and promoters? Let it be handled by <?php echo $brand;?>.
                    <div class="trust">
                        <div class="new_frm">
                            <form action="" method="POST" class="form-get-quote">
                                <div class="grp only_brdr">
                                    <input type="text" name="name" required placeholder="Full Name">
                                </div>
                                <div class="grp">
                                    <input type="email" required name="email" placeholder="Email Address">
                                </div>
                                <div class="grp">
                                    <input type="number" required name="phone" placeholder="Phone Number">
                                </div>
                                <div class="grp">
                                    <button type="submit">Submit</button>
                                </div>
                                <input type="hidden" name="route" value="/ebook-writing-publishing/">
                                <input type="hidden" name="brand" value="">
                                <input type="hidden" name="token"
                                    value="016cf1b56f6618083243d90d3046d3c2044c9aeb2310c532313c61f7a7cecc12">
                                <input type="hidden" name="tag" value="top-form">
                                <input type="hidden" name="price" value="null">
                                <input type="hidden" name="news" value="1">
                                <input type="hidden" name="subject" value="Banner Form (<?php echo $url;?>)">
                            </form>
                        </div>
                        <a href="javascript:;" target="_blank">
                            <img class="pb-4" src="../assets/images/trust.png" alt="<?php echo $brand;?>">
                        </a>
                        <a href="javascript:;" onclick="setButtonURL();" class="btn btn-yellow">Start Project <i
                                class="fal fa-long-arrow-right font-size-xl"></i></a>
                        <a class="btn btn-black" href="tel:<?php echo $phone;?>"><i class="fas fa-phone-alt"></i> &nbsp;
                            Call Now
                        </a>
                    </div>
                </div>
                <div class="col-md-5">

                </div>
            </div>
        </div>

    </section>
    <!-- Counter Start -->
    <!-- Counter Start -->
    <section class="counter-area">
        <div class="container next" data-aos="--fade-up" data-aos-duration="1500">
            <div class="row counter--wrapper" data-aos="--zoom-in" data-aos-duration="2000">
                <div class="count">
                    <div id="no" class="timer" data-from="0" data-to="10" data-speed="5500" data-target="#nono">10</div>
                    <div class="couter-text"> <span> YEARS OF <br> EXPERIENCE </span> </div>
                </div>
                <div class="count">
                    <div id="no" class="timer" data-from="0" data-to="474" data-speed="5500" data-target="#nono">474
                    </div>
                    <div class="couter-text"> <span> PUBLISHED <br> LAST 12 MONTHS</span> </div>
                </div>
                <div class="count">
                    <div id="no" class="timer" data-from="0" data-to="39" data-speed="5500" data-target="#nono">39
                    </div>
                    <div class="couter-text"> <span> PUBLISHED <br> LAST MONTH</span> </div>
                </div>
                <div class="count last">
                    <div id="no" class="timer" data-from="0" data-to="139" data-speed="5500" data-target="#nono">139
                    </div>
                    <div class="couter-text"> <span> CURRENTLY <br> PUBLISHING</span> </div>
                </div>
            </div>
        </div>
    </section><!-- Counter End -->
    <!-- Counter End -->
    <section class="book-stone">
        <div class="container" data-aos="--fade-up" data-aos-duration="1000">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <img src="assets/images/book-woman.jpg" alt="" style="width:550px;">
                </div>
                <div class="col-md-6">
                    <h2>Our Story: A Business, Love, and Coffee Partnership.</h2>
                    <p class="py-3"><?php echo $brand;?>'s directors came to the conclusion that working together to
                        create something interesting would be far more enjoyable than pursuing individual career paths.
                        Our director, <?php echo $brand;?>  is majoring in visual arts. He has completed every
                        artistic endeavor in the sector, including enormous oil paintings, sculptures inspired by
                        classical Greek art, and architectural upgrades for Russian fortresses.
                    </p>
                    <a href="javascript:;" onclick="setButtonURL();" class="btn btn-yellow">Start Project <i
                            class="fal fa-long-arrow-right"></i>
                    </a>
                    <a class="btn btn-black" href=" tel:<?php echo $phone;?>  "><i class="fas fa-phone-alt"></i> &nbsp; Call
                        Now</a>
                </div>
            </div>
        </div>
    </section>


    <section class="self-publishing">
        <div class="container" data-aos="--fade-down" data-aos-duration="1000">
            <h2 class="pb-5 text-center">Advantages of using us for self-publishing</h2>
            <div class="row ">
                <!-- <div class=""> -->
                <div class="col-md-4">
                    <div class="self-pub"> <img class="lazy" src="assets/images/sp1.webp" alt="Logo">
                        <!--<h3>Keep 100% of <span class="d-block">royalties</span></h3>-->
                        <!--<p>Once your book has been published you’ll keep 100% of the NET royalties from the book’s sales – we won’t take a penny!</p>-->
                        <h3>Retain Full <span class="d-block">Ownership Rights</span></h3>
                        <p>After your book is published, you will maintain complete ownership of it.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="self-pub"> <img class="lazy" src="assets/images/sp2.webp" alt="">
                        <h3>Dashboard <span class="d-block">for Sales</span></h3>
                        <p>We will give you access to a sales dashboard so you can monitor book sales and royalties
                            around-the-clock.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="self-pub"> <img class="lazy" src="assets/images/sp3.webp" alt="">
                        <h3>Fast Reaction<span class="d-block">Time</span></h3>
                        <p>We usually publish books in 10–12 weeks, so you won't have to wait long to become a published
                            author!</p>
                    </div>
                </div>

                <!-- </div> -->
            </div>
        </div>
    </section>
    <!-- CTA -->
    <section class="cta">
        <div class="container" data-aos="--zoom-in" data-aos-duration="1000">
            <div class="row align-items-center">
                <div class="offset-md-2"></div>
                <div class="col-md-4"> <img class="lazy" src="assets/images/book-writng-sr.png" alt=""> </div>
                <div class="col-md-6">
                    <h3 class="py-4">There is no limit to what you can achieve with a book under your Name.</h3> <a
                        href="javascript:;" onclick="setButtonURL();" class="btn btn-black">Start Project
                        <i class="fal fa-long-arrow-right"></i>
                    </a>
                    <a class="btn btn-white-border btn-black" href=" tel:<?php echo $phone;?>  ">
                        <i class="fas fa-phone-alt"></i> Call Now
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Portfolio Start -->
    <section class="porfilio-slider px-md-5 mx-md-5 text-center" id="portfolio">
        <div class="container-fluid" data-aos="fade-up" data-aos-duration="1000">
            <h2>Check out <span class="primary-color">our portfolio</span> </h2>
            <p class="py-4 pb-md-5 px-md-5"> We have successfully completed many projects of varying scope and magnitudes. Our clients range from working professionals, and industry experts to  small and large scale corporations. Below are a few books
                that we have written and published for our clients: </p>
            <div class="row">
                <div class="col-md-12" data-aos="zoom-in-up" data-aos-duration="1100">
                    <div class="port-slider-one owl-carousel owl-theme pb-3">
                        <div class="item">
                            <a href="#" target="_blank">
                                <img class="lazy"
                                    src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw=="
                                    data-src="assets/images/01.webp" alt="Book Slider">
                            </a>
                        </div>
                        <div class="item">
                            <a href="#" target="_blank">
                                <img class="lazy"
                                    src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw=="
                                    data-src="assets/images/02.webp" alt="Book Slider">
                            </a>
                        </div>
                        <div class="item">
                            <a href="#" target="_blank">
                                <img class="lazy"
                                    src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw=="
                                    data-src="assets/images/03.webp" alt="Book Slider">
                            </a>
                        </div>
                        <div class="item">
                            <a href="#" target="_blank">
                                <img class="lazy"
                                    src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw=="
                                    data-src="assets/images/04.webp" alt="Book Slider">
                            </a>
                        </div>
                        <div class="item">
                            <a href="#" target="_blank">
                                <img class="lazy"
                                    src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw=="
                                    data-src="assets/images/05.webp" alt="Book Slider">
                            </a>
                        </div>
                        <div class="item">
                            <a href="#" target="_blank">
                                <img class="lazy"
                                    src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw=="
                                    data-src="assets/images/06.webp" alt="Book Slider">
                            </a>
                        </div>
                        <div class="item">
                            <a href="#" target="_blank">
                                <img class="lazy"
                                    src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw=="
                                    data-src="assets/images/07.webp" alt="Book Slider">
                            </a>
                        </div>
                        <div class="item">
                            <a href="#" target="_blank">
                                <img class="lazy"
                                    src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw=="
                                    data-src="assets/images/08.webp" alt="Book Slider">
                            </a>
                        </div>
                        <div class="item">
                            <a href="#" target="_blank">
                                <img class="lazy"
                                    src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw=="
                                    data-src="assets/images/09.webp" alt="Book Slider">
                            </a>
                        </div>
                        <div class="item">
                            <a href="#" target="_blank">
                                <img class="lazy"
                                    src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw=="
                                    data-src="assets/images/10.webp" alt="Book Slider">
                            </a>
                        </div>
                    </div>
                    <!-- <div class="port-slider-two owl-carousel owl-theme">
          <div class="item">
            <a href="https://www.amazon.com/KINT-Escape-Horseshoe-Craig-Underwood-ebook/dp/B0CH3X9RTY/ref=sr_1_1?crid=1D3Q9JT16Y2GW&keywords=Craig+underwood&qid=1697814593&sprefix=craig+underwo%2Caps%2C382&sr=8-1" target="_blank"> <img src="assets/images/sl11.jpg" alt="Book Slider"> </a>
          </div>
          <div class="item">
            <a href="https://www.amazon.co.uk/MixTape-Christopher-Spence-ebook/dp/B0CKGG31WT/ref=sr_1_5?crid=3GNB0KMMM3IWJ&keywords=The+MixTape&qid=1697634726&s=digital-text&sprefix=the+mix%2Cdigital-text%2C335&sr=1-5" target="_blank"> <img src="assets/images/sl12.jpg" alt="Book Slider"> </a>
          </div>
          <div class="item">
            <a href="https://www.amazon.com/Angel-Mirror-Traumatic-Medicine-Spirituality/dp/1916540244" target="_blank"> <img src="assets/images/sl13.jpg" alt="Book Slider"> </a>
          </div>
          <div class="item">
            <a href="https://www.amazon.co.uk/Paris-Durand-Franco-American-Story-ebook/dp/B0C8RL5ZFF/ref=sr_1_1?crid=1A4Q87ST19W6E&keywords=Alain+De+Mars&qid=1697815137&s=digital-text&sprefix=alain+de+mars+%2Cdigital-text%2C193&sr=1-1" target="_blank"> <img src="assets/images/sl14.jpg" alt="Book Slider"> </a>
          </div>
          <div class="item">
            <a href="https://www.amazon.co.uk/Steel-Pot-Vietnam-Curt-Stocker-ebook/dp/B0CJ89QJF8/ref=tmm_kin_swatch_0?_encoding=UTF8&qid=1697815191&sr=1-1-catcorr" target="_blank"> <img src="assets/images/sl15.jpg" alt="Book Slider"> </a>
          </div>
          <div class="item">
            <a href="https://www.amazon.com/Silver-Star-Adventures-Shiny-Chronicles/dp/1088247652/ref=sr_1_1?crid=1VPEJSORCBDM5&keywords=The+Silver+Star+by+bev+everly&qid=1697815442&s=books&sprefix=the+silver+star+by+bev+everl%2Cstripbooks-intl-ship%2C265&sr=1-1" target="_blank"> <img src="assets/images/sl16.jpg" alt="Book Slider"> </a>
          </div>
          <div class="item">
            <a href="https://www.amazon.com/Suseia-Camino-Tomas-Jose-Firme/dp/1916787460/ref=sr_1_3?crid=17L12S306JKS6&keywords=Suseia&qid=1697815317&s=books&sprefix=susi%2Cstripbooks-intl-ship%2C485&sr=1-3" target="_blank"> <img src="assets/images/sl17.jpg" alt="Book Slider"> </a>
          </div>
          <div class="item">
            <a href="https://www.amazon.com/Open-Window-Book-Poetry/dp/1916787126/ref=sr_1_4?crid=2JJS3J1NI7H9E&keywords=An+open+window&qid=1697815331&s=books&sprefix=an+open+windo%2Cstripbooks-intl-ship%2C298&sr=1-4" target="_blank"> <img src="assets/images/sl18.jpg" alt="Book Slider"> </a>
          </div>
          <div class="item">
            <a href="https://www.amazon.com/Sea-Foam-Story-Invention-Evolved-ebook/dp/B0C8BRMQ2Y/ref=sr_1_1?crid=22LOLFNK4BGXK&keywords=amy+buck&qid=1697815350&s=books&sprefix=an+open+window%2Cstripbooks-intl-ship%2C551&sr=1-1" target="_blank"> <img src="assets/images/sl19.jpg" alt="Book Slider"> </a>
          </div>
          <div class="item">
            <a href="https://www.amazon.com/Operation-Sunflower-Michael-Antonowicz/dp/1916707440/ref=sr_1_1?crid=FKUQO2W8RREM&keywords=Operation+Sunflower+by+michael&qid=1697815700&s=books&sprefix=operation+sunflower+by+michae%2Cstripbooks-intl-ship%2C279&sr=1-1" target="_blank"> <img src="assets/images/sl20.jpg" alt="Book Slider"> </a>
          </div>
        </div> -->
                </div>
            </div>
        </div>
    </section>

    <section class="web-tabs">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <h2 class="pb-5">Maximize Your Sales With Amazon Book Marketing</h2>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="borrow-tab">
                                <ul class="nav nav-tabs">
                                    <li><a href="#tab-1" class="active" data-toggle="tab">Our Mission</a></li>
                                    <li><a href="#tab-2" data-toggle="tab" class=""> Our Vision</a></li>
                                    <li><a href="#tab-3" data-toggle="tab" class=""> Our History</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="tab-content">
                                <div class="tab-pane active fade show" id="tab-1">
                                    <div class="content">
                                        <p>Getting the products to meet the needs of various customers is our priority.
                                            We want to provide one-stop solution to all your needs. Our company has over
                                            10 years of experience in sales and marketing and is excellent with
                                            corporate and wholesale networks. </p>
                                    </div>
                                </div>
                                <div class="tab-pane fade show" id="tab-2">
                                    <div class="content">
                                        <p>We are redefining the landscape of publishing in the United States of America
                                            by taking a more customer-centric approach to ensure customer satisfaction
                                            and convenience. </p>
                                    </div>
                                </div>
                                <div class="tab-pane fade show" id="tab-3">
                                    <div class="content">
                                        <p><?php echo $brand;?> was founded by a group of publishing industry
                                            professionals with a passion for helping authors succeed. We have over 10
                                            years of experience in the book publishing industry and have helped hundreds
                                            of authors bring their books to the world. Our team is dedicated to
                                            providing the best possible service and support to our clients, and we're
                                            proud of the successful projects we've been a part of over the years. </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="mission_img">
                        <img class="lazy"
                            src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw=="
                            data-src="assets/images/abt-line.jpg">
                    </div>
                </div>
            </div>
        </div>
    </section><!-- Portfolio End -->


    <!-- CTA Get Started -->
    <section class="cta-get-started">
        <div class="container" data-aos="--slide-up" data-aos-duration="1000">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <h2 class="text-white">Don't be afraid to back up your statements.</h2>
                    <p class="text-white pt-2 pb-3">Test us. We'd want to collaborate with you to make the truly amazing
                        things.</p> <a href="javascript:;" onclick="setButtonURL();" class="btn btn-yellow">Start
                        Project <i class="fal fa-long-arrow-right"></i></a> <a class="btn btn-black"
                        href=" tel:<?php echo $phone;?>  "><i class="fas fa-phone-alt"></i> &nbsp; Call Now</a>
                </div>
                <div class="col-md-6"> <img class="lazy" src="assets/images/cta-inner-before.png" alt="img"> </div>
            </div>
        </div>
    </section>

    <section class="testmonial" id="testimonial">
        <div class="container" data-aos="--fade-down" data-aos-duration="1200">
            <div class="row align-items-center pb-5">
                <div class="col-md-6">
                    <h2>What our customers have to say</h2>
                </div>

            </div>
            <div class="row align-items-center">
                <div class="testmonial-slider owl-theme owl-carousel">
                    <div class="item">
                        <div class="self-pub">
                            <div class="author">
                                <div class="auth-img"> <span>R</span> </div>
                                <div class="auth-bio">
                                    <h6>Rose O Sullivan</h6> <span>2 review</span>
                                </div>
                            </div>

                            <!--<h3>Good people, but slow process</h3>-->
                            <p><?php echo $brand;?>is a fantastic location to write your book. They have seasoned
                                writers working with them who go above and above to meet your needs. After working with
                                them, I was genuinely impressed.</p>
                        </div>
                    </div>
                    <div class="item">
                        <div class="self-pub">
                            <div class="author">
                                <div class="auth-img"> <span>B</span> </div>
                                <div class="auth-bio">
                                    <h6>Brian Payne</h6> <span>3 review</span>
                                </div>
                            </div>

                            <!--<h3>Publishing My Book</h3>-->
                            <p>I can heartily endorse <?php echo $brand;?>as an amazing business with incredibly
                                helpful staff that produces excellent work on schedule. Without them, I could not have
                                accomplished this. I'm grateful <?php echo $brand;?>.</p>
                        </div>
                    </div>
                    <div class="item">
                        <div class="self-pub">
                            <div class="author">
                                <div class="auth-img"> <span>T</span> </div>
                                <div class="auth-bio">
                                    <h6>Thomas Parker</h6> <span>1 review</span>
                                </div>
                            </div>

                            <!--<h3>A Great Team</h3>-->
                            <p>This has been a really enjoyable and enlightening experience. It feels like someone else
                                is thinking and speaking just like you do, with excellent timing and directness. We are
                                especially grateful for your quick turnaround and meticulous work in making this a
                                reality.</p>
                        </div>
                    </div>
                    <div class="item">
                        <div class="self-pub">
                            <div class="author">
                                <div class="auth-img"> <span>J</span> </div>
                                <div class="auth-bio">
                                    <h6>John Selby</h6> <span>2 review</span>
                                </div>
                            </div>

                            <!--<h3>Do your Research , i wish i would had</h3>-->
                            <p>In revising my book, <?php echo $brand;?>has been amazing. They are operating with
                                great promptness and responsiveness. They are a pleasure to work with, and I have
                                already suggested them to a number of others. A LARGE thumbs up.</p>
                        </div>
                    </div>
                    <div class="item">
                        <div class="self-pub">
                            <div class="author">
                                <div class="auth-img"> <span>S</span> </div>
                                <div class="auth-bio">
                                    <h6>Stella Donna</h6> <span>1 review</span>
                                </div>
                            </div>

                            <!--<h3>It was amazing</h3>-->
                            <p>I was unaware of the challenges while I was fighting to get my first book published.
                                However, after contacting Amazon Publishing Company, my book was published quickly
                                thanks to their knowledge. Strongly Suggested</p>
                        </div>
                    </div>
                    <div class="item">
                        <div class="self-pub">
                            <div class="author">
                                <div class="auth-img"> <span>S</span> </div>
                                <div class="auth-bio">
                                    <h6>Stephen Hendry</h6> <span>1 review</span>
                                </div>
                            </div>

                            <!--<h3>The Providers were very skilled with…</h3>-->
                            <p><?php echo $brand;?>I've gained a lifelong friend. Behaving like a writer is one
                                thing, but if you want your finished piece to have all the bells and whistles, that's
                                another. Call these folks, I assure you.Many thanks for realizing my dream.</p>
                        </div>
                    </div>
                    <!--<div class="item">-->
                    <!--  <div class="self-pub">-->
                    <!--    <div class="author">-->
                    <!--      <div class="auth-img"> <span>T</span> </div>-->
                    <!--      <div class="auth-bio">-->
                    <!--        <h6>Tom A.</h6> <span>2 review</span> </div>-->
                    <!--    </div>-->

                    <!--    <h3>Very good first experience</h3>-->
                    <!--    <p>I would give it a 4.5 rating (if I could). The Project Manager was very attentive, which was excellent (5 star). This was my first experience publishing a novel, and I appreciated his regular communication and education. The end quality of the art/ book cover and text formatting were very professional. My only frustrations were: (1) when I pointed out a few issues and in return received a message that the issues were corrected, but when I review it not all were addressed, and (2) when I had an expectation as part of the project and found later that it was not part of the deal. All said, I wouldn't hesitate to work with Amazon Publishing Pro's again.</p>-->
                    <!--  </div>-->
                    <!--</div>-->
                </div>
            </div>
        </div>
    </section>



    <section class="faq-sec">
        <div class="container" data-aos="--zoom-in-up" data-aos-duration="1200">
            <div class="row">
                <div class="col-md-12 pb-md-5 ">
                    <h2 class="text-center">Frequently asked <span class="primary-color">questions</span></h2>
                    <p class="text-center pt-2 pb-4">You might wish to see if your question is covered in our commonly
                        asked questions list before getting in touch with us.</p>
                    <div id="accordion">

                        <div class="card">
                            <div class="card-header">
                                <a class="collapsed card-link" data-toggle="collapse" href="#collapse-0-new">How are my
                                    royalties paid?
                                </a>
                            </div>
                            <div id="collapse-0-new" class="collapse" data-parent="#accordion">
                                <div class="card-body">
                                    <p>Your bank account is credited with your royalties immediately. Your royalties are
                                        not collected by us.
                                        Your earnings will be NET of the royalty fee that the retailer—Amazon, Barnes &
                                        Noble, etc.—charged for the book.
                                    </p>
                                </div>
                            </div>
                        </div>


                        <div class="card">
                            <div class="card-header">
                                <a class="collapsed card-link" data-toggle="collapse" href="#collapse-1-new">Where can I
                                    buy and find my book to be distributed?
                                </a>
                            </div>
                            <div id="collapse-1-new" class="collapse" data-parent="#accordion">
                                <div class="card-body">
                                    <p>Depending on the publishing plan you choose, this will vary. You will have access
                                        to one of the biggest worldwide book distribution networks in the publishing
                                        industry when you enroll in our most complete plan. This network includes over
                                        40+ leading publishing platforms, independent booksellers, chain shops, online
                                        retailers, eBook retailers, etc.
                                    </p>
                                </div>
                            </div>
                        </div>


                        <div class="card">
                            <div class="card-header">
                                <a class="collapsed card-link" data-toggle="collapse" href="#collapse-2-new">Exist any
                                    unstated expenses?
                                </a>
                            </div>
                            <div id="collapse-2-new" class="collapse" data-parent="#accordion">
                                <div class="card-body">
                                    <p>No unstated expenses exist. Each and every pricing is mentioned before the
                                        publishing process begins.
                                    </p>
                                </div>
                            </div>
                        </div>


                        <div class="card">
                            <div class="card-header">
                                <a class="collapsed card-link" data-toggle="collapse" href="#collapse-3-new">Who
                                    determines my book's price?
                                </a>
                            </div>
                            <div id="collapse-3-new" class="collapse" data-parent="#accordion">
                                <div class="card-body">
                                    <p>You can charge as little or as much as you desire for your book because you have
                                        total control over how much it retails for. This is one area where we advise you
                                        as part of our publishing service.
                                    </p>
                                </div>
                            </div>
                        </div>


                        <div class="card">
                            <div class="card-header">
                                <a class="collapsed card-link" data-toggle="collapse" href="#collapse-4-new">Who is in
                                    charge of my book's printing and distribution?
                                </a>
                            </div>
                            <div id="collapse-4-new" class="collapse" data-parent="#accordion">
                                <div class="card-body">
                                    <p>The Print on Demand feature of the publishing platforms where your book is
                                        published takes care of this. For instance, if a customer orders the book from
                                        Amazon, the Print-on-Demand department of Amazon prints and ships the book to
                                        the buyer, paying you your royalties in the process.
                                    </p>
                                </div>
                            </div>
                        </div>


                        <div class="card">
                            <div class="card-header">
                                <a class="collapsed card-link" data-toggle="collapse" href="#collapse-5-new">Which book
                                    genres are covered by the publishing services provided by your company?
                                </a>
                            </div>
                            <div id="collapse-5-new" class="collapse" data-parent="#accordion">
                                <div class="card-body">
                                    <p>Numerous book genres are covered by our publishing services, such as academic
                                        works, children's books, poetry, fiction, non-fiction, and self-help. We're also
                                        always up for checking out new and developing genres.
                                    </p>
                                </div>
                            </div>
                        </div>


                        <div class="card">
                            <div class="card-header">
                                <a class="collapsed card-link" data-toggle="collapse" href="#collapse-6-new">How long
                                    does it typically take your business to do an illustration project for a book?
                                </a>
                            </div>
                            <div id="collapse-6-new" class="collapse" data-parent="#accordion">
                                <div class="card-body">
                                    <p>A book illustration project's completion time can vary based on the intricacy and
                                        level of detail needed. Generally speaking, a book illustration assignment can
                                        be finished in six to twelve weeks. We constantly collaborate closely with our
                                        clients to create precise schedules and guarantee that the project is finished
                                        on time and to a high standard.
                                    </p>
                                </div>
                            </div>
                        </div>


                        <div class="card">
                            <div class="card-header">
                                <a class="collapsed card-link" data-toggle="collapse" href="#collapse-7-new">Which
                                    languages does your organization provide services for translating into?
                                </a>
                            </div>
                            <div id="collapse-7-new" class="collapse" data-parent="#accordion">
                                <div class="card-body">
                                    <p>Almost any language can be translated by our translation services department,
                                        which is well-equipped to handle a large variety of languages. Our team of more
                                        than 100 qualified translators speaks many languages fluently and is capable of
                                        producing translations that are accurate and suitable for the target culture. We
                                        frequently work in English, Spanish, French, German, Chinese, Japanese, Arabic,
                                        Russian, and Portuguese, among other languages. We can learn new and less widely
                                        spoken languages, and we are constantly improving our skills.
                                    </p>
                                </div>
                            </div>
                        </div>


                        <div class="card">
                            <div class="card-header">
                                <a class="collapsed card-link" data-toggle="collapse" href="#collapse-8-new">What is the
                                    price for having your company's audiobook service narrate my book?
                                </a>
                            </div>
                            <div id="collapse-8-new" class="collapse" data-parent="#accordion">
                                <div class="card-body">
                                    <p>The length of the book, the number of characters, and the intricacy of the voices
                                        needed will all affect how much it will cost to have your book narrated by our
                                        company's audiobook service. We advise getting in contact with our
                                        representative and providing information about your book for an exact estimate
                                        of the price. They are able to provide you a price that is tailored to your
                                        particular requirements.
                                    </p>
                                </div>
                            </div>
                        </div>


                        <div class="card">
                            <div class="card-header">
                                <a class="collapsed card-link" data-toggle="collapse" href="#collapse-9-new">In what
                                    ways does your organization maintain the privacy of my work while it is being
                                    edited?
                                </a>
                            </div>
                            <div id="collapse-9-new" class="collapse" data-parent="#accordion">
                                <div class="card-body">
                                    <p>Our clients' manuscripts are kept safe and confidential throughout the editing
                                        process because we take confidentiality very seriously and have stringent
                                        policies and procedures in place, including non-disclosure agreements, secure
                                        servers, and quality control measures.
                                    </p>
                                </div>
                            </div>
                        </div>


                        <div class="card">
                            <div class="card-header">
                                <a class="collapsed card-link" data-toggle="collapse" href="#collapse-10-new">Do you
                                    provide any special offers or discounts to customers that use several of your
                                    company's services?
                                </a>
                            </div>
                            <div id="collapse-10-new" class="collapse" data-parent="#accordion">
                                <div class="card-body">
                                    <p>Indeed, we do provide discounts and package deals to customers that utilize
                                        several of our company's services. You may minimize costs and yet get
                                        high-quality services that satisfy your demands with our bundle offerings.
                                        Please get in contact with our representative for the most recent information on
                                        our current discounts and bundle offers.
                                    </p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php include("../includes/footer-form.php");?>



    <?php include("../includes/footer.php");?>
    <?php include("../includes/scripts.php");?>

</body>

</html>