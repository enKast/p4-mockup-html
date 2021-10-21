      
<style>
    .tab-content#sidebar-tab .btn {
        border-radius: unset !important;
        padding: 0.486rem 0.7rem !important;
    }

    @media (min-width: 992px) {
        .chat-content-right {
            width: calc(100vw - (100vw - 100%)) !important;
        }
    }

    .chat-application {
        box-sizing: border-box;
    }

    .sidebar-left,
    .sidebar,
    .sidebar-content,
    .chat-application .sidebar-content .chat-user-list-wrapper,
    .chat-application .sidebar-content .chat-fixed-search {
        width: 100% !important;
    }

    .menu-dark .chat-application .sidebar-content {
        background-color: unset;
    }

    .main-menu .main-menu-content {
        height: calc(100% - 10rem) !important;
        background: #f8f8f8;
    }

    .navbar-dark .main-menu .main-menu-content {
        background: unset;
    }

    .chat-application .chat-profile-sidebar {
        width: 100%;
    }

    /* .chat-application .chat-profile-sidebar .profile-sidebar-area {
        height: 30rem;
    } */

    .scroll-container {
        height: unset !important;
    }

    /* nav menu style */
    .chat-fixed-search+.nav-tabs .nav-link.active {
        background-image: linear-gradient(80deg, #7367f0, #9e95f5);
        color: white;
    }

    .chat-fixed-search+.nav-tabs .nav-link:after {
        content: none;
    }

    .nav-tabs .nav-link {
        color: #9e95f5;
    }

    .nav {
        border-radius: unset;
    }

    /* nav menu style */

    /* bubble pill */
    #sidebarTab .badge.badge-up {
        /* bubble above  */
        /* position: absolute;
        top: -5px;
        right: -14px;
        min-width: 1.129rem;
        min-height: 1.129rem;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 0.586rem;
        line-height: 0.786;
        padding-left: 0.15rem;
        padding-right: 0.15rem; */

        /* bubble at side */
        position: relative;
        top: 0;
        right: -6px;
        min-width: 1.429rem;
        min-height: 1.429rem;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 0.786rem;
        line-height: 0.586;
        padding-left: 0.15rem;
        padding-right: 0.15rem;
    }

    /* bubble pill */

    /* sort badge */
    .demo-inline-spacing>* {
        margin-right: 1.5rem;
        margin-top: 1rem;
    }

    .demo-inline-spacing {
        height: 0;
        overflow: hidden;
        transition: all 0.3ms ease-in;
    }

    .demo-visible {
        height: auto;
        overflow: visible;
        transition: all 0.3ms ease-in;
    }

    .close-search {
        position: absolute;
        right: 1.2rem;
        z-index: 4;
        padding: 0.78rem 1rem;
    }

    .main-menu .main-menu-content {
        height: calc(100% - 15rem) !important;
    }

    .demo-visible .badge-pill {
        padding-right: 1rem;
        padding-left: 1rem;
        border-radius: 10rem;
        font-size: 1rem;
    }

    /* sort badge */

    #msg-list li.p_li {
        margin: 1rem;
        border: none;
        /* margin-bottom: 2rem; */
        box-shadow: 0 4px 24px 0 rgb(34 41 47 / 10%);
        transition: all 0.3s ease-in-out, background 0s, color 0s, border-color 0s;
        border-radius: 0.425rem;
        background-color: #fff;
    }

    #msg-list li.p_li:hover {
        background: transparent;
    }

    li.p_li,
    li.g_li,
    li.c_li,
    li.v_li {
        background: #fff;
    }

    .chat-application .sidebar-content {
        background-color: #f8f8f8;
    }

    /* add Invites */
    .add-invites .feather {
        margin-left: auto !important;
        background: #fff;
        box-shadow: 0 4px 24px 0 rgb(34 41 47 / 10%);
        border-radius: 50%;
    }

    .add-invites button {
        padding: 0.586rem 1.5rem;
    }

    html.dark-layout .add-invites .feather {
        background: #161d31;
        box-shadow: 0 4px 24px 0 rgb(34 41 47 / 10%);
    }

    .add-invites .feather:hover {
        box-shadow: 0 4px 11px 0 rgb(34 41 47 / 10%);
    }

    .add-invites {
        position: absolute;
        bottom: 2rem;
        right: 0rem;
        z-index: 9;
    }

    /* add Invites */

    .modal label {
        font-weight: 600;
        font-size: 1rem;
    }

    .modal span {
        font-size: 0.8rem;
    }

    .modal-body p {
        font-weight: 400;
    }

    .chk_vendor label,
    .chk_client label {
        font-weight: 400;
    }

    .chk_vendor,
    .chk_client {
        position: absolute;
        right: 1rem;
    }


    @media (min-width: 576px) {
        .modal-dialog {
            max-width: 350px;
            margin: 1.75rem auto;
        }
    }

    /* add class dynamically */
    .rotate {
        transform: rotate(45deg);
        transition: all 0.3s ease;
    }

    .scrollC {
        overflow-x: hidden;
    }

    /* dark mode size */
    .moon-font svg {
        height: 1.3rem;
        width: 1.3rem;
    }

    /* dark mode-icon size */
    .chat-application .sidebar-content .chat-user-list-wrapper li.active {
        color: #d0d2d6;
    }

    /* dark-layout css */
    .dark-layout .chat-fixed-search+.nav-tabs .nav-link.active {
        background-image: linear-gradient(80deg, #7367f0, #9e95f5);
        color: #d0d2d6;
    }

    .dark-layout li.p_li,
    .dark-layout li.v_li,
    .dark-layout li.g_li,
    .dark-layout li.c_li,
    .dark-layout .main-menu .main-menu-content,
    .dark-layout .input-group .input-group-text {
        background-color: #283046;
    }

    .dark-layout .block.mute {
        border: 1px solid #3b4253;
        color: #d0d2d6;
        background-color: #283046;
    }

    .dark-layout .chat-application .content-right .chat-app-window .start-chat-area,
    .dark-layout .chat-application .content-right .chat-app-window .user-chats {
        background-image: unset;
    }

    .dark-layout #editor1,
    .dark-layout #editor2 {
        border-bottom: 1px solid #3b4253 !important;
    }

    .dark-layout .imotiReply {
        border-top: 1px solid #3b4253 !important;
    }

    .emojionearea.emojionearea-standalone .emojionearea-editor::before {
        border-left: unset;
    }

    .main-menu a {
        color: inherit;
    }

    .dark-layout .header-navbar .btn {
        color: #d0d2d6;
    }
