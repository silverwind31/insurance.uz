<?php

    // DATABASE CONFIGURATION
    const HOST = "localhost";
    const USER = "root";
    const PASSWORD = "";
    const DATABASE = "insurance";

    // DATABASE CONNECTION
    $db = @mysqli_connect(HOST, USER, PASSWORD, DATABASE) or die(mysqli_connect_error());

    const ASSETS = "/views/assets/";
    const ADMIN_ASSETS = "/admin/views/assets/";

    const HEADER_MENU_POSITION = 1;
    const FOOTER_MENU_POSITION = 2;
    const MENU_POSITIONS_NAME = [
        1 => 'HEADER_MENU',
        2 => 'FOOTER_MENU'
    ];



    $months = [
        1 => 'Yanvar',
        2 => 'Fevral',
        3 => 'Mart',
        4 => 'Aprel',
        5 => 'May',
        6 => 'Iyun',
        7 => 'Iyul',
        8 => 'Avgust',
        9 => 'Sentyabr',
        10 => 'Oktyabr',
        11 => 'Noyabr',
        12 => 'Dekabr',

    ];