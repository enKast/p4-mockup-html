   <!-- BEGIN: Main Menu-->
   <div class="main-menu menu-fixed menu-light menu-accordion menu-shadow" data-scroll-to-active="true">
        <div class="navbar-header">
            <ul class="nav navbar-nav flex-row">
                <li class="nav-item mr-auto">
                    <a class="navbar-brand" href=""><span class="brand-logo">
                          </span>
                        <h2 class="brand-text">Demo</h2>
                    </a></li>
                <!-- <li class="nav-item "><a class="nav-link modern-nav-toggle pr-0" >
                    
                    <i class="d-none d-xl-block collapse-toggle-icon font-medium-4  text-primary" ></i></a>
                </li> -->

                <li class="nav-item "><a class="nav-link nav-link-style modern-nav-toggle"><i class="ficon font-medium-4 mr-1" data-feather="moon"></i></a></li>
                <li class="nav-item "><a class="nav-link nav-link-style modern-nav-toggle"><i class="ficon font-medium-4 mr-1" data-feather="bell" data-ticon="bell"></i></a></li>
               
            </ul>
        </div>
        <div class="shadow-bottom"></div>
        <div class="main-menu-content">
        <div class="chat-fixed-search p-1 px-2">
                <div class="d-flex align-items-center w-100">
                    <div class="sidebar-profile-toggle mr-1">
                        <div class="avatar avatar-border">
                            <img src="" alt="user_avatar" height="42" width="42" />
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
                <div class="demo-inline-spacing d-none">
                    <div id="chat_search" class="badge badge-pill badge-light-secondary cursor-pointer">Chat</div>
                    <div id="chat_todo" class="badge badge-pill badge-light-secondary cursor-pointer">Todo</div>
                    <div id="chat_notes" class="badge badge-pill badge-light-secondary cursor-pointer">Notes</div>
                    <div id="chat_files" class="badge badge-pill badge-light-secondary cursor-pointer">Files</div>
                </div>
            </div>
        </div>
    </div>
    <!-- END: Main Menu-->