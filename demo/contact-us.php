<!DOCTYPE html>
<html lang="en">

<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>
    <?php include("includes/compatibility.php");?>
    <meta name="description"
        content="Ghost Writing Alpha is an award-winning ghost Writing agency New York that specializes in writing books on various genres">
    <title>Professional Ghost Writing Services in New York</title>
    <?php include("includes/styles.php");?>


</head>

<body>
    <?php include("includes/header.php");?>
<div class="mainBanner">
        

        <div class="container aboutusBanner" style="background-image:url(assets/images/banner/contact-us-banner.webp)">
            <div class="banner-content banner-content2">
                <div class="row g-4 align-items-center">
                    <div class="col-lg-12 text-center">
                        <h1 class="banner-heading text-white">
                            Contact Us
                        </h1>
                    </div>
                </div>
            </div>
            <div>
                <img src="assets/images/vector1.webp" alt="" class="vector1"  alt="" loading="lazy" width="100px" height="100px">
                <img src="assets/images/vector2.webp" alt="" class="vector2"  alt="" loading="lazy" width="100px" height="100px">
            </div>
        </div>
    </div>

    <section class="">
        <div class="oc"></div>
        <div class="container aos-init aos-animate" data-aos="fade-up" data-aos-duration="2200">
            <div class="row g-4">
                <div class="col-md-6">
                    <div class="info-form">
                        <div class="sec-heading">
                            <h2>
                                <span>Work With </span> Us
                            </h2>
                        </div>

                        <form action="#" class="app_contact_form contact-form" method="post" >
                            <div class="row g-4">
                                <div class="col-md-12">
                                    <input type="text" name="cn" id="cn" placeholder="Name" class="required form-control" required aria-required="true">
                                    <input type="text" name="em" id="em" placeholder="Email Address" class="required email form-control" required aria-required="true">
                                    <input type="tel" class="required form-control ftpn" required name="pn" minlength="7" maxlength="14" placeholder="Your Phone" aria-required="true">
                                </div>
                                <div class="col-md-12">
                                    <textarea name="msg" id="msg" class="required form-control" required  placeholder="Enter a brief description about your book" aria-required="true"></textarea>
                                </div>

                                <div class="col-md-12 ">
                                    <input type="submit" name="submit" class="submit-btn" value="Get Started">
                                </div>

                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-md-5 offset-md-1">
                    <div class="detail-contact">
                        <div class="sec-heading">
                            <h2 class="">
                                Connect with Our Experts Today!
                            </h2>
                        </div>
                        <ul class="contact-ul org">
                            <li>
                                <img src="assets/images/cont1-black.webp" alt="">
                                <a href="javascript:;"> live Chat</a>
                            </li>
                            <li>
                                <img src="assets/images/cont2-black.webp" alt="">
                                <a href="tel:<?php echo $phone;?>">
                                    <?php echo $phone;?>                                    <span>Call us now</span>
                                </a>
                            </li>

                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <?php include("includes/platforms.php");?>
    <?php include("includes/testimonials.php");?>
    <?php include("includes/cta2.php");?>



    <?php include('includes/footer.php');?>                        
    <?php include('includes/scripts.php');?>                        
    

</body>





</html>