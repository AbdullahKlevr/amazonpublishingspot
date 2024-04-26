<!doctype html>
<html lang="en-US">
    

<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
        <?php include_once("includes/head.php")?>
        
        


        
        


        <title>Home | Amazon Publishing Spot </title>
    </head>
    <body class="">
        <!-- top-header -->
        <!-- header-start -->
        <div class="back-bg">
                        <?php include_once("includes/header.php")?>
            <!-- header-end -->
            <style>
                .form-box {
                    margin-top: 30px;
                }
            </style>   
<!-- banner-start -->
<section id="banner" class="banneroad01 ebkwriting">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="row align-items-center">
                    <div class="col-md-6">
                    <div class="bnr-txt btn-tx-cp">
                        <!--<h4>Enter into the digital era</h4>-->
                        <h2>OUR AMAZON KINDLE VELLA EXPERTS WILL HELP YOU EXTEND THE REACH OF YOUR STORIES.</h2>
                       <p>With our first-rate Amazon Kindle Vella services, you're just a step away from becoming a world-renowned author. We assist you in serializing your stories and releasing them on the world's largest book publishing platform.</p>
                       
                    </div>
                     <div class="cta-btn btnres">

                     <a href="#" data-toggle="modal" data-target="#exampleModal" class="btn btnres1" >Get A Quote</a>

                    <a href="javascript:void(Tawk_API.toggle())"  class="btn btnres2" >Get Started</a>


                </div>

                </div>
                 <div class="col-md-6">
                 <!--  <section class="custom-ban-form">-->
<!--    <div class="form-banner">-->
<!--    <h3 style="    font-size: 24px;-->
<!--    padding-bottom: 10px;-->
<!--    text-align: center;"><Strong>Let’s Get Started!</Strong></h3>-->
<!--    <div class="banform">-->
<!--      <div class="container">-->
<!--        <div class="row">-->
<!--          <div class="ban-form">-->
<!--            <form class="cmxform form-get-quote" action="javascript:;" method="POST" >-->
                                      
<!--              <div class="row">-->
<!--                <div class="col-lg-12">-->
<!--                  <div class="fldset">-->
<!--                    <input  id="username" name="quote[name]"  type="text" placeholder="Enter your name *" required  onkeydown="return /[a-z]/i.test(event.key)"/>-->
                    
<!--                  </div>-->
<!--                </div>-->
<!--                <div class="col-lg-12">-->
<!--                  <div class="fldset">-->
<!--                    <input id="cemail" type="email" name="quote[email]" placeholder="Enter email here *" required>-->
<!--                  </div>-->
<!--                </div>-->
<!--                <div class="col-lg-12">-->
<!--                  <div class="fldset">-->
<!--                    <input   name="quote[phone]" class="phoneNum" type="text" placeholder="Phone Number *"   required />-->
<!--                  </div>-->
<!--                </div>-->
                
<!--                <div class="col-lg-12">-->
<!--                  <div class="fldset">-->
<!--                    <textarea name="quote[brief]" rows="7" placeholder="Talk About Your Project"></textarea>-->
<!--                  </div>-->
<!--                </div>-->
                
<!--                <div class="col-lg-12">-->
<!--                  <div class="fldset">-->
<!--                    <input name="submit" type="submit" placeholder="Connect With Us" required />-->
                       
                 
<!--                  </div>-->
<!--                </div>-->
<!--              </div>-->
<!--            </form>-->
<!--          </div>-->
<!--        </div>-->
<!--      </div>-->
<!--    </div>-->
<!--</div>-->
<!--           </section>-->


 
 <div class="form-box" style="margin-top:0px;">
    <img src="images/blacklogo.png" class="img-fluid logoimg">
<h2 style="color:#000;font-size:40px;">Create account</h2>
	<div class="default-form">
		<form action="/leads/" method="POST" class="form-get-quote form_submission" id="contact-form">
		     <input type="hidden" name="url" value='kindle-vella.html'>
           <input type="hidden" name="route" value="<?= $_SERVER['REQUEST_URI'] ?>">
<input type="hidden" name="brand" value="AMAZONPUBLISHINGSPOT">
<input type="hidden" name="token" value="<?= $token; ?>">
<input type="hidden" name="tag" value="top-form">
<input type="hidden" name="price" value="null">
<input type="hidden" name="news" value="1">
           <input type="hidden" name="subject" value="Banner Form (amazonpublishingspot.com)">
           
           
           
			<div class="row clearfix">
				<div class="form-group col-lg-12 col-md-12 col-sm-12">
					<div class="field-inner">
					    <label>Your name</label>
						<input type="text" name="name" value="" placeholder="First and last name" onkeydown="return /^[A-Za-z\s]+$/.test(event.key)"  required>
					</div>
				</div>
				<div class="form-group col-lg-12 col-md-12 col-sm-12">
					<div class="field-inner">
					    <label>Email</label>
						<input type="email" name="email"  
							 required>
					</div>
				</div>
				<div class="form-group col-lg-12 col-md-12 col-sm-12">
					<div class="field-inner">
					    <label>Phone</label>
						<input type="text"  class="phoneNum" name="phone" required>
					</div>
				</div>
			
						<div class="form-group col-lg-12 col-md-12 col-sm-12">
					<div class="field-inner">
					    <label>Services</label>
					<select class="form-control"  name="service" data-name="service" id="exampleFormControlSelect1"  required>
                   <option value="">Services</option>
                  <option value="Book Writing">Book Writing </option>
                 <option value=" E-book Writing & Publishing"> E-book Writing & Publishing</option>
                  <option value="Book Editing & Proofreading">Book Editing & Proofreading</option>
                   <option value=" Book Cover Design"> Book Cover Design </option>
                    <option value="  Book Illustrations">Book Illustrations  </option>
                    <option value="  Book Publishing ">Book Publishing  </option>
                    <option value="Book Printing">Book Printing </option>
                       <option value="Book Marketing">Book Marketing</option>
                       <option value="Author Website">Author Website</option>
                        <option value=" Amazon Publishing ">Amazon Publishing </option>
                    </select>
					</div>
				</div>
				<input type="hidden" name="brief" value="No Message">
				<!--<div class="form-group col-lg-12 col-md-12 col-sm-12">-->
				<!--    <div class="field-inner">-->
				<!--     <label>Message</label>-->
				<!--    <textarea  name="brief" class="form-control"></textarea>-->
				<!--    </div>-->
				<!--</div>-->
				
			
				<div class="form-group col-lg-12 col-md-12 col-sm-12">
				    
	
					<button type="submit" class="accountbtn">Create your KDP account</button>
				</div>
				
				 <div class="col-md-12 col-xs-12">
                <div class="error mt-3 alert alert-danger text-left mb-0" style="display: none"></div>
                <div class="success mt-3 alert alert-success text-center mb-0 p-2" style="display: none"></div>
                <div class="loader" style="display: none">
                    <img alt="loader" src="images/loader.gif">
                </div>
            </div>
				<div class="form-group accountpara col-lg-12 col-md-12 col-sm-12">
					<p>By creating an account, you agree to Amazon's <a style="color:#007bff; font-weight:bold;" href="terms-and-condition/">Conditions of Use.</a> You can find the privacy notice that applies to you here.</p>
				
				</div>
			
				
			</div>
		</form>
	</div>
