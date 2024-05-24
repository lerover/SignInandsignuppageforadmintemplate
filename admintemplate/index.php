<?php
   if($_COOKIE['email']=== NULL && $_COOKIE['password']===NULL){
        header('location:../signuppage.php');
   };
?>

<!doctype html>
<html>
    <head>
        <title>Admin Template</title>
        <!-- fav icon -->
        <link
            rel="icon"
            href="./assets/img/fav/favicon.png"
            type="image/png"
            sizes="16x16"
        />
        <!-- bootstrap css1 js1 -->
        <link
            rel="stylesheet"
            href="./assets/libs/bootstrap-5.3.2-dist/css/bootstrap.min.css"
            type="text/css"
        />
        <!-- fontawesome css1 -->
        <link
            rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
            integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ=="
            crossorigin="anonymous"
            referrerpolicy="no-referrer"
        />
        <!-- jquery ui css1 js1 -->
        <link
            rel="stylesheet"
            href="./assets/libs/jquery-ui-1.13.2/jquery-ui.min.css"
            type="text/css"
        />
        <!-- lingtbox2 css1 js1 -->
        <link
            rel="stylesheet"
            href="./assets/libs/lightbox2-2.11.4/dist/css/lightbox.min.css"
            type="text/css"
        />
        <!-- custom css -->
        <link rel="stylesheet" href="./css/style.css" type="text/css" />
    </head>
    <body>
       
        <!-- start site setting -->
        <div>

        </div>
        <!-- end site setting -->

        <!-- start navbar -->
        <div class="wrappers">
            <nav class="navbar navbar-expand-md navbar-light">
                <button type="button" class="navbar-toggler ms-auto mb-2" data-bs-toggle="collapse" data-bs-target="#nav">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div id="nav">
                    <div class="container-fluid">
                        <div class="row">
                            <!-- start left side bar -->
                            <div class="col-lg-2 col-md-3 fixed-top vh-100 overflow-auto leftsidebars">
                                <ul class="navbar-nav mt-4 flex-column">
                                    <li class="nav-item nav-categories">Main</li>
                                    
                                    <li class="nav-item "><a href="javascript:void(0);" class="nav-link p-3 mb-2 sidebarlinks currents text-light"><i class="fas fa-file me-3"></i>Dashboard</a></li>

                                    <li class="nav-item"><a href="javascript:void(0);" class="nav-link p-3 mb-2 sidebarlinks text-light" data-bs-toggle="collapse" data-bs-target="#download"><i class="fas fa-download me-3"></i>Download<i class="fas fa-angle-left mores"></i></a>
                                        <ul id="download" class="collapse">
                                            <li><a href="javascript:void(0)" class="nav-link sidebarlinks text-white"><i class="fas fa-long-arrow-alt-right me-4"></i>Education</a></li>
                                            <li><a href="javascript:void(0)" class="nav-link sidebarlinks text-white"><i class="fas fa-long-arrow-alt-right me-4"></i>Software</a></li>
                                        </ul>
                                    </li>

                                    <li class="nav-item"><a href="javascript:void(0);" class="nav-link p-3 mb-2 sidebarlinks text-light" data-bs-toggle="collapse" data-bs-target="#form"><i class="fas fa-download me-3"></i>Form <i class="fas fa-angle-left mores"></i></a>
                                        <ul id="form" class="collapse">
                                            <li><a href="javascript:void(0)" class="nav-link sidebarlinks text-white"><i class="fas fa-long-arrow-alt-right me-4"></i>Att Form</a></li>
                                            <li><a href="javascript:void(0)" class="nav-link sidebarlinks text-white"><i class="fas fa-long-arrow-alt-right me-4"></i>Leave Form</a></li>
                                            <li><a href="javascript:void(0)" class="nav-link sidebarlinks text-white"><i class="fas fa-long-arrow-alt-right me-4"></i>Enrolls</a></li>

                                        </ul>
                                    </li>

                                    <li class="nav-item"><a href="javascript:void(0);" class="nav-link p-3 mb-2 sidebarlinks text-light" data-bs-toggle="collapse"><i class="fas fa-download me-3"></i>Widgets</a></li>

                                    <li class="nav-item nav-categories">UI Features</li>

                                    <li class="nav-item"><a href="javascript:void(0);" class="nav-link p-3 mb-2 sidebarlinks text-light" data-bs-toggle="collapse" data-bs-target="#articles"><i class="fas fa-download me-3"></i>Articles <i class="fas fa-angle-left mores"></i></a>
                                        <ul id="articles" class="collapse">
                                            <li><a href="javascript:void(0)" class="nav-link sidebarlinks text-white"><i class="fas fa-long-arrow-alt-right me-4"></i>Post</a></li>
                                            <li><a href="javascript:void(0)" class="nav-link sidebarlinks text-white"><i class="fas fa-long-arrow-alt-right me-4"></i>Announcements</a></li>
                                        </ul>
                                    </li>

                                    <li class="nav-item"><a href="javascript:void(0);" class="nav-link p-3 mb-2 sidebarlinks text-light" data-bs-toggle="collapse" data-bs-target="#students"><i class="fas fa-users me-3"></i>Students <i class="fas fa-angle-left mores"></i></a>
                                        <ul id="students" class="collapse">
                                            <li><a href="javascript:void(0)" class="nav-link sidebarlinks text-white"><i class="fas fa-long-arrow-alt-right me-4"></i>Att Generators</a></li>
                                            <li><a href="javascript:void(0)" class="nav-link sidebarlinks text-white"><i class="fas fa-long-arrow-alt-right me-4"></i>All Students</a></li>
                                        </ul>
                                    </li>

                                    
                                    <li class="nav-item"><a href="javascript:void(0);" class="nav-link p-3 mb-2 sidebarlinks text-light" ><i class="fas fa-file me-3"></i>Popups </a></li>
                                
                                    <li class="nav-item"><a href="javascript:void(0);" class="nav-link p-3 mb-2 sidebarlinks text-light" data-bs-toggle="collapse" data-bs-target="#apps"><i class="fas fa-tablet me-3"></i>Apps <i class="fas fa-angle-left mores"></i></a>
                                        <ul id="apps" class="collapse">
                                            <li><a href="javascript:void(0)" class="nav-link sidebarlinks text-white"><i class="fas fa-long-arrow-alt-right me-4"></i>Contacts</a></li>
                                            <li><a href="javascript:void(0)" class="nav-link sidebarlinks text-white"><i class="fas fa-long-arrow-alt-right me-4"></i>Todo</a></li>
                                        </ul>
                                    </li>
                                
                                
                                    <li class="nav-item nav-categories">Data Representation</li>

                                    <li class="nav-item"><a href="javascript:void(0);" class="nav-link p-3 mb-2 sidebarlinks text-light" data-bs-toggle="collapse" data-bs-target="#fixedanalysis"><i class="fas fa-file me-3"></i>Fixed Analysis <i class="fas fa-angle-left mores"></i></a>
                                        <ul id="fixedanalysis" class="collapse">
                                            <li><a href="javascript:void(0)" class="nav-link sidebarlinks text-white"><i class="fas fa-long-arrow-alt-right me-4"></i>Country</a></li>
                                            <li><a href="javascript:void(0)" class="nav-link sidebarlinks text-white"><i class="fas fa-long-arrow-alt-right me-4"></i>Days</a></li>
                                            <li><a href="javascript:void(0)" class="nav-link sidebarlinks text-white"><i class="fas fa-long-arrow-alt-right me-4"></i>Categories</a></li>
                                            <li><a href="javascript:void(0)" class="nav-link sidebarlinks text-white"><i class="fas fa-long-arrow-alt-right me-4"></i>Gender</a></li>
                                            <li><a href="javascript:void(0)" class="nav-link sidebarlinks text-white"><i class="fas fa-long-arrow-alt-right me-4"></i>Payment Types</a></li>
                                            <li><a href="javascript:void(0)" class="nav-link sidebarlinks text-white"><i class="fas fa-long-arrow-alt-right me-4"></i>Stages</a></li>
                                            <li><a href="javascript:void(0)" class="nav-link sidebarlinks text-white"><i class="fas fa-long-arrow-alt-right me-4"></i>Status</a></li>
                                            <li><a href="javascript:void(0)" class="nav-link sidebarlinks text-white"><i class="fas fa-long-arrow-alt-right me-4"></i>Tags</a></li>
                                            <li><a href="javascript:void(0)" class="nav-link sidebarlinks text-white"><i class="fas fa-long-arrow-alt-right me-4"></i>Types</a></li>
                                        </ul>
                                    </li>

                                    <li class="nav-item"><a href="javascript:void(0);" class="nav-link p-3 mb-2 sidebarlinks text-light" data-bs-toggle="collapse" data-bs-target="#addon"><i class="fas fa-file me-3"></i>Addon <i class="fas fa-angle-left mores"></i></a>
                                        <ul id="addon" class="collapse">
                                            <li><a href="javascript:void(0)" class="nav-link sidebarlinks text-white"><i class="fas fa-long-arrow-alt-right me-4"></i>City</a></li>
                                            <li><a href="javascript:void(0)" class="nav-link sidebarlinks text-white"><i class="fas fa-long-arrow-alt-right me-4"></i>Payment Method</a></li>
                                            <li><a href="javascript:void(0)" class="nav-link sidebarlinks text-white"><i class="fas fa-long-arrow-alt-right me-4"></i>Relative</a></li>
                                            <li><a href="javascript:void(0)" class="nav-link sidebarlinks text-white"><i class="fas fa-long-arrow-alt-right me-4"></i>Roles</a></li>
                                            <li><a href="javascript:void(0)" class="nav-link sidebarlinks text-white"><i class="fas fa-long-arrow-alt-right me-4"></i>Social App</a></li>
                                            <li><a href="javascript:void(0)" class="nav-link sidebarlinks text-white"><i class="fas fa-long-arrow-alt-right me-4"></i>Warehouses</a></li>


                                        </ul>
                                    </li>
                                
                                
                                </ul>   
                            </div>
                            <!-- end left side bar -->

                            <!-- start top nav bar -->
                            <div class="col-lg-10 col-md-9 fixed-top ms-auto topnavbars">

                                <div class="row">
                                    <div class="navbar navbar-expand navbar-light bg-light shadow">
                                        <!-- start quick search -->
                                        <form action="" method="" class="me-auto">
                                            <div class="input-group">
                                                <input type="text" name="quicksearch" id="quicksearch" class="form-control border-0 shadow-none"  placeholder="Search Something..."/>
                                                <div class="input-group-append">
                                                    <button type="submit" class="btn btn-primary"><i class="fas fa-search"></i></button>
                                             </div>
                                            </div>
                                        </form>
                                        <!-- end quick search -->

                                        <!-- start notify & user account -->
                                            <ul class="navbar-nav pe-5 me-5">                                        
                                                <!-- notify -->
                                                <li class="nav-item dropdowns me-3">
                                                    <a href="javascript:void(0);" id="dropbtn" onclick="dropbtn(event)"><i class="fas fa-bell"></i>
                                                        <span class="badge bg-danger">5+</span>
                                                    </a>
                                  
                                                    <div class="dropdown-content mydropdowns py-3 shadow rounded">
                                                        <h6 class="ms-2">Alert Center</h6>
                                                   
                                                        <a href="javascript:void(0);" class="d-flex">
                                                            <div class="me-3">
                                                                 <i class="fas fa-file-alt"></i>
                                                            </div>
                                                            <div>
                                                                <p class="small text-muted">21 May 2024</p>
                                                                <i>A new memeber created.</i>
                                                            </div>
                                                        </a>
                                                                          
                                                        <a href="javascript:void(0);" class="d-flex">
                                                            <div class="me-3">
                                                                 <i class="fas fa-file-alt"></i>
                                                            </div>
                                                            <div>
                                                                <p class="small text-muted">21 May 2024</p>
                                                                <i>A new memeber created.</i>
                                                            </div>
                                                        </a>
                                    
                                                                          
                                                        <a href="javascript:void(0);" class="d-flex">
                                                            <div class="me-3">
                                                                 <i class="fas fa-file-alt"></i>
                                                            </div>
                                                            <div>
                                                                <p class="small text-muted">21 May 2024</p>
                                                                <i>A new memeber created.</i>
                                                            </div>
                                                        </a>
                                                    
                                                    </div>
                                                </li>
                                                <!-- notify -->
                                  
                                                <!-- message -->
                                                <!-- message -->
                                
                                                <!-- user account -->
                                
                                                <li class="nav-item dropdown">
                                                    <a href="javascript:void(0);" class="dropdown-toggle" data-bs-toggle='dropdown'>
                                                        <span class="text-muted small me-2">Admin</span>
                                                        <img src="./assets/img/users/user1.jpg" class="rounded" width="25px" alt="user1" />
                                                    </a>
                                  
                                                    <div class="dropdown-menu">
                                                        <a href="javascript:void(0);" class="dropdown-item">
                                                            <i class="fas fa-users text-muted me-2"></i>Profile
                                                        </a>
                                      
                                                        <a href="javascript:void(0);" class="dropdown-item">
                                                            <i class="fas fa-users text-muted me-2"></i>Settings
                                                        </a>

                                                        <a href="javascript:void(0);" class="dropdown-item">
                                                            <i class="fas fa-users text-muted me-2"></i>Activity Log
                                                        </a>

                                                        <a href="javascript:void(0);" class="dropdown-item">
                                                            <i class="fas fa-users text-muted me-2"></i>Logout
                                                        </a>
                                                    </div>
                                                </li>
                                                <!-- user account -->
                                            </ul>
                                        <!-- end notify & user account -->

                                        <!-- start mobile close btn -->
                                        <button type="button" class="close-btns" data-bs-toggle='collapse' data-bs-target='#nav'>
                                            <i class="fas fa-times"></i>
                                        </button>
                                        <!-- end mobile close btn -->
                                    </div>
                                </div>

                            </div>
                            <!-- end top side bar -->
                        </div>
                    </div>
                </div>
            </nav>
        </div>
        <!-- end navbar -->

        <!-- start content area -->
        <section>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-10 col-md-9 ms-auto">

                        <!-- start shortcut area -->
                        <div class="row pt-md-5 mt-md-5">
                            <div class="col-lg-3 col-md-6 mb-2">
                                <div class="card shadow py-2" style="border-left: 3px solid steelblue;">
                                    <div class="card-body">
                                        <div class="row align-items-center">
                                            <div class="col">
                                                <h6 class="text-primary text-xs fw-bold text-uppercase mb-1">Sales (Monthly)</h6>
                                                <p class="h5 text-muted">$ 50,000</p>
                                            </div>
                                            <div class="col-auto">
                                                <i class="fas fa-calendar fa-2x text-muted"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-3 col-md-6 mb-2">
                                <div class="card shadow py-2" style="border-left: 3px solid green;">
                                    <div class="card-body">
                                        <div class="row align-items-center">
                                            <div class="col">
                                                <h6 class="text-primary text-xs fw-bold text-uppercase mb-1">Rental Fees (Annual)</h6>
                                                <p class="h5 text-muted">$ 400,000</p>
                                            </div>
                                            <div class="col-auto">
                                                <i class="fas fa-dollar-sign fa-2x text-muted"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-3 col-md-6 mb-2">
                                <div class="card shadow py-2" style="border-left: 3px solid skyblue;">
                                    <div class="card-body">
                                        <div class="row align-items-center">
                                            <div class="col">
                                                <h6 class="text-primary text-xs fw-bold text-uppercase mb-1">Debit Collect</h6>
                                                <div class="row ">
                                                    <p class="col-auto">60%</p>
                                                    <div class="col">
                                                        <div class="progress" style="height: 13px;">
                                                            <div class="progress-bar bg-info" style="width: 60%;"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-auto">
                                                <i class="fas fa-clipboard-list fa-2x text-muted"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-3 col-md-6 mb-2">
                                <div class="card shadow py-2" style="border-left: 3px solid orange;">
                                    <div class="card-body">
                                        <div class="row align-items-center">
                                            <div class="col">
                                                <h6 class="text-primary text-xs fw-bold text-uppercase mb-1">Request Message</h6>
                                                <p class="h5 text-muted">25</p>
                                            </div>
                                            <div class="col-auto">
                                                <i class="fas fa-comments fa-2x text-muted"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end shortcut area -->

                        <!-- start carousel area -->
                        <div class="row">
                            <div class="col-md-3 col-sm-6 mb-2">
                                <div class="card ">
                                    <div class="card-body">
                                        <h6 class="card-title">Sales</h6>

                                        <div class="carousel slide" data-bs-ride="carousel">
                                            <div class="carousel-inner p-3">
                                                <div class="carousel-item active">
                                                    <div class="d-flex">
                                                        <h3>$ 58,664 </h3>
                                                        <h3 class="text-danger ">+3.2%</h3>
                                                    </div>

                                                    <div>
                                                        <p class="fw-bold text-small">Revenue <span class="text-muted">($1527M last month)</span></p>
                                                    </div>

                                                    <button type="button" class="btn btn-outline-secondary btn-sm">
                                                        <i class="fas fa-calendar-alt me-1"></i> Jan
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end carousel area -->
                    </div>
                </div>
            </div>
        </section>
        <!-- end content area -->
                                    



        <!-- bootstrap link -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>


        <!-- jquery link -->
        <script src="./assets/libs/jquery/jquery-3.7.1.min.js"></script>

        <!-- javascript link -->
        <script src="./js/app.js"></script>
    </body>
    </html>
