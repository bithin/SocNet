<?php
    include_once 'classes.php';
    session_start();
    include_once 'config.php';
    include_once 'db.php';
    $db = new Database($CONFIG['db']);
    $page = (isset($_GET['p']) && file_exists('pages/' . $_GET['p']) ? $_GET['p'] : 'main.php');
?>
<html>
    <head>
        <link href="style.css" type="text/css" rel="stylesheet"/>
        <script>
            function goCreate() {
                location.href = "?p=create.php";
                return false;
            }
        </script>
    </head>
    <body class="wordpress y2012 m02 d19 h11 home">
        <div id="wrapper">
        <div class="border-fix" onclick="location.href='<?php echo $_SERVER['SCRIPT_NAME']; ?>';">
            <div class="titleblock"> </div>
            <div id="header">
            <h1 id="blog-title">
            <a title="SocNet" href="http://<?php echo $_SERVER['SERVER_NAME'];?>">SocNet</a>
            </h1>
            <div id="blog-description">Because privacy is overrated</div>
            </div>
        </div>
        <div id="container">
            <div id="content">
            <div id="secondary" class="sidebar">
                <ul>
                <?php
                    echo Menu::getMenu($db)->render();
                ?>
                </ul>
                <ul><h2><a href="http://<?php echo $_SERVER['SERVER_NAME'];?>?p=posts.php">Posts</a></h2></ul>
            </div>
            <div class="hfeed">
                <ul> 
                </ul>
            </div>
            <?php
                include_once "pages/" . $page;
            ?>
            </div>
            </div>
        </div>
    <div id="footer"></div>
       <center>&copy;Team sCTF '12</center>
    </div>
    </body>
</html>
