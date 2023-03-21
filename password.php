<?php
    session_start();

    
?>

<h1>
    LA tua password è : 
    <?php
    
        echo   $_SESSION['password'];

    ?>
</h1>