</style>
<div class="main-menu menu-fixed menu-light menu-accordion menu-shadow" data-scroll-to-active="true">
    <div class="navbar-header w-100">
        <ul class="nav navbar-nav flex-row">
            <li class="nav-item mr-auto"><a class="navbar-brand"><img class="brand-logo" src="https://alpha.enkast.xyz/app-assets/images/ico/favicon.ico" height="30px" width="30px" />
                    <h2 class="brand-text" id="brand_name">project 4</h2>
                </a>
            </li>
            <li class="nav-item mt-1 mx-50"><a class="nav-link nav-link-style py-50 moon-font"><i class="ficon " data-feather="moon"></i></a></li>
            <li class="nav-item nav-toggle d-flex">
                <div class=" mr-1 mt-2">
                    <a class="nav-link p-0 position-relative" href="javascript:void(0);" data-toggle="modal" data-target="#notific" style="height: 2rem;">
                        <i class=" font-medium-4 " data-feather="bell" data-ticon="bell"></i>
                        <span class="badge badge-pill badge-danger badge-up">5</span>
                    </a>
                </div>
                <a class="nav-link modern-chat-nav-toggle pr-0 " data-toggle="collapse">
                    <i class="d-block d-xl-none text-primary toggle-icon font-medium-4" data-feather="x"></i>
                </a>
            </li>
        </ul>
    </div>
    <div class="shadow-bottom"></div>
    <div class="add-invites" id="tooltip-positions">
        <div class="position-relative">
            <!-- <i class="d-block  text-primary toggle-icon font-large-3 cursor-pointer" data-feather="x-circle"></i> -->
            <button type="button" class="btn d-none pr-1" data-toggle="tooltip" data-placement="left" title="Add / Invite">
                <i class="d-block  text-primary toggle-icon font-large-3 cursor-pointer py-1 mr-0" data-feather="user" href="javascript:void(0);" data-toggle="modal" data-target="#addInvite"></i>
            </button>
            <button type="button" class="btn d-none pr-1" data-toggle="tooltip" data-placement="left" title="Add Groups">
                <i class="d-block  text-primary toggle-icon font-large-3 cursor-pointer py-1 mr-0" data-feather="users" href="javascript:void(0);" data-toggle="modal" data-target="#addGroup"></i>
            </button>
            <button type="button" class="btn d-none pr-1" data-toggle="tooltip" data-placement="left" title="Add Clients">
                <i class="d-block  text-primary toggle-icon font-large-3 cursor-pointer py-1 mr-0" data-feather="user-check" href="javascript:void(0);" data-toggle="modal" data-target="#addClients"></i>
            </button>
            <button type="button" class="btn d-none pr-1" data-toggle="tooltip" data-placement="left" title="Add Vendors">
                <i class="d-block  text-primary toggle-icon font-large-3 cursor-pointer py-1 mr-0" data-feather="truck" href="javascript:void(0);" data-toggle="modal" data-target="#addVendors"></i>
            </button>
            <button type="button" class="btn d-block pr-1" id="addPeople">
                <i class="d-block  text-primary toggle-icon font-large-3 cursor-pointer py-1 mr-0" data-feather="plus" style="transition: all 0.3s ease;"></i>
            </button>
        </div>
    </div>
    <!-- Sidebar header start -->
    <div class="chat-fixed-search p-1 px-2">
        <div class="d-flex align-items-center w-100">
            <div class="sidebar-profile-toggle mr-1">
                <div class="avatar avatar-border">
                    <img src="../app-assets/images/portrait/small/avatar-s-8.jpg" alt="user_avatar" height="42" width="42" />
                    <span class="avatar-status-online"></span>
                </div>
            </div>
            <div class="input-group input-group-merge shadow-none w-100">
                <div class="input-group-prepend">
                    <span class="input-group-text round"><i data-feather="search" class="text-muted"></i></span>
                    <span class="input-group-text round cursor-pointer close-search d-none"><i data-feather="x" class="text-muted "></i></span>
                </div>
                <input type="text" class="form-control round" placeholder="Search or start a new chat" aria-label="Search..." aria-describedby="chat-search" onkeyup="sidebarFilter()" id="chat-search" />
                <!-- <div class="input-group-prepend border-right close-search d-none">
                    <span class="input-group-text round cursor-pointer "><i data-feather="x" class="text-muted "></i></span>
                </div> -->
            </div>
        </div>
        <div class="demo-inline-spacing">
            <div id="chat_search" class="badge badge-pill badge-light-secondary cursor-pointer">Chat</div>
            <div id="chat_todo" class="badge badge-pill badge-light-secondary cursor-pointer">Todo</div>
            <div id="chat_notes" class="badge badge-pill badge-light-secondary cursor-pointer">Notes</div>
            <div id="chat_files" class="badge badge-pill badge-light-secondary cursor-pointer">Files</div>
        </div>
    </div>

    <!-- Sidebar header end -->
    <!-- Nav tabs -->
    <ul class="nav nav-tabs d-flex border" id="sidebarTab" role="tablist">
        <li class="nav-item border-right col p-0">
            <a class="nav-link people active" id="people-tab-fill" data-toggle="tab" href="#people-fill" role="tab" aria-controls="people-fill" aria-selected="true">
                <span class="position-relative">
                    Staff
                    <!-- <span class="badge badge-pill badge-info badge-up">4</span> -->
                </span> </a>
        </li>
        <li class="nav-item border-right col p-0">
            <a class="nav-link groups" id="groups-tab-fill" data-toggle="tab" href="#groups-fill" role="tab" aria-controls="groups-fill" aria-selected="false"><span class="position-relative d-flex">
                    Groups
                    <span class="badge badge-pill badge-info badge-up">4</span>
                </span></a>
        </li>
        <li class="nav-item border-right col p-0">
            <a class="nav-link clients" id="clients-tab-fill" data-toggle="tab" href="#clients-fill" role="tab" aria-controls="clients-fill" aria-selected="false">Clients</a>
        </li>
        <li class="nav-item border-right col p-0">
            <a class="nav-link clients" id="vendor-tab-fill" data-toggle="tab" href="#vendors-fill" role="tab" aria-controls="vendors-fill" aria-selected="false">Vendors</a>
        </li>
    </ul>
    <div class="main-menu-content scrollC">
        <div class=" chat-application">
            <div class="sidebar-left">
                <!-- Admin user profile area -->
                <div class="chat-profile-sidebar">
                    <header class="chat-profile-header">
                        <!-- <span class="close-icon">
                            <i data-feather="x"></i>
                        </span> -->
                        <!-- User Information -->
                        <div class="header-profile-sidebar">
                            <div class="avatar box-shadow-1 avatar-xl avatar-border">
                                <img src="<?= session()->image ?>" alt="user_avatar" />
                                <span class="avatar-status-online avatar-status-xl"></span>
                            </div>
                            <p ><?php echo session()->selected_user;?></p>
                            <h4 class="chat-user-name">John Doe</h4>
                            <span class="user-post">Admin</span>
                        </div>
                        <!--/ User Information -->
                    </header>
                    <!-- User Details start -->
                    <div class="profile-sidebar-area scrollable-container ps">
                        <h6 class="section-label mb-1">About</h6>
                        <div class="about-user">
                            <textarea data-length="120" class="form-control char-textarea" id="textarea-counter" rows="5" placeholder="About User">
                        Dessert chocolate cake lemon drops jujubes. Biscuit cupcake ice cream bear claw brownie brownie marshmallow.
                    </textarea>
                            <small class="counter-value float-right"><span class="char-count">108</span> / 120 </small>
                        </div>
                        <!-- To set user status -->
                        <h6 class="section-label mb-1 mt-3">Status</h6>
                        <ul class="list-unstyled user-status">
                            <li class="pb-1">
                                <div class="custom-control custom-control-success custom-radio">
                                    <input type="radio" id="activeStatusRadio" name="userStatus" class="custom-control-input" value="online" checked />
                                    <label class="custom-control-label ml-25" for="activeStatusRadio">Active</label>
                                </div>
                            </li>
                            <li class="pb-1">
                                <div class="custom-control custom-control-danger custom-radio">
                                    <input type="radio" id="dndStatusRadio" name="userStatus" class="custom-control-input" value="busy" />
                                    <label class="custom-control-label ml-25" for="dndStatusRadio">Do Not Disturb</label>
                                </div>
                            </li>
                            <li class="pb-1">
                                <div class="custom-control custom-control-warning custom-radio">
                                    <input type="radio" id="awayStatusRadio" name="userStatus" class="custom-control-input" value="away" />
                                    <label class="custom-control-label ml-25" for="awayStatusRadio">Away</label>
                                </div>
                            </li>
                            <li class="pb-1">
                                <div class="custom-control custom-control-secondary custom-radio">
                                    <input type="radio" id="offlineStatusRadio" name="userStatus" class="custom-control-input" value="offline" />
                                    <label class="custom-control-label ml-25" for="offlineStatusRadio">Offline</label>
                                </div>
                            </li>
                        </ul>
                        <!--/ To set user status -->

                        <!-- User settings -->
                        <h6 class="section-label mb-1 mt-2">Settings</h6>
                        <ul class="list-unstyled">
                            <li class="d-flex justify-content-between align-items-center mb-1">
                                <div class="d-flex align-items-center">
                                    <i data-feather="check-square" class="mr-75 font-medium-3"></i>
                                    <span class="align-middle">Two-step Verification</span>
                                </div>
                                <div class="custom-control custom-switch mr-0">
                                    <input type="checkbox" class="custom-control-input" id="customSwitch1" checked />
                                    <label class="custom-control-label" for="customSwitch1"></label>
                                </div>
                            </li>
                            <li class="d-flex justify-content-between align-items-center mb-1">
                                <div class="d-flex align-items-center">
                                    <i data-feather="bell" class="mr-75 font-medium-3"></i>
                                    <span class="align-middle">Notification</span>
                                </div>
                                <div class="custom-control custom-switch mr-0">
                                    <input type="checkbox" class="custom-control-input" id="customSwitch2" />
                                    <label class="custom-control-label" for="customSwitch2"></label>
                                </div>
                            </li>
                            <li class="mb-1 d-flex align-items-center cursor-pointer">
                                <i data-feather="user" class="mr-75 font-medium-3"></i>
                                <span class="align-middle">Invite Friends</span>
                            </li>
                            <li class="d-flex align-items-center cursor-pointer">
                                <i data-feather="trash" class="mr-75 font-medium-3"></i>
                                <span class="align-middle">Delete Account</span>
                            </li>
                        </ul>
                        <!--/ User settings -->

                        <!-- Logout Button -->
                        <div class="mt-3">
                            <button class="btn btn-primary" onclick="location.href='<?= base_url('logout') ?>'">
                                <span>Logout</span>
                            </button>
                        </div>
                        <!--/ Logout Button -->
                    </div>
                    <!-- User Details end -->
                </div>
                <!--/ Admin user profile area -->

                <div class="sidebar">
                    <!-- Chat Sidebar area -->
                    <div class="sidebar-content show">
                        <!-- Tab Section For Different Chats -->
                        <section id="nav-filled navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
                            <div class="row match-height">
                                <!-- Filled Tabs starts -->
                                <div class="col-12">
                                    <div>
                                        <!-- Tab panes -->
                                        <div class="tab-content" id="sidebar-tab">
                                            <div class="tab-pane active " id="people-fill" role="tabpanel" aria-labelledby="people-tab-fill">
                                                <div id="users-list" class="chat-user-list-wrapper list-group ps">
                            
                                                    <ul class="chat-users-list chat-list media-list">
                                                        <li>
                                                            <span class="avatar"><img src="../app-assets/images/portrait/small/avatar-s-3.jpg" height="42" width="42" alt="Generic placeholder image">
                                                                <span class="avatar-status-offline"></span>
                                                            </span>
                                                            <div class="chat-info flex-grow-1">
                                                                <h5 class="mb-0">Elizabeth Elliott</h5>
                                                                <p class="card-text text-truncate">
                                                                    Cake pie jelly jelly beans. Marzipan lemon drops halvah cake. Pudding cookie lemon drops icing
                                                                </p>
                                                            </div>
                                                            <div class="chat-meta text-nowrap">
                                                                <small class="float-right mb-25 chat-time">4:14 PM</small>
                                                                <span class="badge badge-danger badge-pill float-right">3</span>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <span class="avatar"><img src="../app-assets/images/portrait/small/avatar-s-7.jpg" height="42" width="42" alt="Generic placeholder image">
                                                                <span class="avatar-status-busy"></span>
                                                            </span>
                                                            <div class="chat-info flex-grow-1">
                                                                <h5 class="mb-0">Kristopher Candy</h5>
                                                                <p class="card-text text-truncate">
                                                                    Cake pie jelly jelly beans. Marzipan lemon drops halvah cake. Pudding cookie lemon drops icing
                                                                </p>
                                                            </div>
                                                            <div class="chat-meta text-nowrap">
                                                                <small class="float-right mb-25 chat-time">9:09 AM</small>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <span class="avatar"><img src="../app-assets/images/portrait/small/avatar-s-8.jpg" height="42" width="42" alt="Generic placeholder image">
                                                                <span class="avatar-status-away"></span>
                                                            </span>
                                                            <div class="chat-info flex-grow-1">
                                                                <h5 class="mb-0">Sarah Woods</h5>
                                                                <p class="card-text text-truncate">
                                                                    Cake pie jelly jelly beans. Marzipan lemon drops halvah cake. Pudding cookie lemon drops icing.
                                                                </p>
                                                            </div>
                                                            <div class="chat-meta text-nowrap">
                                                                <small class="float-right mb-25 chat-time">5:48 PM</small>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <span class="avatar"><img src="../app-assets/images/portrait/small/avatar-s-3.jpg" height="42" width="42" alt="Generic placeholder image">
                                                                <span class="avatar-status-offline"></span>
                                                            </span>
                                                            <div class="chat-info flex-grow-1">
                                                                <h5 class="mb-0">Elizabeth Elliott</h5>
                                                                <p class="card-text text-truncate">
                                                                    Cake pie jelly jelly beans. Marzipan lemon drops halvah cake. Pudding cookie lemon drops icing
                                                                </p>
                                                            </div>
                                                            <div class="chat-meta text-nowrap">
                                                                <small class="float-right mb-25 chat-time">4:14 PM</small>
                                                                <span class="badge badge-danger badge-pill float-right">3</span>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <span class="avatar"><img src="../app-assets/images/portrait/small/avatar-s-7.jpg" height="42" width="42" alt="Generic placeholder image">
                                                                <span class="avatar-status-busy"></span>
                                                            </span>
                                                            <div class="chat-info flex-grow-1">
                                                                <h5 class="mb-0">Kristopher Candy</h5>
                                                                <p class="card-text text-truncate">
                                                                    Cake pie jelly jelly beans. Marzipan lemon drops halvah cake. Pudding cookie lemon drops icing
                                                                </p>
                                                            </div>
                                                            <div class="chat-meta text-nowrap">
                                                                <small class="float-right mb-25 chat-time">9:09 AM</small>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <span class="avatar"><img src="../app-assets/images/portrait/small/avatar-s-8.jpg" height="42" width="42" alt="Generic placeholder image">
                                                                <span class="avatar-status-away"></span>
                                                            </span>
                                                            <div class="chat-info flex-grow-1">
                                                                <h5 class="mb-0">Sarah Woods</h5>
                                                                <p class="card-text text-truncate">
                                                                    Cake pie jelly jelly beans. Marzipan lemon drops halvah cake. Pudding cookie lemon drops icing.
                                                                </p>
                                                            </div>
                                                            <div class="chat-meta text-nowrap">
                                                                <small class="float-right mb-25 chat-time">5:48 PM</small>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <span class="avatar"><img src="../app-assets/images/portrait/small/avatar-s-3.jpg" height="42" width="42" alt="Generic placeholder image">
                                                                <span class="avatar-status-offline"></span>
                                                            </span>
                                                            <div class="chat-info flex-grow-1">
                                                                <h5 class="mb-0">Elizabeth Elliott</h5>
                                                                <p class="card-text text-truncate">
                                                                    Cake pie jelly jelly beans. Marzipan lemon drops halvah cake. Pudding cookie lemon drops icing
                                                                </p>
                                                            </div>
                                                            <div class="chat-meta text-nowrap">
                                                                <small class="float-right mb-25 chat-time">4:14 PM</small>
                                                                <span class="badge badge-danger badge-pill float-right">3</span>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <span class="avatar"><img src="../app-assets/images/portrait/small/avatar-s-7.jpg" height="42" width="42" alt="Generic placeholder image">
                                                                <span class="avatar-status-busy"></span>
                                                            </span>
                                                            <div class="chat-info flex-grow-1">
                                                                <h5 class="mb-0">Kristopher Candy</h5>
                                                                <p class="card-text text-truncate">
                                                                    Cake pie jelly jelly beans. Marzipan lemon drops halvah cake. Pudding cookie lemon drops icing
                                                                </p>
                                                            </div>
                                                            <div class="chat-meta text-nowrap">
                                                                <small class="float-right mb-25 chat-time">9:09 AM</small>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <span class="avatar"><img src="../app-assets/images/portrait/small/avatar-s-8.jpg" height="42" width="42" alt="Generic placeholder image">
                                                                <span class="avatar-status-away"></span>
                                                            </span>
                                                            <div class="chat-info flex-grow-1">
                                                                <h5 class="mb-0">Sarah Woods</h5>
                                                                <p class="card-text text-truncate">
                                                                    Cake pie jelly jelly beans. Marzipan lemon drops halvah cake. Pudding cookie lemon drops icing.
                                                                </p>
                                                            </div>
                                                            <div class="chat-meta text-nowrap">
                                                                <small class="float-right mb-25 chat-time">5:48 PM</small>
                                                            </div>
                                                        </li>
                                                        <li class="no-results">
                                                            <h6 class="mb-0">No Chats Found</h6>
                                                        </li>
                                                    </ul>
                                                    
                                                    
                                                </div>
                                            </div>
                                            <div class="tab-pane" id="groups-fill" role="tabpanel" aria-labelledby="groups-tab-fill">
                                                <!-- Sidebar Users start -->
                                                <div id="groups-list " class="chat-user-list-wrapper list-group ">
                                                    <!-- <h4 class="chat-list-title">Chats</h4> -->
                                                    <ul class="chat-users-list chat-list media-list">
                                                        <li>
                                                            <span class="avatar"><img src="../app-assets/images/portrait/small/avatar-s-3.jpg" height="42" width="42" alt="Generic placeholder image">
                                                                <span class="avatar-status-offline"></span>
                                                            </span>
                                                            <div class="chat-info flex-grow-1">
                                                                <h5 class="mb-0">Elizabeth Elliott</h5>
                                                                <p class="card-text text-truncate">
                                                                    Cake pie jelly jelly beans. Marzipan lemon drops halvah cake. Pudding cookie lemon drops icing
                                                                </p>
                                                            </div>
                                                            <div class="chat-meta text-nowrap">
                                                                <small class="float-right mb-25 chat-time">4:14 PM</small>
                                                                <span class="badge badge-danger badge-pill float-right">3</span>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <span class="avatar"><img src="../app-assets/images/portrait/small/avatar-s-7.jpg" height="42" width="42" alt="Generic placeholder image">
                                                                <span class="avatar-status-busy"></span>
                                                            </span>
                                                            <div class="chat-info flex-grow-1">
                                                                <h5 class="mb-0">Kristopher Candy</h5>
                                                                <p class="card-text text-truncate">
                                                                    Cake pie jelly jelly beans. Marzipan lemon drops halvah cake. Pudding cookie lemon drops icing
                                                                </p>
                                                            </div>
                                                            <div class="chat-meta text-nowrap">
                                                                <small class="float-right mb-25 chat-time">9:09 AM</small>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <span class="avatar"><img src="../app-assets/images/portrait/small/avatar-s-8.jpg" height="42" width="42" alt="Generic placeholder image">
                                                                <span class="avatar-status-away"></span>
                                                            </span>
                                                            <div class="chat-info flex-grow-1">
                                                                <h5 class="mb-0">Sarah Woods</h5>
                                                                <p class="card-text text-truncate">
                                                                    Cake pie jelly jelly beans. Marzipan lemon drops halvah cake. Pudding cookie lemon drops icing.
                                                                </p>
                                                            </div>
                                                            <div class="chat-meta text-nowrap">
                                                                <small class="float-right mb-25 chat-time">5:48 PM</small>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <span class="avatar"><img src="../app-assets/images/portrait/small/avatar-s-3.jpg" height="42" width="42" alt="Generic placeholder image">
                                                                <span class="avatar-status-offline"></span>
                                                            </span>
                                                            <div class="chat-info flex-grow-1">
                                                                <h5 class="mb-0">Elizabeth Elliott</h5>
                                                                <p class="card-text text-truncate">
                                                                    Cake pie jelly jelly beans. Marzipan lemon drops halvah cake. Pudding cookie lemon drops icing
                                                                </p>
                                                            </div>
                                                            <div class="chat-meta text-nowrap">
                                                                <small class="float-right mb-25 chat-time">4:14 PM</small>
                                                                <span class="badge badge-danger badge-pill float-right">3</span>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <span class="avatar"><img src="../app-assets/images/portrait/small/avatar-s-7.jpg" height="42" width="42" alt="Generic placeholder image">
                                                                <span class="avatar-status-busy"></span>
                                                            </span>
                                                            <div class="chat-info flex-grow-1">
                                                                <h5 class="mb-0">Kristopher Candy</h5>
                                                                <p class="card-text text-truncate">
                                                                    Cake pie jelly jelly beans. Marzipan lemon drops halvah cake. Pudding cookie lemon drops icing
                                                                </p>
                                                            </div>
                                                            <div class="chat-meta text-nowrap">
                                                                <small class="float-right mb-25 chat-time">9:09 AM</small>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <span class="avatar"><img src="../app-assets/images/portrait/small/avatar-s-8.jpg" height="42" width="42" alt="Generic placeholder image">
                                                                <span class="avatar-status-away"></span>
                                                            </span>
                                                            <div class="chat-info flex-grow-1">
                                                                <h5 class="mb-0">Sarah Woods</h5>
                                                                <p class="card-text text-truncate">
                                                                    Cake pie jelly jelly beans. Marzipan lemon drops halvah cake. Pudding cookie lemon drops icing.
                                                                </p>
                                                            </div>
                                                            <div class="chat-meta text-nowrap">
                                                                <small class="float-right mb-25 chat-time">5:48 PM</small>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <span class="avatar"><img src="../app-assets/images/portrait/small/avatar-s-3.jpg" height="42" width="42" alt="Generic placeholder image">
                                                                <span class="avatar-status-offline"></span>
                                                            </span>
                                                            <div class="chat-info flex-grow-1">
                                                                <h5 class="mb-0">Elizabeth Elliott</h5>
                                                                <p class="card-text text-truncate">
                                                                    Cake pie jelly jelly beans. Marzipan lemon drops halvah cake. Pudding cookie lemon drops icing
                                                                </p>
                                                            </div>
                                                            <div class="chat-meta text-nowrap">
                                                                <small class="float-right mb-25 chat-time">4:14 PM</small>
                                                                <span class="badge badge-danger badge-pill float-right">3</span>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <span class="avatar"><img src="../app-assets/images/portrait/small/avatar-s-7.jpg" height="42" width="42" alt="Generic placeholder image">
                                                                <span class="avatar-status-busy"></span>
                                                            </span>
                                                            <div class="chat-info flex-grow-1">
                                                                <h5 class="mb-0">Kristopher Candy</h5>
                                                                <p class="card-text text-truncate">
                                                                    Cake pie jelly jelly beans. Marzipan lemon drops halvah cake. Pudding cookie lemon drops icing
                                                                </p>
                                                            </div>
                                                            <div class="chat-meta text-nowrap">
                                                                <small class="float-right mb-25 chat-time">9:09 AM</small>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <span class="avatar"><img src="../app-assets/images/portrait/small/avatar-s-8.jpg" height="42" width="42" alt="Generic placeholder image">
                                                                <span class="avatar-status-away"></span>
                                                            </span>
                                                            <div class="chat-info flex-grow-1">
                                                                <h5 class="mb-0">Sarah Woods</h5>
                                                                <p class="card-text text-truncate">
                                                                    Cake pie jelly jelly beans. Marzipan lemon drops halvah cake. Pudding cookie lemon drops icing.
                                                                </p>
                                                            </div>
                                                            <div class="chat-meta text-nowrap">
                                                                <small class="float-right mb-25 chat-time">5:48 PM</small>
                                                            </div>
                                                        </li>
                                                        <li class="no-results">
                                                            <h6 class="mb-0">No Chats Found</h6>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <!-- Sidebar Users end -->
                                            </div>
                                            <div class="tab-pane" id="clients-fill" role="tabpanel" aria-labelledby="clients-tab-fill">
                                                <!-- Sort Clients: by All | Active | Inactive | Add New -->
                                                <div class="row mx-auto justify-content-center py-1 sort-chat d-none">
                                                    <a href="" class="btn btn-primary border border-primary  rounded-left" style="border-top-left-radius:0.425rem !important; border-bottom-left-radius:0.425rem !important;">All</a>
                                                    <a href="" class="btn  border border-primary ">Active</a>
                                                    <a href="" class="btn  border border-primary ">Inactive</a>
                                                    <a href="" class="btn  border border-primary  rounded-right" style="border-top-right-radius:0.425rem !important; border-bottom-right-radius:0.425rem !important;">Add New</a>
                                                </div>
                                                <!-- Sidebar Users start -->
                                                <div id="clients-list" class="chat-user-list-wrapper list-group ">
                                                    <!-- <h4 class="chat-list-title">Chats</h4> -->
                                                    <ul class="chat-users-list contact-list media-list clients-list">
                                                        <li class="no-results">
                                                            <h6 class="mb-0">Loading...</h6>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <!-- Sidebar Users end -->
                                            </div>
                                            <div class="tab-pane " id="vendors-fill" role="tabpanel" aria-labelledby="vendors-tab-fill">
                                                <!-- Sort People: by All | Staff | Guests | Add New -->
                                                <div class="row mx-auto justify-content-center py-1 sort-chat d-none">
                                                    <a href="" class="btn btn-primary border border-primary  rounded-left" style="border-top-left-radius:0.425rem !important; border-bottom-left-radius:0.425rem !important;">All</a>
                                                    <a href="" class="btn  border border-primary ">Staff</a>
                                                    <a href="" class="btn  border border-primary ">Guests</a>
                                                    <a href="" class="btn  border border-primary  rounded-right" style="border-top-right-radius:0.425rem !important; border-bottom-right-radius:0.425rem !important;">Add New</a>
                                                </div>

                                                <!-- Sidebar Users start -->
                                                <div id="vendors-list" class="chat-user-list-wrapper list-group ">
                                                    <!-- <h4 class="chat-list-title">Chats</h4> -->
                                                    <ul class="chat-users-list chat-list media-list vendors-list">
                                                        <li class="no-results">
                                                            <h6 class="mb-0">Loading...</h6>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <!-- Sidebar Users end -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Filled Tabs ends -->
                            </div>
                        </section>
                        <!-- Tab Section For Different Chats -->


                    </div>
                    <!--/ Chat Sidebar area -->

                </div>
            </div>
        </div>
    </div>
