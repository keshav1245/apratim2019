<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Apratim 2K19</title>

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <!-- FontAwesome CSS -->
    <link rel="stylesheet" href="css/fontawesome-all.min.css">

    <!-- Swiper CSS -->
    <link rel="stylesheet" href="css/swiper.min.css">

    <!-- Styles -->
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <header class="site-header">
        <div class="header-bar">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-10 col-lg-4">
                        <h1 class="site-branding flex">
                            <a href="index.html">APRATIM 2K19</a>
                        </h1>
                    </div>

                    <div class="col-2 col-lg-8">
                        <nav class="site-navigation">
                            <div class="hamburger-menu d-lg-none">
                                <span></span>
                                <span></span>
                                <span></span>
                                <span></span>
                            </div><!-- .hamburger-menu -->

                            <ul>

                                <li><a href="index.html#sponsors">SPONSORS</a></li>
                                <li><a href="index.html#events">OUR EVENTS</a></li>
                                <li><a href="core.html">OUR CORE</a></li>
                                <li><a href="index.html#contact">CONTACT</a></li>
                                <li><a href="webTeam.html">WEB TEAM</a></li>
                            </ul><!-- flex -->
                        </nav><!-- .site-navigation -->
                    </div><!-- .col-12 -->
                </div><!-- .row -->
            </div><!-- container-fluid -->
        </div><!-- header-bar -->
    </header><!-- .site-header -->

    <div class="hero-content">
        <div class="container">
            <div class="row">
                <div class="col-md-8 offset-md-2 text-center">
                    <img src="images/cover.jpg" alt="logo">
                </div>
            </div>
            <div class="row">
                <div class="col-md-10 offset-md-1 text-center entry-header">
                    <h2>Event Registration</h2>
                </div><!-- .col-md-10 -->
            </div>
        </div><!-- .container -->
    </div><!-- .hero-content -->

    <div class="content-section2">
        <div class="container ">
            <div class="mb-5 row col-md-12 lineup-artists-headline">

                <!-- <div class="col-md-12 lineup-artists-headline "> -->
                    <h2 class="entry-title col-12 col-md-6">Choose Event Category : </h2>
                    <select id="eventType" class="col-12 col-md-6 bg-light text-dark border-dark p-2">
                        <option class="bg-light text-dark border-dark p-2" value="">Click to choose</option>
                        <option value="cultural">Cultural Events</option>
                        <option value="tech">Technical Events</option>
                        <option value="gaming">LAN Gaming</option>
                        <option value="literary">Literary Events</option>
                    </select>
                <!-- </div>                 -->
            </div>
            <div id="category" class="mt-5 row col-md-12 lineup-artists-headline">

                <!-- <div class="col-md-12 lineup-artists-headline "> -->
                <h2 class="entry-title col-12 col-md-6">Team/Solo : </h2>
                <select id="categoryCul" class="col-12 col-md-6 bg-light text-dark border-dark p-2">
                    <option class="bg-light text-dark border-dark p-2" value="">Click to choose</option>
                    <option value="team">Team Event</option>
                    <option value="solo">Solo Event</option>
                </select>
                <!-- </div>                 -->
            </div>
            <div id="culturalTeam" class="row col-md-12 lineup-artists-headline">
                <h2 class="entry-title col-md-6">Cultural Team Events : </h2>
                <select id="categoryCulTeam" class=" col-md-6 bg-light text-dark border-dark p-2">
                    <option class="bg-light text-dark border-dark p-2" value="">Click to choose</option>
                    <option value="ad mad">AD MAD</option>
                    <option value="short movie">SHORT MOVIE</option>
                    <option value="MIME">MIME</option>
                    <option value="group dance">GROUP DANCE</option>
                    <option value="street play">STREET PLAY</option>
                    <option value="fusion band">FUSION BAND</option>
                    <option value="folk dance">FOLK DANCE</option>
                    <option value="fashion show">FASHION SHOW</option>
                    <option value="rangoli making">RANGOLI MAKING</option>
                    <option value="tattoo making">TATTOO MAKING</option>
                    <option value="collage making">COLLAGE MAKING</option>
                    <option value="face painting">FACE PAINTING</option>
                </select>
            </div>

            <div id="techTeam" class="row col-md-12 lineup-artists-headline">
                <h2 class="entry-title col-md-6">Tech-Team Events : </h2>
                <select id="categoryTechTeam" class="col-md-6 bg-light text-dark border-dark p-2">
                    <option class="bg-light text-dark border-dark p-2" value="">Click to choose</option>
                    <option value="tech hunt">TECH HUNT</option>
                    <option value="coding relay">CODING RELAY</option>
                    <option value="ui design">UI DESIGN</option>
                    <option value="quizCSE">QUIZ(CSE)</option>
                    <option value="code in the dark">CODE IN THE DARK</option>
                    <option value="line follower">LINE FOLLOWER</option>
                    <option value="robo soccer">ROBO SOCCER</option>
                    <option value="techno brain">TECHNO BRAIN</option>
                    <option value="bot pull">BOT PULL</option>
                    <option value="robo race">ROBO RACE</option>
                    <option value="aquajet">AQUA JET</option>
                    <option value="bridge it">BRIDGE IT</option>
                    <option value="town plan">TOWN PLAN</option>
                    <option value="bob the builder">BOB THE BUILDER</option>
                    <option value="quizCIVIL">QUIZ MANIA(CIVIL)</option>
                </select>
            </div>
            <div id="techSolo" class="row col-md-12 lineup-artists-headline">
                <h2 class="entry-title col-md-6">Tech-Solo Events : </h2>
                <select id="categoryTechSolo" class="col-md-6 bg-light text-dark border-dark p-2">
                    <option class="bg-light text-dark border-dark p-2" value="">Click to choose</option>
                    <option value="quizMECH">QUIZ(MECH)</option>
                    <option value="CAD Modelling">CAD MODELLING</option>
                </select>
            </div>

            <div id="literaryTeam" class="row col-md-12 lineup-artists-headline">
                <h2 class="entry-title col-md-6">Literary-Team Events : </h2>
                <select id="categoryLiteraryTeam" class="col-md-6 bg-light text-dark border-dark p-2">
                    <option class="bg-light text-dark border-dark p-2" value="">Click to choose</option>
                    
                    <option value="highQ">HIGHQ</option>
                </select>
            </div>
            <div id="literarySolo" class="row col-md-12 lineup-artists-headline">
                <h2 class="entry-title col-md-6">Literary-Solo Events : </h2>
                <select id="categoryLiterarySolo" class="col-md-6 bg-light text-dark border-dark p-2">
                    <option class="bg-light text-dark border-dark p-2" value="">Click to choose</option>
                    <option value="group discussion">GROUP DISCUSSION</option>
                    <option value="conventional debate">CONVENTIONAL DEBATE</option>
                    <option value="just a minute">JUST A MINUTE(JAM)</option>
                    <option value="terribly tiny tales">TERRIBLY TINY TALES</option>
                </select>
            </div>

            <div id="culturalSolo" class="row col-md-12 lineup-artists-headline">
                <h2 class="entry-title col-md-6">Cultural Solo Events : </h2>
                <select id="categoryCulSolo" class="col-md-6 bg-light text-dark border-dark p-2">
                    <option class="bg-light text-dark border-dark p-2" value="">Click to choose</option>
                    <option value="solo instrumental">SOLO INSTRUMENTAL</option>
                    <option value="solo dance">SOLO DANCE</option>
                    <option value="bhangra wars">BHANGRA WARS</option>
                    <option value="mono act">MONO ACT</option>
                    <option value="solo singing">SOLO SINGING</option>
                    <option value="duet dance">DUET DANCE</option>
                    <option value="poetry">POETRY</option>
                    <option value="standUpComedy">Stand Up Comedy</option>
                </select>
            </div>

            <div id="gamingTeam" class="row col-md-12 lineup-artists-headline">
                <h2 class="entry-title col-md-6">LAN Gaming-Team Events : </h2>
                <select id="categoryGamingTeam" class="col-md-6 bg-light text-dark border-dark p-2">
                    <option class="bg-light text-dark border-dark p-2" value="">Click to choose</option>
                    <option value="pubg">PUBG</option>
                    <option value="csgo">Counter Strike</option>
                </select>
            </div>
            <div id="gamingSolo" class="row col-md-12 lineup-artists-headline">
                <h2 class="entry-title col-md-6">LAN Gaming-Solo Events : </h2>
                <select id="categoryGamingSolo" class="col-md-6 bg-light text-dark border-dark p-2">
                    <option class="bg-light text-dark border-dark p-2" value="">Click to choose</option>
                    <option value="fifa">FIFA</option>
                    <option value="tekken7">TEKKEN 7</option>
                </select>
            </div>
            <div id="regisForm" class=" contact-page">
                <div class="get-in-touch">
                    <div class="contact-form">
                        <div class="row">
                            <div class="col-12 col-md-6">
                                <input id="name" type="text" placeholder="Your name">

                            </div><!-- col-4 -->

                            <div class="col-12 col-md-6">
                                <input id="email" type="email" placeholder="Your email">
                            </div><!-- col-6 -->

                            <div class="col-12 col-md-6">
                                <input id="teamleader" type="text" placeholder="Your Leader">
                            </div><!-- col-6 -->

                            <div class="col-12 col-md-6">
                                <input id="teamleadercontact" type="number" placeholder="Leader Contact">
                            </div><!-- col-6 -->

                            <div class="col-12 col-md-6">
                                <input id="teamMem" type="number" placeholder="Number of Team Members">
                            </div>
                            <div class="col-12">
                                <input id="college" type="text" placeholder="College Name">
                            </div>
                            <div class="col-12">
                                <textarea id="teamDetails" name="name" rows="8" cols="80" placeholder="Enter your team member names,their contact, College Id/Roll number branch year details etc and these will be verified on spotName of Member phone roll number otherDetails,
                                Name of Member phone roll number otherDetails  
                                "></textarea>

                            </div>
                            <div class="col-12 p-2 submit
                             flex justify-content-center">
                                <input id="regisButton" type="button" name="" value="REGISTER NOW!" class="btn">
                            </div>

                        </div><!-- row -->
                    </div><!-- contact-form -->            
                </div>                
            </div>
            <div id="regisFormSolo" class=" contact-page">
                <div class="get-in-touch">
                    <div class="contact-form">
                        <div class="row">
                            <div class="col-12 col-md-6">
                                <input id="nameS" type="text" placeholder="Your name">

                            </div><!-- col-4 -->

                            <div class="col-12 col-md-6">
                                <input id="emailS" type="email" placeholder="Your email">
                            </div><!-- col-6 -->
                            <div class="col-12 col-md-6">
                                <input id="contactS" type="number" placeholder="Your Phone">
                            </div>
                            <div class="col-12">
                                <input id="collegeS" type="text" placeholder="College Name">
                            </div>
                            <div class="col-12 p-2 submit
                             flex justify-content-center">
                                <input id="regisButtonS" type="button" name="" value="REGISTER NOW!" class="btn">
                            </div>

                        </div><!-- row -->
                    </div><!-- contact-form -->            
                </div>                
            </div>
        </div>
    </div>


    <footer class="site-footer">
        <div class="footer-cover-title flex justify-content-center align-items-center">
            <h2 id="contact">APRATIM</h2>
        </div><!-- .site-footer -->

        <div class="footer-content-wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="entry-title">
                            <a href="index.html">APRATIM 2K19</a>
                        </div><!-- entry-title -->

                        <div class="entry-mail">
                            <a href="index.html">apratim@ccet.ac.in</a>
                        </div><!-- .entry-mail -->

                        <div class="copyright-info">
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                            Copyright &copy;
                            <script>
                                document.write(new Date().getFullYear());
                            </script> All rights reserved | Website Committee CCET Sector 26, Images from Unsplash
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        </div><!-- copyright-info -->

                        <div class="footer-social">
                            <ul class="flex justify-content-center align-items-center">
                                <li><a href="https://www.facebook.com/apratimccet/"><i
                                            class="fab fa-facebook-f"></i></a></li>
                                <li><a href="https://www.instagram.com/ccetapratim/"><i
                                            class="fab fa-instagram"></i></a></li>
                            </ul>
                        </div><!-- footer-social -->
                    </div><!-- col -->
                </div><!-- row -->
            </div><!-- container -->
        </div><!-- footer-content-wrapper -->
    </footer><!-- site-footer -->

    <script type='text/javascript' src='js/jquery.js'></script>
    <script src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
    <script type='text/javascript' src='js/masonry.pkgd.min.js'></script>
    <script type='text/javascript' src='js/jquery.collapsible.min.js'></script>
    <script type='text/javascript' src='js/swiper.min.js'></script>
    <script type='text/javascript' src='js/jquery.countdown.min.js'></script>
    <script type='text/javascript' src='js/circle-progress.min.js'></script>
    <script type='text/javascript' src='js/jquery.countTo.min.js'></script>
    <script type='text/javascript' src='js/custom.js'></script>
    <script type='text/javascript' src='js/regis.js'></script>
</body>

</html>