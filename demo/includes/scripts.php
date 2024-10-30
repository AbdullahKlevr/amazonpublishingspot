<script src="assets/js/jquery.js"></script>
    <script>
    jQuery.event.special.touchstart = {
        setup: function(_, ns, handle) {
            this.addEventListener("touchstart", handle, {
                passive: !ns.includes("noPreventDefault")
            });
        }
    };
    jQuery.event.special.touchmove = {
        setup: function(_, ns, handle) {
            this.addEventListener("touchmove", handle, {
                passive: !ns.includes("noPreventDefault")
            });
        }
    };
    jQuery.event.special.wheel = {
        setup: function(_, ns, handle) {
            this.addEventListener("wheel", handle, {
                passive: true
            });
        }
    };
    jQuery.event.special.mousewheel = {
        setup: function(_, ns, handle) {
            this.addEventListener("mousewheel", handle, {
                passive: true
            });
        }
    };
    </script>
    <script src="assets/js/custom.js"></script>


    <div class="overlay"></div>
    <div class="popupmain" id="popstatic">
        <a id="close1" class="closeico" href="javascript:;" title=""><i class="fa fa-times"></i></a>
        <div class="brand-popup">
            <div class="popupimg">
                <img src="assets/images/popup-image.webp" alt="">
            </div>
            <div class="mmpopup">
                <div class="centercont static">
                    <h3><span class="fs-36 "> Get Your Quote Today ! </span></h3>

                    <p>Providing you the perfect solution for your business needs. Let's work
                        together and unlock doors to success.</p>
                </div>
                <div class="formpop">
                    <form id="" method="GET" action="">
                        <div class="row g-4 g-4">
                            <div class="col-md-6">
                                <div class="fld-input">
                                    <input type="text" id="name" name="popupname" placeholder="Name"
                                        required="required">
                                </div>
                                <div class="fld-input">
                                    <input type="email" id="email" name="popupemail" placeholder="Email Address"
                                        required="required">
                                </div>
                                <div class="fld-input">
                                    <input type="tel" id="phoneNum2" name="phone" placeholder="Phone Number" required
                                        class="phone-number" minlength="7" maxlength="14">
                                    <input type="hidden" name="leadsource" value="ghostwritingalpha">
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="fld-input fld-textarea">
                                    <textarea name="message" id="" cols="30" rows="5"
                                        placeholder="Enter a brief description about your book" required></textarea>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <label for="" class="checkbox-label">
                                    <input type="checkbox" required> To receive our weekly Newsletter/SMS and offers
                                    check here. You
                                    can unsubscribe at any time.
                                </label>
                            </div>
                            <div class="col-md-12">
                                <div class="fld-btn packageformsubmit">
                                    <button type="submit LoginUp">Submit Now <img src="assets/images/btn.png"
                                            alt=""></button>
                                </div>

                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>

    <div class="popupmain" id="popdynamic">
        <a id="close1" class="closeico" href="javascript:;" title=""><i class="fa fa-times"></i></a>
        <div class="brand-popup">
            <div class="popupimg">
                <img src="assets/images/popup-image.webp" alt="">
            </div>
            <div class="mmpopup">
                <div class="centercont dynamic d-none">
                    <h3><span> </span></h3>
                    <h4>starting at <span>$49</span> only</h4>
                    <p>Providing you the perfect solution for your business needs. Let's work
                        together and unlock doors to success.</p>
                </div>
                <div class="formpop">
                    <form id="" method="GET" action="">
                        <div class="row g-4 g-4">
                            <div class="col-md-6">
                                <div class="fld-input">
                                    <input type="text" id="name" name="popupname" placeholder="Name"
                                        required="required">
                                </div>
                                <div class="fld-input">
                                    <input type="email" id="email" name="popupemail" placeholder="Email Address"
                                        required="required">
                                </div>
                                <div class="fld-input">
                                    <input type="tel" id="phoneNum2" name="phone" placeholder="Phone Number"
                                        required="required" class="phone-number" minlength="7" maxlength="14">
                                    <input type="hidden" name="leadsource" value="ghostwritingalpha">
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="fld-input fld-textarea">
                                    <textarea name="message" id="" cols="30" rows="5"
                                        placeholder="Enter a brief description about your book" required></textarea>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <label for="" class="checkbox-label">
                                    <input type="checkbox" required> To receive our weekly Newsletter/SMS and offers
                                    check here. You
                                    can unsubscribe at any time.
                                </label>
                            </div>
                            <div class="col-md-12">
                                <div class="fld-btn packageformsubmit">
                                    <button type="submit LoginUp">Submit Now <img src="assets/images/btn.png"
                                            alt=""></button>
                                </div>

                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
    <div class="floatbutton">
        <div class="btns_wrap chat_new">
            <a href="javascript:;" class="call_wrap" onclick="setButtonURL()">

                <span class="icoo"><i class="fa-solid fa-envelope"></i></span>
                <span>Live Chat</span>
            </a>
        </div>

        <div class="btns_wrap">
            <a href="tel:<?php echo $phone;?>" class="call_wrap">
                <span class="icoo"><i class="fa-solid fa-phone"></i></span>
                <span><?php echo $phone;?></span>
            </a>
        </div>
        <div class="clickbutton">
            <div class="crossplus"> 85% Off on All Services</div>

        </div>
        <div class="banner-form">
            <h3 class="text-center"><strong>
                    Signup Now To Get 85% Discount
                </strong></h3>
            <div class="banform">
                <div class="row">
                    <div class="ban-form">
                        <form action="" method="GET">
                            <div class="row g-3">
                                <div class="col-lg-12">
                                    <div class="fldset">
                                        <input class="form-control" name="popupname" type="text"
                                            placeholder="Enter your name*" required="">
                                    </div>
                                </div>


                                <div class="col-lg-12">
                                    <div class="fldset">
                                        <input class="form-control" name="popupemail" type="text"
                                            placeholder="Enter your email*" required="">
                                    </div>
                                </div>

                                <div class="col-lg-12">
                                    <div class="fldset">
                                        <input name="phone" class="form-control" type="text"
                                            placeholder="Enter your number*" required="">
                                    </div>
                                </div>

                                <div class="col-lg-12">
                                    <div class="fldset">
                                        <textarea name="message" class="form-control"
                                            placeholder="Write your message"></textarea>
                                        <input type="hidden" name="leadsource" value="ghostwritingalpha">
                                    </div>
                                </div>

                            </div>
                            <button type="submit" class="book-call-btn">Submit </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <a href="tel:<?php echo $phone;?>" class="whatsapp" aria-label="phone"><i class="fa-solid fa-phone"></i></a>
    
    <!--Start of Tawk.to Script-->
    <!--<script type="text/javascript">-->
    <!--var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();-->
    <!--(function(){-->
    <!--var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];-->
    <!--s1.async=true;-->
    <!--s1.src='https://embed.tawk.to/65fb303c1ec1082f04d97bfd/1hpej8ru8';-->
    <!--s1.charset='UTF-8';-->
    <!--s1.setAttribute('crossorigin','*');-->
    <!--s0.parentNode.insertBefore(s1,s0);-->
    <!--})();-->
    
    <!--function setButtonURL(){-->
    <!--   Tawk_API.toggle();-->
    <!--}-->
    <!--</script>-->
    <!--End of Tawk.to Script-->
<script
src='//fw-cdn.com/11540263/4198495.js'
chat='true'>
</script>
<script>
var timeInMillis = 5000;
setTimeout(function() {
    window.fcWidgetMessengerConfig = {
        open: true
    }
    window.fcWidget.open();
}, timeInMillis);
</script>