</div>             </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- banner-end -->

 <!-- form-sec -->
    <!-- form-sec -->

    <div class="bottomSec">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <ul class="top-slider">
                        <li>

                            <img src="images/cl-1.png" alt="">
                        </li>
                        <li>

                            <img src="images/cl-2.png" alt="">
                        </li>
                        <li>

                            <img src="images/cl-3.png" alt="">
                        </li>
                        <li>
                            <img src="images/cl-4.png" alt="">
                        </li>
                        <li>

                            <img src="images/cl-5.png" alt="">
                        </li>

                        <li>

                            <img src="images/cl-6.png" alt="">
                        </li>
                        <li>

                            <img src="images/cl-7.png" alt="">
                        </li>
                       
                        <li>
                            <img src="images/cl-9.png" alt="">
                        </li>
                        <li>

                            <img src="images/cl-10.png" alt="">
                        </li>


                    </ul>
                </div>
            </div>
        </div>
    </div>

<section class="serv-storefrnt bdr-btm-sec kindle-serv-sec">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="hd-txt">
                    <h2 class="wow fadeInUp" data-wow-duration="2s">Employ Our Amazon Kindle VELLA Team Now!</h2>
                    <p class="wow fadeInUp" data-wow-duration="3s">As the preeminent Amazon book publishing firm, Amazon Publishing Spot  provides authors with first-rate services for the Amazon Kindle Vella. We are the best Amazon Kindle Vella service provider because...</p>
                </div>
            </div>
            <div class="col-sm-12 p0 row">
                <div class="col-sm-3">
                    <div class="serv-strfrnt-box  wow fadeInUp" data-wow-duration="1s">
                        <div class="srv-strfnt-img">
                            <h4>Book Profile Creation</h4>
                        </div>
                        <p>Authors can get assistance with creating Amazon Kindle Vella book profiles from the experts we employ here at Amazon Kindle Vella Books.</p>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="serv-strfrnt-box ecom-srv-box-3  wow fadeInUp" data-wow-duration="2s">
                        <div class="srv-strfnt-img">
                            <h4>Tags Optimization</h4>
                        </div>
                        <p>We serve as a bridge between serious readers and published and aspiring writers. We offer a premium service to optimize your Amazon book tags, increasing your book's discoverability and sales.</p>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="serv-strfrnt-box  wow fadeInUp" data-wow-duration="3s">
                        <div class="srv-strfnt-img">
                            <h4>Boost Engagement</h4>
                        </div>
                        <p>We give authors a hand in expanding their Amazon followings and generating more reader interaction.</p>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="serv-strfrnt-box ecom-srv-box-3  wow fadeInUp" data-wow-duration="2s">
                        <div class="srv-strfnt-img">
                            <h4>Book Features</h4>
                        </div>
                        <p>If you want to become a top-rated author, we can help you get there. Our team specializes in online book promotion for Kindle Vella and can help you gain a global readership..</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="ecom-sec-two kindl-about-sec">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="col-sm-5">
                    <div class="services-pro-img">
                        <img class="wow zoomIn" data-wow-duration="2s" src="images/about-kindle-publishing.png"
                            style="visibility: visible; animation-duration: 2s; animation-name: zoomIn;">

                    </div>
                </div>
                <div class="col-sm-7">
                    <div class="about-who-txt">
                        <h2 class="wow fadeInRight" data-wow-duration="2s">AN INTRODUCTION TO AMAZON KINDLE VELLA</h2>
                        <p class="wow fadeInRight" data-wow-duration="3s">Kindle Vella is a service for serializing and publishing novels in parts. It's a website where novels are distributed in installments, much like a drama or TV show, to keep readers interested all the way through.<br>Experts in Amazon products work at Amazon Publishing Spot  to make sure an author's book ranks highly in Kindle Vella app book searches by applying their knowledge of the Amazon algorithm.</p>
                    </div>

                    <div class="banner-btn btn-st btn-clr-chng-st wow fadeInRight" data-wow-duration="2s">
                        <a href="javascript:;" data-toggle="modal" data-target="#exampleModal" class="get-started ">Get a Quote</a>
                        <a href="tel:(727) 513-5653 " class="call-st  w callphone">Call US - (727) 273-7217 </a>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>



