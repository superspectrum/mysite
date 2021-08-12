<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="CSS/style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@500&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Permanent+Marker&display=swap" rel="stylesheet"> 
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Using Globals in PHP Example</title>
</head>
<body>
<!--nav section-->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark shadow sticky-top">
        <a href="../index.php" class="navbar-brand" style="color: #DA6419">My Site</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navContent">
                <ul class="navbar-nav">
                    <li class="navbar-item active"><a href="../about.php" class="nav-link" style="color: #28A3B6">About</a></li>
                    <li class="navbar-item"><a href="../portfolio.php" class="nav-link" style="color: #28A3B6">Portfolio</a></li>
                    <li class="navbar-item"><a href="../contact.php" class="nav-link" style="color: #28A3B6">Contact</a></li>
                    <li class="navbar-item"><a href="../first.php" class="nav-link" style="color: #28A3B6">PHP</a></li>
                </ul>
            </div>
        </nav>

<!--Global Examples-->
    
    <h2>$_SERVER Global</h2>
    <p>Super global variable which holds information about headers, paths, and script locations. </p>
    <ul>
    <?php
        echo '<li><b>Host Name:</b> ' . $_SERVER['HTTP_HOST'] . '</li>';
        echo '<li><b>Site Referrer (Where you came from):</b> ' . $_SERVER['HTTP_REFERER']. '</li>';
        echo '<li><b>User Agent (Browser):</b> ' . $_SERVER['HTTP_USER_AGENT'] . '</li>';
    ?>
    </ul>

    <h2>$GLOBALS Global</h2>
    <p>Used to access global variables from anywhere in the PHP script (also from within function or methods). PHP stores all global variables in an array called $GLOBALS[index]. The index holds the name of the variable.</p>
    <?php 
        $x = 75; 
        $y = 25;
        function addition() { 
                $GLOBALS['z'] = $GLOBALS['x'] + $GLOBALS['y']; 
            }
        
        addition(); 
        
        echo "$x + $y = $z"; 
        ?>
    
    
    <h2>$_REQUEST Global</h2>
    <p>Super global variable to collect data after submitting an HTML form.</p>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
    Name: <input type="text" name="reqName">
    <input type="submit">
    </form>
    <?php
        //Request Method is POST and the reqName field is populated
        if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_REQUEST['reqName'])) {
            // collect value of input field
            $rname = $_REQUEST['reqName'];
            if (empty($rname)) {
                echo "Name is empty";
            } else {
                echo $rname;
            }
        }
    ?>

    <h2>$_GET Global</h2>
    <p>Super global variable also used to collect form data after submitting an HTML form with method="get". $_GET can also collect data sent in the URL.</p>
    <form method="get" action="<?php echo $_SERVER['PHP_SELF'];?>">
    Name: <input type="text" name="getName">
    <input type="submit">
    </form>
    <?php
        //Request Method is GET and the getName field is populated
        if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET['getName'])) {
            // collect value of input field
            $gname = $_GET['getName'];
            if (empty($gname)) {
                echo "Name is empty";
            } else {
                echo $gname;
            }
        }
    ?>

    <h2>$_POST Global</h2>
    <p>Super global variable widely used to collect form data after submitting an HTML form with method="post". $_POST is also widely used to pass variables.</p>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
    Name: <input type="text" name="postName">
    <input type="submit">
    </form>
    <?php
        //Request Method is POST and the postName field is populated
        if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['postName'])) {
            // collect value of input field
            $pname = $_POST['postName'];
            if (empty($pname)) {
                echo "Name is empty";
            } else {
                echo $pname;
            }
        }
    ?>

    
  <!--Scripts-->
  <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
  <script src="JS/JavaScript.js"></script>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>
</html>