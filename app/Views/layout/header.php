<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<!-- BEGIN: Head-->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1.0,user-scalable=0,minimal-ui">
    <meta name="description" content="Vuexy admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
    <meta name="keywords" content="admin template, Vuexy admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="PIXINVENT">
    <title>Checkout - Vuexy - Bootstrap HTML admin template</title>
    <link rel="apple-touch-icon" href="../app-assets/images/ico/apple-icon-120.png">
    <link rel="shortcut icon" type="image/x-icon" href="../app-assets/images/ico/favicon.ico">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;1,400;1,500;1,600" rel="stylesheet">

    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="../app-assets/vendors/css/vendors.min.css">
    
    <!-- END: Vendor CSS-->

    <!-- BEGIN: Theme CSS-->
    <link rel="stylesheet" type="text/css" href="../app-assets/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="../app-assets/css/bootstrap-extended.css">
    <link rel="stylesheet" type="text/css" href="../app-assets/css/colors.css">
    <link rel="stylesheet" type="text/css" href="../app-assets/css/components.css">
    

    <!-- BEGIN: Page CSS-->
    <link rel="stylesheet" type="text/css" href="../app-assets/css/core/menu/menu-types/vertical-menu.css">
    
    <!-- END: Page CSS-->

    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="../assets/css/style.css">
    <!-- END: Custom CSS-->

</head>
<!-- BEGIN: Body-->

