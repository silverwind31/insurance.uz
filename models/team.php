<?php
    function getTeamInfos(){
        global $db;
        $query = "SELECT * FROM `team` WHERE `status` = 1";
        $result = @mysqli_query($db,$query) or die (mysqli_error($db));
        return mysqli_fetch_all($result,MYSQLI_ASSOC);
    }
    function getAllTeamData(){
        global $db;
        $query = "SELECT * FROM `team`";
        $result = @mysqli_query($db,$query) or die (mysqli_error($db));
        return mysqli_fetch_all($result,MYSQLI_ASSOC);
    }
    function deleteTeam($id){
        global $db;
        $query = "DELETE FROM `team` WHERE `id` = '$id'";
        $result = @mysqli_query($db,$query) or die(mysqli_error($db));
        if(mysqli_affected_rows($db) > 0){
            return true;
        }
        return false;
    }
    function saveTeamMember($name,$facebook_link,$twitter_link,$instagram_link,$job,$status){
        global $db;
        $query = "INSERT INTO `team` (`name`,`facebook_link`,`twitter_link`,`instagram_link`,`job`,`status`) VALUES ('$name','$facebook_link','$twitter_link','$instagram_link','$job','$status')";
        $result = @mysqli_query($db,$query) or die(mysqli_error($db));
        if(mysqli_affected_rows($db) > 0){
            return mysqli_insert_id($db);
        }
        return false;
    }
    function getTeamData($id){
        global $db;
        $query = "SELECT * FROM `team` WHERE `id` = '$id'";
        $result = @mysqli_query($db,$query) or die (mysqli_error($db));
        return mysqli_fetch_assoc($result);
    }
    function updateTeam($id,$name,$facebook_link,$twitter_link,$instagram_link,$job,$status){
        global $db;
        $query = "UPDATE `team` SET `name` = '$name',`facebook_link` = '$facebook_link',`twitter_link` ='$twitter_link',`instagram_link` = '$instagram_link',`job` = '$job',`status` = '$status' WHERE `id` = '$id'";
        $result = @mysqli_query($db,$query) or die(mysqli_error($db));
        return true;
    }

