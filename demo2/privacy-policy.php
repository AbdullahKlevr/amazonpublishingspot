
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

    <section class="blog_details_sec_newwrp pb-0">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h3 class="heading1">Privacy Policy</h3>
                    <p class="para2">Privacy policy helps you and us both in keeping your information confidential. Our
                        privacy
                        policy will help in understanding the process we follow to maintain your privacy during and
                        after the
                        work process.
                    </p>
                    <h2 class="heading2">USER INFORMATION</h2>
                    <p class="para2">We may collect the following information for your identification and serene
                        collaboration.
                    </p>
                    <ul style="text-align: left;">
                        <li>Name, business name and job title.</li>
                        <li>Contact information including phone numbers, email address or website.</li>
                    </ul>
                    <p class="para2">We require this information to understand your needs and provide you with a better
                        service,
                        and in particular for the following reasons:
                    </p>
                    <ul style="text-align: left;">
                        <li>We may use the information to improve our products and services.</li>
                        <li>We may also use your information to contact you to provide feedback on our services.</li>
                        <li>We may use the information to customize the website according to your interests.</li>
                    </ul>
                    <h2 class="heading2">Security</h2>
                    <p class="para2">We are committed to ensuring that your information is secure. In order to prevent
                        unauthorized access or disclosure, we have put in place suitable physical, electronic and
                        managerial
                        procedures to safeguard and secure the information we collect online.
                    </p>
                    <ul style="text-align: left;">
                        <li>Information of clients at <?php echo $brand;?>is kept extremely secure during
                            transmission by the
                            use of the Secure Sockets Layer (SSL) Software which encrypts information that client puts
                            in.
                        </li>
                        <li> <?php echo $brand;?>follows generally accepted industry standards to protect the
                            personal
                            information that is being submitted by the client during transmission and once we receive
                            it.
                            However, since no method of transmission over the Internet, or method of electronic storage,
                            is 100%
                            secure, we despite using commercially acceptable means to protect your personal information
                            cannot
                            guarantee its absolute security.
                        </li>
                    </ul>
                    <h2 class="heading2">3RD PARTY SHARING</h2>
                    <ul style="text-align: left;">
                        <li>We do not divulge any Personal information to the third parties.</li>
                        <li>In no circumstances do we provide or sell personal information of our clients to the third
                            parties.
                        </li>
                        <li> <?php echo $brand;?>utilizes services of credit card processing companies to bill you
                            for
                            services. These companies never share, store, save or use exclusive information for any
                            other
                            purposes.
                        </li>
                    </ul>
                    <h2 class="heading2">COOKIES AND THEIR USE</h2>
                    <ul style="text-align: left; margin-bottom: 50px;">
                        <li>Cookies, alphanumeric identifiers, facilitate our systems to recognize the clients' browsers
                            and
                            storage of items in their Shopping Carts during visits.
                        </li>
                        <li>To prevent the browser from accept new cookies, disable cookies and notify the user when a
                            new
                            cookie is received, Help portion of the toolbar on most browsers becomes most instrumental.
                        </li>
                        <li>Normally clients do not restrict cookies as they allow you to take full advantage of the top
                            features at our site. Our study suggests that the clients leave cookies to be accepted.
                        </li>
                        <li> <?php echo $brand;?>keeps track of your IP address to help diagnose problems with our
                            server and
                            to administer our website. Your IP address is also used to gather broad demographic
                            information
                            about you, such as your location and your Internet service provider.
                        </li>
                        <li>Client's collective information on how our users are utilizing the site may be gathered.
                            This
                            information might include details vis-à-vis traffic patterns through the site and search
                            queries. No
                            IP address/log file information is tied to Personally Identifiable Information (PII).
                        </li>
                        <li>Information regarding browser types, access times, URLs through which people visit our site
                            and URLs
                            viewed by visitors while on our site is not accessible third parties, except in combined
                            form.
                        </li>
                        <p class="para2">In order to ensure the privacy of our valued customer we never store any sort
                            of
                            information related
                            to our clients neither we do take any cards information from client.
                        </p>
                    </ul>
                    <h2 class="heading2">Consumer Data Safety Measures </h2>
                    <p class="para2">We respect your right of privacy. We therefore do not share your name and contact
                        details
                        with any third party. Besides, we keep information provided by you as confidential. The
                        information you
                        provide are used only to understand your requirements and to improve our services to suit your
                        needs
                        rather effectively. We ensure to follow the standards set by PCI and consumer data protection.
                    </p>
                    <p class="para2">It is hereby declared that our company does not authorize its representatives to
                        collect
                        any confidential information from our customers i.e. credit card information etc. Accordingly we
                        advise
                        our customers not to share any confidential and sensitive nature information with our employees.
                        If you
                        do so; you shall be doing at your own risk and our company shall not be liable for any misuse.
                    </p>
                    <p class="para2">Your ordered work may be forwarded to any of our production or service centers
                        located
                        globally, for the quality delivery. However, they are also bound by an NDA to keep customer’s
                        information as highly confidential.
                    </p>
                    <h2 class="heading2">Pseudonym Policy </h2>
                    <p class="para2">We hold a policy of using the pseudonym to ensure the following:</p>
                    <p class="para2">With a view to avoid undue confusion and hassle at our customers end when they are
                        assigned
                        a new account manager, we use pseudonyms; it helps our customers remain connected with a single
                        point of
                        contact and remember their name comfortably.
                    </p>
                    <p>Moreover; as our staff comprises of people from different regions and cultures, hence the use of
                        pseudonym helps us present a uniform culture of the organization
                    </p>
                    <h2 class="heading2">1. Introduction</h2>
                    <p class="para2">This Privacy Policy explains how <?php echo $brand;?>collects, uses, and
                        protects the
                        email addresses and mobile numbers provided by users on our website. We are committed to
                        ensuring that
                        your privacy is protected and that we comply with all relevant data protection laws.
                    </p>
                    <h2 class="heading2">2. Information We Collect</h2>
                    <p class="para2">We may collect the following information:</p>
                    <p class="para2">• Mobile phone numbers</p>
                    <p class="para2">• Any additional information provided voluntarily by the user.</p>
                    <h2 class="heading2">3. How We Use the Information</h2>
                    <p class="para2">We use the collected mobile numbers for the following purposes:</p>
                    <p class="para2">• To send relevant updates related to our services.</p>
                    <p class="para2">• To notify users about account-related information.</p>
                    <p class="para2">• For internal record keeping.</p>
                    <h2 class="heading2">4. Consent for Mobile Number Collection</h2>
                    <p class="para2">By providing your mobile number on <?php echo $brand;?>, you consent to the
                        collection
                        and use of this information as outlined in this Privacy Policy.
                    </p>
                    <h2 class="heading2">5. Security</h2>
                    <p class="para2">We are committed to ensuring that your information is secure. To prevent
                        unauthorized
                        access or disclosure, we have put in place suitable physical, electronic, and managerial
                        procedures to
                        safeguard and secure the information we collect online.
                    </p>
                    <h2 class="heading2">6. Controlling Your Personal Information</h2>
                    <p class="para2">You may choose to restrict the collection or use of your mobile number in the
                        following
                        ways:
                    </p>
                    <p class="para2">• If you have previously agreed to us using your mobile number for direct marketing
                        purposes, you may change your mind at any time by contacting us at
                        <?php echo $email;?> .or
                        you can reply “STOP” or “Unsubscribe” to stop receiving the messages
                    </p>
                    <h2 class="heading2">7. Sharing Your Information</h2>
                    <p class="para2">We will not sell, distribute, or lease your personal information to third parties
                        unless we
                        have your permission or are required by law to do so.
                    </p>
                    <h2 class="heading2">8. Your Rights</h2>
                    <p class="para2">You have the right to request details of the personal information we hold about
                        you. If you
                        would like a copy of this information, please contact us at <?php echo $email;?> .
                    </p>
                    <h2 class="heading2">9. Changes to this Policy</h2>
                    <p class="para2"> <?php echo $brand;?>may change this policy from time to time by updating
                        this
                        page. You
                        should check this page periodically to ensure that you are comfortable with any changes.
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