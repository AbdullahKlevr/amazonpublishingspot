
<!doctype html>
<html lang="en">

<head>
<?php include("includes/var.php");?>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="icon" href="favicon.html" type="image/x-icon" />

<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<title>Amazon Publishing Service: Become a Published Author</title>
<meta name="keywords" content="">
<meta name="description" content="">


<?php include("includes/styles.php");?>


</head>

<script>
var isloading = true;

function removeLoading() {
    if (isloading) {
        $("head").append(`  `);

        $('.myLazy').each(function() {
            $(this).attr("src", $(this).attr('data-src'))
        })
        isloading = false
    }
}
$(document).mousemove(removeLoading)
$(document).on("touchmove", removeLoading)
setInterval(removeLoading, 5000);
</script>

<body>




    <?php include("includes/header.php")?>


    <section class="banner inner-banner inner-banner3 text-center">
        <div class="container" data-aos="--fade-up" data-aos-duration="1000">
            <div class="row align-items-center">
                <div class="col-md-12" data-aos="--fade-left" data-aos-duration="1200">
                    <h1 class="text-white">Terms & Condition</h1>
                    <p class="text-white pt-3">Please read the terms and conditions for more information about our
                        service.
                    </p>
                    <br>
                    <div class="trust">
                        <a href="javascript:;" onclick="setButtonURL();" class="btn btn-yellow">Start Project <i
                                class="fal fa-long-arrow-right font-size-xl"></i></a>
                        <a class="btn btn-black" href=" tel:<?php echo $phone;?>  "><i class="fas fa-phone-alt"></i> &nbsp; Call
                            Now</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- blog detail -->
    <section class="blog_details_sec_newwrp pb-0">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="heading1">
                        Terms & Conditions</h3>
                        <p class="para2">The following terms and conditions apply to projects undertaken by
                            <?php echo $url;?>
                        </p>
                        <h5 class="heading2">COPYRIGHT</h5>
                        <p class="para2">You will hold full copyright to the content that we will develop for you and
                            deliver as
                            per
                            the agreed terms. We will hold no copyright whatsoever on the content and you are free to
                            publish
                            and
                            use it as per your wish.
                        </p>
                        <h5 class="heading2">PAYMENT</h5>
                        <p class="para2">We charge 100% advance payment for all services mentioned on the website. All
                            transaction
                            charges and tax (as applicable) are to be borne by the client.
                        </p>
                        <h5 class="heading2">REVISIONS</h5>
                        <p class="para2">We offer unlimited number of revisions on delivered work, as long as the
                            requests
                            are
                            made
                            within 7 days of delivering the work, and in special cases, as long as the requests are made
                            within
                            14
                            days of delivering of work. All revision requests pertaining to customers order will be
                            completed as
                            per
                            the urgency of the order with 24 hours as standard minimum turnaround time.
                        </p>
                        <p class="para2">Revision turnaround time as per urgency is as follows:</p>
                        <ul style="text-align: left;">
                            <li>For orders up to 24 hours of urgency; Revision turnaround time would be 24 hours.</li>
                            <li>For orders between 24-48 hours of urgency; Revision turnaround time would be 48 hours.
                            </li>
                            <li>For orders of 48 hours and above; Revision turnaround time would be 72 hours.</li>
                        </ul>
                        <h5 class="heading2">PROJECT REQUIREMENTS</h5>
                        <p class="para2">Any project requirements will be discussed with the clients before the start of
                            a
                            project.
                            Service level disputes will be addressed based on the agreed terms and requirements at the
                            beginning
                            of
                            a project, these terms and conditions, as well as reasonable business practices.
                        </p>
                        <h5 class="heading2">REFUND POLICY</h5>
                        <p class="para2">You may claim a full refund of your amount before we have started working on
                            your
                            project.
                            However, once the work has started on a project the refund will be processed after deducting
                            any
                            applicable transaction charges from the amount. Refund requests will not be accepted if you
                            sign
                            up
                            using a limited time or discounted promotion.
                        </p>
                        <p class="para2">A refund request can be submitted if you are not satisfied with any product or
                            service
                            provided by <?php echo $brand;?>within 5 days of your order completion. Certain
                            percentage
                            based
                            refund would be granted if we are unable to provide required service through our unlimited
                            revision
                            policy. If no refund request is received within five days after your order has been
                            delivered,
                            your
                            satisfaction over the delivered order shall be assumed by both the parties.
                        </p>
                        <h5 class="heading2">TERM OF USE OF THIS WEBSITE</h5>
                        <ul style="menu">
                            <li>The information provided on <?php echo $url;?> includes, but is not
                                limited to,
                                the
                                services provided by the company and does not render any advice, certifications,
                                guarantees
                                or
                                warranties.
                            </li>
                            <li>The company or any of its affiliates or associates or employees shall not be in any way
                                responsible
                                for any loss or damage that may arise to any person from any inadvertent error in the
                                information
                                contained in this website.
                            </li>
                            <li>The company and its affiliates and associates shall not be liable, at any time, for any
                                failure
                                of
                                performance, error, omission, interruption, deletion, defect, delay in operation or
                                transmission,
                                computer virus, communications line failure, theft or destruction or unauthorized access
                                to,
                                alteration of, or use of information contained on the website.
                            </li>
                            <li>You agree to defend, indemnify, and hold the company and its subsidiaries, affiliates,
                                officers,
                                agents, and employees, harmless from and against any claims, liabilities, damages,
                                losses,
                                and
                                expenses, arising out of or in any way connected with (i) your access to or use of the
                                website
                                and
                                the services therein; (ii) your violation of these Terms of Use; (iii) your violation of
                                any
                                third
                                party right, including without limitation any intellectual property right, publicity,
                                confidentiality, property or privacy right.
                            </li>
                            <li>This Agreement or your use of this Site does not constitute any joint venture,
                                partnership,
                                employment or agency relationship between you and the company.
                            </li>
                            <p class="para2">The representatives may use the pseudo names depending on which region they
                                are
                                interacting in
                                order to facilitate and do a better communication with our customers because we deal in
                                the
                                global
                                market.
                            </p>
                        </ul>
                </div>
            </div>
        </div>
    </section>
    <section class="blog_details_sec_newwrp">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="heading2">Email & Mobile Phone Policy</h2>
                    <p class="para2">This policy outlines the terms and conditions regarding the use of email and
                        mobile
                        phone contact information provided to <?php echo $brand;?>.
                    </p>
                    <h5 class="heading2">1. Consent and Usage</h5>
                    <p class="para2">By providing your email address and/or mobile phone number, you consent to
                        receive
                        communication from <?php echo $brand;?>. This includes, transitional messages, periodic
                        updates
                        about your service or project, updates, newsletters, and services delivery e.g. Design
                        attachments,
                        Project updates and Revisions update.
                    </p>
                    <h5 class="heading2">2. Carrier Charges Disclosure</h5>
                    <p class="para2">Standard messaging and data rates may apply. Please consult your mobile service
                        carrier
                        for details.
                    </p>
                    <h5 class="heading2">3. Stop & Unsubscribe</h5>
                    <p class="para2">If you wish to stop receiving emails or mobile communications, you can:</p>
                    <p class="para2">• For emails, click the "unsubscribe" link located at the bottom of any email
                        you
                        receive from us.
                    </p>
                    <p class="para2">• For mobile communications, reply "STOP" or “Unsub” “Unsubcribe” to any SMS
                        message
                        you receive from us. The SMS will will be stopped right away.
                    </p>
                    <h5 class="heading2">4. Frequency of Communication</h5>
                    <p class="para2">We will strive to limit the frequency of our communications to a reasonable
                        level.
                        However, there may be exceptions during special update about project or urgent
                        notifications.
                    </p>
                    <h5 class="heading2">5. Security of Information</h5>
                    <p class="para2">Your email address and mobile phone number will be kept confidential and will
                        not
                        be
                        shared with third parties without your explicit consent, except as required by law.
                    </p>
                    <h5 class="heading2">6. Changes to Policy</h5>
                    <p class="para2"> <?php echo $brand;?>reserves the right to modify this policy at any time.
                        Any
                        changes will be posted on our website, and it is your responsibility to review these
                        changes.
                    </p>
                    <h5 class="heading2">7. Contact Us</h5>
                    <p class="para2">If you have any questions or concerns regarding this policy, please contact us
                        at
                        <?php echo $email;?> .
                    </p>
                </div>
            </div>
        </div>
    </section>


    <?php include("includes/footer-form.php");?>


    <?php include("includes/footer.php");?>
    <?php include("includes/scripts.php");?>


</body>

</html>