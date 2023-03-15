<?php
    function login($username,$password){
        global $db;
        $username = strip_tags(htmlspecialchars(mysqli_real_escape_string($db,$username)));
        $password = strip_tags(htmlspecialchars(mysqli_real_escape_string($db,$password)));
        $query = "SELECT * FROM `user` WHERE `username` = '$username' AND `password` = '$password'";
        $result = @mysqli_query($db,$query) or die(mysqli_error($db));
        return mysqli_fetch_assoc($result);
    }
