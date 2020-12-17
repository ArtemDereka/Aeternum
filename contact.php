<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/styles/reset.css">
    <link rel="stylesheet" href="/styles/style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@300;400;700&display=swap" rel="stylesheet">
    <title>Document</title>
    
</head>
<body>
    <header class="header">
        <div class="container">
            <div class="header__holder">
                <h1 class="header__name">aeternum.</h1>
                <ul class="header__menu display_none_Mobile" id="menu">
                    <li class="header__item">
                        <a href="/index.php" class="header__link">home</a>
                    </li>
                    <li class="header__item">
                        <a href="/about.php" class="header__link">ABOUT AETERNUM</a>
                    </li>
                    <li class="header__item">
                        <a href="/active.php" class="header__link">ACTIVE OWNERSHIP</a>
                    </li>
                    <li class="header__item">
                        <a href="/team.php" class="header__link">TEAM</a>
                    </li>
                    <li class="header__item">
                        <a href="/contact.php" class="header__link_active">CONTACT</a>
                    </li>
                    <div class="close" id="close"></div>
                </ul>
                <div class="hamburger" id="hamburger">
                </div>
            </div>
        </div>
    </header>

    <main class="contact">
        <section class="contact__content">
            <div class="contact__content_img">
                <div class="contact__content_white_holder">
                    <div class="contact__content_white"></div>
                </div>
                <div class="contact__content_block">
                    <h2 class="contact__content_name">CONTACT US.</h2>
                    <p class="contact__content_text">
                        In order to get in touch with us, please contact us on contact@aeternumcapital.no or reach out to Aeternum Capital’s Investment Director, Vegard Søraunet.
                    </p>
                </div>
                <div class="contact__content_grey"></div>
            </div>
            <div class="contact__content_green_Mobile"></div>
        </section>

        <section class="contact__connection">
            <div class="container">
                <div class="contact__connection_holder">
                    <h2 class="contact__connection_name">CONTACT INFORMATION.</h2>
                    <div class="team__about_person">
                        <div class="team__person_img_holder">
                            <div class="block__green_small"></div>
                            <img src="/images/Vegard Soeraunet_0010.png" alt="" class="team__person_img">
                        </div>
                        <h3 class="team__about_person_name">VEGARD SØRAUNET</h3>
                        <p class="team__about_person_position">Investment Director and Partner</p>
                        <div class="contact__connection_text_holder">
                            <p class="contact__connection_person_text">E-mail: vs@aeternumcapital.no</p>
                            <p class="contact__connection_person_text">Phone: +47 00 00 00 00</p>
                        </div>
                    </div>
                    <div class="team__about_person">                   
                        <div class="team__person_img_holder">
                            <div class="block__grey_small"></div>
                            <img src="/images/Vegard Soeraunet_0010.png" alt="" class="team__person_img">
                        </div>
                        <h3 class="team__about_person_name">VEGARD SØRAUNET</h3>
                        <p class="team__about_person_position">Investment Director and Partner</p>
                        <div class="contact__connection_text_holder">
                            <p class="contact__connection_person_text">E-mail: vs@aeternumcapital.no</p>
                            <p class="contact__connection_person_text">Phone: +47 00 00 00 00</p>
                        </div>
                    </div>
                    <div class="team__about_person">
                        <div class="team__person_img_holder">
                            <div class="block__darkgrey_small"></div>
                            <img src="/images/Vegard Soeraunet_0010.png" alt="" class="team__person_img">
                        </div>
                        <h3 class="team__about_person_name">VEGARD SØRAUNET</h3>
                        <p class="team__about_person_position">Investment Director and Partner</p>
                        <div class="contact__connection_text_holder">
                            <p class="contact__connection_person_text">E-mail: vs@aeternumcapital.no</p>
                            <p class="contact__connection_person_text">Phone: +47 00 00 00 00</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
        <section class="contact__map">
            <div class="contact__map_content">
                <h2 class="contact__map_name">WHERE TO FIND US.</h2>
                <div class="contact__map_text_holder">
                    <p class="contact__map_text">AETERNUM CAPITAL AS</p>
                    <p class="contact__map_text">Our offices are located at Pier X on Aker Brygge in Oslo.</p>
                    <p class="contact__map_text">The visiting address is Bryggegata 3, 0250 Oslo.</p>
                </div>
            </div>
            <div class="contact__map_green_holder">
                <div class="contact__map_green"></div>
            </div>
            <div class="contact__map_map">
                
            </div>
        </section>
    </main>

<?php require ' upANDdown/footer.php'; ?> 

</body>
</html>