<body class="vertical-layout vertical-menu-modern  navbar-floating footer-static  " data-open="click" data-menu="vertical-menu-modern" data-col="">

    <!-- BEGIN: Header-->
    <nav class="header-navbar navbar navbar-expand-lg align-items-center floating-nav navbar-light navbar-shadow">
        <div class="navbar-container row content">
            <div class="bookmark-wrapper align-items-center w-100">

                <section class="chat-app-window w-100">
                    <div class="active-chat ">
                        <!-- Chat Header -->
                        <div class="chat-navbar">
                            <header class="row justify-content-between">
                                <div class="col mobpl-0">
                                    <div class="row justify-content-center">
                                        <div class="row align-items-center col-lg col-sm-12  mx-md-0 pl-sm-0 pl-md-1 ">
                                            <div class="sidebar-chat-toggle d-block d-lg-none mx-50">
                                                <i data-feather="chevron-left" class="font-medium-5"></i>
                                            </div>
                                            <div class="avatar avatar-border user-profile-toggle m-0 mr-1">
                                                <div id="userImage">
                                                    <img src="../app-assets/images/portrait/small/avatar-s-7.jpg" alt="avatar" height="36" width="36" />
                                                </div>
                                                <span class="avatar-status-busy"></span>
                                            </div>
                                            <h6 id="nameHeader" class="mb-0">Kristopher Candy</h6>
                                           
                                            <div class="d-sm-flex d-none">
                                                <div class="block mute d-flex mx-1">
                                                    <i data-feather="bell-off" class="col cursor-pointer font-small-3 border-right px-50"></i>

                                                    <i data-feather="slash" class="col cursor-pointer font-small-3 px-50"></i>
                                                </div>
                                            </div>
                                            <div class="row align-items-center  col d-lg-none">
                                                <i data-feather="phone-call" class="cursor-pointer  font-small-3 mr-1 ml-auto"></i>
                                                <li class="nav-item nav-search d-inline"><a class="nav-link nav-link-search"><i class="ficon font-small-3" data-feather="search"></i></a>
                                                    <div class="search-input">
                                                        <div class="search-input-icon cursor-pointer"><i data-feather="search"></i></div>
                                                        <input class="form-control input" type="text" placeholder="Search Conversation" tabindex="-1" data-search="search" id="myFilter" onkeyup="filli()">
                                                        <div class="search-input-close"><i data-feather="x"></i></div>
                                                    </div>
                                                </li>
                                                <div class="dropdown">
                                                    <button class="btn-icon btn btn-transparent hide-arrow btn-sm dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        <i data-feather="more-vertical" id="chat-header-actions" class="font-small-3"></i>
                                                    </button>
                                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="chat-header-actions">
                                                        <a class="dropdown-item view-pinned" href="javascript:void(0);">View Pinned</a>
                                                        <a class="dropdown-item show-thread" href="javascript:void(0);">Show Threads</a>
                                                        <a class="dropdown-item select-multiple" href="javascript:void(0);">Select Multiple</a>
                                                        <a class="dropdown-item" href="javascript:void(0);">Mute Notifications</a>
                                                        <a class="dropdown-item" href="javascript:void(0);">Block Contact</a>
                                                        <a class="dropdown-item" href="javascript:void(0);">Clear Chat</a>
                                                        <a class="dropdown-item" href="javascript:void(0);">Report</a>
                                                        <a class="dropdown-item view-Contact" href="javascript:void(0);">View Contact</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row col-lg-6 col-sm-12">
                                            <section id="basic-tabs-components" class="">
                                                <div class="row match-height ">
                                                    <!-- Basic Tabs starts -->
                                                    <div class="col mob-tab">
                                                        <ul class="nav nav-tabs mb-0 justify-content-around" role="tablist">
                                                            <li class="nav-item">
                                                                <a class="nav-link <?= $menu_nav['chat'] ?>" href="<?= base_url('chat') ?>">Chat</a>
                                                            </li>
                                                            <li class="nav-item">
                                                                <a class="nav-link <?= $menu_nav['board'] ?>" href="<?= base_url('board') ?>">Boards</a>
                                                            </li>

                                                            <li class="nav-item">
                                                                <a class="nav-link <?= $menu_nav['todo'] ?>" href="<?= base_url('todo') ?>">Todo</a>
                                                            </li>
                                                            <li class="nav-item">
                                                                <a class="nav-link <?= $menu_nav['notes'] ?>" href="<?= base_url('notes') ?>">Notes</a>
                                                            </li>
                                                            <li class="nav-item">
                                                                <a class="nav-link <?= $menu_nav['filemanager'] ?>" href="<?= base_url('filemanager') ?>">Files</a>
                                                            </li>
                                                        </ul>

                                                    </div>
                                                    <!-- Basic Tabs ends -->
                                                </div>
                                            </section>
                                            <div class=" align-items-center d-lg-flex d-none">
                                                <i data-feather="phone-call" class="cursor-pointer  font-medium-1 mr-1 ml-auto"></i>
                                                <li class="nav-item nav-search d-inline headerSearchIcon"><a class="nav-link nav-link-search"><i class="ficon font-medium-1" data-feather="search"></i></a>

                                                </li>
                                                <div class="dropdown">
                                                    <button class="btn-icon btn btn-transparent hide-arrow btn-sm dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        <i data-feather="more-vertical" id="chat-header-actions" class="font-medium-1"></i>
                                                    </button>
                                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="chat-header-actions">
                                                        <a class="dropdown-item view-pinned" href="javascript:void(0);">View Pinned</a>
                                                        <a class="dropdown-item show-thread" href="javascript:void(0);">Show Threads</a>
                                                        <a class="dropdown-item select-multiple" href="javascript:void(0);">Select Multiple</a>
                                                        <a class="dropdown-item" href="javascript:void(0);">Mute Notifications</a>
                                                        <a class="dropdown-item" href="javascript:void(0);">Block Contact</a>
                                                        <a class="dropdown-item" href="javascript:void(0);">Clear Chat</a>
                                                        <a class="dropdown-item" href="javascript:void(0);">Report</a>
                                                        <a class="dropdown-item view-Contact" id="contactPage">View Contact</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="search-input headerSearchInput" style="background-color: transparent;">
                                            <div class="search-input-icon cursor-pointer"><i data-feather="search"></i></div>
                                            <input class="form-control input bg-white" type="text" placeholder="Search Conversation" tabindex="-1" data-search="search" id="myFilter" onkeyup="filli()">
                                            <div class="search-input-close"><i data-feather="x"></i></div>
                                            <ul class="searchList scrollable-container ps">
                                                <li class="auto-suggestion  pageTodo ">
                                                    <div class="row">
                                                        <div class="col-md-6 pr-25">
                                                            <div class="row">

                                                                <div class="col-md-12">
                                                                    <div class="filecard-body bg-white rounded">
                                                                        <div class="media media_img_conent">
                                                                            <div class="custom-control f_custm_chek custom-checkbox d-none">
                                                                                <input type="checkbox" class="custom-control-input" id="optionchekbox2">
                                                                                <label class="custom-control-label" for="optionchekbox2"></label>
                                                                            </div>

                                                                            <div class="w-100">

                                                                                <!-- <h5 class=" card-title f_c_t" id="contentedit">silhouette-of-tree-near-body-of-water-during-golden-hour-36717.png</h5> -->
                                                                                <h5 class="card-text todo_cardTitle font_sm div_show outline_block mb-0 text-truncate">Lorem Ipsum is simply dummy text of</h5>

                                                                                <div class=" datefilter sub_details">
                                                                                    <div class="d-flex justify-content-between align-items-center flex-wrap">
                                                                                        <div>
                                                                                            <span class="align-middle pend_ing cursor-pointer">
                                                                                                <i data-feather="square" class="font-small-2 align-middle"></i>
                                                                                                <span class="attachments align-middle ">Pending</span>
                                                                                            </span>
                                                                                            <span class="align-middle d-none check_list cursor-pointer">
                                                                                                <i data-feather="calendar" class="font-small-2 align-middle"></i>
                                                                                                <span class="attachments align-middle markComplete-text">7/20</span>
                                                                                            </span>
                                                                                            <span class="align-middle d-none complet_ed cursor-pointer">
                                                                                                <i data-feather="check-square" class="font-small-2 align-middle"></i>
                                                                                                <span class="attachments align-middle">Completed</span>
                                                                                            </span>

                                                                                            <span class="align-middle">
                                                                                                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-calendar font-small-2 align-middle">
                                                                                                    <rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect>
                                                                                                    <line x1="16" y1="2" x2="16" y2="6"></line>
                                                                                                    <line x1="8" y1="2" x2="8" y2="6"></line>
                                                                                                    <line x1="3" y1="10" x2="21" y2="10"></line>
                                                                                                </svg>
                                                                                                <span class=" attachments align-middle">Due date</span>
                                                                                                <!-- <button id="" type="button" class=" btn  btn-sm dropdown-toggle p-0 font-medium-1" style="font-weight: 200;">01-01-2121</button> -->
                                                                                            </span>
                                                                                        </div>
                                                                                        <ul class="avatar-group mb-0 ml-auto">
                                                                                            <li class="avatar kanban-item-avatar pull-up mr-0 current_item" data-toggle="tooltip" data-placement="top" title="" data-original-title="Bruce"><img src="http://localhost/P4/Project-4/app-assets/images/portrait/small/avatar-s-1.jpg" alt="Avatar" height="28"></li>
                                                                                            <li class="avatar kanban-item-avatar pull-up" data-toggle="tooltip" data-placement="top" title="" data-original-title="Dianna"><img src="http://localhost/P4/Project-4/app-assets/images/portrait/small/avatar-s-2.jpg" alt="Avatar" height="28"></li>
                                                                                        </ul>
                                                                                        <div>

                                                                                            <div class="dropdown-menu d_menu px-50 dropdown-menu-right" aria-labelledby="dropdownMenuAddperson">
                                                                                                <!-- <form action="javascript:void(0);" class="p-1"> -->
                                                                                                <div class="form-group">
                                                                                                    <input id="my_avatar1" type="search" class="form-control search" placeholder="Search...">
                                                                                                </div>
                                                                                                <div id="avatar_g"></div>
                                                                                                <!-- </form> -->
                                                                                            </div>

                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-12">
                                                                    <div class="filecard-body bg-white rounded">
                                                                        <div class="media media_img_conent">
                                                                            <div class="custom-control f_custm_chek custom-checkbox d-none">
                                                                                <input type="checkbox" class="custom-control-input" id="optionchekbox2">
                                                                                <label class="custom-control-label" for="optionchekbox2"></label>
                                                                            </div>

                                                                            <div class="w-100">

                                                                                <!-- <h5 class=" card-title f_c_t" id="contentedit">silhouette-of-tree-near-body-of-water-during-golden-hour-36717.png</h5> -->
                                                                                <h5 class="card-text todo_cardTitle font_sm div_show outline_block mb-0 text-truncate">Lorem Ipsum is simply dummy text of</h5>

                                                                                <div class=" datefilter sub_details">
                                                                                    <div class="d-flex justify-content-between align-items-center flex-wrap">
                                                                                        <div>
                                                                                            <span class="align-middle pend_ing cursor-pointer">
                                                                                                <i data-feather="check-square" class="font-small-2 align-middle"></i>
                                                                                                <span class="attachments align-middle ">Completed</span>
                                                                                            </span>
                                                                                            <span class="align-middle d-none check_list cursor-pointer">
                                                                                                <i data-feather="calendar" class="font-small-2 align-middle"></i>
                                                                                                <span class="attachments align-middle markComplete-text">7/20</span>
                                                                                            </span>
                                                                                            <span class="align-middle d-none complet_ed cursor-pointer">
                                                                                                <i data-feather="check-square" class="font-small-2 align-middle"></i>
                                                                                                <span class="attachments align-middle">Completed</span>
                                                                                            </span>

                                                                                            <span class="align-middle">
                                                                                                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-calendar font-small-2 align-middle">
                                                                                                    <rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect>
                                                                                                    <line x1="16" y1="2" x2="16" y2="6"></line>
                                                                                                    <line x1="8" y1="2" x2="8" y2="6"></line>
                                                                                                    <line x1="3" y1="10" x2="21" y2="10"></line>
                                                                                                </svg>
                                                                                                <span class=" attachments align-middle">Due date</span>
                                                                                                <!-- <button id="" type="button" class=" btn  btn-sm dropdown-toggle p-0 font-medium-1" style="font-weight: 200;">01-01-2121</button> -->
                                                                                            </span>
                                                                                        </div>
                                                                                        <ul class="avatar-group mb-0 ml-auto">
                                                                                            <li class="avatar kanban-item-avatar pull-up mr-0 current_item" data-toggle="tooltip" data-placement="top" title="" data-original-title="Bruce"><img src="http://localhost/P4/Project-4/app-assets/images/portrait/small/avatar-s-1.jpg" alt="Avatar" height="28"></li>
                                                                                            <li class="avatar kanban-item-avatar pull-up" data-toggle="tooltip" data-placement="top" title="" data-original-title="Dianna"><img src="http://localhost/P4/Project-4/app-assets/images/portrait/small/avatar-s-2.jpg" alt="Avatar" height="28"></li>
                                                                                        </ul>
                                                                                        <div>

                                                                                            <div class="dropdown-menu d_menu px-50 dropdown-menu-right" aria-labelledby="dropdownMenuAddperson">
                                                                                                <!-- <form action="javascript:void(0);" class="p-1"> -->
                                                                                                <div class="form-group">
                                                                                                    <input id="my_avatar1" type="search" class="form-control search" placeholder="Search...">
                                                                                                </div>
                                                                                                <div id="avatar_g"></div>
                                                                                                <!-- </form> -->
                                                                                            </div>

                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-12">
                                                                    <div class="filecard-body bg-white rounded">
                                                                        <div class="media media_img_conent">
                                                                            <div class="custom-control f_custm_chek custom-checkbox d-none">
                                                                                <input type="checkbox" class="custom-control-input" id="optionchekbox2">
                                                                                <label class="custom-control-label" for="optionchekbox2"></label>
                                                                            </div>

                                                                            <div class="w-100">

                                                                                <!-- <h5 class=" card-title f_c_t" id="contentedit">silhouette-of-tree-near-body-of-water-during-golden-hour-36717.png</h5> -->
                                                                                <h5 class="card-text todo_cardTitle font_sm div_show outline_block mb-0 text-truncate">Lorem Ipsum is simply dummy text of Lorem Ipsum is simply dummy text of</h5>

                                                                                <div class=" datefilter sub_details">
                                                                                    <div class="d-flex justify-content-between align-items-center flex-wrap">
                                                                                        <div>
                                                                                            <span class="align-middle pend_ing cursor-pointer">
                                                                                                <i data-feather="square" class="font-small-2 align-middle"></i>
                                                                                                <span class="attachments align-middle ">7/20</span>
                                                                                            </span>
                                                                                            <span class="align-middle d-none check_list cursor-pointer">
                                                                                                <i data-feather="calendar" class="font-small-2 align-middle"></i>
                                                                                                <span class="attachments align-middle markComplete-text">7/20</span>
                                                                                            </span>
                                                                                            <span class="align-middle d-none complet_ed cursor-pointer">
                                                                                                <i data-feather="check-square" class="font-small-2 align-middle"></i>
                                                                                                <span class="attachments align-middle">Completed</span>
                                                                                            </span>

                                                                                            <span class="align-middle">
                                                                                                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-calendar font-small-2 align-middle">
                                                                                                    <rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect>
                                                                                                    <line x1="16" y1="2" x2="16" y2="6"></line>
                                                                                                    <line x1="8" y1="2" x2="8" y2="6"></line>
                                                                                                    <line x1="3" y1="10" x2="21" y2="10"></line>
                                                                                                </svg>
                                                                                                <span class=" attachments align-middle">Due date</span>
                                                                                                <!-- <button id="" type="button" class=" btn  btn-sm dropdown-toggle p-0 font-medium-1" style="font-weight: 200;">01-01-2121</button> -->
                                                                                            </span>
                                                                                        </div>
                                                                                        <ul class="avatar-group mb-0 ml-auto">
                                                                                            <li class="avatar kanban-item-avatar pull-up mr-0 current_item" data-toggle="tooltip" data-placement="top" title="" data-original-title="Bruce"><img src="http://localhost/P4/Project-4/app-assets/images/portrait/small/avatar-s-1.jpg" alt="Avatar" height="28"></li>
                                                                                            <li class="avatar kanban-item-avatar pull-up" data-toggle="tooltip" data-placement="top" title="" data-original-title="Dianna"><img src="http://localhost/P4/Project-4/app-assets/images/portrait/small/avatar-s-2.jpg" alt="Avatar" height="28"></li>
                                                                                        </ul>
                                                                                        <div>

                                                                                            <div class="dropdown-menu d_menu px-50 dropdown-menu-right" aria-labelledby="dropdownMenuAddperson">
                                                                                                <!-- <form action="javascript:void(0);" class="p-1"> -->
                                                                                                <div class="form-group">
                                                                                                    <input id="my_avatar1" type="search" class="form-control search" placeholder="Search...">
                                                                                                </div>
                                                                                                <div id="avatar_g"></div>
                                                                                                <!-- </form> -->
                                                                                            </div>

                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                            </div>
                                                        </div>

                                                        <div class="col-md-6 pl-25 mb-50">
                                                            <div class="card h-100">
                                                                <!-- Change the sibling div to col-md-6 and child div tp col-md-12 to get the same effect with a white patch at right side. -->
                                                                <!-- EMPTY -->
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="auto-suggestion pageFileManager d-none">
                                                    <div class="row">
                                                        <div class="col-md-6 pr-25">
                                                            <div class="row">

                                                                <div class="col-md-12">
                                                                    <div class="filecard-body bg-white rounded">
                                                                        <div class="media media_img_conent"><span class="avatar avatar-add-member mr-1 uncheck"><span class=" add_person font_sm avatar-content ml-0 text-primary" style=" font-weight: 200;">IMG
                                                                                </span></span>
                                                                            <div class="f_w_c">
                                                                                <h5 class=" card-title f_c_t" id="contentedit_20" onclick="exploreFolder(20)">lmage view1</h5>
                                                                                <div class="f_b_conent datefilter"><span class="formate">PNG</span><span class="a_size">925Kb</span><span class="a_date" datevalue="2">Feb 05</span></div>
                                                                            </div>
                                                                            <div class="media_block_two">
                                                                                <div class="f_min_block_right media">
                                                                                    <div class="a_delet">
                                                                                        <i data-feather="star" class="icon_fill"></i>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-12">
                                                                    <div class="filecard-body bg-white rounded">
                                                                        <div class="media media_img_conent"><span class="avatar avatar-add-member mr-1 uncheck"><span class=" add_person font_sm avatar-content ml-0 text-warning" style=" font-weight: 200;">PDF
                                                                                </span></span>
                                                                            <div class="f_w_c">
                                                                                <h5 class=" card-title f_c_t" id="contentedit_20" onclick="exploreFolder(20)">lmage view1</h5>
                                                                                <div class="f_b_conent datefilter"><span class="formate">PDF</span><span class="a_size">925Kb</span><span class="a_date" datevalue="2">Feb 05</span></div>
                                                                            </div>
                                                                            <div class="media_block_two">
                                                                                <div class="f_min_block_right media">
                                                                                    <div class="a_delet">
                                                                                        <i data-feather="star" class="icon_fill"></i>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-12">
                                                                    <div class="filecard-body bg-white rounded">
                                                                        <div class="media media_img_conent">
                                                                            <span class="avatar avatar-add-member mr-1 uncheck"><span class=" add_person font_sm avatar-content ml-0">
                                                                                    <i data-feather="folder" class="text-secondary"></i>
                                                                                </span></span>
                                                                            <div class="f_w_c">
                                                                                <h5 class=" card-title f_c_t" id="contentedit_20" onclick="exploreFolder(20)">lmage view1</h5>
                                                                                <div class="f_b_conent datefilter">class="a_size">925Kb</span><span class="a_date" datevalue="2">Feb 05</span></div>
                                                                            </div>
                                                                            <div class="media_block_two">
                                                                                <div class="f_min_block_right media">
                                                                                    <div class="a_delet">
                                                                                        <i data-feather="star" class="icon_fill"></i>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                            </div>
                                                        </div>

                                                        <div class="col-md-6 pl-25 mb-50">
                                                            <div class="card h-100">
                                                                <!-- Change the sibling div to col-md-6 and child div tp col-md-12 to get the same effect with a white patch at right side. -->
                                                                <!-- EMPTY -->
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </header>
                        </div>
                        <!--/ Chat Header -->
                    </div>
                </section>
            </div>
        </div>
    </nav>
    
   
    <!-- END: Header-->


 