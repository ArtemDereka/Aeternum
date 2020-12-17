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
                        <a href="/team.php" class="header__link_active">TEAM</a>
                    </li>
                    <li class="header__item">
                        <a href="/contact.php" class="header__link">CONTACT</a>
                    </li>
                    <div class="close" id="close"></div>
                </ul>
                <div class="hamburger" id="hamburger">
                </div>
            </div>
        </div>
    </header>

    <main class="team">
        <section class="team__contact">
            <div class="team__contact_img">
                <div class="team__contact_text_holder">
                    <h2 class="team__contact_txt">
                        Unique Public and Private Market Experience.
                    </h2>
                </div>
            </div>
            <div class="team__contact_block">
                <div class="team__contact_field">
                    <p class="team__contact_why">
                        Aeternum Capital consists of an experienced team with a complementary skill set from Fund Management, Private Equity and Investment Banking. The Advisory Board is highly experienced with operational experience from both public and private markets.
                    </p>
                    <button class="team__contact_btn">CONTACT US</button>
                </div>
                <div class="block__grey"></div>
            </div>
        </section>

        <section class="team__about">
            <div class="container">
                <h2 class="team__about_name">INVESTMENT TEAM.</h2>
                <div class="team__about_holder">
                    <div class="team__about_person">
                        <div class="team__person_img_holder">
                            <div class="block__green_small"></div>
                            <img src="/images/Vegard Soeraunet_0010.png" alt="" class="team__person_img">
                        </div>
                        <h3 class="team__about_person_name">VEGARD SØRAUNET</h3>
                        <p class="team__about_person_position">Investment Director Public and Partner</p>
                        <p class="team__about_person_text">
                            Career in buy side across different sectors in the Nordics, Europe, Global and Emerging Markets.
                        </p>
                        <p class="team__about_person_text">
                            Top AAA rating from Citywire (Sweden/Nordics) and 5 stars Morningstar (EM/Global). More than 240 percent alpha generation over the last 8 years with ODIN Sverige which Lipper Fund in 2020 awarded as the best Swedish long only Equity mandate for last 3,5 and 10 years.
                        </p>
                        <p class="team__about_person_text">
                            15 years of financial industry experience and two years as an Accountant at PwC. MSc in BA from Norwegian School of Management (BI) and Master’s degree in Accounting.
                        </p>
                    </div>
                    <div class="team__about_person">                   
                        <div class="team__person_img_holder">
                            <div class="block__grey_small"></div>
                            <img src="/images/Vegard Soeraunet_0010.png" alt="" class="team__person_img">
                        </div>
                        <h3 class="team__about_person_name">TBA</h3>
                        <p class="team__about_person_position">Investment Director and Partner</p>
                        
                    </div>
                    <div class="team__about_person">
                        <div class="team__person_img_holder">
                            <div class="block__darkgrey_small"></div>
                            <img src="/images/Vegard Soeraunet_0010.png" alt="" class="team__person_img">
                        </div>
                        <h3 class="team__about_person_name">Anthea Arff-Pettersen</h3>
                        <p class="team__about_person_position">Investment Manager and Partner</p>
                        <p class="team__about_person_text">Anthea Arff-Pettersen Investment Manager and Partner Career from buy side equity analysis. Experience as Head of European Consumer at Schroders IM in London and Investment Manager from Private Equity firm Credo in Oslo. Seven years of asset management experience and Private equity experience in Nordic mid-cap segment.</p>
                        <p class="team__about_person_text">MSc in Investment Management from Cass Business School and BSc in BA from University of Bath. CFA and IMC qualified.</p>
                    </div>
                </div>
            </div>
        </section>
    </main>

<?php require ' upANDdown/footer.php'; ?> 

</body>
</html>