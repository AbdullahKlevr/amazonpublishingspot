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
            </style>            <!-- banner-start -->
            <section id="banner" class="banner01 ">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="row align-items-center">
                                <div class="col-md-6">
                                    <div class="bnr-txt ptop">
                                        <h4>Self Publishing Company</strong> </h4>
                                        <h2>Let's Get Amazon Publishing Services!
</h2>
                                        <p> Don't make your manuscript wait – get Kindle self publishing with Amazon Publishing Spot  –  <strong>It's easy and ROI-positive.</strong> </p>
                                    </div>
                                    <div class="cta-btn btnres">
                                        <a href="#" data-toggle="modal" data-target="#exampleModal" class="btn btnres1 for-m">Get A Quote</a>
                                        <a href="javascript:;" onclick="LiveChatWidget.call('maximize');return false;" class="btn btnres2 res22 for-mm">Get Started</a>
                                        
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-box">
                                        <img src="images/blacklogo.png" class="img-fluid logoimg">
                                        <h2 style="color:#000;font-size:40px;">Create account</h2>
                                        <div class="default-form">
                                            <form method="post"  class="form_submission form-get-quote" id="contact-form" action="/leads/">
                                                 <input type="hidden" name="url" value='index.html'>
           <input type="hidden" name="route" value="<?= $_SERVER['REQUEST_URI'] ?>">
<input type="hidden" name="brand" value="AMAZONPUBLISHINGSPOT">
<input type="hidden" name="token" value="<?= $token; ?>">
<input type="hidden" name="tag" value="top-form">
<input type="hidden" name="price" value="null">
<input type="hidden" name="news" value="1"><input type="text" name="honeypot" style="display: none;">
           <input type="hidden" name="subject" value="Banner Form (amazonpublishingspot.com)">
                                                <div class="row clearfix">
                                                    <div class="form-group col-lg-12 col-md-12 col-sm-12">
                                                        <div class="field-inner">
                                                            <label>Your name</label>
                                                            <input type="text" name="name" value="" placeholder="First and last name" onkeydown="return /^[A-Za-z\s]+$/.test(event.key)" required>
                                                        </div>
                                                    </div>
                                                    <div class="form-group col-lg-12 col-md-12 col-sm-12">
                                                        <div class="field-inner">
                                                            <label>Email</label>
                                                            <input type="email" name="email" required>
                                                        </div>
                                                    </div>
                                                    <div class="form-group col-lg-12 col-md-12 col-sm-12">
                                                        <div class="field-inner">
                                                            <label>Phone</label>
                                                            <input type="text" class="phoneNum" name="phone" required>
                                                        </div>
                                                    </div>
                                                    <!--<div class="form-group col-lg-12 col-md-12 col-sm-12">-->
                                                    <!--    <div class="field-inner">-->
                                                    <!--        <label>Password</label>-->
                                                    <!--        <input type="password"  name="quote[Password]"   placeholder="At least 6 characters"  required>-->
                                                    <!--    </div>-->
                                                    <!--</div>-->
                                                    <div class="form-group col-lg-12 col-md-12 col-sm-12">
                                                        <div class="field-inner">
                                                            <label>Services</label>
                                                            <select class="form-control" name="service" data-name="service" id="exampleFormControlSelect1" required>
                                                                <option value="">Services</option>
                                                                <option value="Book Writing">Book Writing </option>
                                                                <option value=" E-book Writing & Publishing"> E-book Writing & Publishing</option>
                                                                <option value="Book Editing & Proofreading">Book Editing & Proofreading</option>
                                                                <option value=" Book Cover Design"> Book Cover Design </option>
                                                                <option value="  Book Illustrations">Book Illustrations </option>
                                                                <option value="  Book Publishing ">Book Publishing </option>
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
                                                    <!--        <label>Message</label>-->
                                                    <!--        <textarea name="brief" class="form-control"></textarea>-->
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
                                                        <p>By creating an account, you agree to Amazon's <a style="color:#007bff; font-weight:bold;" href="terms-and-condition/">Conditions of Use.</a> You can find the privacy notice that applies to you here. </p>
                                                        
                                                    </div>
                                                    <!--<div class="form-group accountpara col-lg-12 col-md-12 col-sm-12">-->
                                                    <!--    <p>By creating an account, you agree to Amazon Publishing Spot  <a href="terms-and-condition.php">Conditions of Use.</a> You can find the privacy notice that applies to you here.</p>-->
                                                    <!--</div>-->
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
            </section>
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
            <!-- banner-end -->
            <section id="form-sec">
                <div class="container">
                    <div class="row">
                        <div class="form-txt">
                            <h2>Sign up Now with Amazon Publishing Spot  to Get Our <strong>Limited Time Offer</strong> </h2>
                        </div>
                        <!-- btn form-btn -->
                        <form method="POST" class="form-get-quote form_submission" action="/leads/">
                             <input type="hidden" name="url" value='index.html'>
           <input type="hidden" name="route" value="<?= $_SERVER['REQUEST_URI'] ?>">