<section class="amazon_market_sec">
    <div class="">
        <div class="row">
            <div class="col-sm-12">
                <div class="hd-txt">
                    <h2 class="wow fadeInUp" data-wow-delay="380ms">LEADING AMAZON BOOK MARKETING SERVICES</h2>
                    <p class="wow fadeInUp" data-wow-delay="400ms">Avail our book promotion services to obtain your business objectives.</p>
                </div>
            </div>
        </div>
        <div class="amazon_market_slider">
            <div class="amazon_market_slid"><img src="images/brand-logo-mm-img1.jpg"></div>
            <div class="amazon_market_slid"><img src="images/brand-logo-mm-img2.jpg"></div>
            <div class="amazon_market_slid"><img src="images/brand-logo-mm-img3.jpg"></div>
            <div class="amazon_market_slid"><img src="images/brand-logo-mm-img4.jpg"></div>
            <div class="amazon_market_slid"><img src="images/brand-logo-mm-img5.jpg"></div>
            <div class="amazon_market_slid"><img src="images/brand-logo-mm-img6.jpg"></div>
            <div class="amazon_market_slid"><img src="images/brand-logo-mm-img7.jpg"></div>
            <div class="amazon_market_slid"><img src="images/brand-logo-mm-img8.jpg"></div>
        </div>
    </div>
