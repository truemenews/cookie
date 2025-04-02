<?php
    require __DIR__ . '/layout.php';
    var_dump('Session', $_SESSION);
    var_dump('Cookie', $_COOKIE);
?>

<!-- Show password protected content down here -->
<!DOCTYPE html>
<html>
    <head>
        <title>Logged in</title>
    </head>
    <body>
        <div class="container">
            <div class="jumbotron">
                <h1>Status: logged in</h1>
                <p class="lead">This is Banking</p>
                <p class="lead">Your Balance: 
                    <span style="color: red;"><?php echo '$' . number_format($_SESSION['Balance']); ?></span>
                </p>
                <p><a class="btn btn-lg btn-success" href="logout.php" role="button">Log out</a></p>
            </div>
        </div>
        <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
    </body>
</html>
