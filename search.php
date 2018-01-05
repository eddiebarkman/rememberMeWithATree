<?php 

$connect = mysql_connect("localhost", "root", "pizzapie3") or die(mysql_error());

mysql_select_db("rememberMe", $connect) or die(mysql_error());

    
    $sql = "SELECT * FROM iremember ";


    if (isset($_POST['search'])){
        
        $search_term = mysql_real_escape_string($_POST['search_box']);
        
        $sql .= "WHERE First = '{$search_term}'";
         
        $sql .= " OR Last = '{$search_term}'";
        
    }




    $query = mysql_query($sql) or die(mysql_error());


?>
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

        <script>
        jQuery(document).ready(function($) {
    $(".clickable-row").click(function() {
        window.document.location = $(this).data("href");
    });
});
        
        
        </script>
    
    
    

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
        <img class="icon icon-hamburger fixedIcon" src="images/hamburger.png">
        <img class="icon icon-search fixedIcon" src="images/search.png">


    </div>
    <div class="spacer"></div>
    <div id="main" class="m-scene">

        <div id="container" class="col-span-12 scene_element scene_element--fadeinLeft">
    
    
    <div class="col-span-1 col-style"></div>
                <table class="col-span-10 col-style">


                <?php while ($row = mysql_fetch_array($query)) { ?>


                <tr class="clickable-row" data-href='theTree.php?id=<?php echo $row['ID']; ?>'>
                    <td><a href="theTree.php?id=<?php echo $row['ID']; ?>"><img class="icon" src="images/seed.png"></a></td>
                    <td>
                    <div class="results">
                        <a href="theTree.php?id=<?php echo $row['ID']; ?>">
                        <?php echo $row['First']; ?> <?php echo $row['Last']; ?> <BR> 

                    With us from <?php echo date('Y',strtotime($row['Birth'])); ?> to <?php echo date('Y',strtotime($row['Death']));; ?> <BR> 
            

                    Click to visit <?php echo $row['First']; ?>'s tree</a>
                        </div>

                    </td>

                </tr>



                <?php } ?>


                </table>
     <div class="col-span-1 col-style"></div>
    </div><!--Close Container-->
        
</body>
</html>