</section>
<section class="why-choose bdr-btm-sec">
    <div class="container">
        <div class="row">
            <div class="why-col-lft why-col-lft-heading">
                <h3 class="wow fadeInLeft" data-wow-delay="380ms">MUST-KNOW THINGS ABOUT</h3>
                <h2 class="wow fadeInLeft" data-wow-delay="400ms">Kindle Vella </h2>
                <p class="wow fadeInLeft" data-wow-delay="410ms">The Kindle Vella platform allows writers to release their works in installments, much like a television show. In the Kindle app, readers may access Kindle Vella stories.</p>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6">
                <div class="why-col-lft">
                    <ul>
                        <li>
                            <div class="why-li-div wow wow fadeInUp" data-wow-duration="1s">
                                <img loading="lazy" src="images/why-icon-1.png">
                                <div class="why-txt">
                                    <h5>Serialized Stories</h5>
                                    <p>A reading experience optimized for mobile devices.</p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="why-li-div wow wow fadeInUp" data-wow-duration="2s">
                                <img loading="lazy" src="images/why-icon-2.png">
                                <div class="why-txt">
                                    <h5>Thousands of Authors</h5>
                                    <p>Countless authors and countless tales.</p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="why-li-div wow wow fadeInUp" data-wow-duration="2s">
                                <img loading="lazy" src="images/why-icon-3.png">
                                <div class="why-txt">
                                    <h5>Earn Royalties</h5>
                                    <p>When readers purchase tokens, the author receives half of the profits.</p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="why-li-div wow wow fadeInUp" data-wow-duration="3s">
                                <img loading="lazy" src="images/why-icon-4.png">
                                <div class="why-txt">
                                    <h5>Free Few Episodes</h5>
                                    <p>Get people to fall in love with your narrative in the first few free chapters.</p>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="why-col-rgt">
                    <ul>
                        <li>
                            <div class="why-li-div wow wow fadeInUp" data-wow-duration="1s">
                                <img loading="lazy" src="images/why-icon-5.png">
                                <div class="why-txt">
                                    <h5>Dozens of Genres</h5>
                                    <p>Massive anthology of tales, including dozens of genres and subgenres.</p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="why-li-div wow wow fadeInUp" data-wow-duration="2s">
                                <img loading="lazy" src="images/why-icon-6.png">
                                <div class="why-txt">
                                    <h5>Tokens Purchase</h5>
                                    <p>Tokens must be purchased in order for readers to access episodes.</p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="why-li-div wow wow fadeInUp" data-wow-duration="2s">
                                <img loading="lazy" src="images/why-icon-7.png">
                                <div class="why-txt">
                                    <h5>Connect with Readers</h5>
                                    <p>Author Notes are a great way for writers to have a direct conversation with their audience.</p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="why-li-div wow wow fadeInUp" data-wow-duration="3s">
                                <img loading="lazy" src="images/why-icon-8.png">
                                <div class="why-txt">
                                    <h5>Readers' Engagement</h5>
                                    <p>Readers can react to the stories by using thumbs up to our faves.</p>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-sm-12">
                <div class="why-rgt-inner-div wow zoomIn" data-wow-duration="4s">
                    <div class="why-in-txt wow zoomIn" data-wow-duration="4s">
                        <h4><span>WANT TO LEARN MORE </span><br>ABOUT KINDLE VELLA?</h4>
                        <p>Get in touch with our consultant(s) today!</p>
                    </div>
                    <div class="why-call-div-st">
                        <div class="call-why-div wow zoomIn" data-wow-duration="4s">
                            <a href="tel:(727) 513-5653 " class="callphone">
                                <div class="why-img why-1">
                                    <i class="fa fa-phone" aria-hidden="true"></i>
                                </div>
                                <p>Call now</p>
                                (727) 273-7217 
                            </a>
                        </div>
                        <div class="call-why-div wow zoomIn" data-wow-duration="5s">
                            <a href="javascript:;" onclick="LiveChatWidget.call('maximize');return false;">
                                <div class="why-img why-2">
                                    <img loading="lazy" src="images/message-img.png">
                                </div>
                                <p class="live-height">Live Chat</p>
                            </a>
                            <a href="tel:(727) 513-5653 " class="callphone"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="serv-storefrnt bdr-btm-sec">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="hd-txt">
                    <h2 class="wow fadeInUp" data-wow-duration="2s">WHY JOIN US IN BUSINESS?</h2>
                    <p class="wow fadeInUp" data-wow-duration="3s">Get your work seen all over the world by using our Kindle Vella services.</p>
                </div>
            </div>
            <div class="col-sm-12 p0 row">
                <div class="col-sm-4">
                    <div class="serv-strfrnt-box  wow fadeInUp" data-wow-duration="1s">
                        <div class="srv-strfnt-img">
                            <div class="ecom-cir">
                                <img src="images/ecom-stre-mentor-icon1.png">
                            </div>
                            <h4>Transparent Methodology</h4>
                        </div>
                        <p>Our procedures are open-book, and at no point in time are our clients left in the dark as to the whereabouts of their projects.</p>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="serv-strfrnt-box ecom-srv-box-3  wow fadeInUp" data-wow-duration="2s">
                        <div class="srv-strfnt-img">
                            <div class="ecom-cir">
                                <img src="images/ecom-stre-mentor-icon2.png">
                            </div>
                            <h4>Continuous Monitoring</h4>
                        </div>
                        <p>To maintain tabs on how well your episodes are doing on Kindle Vella, we keep an eagle's eye on the metrics.</p>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="serv-strfrnt-box  wow fadeInUp" data-wow-duration="3s">
                        <div class="srv-strfnt-img">
                            <div class="ecom-cir">
                                <img src="images/ecom-stre-mentor-icon3.png">
                            </div>
                            <h4>Rapid Response</h4>
                        </div>
                        <p>When you commend us with a project, we immediately assign a group of experts to it.</p>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="serv-strfrnt-box  wow fadeInUp" data-wow-duration="2s">
                        <div class="srv-strfnt-img">
                            <div class="ecom-cir">
                                <img src="images/ecom-stre-mentor-icon4.png">
                            </div>
                            <h4>Accomplished Experts</h4>
                        </div>
                        <p>We have a team of experts who are familiar with the site's policies and procedures.</p>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="serv-strfrnt-box  ecom-srv-box-3 wow fadeInUp" data-wow-duration="3s">
                        <div class="srv-strfnt-img">
                            <div class="ecom-cir">
                                <img src="images/ecom-stre-mentor-icon6.png">
                            </div>
                            <h4>Budget-Friendly</h4>
                        </div>
                        <p>Every author can afford our Kindle Vella publishing service because of its economical price.</p>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="serv-strfrnt-box  wow fadeInUp" data-wow-duration="4s">
                        <div class="srv-strfnt-img">
                            <div class="ecom-cir">
                                <img src="images/ecom-stre-mentor-icon5.png">
                            </div>
                            <h4>Guaranteed Satisfaction </h4>
                        </div>
                        <p>We place the best on the happiness of our clientele. We give them the greatest service possible to make sure they're happy with everything.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="serv-buss-sol">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="hd-txt">
                    <h2 class="wow fadeInUp" data-wow-duration="2s">FAVORITE KINDLE VELLA BOOKS</h2>
                    <p class="wow fadeInUp" data-wow-duration="3s">Read some of the best Kindle Vella stories now.</p>
                </div>
            </div>
            <div class="col-sm-12">
                <div class="business-sol-slider">
                    <div class="buss-slider-for">
                        <div>
                            <div class="busines-sol-img">
                                <img class=" wow zoomIn" data-wow-duration="2s" src="images/business-solution-1.png">
                            </div>
                        </div>
                        <div>
                            <div class="busines-sol-img">
                                <img src="images/business-solution-1.png">
                            </div>
                        </div>
                        <div>
                            <div class="busines-sol-img">
                                <img src="images/business-solution-1.png">
                            </div>
                        </div>
                        <div>
                            <div class="busines-sol-img">
                                <img src="images/business-solution-1.png">
                            </div>
                        </div>
                        <div>
                            <div class="busines-sol-img">
                                <img src="images/business-solution-1.png">
                            </div>
                        </div>
                    </div>
                    <div class="buss-slider-nav">
                        <div>
                            <div class="business-sol-txt">
                                <img class=" wow zoomIn" data-wow-duration="2s"
                                    src="images/business-solution-logo-1.png">
                                <p class=" wow fadeInUp" data-wow-duration="2s">Amazon Publishing Spot  helped Zalando build
                                    their fashion store on Amazon. The storefront was customized as per the client's
                                    liking, and the store helped them boost online sales. </p>
                                <div class="banner-btn btn-st  wow fadeInUp" data-wow-duration="3s">
                                    <a href="javascript:;" data-toggle="modal" data-target="#exampleModal" class="get-started   wow fadeInUp" data-wow-duration="2s">Get
                                        a Quote</a>
                                    <a href="tel:(727) 513-5653 " class="call-st  wow fadeInUp callphone"
                                        data-wow-duration="2s">Call US - (727) 273-7217 </a>

                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="business-sol-txt">
                                <img src="images/business-solution-logo-1.png">
                                <p>After listening to the unique requirements of Zalando Amazon Publishing Spot  built an Amazon
                                    store for them with optimized listings to help their business generate more sales
                                    and revenue. </p>
                                <div class="banner-btn btn-st wow fadeInUp" data-wow-delay="400ms">
                                    <a href="javascript:;" data-toggle="modal" data-target="#exampleModal" class="get-started ">Get a Quote</a>
                                    <a href="tel:(727) 513-5653 " class="call-st callphone">Call US - (727) 273-7217 </a>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="custom-cta">
    <div class="container">
        <div class="row">
            <div class="col-md-5">
                <div class="custom-cta-text">
                    <h2> “Content Strategizing is an excellent chance for sellers to market their product benefits. “
                    </h2>
                    <h3>Andrew Hill</h3>
                    <h4>VP OF MARKETING</h4>
                </div>
            </div>
            <div class="col-md-6 col-md-offset-1">
                <div class="custom-cta-img">
                    <img src="images/custom-cta-img1.png">
                    <img src="images/custom-cta-img2.png">
                    <img src="images/custom-cta-img3.png">
                </div>
                <div class="custom-cta-img">
                    <img src="images/custom-cta-img4.png">
                    <img src="images/custom-cta-img5.png">
                    <img src="images/custom-cta-img6.png">
                </div>
                <div class="cta-main-btn wow fadeInUp" data-wow-duration="4s"
                    style="visibility: visible; animation-duration: 4s; animation-name: fadeInUp;">
                    <a href="javascript:;" data-toggle="modal" data-target="#exampleModal" class="get-started get-started-cta ">Get A Quote</a>
                    <a href="tel:(727) 513-5653 " class="call-st-cta callphone">Call US - (727) 273-7217 </a>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="amazon_consultancy-sec">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="hd-txt">
                    <h2 class="wow fadeInUp" data-wow-delay="380ms">KINDLE VELLA: WHY GO WITH IT?</h2>
                    <p class="wow fadeInUp" data-wow-delay="400ms">The new Kindle Vella has several great new features that make writing easier and keep readers interested in the stories.</p>
                </div>
            </div>
        </div>
        <div class="consultancy_slider">
            <div class="consultancy_slid consultancy_slid_1">
                <div class="consultancy_slider_img">
                    <img src="images/consultancy-slide-img1.png">
                </div>
                <div class="consultancy_slid_box">
                    <h3>Brilliant Reader Experience</h3>
                    <p>Readers can find and examine the details page for a narrative and download the first few episodes for free.</p>
                </div>
            </div>
            <div class="consultancy_slid consultancy_slid_2">
                <div class="consultancy_slider_img">
                    <img src="images/consultancy-slide-img2.png">
                </div>
                <div class="consultancy_slid_box">
                    <h3>Interact with Authors</h3>
                    <p>Author Notes are a great way for writers to have a direct conversation with their audience.</p>
                </div>
            </div>
            <div class="consultancy_slid consultancy_slid_3">
                <div class="consultancy_slider_img">
                    <img src="images/consultancy-slide-img3.png">
                </div>
                <div class="consultancy_slid_box">
                    <h3>Readers' Engagement</h3>
                    <p>The readers can rate a story by giving a thumbs up to our favorites.</p>
                </div>
            </div>
            <div class="consultancy_slid consultancy_slid_4">
                <div class="consultancy_slider_img">
                    <img src="images/consultancy-slide-img4.png">
                </div>
                <div class="consultancy_slid_box">
                    <h3>Start a Story</h3>
                    <p>Authors can begin a story and then add a few episodes to set the plot on the path to success. They have the option to amend or remove their stories anytime.</p>
                </div>
            </div>
            <div class="consultancy_slid consultancy_slid_1">
                <div class="consultancy_slider_img">
                    <img src="images/consultancy-slide-img1.png">
                </div>
                <div class="consultancy_slid_box">
                    <h3>Publishing Episodes</h3>
                    <p>By releasing one story at a time, authors may share their stories with the world. They have the ability to publish, update, delete, add a preview, poll, and update status.</p>
                </div>
            </div>
            <div class="consultancy_slid consultancy_slid_2">
                <div class="consultancy_slider_img">
                    <img src="images/consultancy-slide-img2.png">
                </div>
                <div class="consultancy_slid_box">
                    <h3>Proper Content Guidelines</h3>
                    <p>The platform gives defined criteria for Kindle Vella content. It contains the episode content, tags, and author notes.</p>
                </div>
            </div>
            <div class="consultancy_slid consultancy_slid_3">
                <div class="consultancy_slider_img">
                    <img src="images/consultancy-slide-img4.png">
                </div>
                <div class="consultancy_slid_box">
                    <h3>Earn Money</h3>
                    <p>When readers purchase tokens, the author receives half of the profits, making it a profitable business for them.</p>
                </div>
            </div>
        </div>
    </div>
