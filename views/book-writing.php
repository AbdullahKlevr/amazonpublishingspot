<!doctype html>
<html lang="en-US">
    

<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
        <?php include_once("includes/head.php")?>
        
        


        
        


        <title>Book Writing | Worldwide Publisher </title>
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

                        <section id="banner" class="banneroad01 bwss">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="row align-items-center">
                                <div class="col-md-6">
                                    <div class="bnr-txt btn-tx-cp">
                                        <h4>Have a story to tell?</h4>
                                        <h2>Tailored Book Writing Services for Every Genre and Niche </h2>
                                        <p>
                                            At Worldwide Publisher , we take your ideas, experiences, and expertise and transform them into captivating words that deeply resonate with both you and your target audience. Our team of highly skilled and creative writers not only excel in a diverse array of genres and niches but also bring a delightful and collaborative approach to every project.
                                        </p>
                                    </div>
                                    <div class="cta-btn btnres">
                                        <a href="#" data-toggle="modal" data-target="#exampleModal" class="btn btnres1" >Get A Quote</a>
                                        <a href="javascript:;" onclick="LiveChatWidget.call('maximize');"  class="btn btnres2" >Get Started</a>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                <div class="form-box">
                                    <!--<img src="images/blacklogo.png" class="img-fluid logoimg">-->
                                    <h2 style="color:#000;font-size:40px;">Create Account</h2>
                                    <div class="default-form">
                                        <form method="post" class="form_submission form-get-quote" id="contact-form" action="/leads">

                                            <input type="text" name="route" style="display: none;">
                                            <input type="hidden" name="url" value='index.html'>
                                            <input type="hidden" name="route" value="<?= $_SERVER['REQUEST_URI'] ?>">
                                            <input type="hidden" name="brand" value="AUTHORSECLIPSE">
                                            <?php
// Check if session is already started
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

// Generate a token or use existing token
$token = $_SESSION['token'] ?? bin2hex(random_bytes(16));
?>
                                            <input type="hidden" name="token" value="<?= $token; ?>">
                                            <input type="hidden" name="tag" value="top-form">
                                            <input type="hidden" name="price" value="null">
                                            <input type="hidden" name="news" value="1">
                                            <input type="hidden" name="subject" value="Banner Form (authorseclipse.com)">
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
                                                            <option value=" Amazon Publishing ">Amazon Publishing</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <input type="hidden" name="brief" value="No Message">

                                                <div class="g-recaptcha" data-sitekey="YOUR_SITE_KEY"></div>

 <!-- Hidden fields for additional data -->

 <input type="hidden" name="lb_source" value="Organic">
            <input type="hidden" name="ip2loc_ip" value="">
            <input type="hidden" name="ip2loc_country" value="">
            <input type="hidden" name="ip2loc_region" value="">
            <input type="hidden" name="ip2loc_city" value="">

                                                <div class="form-group col-lg-12 col-md-12 col-sm-12">
                                                    <button type="submit" class="accountbtn">Get Started</button>
                                                </div>
                                                <div class="col-md-12 col-xs-12">
                                                    <div class="error mt-3 alert alert-danger text-left mb-0" style="display: none"></div>
                                                    <div class="success mt-3 alert alert-success text-center mb-0 p-2" style="display: none"></div>
                                                    <div class="loader" style="display: none">
                                                        <img alt="loader" src="images/loader.gif">
                                                    </div>
                                                </div>
                                               

                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            </div>
                        </div>

                        <div class="row   mt-3">
    <div class="col-md-3"><a href="https://www.trustpilot.com/review/worldwidepublisher.com">
<img src="/assets/images/1235.png" class="mt-2" style="width:130px; object-fit:contain;" alt=""></a>
</div>
<div class="col-md-3"><a href="https://www.reviews.io/company-reviews/store/worldwidepublisher.com-nwz4rda">
                                                    <img src="/assets/images/TD.png" style="width:130px;object-fit:contain;" alt="">
                                                </a></div>

<div class="col-md-3">
<a href="https://www.provenexpert.com/en-us/worldwide-publisher/?mode=preview">
                                                    <img src="/assets/images/123.png" style="width:130px; object-fit:contain;" class="" alt="">
                                                </a>
