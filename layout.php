<?php
    session_start(); /* Starts the session */

    if($_SESSION['Active'] == false){ /* Redirects user to Login.php if not logged in */
        header("location:login.php");
        exit;
    }
    require __DIR__ . '/src/support/helper/helpers.php';
?>

<head>
    <meta charset="utf-8">

    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/stylesheet.css">
</head>

<div class="header clearfix">
    <nav>
        <ul class="nav nav-pills pull-right">
            <li role="presentation" class="active">
                <a href="<?php echo parseUrl($_SERVER['REQUEST_URI'])?>/index.php">Home</a></li>
            <li role="presentation">
                <a href="<?php echo parseUrl($_SERVER['REQUEST_URI'])?>/transfer.php">Transfer</a>
            </li>
            <li role="presentation"><a href="#">Contact</a></li>
        </ul>
    </nav>
    <h3 class="text-muted">hello <span style="color: red;"><?php echo ucfirst($_SESSION['Username']);?></span></h3>
</div>

