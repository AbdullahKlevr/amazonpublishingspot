
<!doctype html>
<html lang="en">

<head>
<?php include("../includes/compatibility.php");?>
<title>Book Printing And Delivery Services | <?php echo $brand;?></title>
<meta name="keywords" content="">
<meta name="description" content="Need book printing and delivery? Our <?php echo $brand;?> provide seamless services for your publishing needs. Get started today!">


<?php include("../includes/styles.php");?>




</head>

<script>
      var isloading = true;

      function removeLoading() {
         if (isloading) {
            $("head").append(`  `);

            $('.myLazy').each(function () {
               $(this).attr("src", $(this).attr('data-src'))
            })
            isloading = false
         }
      }
      $(document).mousemove(removeLoading)
      $(document).on("touchmove", removeLoading)
      setInterval(removeLoading, 5000);
   </script><body>




 <?php  include("../includes/header.php")?>


<section class="banner inner-banner inner-banner6">
   <div class="container" data-aos="fade-up" data-aos-duration="1000">
      <div class="row align-items-center">
         <div class="col-md-7" data-aos="fade-left" data-aos-duration="1200">
            <h5 class="text-white pb-3">Quick, Efficient, And Affordable</h5>
            <h1 class="text-white">Top-Quality <span class="d-content primary-color"> Book Printing </span> And
               Delivery Services at <?php echo $brand;?>
            </h1>
            <p class="text-white py-3">
               With hundreds of successful book printing projects completed last year, we understand our
               authors’ and their audiences’ needs. Whether you need only 100 copies or 10,000, <?php echo $brand;?> has got your back!
            </p>
            <div class="trust">
               <div class="new_frm">
                  <form action=""  method="POST" class="form-get-quote">
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
                  <input type="hidden" name="route" value="/book-printing/">
<input type="hidden" name="brand" value="">
<input type="hidden" name="token" value="016cf1b56f6618083243d90d3046d3c2044c9aeb2310c532313c61f7a7cecc12">
<input type="hidden" name="tag" value="top-form">
<input type="hidden" name="price" value="null">
<input type="hidden" name="news" value="1">
           <input type="hidden" name="subject" value="Banner Form (<?php echo $url;?>)"></form>
                    </div>               <a href="javascript:;" target="_blank">
               <img class="pb-4" src="../assets/images/trust.png"
                  alt="<?php echo $brand;?>">
               </a>
               <a href="javascript:;" onclick="setButtonURL();" class="btn btn-yellow">Start Project <i
                  class="fal fa-long-arrow-right font-size-xl"></i></a>
               <a class="btn btn-black" href="tel:<?php echo $phone;?>"><i class="fas fa-phone-alt"></i> &nbsp; Call
               Now</a>
            </div>
         </div>
         <div class="col-md-5" data-aos="fade-right" data-aos-duration="1200">
            <!-- <div class="get-started-form">
               <form action="" method="post" class="validate-popupform">
                  <h3 class="text-white">Let's Get <span class="primary-color">Started</span></h3>
                  <input type="text" class="required input-control form-control" name="full_name" required id="name"
                     placeholder="Full Name" />
                  <input type="email" class="required input-control form-control email" required name="email"
                     placeholder="Email Address">
                  <input type="tel" class="required input-control form-control" required name="telephone"
                     placeholder="Phone Number">
                  <textarea class="required input-control form-control" autocomplete="nope" name="comments" required
                     placeholder="Share your idea"></textarea>
                  <label class="chota_fnt"><input type="checkbox" name="bn_emailPromotional" required="" checked>
                  Please CHECK THE BOX to COMMUNICATE VIA SMS OR EMAIL (
                  <a href="privacy-policy">PRIVACY POLICY </a>
                  & <a href="terms-and-conditions">TERM & CONDITIONS</a> )
                  - Carrier charges may apply for SMS. Reply STOP or UNSUBSCRIBE to STOP to unsbscribe anytime.
                  </label>
                  <div class="py-3">
                     <input type="submit" id="register" class="btn btn-yellow" name="send_data" value="Send Message"> <br />
                  </div>
               <input type="hidden" name="route" value="/book-printing/">
