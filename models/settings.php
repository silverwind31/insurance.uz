<?php
    function getSettings($name = null){
        global $db;
        $query = "SELECT * FROM `settings` WHERE `name` = '$name'";
        $result = @mysqli_query($db,$query) or die (mysqli_error($db));
        $arr = mysqli_fetch_assoc($result);
        if(!empty($arr['value'])){
            return $arr['value'];
        }
        return null;
    }
    function getAllSettings(){
        global $db;
        $query = "SELECT * FROM `settings`";
        $result = @mysqli_query($db,$query) or die(mysqli_error($db));
        return mysqli_fetch_all($result,1);
    }
    function getSettingsById($id){
        global $db;
        $query = "SELECT * FROM `settings` WHERE `id` = '$id'";
        $result = @mysqli_query($db,$query) or die(mysqli_error($db));
        return mysqli_fetch_assoc($result);
    }
    function updateSettings($id,$name,$value){
        global $db;
        $query = "UPDATE `settings` SET `name` = '$name',`value` = '$value' WHERE `id` = '$id'";
        $result = mysqli_query($db,$query) or die(mysqli_error($db));
        if(mysqli_affected_rows($db) > 0){
            return true;
        }
        return false;
    }