</section>


<!--<section style="margin-top:50px;" id="cta-sec">-->

<!--    <div class="container">-->

<!--        <div class="row">-->

<!--            <div class="col-md-12 cta-box">-->

<!--                <div class="cta-txt">-->

<!--                    <h2>Let us take your book to the next level</h2>-->

<!--                    <p>We help bring your ideas to life in the form of a sedulously written and published book</p>-->

<!--                </div>-->

<!--                <div class="cta-btn">-->

<!--                  <a href="tel:+(727) 513-5653 " class="cta-btn-1" >Call Us (727) 273-7217 </a>-->

<!--                    <a href="javascript:;" onclick="LiveChatWidget.call('maximize');return false;" class="cta-btn-2 liveChat" >Live Chat</a>-->

<!--                    <a href="contact-us.php" class="cta-btn-3 order_button2">Get A Quote</a>-->

<!--                </div>-->

<!--            </div>-->

<!--        </div>-->

<!--    </div>-->



<!--</section> -->
    <!-- cta-1 -->







          <section id="contact-sec">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="sample-txt contact-txt-sec">
                            <h2>Send Us a Message</h2>
                            <p>Please fill out your details, and our team will contact you soon.</p>
                        </div>
                        <div class="contact-box col-md-8">
                            <form class="cmxform form-get-quote form_submission"  method="POST" action="/leads/">
                                <input type="hidden" name="url" value='kindle-vella.html'>
           <input type="hidden" name="route" value="<?= $_SERVER['REQUEST_URI'] ?>">
