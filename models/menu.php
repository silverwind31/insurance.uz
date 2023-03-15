<?php
    function getAllFrontMenus($position = HEADER_MENU_POSITION){
        global $db;
        $query = "SELECT * FROM `menu` WHERE `status` = 1 AND `position` = '{$position}'";
        $result = @mysqli_query($db,$query) or die (mysqli_error($db));
        return mysqli_fetch_all($result,MYSQLI_ASSOC);
    }

    function getMenuChildren($id){
        global $db;
        $query = "SELECT * FROM `menu` WHERE `status` = 1 AND `parent` = '{$id}'";
        $result = @mysqli_query($db,$query) or die (mysqli_error($db));
        return mysqli_fetch_all($result,MYSQLI_ASSOC);
    }

    #BACKEND
    function getAllMenus(){
        global $db;
        $query = "SELECT * FROM `menu` ORDER BY `id` DESC";
        $result = @mysqli_query($db,$query) or die (mysqli_error($db));
        return mysqli_fetch_all($result,MYSQLI_ASSOC);
    }
    function saveMenu($title,$link,$position,$orderBy){
        global $db;
        $title = strip_tags(htmlspecialchars(mysqli_real_escape_string($db,$title)));
        $link = strip_tags(htmlspecialchars(mysqli_real_escape_string($db,$link)));
        $query = "INSERT INTO `menu` (`title`,`link`,`position`,`order_by`) VALUES ('$title','$link','$position','$orderBy')";
        $result = @mysqli_query($db,$query) or die (mysqli_error($db));
        if(mysqli_affected_rows($db) > 0){
            return true;
        }
        return false;
    }
    function getParentMenus($position){
        global $db;
        $query = "SELECT * FROM `menu` WHERE `parent` = 0 AND `position` = '$position' ORDER BY `id` DESC";
        $result = @mysqli_query($db,$query) or die (mysqli_error($db));
        return mysqli_fetch_all($result,MYSQLI_ASSOC);
    }
    function getMenuDataById($id){
        global $db;
        $query = "SELECT * FROM `menu` WHERE `id` = '$id'";
        $result = @mysqli_query($db,$query) or die (mysqli_error($db));
        return mysqli_fetch_assoc($result);
    }
    function updateMenu($id,$title,$link,$position,$parent,$orderBy,$status){
        global $db;
        $query = "UPDATE `menu` SET `title` = '$title', `link` = '$link', `position` = '$position', `parent` = '$parent', `order_by` = '$orderBy', `status` = '$status' WHERE `id` = '$id'";
        $result = @mysqli_query($db,$query) or die (mysqli_error($db));
        if(mysqli_affected_rows($db) > 0){
            return true;
        }
        return false;
    }
    function deleteMenuById($id){
        global $db;
        $query = "DELETE FROM `menu` WHERE `id` = '$id'";
        $result = @mysqli_query($db,$query) or die(mysqli_error($db));
        if(mysqli_affected_rows($db) > 0){
            return true;
        }
        return false;
    }