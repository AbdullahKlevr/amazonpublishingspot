<section class="footer">
  <div class="container">
    <div class="row">
      <div class="col-sm-12 p0">
        <div class="col-sm-3">
          <div class="ftr-col ftr-col-1">
            <h4>Company</h4>
            <ul>
              <li><a href="/">Home</a></li>
              <li><a href="pricing/">Pricing</a></li>
              <li><a href="portfolio/">Portfolio</a></li>
              <li><a href="contact/">Contact Us</a></li>
              <li><a href="privacy/">Privacy Policy</a></li>
              <li><a href="terms/">Terms &amp; Conditions</a></li>
            </ul>
          </div>
        </div>
        <div class="col-sm-3">
          <div class="ftr-col ftr-col-1">
            <h4>Services</h4>
            <ul>
              <li><a href="book-cover-illustration/">book cover illustration</a></li>
              <!-- <li><a href="brand-identity-illustration/">brand identity illustration</a></li> -->
              <li><a href="cartoon-illustration/">cartoon illustration</a></li>
              <li><a href="children-book-illustration/">children book illustration</a></li>
              <li><a href="comic-illustration/">Comic illustration</a></li>
              <li><a href="mascot-illustration/">Mascot illustration</a></li>
              <li><a href="story-board-illustration/">Storyboard illustration</a></li>
            </ul>
          </div>
        </div>
        <div class="col-sm-3">
         <!--  <div class="ftr-col ftr-col-1">
            <h4>Contact</h4>
            <ul>
              <li><p>6 Hays Lane, a London, Greater London SE1 2HB</p></li>
            </ul>
          </div> -->
          <div class="ftr-col ftr-col-inner1">
            <h4>Phone</h4>
            <ul>
              <li><a href="tel: +1 (331) 321-7763"> +1 (331) 321-7763</a></li>
            </ul>
          </div>
          <div class="ftr-col ftr-col-inner1">
            <h4>Email</h4>
            <ul>
              <li><a href="mailto:info@design-prodigy.com" style="text-transform: none;">info@design-prodigy.com</a></li>
            </ul>
          </div>
          <div class="ftr-col ftr-col-inner1">
            <h4>Address</h4>
            <ul>
              <li><a href="#" target="_blank" style="text-transform: none;">444 Benjamin Franklin Ct Aurora, Il 60504</a></li>
              <li><a href="#" target="_blank" style="text-transform: none;">2515 Waukegan Road #101A Deerfield, IL 60015</a></li>
            </ul>
          </div>
        </div>
        <div class="col-sm-3">
          <div class="ftr-col ftr-col-1 ftr-follow">
            
            <h4> About Us </h4>
            <p>
              Design - Prodigy is known for their professionalism, commitment, and precision. Since our inception, we have helped countess businesses grow with our exceptional illustration solutions that are second to none.
              <br>
            </p>
            <h4>Follow Us</h4>
            <ul>
              <li><a target="_blank" href="https://www.facebook.com/designprodigyy"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
              <li><a href="https://www.instagram.com/designprodigyy/"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
              <li><a href="https://twitter.com/designprodigyy"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<script>
      var isloading = true;

      function removeLoading() {
         if (isloading) {
            $("head").append(`<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css"> <link  rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg==" crossorigin="anonymous" referrerpolicy="no-referrer" />  <link rel="stylesheet" type="text/css" href="css/all.css">  `);

            $('.myLazy').each(function () {
               $(this).attr("src", $(this).attr('data-src'))
            })
            isloading = false
         }
      }
      $(document).mousemove(removeLoading)
      $(document).on("touchmove", removeLoading)
      setInterval(removeLoading, 5000);
   </script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script> 
<script src="js/wow.min.js"></script> 
<script src="js/fancybox.js"></script> 
<script src="js/slick.js"></script> 
<script src="js/accordian-jquery-ui.js"></script>
<script src="js/owl.carousel.min.js"></script> 
<script src="../previews.customer.envatousercontent.com/files/308385206/js/jquery.easing.min.js"></script>
<script src="../previews.customer.envatousercontent.com/files/308385206/js/jquery.fittext.js"></script>
<!-- <script src="https://previews.customer.envatousercontent.com/files/308385206/js/creative.js"></script> -->
<script type="text/javascript" src="../previews.customer.envatousercontent.com/files/308385206/wow_book/pdf.combined.min.js"></script>
<script type="text/javascript" src="../previews.customer.envatousercontent.com/files/308385206/wow_book/wow_book.min.js"></script>

