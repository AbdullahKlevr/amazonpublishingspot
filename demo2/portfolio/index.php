
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




<?php include("../includes/header.php")?>

<section class="banner inner-banner inner-banner1">
   <div class="container" data-aos="fade-up" data-aos-duration="1000">
      <div class="row align-items-center">
         <div class="col-md-7" data-aos="fade-left" data-aos-duration="1200">
            <h1 class="text-white"> Our <span class="d-content primary-color">Portfolio</span></h1>
            <!--<p class="text-white py-3">-->
            <!--   We appreciate feedback from readers and visitors at any time. Please use the contact information-->
            <!--   below to get in touch with us if you have any queries, comments, or worries. Our goal is to-->
            <!--   answer to every query. Please provide as much detail as possible in your message to help us-->
            <!--   understand your inquiry and respond more effectively. We value your privacy, and your-->
            <!--   information will not be shared with any third-party.-->
            <!--</p>-->
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
                  <input type="hidden" name="route" value="/portfolio/">
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
<!--             <div class="get-started-form">
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
               <input type="hidden" name="route" value="/portfolio/">
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

</section>
<!-- Counter Start -->
<!-- Counter Start -->


<!-- Portfolio Start -->
<section class="porfilio-slider px-md-5 mx-md-5 text-center" id="portfolio">
  <div class="container-fluid" data-aos="fade-up" data-aos-duration="1000">
    <h2>Check out <span class="primary-color">our portfolio</span> </h2>
    <p class="py-4 pb-md-5 px-md-5"> We have successfully completed many projects of varying scope and magnitudes. Our clients range from working professionals, and industry experts to small and large scale corporations. Below are a few books
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



<section class="signup">
  <div class="container" data-aos="fade-down" data-aos-duration="1200">
    
        <div class="row">
        <div class="col-md-5">
          <div class="btm_frm">
            <img class="lazy" src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==" data-src="assets/images/p-1.png"> 
          </div>
        </div>    
    <div class="col-md-7">
      <h2>Interested in collaboration?</h2>
    <p class="pt-2 pb-4">Get Your Book Written and Published in Less Than A Month! <span class="d-block">
                Call Us at <a href="tel:<?php echo $phone;?>"> <?php echo $phone;?></a>
            </span> </p>
      <form class="validate-letsget form-get-quote" action="" method="POST">
        <input type="text" class="required input-control form-control" name="name" required id="name" placeholder="Full Name" />
        <input type="email" class="required input-control form-control email" required name="email" placeholder="Email Address">
        <input type="number" class="required input-control form-control" required name="phone" placeholder="Phone Number">
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
        <textarea class="required input-control form-control" autocomplete="nope" name="brief" required placeholder="Share your idea"></textarea>
        <label class="chota_fnt">
          <input type="checkbox" name="bn_emailPromotional" required="" checked> Please CHECK THE BOX to COMMUNICATE VIA SMS OR EMAIL ( <a href="../privacy-policy.php">PRIVACY POLICY </a> & <a href="../terms-and-conditions.php">TERM & CONDITIONS</a> ) - Carrier charges may apply for SMS. Reply STOP or UNSUBSCRIBE to STOP to unsbscribe anytime. </label>
        <div class="py-3 text-center">
          <input type="submit" id="register" class="btn btn-black" name="send_data" value="Send Message">
          <br /> </div>
      <input type="hidden" name="route" value="/portfolio/">
<input type="hidden" name="brand" value="">
<input type="hidden" name="token" value="016cf1b56f6618083243d90d3046d3c2044c9aeb2310c532313c61f7a7cecc12">
<input type="hidden" name="tag" value="top-form">
<input type="hidden" name="price" value="null">
<input type="hidden" name="news" value="1">
           <input type="hidden" name="subject" value="Banner Form (<?php echo $url;?>)"></form>
    </div>
        </div>
  </div>
</section>


<?php include("../includes/footer.php");?>
<?php include("../includes/scripts.php");?>

</body>

</html>