<!DOCTYPE html>
<html lang="en">

<head>
    <title>
    Wowfix laptops
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

        .wowfix-404_main {
            min-height: 50vh;
            background: url(<?php echo do_shortcode('[template_dir_img]404.png'); ?>) no-repeat;
            background-size: contain;
            background-position: center;
            margin: 30px 0;
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

            <img class="wowfix-404-error_logo" src=<?php echo do_shortcode('[template_dir_img]wowfix-logo.png'); ?> />

        </div>
        <div class="wowfix-404_main"></div>
        <div class="wowfix-404_footer">
            <h3 class="wowfix-404_text">Page not found!</h3>
            <p class="wowfix-404_sub-text">Oops! You've taken the road less travelled.</p>
            <a class="ww-btn" href="/">Home</a>
        </div>
    </section>
</body>

</html>