<input type="hidden" name="brand" value="">
<input type="hidden" name="token" value="016cf1b56f6618083243d90d3046d3c2044c9aeb2310c532313c61f7a7cecc12">
<input type="hidden" name="tag" value="top-form">
<input type="hidden" name="price" value="null">
<input type="hidden" name="news" value="1">
           <input type="hidden" name="subject" value="Banner Form (<?php echo $url;?>)"></form>
            </div> -->
         </div>
      </div>
   </div>
   <!-- <div class="social-medias">
      <ul class="menu">
         <li><a href="https://www.facebook.com/amzpublishingpros" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
         <li><a href="https://twitter.com/Amzpubpro" target="_blank"><i class="fab fa-twitter"></i></a></li>
         <li><a href="https://www.linkedin.com/company/amazon-publishing-pros" target="_blank"><i class="fab fa-linkedin-in"></i></a></li>
         <li><a href="https://www.instagram.com/amzpublishingpros/" target="_blank"><i class="fab fa-instagram"></i></a></li>
      </ul>
   </div> -->
</section>
<!-- Counter Start -->
<!-- Counter Start -->
<section class="counter-area">
  <div class="container next" data-aos="fade-up" data-aos-duration="1500">
    <div class="row counter--wrapper" data-aos="zoom-in" data-aos-duration="2000">
      <div class="count">
        <div id="no" class="timer" data-from="0" data-to="10" data-speed="5500" data-target="#nono">10</div>
        <div class="couter-text"> <span> YEARS OF <br> EXPERIENCE </span> </div>
      </div>
      <div class="count">
        <div id="no" class="timer" data-from="0" data-to="474" data-speed="5500" data-target="#nono">474 </div>
        <div class="couter-text"> <span> PUBLISHED <br> LAST 12 MONTHS</span> </div>
      </div>
      <div class="count">
        <div id="no" class="timer" data-from="0" data-to="39" data-speed="5500" data-target="#nono">39 </div>
        <div class="couter-text"> <span> PUBLISHED <br> LAST MONTH</span> </div>
      </div>
      <div class="count last">
        <div id="no" class="timer" data-from="0" data-to="139" data-speed="5500" data-target="#nono">139 </div>
        <div class="couter-text"> <span> CURRENTLY <br> PUBLISHING</span> </div>
      </div>
    </div>
  </div>
</section><!-- Counter End -->    <!-- Counter End -->
<section class="book-stone">
   <div class="container" data-aos="fade-up" data-aos-duration="1000">
      <div class="row align-items-center">
         <div class="col-md-6">
            <h2>Are You Done Writing, Formatting, And Designing Your Book? Here’s What’s Next!</h2>
            <p class="py-3">Once the author has written, edited, and finalized their book, the next step is
               printing and publishing. At <?php echo $brand;?>, our job is to make your book a legacy and
               free you from the trouble of getting it printed. We offer a bespoke, quick, and affordable
               in-house printing and delivery service. Our publishing team is committed to printing top-quality
               books. Every book we print in our facility meets high standards of digital printing, be it
               offset printing, short-run printing, or print-on-demand. Our printing press handles your books
               with the utmost care and precision.
            </p>
            <a href="javascript:;" onclick="setButtonURL();" class="btn btn-yellow">Start Project <i
               class="fal fa-long-arrow-right"></i>
            </a>
            <a class="btn btn-black" href="tel:<?php echo $phone;?>"><i class="fas fa-phone-alt"></i> &nbsp; Call
            Now</a>
         </div>
         <div class="col-md-6">
            <img src="assets/images/book-pub.png" alt="" style="width:650px;">
         </div>
      </div>
   </div>
