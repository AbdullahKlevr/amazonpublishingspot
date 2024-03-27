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
      <section id="banner" class="banneroad01 bpss">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="row align-items-center">
                        <div class="col-md-6">
                            <div class="bnr-txt btn-tx-cp">
                                <h4>Publication of Your Stories Globally</h4>
                                <h2>Introduce Your Book to the World Using Our Premier Book Publishing Service</h2>
                                <p>Your masterpiece is now available for everyone to read. However, you have no idea how to publish it. We have you covered. Amazon Publishing Spot  helps your work reach its intended audience with utmost passion and dedication. Our team of professionals and experts can help you publish the book quickly and easily.</p>

                            </div>
                            <div class="cta-btn btnres">

                                <a href="#" data-toggle="modal" data-target="#exampleModal" class="btn btnres1 pub2">Get
                                    A Quote</a>

                                <a href="javascript:void(Tawk_API.toggle())"  class="btn btnres2 pub">Get Started</a>


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
		     <input type="hidden" name="url" value='book-publishing.html'>
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
</div>  
                     </div>
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
    <!-- form-sec -->
    <!-- form-sec -->

    <!-- form-sec -->
    <!-- form-sec -->

    <!-- landing-page-inner -->
    <section id="lp-writing">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h2>The easiest and quickest publishing process</h2>
                    <br>
                    <div class="inner-txt-p">
                        <p>At Amazon Publishing Spot , we utilize seasoned book publishers who have distinguished themselves in every field of book writing or publishing. Regardless of the genre or format, we have mastered each. Our procedure is organized, legal, and efficient. We have effectively transformed hundreds of aspiring writers from around the globe into published authors with award-winning credentials thanks to the excellence and expertise of our team.</p>
                    </div>
                    <br>
                    <div class="cta-btn">

                        <a href="#" data-toggle="modal" data-target="#exampleModal" class="btn">Get A Quote</a>

                        <a href="javascript:void(Tawk_API.toggle())"  class="btn liveChat">Live Chat</a>


                    </div>


                </div>
                <div class=" col-md-6 inner-tx-p">
                    <div class="inner-img-lp">
                        <img class="img-sec5 " src="images/bookps.png">
                    </div>
                </div>
            </div>
        </div>
        </div>

    </section>
    <section id="writing-ser">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="write-txt">
                        <h2>Our Effortless Approach</h2>

                    </div>
                </div>
                <div class="col-md-12 write-main-div">
                    <div class="col-md-6 col-lg-3 ser-img-box">
                        <div class="ser-box ser1">
                            <div class="img-box img-ser1"></div>
                            <div class="ser-box-txt">
                                <h3>Widespread Publishing Expertise</h3>
                                <p class="list-scroll">With Amazon Publishing Spot , nothing is impossible. Our publishing team is familiar with your industry's standards. Regardless of the genre to which your book pertains, we publish it according to the high standards of your genre.</p>

                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3 ser-img-box">
                        <div class="ser-box ser4">
                            <div class="img-box img-ser2"></div>
                            <div class="ser-box-txt">
                                <h3>Personalized Service</h3>
                                <p class="list-scroll">Based on your specific needs and genre, our team of publishing professionals devises a foolproof strategy. We listen attentively to your instructions, design a plan, and meet the KPIs within the promised timeframe.</p>

                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3 ser-img-box">
                        <div class="ser-box ser2">
                            <div class="img-box img-ser3"></div>
                            <div class="ser-box-txt">
                                <h3>Client Satisfaction</h3>
                                <p class="list-scroll">No two clients or initiatives are alike for us. We provide a customized service, and as a result, we place a premium on effective client communication to guide you through each stage of the procedure. We uphold our word and guarantee complete client satisfaction.</p>

                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </section>
    <!-- landing-page-inner -->
    <!-- cta-1 -->


    <section id="cta-sec">

        <div class="container">

            <div class="row">

                <div class="col-md-12 cta-box">

                    <div class="cta-txt">

                        <h2>Want To Speak To A Professional About Publishing A Book?</h2>

                        <p>We Take Pride In The Quality Of Service That We Offer And Make Sure To Gain Your Trust For A
                            Lifetime.</p>

                    </div>

                    <div class="cta-btn">

                      <a href="tel:+(727) 513-5653 " class="cta-btn-1" >Call Us (727) 273-7217 </a>

                        <a href="javascript:;" onclick="LiveChatWidget.call('maximize');return false;" class="cta-btn-2 liveChat">Live Chat</a>

                        <a href="javascript:;" data-toggle="modal" data-target="#exampleModal" class="cta-btn-3 order_button2">Get
                            A Quote</a>

                    </div>

                </div>

            </div>

        </div>



    </section>

    <!-- cta-1 -->


    <!-- samples -->
    <!-- samples -->
   <section id="sample">
    <div class="container">
        <div class="row">
            <div class="container">
                <div class="col-md-12">
                    <div class="sample-txt">
                        <h2><b>Our Recent Portfolio</b></h2>
                        <p>Our work speaks for itself. We believe in offering the best value and most personalised service to you.</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- portfolio -->
        <div class="sample-tab">
            <div align="center">
               
            </div>
            <br>

                <div id="tab1" class="tab-pane active show">
                   <div class="book-covers">
                    
                        
                        
                        <div class="body-content">
                            <div class="cover">
                                <img class="" src="images/new-port/01.jpg" >
                            </div>
                        </div>
                        
                        <div class="body-content">
                            <div class="cover">
                                <img class="" src="images/new-port/02.jpg" >
                                <div class="badge rounded bg-body color-blue"></div>
                            </div>
                        </div>
                        
                        <div class="body-content">
                            <div class="cover">
                                <img class="" src="images/new-port/03.jpg" >
                                <div class="badge rounded bg-body color-blue"></div>
                            </div>
                        </div>
                        
                        <div class="body-content">
                            <div class="cover">
                                <img class="" src="images/new-port/04.jpg" >
                            </div>
                        </div>
                        <div class="body-content">
                            <div class="cover">
                                <img class="" src="images/new-port/05.jpg" >
                            </div>
                        </div>
                        <div class="body-content">
                            <div class="cover">
                                <img class="" src="images/new-port/06.jpg" >
                            </div>
                        </div>
                        <div class="body-content">
                            <div class="cover">
                                <img class="" src="images/new-port/07.jpg" >
                            </div>
                        </div>
                        <div class="body-content">
                            <div class="cover">
                                <img class="" src="images/new-port/08.jpg" >
                            </div>
                        </div>
                        <div class="body-content">
                            <div class="cover">
                                <img class="" src="images/new-port/09.jpg" >
                            </div>
                        </div>
                        <div class="body-content">
                            <div class="cover">
                                <img class="" src="images/new-port/10.jpg" >
                            </div>
                        </div>

                        <div class="body-content">
                            <div class="cover">
                                <img class="" src="images/new-port/11.jpg" >
                            </div>
                        </div>
                        <div class="body-content">
                            <div class="cover">
                                <img class="" src="images/new-port/12.jpg" >
                            </div>
                        </div>
                        <div class="body-content">
                            <div class="cover">
                                <img class="" src="images/new-port/13.jpg" >
                            </div>
                        </div>
                        <div class="body-content">
                            <div class="cover">
                                <img class="" src="images/new-port/14.jpg" >
                            </div>
                        </div>
                        <div class="body-content">
                            <div class="cover">
                                <img class="" src="images/new-port/15.jpg" >
                            </div>
                        </div>
                        <div class="body-content">
                            <div class="cover">
                                <img class="" src="images/new-port/16.jpg" >
                            </div>
                        </div>
                        <div class="body-content">
                            <div class="cover">
                                <img class="" src="images/new-port/17.jpg" >
                            </div>
                        </div>
                        <div class="body-content">
                            <div class="cover">
                                <img class="" src="images/new-port/18.jpg" >
                            </div>
                        </div>
                        <div class="body-content">
                            <div class="cover">
                                <img class="" src="images/new-port/19.jpg" >
                            </div>
                        </div>
                        <div class="body-content">
                            <div class="cover">
                                <img class="" src="images/new-port/20.jpg" >
                            </div>
                        </div>
                        <div class="body-content">
                            <div class="cover">
                                <img class="" src="images/new-port/21.jpg" >
                            </div>
                        </div>
                        <div class="body-content">
                            <div class="cover">
                                <img class="" src="images/new-port/22.jpg" >
                            </div>
                        </div>

                        <div class="body-content">
                            <div class="cover">
                                <img class="" src="images/new-port/23.jpg" >
                            </div>
                        </div>
                        <div class="body-content">
                            <div class="cover">
                                <img class="" src="images/new-port/24.jpg" >
                            </div>
                        </div>
                        <div class="body-content">
                            <div class="cover">
                                <img class="" src="images/new-port/25.jpg" >
                            </div>
                        </div>
                        <div class="body-content">
                            <div class="cover">
                                <img class="" src="images/new-port/26.jpg" >
                            </div>
                        </div>
                        <div class="body-content">
                            <div class="cover">
                                <img class="" src="images/new-port/27.jpg" >
                            </div>
                        </div>
                        <div class="body-content">
                            <div class="cover">
                                <img class="" src="images/new-port/28.jpg" >
                            </div>
                        </div>
                        <div class="body-content">
                            <div class="cover">
                                <img class="" src="images/new-port/29.jpg" >
                            </div>
                        </div>
                        <div class="body-content">
                            <div class="cover">
                                <img class="" src="images/new-port/30/" >
                            </div>
                        </div>
                        <div class="body-content">
                            <div class="cover">
                                <img class="" src="images/new-port/31/" >
                            </div>
                        </div>

                        <div class="body-content">
                            <div class="cover">
                                <img class="" src="images/new-port/32.jpg" >
                               
                            </div>
                        </div>

                         <div class="body-content">
                            <div class="cover">
                                <img class="" src="images/new-port/33.jpg" >
                            </div>
                        </div>
                         <div class="body-content">
                            <div class="cover">
                                <img class="" src="images/new-port/34.jpg" >
                            </div>
                        </div>
                         <div class="body-content">
                            <div class="cover">
                                <img class="" src="images/new-port/35.jpg" >
                            </div>
                        </div>

                        <div class="body-content">
                            <div class="cover">
                                <img class="" src="images/new-port/36.jpg" >
                            </div>
                        </div>

                        <div class="body-content">
                            <div class="cover">
                                <img class="" src="images/new-port/37.jpg" >
                            </div>
                        </div>

                        <div class="body-content">
                            <div class="cover">
                                <img class="" src="images/new-port/38.jpg" >
                            </div>
                        </div>

                        <div class="body-content">
                            <div class="cover">
                                <img class="" src="images/new-port/39.jpg" >
                            </div>
                        </div>

                        <div class="body-content">
                            <div class="cover">
                                <img class="" src="images/new-port/40.jpg" >
                            </div>
                        </div>

                        <div class="body-content">
                            <div class="cover">
                                <img class="" src="images/new-port/41.jpg" >
                            </div>
                        </div>

                        <div class="body-content">
                            <div class="cover">
                                <img class="" src="images/new-port/42.jpg" >
                            </div>
                        </div>

                        <div class="body-content">
                            <div class="cover">
                                <img class="" src="images/new-port/43.jpg" >
                            </div>
                        </div>
                         <div class="body-content">
                            <div class="cover">
                                <img class="" src="images/new-port/44.jpg" >
                            </div>
                        </div>



                         <div class="body-content">
                            <div class="cover">
                                <img class="" src="images/new-port/48.jpg" >
                            </div>
                        </div>


                         <div class="body-content">
                            <div class="cover">
                                <img class="" src="images/new-port/49.jpg" >
                            </div>
                        </div>


                         <div class="body-content">
                            <div class="cover">
                                <img class="" src="images/new-port/50.jpg" >
                            </div>
                        </div>

                         <div class="body-content">
                            <div class="cover">
                                <img class="" src="images/new-port/51.jpg" >
                            </div>
                        </div>

                         <div class="body-content">
                            <div class="cover">
                                <img class="" src="images/new-port/52.jpg" >
                            </div>
                        </div>

                         <div class="body-content">
                            <div class="cover">
                                <img class="" src="images/new-port/53.jpg" >
                            </div>
                        </div>

                         <div class="body-content">
                            <div class="cover">
                                <img class="" src="images/new-port/54.jpg" >
                            </div>
                        </div>

                         <div class="body-content">
                            <div class="cover">
                                <img class="" src="images/new-port/55.jpg" >
                            </div>
                        </div>

                        <div class="body-content">
                            <div class="cover">
                                <img class="" src="images/new-port/56.jpg" >
                            </div>
                        </div>
                        
                        <div class="body-content">
                            <div class="cover">
                                <img class="" src="images/new-port/57.jpg" >
                            </div>
                        </div>
                        
                        <div class="body-content">
                            <div class="cover">
                                <img class="" src="images/new-port/58.jpg" >
                            </div>
                        </div>
                        
                        <div class="body-content">
                            <div class="cover">
                                <img class="" src="images/new-port/59.jpg" >
                            </div>
                        </div>
                        
                        <div class="body-content">
                            <div class="cover">
                                <img class="" src="images/new-port/60.jpg" >
                            </div>
                        </div>
                        
                        <div class="body-content">
                            <div class="cover">
                                <img class="" src="images/new-port/61.jpg" >
                            </div>
                        </div>
                        
                        <div class="body-content">
                            <div class="cover">
                                <img class="" src="images/new-port/62.jpg" >
                            </div>
                        </div>
                        
                        <div class="body-content">
                            <div class="cover">
                                <img class="" src="images/new-port/63.jpg" >
                            </div>
                        </div>
                        
                        <div class="body-content">
                            <div class="cover">
                                <img class="" src="images/new-port/64.jpg" >
                            </div>
                        </div>
                        
                        <div class="body-content">
                            <div class="cover">
                                <img class="" src="images/new-port/65.jpg" >
                            </div>
                        </div>
                        
                        <div class="body-content">
                            <div class="cover">
                                <img class="" src="images/new-port/66.jpg" >
                            </div>
                        </div>
                        
                        <div class="body-content">
                            <div class="cover">
                                <img class="" src="images/new-port/67.jpg" >
                            </div>
                        </div>
                        
                        <div class="body-content">
                            <div class="cover">
                                <img class="" src="images/new-port/68.jpg" >
                            </div>
                        </div>
                        
                        <div class="body-content">
                            <div class="cover">
                                <img class="" src="images/new-port/69.jpg" >
                            </div>
                        </div>
                        
                        <div class="body-content">
                            <div class="cover">
                                <img class="" src="images/new-port/70.jpg" >
                            </div>
                        </div>
                        
                        <div class="body-content">
                            <div class="cover">
                                <img class="" src="images/new-port/71.jpg" >
                            </div>
                        </div>
                        
                        <div class="body-content">
                            <div class="cover">
                                <img class="" src="images/new-port/72.jpg" >
                            </div>
                        </div>
                        
                        <div class="body-content">
                            <div class="cover">
                                <img class="" src="images/new-port/73.jpg" >
                            </div>
                        </div>
                        <div class="body-content">
                            <div class="cover">
                                <img class="" src="images/new-port/74.jpg" >
                            </div>
                        </div>
                        
                        <div class="body-content">
                            <div class="cover">
                                <img class="" src="images/new-port/75.jpg" >
                            </div>
                        </div>
                        
                        <div class="body-content">
                            <div class="cover">
                                <img class="" src="images/new-port/76.jpg" >
                            </div>
                        </div>
                        
                        <div class="body-content">
                            <div class="cover">
                                <img class="" src="images/new-port/77.jpg" >
                            </div>
                        </div>
                        
                        <div class="body-content">
                            <div class="cover">
                                <img class="" src="images/new-port/78.jpg" >
                            </div>
                        </div>
                        
                        <div class="body-content">
                            <div class="cover">
                                <img class="" src="images/new-port/79.jpg" >
                            </div>
                        </div>
                        
                        <div class="body-content">
                            <div class="cover">
                                <img class="" src="images/new-port/80.jpg" >
                            </div>
                        </div>
                        
                        
                        <div class="body-content">
                            <div class="cover">
                                <img class="" src="images/new-port/81.jpg" >
                            </div>
                        </div>
                        
                        <div class="body-content">
                            <div class="cover">
                                <img class="" src="images/new-port/82.jpg" >
                            </div>
                        </div>
                        
                        <div class="body-content">
                            <div class="cover">
                                <img class="" src="images/new-port/83.jpg" >
                            </div>
                        </div>
                        
                        <div class="body-content">
                            <div class="cover">
                                <img class="" src="images/new-port/84.jpg" >
                            </div>
                        </div>
                        
                        <div class="body-content">
                            <div class="cover">
                                <img class="" src="images/new-port/85.jpg" >
                            </div>
                        </div>
                        
                        <div class="body-content">
                            <div class="cover">
                                <img class="" src="images/new-port/86.jpg" >
                            </div>
                        </div>
                        
                        <div class="body-content">
                            <div class="cover">
                                <img class="" src="images/new-port/87/" >
                            </div>
                        </div>
                        
                        <div class="body-content">
                            <div class="cover">
                                <img class="" src="images/new-port/88.jpg" >
                            </div>
                        </div>
                        
                        <div class="body-content">
                            <div class="cover">
                                <img class="" src="images/new-port/88.jpg" >
                            </div>
                        </div>
                        
                    </div>
                </div>

        <!-- portfolio -->
    </div>