<input type="hidden" name="brand" value="AMAZONPUBLISHINGSPOT">
<input type="hidden" name="token" value="<?= $token; ?>">
<input type="hidden" name="tag" value="top-form">
<input type="hidden" name="price" value="null">
<input type="hidden" name="news" value="1"><input type="text" name="honeypot" style="display: none;">
           <input type="hidden" name="subject" value="Banner Form (amazonpublishingspot.com)">
           <input type="hidden" name="brief">
           
                            <div class="form-div" style="margin:25px 0 0;">
                                <div class="col-lg">
                                    <input name="name" required class="form-control" type="text" placeholder="Name" onkeydown="return /[a-z]/i.test(event.key)">
                                </div>
                                <div class="col-lg">
                                    <input name="email" required class="form-control" type="email" placeholder="Email">
                                </div>
                                <div class="col-lg">
                                    <input name="phone" required class="form-control phoneNum" type="text" placeholder="Phone">
                                </div>
                                <div class="col-lg">
                                    <select class="classic" name="service" data-name="service">
                                        <optgroup label="&nbsp; Select Services">
                                            <option value="Book Writing " data-amt="16" data-deadline="1">Book Writing </option>
                                            <option value="Book Marketing " data-amt="16" data-deadline="1">Book Marketing </option>
                                            <option value="Book Cover Design" data-amt="50" data-deadline="1">Book Cover Design </option>
                                            <option value="Book Proof Reading & Editing" data-amt="50" data-deadline="1">Book Proof Reading & Editing</option>
                                            <option value="Book Publishing" data-amt="50" data-deadline="1">Book Publishing </option>
                                            <option value="E-Book Writing & Publishing" data-amt="50" data-deadline="1">E-Book Writing & Publishing</option>
                                        </optgroup>
                                    </select>
                                </div>
                                <div class="col-lg bnr-form-btn">
                                    
                                    <span class="form-extra-data"></span>
                                    <input type="submit" name="submit" class="btn form-btn" value="Submit">
                                    
                                        
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
            </section>
            <!-- form-sec -->
            <!-- form-sec -->
            <section id="lp-writing">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <h2>Amazon Publishing Services Tailored To Your Desired Needs.</h2>
                            <br>
                            <div class="inner-txt-p">
                                <p>We're here to assist you in the best possible manner. We provide entire book writing, editing, book marketing, and Amazon publishing services:</p>
                                <ul class="link">
                                    <li>	Book Ghostwriting Services</li>
                                    <li>	Book Cover Design</li>
                                    <li>	Editing and Formatting</li>
                                    <li>	E-book Writing Services</li>
                                    <li>	Book Publishing Services </li>
                                    <li>	Book Marketing Services </li>
                                    <li>	Author Website Design</li>
                                </ul>
                            </div>
                            <br>
                            <div class="cta-btn">
                                <a href="#" data-toggle="modal" data-target="#exampleModal" class="btn btnres1 rbt1">Get A Quote</a>
                                <a href="javascript:;" onclick="LiveChatWidget.call('maximize');return false;" class="btn btnres2 rbt2 liveChat">Live Chat</a>
                                <!-- <a href="javascript:void(Tawk_API.toggle())" class="btn btnres2 rbt2 liveChat">Live Chat</a> -->
                            </div>
                        </div>
                        <div class=" col-md-6 inner-tx-p">
                            <div class="inner-img-lp">
                                <img class="img-sec " src="images/sec55.jpg">
                            </div>
                        </div>
                    </div>
                </div>
        </div>
        </section>
        
        
         <!-- writing-ser -->
    <section id="writing-ser">
        <div class="container">
            <div class="reviews-row">
                <div class="col-md-12">
                    <div class="write-txt">
                        <h1><Strong>Amazon Publishing Spot  Premium Book Services</Strong></h1>
                        <p>Amazon Publishing Spot  provides top quality, custom-tailored solutions for all your Book
                            Writing, Editing, Publishing and Marketing needs.</p>
                    </div>
                </div>
                <div class="col-md-12 write-main-div">
                    <div class="col-md-6 col-lg-3 ser-img-box">
                        <div class="ser-box ser1">
                            <div class="img-box img-ser1"></div>
                            <div class="ser-box-txt ">
                                <h3>Book Writing</h3>

                                <p class="list-scroll">We are not all gifted writers cut out to write novels and books.
                                    Some of us are short on time, some lack the motivation to translate thoughts into
                                    writing while others don't even know where to begin. This is where our ghostwriting
                                    skillset comes into play. Our genre and niche-specific writers are seasoned
                                    champions who have a habit of producing meticulously written books.</p>

                                <a href="book-writing/" class="read-txt">Read More</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3 ser-img-box">
                        <div class="ser-box ser4">
                            <div class="img-box img-ser2"></div>
                            <div class="ser-box-txt">
                                <h3>Book Editing</h3>

                                <p class="list-scroll">Whether you are an internationally acclaimed author or a newbie,
                                    you need a fresh pair of eyes to go through your manuscript. At Amazon Publishing Spot ,
                                    our team of editors ensure your manuscript is completley error-free, grammatically
                                    correct and of a publishable quality. We house genre and niche-specific experts who
                                    critically assess your work, identify areas of improvement and provide constructive
                                    feedback.</p>

                                <a href="proofreading/" class="read-txt">Read More</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3 ser-img-box">
                        <div class="ser-box ser2">
                            <div class="img-box img-ser3"></div>
                            <div class="ser-box-txt">
                                <h3>Book Publishing</h3>

                                <p class="list-scroll">A well-published book is critical to your success as an author.
                                    Even though you worked hard on the manuscript, your book may not get the attention
                                    it deserves without proper publishing. Amazon Publishing Spot  will help you provide the
                                    best possible reading experience for your book’s target audience. </p>

                                <a href="book-publishing/index/" class="read-txt">Read More</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3 ser-img-box">
                        <div class="ser-box ser3">
                            <div class="img-box img-ser4"></div>
                            <div class="ser-box-txt">
                                <h3>Book Marketing</h3>
                                <p class="list-scroll">We help you take your book from the back shelves to the
                                    bestselling title by marketing it the right way. From SEO to Social Media Marketing,
                                    from Website design and development to paid marketing, our digitally Ny marketers
                                    make sure that your book never leaves the sight of its target audience. At Book
                                    Marketing Pros, we develop a secret recipe to get your book recognised as we empower
                                    you through our ROI-focused marketing techniques and drive traction to your book.
                                </p>

                                <a href="book-marketing/" class="read-txt">Read More</a>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </section>



    
        
   
                <section id="cta-sec">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 cta-box">
                        <div class="cta-txt cta-txt1">
                            <h2>Work With a Fantastic Group of <bold>Amazon Publishing Spot </bold> </h2>
                            <p>Discover the amazing world of books with Amazon Publishing Spot ! Get closer to having your book published on Amazon through Kindle Direct Publishing.</p>
                        </div>
                        <div class="cta-btn">
                            <a href="tel:+7272737217" class="cta-btn-1">Call Us (727) 273-7217</a>
                            <a href="javascript:;" onclick="LiveChatWidget.call('maximize');return false;" class="cta-btn-2 liveChat">Live Chat</a>
                            <a href="javascript:;" class="cta-btn-3 order_button2">Get A Quote</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>         
        <section id="lp-writing">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <h2>Are You Still Waiting for Publication 