<script src="js/custom.js"></script> 
<!-- <script src="chat.js"></script> -->

<script>
  $('.myHover').mouseenter(function(){
        $('.bgGround').css("background-image", "url(images/"+$(this).data('img')+")");
  });

	$('.illus-slider-for').slick({
  slidesToShow: 1,
  slidesToScroll: 1,
  arrows: false,
  fade: true,
  asNavFor: '.illus-slider-nav'
});
$('.illus-slider-nav').slick({
  slidesToShow: 4,
  slidesToScroll: 1,
  asNavFor: '.illus-slider-for',
  dots: false,
  focusOnSelect: true
});
$('.price-slidr').slick({
  dots: true,
  arrows:false,
  infinite: true,
  speed: 300,
  slidesToShow: 4,
  slidesToScroll: 1,
  responsive: [
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 3,
        infinite: true,
        dots: true
      }
    },
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    }
    // You can unslick at a given breakpoint now by adding:
    // settings: "unslick"
    // instead of a settings object
  ]
});
  $('.testi-side-slider').slick({
  infinite: true,
  vertical: true,
  slidesToShow: 3,
  autoplay: true,
  centerMode: true,
  autoplaySpeed: 2000,
  arrows: false,
   autoplaySpeed: 0,
    arrows: false,
    speed:15000,
    cssEase: 'linear',
    Swiping: true,
    verticalSwiping: true,
  cssEase: 'ease-in-out',
  slidesToScroll: 1,
  arrows: true,
  responsive: [
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
        infinite: true,
        arrows: false,
        dots: false
      }
    },
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 1,
        arrows: false,
        slidesToScroll: 1
      }
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    }
    // You can unslick at a given breakpoint now by adding:
    // settings: "unslick"
    // instead of a settings object
  ]
});
   $('.poupBtn').on('click', function(){

          $('.popupform-main').addClass('active');

          $('body').addClass('o-hidden');

      $('.overlay-bg').fadeIn(500);

      $('.close-btn').on('click', function(){

        $('.popupform-main').removeClass('active');

              $('body').removeClass('o-hidden');

        $('.overlay-bg').fadeOut(500);

      });

      $('.overlay-bg').click(function() {

        $('popupform-main').removeClass('active');

              $('body').removeClass('o-hidden');

        $('.overlay-bg').fadeOut(500);

        

      });

      });

  
$( document ).ready(function() {
//var currentIP;
	            var key = '5XpThOAEkfgOvEJ';
				var currentIP = $("meta[name=ip2loc]").attr('content');
				var pgurl = $("meta[name=page_url]").attr('content');
				$.ajax({
					method: 'get',
					url: '//pro.ip-api.com/json/' + currentIP,
					data: {key: key},
					success: function (data) {
						if (data) {
							$('input[name=ip2loc_ip]').val(data.query);
							$('input[name=ip2loc_isp]').val(data.isp);
							$('input[name=ip2loc_org]').val(data.org);
							$('input[name=ip2loc_country]').val(data.country);
							$('input[name=ip2loc_region]').val(data.regionName);
							$('input[name=ip2loc_city]').val(data.city);
							$('input[name=pageurl]').val(pgurl);
							
							
						
						}
					}
				});
});

var newsletter_p = setInterval(function(){
$(".popupform-main-auto").css("display","block")
clearInterval(newsletter_p);
},4000);
$('.close-btn').click(function(){
$('.popupform-main-auto').attr('class' , 'popupform-main-auto' );
setTimeout(function(){ $('.popupform-main-auto').css('display' , 'none' )}, 0);
});



$(document).ready(function() {

            $(".fancybox").fancybox();

        });
// var path = document.querySelector("svg path");
// var total_length = path.getTotalLength();
// $( function() {
//       $( "#accordion1" ).accordion();
//    } );

// $( function() {
//       $( " #accordion2" ).accordion();
//    } );

// $( function() {
//       $( "#accordion3" ).accordion();
//    } );


$('#service-category-tabs li a').click(function(){

    $('#service-category-tabs li a').find('i').removeClass('fa-chevron-up').addClass('fa-chevron-down');

  if($(this).next('.contant_box_acc').css('display')=='block') {

    $(this).next('.contant_box_acc').slideUp('slow');

  }else{

    $('#service-category-tabs .contant_box_acc').css('display','none');

    $(this).next('.contant_box_acc').slideDown('slow');

    $(this).find('i').toggleClass('fa-chevron-down fa-chevron-up');

  }



});