</div>

    <!-- invites modal popup -->
        <div class="modal fade show" id="addInvite" tabindex="-1" role="dialog" aria-labelledby="addInviteTitle" aria-modal="true">
            <input type="hidden" name="staff-sending-type" id="staff-sending-type" value="">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title mr-auto" id="addInviteTitle">Add People</h5>
                        <span type="" class="" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true"><i data-feather="x"></i></span>
                        </span>
                    </div>
                    <div class="modal-body p-2">
                        <div class="d-flex flex-column">
                            <label for="">Email Address</label>
                            <input id="email_no" class="form-control input " type="text" tabindex="0" placeholder="Please enter email address..." data-search="search" onclick='defineInvitationType("email")'>
                        </div>
                        <div class="divider">
                            <div class="divider-text">OR</div>
                        </div>
                        <div class="d-flex flex-column my-1">
                            <label for="">Phone Number</label>
                            <input id="ph_no" class="form-control input " type="number" tabindex="0" placeholder="Please enter Phone Number..." data-search="search" onclick='defineInvitationType("mobile")'>
                        </div>
                        <div class="d-flex flex-column my-1">
                            <p class="d-flex justify-content-between mb-0"><strong>Invite with link</strong> <a href="javascript:void(0)" onclick="defineInvitationType('generate_link');sendInvitationStaff();">Create link</a></p>
                            <p class="mb-0 generated-link">anyone with link can join as a board member</p>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary btn-sm waves-effect waves-float waves-light w-100" data-dismiss="modal" onclick="sendInvitationStaff()">Send Invitation</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade show" id="addGroup" tabindex="-1" role="dialog" aria-labelledby="addGroupTitle" aria-modal="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title mr-auto" id="addGroupTitle">Create a group</h5>
                        <span type="" class="" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true"><i data-feather="x"></i></span>
                        </span>
                    </div>
                    <div class="modal-body p-2">
                        <p class="mb-1">Groups are where your team communicates. They’re best when organized around a topic — #marketing, for example.</p>

                        <div class="d-flex flex-column mb-1">
                            <label for="">Name</label>
                            <input class="form-control input " type="text" name="group_name" id="group_name" tabindex="0" placeholder="Please enter group name..." data-search="search">
                        </div>
                        <div class="d-flex flex-column mb-1">
                            <label for="">Description<span>(option)</span></label>
                            <input class="form-control input " type="text" name="group_description" id="group_description" tabindex="0" placeholder="Please enter group description" data-search="search">
                            <span>What's this channel about?</span>
                        </div>
                        <div class="d-flex flex-column mb-1">
                            <label for="">Make private</label>
                            <div class="custom-control custom-control-primary custom-switch d-flex justify-content-between">
                                <p class="mb-50 d-none"><strong>This can’t be undone.</strong> A private channel cannot be made public later on.</p>
                                <p class="mb-50">When a channel is set to private, it can only be viewed or joined by invitation.</p>
                                <input type="checkbox" class="custom-control-input" id="customSwitch3" />
                                <label class="custom-control-label" for="customSwitch3"></label>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary btn-sm waves-effect waves-float waves-light w-100" data-dismiss="modal" onclick="createGroup()">Create</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade show" id="addClients" tabindex="-1" role="dialog" aria-labelledby="addClientsTitle" aria-modal="true">
            <input type="hidden" name="staff-sending-type" id="client-sending-type" value="">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <p class="modal-title mr-auto" id="addClientsTitle">Add Clients</p>
                        <span type="" class="" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true"><i data-feather="x"></i></span>
                        </span>
                    </div>
                    <div class="modal-body p-2">
                        <p class="mb-1">To communicate with your clients and vendors via the Activity Feed or send them any type of file, you'll first need to add the relevant parties to your Workspace</p>
                        <div class="d-flex flex-column mb-1 client_name">
                            <label for="">Name</label>
                            <input class="form-control input " type="text" name="client_name" id="client_name" tabindex="0" placeholder="Please enter client name..." data-search="search">
                        </div>
                        <div class="d-flex flex-column mb-1">
                            <label for="">Organization</label>
                            <input class="form-control input client_org" type="text" name="client_organization" id="client_organization" tabindex="0" placeholder="Please enter Organization name..." data-search="search">

                            <div class="form-check form-check-inline chk_client">
                                <input class="form-check-input" type="checkbox" id="chkClient">
                                <label class="form-check-label" for="chkClient">Individual</label>
                            </div>
                        </div>
                        <div class="d-flex flex-column mt-1">
                            <div class="d-flex flex-column">
                                <label for="">Email Address</label>
                                <input class="form-control input " type="text" name="client_email" id="client_email" tabindex="0" placeholder="Please enter email address..." data-search="search" onclick='clientInvitationType("email")'>
                            </div>
                            <div class="divider">
                                <div class="divider-text">OR</div>
                            </div>
                            <div class="d-flex flex-column my-1">
                                <label for="">Phone Number</label>
                                <input class="form-control input " type="number" name="client_ph_no" id="client_ph_no" tabindex="0" placeholder="Please enter Phone Number..." data-search="search" onclick='clientInvitationType("mobile")'>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary btn-sm waves-effect waves-float waves-light w-100" data-dismiss="modal" onclick="sendInvitationClient();">Create</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade show" id="addVendors" tabindex="-1" role="dialog" aria-labelledby="addVendorsTitle" aria-modal="true">
            <input type="hidden" name="vendor-sending-type" id="vendor-sending-type" value="">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <p class="modal-title mr-auto" id="addVendorsTitle">Add Vendors</p>
                        <span type="" class="" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true"><i data-feather="x"></i></span>
                        </span>
                    </div>
                    <div class="modal-body p-2">
                        <p class="mb-1">To communicate with your clients and vendors via the Activity Feed or send them any type of file, you'll first need to add the relevant parties to your Workspace</p>
                        <div class="d-flex flex-column mb-1 vendor_name">
                            <label for="">Name</label>
                            <input class="form-control input " type="text" name="vendor_name" id="vendor_name" tabindex="0" placeholder="Please enter vendor name..." data-search="search">
                        </div>
                        <div class="d-flex flex-column mb-1">
                            <label for="">Organization</label>
                            <input class="form-control input vendor_org" type="text" name="vendor_organization" id="vendor_organization" tabindex="0" placeholder="Please enter organization name..." data-search="search">

                            <div class="form-check form-check-inline chk_vendor">
                                <input class="form-check-input" type="checkbox" id="chkVendor">
                                <label class="form-check-label" for="chkVendor">Individual</label>
                            </div>
                        </div>
                        <div class="d-flex flex-column mt-1">
                            <div class="d-flex flex-column">
                                <label for="">Email Address</label>
                                <input class="form-control input " type="text" name="vendor_email" id="vendor_email" tabindex="0" placeholder="Please enter email address..." data-search="search" onclick='vendorInvitationType("email")'>
                            </div>
                            <div class="divider">
                                <div class="divider-text">OR</div>
                            </div>
                            <div class="d-flex flex-column my-1">
                                <label for="">Phone Number</label>
                                <input id="ph_no" class="form-control input " type="number" name="vendor_ph_no" id="vendor_ph_no" tabindex="0" placeholder="Please enter Phone Number..." data-search="search" onclick='vendorInvitationType("mobile")'>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary btn-sm waves-effect waves-float waves-light w-100" data-dismiss="modal" onclick="sendInvitationVendor()">Create</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade show" id="notific" tabindex="-1" role="dialog" aria-labelledby="notificTitle" aria-modal="true">
            <input type="hidden" name="staff-sending-type" id="client-sending-type" value="">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header d-flex justify-content-between">
                        <div class=" d-flex">
                            <h5 class="notification-title mb-0 mr-1">Notifications</h5>
                            <div class="badge badge-pill badge-light-primary">6 New</div>
                        </div>
                        <span class="my-auto" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true"><i data-feather="x"></i></span>
                        </span>
                    </div>
                    <div class="modal-body">
                        <div class="header-navbar">
                            <div class="navbar-container p-0">
                                <ul class="navbar-nav">
                                    <li class="nav-item">
                                        <ul class="dropdown-menu-media dropdown-menu-right p-0">
                                            <li class="scrollable-container media-list"><a class="d-flex" href="javascript:void(0)">
                                                    <div class="media d-flex align-items-start">
                                                        <div class="media-left">
                                                            <div class="avatar"><img src="<?= base_url('app-assets/images/portrait/small/avatar-s-15.jpg') ?>" alt="avatar" width="32" height="32"></div>
                                                        </div>
                                                        <div class="media-body">
                                                            <p class="media-heading"><span class="font-weight-bolder">Congratulation Sam 🎉</span>winner!</p><small class="notification-text"> Won the monthly best seller badge.</small>
                                                        </div>
                                                    </div>
                                                </a><a class="d-flex" href="javascript:void(0)">
                                                    <div class="media d-flex align-items-start">
                                                        <div class="media-left">
                                                            <div class="avatar"><img src="<?= base_url('app-assets/images/portrait/small/avatar-s-3.jpg') ?>" alt="avatar" width="32" height="32"></div>
                                                        </div>
                                                        <div class="media-body">
                                                            <p class="media-heading"><span class="font-weight-bolder">New message</span>&nbsp;received</p><small class="notification-text"> You have 10 unread messages</small>
                                                        </div>
                                                    </div>
                                                </a><a class="d-flex" href="javascript:void(0)">
                                                    <div class="media d-flex align-items-start">
                                                        <div class="media-left">
                                                            <div class="avatar bg-light-danger">
                                                                <div class="avatar-content">MD</div>
                                                            </div>
                                                        </div>
                                                        <div class="media-body">
                                                            <p class="media-heading"><span class="font-weight-bolder">Revised Order 👋</span>&nbsp;checkout</p><small class="notification-text"> MD Inc. order updated</small>
                                                        </div>
                                                    </div>
                                                </a>
                                                <div class="media d-flex align-items-center">
                                                    <h6 class="font-weight-bolder mr-auto mb-0">System Notifications</h6>
                                                    <div class="custom-control custom-control-primary custom-switch">
                                                        <input class="custom-control-input" id="systemNotification" type="checkbox" checked="">
                                                        <label class="custom-control-label" for="systemNotification"></label>
                                                    </div>
                                                </div><a class="d-flex" href="javascript:void(0)">
                                                    <div class="media d-flex align-items-start">
                                                        <div class="media-left">
                                                            <div class="avatar bg-light-danger">
                                                                <div class="avatar-content"><i class="avatar-icon" data-feather="x"></i></div>
                                                            </div>
                                                        </div>
                                                        <div class="media-body">
                                                            <p class="media-heading"><span class="font-weight-bolder">Server down</span>&nbsp;registered</p><small class="notification-text"> USA Server is down due to hight CPU usage</small>
                                                        </div>
                                                    </div>
                                                </a><a class="d-flex" href="javascript:void(0)">
                                                    <div class="media d-flex align-items-start">
                                                        <div class="media-left">
                                                            <div class="avatar bg-light-success">
                                                                <div class="avatar-content"><i class="avatar-icon" data-feather="check"></i></div>
                                                            </div>
                                                        </div>
                                                        <div class="media-body">
                                                            <p class="media-heading"><span class="font-weight-bolder">Sales report</span>&nbsp;generated</p><small class="notification-text"> Last month sales report generated</small>
                                                        </div>
                                                    </div>
                                                </a><a class="d-flex" href="javascript:void(0)">
                                                    <div class="media d-flex align-items-start">
                                                        <div class="media-left">
                                                            <div class="avatar bg-light-warning">
                                                                <div class="avatar-content"><i class="avatar-icon" data-feather="alert-triangle"></i></div>
                                                            </div>
                                                        </div>
                                                        <div class="media-body">
                                                            <p class="media-heading"><span class="font-weight-bolder">High memory</span>&nbsp;usage</p><small class="notification-text"> BLR Server using high memory</small>
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="dropdown-menu-footer"><a class="btn btn-primary btn-block" href="javascript:void(0)">Read all notifications</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    <!-- invites modal popup -->