</div>
</div>

</section>
    <!-- creative-ser -->
    <section id="creative-tab2" class="">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="creative-txt">
                        <h2 class="text-center">Our Process</h2>

                    </div>
                </div>
            </div>
            <div class="row faq-tab-div2">
                <!-- Nav tabs -->

                <div class="col-md-6">
                    <div id="crtab2-1" class="tabcontent2" style="display: block;">
                        <div class="ctr-tavb-img">
                            <img class="img-fluid "
                                src="images/publishing/1.png">
                        </div>
                    </div>
                    <div id="crtab2-2" class="tabcontent2" style="display: none;">
                        <div class="ctr-tavb-img">
                            <img class="img-fluid "
                                src="images/publishing/2/">
                        </div>
                    </div>
                    <div id="crtab2-3" class="tabcontent2" style="display: none;">
                        <div class="ctr-tavb-img">
                            <img class="img-fluid "
                                src="images/publishing/3/">
                        </div>
                    </div>
                    <div id="crtab2-4" class="tabcontent2" style="display: none;">
                        <div class="ctr-tavb-img">
                            <img class="img-fluid "
                                src="images/publishing/4/">
                        </div>
                    </div>
                </div>

                <!-- ul -->
                <div class="col-md-6">
                    <div class="tab crt-tab-menu">
                        <div class="border-lt">
                            <button class="tablinks2 btn-one-cr active" data-toggle="modal" data-target="#Mymodal"
                                onclick="openCity2(event, 'crtab2-1')" id="defaultOpen2">
                                <div class="tab-txt-2 tab-txt-img1">
                                    <h3>Extensive Research, in addition to the Outline Draft</h3>
                                    <p>After extensive research, we anticipate perceiving and knowing your needs to produce a well-written plot.</p>
                                </div>
                            </button>
                            <button class="tablinks2" onclick="openCity2(event, 'crtab2-2')">
                                <div class="tab-txt-2 tab-txt-img2">
                                    <h3>True-to-life Content Writing</h3>
                                    <p>After you approve our exhaustively researched outline, our storytellers will begin writing your concept's first draft immediately.</p>
                                </div>
                            </button>
                            <button class="tablinks2" onclick="openCity2(event, 'crtab2-3')">
                                <div class="tab-txt-2 tab-txt-img3">
                                    <h3>Careful evaluation, Editing, and Proofreading</h3>
                                    <p>To enhance our writing process, we continue to undergo multiple rounds of draft refining, editing, and proofreading to deliver the best.</p>
                                </div>
                            </button>
                            <button class="tablinks2" onclick="openCity2(event, 'crtab2-4')">
                                <div class="tab-txt-2 tab-txt-img4">
                                    <h3>Essential formatting, Design, and Typesetting</h3>
                                    <p>When the first manuscript has been completed, proofread, and approved by you, we look forward to formatting it extensively.</p>
                                </div>
                            </button>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- creative-ser -->



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
                                <input type="hidden" name="url" value='book-publishing.html'>
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
        </div>
         <!--main-footer -->
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
                            <p style="font-size:12px; color:#fff;">Copyright © 2024 Amazon Publishing Spot  . All Rights Reserved. </p><p style="font-size:14px; color:#fff;">Disclosure : Amazon Publishing Spot is a strategic partner of Saibina Corp</p>
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
                        <input type="hidden" name="url" value='book-publishing.html'>
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
                            <input type="hidden" name="url" value='book-publishing.html'>
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