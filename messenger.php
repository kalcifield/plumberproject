<?php
include_once 'header.php'
?>

    <section id="inner-headline">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2 class="pageTitle">Kérdésed van?</h2>
                </div>
            </div>
        </div>
    </section>
    <section id="content">

        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div><h2>Írj nekünk</h2>Kapcsolatba léphetsz velünk a megadott <a href="contact.php">elérhetőségeinken</a>
                        vagy írhatsz nekünk az alábbi felületen. <br> <br>Minden mezőt kötelező kitölteni.
                    </div>
                    <br>
                </div>
            </div>

            <div class="row">
                <div class="col-md-5">
                    <!-- To configure the contact form email address, go to mail/contact_me.php and update the email address in the PHP file on line 19. -->
                    <!-- The form should work on most web servers, but if the form is not working you may need to configure your web server differently. -->
                    <form name="sentMessage" id="contactForm" novalidate="novalidate">
                        <div class="control-group">
                            <div class="form-group floating-label-form-group controls mb-0 pb-2">
                                <label>Teljes név</label>
                                <input class="form-control" id="name" type="text" placeholder="" required="required"
                                       data-validation-required-message="Please enter your name.">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="control-group">
                            <div class="form-group floating-label-form-group controls mb-0 pb-2">
                                <label>Email cím</label>
                                <input class="form-control" id="email" type="email" placeholder=""
                                       required="required"
                                       data-validation-required-message="Please enter your email address.">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="control-group">
                            <div class="form-group floating-label-form-group controls mb-0 pb-2">
                                <label>Telefonszám</label>
                                <input class="form-control" id="phone" type="tel" placeholder=""
                                       required="required"
                                       data-validation-required-message="Please enter your phone number.">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="control-group">
                            <div class="form-group floating-label-form-group controls mb-0 pb-2">
                                <label>Üzenet</label>
                                <textarea class="form-control" id="message" rows="5" placeholder=""
                                          required="required"
                                          data-validation-required-message="Please enter a message."></textarea>
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <br>
                        <div id="success"></div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary btn-xl" id="sendMessageButton">Küldés</button>
                        </div>
                    </form>
                </div>
            </div>

    </section>

<?php
include_once 'footer.php'
?>