</section>
<section class="self-publishing">
   <div class="container" data-aos="fade-down" data-aos-duration="1000">
      <h2 class="pb-5 text-center">Benefits of Self-publishing with us</h2>
      <div class="row ">
         <!-- <div class=""> -->
            <div class="col-md-4">
               <div class="self-pub"> <img class="lazy" src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==" data-src="assets/images/sp1.webp" alt="Logo">
                  <!--<h3>Keep 100% of <span class="d-block">royalties</span></h3>-->
                  <!--<p>Once your book has been published you’ll keep 100% of the NET royalties from the book’s sales – we won’t take a penny!</p>-->
                  <h3>Keep 100% of <span class="d-block">Ownership Rights</span></h3>
                  <p>Once your book has been published you’ll keep 100% of Ownership of the book.</p>
               </div>
            </div>
            <div class="col-md-4">
               <div class="self-pub"> <img class="lazy" src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==" data-src="assets/images/sp2.webp" alt="">
                  <h3>Sales <span class="d-block">Dashboard</span></h3>
                  <p>We’ll provide you with a sales dashboard that is available 24/7 so you can keep track of book sales and royalties.</p>
               </div>
            </div>
            <div class="col-md-4">
               <div class="self-pub"> <img class="lazy" src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==" data-src="assets/images/sp3.webp" alt="">
                  <h3>Quick Turnaround <span class="d-block">Time</span></h3>
                  <p>Our typical turnaround time for book publishing is 10-12 weeks, so you won’t be waiting long before you’re a published author!</p>
               </div>
            </div>
            
         <!-- </div> -->
      </div>
   </div>
</section><!-- CTA -->
<section class="cta">
   <div class="container" data-aos="zoom-in" data-aos-duration="1000">
      <div class="row align-items-center">
         <div class="offset-md-2"></div>
         <div class="col-md-4"> <img class="lazy" src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==" data-src="assets/images/book-writng-sr.png" alt=""> </div>
         <div class="col-md-6">
            <h3 class="py-4">There is no limit to what you can achieve with a book under your Name.</h3> <a href="javascript:;" onclick="setButtonURL();" class="btn btn-black">Start Project 
               <i class="fal fa-long-arrow-right"></i> 
              </a> 
              <a class="btn btn-white-border btn-black" href="tel:<?php echo $phone;?>">
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
              <img class="lazy" src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==" data-src="assets/images/01.webp" alt="Book Slider"> 
            </a>
          </div>
          <div class="item">
            <a href="#" target="_blank"> 
              <img class="lazy" src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==" data-src="assets/images/02.webp" alt="Book Slider"> 
            </a>
          </div>
          <div class="item">
            <a href="#" target="_blank"> 
              <img class="lazy" src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==" data-src="assets/images/03.webp" alt="Book Slider"> 
            </a>
          </div>
          <div class="item">
            <a href="#" target="_blank"> 
              <img class="lazy" src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==" data-src="assets/images/04.webp" alt="Book Slider"> 
            </a>
          </div>
          <div class="item">
            <a href="#" target="_blank"> 
              <img class="lazy" src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==" data-src="assets/images/05.webp" alt="Book Slider"> 
            </a>
          </div>
          <div class="item">
            <a href="#" target="_blank"> 
              <img class="lazy" src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==" data-src="assets/images/06.webp" alt="Book Slider"> 
            </a>
          </div>
          <div class="item">
            <a href="#" target="_blank"> 
              <img class="lazy" src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==" data-src="assets/images/07.webp" alt="Book Slider"> 
            </a>
          </div>
          <div class="item">
            <a href="#" target="_blank"> 
              <img class="lazy" src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==" data-src="assets/images/08.webp" alt="Book Slider"> 
            </a>
          </div>
          <div class="item">
            <a href="#" target="_blank"> 
              <img class="lazy" src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==" data-src="assets/images/09.webp" alt="Book Slider"> 
            </a>
          </div>
          <div class="item">
            <a href="#" target="_blank"> 
              <img class="lazy" src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==" data-src="assets/images/10.webp" alt="Book Slider"> 
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
                  <p>Getting the products to meet the needs of various customers is our priority. We want to provide one-stop solution to all your needs. Our company has over 10 years of experience in sales and marketing and is excellent with corporate and wholesale networks. </p>
                </div>
              </div>
              <div class="tab-pane fade show" id="tab-2">
                <div class="content">
                  <p>We are redefining the landscape of publishing in the United States of America by taking a more customer-centric approach to ensure customer satisfaction and convenience. </p>
                </div>
              </div>
              <div class="tab-pane fade show" id="tab-3">
                <div class="content">
                  <p><?php echo $brand;?> was founded by a group of publishing industry professionals with a passion for helping authors succeed. We have over 10 years of experience in the book publishing industry and have helped hundreds of authors bring their books to the world. Our team is dedicated to providing the best possible service and support to our clients, and we're proud of the successful projects we've been a part of over the years. </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-6">
        <div class="mission_img">
          <img class="lazy" src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==" data-src="assets/images/abt-line.jpg">
        </div>
      </div>
    </div>
  </div>