<input type="hidden" name="brand" value="AMAZONPUBLISHINGSPOT">
<input type="hidden" name="token" value="<?= $token; ?>">
<input type="hidden" name="tag" value="top-form">
<input type="hidden" name="price" value="null">
<input type="hidden" name="news" value="1">
           <input type="hidden" name="subject" value="Banner Form (amazonpublishingspot.com)">
           
                                <div class="col-md-12 c-b-div contactbox p0">
                                    <div class="col-md-6">
                                        <div class="clearfix"></div>
                                        <div class="col-md-12 p0">
                                            <input name="name" class="form-control" type="text" placeholder="Name" onkeydown="return /[a-z]/i.test(event.key)" required="">
                                        </div>
                                        <div class="clearfix"></div>
                                        <div class="col-md-12 p0">
                                            <input name="email" class="form-control" type="email" placeholder="Email" required="">
                                        </div>
                                        <div class="clearfix"></div>
                                        <div class="col-md-12 p0">
                                            <select class="classic" name="service" data-name="service">
                                                <optgroup label="&nbsp; Select Services">
                                                    <option value="Book Writing " data-amt="16" data-deadline="1">Book Writing </option>
                                                    <option value="Book Marketing " data-amt="16" data-deadline="1">Book Marketing</option>
                                                    <option value="Book Cover Design" data-amt="50" data-deadline="1">Book Cover Design</option>
                                                    <option value="Book Proof Reading & Editing" data-amt="50" data-deadline="1">Book Proof Reading & Editing</option>
                                                    <option value="Book Publishing" data-amt="50" data-deadline="1">Book Publishing</option>
                                                    <option value="E-Book Writing & Publishing" data-amt="50" data-deadline="1">E-Book Writing & Publishing</option>
                                                </optgroup>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="clearfix"></div>
                                    <div class="col-md-6">
                                        <div class="col-md-12 p0">
                                            <input name="phone" class="form-control phoneNum" type="text" placeholder="Phone Number" required="">
                                        </div>
                                        <div class="col-md-12 p0">
                                            <textarea class="form-control" name="brief" id="exampleFormControlTextarea1" rows="3" placeholder="Message"></textarea>
                                        </div>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="col-md-12" style="margin-top: 25px;">
                                    <input type="submit" name="submit" class="btn form-btn" value="Submit">
                                </div>
                                	 <div class="col-md-12 col-xs-12">
                <div class="error mt-3 alert alert-danger text-left mb-0" style="display: none"></div>
                <div class="success mt-3 alert alert-success text-center mb-0 p-2" style="display: none"></div>
                <div class="loader" style="display: none">
                    <img alt="loader" src="images/loader.gif">
                </div>
            </div>
                                <!--<input type="text" name="quote[ip]" hidden value="119.73.97.7">-->
                            </form>
                        </div>
                        <div class="col-md-8 cta-b-div p0">
                            <div class="con-cta-btn-div">
                                <div class="col-lg p0 col-b-1">
                                    <p>Discuss Your Project</p>
                                    <a href="javascript:;" onclick="LiveChatWidget.call('maximize');return false;" class="con-cta-btn ct-b1 liveChat">Live Chat</a>
                                </div>
                                <div class="col-lg col-b-2">
                                    <p>Make a Call</p>
                                    <a href="tel:+7272737217" class="con-cta-btn ct-b2"> (727) 273-7217</a>
                                </div>
                                <div class="col-lg p0 col-b-3">
                                    <p>Send us Email</p>
                                    <a href="mailto:info@amazonpublishingspot.com" class="con-cta-btn ct-b3">info@amazonpublishingspot.com</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        </div>         <!--main-footer -->
        <section id="m-footer">
            <div class="container">
                <div class="row justify-content-md-center">
                    <div class="col-md-4 p0">
                        <div class="abt-txts" style="padding-right: 127px;">
                            <h5>About Us</h5>
                            <p> We produce books that influence the literary sphere and enhance your worth as an author. We collaborate with you to produce the best possible results that align with your goals, engage your audience and create a buzz around your book. </p>
                        </div>
                    </div>
                    <div class="col-md-4 p0">
                        <div class="soc-txt txt-div">
                            <h5>Services</h5>
                            <ul style="list-style:none;">
                                <li>
                                    <i class="fa fa-caret-right" aria-hidden="true"></i>
                                    <a href="book-writing/">Book Writing Services</a>
                                </li>
                                <li>
                                    <i class="fa fa-caret-right" aria-hidden="true"></i>
                                    <a href="ebook-writing/">E-book Writing & Publishing</a>
                                </li>
                                <li>
                                    <i class="fa fa-caret-right" aria-hidden="true"></i>
                                    <a href="book-cover-design/">Book Cover Design</a>
                                </li>
                                <li>
                                    <i class="fa fa-caret-right" aria-hidden="true"></i>
                                    <a href="proofreading/">Book Proofreading & Editing</a>
                                </li>
                                <li>
                                    <i class="fa fa-caret-right" aria-hidden="true"></i>
                                    <a href="book-publishing/">Book Publishing Services</a>
                                </li>
                                <li>
                                    <i class="fa fa-caret-right" aria-hidden="true"></i>
                                    <a href="book-marketing/">Book Marketing</a>
                                </li>
                                <li>
                                    <i class="fa fa-caret-right" aria-hidden="true"></i>
                                    <a href="amazon-publishing/">Amazon Publishing </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-4 p0">
                        <div class="soc-txt txt-div">
                            <h5>Company</h5>
                            <ul>
                                <li>
                                    <i class="fa fa-caret-right" aria-hidden="true"></i>
                                    <a href="testimonials/">Testimonials</a>
                                </li>
                                <li>
                                    <i class="fa fa-caret-right" aria-hidden="true"></i>
                                    <a href="about-us/">About Us</a>
                                </li>
                                <li>
                                    <i class="fa fa-caret-right" aria-hidden="true"></i>
                                    <a href="portfolio/">Portfolio</a>
                                </li>
                                <li>
                                    <i class="fa fa-caret-right" aria-hidden="true"></i>
                                    <a href="contact-us/" data-toggle="modal" data-target="#exampleModal">Contact Us</a>
                                </li>
                            </ul>
                            <!-- <p>
                                <span class="fa fa-map-marker" style="padding: 5px;"></span>One Pierrepont Plaza Brooklyn, NY 11201, US                            </p> -->
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--main-footer -->
        <section id="top-move">
            <div class="container-fluid">
                <a href="#" id="button" class="back-to-top">
                    <div class="top-icon">
                        <img src="images/up-arrow.png">
                        <p>Top</p>
                    </div>
                </a>
            </div>
        </section>
        <!-- secnd-footr -->
        <section id="scnd-ftr" style="background:#020101de;">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <div class="copy-txt">
                            <p style="font-size:12px; color:#fff;">Copyright © 2024 Amazon Publishing Spot  . All Rights Reserved. </p>
                        </div>
                    </div>
                    <div class="col-md-4"></div>
                    <div class="col-md-4"></div>
                </div>
            </div>
        </section>
        <section id="popupformLead" class="popup-form">
            <a href="javascript:;" title="" class="close"></a>
            <div class="formcontainer">
                <div class="banner-r">
                    <div class="banner-inner-tl">
                        <h4>ORDER NOW!</h4>
                        <p>To Avail this Coupon on All Custom Writing Services</p>
                    </div>
                    <div class="banner-inner-tr">
                        <img src="images/50-off.png">
                    </div>
                    <form  class="form_submission form-get-quote" method="POST" action="/leads/">
                        <input type="hidden" name="url" value='kindle-vella.html'>
           <input type="hidden" name="route" value="<?= $_SERVER['REQUEST_URI'] ?>">
