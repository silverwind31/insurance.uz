<?php
    function getAllFrontNews(){
        global $db;
        $query = "SELECT * FROM `news` WHERE `status` = 1 ORDER BY `created_date` DESC";
        $result = @mysqli_query($db,$query) or die (mysqli_error($db));
        return mysqli_fetch_all($result,MYSQLI_ASSOC);
    }
    function getNewsDataById($id){
        global $db;
        $query = "SELECT * FROM `news` WHERE `status` = 1 AND `id` = $id";
        $result = @mysqli_query($db,$query) or die(mysqli_error($db));
        return mysqli_fetch_assoc($result);
    }
    function getNewsCategoryById($id){
        global $db;
        $query = "SELECT * FROM `news_category` WHERE `status` = 1 AND `id` = $id";
        $result = @mysqli_query($db,$query) or die(mysqli_error($db));
        return mysqli_fetch_assoc($result);
    }
    function getTopNews(){
        global $db;
        $query = "SELECT * FROM `news` WHERE `status` = 1 ORDER BY `seen_count` DESC";
        $result = @mysqli_query($db,$query) or die(mysqli_error($db));
        return mysqli_fetch_all($result,MYSQLI_ASSOC);
    }
    function getNewsCount($categoryId){
        global $db;
        $query = "SELECT COUNT(`id`) AS news_count FROM `news` WHERE `category_id` = $categoryId";
        $result = @mysqli_query($db,$query) or die(mysqli_error($db));
        return mysqli_fetch_assoc($result)['news_count'];
    }

    // NEWS CATEGORY FUNCTIONS
    function getNewsByCategory($newsCategory){
        global $db;
        $query = "SELECT * FROM `news` WHERE `status` = 1 AND `category_id` = '{$newsCategory}' ORDER BY `created_date`";
        $result = @mysqli_query($db,$query) or die (mysqli_error($db));
        return mysqli_fetch_all($result,MYSQLI_ASSOC);
    }
    function getAllNewsCategories(){
        global $db;
        $query = "SELECT * FROM `news_category` WHERE `status` = 1";
        $result = @mysqli_query($db,$query) or die (mysqli_error($db));
        return mysqli_fetch_all($result,MYSQLI_ASSOC);
    }
    function getAllNewsAdminCategories(){
        global $db;
        $query = "SELECT * FROM `news_category`";
        $result = @mysqli_query($db,$query) or die (mysqli_error($db));
        return mysqli_fetch_all($result,MYSQLI_ASSOC);
    }
    function deleteNewsCategories($id){
        global $db;
        $query = "DELETE FROM `news_category` WHERE `id` = '$id'";
        $result = @mysqli_query($db,$query) or die(mysqli_error($db));
        if(mysqli_affected_rows($db) > 0){
            return true;
        }
        return false;
    }
    function addNewsCategory($name,$status){
        global $db;
        $name = strip_tags(htmlspecialchars(mysqli_real_escape_string($db,$name)));
        $query = "INSERT INTO `news_category` (`name`,`status`) VALUES ('$name','$status')";
        $result = @mysqli_query($db,$query) or die (mysqli_error($db));
        if(mysqli_affected_rows($db) > 0){
            return true;
        }
        return false;
    }
    function getNewsCategory($id){
        global $db;
        $query = "SELECT * FROM `news_category` WHERE `id` = $id";
        $result = @mysqli_query($db,$query) or die(mysqli_error($db));
        return mysqli_fetch_assoc($result);
    }
    function updateNewsCategory($id,$name,$status){
        global $db;
        $name = strip_tags(htmlspecialchars(mysqli_real_escape_string($db,$name)));
        $query = "UPDATE `news_category` SET `name` = '$name', `status` = '$status' WHERE `id` = '$id'";
        $result = @mysqli_query($db,$query) or die (mysqli_error($db));
        if(mysqli_affected_rows($db) > 0){
            return true;
        }
        return false;
    }
    function getAllNews(){
        global $db;
        $query = "SELECT * FROM `news`";
        $result = @mysqli_query($db,$query) or die(mysqli_error($db));
        return mysqli_fetch_all($result, MYSQLI_ASSOC);
    }
    function deleteNews($id){
        global $db;
        $query = "DELETE FROM `news` WHERE `id` = '$id'";
        $result = @mysqli_query($db,$query) or die(mysqli_error($db));
        if(mysqli_affected_rows($db) > 0){
            return true;
        }
        return false;
    }
function addNews($title,$anons,$category_id,$created_date,$body,$seen_count,$status){
    global $db;
    $query = "INSERT INTO `news` (`title`,`category_id`,`anons`,`created_date`,`body`,`seen_count`,`status`) VALUES ('$title','$category_id','$anons','$created_date','$body','$seen_count','$status')";
    $result = @mysqli_query($db,$query) or die (mysqli_error($db));
    if(mysqli_affected_rows($db) > 0){
        return mysqli_insert_id($db);
    }
    return false;
}

    function getNewsData($id){
        global $db;
        $query = "SELECT * FROM `news` WHERE `id` = '$id'";
        $result = mysqli_query($db,$query) or die(mysqli_error($db));
        return mysqli_fetch_assoc($result);
    }
    function updateNews($id,$title,$category_id,$created_date,$body,$seen_count,$status){
        global $db;
        $query = "UPDATE `news` SET `title` = '$title', `category_id` = '$category_id', `created_date` = '$created_date', `body` = '$body', `seen_count` = '$seen_count', `status` = '$status' WHERE `id` = '$id'";
        $result = mysqli_query($db,$query) or die(mysqli_error($db));
        if(mysqli_affected_rows($db) > 0){
            return true;
        }
        return false;
    }

