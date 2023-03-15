<?php
    session_start();
    # MODEL
    require_once __DIR__ . "/../../models/models.php";
    if(!empty($_SESSION['user'])){
        $page = (!empty($_GET['p'])) ? $_GET['p']: 'main';
        $errorMessage = '';
        switch ($page){
            case 'main':
                require_once __DIR__ . "/../views/index.php";
            break;

            case 'logout':
                unset($_SESSION['user']);
                header('refresh: 0; url=/admin');
            break;

            # MENU CRUD

            # GET MENUS BY POSITION
            case 'menu_by_position':
                $output = "<option value=\"0\">O'zi asosiy</option>";
                $position = $_POST['position'];
                $currentPosition = getParentMenus($position);
                if(!empty($currentPosition)){
                    foreach ($currentPosition as $item){
                        $output .= "<option value='{$item['id']}'>{$item['title']}</option>";
                    }
                }
                echo $output;
            break;
            #READ
            case 'menu':
                $menus = getAllMenus();
                require_once __DIR__ . "/../views/menu.php";
            break;

            #CREATE
            case "menu-add":
                $menuData = [];
                if(!empty($_POST)){
                    $title = $_POST['title'];
                    $link = $_POST['link'];
                    $position = $_POST['position'];
                    $parent = $_POST['parent'];
                    $orderBy = $_POST['order_by'];
                    if(!empty($_POST['status'])){
                        $status = 1;
                    }else{
                        $status = 0;
                    }
                    if(!empty($title) && !empty($link) && !empty($position) && !empty($orderBy)){
                        if(saveMenu($title,$link,$position,$orderBy)){
                            header('refresh: 0; url=/?p=menu');
                        }
                    }else{
                        $errorMessage = "To'liq to'ldirilmadi!";
                    }
                }
                require_once __DIR__ . "/../views/menu_form.php";
                break;

            #EDIT
            case 'menu-edit':
                $id = (!empty($_GET['id']) ? $_GET['id'] : null);
                if(!empty($id)){
                    $menuData = getMenuDataById($id);
                    $positionParent = getParentMenus($menuData['position']);
                    if(!empty($menuData)){
                        if(!empty($_POST)){
                            $id = $_POST['id'];
                            $link = $_POST['link'];
                            $title = $_POST['title'];
                            $position = $_POST['position'];
                            $parent = $_POST['parent'];
                            $orderBy = $_POST['order_by'];

                            if(!empty($_POST['status'])){
                                $status = 1;
                            }else{
                                $status = 0;
                            }

                            if(!empty($id) && !empty($title) && !empty($link) && !empty($position) && !empty($orderBy)){
                                if(updateMenu($id,$title,$link,$position,$parent,$orderBy,$status)){
                                    header('refresh: 0; url=?p=menu');
                                }
                            }
                        }
                        require_once __DIR__ . "/../views/menu_form.php";
                    }else{
                        require_once __DIR__ . "/../views/404.php";
                    }

                }else{
                    require_once __DIR__ . "/../views/404.php";
                }
            break;

            #DELETE
            case 'menu-delete':
                $id = (!empty($_GET['id'])) ? $_GET['id'] : null;
                if(!empty($id)){
                    if(deleteMenuById($id)){
                        header('refresh: 0; url=?p=menu');
                    }
                }
            break;

            // SOCIAL CRUD

            #SOCIAL READ
            case 'social':
                $socialLinks = getAllSocialLinks();
                require_once __DIR__ . "/../views/social.php";
            break;

            #SOCIAL CREATE
            case 'social-add':
                $socialData = [];
                if(!empty($_POST)){
                    $title = $_POST['title'];
                    $link = $_POST['link'];
                    $orderBy = $_POST['order_by'];
                    if(!empty($_POST['status'])){
                        $status = 1;
                    }else{
                        $status = 0;
                    }
                    if(!empty($title) && !empty($link) && !empty($orderBy)){
                        if(saveSocial($title,$link,$orderBy)){
                            header('refresh: 0; url=/admin/?p=social');
                        }
                    }else{
                        $errorMessage = "To'liq to'ldirilmadi!";
                    }
                }
                require_once __DIR__ . "/../views/social_form.php";
            break;

            #SOCIAL DELETE
            case 'social-delete':
                $id = (!empty($_GET['id'])) ? $_GET['id'] : null;
                if(!empty($id)){
                    if(deleteSocialLinks($id)){
                        header('refresh: 0; url=?p=social');
                    }
                }
            break;

            #SOCIAL UPDATE
            case 'social-edit':
                $id = (!empty($_GET['id']) ? $_GET['id'] : null);
                if(!empty($id)){
                    $socialData = getSocialLinksById($id);
                    if(!empty($socialData)){
                        if(!empty($_POST)){
                            $id = $_POST['id'];
                            $link = $_POST['link'];
                            $title = $_POST['title'];
                            $orderBy = $_POST['order_by'];
                            if(!empty($_POST['status'])){
                                $status = 1;
                            }else{
                                $status = 0;
                            }

                            if(!empty($id) && !empty($title) && !empty($link) && !empty($orderBy)){
                                if(updateSocialLinks($id,$title,$link,$orderBy,$status)){
                                    header('refresh: 0; url=?p=social');
                                }
                            }
                        }
                        require_once __DIR__ . "/../views/social_form.php";
                    }else{
                        require_once __DIR__ . "/../views/404.php";
                    }

                }else{
                    require_once __DIR__ . "/../views/404.php";
                }
            break;

            // SLIDER CRUD

            #SLIDER READ
            case 'slider':
                $allSliders = getAllSliders();
                require_once __DIR__ . "/../views/slider.php";
            break;

            #SLIDER DELETE
            case 'slider-delete':
                $id = (!empty($_GET['id'])) ? $_GET['id'] : null;
                if(!empty($id)){
                    if(deleteSliders($id)){
                        header("refresh: 0; url=?p=slider");
                    }
                }
            break;

            #SLIDER CREATE
            case 'slider-add':
                $sliderData = [];
                if(!empty($_POST)){
                    $title = $_POST['title'];
                    $subtitle = $_POST['subtitle'];
                    $video_btn = $_POST['video_btn'];
                    $button_text = $_POST['button_text'];
                    $video_link = $_POST['video_link'];
                    $button_link = $_POST['button_link'];

                    if(!empty($_POST['status'])){
                        $status = 1;
                    }else{
                        $status = 0;
                    }

                    if(!empty($title) && !empty($button_link) && !empty($button_text)){
                       if($sliderId = saveSlider($title,$subtitle,$video_btn,$button_text,$video_link,$button_link,$status)){
                            if(!empty($_FILES['image'])){
                                if(saveImage('slider',$sliderId,$_FILES['image'])){
                                    header("refresh: 0; url=?p=slider");
                                }
                            }
                       }
                    }
                }
                require_once __DIR__ . "/../views/slider_form.php";
            break;

            #SLIDER UPDATE
            case 'slider-edit':
                if(!empty($_GET['id'])){
                    $id = $_GET['id'];
                    $sliderData = getSliderData($id);
                    $oldImage = $sliderData['image'];
                    if(!empty($sliderData)){
                        if(!empty($_POST)){
                            $id = $_POST['id'];
                            $title = $_POST['title'];
                            $subtitle = $_POST['subtitle'];
                            $video_btn = $_POST['video_btn'];
                            $button_text = $_POST['button_text'];
                            $video_link = $_POST['video_link'];
                            $button_link = $_POST['button_link'];

                            if(!empty($_POST['status'])){
                                $status = 1;
                            }else{
                                $status = 0;
                            }
                            if(!empty($_FILES['image']) && $_FILES['image']['error'] == 0){
                                $image = saveImage('slider',$id,$_FILES['image']);
                                deleteImage('slider',$id,$oldImage);
                            }
                            if(updateSlider($id,$title,$subtitle,$video_btn,$video_link,$button_link,$button_text,$status)){
                                header("refresh: 0; url=?p=slider");
                            }
                        }


                        require_once __DIR__ . "/../views/slider_form.php";
                    }else{
                        require_once __DIR__ . "/../views/404.php";
                    }
                }else{
                    require_once __DIR__ . "/../views/404.php";
                }

            break;

            # SLIDER CRUD END

            #NEWS
            # NEWS-CATEGORY CRUD
            case 'news-category':
                $AdminCategory = getAllNewsAdminCategories();
                require_once  __DIR__ . "/../views/news_category.php";
            break;

            # DELETE
            case "news-category-delete":
                $id = (!empty($_GET['id'])) ? $_GET['id']: null;
                if(!empty($id)){
                    if(deleteNewsCategories($id)){
                        header("refresh: 0; url=?p=news-category");
                    }
                }
            break;

            #CREATE
            case "news-category-add":
                $categoryData = [];
                if(!empty($_POST)){
                    $name = $_POST['name'];
                    if(!empty($_POST['status'])){
                        $status = 1;
                    }else{
                        $status = 0;
                    }
                }
                if(!empty($name)){
                    if(addNewsCategory($name,$status)){
                        header("refresh: 0; url=?p=news-category");
                    }
                }
                require_once  __DIR__ . "/../views/news_category_form.php";
            break;

            #UPDATE
            case "news-category-edit":
                if(!empty($_GET['id'])){
                    $id = $_GET['id'];
                    $categoryData = getNewsCategory($id);
                    if(!empty($categoryData)){
                        if(!empty($_POST)){
                            $id = $_POST['id'];
                            $name = $_POST['name'];
                            if(!empty($_POST['status'])){
                                $status = 1;
                            }else{
                                $status = 0;
                            }
                            if(updateNewsCategory($id,$name,$status)){
                                header("refresh: 0; url=?p=news-category");
                            }
                        }
                        require_once  __DIR__ . "/../views/news_category_form.php";
                    }else{
                        require_once __DIR__ . "/../views/404.php";
                    }
                }else{
                    require_once __DIR__ . "/../views/404.php";
                }
            break;

            #NEWS CRUD
            case "news":
                $allNews =getAllNews();
                require_once __DIR__ . "/../views/news.php";
            break;

            #DELETE
            case "news-delete":
                $id = (!empty($_GET['id'])) ? $_GET['id']: null;
                if(!empty($_GET['id'])){
                    if(deleteNews($id)){
                        header("refresh: 0; url=?p=news");
                    }
                }
            break;

            #CREATE
            case "news-add":
                $newsData = [];
                $allNewsCategories = getAllNewsAdminCategories();
                if(!empty($_POST)){
                    $title = $_POST['title'];
                    $anons = $_POST['anons'];
                    $category_id = $_POST['category_id'];
                    $created_date = date("Y-m-d H:i:s",strtotime($_POST['created_date']));
                    $body = $_POST['body'];
                    $seen_count = $_POST['seen_count'];

                    if(!empty($_POST['status'])){
                        $status = 1;
                    }else{
                        $status = 0;
                    }

                    if(!empty($title) && !empty($category_id) && !empty($created_date) && !empty($body)){
                        if($newsId = addNews($title,$anons,$category_id,$created_date,$body,$seen_count,$status)){
                            if(!empty($_FILES['image'])){
                                saveImage('news',$newsId,$_FILES['image']);
                            }
                            header("refresh: 0; url=?p=news");
                        }
                    }
                }
                require_once __DIR__ . "/../views/news_form.php";
            break;

            #UPDATE
            case "news-edit":
                if(!empty($_GET['id'])){
                    $id = $_GET['id'];
                    $newsData = getNewsData($id);
                    $oldImage = $newsData['image'];
                    if(!empty($newsData)){
                        if(!empty($_POST)){
                            $anons = $_POST['anons'];
                            $title = $_POST['title'];
                            $created_date = date("Y-m-d H:i:s",strtotime($_POST['created_date']));
                            $body = $_POST['body'];
                            $seen_count = $_POST['seen_count'];
                            $category_id = $_POST['category_id'];

                            if(!empty($_POST['status'])){
                                $status = 1;
                            }else{
                                $status = 0;
                            }
                            if(!empty($_FILES['image']) && $_FILES['image']['error'] == 0){
                                $image = saveImage('news',$id,$_FILES['image']);
                                deleteImage('news',$id,$oldImage);
                            }
                            if(updateNews($id,$title,$category_id,$created_date,$body,$seen_count,$status)){
                                header("refresh: 0; url=?p=news");
                            }
                        }


                        require_once __DIR__ . "/../views/news_form.php";
                    }else{
                        require_once __DIR__ . "/../views/404.php";
                    }
                }else{
                    require_once __DIR__ . "/../views/404.php";
                }
            break;

            #SERVICES CRUD

            #READ
            case "services":
                $allServices = getAllServicesData();
                require_once  __DIR__ . "/../views/services.php"
;            break;

            #DELETE
            case "service-delete":
                $id = (!empty($_GET['id'])) ? $_GET['id']: null;
                if(!empty($_GET['id'])){
                    if(deleteService($id)){
                        header("refresh: 0; url=?p=services");
                    }
                }
                break;

            #CREATE
            case "service-add":
                $serviceData = [];
                $serviceCategories = getAllServicesCategories();
                if(!empty($_POST)){
                    $class = $_POST['class'];
                    $service_title = $_POST['service_title'];
                    $category_id = $_POST['category_id'];
                    $service_description = $_POST['service_description'];
                    if(!empty($_POST['status'])){
                        $status = 1;
                    }else{
                        $status = 0;
                    }

                    if(!empty($class) && !empty($category_id) && !empty($service_description) && !empty($service_title)){
                        if(saveService($class,$category_id,$service_description,$service_title,$status)){
                            header("refresh: 0; url=?p=services");
                        }
                    }
                }
                require_once __DIR__ . "/../views/service_form.php";
            break;

            #UPDATE
            case "service-edit":
                if(!empty($_GET['id'])){
                    $id = $_GET['id'];
                    $serviceData = getServiceData($id);
                    $serviceCategories = getAllServicesCategories();
                    if(!empty($serviceData)){
                        if(!empty($_POST)){
                            $class = $_POST['class'];
                            $service_title = $_POST['service_title'];
                            $category_id = $_POST['category_id'];
                            $service_description = $_POST['service_description'];
                            if(!empty($_POST['status'])){
                                $status = 1;
                            }else{
                                $status = 0;
                            }
                            if(updateService($id,$class,$service_title,$category_id,$service_description,$status)){
                                header("refresh: 0; url=?p=services");
                            }
                        }
                        require_once  __DIR__ . "/../views/service_form.php";
                    }else{
                        require_once __DIR__ . "/../views/404.php";
                    }
                }else{
                    require_once __DIR__ . "/../views/404.php";
                }
            break;

            #SERVICES CATEGORIES CRUD
            #READ
            case "services-category":
                $servicesCategories = getAllServicesCategories();
                require_once __DIR__ . "/../views/services_categories.php";
            break;

            #DELETE
            case "service-category-delete":
                $id = (!empty($_GET['id'])) ? $_GET['id']: null;
                if(!empty($_GET['id'])){
                    if(deleteCategory($id)){
                        header("refresh: 0; url=?p=services-category");
                    }
                }
            break;

            #CREATE
            case "service-category-add":
                $serviceCategoryData = [];
                if(!empty($_POST)){
                    $name = $_POST['name'];
                    if(!empty($_POST['status'])){
                        $status = 1;
                    }else{
                        $status = 0;
                    }

                    if(!empty($name)){
                        if(saveServiceCategory($name,$status)){
                            header("refresh: 0; url=?p=services-category");
                        }
                    }
                }
                require_once __DIR__ . "/../views/service_category_form.php";
            break;

            #UPDATE
            case "service-category-edit":
                if(!empty($_GET['id'])){
                    $id = $_GET['id'];
                    $categoryData = getServiceCategoryData($id);
                    if(!empty($categoryData)){
                        if(!empty($_POST)){
                            $name = $_POST['name'];
                            if(!empty($_POST['status'])){
                                $status = 1;
                            }else{
                                $status = 0;
                            }
                            if(updateServiceCategories($id,$name,$status)){
                                header("refresh: 0; url=?p=services-category");
                            }
                        }
                        require_once  __DIR__ . "/../views/service_category_form.php";
                    }else{
                        require_once __DIR__ . "/../views/404.php";
                    }
                }else{
                    require_once __DIR__ . "/../views/404.php";
                }
            break;

            #TESTIMONIAL CRUD
            #READ
            case "testimonial":
                $allTestimonials = getAllTestimonialsData();
                require_once __DIR__ . "/../views/testimonial.php";
            break;

            case "testimonial-delete":
                $id = (!empty($_GET['id'])) ? $_GET['id'] : null;
                if(!empty($_GET['id'])){
                    if(deletetestimonial($id)){
                        header("refresh: 0; url=?p=testimonial");
                    }
                }
            break;

            case "testimonial-add":
                $testimonialData = [];
                if(!empty($_POST)){
                    $body = $_POST['body'];
                    $name = $_POST['name'];
                    $job = $_POST['job'];

                    if(!empty($_POST['status'])){
                        $status = 1;
                    }else{
                        $status = 0;
                    }

                    if(!empty($body) && !empty($name)){
                        if($testimonialId = saveTestimonial($body,$name,$job,$status)){
                            if(!empty($_FILES['image'])){
                                if(saveImage('testimonial',$testimonialId,$_FILES['image'])){
                                    header("refresh: 0; url=?p=testimonial");
                                }
                            }
                        }
                    }
                }
                require_once __DIR__ . "/../views/testimonial_form.php";
            break;

            case "testimonial-edit":
                if(!empty($_GET['id'])){
                    $id = $_GET['id'];
                    $testimonialData = getTestimonialData($id);
                    $oldImage = $testimonialData['image'];
                    if(!empty($_POST)){
                        $body = $_POST['body'];
                        $name = $_POST['name'];
                        $job = $_POST['job'];
                        if(!empty($_POST['status'])){
                            $status = 1;
                        }else{
                            $status = 0;
                        }
                        if(!empty($body) && !empty($name)){
                            if(!empty($_FILES['image']) && $_FILES['image']['error'] == 0){
                                $image = saveImage('testimonial',$id,$_FILES['image']);
                                deleteImage('testimonial',$id,$oldImage);
                            }
                            if(updateTestimonial($id,$body,$name,$job,$status)){
                                header("refresh: 0; url=?p=testimonial");
                            }
                        }
                    }
                    require_once __DIR__ . "/../views/testimonial_form.php";
                }else{
                    require_once __DIR__ . "/../views/404.php";
                }
                break;

            #ORDER FORM
            case "order-form":
                $allOrders = getAllOrders();
                require_once  __DIR__ . "/../views/order_form.php";
            break;
            case "order-view":
                $id = (!empty($_GET['id']) ? $_GET['id']: null);
                if(!empty($_GET['id'])){
                    $orderItem = getOrderById($id);
                    if(!empty($orderItem)){

                        if($orderItem['status'] < 2){
                            orderChangeStatus($id,2);
                        }
                        require_once  __DIR__ . "/../views/order_view.php";
                    }else{
                        require_once __DIR__ . "/../views/404.php";
                    }
                }else{
                    require_once __DIR__ . "/../views/404.php";
                }
            break;
            case "order-sold":
                $id = (!empty($_GET['id']) ? $_GET['id']: null);
                if(!empty($_GET['id'])){
                    $orderItem = getOrderById($id);
                    if(!empty($orderItem)){
                            orderChangeStatus($id,4);
                            header("refresh:0; url=?p=order-form");
                    }else{
                        require_once __DIR__ . "/../views/404.php";
                    }
                }else{
                    require_once __DIR__ . "/../views/404.php";
                }
            break;
            case "order-reject":
                $id = (!empty($_GET['id']) ? $_GET['id']: null);
                if(!empty($_GET['id'])){
                    $orderItem = getOrderById($id);
                    if(!empty($orderItem)){
                        orderChangeStatus($id,3);
                        header("refresh:0; url=?p=order-form");
                    }else{
                        require_once __DIR__ . "/../views/404.php";
                    }
                }else{
                    require_once __DIR__ . "/../views/404.php";
                }
                break;

            #SETTINGS
            case "settings":
                $allSettings = getAllSettings();
                require_once __DIR__ . "/../views/settings.php";
            break;
            case "settings-edit":
                $id = (!empty($_GET['id'])) ? $_GET['id'] : null;
                if(!empty($id)){
                    $settingsItem = getSettingsById($id);
                    if(!empty($settingsItem)){
                        if(!empty($_POST)){
                            $name = $_POST['name'];
                            $value = $_POST['value'];

                            if(updateSettings($id,$name,$value)){
                                header("refresh: 0; url=?p=settings");
                            }
                        }
                        require_once __DIR__ . "/../views/settings_form.php";
                    }else{
                        require_once __DIR__ . "/../views/404.php";
                    }
                }else{
                    require_once __DIR__ . "/../views/404.php";
                }
            break;

            #TEAM CRUD
            case "team":
                $allTeamData = getAllTeamData();
                require_once __DIR__ . "/../views/team.php";
            break;
            case "team-delete":
                $id = (!empty($_GET['id'])) ? $_GET['id'] : null;
                if(!empty($id)){
                    if(deleteTeam($id)){
                        header("refresh: 0; url=?p=team");
                    }
                }
            break;
            case "team-add":
                $teamData = [];
                if(!empty($_POST)){
                    $name = $_POST['name'];
                    $facebook_link = $_POST['facebook_link'];
                    $twitter_link = $_POST['twitter_link'];
                    $instagram_link = $_POST['instagram_link'];
                    $job = $_POST['job'];
                    if(!empty($_POST['status'])){
                        $status = 1;
                    }else{
                        $status = 0;
                    }
                    if(!empty($twitter_link) && !empty($name) && !empty($facebook_link) && !empty($instagram_link)){
                        if($teamId = saveTeamMember($name,$facebook_link,$twitter_link,$instagram_link,$job,$status)){
                            if(!empty($_FILES['image'])){
                                if(saveImage('team',$teamId,$_FILES['image'])){
                                    header("refresh: 0; url=?p=team");
                                }
                            }
                        }
                    }
                }
                require_once __DIR__ . "/../views/team_form.php";
            break;
            case "team-edit":
                if(!empty($_GET['id'])){
                    $id = $_GET['id'];
                    $teamData = getTeamData($id);
                    $oldImage = $teamData['image'];
                    if(!empty($teamData)){
                        if(!empty($_POST)){
                            $id = $_POST['id'];
                            $name = $_POST['name'];
                            $facebook_link = $_POST['facebook_link'];
                            $twitter_link = $_POST['twitter_link'];
                            $instagram_link = $_POST['instagram_link'];
                            $job = $_POST['job'];
                            if(!empty($_POST['status'])){
                                $status = 1;
                            }else{
                                $status = 0;
                            }
                            if(!empty($_FILES['image']) && $_FILES['image']['error'] == 0){
                                $image = saveImage('team',$id,$_FILES['image']);
                                deleteImage('team',$id,$oldImage);
                            }
                            if(updateTeam($id,$name,$facebook_link,$twitter_link,$instagram_link,$job,$status)){
                                header("refresh: 0; url=?p=team");
                            }
                        }
                        require_once __DIR__ . "/../views/team_form.php";
                    }else{
                        require_once __DIR__ . "/../views/404.php";
                    }
                }else{
                    require_once __DIR__ . "/../views/404.php";
                }
                break;

            #PROJECT
            case "projects":
                $allProjectsData = getAllProjectsData();
                require_once __DIR__ . "/../views/project.php";
            break;
            case "project-delete":
                $id = (!empty($_GET['id'])) ? $_GET['id'] : null;
                if(!empty($id)){
                    if(deleteProject($id)){
                        header("refresh: 0; url=?p=projects");
                    }
                }
            break;
            case "project-add":
                $projectData = [];
                if(!empty($_POST)){
                    $title = $_POST['title'];
                    $subtitle = $_POST['subtitle'];
                    if(!empty($_POST['status'])){
                        $status = 1;
                    }else{
                        $status = 0;
                    }
                    if(!empty($title) && !empty($subtitle)){
                        if($projectId = saveProject($title,$subtitle,$status)){
                            if(!empty($_FILES['image'])){
                                if(saveImage('project',$projectId,$_FILES['image'])){
                                    header("refresh: 0; url=?p=projects");
                                }
                            }
                        }
                    }
                }
                require_once __DIR__ . "/../views/project_form.php";
            break;
            case "project-edit":
                if(!empty($_GET['id'])){
                    $id = $_GET['id'];
                    $projectData = getProjectData($id);
                    $oldImage = $projectData['image'];
                    if(!empty($projectData)){
                        if(!empty($_POST)){
                            $id = $_POST['id'];
                            $title = $_POST['title'];
                            $subtitle = $_POST['subtitle'];
                            if(!empty($_POST['status'])){
                                $status = 1;
                            }else{
                                $status = 0;
                            }
                            if(!empty($_FILES['image']) && $_FILES['image']['error'] == 0){
                                $image = saveImage('project',$id,$_FILES['image']);
                                deleteImage('project',$id,$oldImage);
                            }
                            if(updateProject($id,$title,$subtitle,$status)){
                                header("refresh: 0; url=?p=projects");
                            }
                        }


                        require_once __DIR__ . "/../views/project_form.php";
                    }else{
                        require_once __DIR__ . "/../views/404.php";
                    }
                }else{
                    require_once __DIR__ . "/../views/404.php";
                }
            break;

            #BRANDS
            case "brands":
                $allBrands = getAllBrandsData();
                require_once __DIR__ . "/../views/brands.php";
            break;

            case "brand-delete":
                $id = (!empty($_GET['id'])) ? $_GET['id'] : null;
                if(!empty($id)){
                    if(deleteBrand($id)){
                        header("refresh: 0; url=?p=brands");
                    }
                }
            break;
            case "brand-add":
                $brandData = [];
                if(!empty($_POST)){
                    if(!empty($_POST['status'])){
                        $status = 1;
                    }else{
                        $status = 0;
                    }
                    if($brandId = saveBrand($status)){
                            if(!empty($_FILES['image'])){
                                if(saveImage('brands',$brandId,$_FILES['image'])){
                                    header("refresh: 0; url=?p=brands");
                                }
                            }
                        }
                }
                require_once __DIR__ . "/../views/brands_form.php";
            break;
            default:
                require_once __DIR__ . "/../views/404.php";
            break;
        }
    }else{
        $errorMessage = '';
        if(!empty($_POST)){
            $username = $_POST['username'];
            $password = sha1($_POST['password']);
            if(!empty($username) && !empty($password)){
                if($loginData = login($username, $password)){
                    $_SESSION['user'] = $loginData;
                    header('refresh:0');
                }else{
                    $errorMessage = "login yoki parol xato";
                }
            }else{
                $errorMessage = "Login yoki parol kiritilmadi!";
            }
        }
        require_once __DIR__ . "/../views/login.php";
    }
