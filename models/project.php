<?php
    function getProjectDetails(){
        global $db;
        $query = "SELECT * FROM `project` WHERE `status` = 1";
        $result = @mysqli_query($db, $query) or die(mysqli_error($db));
        return mysqli_fetch_all($result, MYSQLI_ASSOC);
    }
    function getAllProjectsData(){
        global $db;
        $query = "SELECT * FROM `project`";
        $result = @mysqli_query($db, $query) or die(mysqli_error($db));
        return mysqli_fetch_all($result, MYSQLI_ASSOC);
    }
    function deleteProject($id){
        global $db;
        $query = "DELETE FROM `project` WHERE `id` = '$id'";
        $result = @mysqli_query($db,$query) or die(mysqli_error($db));
        if(mysqli_affected_rows($db) > 0){
            return true;
        }
        return false;
    }
    function saveProject($title,$subtitle,$status){
        global $db;
        $query = "INSERT INTO `project` (`title`,`subtitle`,`status`) VALUES ('$title','$subtitle','$status')";
        $result = @mysqli_query($db,$query) or die(mysqli_error($db));
        if(mysqli_affected_rows($db) > 0){
            return mysqli_insert_id($db);
        }
        return false;
    }
    function getProjectData($id){
        global $db;
        $query = "SELECT * FROM `project` WHERE `id` = '$id'";
        $result = @mysqli_query($db, $query) or die(mysqli_error($db));
        return mysqli_fetch_assoc($result);
    }
    function updateProject($id,$title,$subtitle,$status){
        global $db;
        $title = mysqli_real_escape_string($db,$title);
        $subtitle = mysqli_real_escape_string($db,$subtitle);
        $query = "UPDATE `project` SET `title` = '$title',`subtitle` = '$subtitle',`status` = '$status' WHERE `id` = '$id'";
        $result = @mysqli_query($db,$query) or die (mysqli_error($db));
        return true;
}