<?php include('header.php') ?>

<h2>
<?php
    echo "Thank you for signing out, " . $userid . "."; ?>
</h2>
<?php

    unset($_SESSION['userid']);
    $_SESSION = array();
    session_destroy();

    $expire = strtotime('-1 year');
    $params = session_get_cookie_params();
    $path = $params['path'];
    setcookie($expire, $path);
?>
<p><a href=".">Return to vehicle list.</a></p>

<?php include('footer.php') ?>