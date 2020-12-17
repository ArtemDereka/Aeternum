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
                        <a href="/about.php" class="header__link_active">ABOUT AETERNUM</a>
                    </li>
                    <li class="header__item">
                        <a href="/active.php" class="header__link">ACTIVE OWNERSHIP</a>
                    </li>
                    <li class="header__item">
                        <a href="/team.php" class="header__link">TEAM</a>
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
    <main class="about">
        <section class="about__capital">
            <div class="about__capital_content">
                <h2 class="about__capital_name">ABOUT AETERNUM CAPITAL</h2>
                <p class="about__capital_text">
                Aeternum Capital is a Norwegian-based investment company founded by the Fredriksen family to do public and private investments in companies across the Nordic region. The investment strategy targets both public and private SMEs, applying a long-term and active ownership model to drive value creation in quality companies. Aeternum Capital invests in public undervalued return expanders and overlooked industry leaders, through in-depth quantitative and qualitative analysis. Aeternum also invests in private companies, in high-growth business verticals with a large value creation potential. The opitimal horizon is to own companies into eternity.
                </p>
            </div>
            <div class="about__capital_grey_holder">
                <div class="about__capital_grey"></div>
                <div class="about__capital_grey_Mobile"></div>
            </div>
            <img src="/images/iStock-1250524373.png" alt="" class="about__capital_img">
        </section>
        <div class="about__beige_holder">
            <div class="block__beige"></div>
        </div>
        <section class="about__process">
            <div class="about__process_img">
                <div class="about__process_block">
                    <h2 class="about__process_name">THE INVESTMENT PROCESS.</h2>
                    <p class="about__process_text">
                        Aeternum Capital applies a private equity mindset to identify underperforming and overlooked quality companies with significant value creation potential. The investment process starts with a thorough screening of the addressable investment universe, to identify opportunities for further in-depth analysis of individual companies and markets. This is followed by industry expert discussions, advisory board input and final discussions and decision by the investment team. After a decision to move forward has been made, Aeternum establishes a dialogue with the company management and board.
                        <div class="about__process__white"></div>
                    </p>
                </div>
            </div>
        </section>
        <section class="about__sectors container">
            <div class="about__sectors_content">
                <h2 class="about__sectors_name">COMPANIES AND SECTORS</h2>
                <p class="about__sectors_text">
                    Aeternum Capital applies well-defined investment criteria framework to ensure focus on high quality companies with significant value creation potential. The companies we seek are often industry leaders in consumer, healthcare, tech/software/gaming and industrial niches, with strong tailwinds from important societal megatrends. In addition, the companies must have strong company culture, attractive business models with high, recurring quality revenue, and preferably be a niche-leader with pricing power in the market.
                </p>
            </div>
            <div class="about__sectors_img">
                <div class="about__sectors_white"></div>
            </div>
        </section>
        <div class="about__back_block">
            
        </div>
    </main>

    <?php require ' upANDdown/footer.php'; ?> 

</body>
</html>