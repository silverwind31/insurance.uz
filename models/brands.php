<?php
    function getBrands(){
        global $db;
        $query = "SELECT * FROM `brands` WHERE `status` = 1";
        $result = @mysqli_query($db,$query) or die(mysqli_error($db));
        return mysqli_fetch_all($result, MYSQLI_ASSOC);
    }
    function getAllBrandsData(){
        global $db;
        $query = "SELECT * FROM `brands`";
        $result = @mysqli_query($db,$query) or die(mysqli_error($db));
        return mysqli_fetch_all($result, MYSQLI_ASSOC);
    }
    function deleteBrand($id){
        global $db;
        $query = "DELETE FROM `brands` WHERE `id` = '$id'";
        $result = @mysqli_query($db,$query) or die(mysqli_error($db));
        if(mysqli_affected_rows($db) > 0){
            return true;
        }
        return false;
    }
    function saveBrand($status){
        global $db;
        $query = "INSERT INTO `brands` (`status`) VALUES ('$status')";
        $result = @mysqli_query($db,$query) or die(mysqli_error($db));
        if(mysqli_affected_rows($db) > 0){
            return mysqli_insert_id($db);
        }
        return false;
    }