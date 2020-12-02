<?php
    /**
     * Logout session
     */
    session_start();
    session_destroy();
    echo "salió";
?>