of Your Book?</h2>
                        <br>
                        <div class="inner-txt-p">
                            <p>Feel free to rely on us. Here at Amazon Publishing Spot , we provide comprehensive services for authors and publishers. Our services include:</p>
                            <ul>
                                <li>E-book publication</li>
                                <li>Branding and publicity</li>
                                <li>Video book trailers</li>
                                <li>Web and Internet SEO</li>
                                <li>Audiobooks</li>
                                <li>Custom illustrations</li>
                            </ul>
                        </div>
                        <br>
                        <div class="cta-btn">
                            <a href="#" data-toggle="modal" data-target="#exampleModal" class="btn btnres1 rbt1">Get A Quote</a>
                            <a href="javascript:;" onclick="LiveChatWidget.call('maximize');return false;" class="btn btnres2 rbt2 liveChat">Live Chat</a>
                        </div>
                    </div>
                    <div class=" col-md-6 inner-tx-p">
                        <div class="inner-img-lp">
                            <img class="img-sec2 " src="images/sec44.jpg">
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </section>
        <!-- --------------------------------------------------------------------- -->
        <!-- creative-ser -->
        <!-- creative-ser -->
        <div class="revie1 testimonial">
            <div class="container">
                <div class="col-sm-12">
                    <div class="test-txt">
                        <h2>What Our Clients Say About Us</h2>
                    </div>
                </div>
                <div class="row reviews-row book-covers-2">
                    <div class="col-md-4">
                        <div class="thumbnail review-box">
                            <div class="caption">
                            <h3 class="text-center review-heading">Sincerely,<br> CATHERINE D. NETTER</h3>
                                <p class="text-center review-text list-scroll">Amazon Publishing Spot 's ghostwriting and publishing services have been an absolute game-changer for me as an author. From the impeccable professionalism of their ghostwriters to the seamless publishing process, every step was a delight. They brought my vision to life with precision and skill, and their user-friendly platform made publishing effortless. Thanks to Amazon Publishing Spot , I now have a beautifully published book that has reached readers worldwide. I highly recommend their services to any author looking for a hassle-free path to success.</p>
                                <ul class="list-group text-left">
                                    <li class="list-group-item">
                                        <span class="text-uppercase">communication</span>
                                        <span class="pull-right">
                                            <span class="stars5"></span>
                                        </span>
                                    </li>
                                    <li class="list-group-item">
                                        <span class="text-uppercase">quality of work</span>
                                        <span class="pull-right">
                                            <span class="stars5"></span>
                                        </span>
                                    </li>
                                    <li class="list-group-item">
                                        <span class="text-uppercase">delivery</span>
                                        <span class="pull-right">
                                            <span class="stars5"></span>
                                        </span>
                                    </li>
                                    <li class="list-group-item">
                                        <span class="text-uppercase">support</span>
                                        <span class="pull-right">
                                            <span class="stars5"></span>
                                        </span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="thumbnail review-box">
                            <div class="caption">
                        <h3 class="text-center review-heading">Sincerely,<br>
