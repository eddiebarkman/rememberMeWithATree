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


                <img class="imgResize animated infinite swing" src="images/seed.png">

                <p>In time, this small seed will become a tree.</p>

                <form id="info" method="post" action="create.php">


                    <label>First Name</label>
                    <input name="First" type="text" id="First" class="formInput" required="required">

                    <label>Last Name</label>
                    <input name="Last" type="text" id="Last" class="formInput" required="required">

                    <label>Birth</label>
                    <input name="Birth" type="date" id="Birth" class="formInput" required="required">

                    <label>Death</label>
                    <input name="Death" type="date" id="Death" class="formInput" required="required">


                    <input name="add" onclick="sendForm()" onsubmit="return false;" type="submit" id="add" class="button" value="Plant Tree">


                </form>
            </div>
            <!--Close plantTree Form-->
            <div class="col-span-1 col-style"></div>


        </div>
        <!--Close Container-->

    </div>
    <!--All-->
</body>

</html>