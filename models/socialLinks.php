<?php

    function getSocialLinks($position = HEADER_MENU_POSITION){
        global $db;
        $query = "SELECT * FROM `socialLinks` WHERE `status` = 1 AND `position` = '{$position}'";
        $result = @mysqli_query($db,$query) or die (mysqli_error($db));
        return mysqli_fetch_all($result,MYSQLI_ASSOC);
    }
    function getAllLinks($id){
        global $db;
        $query = "SELECT * FROM `socialLinks` WHERE `status` = 1";
        $result = @mysqli_query($db,$query) or die (mysqli_error($db));
        return mysqli_fetch_all($result,MYSQLI_ASSOC);
    }

    function getAllSocialLinks(){
        global $db;
        $query = "SELECT * FROM `socialLinks`";
        $result = @mysqli_query($db,$query) or die (mysqli_error($db));
        return mysqli_fetch_all($result,MYSQLI_ASSOC);
    }

    #BACKEND

    function saveSocial($title,$link,$orderBy){
        global $db;
        $title = strip_tags(htmlspecialchars(mysqli_real_escape_string($db,$title)));
        $link = strip_tags(htmlspecialchars(mysqli_real_escape_string($db,$link)));
        $query = "INSERT INTO `socialLinks` (`title`,`link`,`order_by`) VALUES ('$title','$link','$orderBy')";
        $result = @mysqli_query($db,$query) or die (mysqli_error($db));
        if(mysqli_affected_rows($db) > 0){
            return true;
        }
        return false;
    }
    function deleteSocialLinks($id){
        global $db;
        $query = "DELETE FROM `socialLinks` WHERE `id` = '$id'";
        $result = @mysqli_query($db,$query) or die(mysqli_error($db));
        if(mysqli_affected_rows($db) > 0){
            return true;
        }
        return false;
    }
    function getSocialLinksById($id){
        global $db;
        $query = "SELECT * FROM `socialLinks` WHERE `id` = '$id'";
        $result = @mysqli_query($db,$query) or die (mysqli_error($db));
        return mysqli_fetch_assoc($result);
    }
    function updateSocialLinks($id,$title,$link,$orderBy,$status){
        global $db;
        $query = "UPDATE `socialLinks` SET `title` = '$title', `link` = '$link', `order_by` = '$orderBy', `status` = '$status' WHERE `id` = '$id'";
        $result = @mysqli_query($db,$query) or die (mysqli_error($db));
        if(mysqli_affected_rows($db) > 0){
            return true;
        }
        return false;
    }