Rita Thompson
</h3>
                                <p class="text-center review-text">"I had a remarkable experience with amazonpublishingspot.com for their Editing and Publishing services. As an author, I entrusted them with my manuscript, and I was thoroughly impressed with the level of professionalism and attention to detail they exhibited. The editing process was seamless, with their team providing valuable insights and suggestions that significantly enhanced the quality of my book. The publishing phase was equally impressive, as they guided me through the necessary steps and ensured a smooth and efficient publication. I am grateful for the exceptional services provided by amazonpublishingspot.com, and I highly recommend them to any author in need of top-notch editing and publishing assistance. </p>
                                <ul class="list-group text-left">
                                    <li class="list-group-item">
                                        <span class="text-uppercase">communication</span>
                                        <span class="pull-right">
                                            <span class="stars5"></span>
                                        </span>
                                    </li>
                                    <li class="list-group-item">
                                        <span class="text-uppercase">quality of work</span>
                                        <span class="pull-right">
                                            <span class="stars5"></span>
                                        </span>
                                    </li>
                                    <li class="list-group-item">
                                        <span class="text-uppercase">delivery</span>
                                        <span class="pull-right">
                                            <span class="stars5"></span>
                                        </span>
                                    </li>
                                    <li class="list-group-item">
                                        <span class="text-uppercase">support</span>
                                        <span class="pull-right">
                                            <span class="stars5"></span>
                                        </span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="thumbnail review-box">
                            <div class="caption">
                             <h3 class="text-center review-heading">Sincerely,<br>
