<?php
    session_start();
    session_destroy();
    echo '<script>window.location="login2.php"</script>';
?>