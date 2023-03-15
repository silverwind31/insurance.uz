<?php
    require_once "menu.php"; // DATABASE
    require_once "socialLinks.php"; // СОЦИАЛЬНЫЕ СЕТИ
    require_once "slider.php"; // SLIDER
    require_once "news.php"; // НОВОСТИ
    require_once "services.php"; // СЕРВИСЫ
    require_once "testimonial.php"; // ОТЗЫВЫ
    require_once "order_form.php"; // ФОРМА ЗАКАЗА
    require_once "settings.php"; // НАСТРОЙКИ
    require_once "team.php"; // НАША КОМАНДА
    require_once "project.php"; // ПРОЕКТЫ
    require_once "brands.php"; // НАШИ КОМПАНИИ
    require_once "user.php"; //


    # Some functions belonged to DB
    function addSeenCount($tableName, $rowName, $modelId){
        global $db;
        $query = "SELECT $rowName FROM $tableName WHERE `id` = $modelId";
        $result = @mysqli_query($db,$query) or die(mysqli_error($db));
        $currentCount = mysqli_fetch_assoc($result)[$rowName];
        $currentCount ++;
        $updateQuery = "UPDATE $tableName SET `$rowName` = $currentCount WHERE `id` = $modelId";
        $updateResult = @mysqli_query($db,$updateQuery) or die(mysqli_error($db));

        if(mysqli_affected_rows($db) > 0){
            return true;
        }
        return false;
    }

    #TABLE COUNTS
    function getTableCounts($tableName){
        global $db;
        $query = "SELECT COUNT(`id`) as data_count FROM `$tableName`";
        $result = mysqli_query($db,$query) or die(mysqli_error($db));
        return mysqli_fetch_assoc($result)['data_count'];
    }