MARTIE SMITH
</h3>
                                <p class="text-center review-text">"I cannot praise Amazon Publishing Spot  enough for their exceptional book illustration, cover design, and marketing services. Their team of talented artists and designers transformed my book into a visual masterpiece, capturing the essence of my story with stunning illustrations and an eye-catching cover. The marketing strategies they implemented propelled my book to new heights, reaching a wide audience and generating significant sales. Thanks to Amazon Publishing Spot , my book now stands out from the crowd, and I am beyond satisfied with the results. If you're an author seeking professional illustrations, captivating cover design, and effective marketing, look no further than Amazon Publishing Spot —they are the key to bringing your book to life and maximizing its success."</p>
                                <ul class="list-group text-left">
                                    <li class="list-group-item">
                                        <span class="text-uppercase">communication</span>
                                        <span class="pull-right">
                                            <span class="stars5"></span>
                                        </span>
                                    </li>
                                    <li class="list-group-item">
                                        <span class="text-uppercase">quality of work</span>
                                        <span class="pull-right">
                                            <span class="stars5"></span>
                                        </span>
                                    </li>
                                    <li class="list-group-item">
                                        <span class="text-uppercase">delivery</span>
                                        <span class="pull-right">
                                            <span class="stars5"></span>
                                        </span>
                                    </li>
                                    <li class="list-group-item">
                                        <span class="text-uppercase">support</span>
                                        <span class="pull-right">
                                            <span class="stars5"></span>
                                        </span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="thumbnail review-box">
                            <div class="caption">
                        <h3 class="text-center review-heading">Sincerely, <br>
Sean Maze 
</h3>
                                <p class="text-center review-text"> "I am thrilled with the Amazon marketing services provided by amazonpublishingspot.com. Their expertise in navigating the Amazon platform has been instrumental in boosting the visibility and sales of my book. With their strategic marketing approach, my book has gained significant exposure to a wider audience, resulting in increased sales and positive reader feedback. The team at amazonpublishingspot.com has been responsive, proactive, and dedicated to maximizing the marketing potential of my book on Amazon. I am grateful for their efforts and highly recommend their Amazon marketing services to any author looking to effectively promote their work on the world's largest online marketplace. </p>
                                <ul class="list-group text-left">
                                    <li class="list-group-item">
                                        <span class="text-uppercase">communication</span>
                                        <span class="pull-right">
                                            <span class="stars5"></span>
                                        </span>
                                    </li>
                                    <li class="list-group-item">
                                        <span class="text-uppercase">quality of work</span>
                                        <span class="pull-right">
                                            <span class="stars5"></span>
                                        </span>
                                    </li>
                                    <li class="list-group-item">
                                        <span class="text-uppercase">delivery</span>
                                        <span class="pull-right">
                                            <span class="stars5"></span>
                                        </span>
                                    </li>
                                    <li class="list-group-item">
                                        <span class="text-uppercase">support</span>
                                        <span class="pull-right">
                                            <span class="stars5"></span>
                                        </span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    
                    
                    
                    <div class="col-md-4">
                        <div class="thumbnail review-box">
                            <div class="caption">
                        <h3 class="text-center review-heading">Sincerely, <br>
