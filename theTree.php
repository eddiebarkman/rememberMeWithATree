<?php 

$connect = mysql_connect("localhost", "root", "pizzapie3") or die(mysql_error());

mysql_select_db("rememberMe", $connect) or die(mysql_error());

    $id = $_GET['id'];

    $sql = "SELECT * FROM iremember WHERE ID = '$id'";

    $query = mysql_query($sql) or die(mysql_error());

?>

    <?php 



?>

        <html>

        <head>
            <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0" />
            <title>Remember Me</title>
            <link rel="stylesheet" href="css/swiper.min.css">
            <link rel="stylesheet" type="text/css" href="css/grid.css">
            <link rel="stylesheet" type="text/css" href="css/animate.css">
            <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
            <link rel="stylesheet" type="text/css" href="css/style.css">
            <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
            <script src="js/swiper.min.js"></script>
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

<?php while ($row = mysql_fetch_array($query)) {
    
    //PHP Variables
    
    $name = $row['First'];
    
    $birth = $row{'Birth'};
    $death = $row{'Death'};
    $creation = $row{'Creation'};
    
    $from = new DateTime($creation);
    $to   = new DateTime('today');
    
    $bornDate = new DateTime($birth);
    $deathDate = new DateTime($death);
    
    $planted = new DateTime($creation);
    $today   = new DateTime('today');
    
    $Age = $bornDate->diff($deathDate)->y;
    
    $treeAge = $planted->diff($today)->format("%a");
    
    ?>

                        <div class="slidingContent col-span-12 col-style">



                            <div class="swiper-container">

                                <div class="swiper-wrapper">
                                    <!-- Slides -->
                                    <div class="swiper-slide">
                                        <!--Slide1-->
                                        <div class="col-span-1 col-style"></div>
                                        <div class="col-span-10 col-style autoheight">
                                            <div id="seedPlanting" class="animated bounceOutDown"><img class="imgResize" src="images/seed.png"></div>
                                                                                                                                             
                                            <div class="tree">
                                                
                                                <img id="day1" class="responsiveImg animated" src="images/treeGrowth/1.png">
                                                <img id="day2" class="responsiveImg animated" src="images/treeGrowth/2.png">
                                                <img id="day3" class="responsiveImg animated" src="images/treeGrowth/3.png">
                                                <img id="day4" class="responsiveImg animated" src="images/treeGrowth/4.png">
                                                <img id="day5" class="responsiveImg animated" src="images/treeGrowth/5.png">
                                                <img id="day6" class="responsiveImg animated" src="images/treeGrowth/6.png">
                                                <img id="day7" class="responsiveImg animated" src="images/treeGrowth/7.png">
                                                <img id="day8" class="responsiveImg animated" src="images/treeGrowth/8.png">
                                                <img id="day9" class="responsiveImg animated" src="images/treeGrowth/9.png">
                                            
                                            
                                            
                                            </div>
                                            <div class="personInfo">
                                                <p>A tree to remember</p> <h1><?php echo $row['First']; ?> <?php echo $row['Last']; ?></h1>
                                                <p>Age: <?php echo $Age; ?></p>
                                                <p>Your tree is <?php echo $treeAge; ?> day(s) old.</p>
                                             </div>

                                        </div>
                                        <div class="col-span-1 col-style"></div>
                                    </div>
                                    <!--Slide2-->
                                    <div class="swiper-slide">

                                        <div class="col-span-1 col-style"></div>
                                        <div class="col-span-10 col-style autoheight">
                                            <img class="imgResize animated infinite pulse" src="images/heart.png">
                                            <br>
                                            <p>This tree was created on <?php echo date('F j, Y',strtotime($row['Creation'])); ?>.</p>
                                            <br>
                                            <p>We hope this little website brought you a little bit of happiness. Thank you for visiting.</p>
                                            
   
                                            
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


            <?php } ?>
            
<script>
    $(document).ready(function () {

        var treeAge = <?php echo $treeAge; ?>;

        if (treeAge <= 1) {
            $("#day1").css("display", "inline");
            $("#day1").addClass("fadeInUp");
        }

        if (treeAge >= 2 && treeAge < 6) {
            $("#day2").css("display", "inline");
            $("#day2").addClass("fadeInUp");
        }

        if (treeAge >= 6 && treeAge < 16) {
            $("#day3").css("display", "inline");
            $("#day3").addClass("fadeInUp");
        }
        
        if (treeAge >= 16 && treeAge < 31) {
            $("#day4").css("display", "inline");
            $("#day4").addClass("fadeInUp");
        }
            
        if (treeAge >= 31 && treeAge < 52) {
            $("#day5").css("display", "inline");
            $("#day5").addClass("fadeInUp");
        }    
        
        if (treeAge >= 52 && treeAge < 72) {
            $("#day6").css("display", "inline");
            $("#day6").addClass("fadeInUp");
        }    
        
        if (treeAge >= 72 && treeAge < 102) {
            $("#day7").css("display", "inline");
            $("#day7").addClass("fadeInUp");
        }
            
        if (treeAge >= 102 && treeAge < 152) {
            $("#day8").css("display", "inline");
            $("#day8").addClass("fadeInUp");
        }
        
        if (treeAge >= 152) {
            $("#day9").css("display", "inline");
            $("#day9").addClass("fadeInUp");
        }
          
    });
</script>
            

        </body>

        </html>