<?php
    function getAllTestimonials(){
        global $db;
        $query = "SELECT * FROM `testimonial` WHERE `status` = 1";
        $result = @mysqli_query($db,$query) or die (mysqli_error($db));
        return mysqli_fetch_all($result,MYSQLI_ASSOC);
    }
    function getAllTestimonialsData(){
        global $db;
        $query = "SELECT * FROM `testimonial`";
        $result = @mysqli_query($db,$query) or die (mysqli_error($db));
        return mysqli_fetch_all($result,MYSQLI_ASSOC);
    }
    function deletetestimonial($id){
        global $db;
        $query = "DELETE FROM `testimonial` WHERE `id` = '$id'";
        $result = mysqli_query($db, $query) or die(mysqli_error($db));
        if(mysqli_affected_rows($db) > 0){
            return true;
        }
        return false;
    }
    function saveTestimonial($body,$name,$job,$status){
        global $db;
        $query = "INSERT INTO `testimonial` (`body`,`name`,`job`,`status`) VALUES ('$body','$name','$job','$status')";
        $result = mysqli_query($db,$query) or die (mysqli_error($db));
        if(mysqli_affected_rows($db) > 0){
            return mysqli_insert_id($db);
        }
        return false;
    }
    function getTestimonialData($id){
        global $db;
        $query = "SELECT * FROM `testimonial` WHERE `id` = '$id'";
        $result = @mysqli_query($db,$query) or die (mysqli_error($db));
        return mysqli_fetch_assoc($result);
    }
    function updateTestimonial($id,$body,$name,$job,$status){
        global $db;
        $query = "UPDATE `testimonial` SET `body` = '$body', `name` = '$name', `job` = '$job', `status` = '$status' WHERE `id` = '$id'";
        $result = mysqli_query($db,$query) or die(mysqli_error($db));
        return true;
    }
