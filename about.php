<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0" />
    <title>Remember Me</title>
    <link rel="stylesheet" type="text/css" href="css/grid.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/animate.css">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="js/jQueryRotate.js"></script>
    <script src="js/smoothState.js"></script>
    <script src="js/wow.js"></script>
    <script src="js/app.js"></script>
    <script type='application/javascript' src='js/fastclick.js'></script>
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="mobile-web-app-capable" content="yes">

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
        <img class="icon icon-back fixedIcon" src="images/back.png" onclick="history.back()">
        <img class="icon icon-search fixedIcon" src="images/search.png">
        <img class="icon icon-hamburger fixedIcon" src="images/hamburger.png">

    </div>
    <div class="spacer"></div>
    <div id="main" class="m-scene">

        <div id="container" class="col-span-12 scene_element scene_element--fadeinright">



            <div class="col-span-1 col-style"></div>
            <div id="plantTree" class="col-span-10 col-style autoHeight">

                <img class="imgResize" src="images/smallTree.png">
                <p>This site was created to help give a small little place for people to remember the ones they've lost. The simple idea was to be able to plant a virtual tree and let it grow over time.</p>
            <p>All images were created by Eddie Barkman. The site itself uses a ton of customized Jquery, PHP, CSS and a whole lot more! It was my first time working with PHP and a mySQL database as well as JQuery. Overall it was a fun project.</p>
                
                
            </div><!--Close plantTree Form-->
            
            <div class="col-span-1 col-style"></div>


        </div>
        <!--Close Container-->

    </div>
    <!--All-->
</body>

</html>