<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php include "top-bar.php" ?>
</head>

<body>
    <?php include "header.php" ?>

    <!-- breadcrumb area -->
    <div class="breadcrumb-area breadcrumb-padding bg-img" style="background-image:url(assets/images/bg/bg-2.jpg)">
        <div class="container">
            <div class="breadcrumb-content text-center">
                <h2>Contact Us</h2>
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><i class="fa fa-angle-right"></i></li>
                    <li>Contact Us</li>
                </ul>
            </div>
        </div>
    </div>


    <!-- Project area -->
    <div class="section section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-md-6">
                    <div class="contact-info-wrap">
                        <div class="single-contact-info-wrap">
                            <div class="info-icon">
                                <i class="dlicon ui-1_home-51"></i>
                            </div>
                            <div class="info-content">
                                <h3 class="title">Address</h3>
                                <p class="width">303, infront of Axis Bank ATM, Husainabaad Lucknow 226003.
                                    Uttar Pradesh India</p>
                            </div>
                        </div>
                        <div class="single-contact-info-wrap">
                            <div class="info-icon">
                                <i class="dlicon ui-2_phone"></i>
                            </div>
                            <div class="info-content">
                                <h3 class="title">Phone</h3>
                                <p> Mobile: <span>9005554315</span></p>
                            </div>
                        </div>
                        <div class="single-contact-info-wrap">
                            <div class="info-icon">
                                <i class="dlicon ui-1_email-85"></i>
                            </div>
                            <div class="info-content">
                                <h3 class="title">Email</h3>
                                <p>ahmadbinqamar@gmail.com</p>
                            </div>
                        </div>
                        <div class="single-contact-info-wrap">
                            <div class="info-icon">
                                <i class="dlicon ui-2_share"></i>
                            </div>
                            <div class="info-content">
                                <h3 class="title">Follow us</h3>
                                <div class="social-icon-style mt-4">
                                    <a class="facebook" href="#"><i class="fa-brands fa-facebook"></i></a>
                                    <a class="twitter" href="#"><i class="fa-brands fa-twitter"></i></a>
                                    <a class="google-plus" href="#"><i class="fa-brands fa-google"></i></a>
                                    <a class="behance" href="#"><i class="fa-brands fa-linkedin"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7 col-md-6">
                    <div class="contact-from-wrap">
                        <form id="contact-form" action="https://whizthemes.com/mail-php/tasnim/mail.php" method="post">
                            <input name="name" type="text" placeholder="Name">
                            <input name="email" type="email" placeholder="Email">
                            <input name="subject" type="text" placeholder="Subject">
                            <textarea name="message" placeholder="Your message"></textarea>
                            <input class="submit" type="submit" value="Send Message">
                        </form>
                        <p class="form-messege"></p>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <?php include "footer.php" ?>
</body>

</html>