var a = 0;
      $(window).scroll(function() {

        var oTop = $('#counter').offset().top - window.innerHeight;
        if (a == 0 && $(window).scrollTop() > oTop) {
          $('.counter-value').each(function() {
            var $this = $(this),
              countTo = $this.attr('data-count');
            $({
              countNum: $this.text()
            }).animate({
                countNum: countTo
              },

              {

                duration: 2000,
                easing: 'swing',
                step: function() {
                  $this.text(Math.floor(this.countNum));
                },
                complete: function() {
                  $this.text(this.countNum);
                  //alert('finished');
                }

              });
          });
          a = 0;
        }

      });


    

</script>
<script>
        $(function(){

            function fullscreenErrorHandler(){
                if (self!=top) return "The frame is blocking full screen mode. Click on 'remove frame' button above and try to go full screen again."
            }

            // imageBook = ["1", "8"][ Math.floor(Math.random()*2)];
            // imageBookPath = "./img/magazine_template_0"+imageBook+"/";
            // $("#book1-trigger .book-thumb").attr("src", imageBookPath+"image_000.jpg")

            var optionsBook1 = {
                  height   : 1024
                ,width    : 725*2
                // ,maxWidth : 800
                // ,maxHeight : 400
                ,pageNumbers: false

                ,pdf: "images/pdf/book1.pdf"
                ,pdfFind: true
                ,pdfTextSelectable: true

                ,lightbox : "#book1-trigger"
                ,lightboxClass : "lightbox-pdf"
                ,centeredWhenClosed : true
                ,hardcovers : true
                ,curl: false
                ,toolbar: "lastLeft, left, currentPage, right, lastRight, find, toc, zoomin, zoomout, download, flipsound, fullscreen, thumbnails"
                ,thumbnailsPosition : 'bottom'
                ,responsiveHandleWidth : 50
                ,onFullscreenError: fullscreenErrorHandler
            };

            var optionsBook2 = {
                 height   : 1024
                ,width    : 725*2
                // ,maxWidth : 800
                // ,maxHeight : 400
                ,pageNumbers: false

                ,pdf: "images/pdf/book2.pdf"
                ,pdfFind: true
                ,pdfTextSelectable: true

                ,lightbox : "#book2-trigger"
                ,lightboxClass : "lightbox-pdf"
                ,centeredWhenClosed : true
                ,hardcovers : true
                ,curl: false
                ,toolbar: "lastLeft, left, currentPage, right, lastRight, find, toc, zoomin, zoomout, download, flipsound, fullscreen, thumbnails"
                ,thumbnailsPosition : 'bottom'
                ,responsiveHandleWidth : 50
                ,onFullscreenError: fullscreenErrorHandler
            };

            var optionsBook3 = {
                 height   : 1024
                ,width    : 725*2
                // ,maxWidth : 800
                // ,maxHeight : 400
                ,pageNumbers: false

                ,pdf: "images/pdf/book3.pdf"
                ,pdfFind: true
                ,pdfTextSelectable: true

                ,lightbox : "#book3-trigger"
                ,lightboxClass : "lightbox-pdf"
                ,centeredWhenClosed : true
                ,hardcovers : true
                ,curl: false
                ,toolbar: "lastLeft, left, currentPage, right, lastRight, find, toc, zoomin, zoomout, download, flipsound, fullscreen, thumbnails"
                ,thumbnailsPosition : 'bottom'
                ,responsiveHandleWidth : 50
                ,onFullscreenError: fullscreenErrorHandler
            };

            var books = {
                "#book1" : optionsBook1,
                "#book2" : optionsBook2,
                "#book3" : optionsBook3
            };
            $("#book1-trigger, #book2-trigger, #book3-trigger").on("click",function(){
                buildBook( "#"+this.id.replace("-trigger", "") );
            })

            function buildBook( elem ){
                var book=$.wowBook(elem);
                if (!book) {
                    $(elem).wowBook( books[elem] );
                    book=$.wowBook(elem);
                }
                // book.opts.onHideLightbox = function(){
                //     setTimeout( function(){ book.destroy(); }, 1000);
                // }
                book.showLightbox();
            }


        });
    </script>

<!--End of Tawk.to Script-->

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
   </script>