</section><!-- Portfolio End -->


<!-- CTA Get Started -->
<section class="cta-get-started">
  <div class="container" data-aos="slide-up" data-aos-duration="1000">
    <div class="row align-items-center">
      <div class="col-md-6">
        <h2 class="text-white">Put your money where your words are.</h2>
        <p class="text-white pt-2 pb-3">Challenge us. We want to work with you to create the really cool stuff.</p> <a href="javascript:;" onclick="setButtonURL();" class="btn btn-yellow">Start Project <i class="fal fa-long-arrow-right"></i></a> <a class="btn btn-black" href="tel:<?php echo $phone;?>"><i class="fas fa-phone-alt"></i> &nbsp; Call Now</a> </div>
      <div class="col-md-6"> <img class="lazy" src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==" data-src="assets/images/cta-inner-before.png" alt="img"> </div>
    </div>
  </div>
</section>

<section class="testmonial" id="testimonial">
  <div class="container" data-aos="fade-down" data-aos-duration="1200">
    <div class="row align-items-center pb-5">
      <div class="col-md-6">
        <h2>What our clients say</h2> </div>
      <div class="col-md-6 text-right">
        <a href="#" target="_blank"> <img class="lazy" src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==" data-src="assets/images/review-trust.webp" alt="Logo" width="60%"> </a>
      </div>
    </div>
    <div class="row align-items-center">
      <div class="testmonial-slider owl-theme owl-carousel">
        <div class="item">
          <div class="self-pub">
            <div class="author">
              <div class="auth-img"> <span>R</span> </div>
              <div class="auth-bio">
                <h6>Rose O Sullivan</h6> <span>2 review</span> </div>
            </div>
            
            <!--<h3>Good people, but slow process</h3>-->
            <p><?php echo $brand;?> is a great place to get your book written. They have experienced writers on board who actually walk extra miles to fulfil your expectations. I have worked with them and got truly impressed.</p>
          </div>
        </div>
        <div class="item">
          <div class="self-pub">
            <div class="author">
              <div class="auth-img"> <span>B</span> </div>
              <div class="auth-bio">
                <h6>Brian Payne</h6> <span>3 review</span> </div>
            </div>
          
            <!--<h3>Publishing My Book</h3>-->
            <p>I can highly recommend <?php echo $brand;?> as a fantastic company with really helpful people that deliver great results on time. I could not have achieved this with out them. Thank you <?php echo $brand;?>.</p>
          </div>
        </div>
        <div class="item">
          <div class="self-pub">
            <div class="author">
              <div class="auth-img"> <span>T</span> </div>
              <div class="auth-bio">
                <h6>Thomas Parker</h6> <span>1 review</span> </div>
            </div>
           
            <!--<h3>A Great Team</h3>-->
            <p>This has been a delightful enriching experience, It is as someone is talking like you and thinking the same way, direct to the point, and great timing. Special thanks for making this Come true in a short period of time and thorough work.</p>
          </div>
        </div>
        <div class="item">
          <div class="self-pub">
            <div class="author">
              <div class="auth-img"> <span>J</span> </div>
              <div class="auth-bio">
                <h6>John Selby</h6> <span>2 review</span> </div>
            </div>
           
            <!--<h3>Do your Research , i wish i would had</h3>-->
            <p><?php echo $brand;?> has been wonderful in editing my book. They are working in a very timely and responsive way. I really like working with them and have already recommended them to several other people. A BIG THUMBS UP.</p>
          </div>
        </div>
        <div class="item">
          <div class="self-pub">
            <div class="author">
              <div class="auth-img"> <span>S</span> </div>
              <div class="auth-bio">
                <h6>Stella Donna</h6> <span>1 review</span> </div>
            </div>
            
            <!--<h3>It was amazing</h3>-->
            <p>When I was struggling to publish my first book, I had no idea of the difficulties involved. But when I got in touch with <?php echo $brand;?>, my book was publish within few period with their expertise. Highly Recommended</p>
          </div>
        </div>
        <div class="item">
          <div class="self-pub">
            <div class="author">
              <div class="auth-img"> <span>S</span> </div>
              <div class="auth-bio">
                <h6>Stephen Hendry</h6> <span>1 review</span> </div>
            </div>
            
            <!--<h3>The Providers were very skilled with…</h3>-->
            <p><?php echo $brand;?>, I have made a friend for life. It's one thing to call or feel like a writer, but if you want all the bells and whistles in a completed writing. Trust me call these people.Thanks alot for making my dream come true</p>
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
  <div class="container" data-aos="zoom-in-up" data-aos-duration="1200">
    <div class="row">
      <div class="col-md-12 pb-md-5 ">
        <h2 class="text-center">Frequently asked <span class="primary-color">questions</span></h2>
        <p class="text-center pt-2 pb-4">Before contacting us you might want to check whether your question is one of our frequently asked questions.</p>
        <div id="accordion">
          <div class="card">
            <div class="card-header"> <a class="collapsed card-link" data-toggle="collapse" href="#collapseOne">Q. What will be
                                the printing cost of the book?</a> </div>
            <div id="collapseOne" class="collapse" data-parent="#accordion">
              <div class="card-body">
                <p>The printing cost of the book depends on the following factors.</p>
                <ul class="menu menu-dot">
                  <li> Page quality </li>
                  <li> Content color </li>
                  <li> Number of pages </li>
                  <li> Binding type </li>
                  <li> Number of copies ordered </li>
                </ul>
              </div>
            </div>
          </div>
          <div class="card">
            <div class="card-header"> <a class="collapsed card-link" data-toggle="collapse" href="#collapseTwo">
                                Q. How is the royalty calculated?</a> </div>
            <div id="collapseTwo" class="collapse" data-parent="#accordion">
              <div class="card-body">
                <p> What will be the author’s share when books will be sold? </p>
              </div>
            </div>
          </div>
          <div class="card">
            <div class="card-header"> <a class="collapsed card-link" data-toggle="collapse" href="#collapseThree">
                                Q. Does the author keep the film/movie rights for her/his book?</a> </div>
            <div id="collapseThree" class="collapse" data-parent="#accordion">
              <div class="card-body">
                <p>Yes, the author has holds 100% film rights for her/his work. But you must notify us the detailed good news to spread socially. That is it. No commission. </p>
              </div>
            </div>
          </div>
          <div class="card">
            <div class="card-header"> <a class="collapsed card-link" data-toggle="collapse" href="#collapseFive">
                                Q. Who will hold the copyright?</a> </div>
            <div id="collapseFive" class="collapse" data-parent="#accordion">
              <div class="card-body">
                <p> The author will hold the copyrights in all cases. </p>
              </div>
            </div>
          </div>
          <div class="card">
            <div class="card-header"> <a class="collapsed card-link" data-toggle="collapse" href="#collapseSix">
                                Q. How long will it take to get the book published?</a> </div>
            <div id="collapseSix" class="collapse" data-parent="#accordion">
              <div class="card-body">
                <p> In approximately 7 to 14 days, from the time we have the computer typed manuscript, your written (or email) approval for print and the verified payment with us. However, some of the distribution channels may take longer time, but the book will be available in our store within time, with guarantee. </p>
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