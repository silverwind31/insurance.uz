<?php
    function addOrder($name,$email,$type){
        global $db;
        $name = strip_tags(htmlspecialchars(mysqli_real_escape_string($db,$name)));
        $email = strip_tags(htmlspecialchars(mysqli_real_escape_string($db,$email)));
        $date = date("Y-m-d H:i:s");
        $query = "INSERT INTO `order_form` (`name`,`email`,`insurance_type`,`date`) VALUES ('$name','$email','$type','$date')";
        $result = @mysqli_query($db,$query) or die(mysqli_error($db));
        if(mysqli_affected_rows($db) > 0){
            return true;
        }
        return false;
    }
    function getAllOrders(){
        global $db;
        $query = "SELECT * FROM `order_form`";
        $result = @mysqli_query($db,$query) or die(mysqli_error($db));
        return mysqli_fetch_all($result,MYSQLI_ASSOC);
    }
    function getOrderById($id){
        global $db;
        $query = "SELECT * FROM `order_form` WHERE `id` = '$id'";
        $result = @mysqli_query($db,$query) or die(mysqli_error($db));
        return mysqli_fetch_assoc($result);
    }
    function orderChangeStatus($id,$statusValue){
        global $db;
        $query = "UPDATE `order_form` SET `status` = '$statusValue' WHERE `id` = $id";
        $result = @mysqli_query($db,$query) or die(mysqli_error($db));
        if(mysqli_affected_rows($db) > 0){
            return true;
        }
        return false;
    }
