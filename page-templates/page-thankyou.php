<?php /* Template Name: Thank you */ ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>
    Wowfix laptops | Thankyou
    </title>
    <?php
    wp_head()
    ?>
    <style>

        .wowfix-404 {
            position: absolute;
            left: 0;
            right: 0;
            top: 0;
            bottom: 0;
            text-align: center;
        }

        .wowfix-404_logo-wrap {
            padding: 20px;
        }

        .wowfix-404_text {
            font-weight: 300;
            color: #202528;
            font-size: 56px;
        }

        .wowfix-404_sub-text {
            margin: 15px 0;
            color: #768791;
            font-size: 16px;
            line-height: 22px;
            text-align: center;
        }

        .wowfix-404_btn {
            display: inline-block;
            margin-top: 15px;
            padding: 10px 20px;
            border-radius: 30px;
            background-color: #384045;
            box-shadow: 0 2px 6px 0 rgba(0, 0, 0, 0.2);
            color: #fff;
            text-decoration: none;
        }

        .wowfix-404_btn:hover {
            color: #fff;
        }

        .wowfix-404-error_logo {
            max-height: 60px;
        }

        @media only screen and (max-width : 812px) {
            .wowfix-404_text {
                font-size: 36px;
            }
        }
    </style>
</head>

<body class="wowfix-support-center">
    <section class="wowfix-404">
        <div class="wowfix-404_logo-wrap">

        </div>
        <div>
        <div class="ww-form__success-message">
                        <img src=<?php echo do_shortcode('[template_dir_img]smiley.png') ?> alt="Wow we have reached an agreement"
                            class="ww-thank__smile">
                        <p class="ww-form__ref-no">Booking no: <b id="ww-booking__num">WW-123456</b></p>
                        <h2 class="ww-features__head ww-thankyou">Thankyou for contacting us. Our customer support
                            representative will contact you shortly.</h2>
                    </div>
        </div>
        <div class="wowfix-404_footer">
            <a class="ww-btn" href="/">Home</a>
        </div>
    </section>
</body>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        var params = new URLSearchParams(window.location.search)
        for (var param of params) {
            document.getElementById('ww-booking__num').innerText = param[1]
            document.getElementsByClassName('ww-form__success-message')[0].style.display = 'block'
        }
    });
</script>

</html>