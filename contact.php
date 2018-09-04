<?php include 'templates/head.php' ?>

<section id="contact">
    <!-- Contact Form-->
    <div id="contact-form-section" class="contact-form-section">
        <div class="white-bg">
            <div class="sec-head-container">
                <div class="sec-head-style">
                    <h2 class="section-title wow bounceInDown animated" style="visibility: visible; animation-name: bounceInDown;">
                        <span>Get In</span> Touch
                    </h2>
                    <!-- /.section-title -->

                    <div class="section-description">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto modi vel repudiandae
                        reiciendis, cupiditate quod voluptatibus,
                        placeat ad assumenda molestiae alias quisquam
                    </div>
                    <!-- /.section-description -->
                </div>
                <!-- /.sec-head-style -->
            </div>
            <!-- /.sec-head-container -->

            <div class="container">
                <div class="row">
                    <div class="contact-form-container">
                        <form id="contact-form" action="email.php" method="post" name="contactform">
                            <div class="col-md-6">
                                <div id="name_error" class="error">
                                    <img src="assets/images/email/error.png" alt="Error!">Please enter your name.</div>
                                <input id="name" class="form-control" name="name" type="text" placeholder=" Your Name"
                                    required="">

                                <div id="email_error" class="error">
                                    <img src="assets/images/email/error.png" alt="Error!">Please enter your valid
                                    E-mail ID.</div>
                                <input id="email" class="form-control" name="email" type="email" placeholder="Your Email"
                                    required="">

                                <div id="subject_error" class="error">
                                    <img src="assets/images/email/error.png" alt="Error!">Please enter the subject.</div>
                                <input id="subject" class="form-control" name="subject" type="text" placeholder="Subject"
                                    required="">
                            </div>
                            <!-- /.col-md-6 -->

                            <div class="col-md-6">
                                <div id="message_error" class="error">
                                    <img src="assets/images/email/error.png" alt="Error!">Please enter your message.</div>
                                <textarea id="your_message" class="form-control" name="your_message" placeholder="Your Message"
                                    rows="4" required=""></textarea>

                                <div id="submit">
                                    <button type="submit" id="send_message" class="btn btn-sm btn-default full-width btn-effect">Send
                                        Message</button>
                                </div>
                                <!-- /#submit -->
                            </div>
                            <!-- /.col-md-6 -->
                            <div class="col-md-12">
                                <div id="mail_success" class="success">
                                    <img src="assets/images/email/success.png" alt="Success!">Your message has been
                                    sent successfully.</div>
                                <div id="mail_fail" class="error">
                                    <img src="assets/images/email/error.png" alt="Error!"> Sorry, error occurred this
                                    time sending your message.
                                </div>
                            </div>
                            <!-- /.col-md-12 -->
                        </form>
                        <!-- /#contact-form -->
                    </div>
                    <!-- /.contact-form-container -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container -->
        </div>
        <!-- /.white-bg -->
    </div>
    <!-- /#contact-form-section -->
    <!-- Contact Form End-->

    <!-- Contact Details End-->
    <div id="contact-details">
        <div class="gray-bg contact-details">
            <div class="container">
                <div class="row">
                    <h3 class="text-center title">Contact Details</h3>
                    <div class="contact-info">

                        <div class="col-md-3 col-sm-6 contact-info-box wow bounceInDown center animated" data-wow-delay=".2s"
                            style="visibility: hidden; animation-delay: 0.2s; animation-name: none;">

                            <span class="icon map-marker">
                                <i aria-hidden="true" class="li_location"> </i>
                            </span>
                            <p class="contact-details-title">Address</p>
                            <span class="texts">our adress
                                <br> our adress
                            </span>
                        </div>
                        <!-- /.contact-info-box -->

                        <div class="col-md-3 col-sm-6 contact-info-box wow bounceInDown center animated" data-wow-delay=".4s"
                            style="visibility: hidden; animation-delay: 0.4s; animation-name: none;">
                            <span class="icon envelope">
                                <i aria-hidden="true" class="li_mail"></i>
                            </span>
                            <p class="contact-details-title">Email</p>
                            <span class="texts">
                                <a href="#">hello@blue7.com</a>
                                <br>
                                <a href="#">info@blue7.com</a>
                            </span>
                        </div>
                        <!--  /.contact-info-box -->

                        <div class="col-md-3 col-sm-6 contact-info-box wow bounceInDown center animated" data-wow-delay=".6s"
                            style="visibility: hidden; animation-delay: 0.6s; animation-name: none;">
                            <span class="icon phone">
                                <i aria-hidden="true" class="li_phone"></i>
                            </span>
                            <p class="contact-details-title">Phone</p>
                            <span class="texts">+00 (000) 123 45678
                                <br> +00 (000) 123 45678
                            </span>
                        </div>
                        <!-- /.contact-info-box -->

                        <div class="col-md-3 col-sm-6 contact-info-box wow bounceInDown center animated" data-wow-delay=".8s"
                            style="visibility: hidden; animation-delay: 0.8s; animation-name: none;">
                            <span class="icon skype">
                                <i class="fa fa-skype"></i>
                            </span>
                            <p class="contact-details-title">Skype</p>
                            <span class="texts">
                                <a href="#">support.blue7@skype.com</a>
                                <br>
                                <a href="#">help.blue7@skype.com</a>
                            </span>
                        </div>
                        <!-- /.contact-info-box -->
                    </div>
                    <!-- /.contact-info -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container -->
        </div>
        <!-- /.gray-bg  /.contact-details -->
    </div>
    <!-- /#contact-details -->
    <!-- Contact Details End-->

</section>

<?php include 'templates/footer.php' ?>