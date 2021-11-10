<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wowfix Laptops & Services</title>

    <link rel="icon" href="<?php echo do_shortcode('[template_dir_img]favicon.png'); ?>" type="image/x-icon">

    <!-- Preconnect links -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <!-- CSS -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">

    <?php 
     wp_head(); 
    ?>

</head>

<body>
    <section class="ww-header">
        <div class="container bg-white">
            <div class="flex-parent ww-head__wrap">
                <div class="child-1-of-4">
                    <div class="ww-hamm mobile-only">
                        <div class="ww-hamm__bar1"></div>
                        <div class="ww-hamm__bar2"></div>
                        <div class="ww-hamm__bar3"></div>
                    </div>
                    <a href="/" class="ww-logo__wrap">
                        <img src=<?php echo do_shortcode('[template_dir_img]wowfix-logo.png'); ?> alt="Wowfix logo" class="ww-head__logo">
                    </a>
                </div>
                <div class="child-2-of-4">
                    <ul class="ww-menu__list">
                        <li><a href="/" class="ww-nav__link">Home</a></li>
                        <li><a href="/our-story/" class="ww-nav__link">Our Story</a></li>
                        <li><a href="/contact-us/" class="ww-nav__link">Contact us</a></li>
                    </ul>
                </div>
                <div class="child-1-of-4 text-right">
                    <a href="tel:919176655555" class="ww-btn outlined">+91 91766 55555</a>
                    <a href="tel:919176655555" class="ww-mobile">
                        <img src=<?php echo do_shortcode('[template_dir_img]phone.png'); ?>
                            alt="Call us">
                    </a>
                </div>
            </div>
        </div>
    </section>