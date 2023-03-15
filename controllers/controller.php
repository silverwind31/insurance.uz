<?php

    //MODEL
    require_once __DIR__ . "/../models/models.php";

    $allMenus = getAllFrontMenus(HEADER_MENU_POSITION);
    $socialLinks = getAllLinks(HEADER_MENU_POSITION);
    $allSlides = getAllFrontSlides();
    $allNews = getAllFrontNews();
    $allNewsCategories = getAllNewsCategories();
    $topNews = getTopNews();
    $services = getAllServices();
    $testimonials = getAllTestimonials();
    $footerMenus = getAllFrontMenus(FOOTER_MENU_POSITION);
    $team = getTeamInfos();
    $project = getProjectDetails();
    $brands = getBrands();

    $page = (!empty($_GET['page'])) ? $_GET['page'] : '';
    if(!empty($page)){
        switch ($page){
            case 'news-view':
                $id = $_GET['id'];
                if (!empty($id)){
                    $newsData = getNewsDataById($id);
                    if(!empty($newsData)){
                        $seenCount = addSeenCount('news', 'seen_count', $id);
                        require_once __DIR__ . "/../views/news-view.php";
                    }else{
                        require_once __DIR__ . "/../views/404.php";
                    }
                }
                break;

            case 'news-category':
                $newsCategory = $_GET['id'];
                $categoryData = getNewsCategoryById($newsCategory);
                $categoryNews = getNewsByCategory($newsCategory);
                require_once __DIR__ . "/../views/news-category.php";

                break;
            case 'all-news':
                require_once __DIR__ . "/../views/all-news.php";
            break;
            case 'service-details':
                if($id = $_GET['id']){
                    $id = $_GET['id'];
                    $servicesData = getServicesDataById($id);
                    require_once __DIR__ . "/../views/service-details.php";
                }else{
                    require_once __DIR__ . "/../views/404.php";
                }
                break;
            case 'all-services':
                require_once __DIR__ . "/../views/all-services.php";
                break;
            default:
                require_once __DIR__ . "/../views/404.php";
        }
    }else{
        if(!empty($_POST)){
            $formName = $_POST['form_name'];
            if(!empty($formName) && $formName == 'order_form'){
                $email = $_POST['email'];
                $name = $_POST['name'];
                $insuranceType = $_POST['insurance_type'];
                if(!empty($email) && !empty($name) && !empty($insuranceType)){
                    if(addOrder($name,$email,$insuranceType)){
                        $message= "Murojaat muvaffaqiyatli jo'natildi";
                        require_once __DIR__ . "/../views/success.php";
                    }else{
                        require_once __DIR__ . "/../views/404.php";
                    }
                }
            }
        }else{
            //VIEW
            require_once __DIR__ . "/../views/index.php";
        }
    }
