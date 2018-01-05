<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0" />
    <title>Remember Me</title>

    <link rel="stylesheet" href="css/swiper.min.css">
    <link rel="stylesheet" type="text/css" href="css/grid.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/animate.css">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>

    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="js/swiper.min.js"></script>
    <script src="js/jQueryRotate.js"></script>
    <script src="js/smoothState.js"></script>
    <script src="js/wow.js"></script>
    <script src="js/app.js"></script>
    <script type='application/javascript' src='js/fastclick.js'></script>
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
    <link rel="apple-touch-icon" href="images/icon.png">



</head>

<body>


    <div class="closeAll"></div>


    <div class="searchBar">

        <form name="search_form" method="POST" action="search.php">

            <input type="text" placeholder="Search by Last Name" name="search_box" class="searchBox">
            <input type="submit" name="search" value="Find a Tree" class="hidden">

        </form>

    </div>

    <div class="menu">

        <!-- Menu icon -->
        <div class="menuHeader">Menu</div>

        <!-- Menu -->
        <ul>

            <a href="index.php">
                <li>Home</li>
            </a>

            <a href="plant.php">
                <li>Plant a Tree</li>
            </a>
            <a href="about.php">
                <li>About</li>
            </a>
            <a href="search.php">
                <li>Find All Trees</li>
            </a>
            <li>
                <div class="icon-close"><img class="icon" src="images/close.png"></div>
            </li>

        </ul>
    </div>




    <div class="icon-menu">
        <img class="icon icon-hamburger fixedIcon" src="images/hamburger.png">
        <img class="icon icon-search fixedIcon" src="images/search.png">


    </div>
    <div class="spacer"></div>
    <div id="main" class="m-scene">

        <div id="container" class="col-span-12 scene_element scene_element--fadeinLeft">



            <div class="slidingContent col-span-12 col-style">



                <div class="swiper-container">

                    <div class="swiper-wrapper">
                        <!-- Slides -->
                        <div class="swiper-slide">
                            <!--Slide1-->
                            <div class="col-span-1 col-style"></div>
                            <div class="col-span-10 col-style autoheight">

                                <img class="logoResize" src="images/logo.png">
                                <p>When someone is gone, it's hard to move on. By keeping their memory alive, we can make sure they're never far from our hearts.</p>
                                <p>Swipe left to learn more, or press the button below to continue</p>
                                <input name="add" onclick="location.href='plant.php';" type="submit" id="add" class="button" value="Get Started Right Away">


                            </div>
                            <div class="col-span-1 col-style"></div>
                        </div>
                        <!--Slide2-->
                        <div class="swiper-slide">
                            
                            <div class="col-span-1 col-style"></div>
                            <div class="col-span-10 col-style autoheight">
                                    <img class="imgResize animated infinite pulse" src="images/heart.png">
                                     <p>Mourning is hard and nothing can really change that. This small app was made to give you a small push towards the future without losing the past. It does this by setting up a simple page for your loved one. </p>
                            </div>
                            <div class="col-span-1 col-style"></div>
                        </div>
                        <!--Slide3-->
                        <div class="swiper-slide">
                            <div class="col-span-1 col-style"></div>
                            <div class="col-span-10 col-style autoheight">
                                <img class="imgResize animated infinite swing" src="images/seed.png">
                                <p>A seed is planted and begins its life. It wont happen quickly, but over time the seed will sprout and grow into a massive tree. So come back every once in a while and see its progress.</p>
                                <input name="add" onclick="location.href='plant.php';" type="submit" id="add" class="button" value="Plant a Tree">
                            </div>
                            <div class="col-span-1 col-style"></div>
                        </div>

                    </div>
                    <!-- If we need pagination -->
                    <div class="swiper-pagination"></div>
                </div>

            </div>
            <!--Close content Form-->


        </div>
        <!--Close Container-->

    </div>
    <!--All-->
    <script>
        var mySwiper = new Swiper('.swiper-container', {
            // Optional parameters
            direction: 'horizontal',
            loop: false,

            // If we need pagination
            pagination: '.swiper-pagination',
        })
    </script>
</body>

</html>