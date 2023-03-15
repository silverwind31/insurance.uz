<?php
    function debug($arr){
        echo "<pre>";
        print_r($arr);
        echo "</pre>";
    }

    // FUNCTION FOR MENU
    function generateHeaderMenu($menu)
    {
        $menuChildren = getMenuChildren($menu['id']);
        $result = "";

        if ($menu['parent'] == 0) {
            if (empty($menuChildren)) {
                $result = "<li><a href='{$menu['link']}'>{$menu['title']}</a></li>";
            } else {

                $result .=
                    "<li class='has-dropdown'>
                        <a href='{$menu['link']}'>{$menu['title']}</a> 
                        <ul class='submenu'>";
                foreach ($menuChildren as $child) {
                    $result .= "<li><a href='{$child['link']}'>{$child['title']}</a></li>";
                }
                $result .= "</ul></li>";
            }
        }
        return $result;
    }

    // FUNCTION FOR SLIDER BACKGROUND
    function getImage($tableName, $model, $rowName){
        $modelId = 0;
        $fileName = "";
        if(isset($model[$rowName])){
            $modelId = $model['id'];
            $fileName = $model[$rowName];
        }
        $file = __DIR__ . "/uploads/$tableName/$modelId/$fileName";

        if(is_file($file)){
            return "/uploads/$tableName/$modelId/$fileName";
        }
        return "/uploads/mo-image.jpg";
    }

    #FUNCTION FOR SAVE SLIDER IMAGE
    function saveImage($tableName,$id,$imageArray){
        global $db;
        $dir = __DIR__ . "/uploads/$tableName/$id/";
        $ext = '';
        switch ($imageArray['type']){
            case 'image/png':
                $ext = ".png";
            break;
            case 'image/jpeg':
                $ext = ".jpeg";
            break;
            case 'image/gif':
                $ext = ".gif";
            break;
            case 'image/bmp':
                $ext = ".bmp";
            break;
        }
        $fileName = $tableName . sha1($imageArray['name'] . time());
        $fileName .= $ext;
        $fullFileDir = $dir . $fileName . $ext;
        if(!is_dir($dir)){
            mkdir($dir,0777, true);
        }
        if(move_uploaded_file($imageArray['tmp_name'],$fullFileDir)){
            $query = "UPDATE `$tableName` SET `image` = '$fileName' WHERE `id` = '$id'";
            $result = mysqli_query($db,$query) or die(mysqli_error($db));
            if(mysqli_affected_rows($db) > 0){
                return true;
            }
        }
    }

    function deleteImage($tableName,$id,$guid){
        $fileName = __DIR__ . "/uploads/$tableName/$id/$guid";
        if(is_file($fileName)){
            unlink($fileName);
        }
}