</div>

                         <div class="col-md-3">
                         <a href="https://www.bark.com/en/us/company/worldwide-publisher/bRP71/">
                                                    <img src="/assets/images/14.png" style="width:130px; object-fit:contain;" alt="">
                                                </a>
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
                            <h2>Connect with Genre and Niche-Specific Book Writing Pros</h2>
                            <br>
                            <div class="inner-txt-p">
                                <p>
                                    Achieving the dream of publishing a book under your name is a shared aspiration. However, only some aspiring writers have the time or the creative drive to produce a high-quality and marketable book. That's where our ghostwriting expertise comes in. We assist you in bringing your book idea to life by actively listening to your vision, developing a structured framework, and skillfully transforming your thoughts into a captivating book. At Worldwide Publisher , we are dedicated to aligning our goals with yours, empowering you to express yourself through the written word.
                                </p>
                            </div>
                            <br>
                            <div class="cta-btn">
                                <a href="#" data-toggle="modal" data-target="#exampleModal" class="btn" >Get A Quote</a>
                                <a href="javascript:;" onclick="LiveChatWidget.call('maximize');"  class="btn liveChat" >Live Chat</a>
                            </div>
                        </div>
                        <div class=" col-md-6 inner-tx-p">
                            <div class="inner-img-lp">
                                <img class="img-sec6 " src="images/book-writng-sr.png">
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
                            <h2>A Client-Centric and Customized Approach</h2>
                        </div>
                    </div>
                    <div class="col-md-12 write-main-div">
                        <div class="col-md-6 col-lg-3 ser-img-box">
                            <div class="ser-box ser1">
                                <div class="img-box img-ser1"></div>
                                <div class="ser-box-txt">
                                    <h3>Extensive Expertise Across Various Genres and Niches </h3>
                                    <p class="list-scroll">
                                        At Worldwide Publisher , we transcend boundaries. Our team of experienced writers specializes in a wide range of genres and niches. Whether it's an autobiography, fiction, or a meticulously researched business publication, we guarantee exceptional quality and unparalleled service.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-3 ser-img-box">
                            <div class="ser-box ser4">
                                <div class="img-box img-ser2"></div>
                                <div class="ser-box-txt">
                                    <h3>Personalized Service Tailored to Your Needs </h3>
                                    <p class="list-scroll">
                                        We understand that every book project is unique. That's why we assign a dedicated team of writers specifically chosen to match your genre and niche requirements. We attentively listen to your instructions, carefully craft an outline, and meticulously develop your manuscript into a complete book within the agreed-upon timeframe.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-3 ser-img-box">
                            <div class="ser-box ser2">
                                <div class="img-box img-ser3"></div>
                                <div class="ser-box-txt">
                                    <h3>Effective Client Communication for Complete Satisfaction </h3>
                                    <p class="list-scroll">
                                       At Worldwide Publisher , we recognize that all clients and projects are unique. Our bespoke approach places a strong emphasis on clear and transparent communication. We guide and assist you through each step of the book-writing process, ensuring that your vision is faithfully brought to life. Our commitment to delivering on our promises guarantees your utmost satisfaction.
                                    </p>
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
                        <div class="cta-txt">
                            <h2>Take your book to the next level with our help</h2>
                            <p>We'll turn your thoughts into a carefully crafted and critically acclaimed book</p>
                        </div>
                        <div class="cta-btn">
                            <a href="tel:3235914113" class="cta-btn-1">Call Us (323) 591-4113</a>
                            <a href="javascript:;" onclick="LiveChatWidget.call('maximize');return false;" class="cta-btn-2 liveChat">Live Chat</a>
                            <a href="javascript:;" class="cta-btn-3 order_button2">Get A Quote</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>        <section id="sample">
            <div class="container">
                <div class="row">
                    <div class="container">
                        <div class="col-md-12">
                            <div class="sample-txt">
                                <h2><b>Our Impressive Portfolio</b></h2>
                                <p>Our track record speaks volumes. We are committed to offering each client unparalleled value and personalized service.</p>
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
                            <h2 class="text-center">The Writing Process of Worldwide Publisher </h2>
                        </div>
                    </div>
                </div>
                <div class="row faq-tab-div2">
                    <!-- Nav tabs -->
                    <div class="col-md-6">
                        <div id="crtab2-1" class="tabcontent2" style="display: block;">
                            <div class="ctr-tavb-img">
                                <img class="img-fluid " src="images/p-1.png">
                            </div>
                        </div>
                        <div id="crtab2-2" class="tabcontent2" style="display: none;">
                            <div class="ctr-tavb-img">
                                <img class="img-fluid " src="images/p-2.png">
                            </div>
                        </div>
                        <div id="crtab2-3" class="tabcontent2" style="display: none;">
                            <div class="ctr-tavb-img">
                                <img class="img-fluid " src="images/p-3.png">
                            </div>
                        </div>
                        <div id="crtab2-4" class="tabcontent2" style="display: none;">
                            <div class="ctr-tavb-img">
                                <img class="img-fluid " src="images/p-4.png">
                            </div>
                        </div>
                    </div>
                    <!-- ul -->
                    <div class="col-md-6">
                        <div class="tab crt-tab-menu">
                            <div class="border-lt">
                                <button class="tablinks2 btn-one-cr active" data-toggle="modal" data-target="#Mymodal" onclick="openCity2(event, 'crtab2-1')" id="defaultOpen2">
                                    <div class="tab-txt-2 tab-txt-img1">
                                        <h3>Research and Outline for the First Draft</h3>
                                        <p>
                                            Before diving into the manuscript, we fully understand your ideas, instructions, and requirements. Through thorough research, we develop a comprehensive outline and a tentative table of contents for your review.
                                        </p>
                                    </div>
                                </button>
                                <button class="tablinks2" onclick="openCity2(event, 'crtab2-2')">
                                    <div class="tab-txt-2 tab-txt-img2">
                                        <h3>Writing</h3>
                                        <p>Once the outline and table of contents are approved, our dedicated writing team begins crafting the manuscript, sharing drafts with you, chapter by chapter. We offer unlimited revisions throughout the writing process to ensure your complete satisfaction.</p>
                                    </div>
                                </button>
                                <button class="tablinks2" onclick="openCity2(event, 'crtab2-3')">
                                    <div class="tab-txt-2 tab-txt-img3">
                                        <h3>Critical Review, Editing, and Proofreading</h3>
                                        <p>
                                            Each draft undergoes rigorous editing and proofreading. Upon completion of the writing process, our editors conduct a thorough assessment, ensuring the manuscript is refined and error-free before finalization.
                                        </p>
                                    </div>
                                </button>
                                <button class="tablinks2" onclick="openCity2(event, 'crtab2-4')">
                                    <div class="tab-txt-2 tab-txt-img4">
                                        <h3> Formatting, Typesetting, and Design</h3>
                                        <p>
                                            Once your manuscript is finalized and receives your approval, we expertly format the book, perform meticulous typesetting to meet international publishing standards and design a cover that aligns with your preferences.
                                        </p>
                                    </div>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


                    <section id="contact-sec">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="sample-txt contact-txt-sec">
                            <h2 style="color:black;">Send Us a Message</h2>
                            <p style="color:black;">Please fill out your details, and our team will contact you soon.</p>
                        </div>
                        <div class="contact-box col-md-8">
                            <form class="cmxform form-get-quote form_submission"  method="POST" action="/leads"><input type="text" name="route" style="display: none;">
                                <input type="hidden" name="url" value='book-writing.html'>
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
                                    <a href="tel:3235914113" class="con-cta-btn ct-b2"> (323) 591-4113</a>
                                </div>
                                <div class="col-lg p0 col-b-3">
                                    <p>Send us Email</p>
                                    <a href="mailto:info@worldwidepublisher.com" class="con-cta-btn ct-b3">info@worldwidepublisher.com</a>
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
                            <p style="font-size:12px; color:#fff;">Copyright © 2024 Worldwide Publisher  . All Rights Reserved. </p>
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
                    <form  class="form_submission form-get-quote" method="POST" action="/leads"><input type="text" name="route" style="display: none;">
                        <input type="hidden" name="url" value='book-writing.html'>
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
                                        <option value="none">Select A Service</option>
                                        <option value="Book Writing " data-amt="16" data-deadline="1">Book Writing </option>
                                        <option value="Book Marketing " data-amt="16" data-deadline="1">Book Marketing</option>
                                        <option value="Book Cover Design" data-amt="50" data-deadline="1">Book Cover Design </option>
                                        <option value="Book Proof Reading & Editing" data-amt="50" data-deadline="1">Book Proof Reading & Editing</option>
                                        <option value="Book Publishing" data-amt="50" data-deadline="1">Book Publishing</option>
                                        <option value="E-Book Writing & Publishing" data-amt="50" data-deadline="1">E-Book Writing & Publishing</option>
                                    </optgroup>
                                </select>
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
                <a href="javascript:;" onclick="LiveChatWidget.call('maximize');" class="chat_wrap liveChat">
                    <span class="icoo">
                        <i class="fa fa-comment"></i>
                    </span>
                    <span>Chat With Us</span>
                </a>
                <a href="tel:3235914113" class="call_wrap">
                    <span class="icoo">
                        <i class="fa fa-phone"></i>
                    </span>
                    <span> (323) 591-4113</span>
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
                        <form  method="POST" action="/leads" class="form_submission form-get-quote">
                            <input type="hidden" name="url" value='book-writing.html'>
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