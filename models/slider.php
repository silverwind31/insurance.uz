<?php
    function getAllFrontSlides(){
        global $db;
        $query = "SELECT * FROM `slider` WHERE `status` = 1 ORDER BY `id` ASC";
        $result = @mysqli_query($db,$query) or die (mysqli_error($db));
        return mysqli_fetch_all($result,MYSQLI_ASSOC);
    }
    function getAllSliders(){
        global $db;
        $query = "SELECT * FROM `slider`";
        $result = @mysqli_query($db,$query) or die (mysqli_error($db));
        return mysqli_fetch_all($result,MYSQLI_ASSOC);
    }

    #BACKEND
    function deleteSliders($id){
        global $db;
        $query = "DELETE FROM `slider` WHERE `id` = '$id'";
        $result = @mysqli_query($db,$query) or die(mysqli_error($db));
        if(mysqli_affected_rows($db) > 0){
            return true;
        }
        return false;
    }

    function saveSlider($title,$subtitle,$video_btn,$button_text,$video_link,$button_link,$status){
        global $db;
        $query = "INSERT INTO `slider` (`video_btn`,`video_link`,`subtitle`,`title`,`button_text`,`button_link`,`status`) VALUES ('$video_btn','$video_link','$subtitle','$title','$button_text','$button_link','$status')";
        $result = @mysqli_query($db,$query) or die(mysqli_error($db));
        if(mysqli_affected_rows($db) > 0){
            return mysqli_insert_id($db);
        }
        return false;
    }
    function getSliderData($id){
        global $db;
        $query = "SELECT * FROM `slider` WHERE `id` = '$id'";
        $result = @mysqli_query($db,$query) or die (mysqli_error($db));
        return mysqli_fetch_assoc($result);
    }
    function updateSlider($id,$title,$subtitle,$video_btn,$video_link,$button_link,$button_text,$status){
        global $db;
        $query = "UPDATE `slider` SET `title` = '$title', `subtitle` = '$subtitle', `video_btn` = '$video_btn', `video_link` = '$video_link', `button_link` = '$button_link', `button_text` = '$button_text', `status` = '$status' WHERE `id` = '$id'";
        $result = mysqli_query($db,$query) or die (mysqli_error($db));
        return true;
    }

