<?php
    function getAllServices(){
        global $db;
        $query = "SELECT * FROM `services` WHERE `status` = 1 ORDER BY `id` ASC";
        $result = @mysqli_query($db,$query) or die (mysqli_error($db));
        return mysqli_fetch_all($result,MYSQLI_ASSOC);
    }
    function getServicesDataById($id){
        global $db;
        $query = "SELECT * FROM `services` WHERE `status` = 1 AND `id` = $id";
        $result = mysqli_query($db,$query) or die(mysqli_error($db));
        return mysqli_fetch_assoc($result);
    }

    #BACKEND
    function getAllServicesData(){
        global $db;
        $query = "SELECT * FROM `services`";
        $result = @mysqli_query($db,$query) or die (mysqli_error($db));
        return mysqli_fetch_all($result,MYSQLI_ASSOC);
    }
    function deleteService($id){
        global $db;
        $query = "DELETE FROM `services` WHERE `id` = '$id'";
        $result = @mysqli_query($db,$query) or die(mysqli_error($db));
        if(mysqli_affected_rows($db) > 0){
            return true;
        }
        return false;
    }
    function saveService($class,$category_id,$service_description,$service_title,$status){
        global $db;
        $query = "INSERT INTO `services` (`category_id`,`class`,`service_title`,`service_description`,`status`) VALUES ('$category_id','$class','$service_title','$service_description','$status')";
        $result = @mysqli_query($db,$query) or die(mysqli_error($db));
        if(mysqli_affected_rows($db) > 0){
            return true;
        }
        return false;
    }
    function getAllServicesCategories(){
        global $db;
        $query = "SELECT * FROM `services_category`";
        $result = @mysqli_query($db,$query) or die (mysqli_error($db));
        return mysqli_fetch_all($result,MYSQLI_ASSOC);
    }
    function getServiceData($id){
        global $db;
        $query = "SELECT * FROM `services` WHERE `id` = '$id'";
        $result = @mysqli_query($db,$query) or die(mysqli_error($db));
        return mysqli_fetch_assoc($result);
    }
    function updateService($id,$class,$service_title,$category_id,$service_description,$status){
        global $db;
       $query = "UPDATE `services` SET `class` = '$class', `service_title` = '$service_title', `category_id` = '$category_id', `service_description` = '$service_description', `status` = '$status' WHERE `id` = '$id'";
       $result = @mysqli_query($db,$query) or die(mysqli_error($db));
       if(mysqli_affected_rows($db) > 0){
           return true;
       }
       return false;
    }
    function deleteCategory($id){
        global $db;
        $query = "DELETE FROM `services_category` WHERE `id` = '$id'";
        $result = @mysqli_query($db,$query) or die(mysqli_error($db));
        if(mysqli_affected_rows($db) > 0){
            return true;
        }
        return false;
    }
    function getServiceCategoryData($id){
        global $db;
        $query = "SELECT * FROM `services_category` WHERE `id` = '$id'";
        $result = @mysqli_query($db,$query) or die(mysqli_error($db));
        return mysqli_fetch_assoc($result);
    }
    function saveServiceCategory($name,$status){
        global $db;
        $query = "INSERT INTO `services_category` (`name`,`status`) VALUES ('$name','$status')";
        $result = mysqli_query($db,$query) or die(mysqli_error($db));
        if(mysqli_affected_rows($db) > 0){
            return true;
        }
        return false;
    }
    function updateServiceCategories($id,$name,$status){
        global $db;
        $name = strip_tags(htmlspecialchars(mysqli_real_escape_string($db,$name)));
        $query = "UPDATE `services_category` SET `name` = '$name', `status` = '$status' WHERE `id` = '$id'";
        $result = @mysqli_query($db,$query) or die (mysqli_error($db));
        if(mysqli_affected_rows($db) > 0){
            return true;
        }
        return false;
    }
