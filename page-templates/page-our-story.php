<?php /* Template Name: Our Story */ ?>

<?php
get_header();
?>
    <section class="ww-hero__intro">
        <div class="container text-center">
            <h1 class="ww-hero__head-intro text-center">
                Our Story
            </h1>
        </div>
    </section>
    <section class="ww-story">
        <div class="container">
            <div class="ww-form__group flex-parent flex-start">
                <div class="child-2-of-4">
                    <img src=<?php echo do_shortcode('[template_dir_img]wow-team.png') ?> alt="wowfix team" style="border-radius:20px;">
                </div>
                <div class="child-2-of-4 ww-story__inner">
                    <p>
                        At Wowfix, we come from humble beginnings.
                    </p>
                    <p>
                        We started off back in 2011 as a small unit and have grown into an experienced and strong team
                        of 35 technicians today.
                    </p>
                    <p>
                        Being in the business for over a decade, we have amassed over thousands of satisfied and happy
                        customers through dedicated and quality service, one laptop at a time. We cater to individual
                        clients as well as businesses across Chennai.
                    </p>
                    <p>
                        Our promises to our customers are two-fold. Reliability and Timeliness. We understand that in
                        the digital age, your laptop is an important asset. That is why we stay hyper-focussed on
                        rendering a speedy service with any compromise on the quality.
                    </p>
                    <p>
                        We demonstrate our reliability by sourcing only the original spares and accessories. Our
                        standard warranties ensure that you can reach out to us at any time for further assistant.
                    </p>
                    <a href="/" class="ww-schedule">
                        <b>Schedule a call with us →</b>
                    </a>
                </div>
            </div>
        </div>
    </section>
<?php
get_footer();
?>