<input type="hidden" name="brand" value="AMAZONPUBLISHINGSPOT">
<input type="hidden" name="token" value="<?= $token; ?>">
<input type="hidden" name="tag" value="top-form">
<input type="hidden" name="price" value="null">
<input type="hidden" name="news" value="1">
           <input type="hidden" name="subject" value="Banner Form (amazonpublishingspot.com)">
           <input type="hidden" name="brief">
           
                        <div class="form-div">
                            <div class="clearfix"></div>
                            <div class="col-lg">
                                <input name="name" id="cn" class="form-control" type="text" placeholder="Enter Your Name" onkeydown="return /[a-z]/i.test(event.key)" required="">
                            </div>
                            <div class="clearfix"></div>
                            <div class="col-lg">
                                <input name="email" class="form-control" type="email" placeholder="Enter Your Email Address" required="">
                            </div>
                            <div class="clearfix"></div>
                            <div class="col-lg">
                                <input name="phone" class="form-control phoneNum" type="text" placeholder="Enter Phone Number" required="">
                            </div>
                            <div class="clearfix"></div>
                            <div class="col-lg">
                                <select name="service" data-name="service" class="classic form-control">
                                    <optgroup label="&nbsp; Select A Service">
                                        <option value="Select A Service"></option>
                                        <option value="Book Writing " data-amt="16" data-deadline="1">Book Writing </option>
                                        <option value="Book Marketing " data-amt="16" data-deadline="1">Book Marketing</option>
                                        <option value="Book Cover Design" data-amt="50" data-deadline="1">Book Cover Design </option>
                                        <option value="Book Proof Reading & Editing" data-amt="50" data-deadline="1">Book Proof Reading & Editing</option>
                                        <option value="Book Publishing" data-amt="50" data-deadline="1">Book Publishing</option>
                                        <option value="E-Book Writing & Publishing" data-amt="50" data-deadline="1">E-Book Writing & Publishing</option>
                                    </optgroup>
                                </select>
                            </div>
                            <div class="col-lg agree-two">
                                <input name="quote[check]" type="checkbox" id="test2">
                                <label for="test2">I Agree to <a href="terms-and-condition-2/">Terms of Use</a> and the <a href="privacy-policy/">Privacy Policy.</a>
                                </label>
                            </div>
                            <div class="col-lg bnr-form-btn">
                              
                                <span class="form-extra-data"></span>
                                <input type="submit" class="btn form-btn" value="Submit">
                                <p>This Offer is Valid For <strong>Only This Week.</strong>
                                </p>
                            </div>
                            
                            	 <div class="col-md-12 col-xs-12">
                <div class="error mt-3 alert alert-danger text-left mb-0" style="display: none"></div>
                <div class="success mt-3 alert alert-success text-center mb-0 p-2" style="display: none"></div>
                <div class="loader" style="display: none">
                    <img alt="loader" src="images/loader.gif">
                </div>
            </div>
                        </div>
                        <!--<input type="text" name="quote[ip]" hidden value="119.73.97.7">-->
                    </form>
                </div>
            </div>
            <div class="customalert" style="background: rgb(255, 255, 255); color: red; text-align: center; font-size: 16px; width: 100%; margin: 10px 0px 0px; padding: 10px; float: left; display: none"></div>
        </section>
        <div class="floatbutton">
            <div class="btns_wrap">
                <a href="javascript:void(Tawk_API.toggle())" class="chat_wrap liveChat">
                    <span class="icoo">
                        <i class="fa fa-comment"></i>
                    </span>
                    <span>Chat With Us</span>
                </a>
                <a href="tel:+7272737217" class="call_wrap">
                    <span class="icoo">
                        <i class="fa fa-phone"></i>
                    </span>
                    <span> (727) 273-7217</span>
                </a>
            </div>
            <div class="clickbutton">
                <div class="crossplus">
                    <a href="javascript:;" onclick="LiveChatWidget.call('maximize');return false;" class="text-white"> Start A Live Chat</a>
                </div>
            </div>
        </div>
        <div class="cus-overlay"></div>
        </div>
        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog " style="max-width: 500px;" role="document">
                <div class="modal-content">
                    <div class="modal-header border-0 pb-0">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body text-center  pt-0 pb-4 pr-4 pl-4">
                        <h4 class="mb-2">Activate this offer to avail Exclusive Discounts</h4>
                        <h3 class="mb-4 font-large" style="font-size: 28px;">LAST 3 COUPONS LEFT</h3>
                        <form  method="POST" action="/leads/" class="form_submission form-get-quote">
                            <input type="hidden" name="url" value='kindle-vella.html'>
           <input type="hidden" name="route" value="<?= $_SERVER['REQUEST_URI'] ?>">