AVIRUL ISLAM
</h3>
                                <p class="text-center review-text"> "I am extremely pleased with the publishing services provided by amazonpublishingspot.com for my book, from start to finish, their team demonstrated professionalism, expertise, and a genuine commitment to bringing my vision to life. They guided me through the entire publishing process, offering valuable insights and suggestions along the way. The final product surpassed my expectations, with a beautifully designed cover and impeccable formatting. The team's attention to detail and dedication to delivering a high-quality book is evident in every aspect. I am grateful to amazonpublishingspot.com for their outstanding publishing services and would highly recommend them to any author seeking a seamless and successful publishing journey.</p>
                                <ul class="list-group text-left">
                                    <li class="list-group-item">
                                        <span class="text-uppercase">communication</span>
                                        <span class="pull-right">
                                            <span class="stars5"></span>
                                        </span>
                                    </li>
                                    <li class="list-group-item">
                                        <span class="text-uppercase">quality of work</span>
                                        <span class="pull-right">
                                            <span class="stars5"></span>
                                        </span>
                                    </li>
                                    <li class="list-group-item">
                                        <span class="text-uppercase">delivery</span>
                                        <span class="pull-right">
                                            <span class="stars5"></span>
                                        </span>
                                    </li>
                                    <li class="list-group-item">
                                        <span class="text-uppercase">support</span>
                                        <span class="pull-right">
                                            <span class="stars5"></span>
                                        </span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-md-4">
                        <div class="thumbnail review-box">
                            <div class="caption">
                        <h3 class="text-center review-heading">Sincerely, <br>
Dr. J.K Hudson
</h3>
                                <p class="text-center review-text"> "Choosing Kindle Vella through Amazon Publishing Spot  for publishing my work has been a remarkable decision. The platform's user-friendly interface, coupled with its vast reader base, has allowed my stories to captivate a wide audience. The serialized format of Kindle Vella has not only increased reader engagement but also opened doors to new opportunities for my writing career. With Kindle Vella, I have found a supportive community of readers and fellow authors, and the seamless publishing process has given me complete control over my work. I highly recommend Kindle Vella to any author looking to embark on an exciting and rewarding publishing journey.

</p>
                                <ul class="list-group text-left">
                                    <li class="list-group-item">
                                        <span class="text-uppercase">communication</span>
                                        <span class="pull-right">
                                            <span class="stars5"></span>
                                        </span>
                                    </li>
                                    <li class="list-group-item">
                                        <span class="text-uppercase">quality of work</span>
                                        <span class="pull-right">
                                            <span class="stars5"></span>
                                        </span>
                                    </li>
                                    <li class="list-group-item">
                                        <span class="text-uppercase">delivery</span>
                                        <span class="pull-right">
                                            <span class="stars5"></span>
                                        </span>
                                    </li>
                                    <li class="list-group-item">
                                        <span class="text-uppercase">support</span>
                                        <span class="pull-right">
                                            <span class="stars5"></span>
                                        </span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    
                  
            </div>
        </div>
        </div>

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
                                <input type="hidden" name="url" value='index.html'>
           <input type="hidden" name="route" value="<?= $_SERVER['REQUEST_URI'] ?>">
<input type="hidden" name="brand" value="AMAZONPUBLISHINGSPOT">
<input type="hidden" name="token" value="<?= $token; ?>">
<input type="hidden" name="tag" value="top-form">
<input type="hidden" name="price" value="null">
<input type="hidden" name="news" value="1"><input type="text" name="honeypot" style="display: none;">
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
        </div>        <!--main-footer -->
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
                        <input type="hidden" name="url" value='index.html'>
           <input type="hidden" name="route" value="<?= $_SERVER['REQUEST_URI'] ?>">
<input type="hidden" name="brand" value="AMAZONPUBLISHINGSPOT">
<input type="hidden" name="token" value="<?= $token; ?>">
<input type="hidden" name="tag" value="top-form">
<input type="hidden" name="price" value="null">
<input type="hidden" name="news" value="1"><input type="text" name="honeypot" style="display: none;">
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
            
                <a href="javascript:;" onclick="LiveChatWidget.call('maximize');return false;" class="chat_wrap liveChat">
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
                            <input type="hidden" name="url" value='index.html'>
           <input type="hidden" name="route" value="<?= $_SERVER['REQUEST_URI'] ?>">
<input type="hidden" name="brand" value="AMAZONPUBLISHINGSPOT">
<input type="hidden" name="token" value="<?= $token; ?>">
<input type="hidden" name="tag" value="top-form">
<input type="hidden" name="price" value="null">
<input type="hidden" name="news" value="1"><input type="text" name="honeypot" style="display: none;">
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