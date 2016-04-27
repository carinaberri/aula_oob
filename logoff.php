<?php

   include_once (__DIR__."/includes/config.php");

    /**
     * Created by PhpStorm.
     * User: carina
     * Date: 15/12/15
     * Time: 23:35
     */
    unset($_SESSION['clientes']);
    $_SESSION = array();

    header("Location: index.php");