<input type="hidden" name="brand" value="AMAZONPUBLISHINGSPOT">
<input type="hidden" name="token" value="<?= $token; ?>">
<input type="hidden" name="tag" value="top-form">
<input type="hidden" name="price" value="null">
<input type="hidden" name="news" value="1">
           <input type="hidden" name="subject" value="Banner Form (amazonpublishingspot.com)">
           
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <input required type="text" name="name" class="form-control" placeholder="Full Name" onkeydown="return /[a-z]/i.test(event.key)" required="">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <input required type="email" name="email" class="form-control" placeholder="Email" required="">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <input required type="text" class="phoneNum" name="phone" class="form-control" placeholder="Phone" required="">
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <textarea required placeholder="Brief" name="brief" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <button type="submit" class="btn btn-primary w-100">Submit</button>
                                </div>
                                
                                	 <div class="col-md-12 col-xs-12">
                <div class="error mt-3 alert alert-danger text-left mb-0" style="display: none"></div>
                <div class="success mt-3 alert alert-success text-center mb-0 p-2" style="display: none"></div>
                <div class="loader" style="display: none">
                    <img alt="loader" src="images/loader.gif">
                </div>
            </div>
                            </div>
                            <!--<input type="text" name="quote[ip]" hidden value="119.73.97.7">-->
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <script src="js/mlib.js"></script>
        <script src="js/functions.js"></script>
        <script src="../s3-us-west-2.amazonaws.com/s.cdpn.io/3/jquery.inputmask.bundle.js"></script>
        <script src="js/custom.js"></script>
         
        <!-- Start of Zendesk Widget script -->
        
        <!-- End of Zendesk Widget script -->
        <script>
            jQuery(".top-slider").slick({
                dots: !1,
                arrows: !1,
                speed: 1e3,
                slidesToShow: 5,
                autoplay: !0,
                autoplaySpeed: 1e3,
                adaptiveHeight: !0,
                responsive: [{
                    breakpoint: 767,
                    settings: {
                        dots: !1,
                        arrows: !1,
                        slidesToShow: 1,
                        slidesToScroll: 1
                    }
                }],
            })
        </script>
        <script>
            //   setTimeout(function() {
            //      $('head').append(
            //      );
            //      $(document).on('click', '.liveChat', function() {
            //       
            //      });
            //      $('.liveChat').click(function() {
            //       
            //  })
            //   }, 5000);
            //   setTimeout(() => {
            //     $('#exampleModal').modal('show')
            //   }, 15000)
            // 
        </script>
        <script>
            //   function setButtonURL() {
            //     
            //   }
            // 
        </script>
        <script>
            //   $( document ).ready(function() {
            //     document.title = window.location.href;
            // });
        </script>
        <script>
            $(".phoneNum").inputmask({
                "mask": "(999) 999-9999"
            });
        </script>
        <script type="text/javascript">
            window.setTimeout(function() {
                
                
                
                //You can add more APIs on this line
            }, 2000);
            // slick slider
            $('.buss-slider-for').slick({
                slidesToShow: 1,
                slidesToScroll: 1,
                arrows: false,
                fade: true,
                asNavFor: '.buss-slider-nav'
            });
            $('.buss-slider-nav').slick({
                slidesToShow: 1,
                slidesToScroll: 1,
                asNavFor: '.buss-slider-for',
                dots: false
            });
            $('.amazon_market_slider').slick({
                dots: false,
                autoplay: true,
                infinite: true,
                autoplaySpeed: 0,
                speed: 20000,
                autoplay: true,
                cssEase: 'linear',
                arrows: false,
                slidesToShow: 7,
                slidesToScroll: 1,
                responsive: [{
                        breakpoint: 1024,
                        settings: {
                            slidesToShow: 3,
                            slidesToScroll: 3,
                            infinite: true,
                            arrows: false,
                            dots: false,
                        }
                    }, {
                        breakpoint: 600,
                        settings: {
                            slidesToShow: 2,
                            slidesToScroll: 2
                        }
                    }, {
                        breakpoint: 480,
                        settings: {
                            slidesToShow: 2,
                            slidesToScroll: 1
                        }
                    }
                    // You can unslick at a given breakpoint now by adding:
                    // settings: "unslick"
                    // instead of a settings object
                ]
            });
            $('.consultancy_slider').slick({
                dots: true,
                autoplay: true,
                infinite: true,
                autoplaySpeed: 2000,
                speed: 3000,
                autoplay: true,
                cssEase: 'linear',
                arrows: false,
                slidesToShow: 3,
                slidesToScroll: 1,
                responsive: [{
                        breakpoint: 1024,
                        settings: {
                            slidesToShow: 3,
                            slidesToScroll: 3,
                            infinite: true,
                            arrows: false,
                            dots: false,
                        }
                    }, {
                        breakpoint: 600,
                        settings: {
                            slidesToShow: 1,
                            slidesToScroll: 2
                        }
                    }, {
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
        </script>
    </body>


</html>