<!DOCTYPE html>
<html>
    <head>
        <title>Nieuwburg</title>
        <meta charset="utf-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="icon" href="images/ms-icon-310x310.png" type="image/x-icon">
        
        <link rel="stylesheet" type="text/css" media="screen"href="css/main.css">
        <link rel="stylesheet" type="text/css" media="screen"href="css/mobile.css">
        <link rel="stylesheet" type="text/css" media="screen"href="css/contactForm.css">
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

        
        <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </head>
    <body>
        <header>
            <nav>
                <ul class="bars">
                    <li class="navBrand"><img src="images/nb_black.png"></li>
                    <div class="btn-group">
                        <button type="button" class="btn btn-secondary dropdown-toggle"
                            data-toggle="dropdown" data-display="static" aria-haspopup="true"
                            aria-expanded="false"><i class="fa fa-bars"></i></button>
                        <div class="dropdown-menu dropdown-menu-right">
                            <button class="dropdown-item" type="button"><a href="#sectionAbout">About us</a></button>
                            <button class="dropdown-item" type="button"><a href="#sectionServices">Services</a></button>
                            <button class="dropdown-item" type="button"><a href="#sectionGallery">Gallery</a></button>
                            <button class="dropdown-item" type="button"><a href="#sectionContact">Contact us</a></button>
                        </div>
                    </div>
                </ul>
                <ul class="flexView">
                    <li class="navBrand"><img src="images/nb_black.png"></li>
                    <div class="socialMediaHeader">
                        <span><a href="https://www.facebook.com/nasteelworks/" target="_blank"><i class="fa fa-facebook"></i></a></span>
                        <span><a href="#"><i class="fa fa-instagram"></i></a></span>
                        <span><a href="#"><i class="fa fa-twitter-square"></i></a></span>
                    </div>
                    <li><a href="#sectionAbout">About us</a></li>
                    <li><a href="#sectionServices">Services</a></li>
                    <li><a href="#sectionGallery">Gallery</a></li>
                    <li><a href="#sectionContact">Contact us</a></li>
                </ul>
            </nav>
        </header>
        <section class="banner">
            <div class="headerQuoteDiv">
                <h1 class="quote">The key to success is to start before you are ready.</h1>
                <p class="lead text-center">- Marie Forleo</p>
            </div>
        </section>
        <section class="about">
            <?php
                require_once("aboutUs.php");
            ?>
        </section>
        <section class="services">
            <?php
                require_once("services.php");
            ?>
        </section>
        <section class="gallery">
            <?php
                require_once("gallery.php")
            ?>
        </section>
        <section class="contact">
            <?php
                require_once("contactUs.php")
            ?>
        </section>
        <?php
            require_once "footer.php"
        ?>
        <script type="text/javascript" src="js/autoScroll.js"></script>