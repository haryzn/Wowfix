<?php
get_header();
?>

    <section class="ww-hero">
        <div class="container">
            <h1 class="ww-hero__head text-center">
                Chennai's most Trusted Laptop Repair Experts
            </h1>
        </div>
    </section>

    <section class="ww-features">
        <div class="container">
            <div class="ww-form text-center">
                <form
                    action="https://docs.google.com/forms/d/e/1FAIpQLSfjXpcVQwY4EKWELMtETmtNSd82mwSQUlZ4Ex2Wt29-0XPp6g/formResponse"
                    novalidate id="wowSubmit" name="wow-google">
                    <div class="ww-form__scene active" form-step="1">
                        <h2 class="ww-features__head">Select your device to get started now!</h2>
                        <div class="ww-form__inner">
                            <div class="ww-form__group flex-parent">
                                <div class="child-3-of-4 text-left">
                                    <label for="brand">
                                        <select name="brand" id="brands">
                                            <option value="-1">Select your laptop brand</option>
                                            <option value="Dell">Dell</option>
                                            <option value="HP">HP</option>
                                            <option value="Lenovo">Lenovo</option>
                                            <option value="Acer">Acer</option>
                                            <option value="Asus">Asus</option>
                                            <option value="Apple">Apple</option>
                                            <option value="Sony Vaio">Sony Vaio</option>
                                            <option value="Samsung">Samsung</option>
                                            <option value="Toshiba">Toshiba</option>
                                            <option value="Fujitsu">Fujitsu</option>
                                            <option value="Mi">Mi</option>
                                            <option value="Others">Others</option>
                                        </select>
                                    </label>
                                    <p class="sceneError">Please choose your laptop brand</p>
                                </div>
                                <div class="child-1-of-4">
                                    <button type="button" class="ww-btn ww-next" data-item="1">Next</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="ww-form__scene" form-step="2">
                        <h2 class="ww-features__head">Find your laptop problem</h2>
                        <div class="ww-form__inner">
                            <div class="ww-form__group flex-parent">
                                <div class="child-3-of-4 text-left">
                                    <label for="problem">
                                        <select name="problem" id="problem">
                                            <option value="-1">Choose your issue</option>
                                            <option value="Adapter Not Working">Adapter Not Working</option>
                                            <option value="Battery Not Working">Battery Not Working</option>
                                            <option value="Dead Condition">Dead Condition</option>
                                            <option value="Display Broken or Not Working">Display Broken or Not Working</option>
                                            <option value="Freezing or Restarting">Freezing or Restarting</option>
                                            <option value="General Services">General Services</option>
                                            <option value="Keyboard Not Working">Keyboard Not Working</option>
                                            <option value="Laptop Hinges Broken">Laptop Hinges Broken</option>
                                            <option value="Laptop Panel Broken">Laptop Panel Broken</option>
                                            <option value="Liquid Spill">Liquid Spill</option>
                                            <option value="OS Not Booting">OS Not Booting</option>
                                            <option value="Laptop Mic Not Working">Laptop Mic Not Working</option>
                                            <option value="Over Heating Issue">Over Heating Issue</option>
                                            <option value="Password Recovery">Password Recovery</option>
                                            <option value="Power on No Display">Power on No Display</option>
                                            <option value="RAM Upgradation">RAM Upgradation</option>
                                            <option value="Speaker Not Working">Speaker Not Working</option>
                                            <option value="SSD Upgradation">SSD Upgradation</option>
                                            <option value="Touchpad Not Working">Touchpad Not Working</option>
                                            <option value="Webcam Not Working">Webcam Not Working</option>
                                            <option value="Wifi / LAN / Bluetooth Not Working">Wifi / LAN / Bluetooth Not Working</option>
                                        </select>
                                    </label>
                                    <p class="sceneError">Kindly choose your problem</p>
                                </div>
                                <div class="child-1-of-4">
                                    <button type="button" class="ww-btn ww-next" data-item="2">Next</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="ww-form__scene" form-step="3">
                        <h2 class="ww-features__head">Please enter your Name and Mobile number to confirm</h2>
                        <div class="ww-form__inner">
                            <div class="ww-form__group flex-parent">
                                <div class="child-4-of-4 text-left">
                                    <label for="name">
                                        <input name="name" id="name" placeholder="Enter your name" />
                                        <p class="sceneError name">Please enter your name</p>
                                    </label>
                                </div>
                            </div>
                            <div class="ww-form__group flex-parent">
                                <div class="child-4-of-4 text-left">
                                    <label for="phone">
                                        <span class="ww-phone__prefix">+91</span>
                                        <input name="phone" id="phoneNumber" placeholder="Enter your phone number" />
                                        <p class="sceneError phone">Please enter your phone number so that we can
                                            contact</p>
                                    </label>
                                </div>
                            </div>
                            <div class="flex-parent ww-form__review">
                                <div class="child-1-of-4 ww-form__brand-chosen">
                                    <img src=<?php echo do_shortcode('[template_dir_img]enovo.png') ?> alt="lenovo logo">
                                </div>
                                <div class="child-3-of-4 ww-form__brand-issue">
                                    <p>Display Broken or not working</p>
                                </div>
                            </div>
                            <div class="child-1-of-4 text-center ww-submit__wrap">
                                <input type="submit" class="ww-btn ww-next" id="finalSubmit" data-item="3">
                            </div>
                        </div>
                    </div>
                </form>
                <div class="ww-form__scene" form-step="4">
                    <div class="loader"></div>
                    <div class="ww-form__success-message">
                        <img src=<?php echo do_shortcode('[template_dir_img]smiley.png') ?> alt="Wow we have reached an agreement"
                            class="ww-thank__smile">
                        <h2 class="ww-features__head ww-thankyou">Thankyou for contacting us. Our customer support
                            representative will contact you shortly.</h2>
                    </div>
                </div>

                <div class="ww-form__step-dots">
                    <span data-target="1" class="active"></span>
                    <span data-target="2"></span>
                    <span data-target="3"></span>
                </div>
            </div>
            <h2 class="ww-features__head text-center">
                Know why we are experts
            </h2>
            <div class="flex-parent  ww-features__box-parent">
                <div class="child-1-of-3 text-center ww-features__box">
                    <div class="ww-features__icon">
                        <img src=<?php echo do_shortcode('[template_dir_img]check.png') ?> alt="Qualified Technicians">
                    </div>
                    <h3>Qualified Technicians</h3>
                    <p>All our technicians are qualified and certified. Most of the engineers are almost 5+ years
                        Experencied</p>
                </div>
                <div class="child-1-of-3 text-center ww-features__box">
                    <div class="ww-features__icon">
                        <img src=<?php echo do_shortcode('[template_dir_img]award.png') ?> alt="Warranty">
                    </div>
                    <h3>Warranty</h3>
                    <p>All our Repair comes with a standard warranty. So WHY Wait? Call us now to Fix your Laptop</p>
                </div>
                <div class="child-1-of-3 text-center ww-features__box">
                    <div class="ww-features__icon">
                        <img src=<?php echo do_shortcode('[template_dir_img]time.png') ?> alt="Timely Service">
                    </div>
                    <h3>Timely Service</h3>
                    <p>On Most Cases, We deliver the laptop the very same day, worst senario on the next business day.
                    </p>
                </div>
            </div>
        </div>
    </section>
    <section class="ww-story info">
        <div class="container">
            <div class="ww-info_wrapper">
                <div class="flex-parent ww-info_item no-border">
                    <div class="child-1-of-4">
                        <h3 style="margin-bottom: 30px;">Frequently asked Questions</h3>
                    </div>
                    <div class="child-3-of-4 ww-faq__home">
                        <h4 class="ww-faq__head open">Adapter Not Working <img src=<?php echo do_shortcode('[template_dir_img]arrow-down.png') ?>></h4>
                        <p>It is a long established fact that a reader will be distracted by the readable content of a
                            page when looking at its layout.</p>
                        <h4 class="ww-faq__head">Battery Not Working <img src=<?php echo do_shortcode('[template_dir_img]arrow-down.png') ?>></h4>
                        <p>It is a long established fact that a reader will be distracted by the readable content of a
                            page when looking at its layout.</p>
                        <h4 class="ww-faq__head">Dead Condition <img src=<?php echo do_shortcode('[template_dir_img]arrow-down.png') ?>></h4>
                        <p>It is a long established fact that a reader will be distracted by the readable content of a
                            page when looking at its layout.</p>
                        <h4 class="ww-faq__head">Display Broken or Not Working <img src=<?php echo do_shortcode('[template_dir_img]arrow-down.png') ?>></h4>
                        <p>It is a long established fact that a reader will be distracted by the readable content of a
                            page when looking at its layout.</p>
                        <h4 class="ww-faq__head">Freezing or Restarting <img src=<?php echo do_shortcode('[template_dir_img]arrow-down.png') ?>></h4>
                        <p>It is a long established fact that a reader will be distracted by the readable content of a
                            page when looking at its layout.</p>
                        <h4 class="ww-faq__head">General Services <img src=<?php echo do_shortcode('[template_dir_img]arrow-down.png') ?>></h4>
                        <p>It is a long established fact that a reader will be distracted by the readable content of a
                            page when looking at its layout.</p>
                        <h4 class="ww-faq__head">Keyboard Not Working <img src=<?php echo do_shortcode('[template_dir_img]arrow-down.png') ?>></h4>
                        <p>It is a long established fact that a reader will be distracted by the readable content of a
                            page when looking at its layout.</p>
                        <h4 class="ww-faq__head">Laptop Hinges Broken <img src=<?php echo do_shortcode('[template_dir_img]arrow-down.png') ?>></h4>
                        <p>It is a long established fact that a reader will be distracted by the readable content of a
                            page when looking at its layout.</p>
                        <h4 class="ww-faq__head">Laptop Panel Broken <img src=<?php echo do_shortcode('[template_dir_img]arrow-down.png') ?>></h4>
                        <p>It is a long established fact that a reader will be distracted by the readable content of a
                            page when looking at its layout.</p>
                        <h4 class="ww-faq__head">Liquid Spill <img src=<?php echo do_shortcode('[template_dir_img]arrow-down.png') ?>></h4>
                        <p>It is a long established fact that a reader will be distracted by the readable content of a
                            page when looking at its layout.</p>
                        <h4 class="ww-faq__head">OS Not Booting <img src=<?php echo do_shortcode('[template_dir_img]arrow-down.png') ?>></h4>
                        <p>It is a long established fact that a reader will be distracted by the readable content of a
                            page when looking at its layout.</p>
                        <h4 class="ww-faq__head">Laptop Mic Not Working <img src=<?php echo do_shortcode('[template_dir_img]arrow-down.png') ?>></h4>
                        <p>It is a long established fact that a reader will be distracted by the readable content of a
                            page when looking at its layout.</p>
                        <h4 class="ww-faq__head">Over Heating Issue <img src=<?php echo do_shortcode('[template_dir_img]arrow-down.png') ?>></h4>
                        <p>It is a long established fact that a reader will be distracted by the readable content of a
                            page when looking at its layout.</p>
                        <h4 class="ww-faq__head">Password Recovery <img src=<?php echo do_shortcode('[template_dir_img]arrow-down.png') ?>></h4>
                        <p>It is a long established fact that a reader will be distracted by the readable content of a
                            page when looking at its layout.</p>
                        <h4 class="ww-faq__head">Power on No Display <img src=<?php echo do_shortcode('[template_dir_img]arrow-down.png') ?>></h4>
                        <p>It is a long established fact that a reader will be distracted by the readable content of a
                            page when looking at its layout.</p>
                        <h4 class="ww-faq__head">RAM Upgradation <img src=<?php echo do_shortcode('[template_dir_img]arrow-down.png') ?>></h4>
                        <p>It is a long established fact that a reader will be distracted by the readable content of a
                            page when looking at its layout.</p>
                        <h4 class="ww-faq__head">Speaker Not Working <img src=<?php echo do_shortcode('[template_dir_img]arrow-down.png') ?>></h4>
                        <p>It is a long established fact that a reader will be distracted by the readable content of a
                            page when looking at its layout.</p>
                        <h4 class="ww-faq__head">SSD Upgradation <img src=<?php echo do_shortcode('[template_dir_img]arrow-down.png') ?>></h4>
                        <p>It is a long established fact that a reader will be distracted by the readable content of a
                            page when looking at its layout.</p>
                        <h4 class="ww-faq__head">Touchpad Not Working <img src=<?php echo do_shortcode('[template_dir_img]arrow-down.png') ?>></h4>
                        <p>It is a long established fact that a reader will be distracted by the readable content of a
                            page when looking at its layout.</p>
                        <h4 class="ww-faq__head">Webcam Not Working <img src=<?php echo do_shortcode('[template_dir_img]arrow-down.png') ?>></h4>
                        <p>It is a long established fact that a reader will be distracted by the readable content of a
                            page when looking at its layout.</p>
                        <h4 class="ww-faq__head">Wifi / LAN / Bluetooth Not Working <img src=<?php echo do_shortcode('[template_dir_img]arrow-down.png') ?>></h4>
                        <p>It is a long established fact that a reader will be distracted by the readable content of a
                            page when looking at its layout.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="ww-carousel__wrapper">
        <div class="container">
            <div class="main-carousel">
                <div class="ww-carosuel__item carousel-cell">
                    <img src="assets/images/Star.png" alt="Star testimonial" class="ww-star">
                    <p class="ww-carousel__dialog">
                        I have been doing business with this team for many years and I need to stress that their
                        professional approach and value for time & money is really commendable... Keep up the good
                        work... Kudos to Gowtham & Team...
                    </p>
                    <div class="ww-dialog__info">
                        <p class="ww-dialog__author">
                            <span>Krishnan A K R</span>
                        </p>
                    </div>
                </div>
                <div class="ww-carosuel__item carousel-cell">
                    <img src="assets/images/Star.png" alt="Star testimonial" class="ww-star">
                    <p class="ww-carousel__dialog">
                        The service provided was really good with affordable price. A One stopastop solution for all
                        your laptop needs. Overall was a good service!
                    </p>
                    <div class="ww-dialog__info">
                        <p class="ww-dialog__author">
                            <span>Yuva Shree</span>
                        </p>
                    </div>
                </div>
                <div class="ww-carosuel__item carousel-cell">
                    <img src="assets/images/Star.png" alt="Star testimonial" class="ww-star">
                    <p class="ww-carousel__dialog">
                        Done good analysis and solved my laptop issue. Very good professional approach
                    </p>
                    <div class="ww-dialog__info">
                        <p class="ww-dialog__author">
                            <span>Vasanth Kumar</span>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php
get_footer();
?>
