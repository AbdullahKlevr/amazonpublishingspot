
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
            <h1 class="text-white"> Testimonials</h1>
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
                  <input type="hidden" name="route" value="/testimonial/">
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
               <input type="hidden" name="route" value="/testimonial/">
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






<?php include("../includes/footer.php");?>
<?php include("../includes/scripts.php");?>



</body>

</html>