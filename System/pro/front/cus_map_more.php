<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title>Find Fuel Station</title>

    <!-- Fontfaces CSS-->
    <link href="css/font-face.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="css/theme.css" rel="stylesheet" media="all">

    <style type="text/css">

                                    /* Set the size of the div element
                                    that contains the map */
                                    #map {
                                        height: 1px;
                                        width: 1px;
                                    }
                                    
                                    h2 {
                                        color: #308d46;
                                    }
                                </style>

</head>

<body class="animsition">
    <div class="page-wrapper">
        <!-- HEADER MOBILE-->
        <header class="header-mobile d-block d-lg-none">
            <div class="header-mobile__bar">
                <div class="container-fluid">
                    <div class="header-mobile-inner">
                        <a class="logo" href="index.php">
                            <img src="images/icon/logo.png" alt="CoolAdmin" />
                        </a>
                        <button class="hamburger hamburger--slider" type="button">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </button>
                    </div>
                </div>
            </div>
            <nav class="navbar-mobile">
                <div class="container-fluid">
                    <ul class="navbar-mobile__list list-unstyled">
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-tachometer-alt"></i>Dashboard</a>
                            <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                                <li>
                                    <a href="index.php">Dashboard 1</a>
                                </li>
                                <li>
                                    <a href="index2.php">Dashboard 2</a>
                                </li>
                                <li>
                                    <a href="index3.php">Dashboard 3</a>
                                </li>
                                <li>
                                    <a href="index4.php">Dashboard 4</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="chart.php">
                                <i class="fas fa-chart-bar"></i>Charts</a>
                        </li>
                        <li>
                            <a href="table.php">
                                <i class="fas fa-table"></i>Tables</a>
                        </li>
                        <li>
                            <a href="form.php">
                                <i class="far fa-check-square"></i>Forms</a>
                        </li>
                        <li>
                            <a href="calendar.php">
                                <i class="fas fa-calendar-alt"></i>Calendar</a>
                        </li>
                        <li>
                            <a href="map.php">
                                <i class="fas fa-map-marker-alt"></i>Maps</a>
                        </li>
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-copy"></i>Pages</a>
                            <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                                <li>
                                    <a href="login.php">Login</a>
                                </li>
                                <li>
                                    <a href="register.php">Register</a>
                                </li>
                                <li>
                                    <a href="forget-pass.php">Forget Password</a>
                                </li>
                            </ul>
                        </li>
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-desktop"></i>UI Elements</a>
                            <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                                <li>
                                    <a href="button.php">Button</a>
                                </li>
                                <li>
                                    <a href="badge.php">Badges</a>
                                </li>
                                <li>
                                    <a href="tab.php">Tabs</a>
                                </li>
                                <li>
                                    <a href="card.php">Cards</a>
                                </li>
                                <li>
                                    <a href="alert.php">Alerts</a>
                                </li>
                                <li>
                                    <a href="progress-bar.php">Progress Bars</a>
                                </li>
                                <li>
                                    <a href="modal.php">Modals</a>
                                </li>
                                <li>
                                    <a href="switch.php">Switchs</a>
                                </li>
                                <li>
                                    <a href="grid.php">Grids</a>
                                </li>
                                <li>
                                    <a href="fontawesome.php">Fontawesome Icon</a>
                                </li>
                                <li>
                                    <a href="typo.php">Typography</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <!-- END HEADER MOBILE-->

        <!-- MENU SIDEBAR-->
        <aside class="menu-sidebar d-none d-lg-block">
            <div class="logo">
                <a href="#">
                    <img src="images/icon/logo.png" alt="Cool Admin" />
                </a>
            </div>
            <div class="menu-sidebar__content js-scrollbar1">
                <nav class="navbar-sidebar">
                    <ul class="list-unstyled navbar__list">

                        <li>
                            <a href="cus_dash.php">
                                <i class="fa fa-home"></i>Home</a>
                        </li>
                     
                        <li>
                            <a href="cus_fill_details.php">
                                <i class="fas fa-table"></i>Fill-up Details</a>
                        </li>

                        <li class="active has-sub" >
                            <a href="cus_map.php">
                                <i class="fas fa-map-marker-alt"></i>Find Fuel Station</a>
                        </li>

                    </ul>
                </nav>
            </div>
        </aside>
        <!-- END MENU SIDEBAR-->

        <!-- PAGE CONTAINER-->
        <div class="page-container">
            <!-- HEADER DESKTOP-->
            <header class="header-desktop">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="header-wrap">
                            <form class="form-header" action="" method="POST">
                                <input class="au-input au-input--xl" type="text" name="search" placeholder="Search for datas &amp; reports..." />
                                <button class="au-btn--submit" type="submit">
                                    <i class="zmdi zmdi-search"></i>
                                </button>
                            </form>
                            <div class="header-button">
                                <div class="noti-wrap">
                                    <div class="noti__item js-item-menu">
                                        <i class="zmdi zmdi-comment-more"></i>
                                        <span class="quantity">1</span>
                                        <div class="mess-dropdown js-dropdown">
                                            <div class="mess__title">
                                                <p>You have 2 news message</p>
                                            </div>
                                            <div class="mess__item">
                                                <div class="image img-cir img-40">
                                                    <img src="images/icon/avatar-06.jpg" alt="Michelle Moreno" />
                                                </div>
                                                <div class="content">
                                                    <h6>Michelle Moreno</h6>
                                                    <p>Have sent a photo</p>
                                                    <span class="time">3 min ago</span>
                                                </div>
                                            </div>
                                            <div class="mess__item">
                                                <div class="image img-cir img-40">
                                                    <img src="images/icon/avatar-04.jpg" alt="Diane Myers" />
                                                </div>
                                                <div class="content">
                                                    <h6>Diane Myers</h6>
                                                    <p>You are now connected on message</p>
                                                    <span class="time">Yesterday</span>
                                                </div>
                                            </div>
                                            <div class="mess__footer">
                                                <a href="#">View all messages</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="noti__item js-item-menu">
                                        <i class="zmdi zmdi-email"></i>
                                        <span class="quantity">1</span>
                                        <div class="email-dropdown js-dropdown">
                                            <div class="email__title">
                                                <p>You have 3 New Emails</p>
                                            </div>
                                            <div class="email__item">
                                                <div class="image img-cir img-40">
                                                    <img src="images/icon/avatar-06.jpg" alt="Cynthia Harvey" />
                                                </div>
                                                <div class="content">
                                                    <p>Meeting about new dashboard...</p>
                                                    <span>Cynthia Harvey, 3 min ago</span>
                                                </div>
                                            </div>
                                            <div class="email__item">
                                                <div class="image img-cir img-40">
                                                    <img src="images/icon/avatar-05.jpg" alt="Cynthia Harvey" />
                                                </div>
                                                <div class="content">
                                                    <p>Meeting about new dashboard...</p>
                                                    <span>Cynthia Harvey, Yesterday</span>
                                                </div>
                                            </div>
                                            <div class="email__item">
                                                <div class="image img-cir img-40">
                                                    <img src="images/icon/avatar-04.jpg" alt="Cynthia Harvey" />
                                                </div>
                                                <div class="content">
                                                    <p>Meeting about new dashboard...</p>
                                                    <span>Cynthia Harvey, April 12,,2018</span>
                                                </div>
                                            </div>
                                            <div class="email__footer">
                                                <a href="#">See all emails</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="noti__item js-item-menu">
                                        <i class="zmdi zmdi-notifications"></i>
                                        <span class="quantity">3</span>
                                        <div class="notifi-dropdown js-dropdown">
                                            <div class="notifi__title">
                                                <p>You have 3 Notifications</p>
                                            </div>
                                            <div class="notifi__item">
                                                <div class="bg-c1 img-cir img-40">
                                                    <i class="zmdi zmdi-email-open"></i>
                                                </div>
                                                <div class="content">
                                                    <p>You got a email notification</p>
                                                    <span class="date">April 12, 2018 06:50</span>
                                                </div>
                                            </div>
                                            <div class="notifi__item">
                                                <div class="bg-c2 img-cir img-40">
                                                    <i class="zmdi zmdi-account-box"></i>
                                                </div>
                                                <div class="content">
                                                    <p>Your account has been blocked</p>
                                                    <span class="date">April 12, 2018 06:50</span>
                                                </div>
                                            </div>
                                            <div class="notifi__item">
                                                <div class="bg-c3 img-cir img-40">
                                                    <i class="zmdi zmdi-file-text"></i>
                                                </div>
                                                <div class="content">
                                                    <p>You got a new file</p>
                                                    <span class="date">April 12, 2018 06:50</span>
                                                </div>
                                            </div>
                                            <div class="notifi__footer">
                                                <a href="#">All notifications</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="account-wrap">
                                    <div class="account-item clearfix js-item-menu">
                                        <div class="image">
                                            <img src="images/icon/avatar-01.jpg" alt="John Doe" />
                                        </div>
                                        <div class="content">
                                            <a class="js-acc-btn" href="#">Jansan Arul</a>
                                        </div>
                                        <div class="account-dropdown js-dropdown">
                                            <div class="info clearfix">
                                                <div class="image">
                                                    <a href="#">
                                                        <img src="images/icon/avatar-01.jpg" alt="John Doe" />
                                                    </a>
                                                </div>
                                                <div class="content">
                                                    <h5 class="name">
                                                        <a href="#">Jansan Arul</a>
                                                    </h5>
                                                    <span class="email">jansan@gmail.com</span>
                                                </div>
                                            </div>
                                            <div class="account-dropdown__body">
                                                <div class="account-dropdown__item">
                                                    <a href="#">
                                                        <i class="zmdi zmdi-account"></i>Account</a>
                                                </div>
                                                <div class="account-dropdown__item">
                                                    <a href="#">
                                                        <i class="zmdi zmdi-settings"></i>Setting</a>
                                                </div>
                                                <div class="account-dropdown__item">
                                                    <a href="#">
                                                        <i class="zmdi zmdi-money-box"></i>Billing</a>
                                                </div>
                                            </div>
                                            <div class="account-dropdown__footer">
                                                <a href="login.php">
                                                    <i class="zmdi zmdi-power"></i>Logout</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            <!-- HEADER DESKTOP-->

            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                        <h3 class="title-3 m-b-30"> <b>Find Nearest Fuel Station</b></h3>
                                <div class="table-responsive table--no-card m-b-30">
                                    
                                
                                <!--The div element for the map -->
                                <div id="map"></div>

                                <!--Add a script by google -->
                                <iframe src="https://www.google.com/maps/embed?pb=!1m26!1m12!1m3!1d7866.4004949841365!2d80.01765427427623!3d9.663924522328191!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m11!3e6!4m3!3m2!1d9.6655293!2d80.0172776!4m5!1s0x3afe56a3c6b0b47b%3A0x19b500fd875da4aa!2sfuel%20station%20jaffna!3m2!1d9.660629199999999!2d80.02742119999999!5e0!3m2!1sen!2slk!4v1672205697778!5m2!1sen!2slk" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

                                <script>

                                    // Initialize and add the map
                                    function initMap() {

                                        // The location of Geeksforgeeks office
                                        const gfg_office = {
                                            lat: 28.50231,
                                            lng: 77.40548
                                        };

                                        // Create the map, centered at gfg_office
                                        const map = new google.maps.Map(
                                                document.getElementById("map"), {

                                            // Set the zoom of the map
                                            zoom: 37.56,
                                            center: gfg_office,
                                        });
                                    }
                                </script>  



                                </div>                                                  
                        
                       
                        
                        
                       
                        

                    </div>

                    
                </div>

                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                        <h3 class="title-3 m-b-30"> <b>Fuel Availability</b></h3>
                                <div class="table-responsive table--no-card m-b-30">
                <table class="table table-borderless table-striped table-earning">
                    <thead>
                        <tr>
                            <th>Fuel Station </th>
                            <th>Distance</th>
                            <th>Petrol(92 Octane)</th>
                            <th>Petrol(95 Octane)</th>
                            <th>Diesel(Auto Diesel)</th>
                            <th>Diesel(Lanka Super Diesel 4 star)</th>
                            <th>Direction</th>
                                                        
                        </tr>                               
                    </thead>                                                    
                    <tbody>
                        <tr> 
                            <td>LIOC-SLRCS Fuel Filling Station</td>
                            <td>1.7 km</td>
                            <td>available</td>
                            <td>Unavailable</td>
                            <td>available</td>
                            <td>available</td>
                            <td>
                            <input type="button" onclick="location.href='https://www.google.com/maps/dir/9.655837,80.0199555/LIOC-SLRCS+Fuel+Filling+Station-Jaffna,+73+Kandy+Rd,+Jaffna/@9.6582268,80.0193191,16z/data=!3m1!4b1!4m9!4m8!1m1!4e1!1m5!1m1!1s0x3afe56a3c6b0b47b:0x19b500fd875da4aa!2m2!1d80.0274212!2d9.6606292';" value="Go Direction" />
                            </td>
                                            
                        </tr> 
                        <tr> 
                            <td>Ceypetco Filling Station - Rajan Umayal</td>
                            <td>3.8 km</td>
                            <td>available</td>
                            <td>available</td>
                            <td>available</td>
                            <td>available</td>
                            <td>
                            <input type="button" onclick="location.href='https://www.google.com/maps/dir//21+Mahathma+Gandhi+Rd,+Jaffna/@9.6659627,79.9458177,12.27z/data=!4m8!4m7!1m0!1m5!1m1!1s0x3afe56aa33521d21:0xdcb36ceac2588e5c!2m2!1d80.0134903!2d9.6643216';" value="Go Direction" />
                            </td>
                             
                        </tr>
                        <tr> 
                            <td>CEYPETCO Lanka Filling</td>
                            <td>7.8 km</td>
                            <td>available</td>
                            <td>available</td>
                            <td>available</td>
                            <td>available</td>
                            <td>
                            <input type="button" onclick="location.href='https://www.google.com/maps?lqi=CiVmdWVsIHN0YXRpb24gbmFtZXMgaW4gamFmZm5hIHNyaWxhbmthSJrB99nxqoCACFozEAAQARACGAAYARgEIiVmdWVsIHN0YXRpb24gbmFtZXMgaW4gamFmZm5hIHNyaWxhbmthkgENZnVlbF9zdXBwbGllcqoBGhABKhYiEmZ1ZWwgc3RhdGlvbiBuYW1lcygA&vet=12ahUKEwi86s_2zZz8AhUyi_0HHUszAgUQ8UF6BAgDED4..i&lei=GV6sY_z5C7KW9u8Py-aIKA&cs=1&um=1&ie=UTF-8&fb=1&gl=lk&sa=X&geocode=KXu0sMajVv46MaqkXYf9ALUZ&daddr=73+Kandy+Rd,+Jaffna';" value="Go Direction" />
                            </td>
                             
                        </tr>
                        <tr> 
                            <td>Lanka Fuel Station (Thevagurunathan)</td>
                            <td>12.1 km</td>
                            <td>available</td>
                            <td>Unavailable</td>
                            <td>available</td>
                            <td>Unavailable</td>
                            <td>
                            <input type="button" onclick="location.href='https://www.google.com/maps/dir//Market,+1010+Jaffna-Point+Pedro+Rd,+Jaffna/@9.6805061,79.9684249,12z/data=!4m8!4m7!1m0!1m5!1m1!1s0x3afe543ba88a3863:0xb8f8959b7ae9396a!2m2!1d80.0384816!2d9.6804994';" value="Go Direction" />
                            </td>
                             
                        </tr>
                        <tr> 
                            <td>CEYPETCO Petrol Station</td>
                            <td>15.8 km</td>
                            <td>Unavailable</td>
                            <td>Unavailable</td>
                            <td>available</td>
                            <td>Unavailable</td>
                            <td>
                            <input type="button" onclick="location.href='https://www.google.com/maps/dir//149%2F1+Jaffna-Kankesanturai+Rd,+Jaffna/@9.6645989,79.9401574,12z/data=!4m8!4m7!1m0!1m5!1m1!1s0x3afe56aae82fd695:0x596ddcc3488c7108!2m2!1d80.010198!2d9.664606';" value="Go Direction" />
                            </td>
                             
                        </tr>
                        <tr> 
                            <td>Lanka Filling Station (Urumpirai Jaffna</td>
                            <td>22.7 km</td>
                            <td>available</td>
                            <td>Unavailable</td>
                            <td>available</td>
                            <td>Unavailable</td>
                            <td>
                            <input type="button" onclick="location.href='https://www.google.com/maps/dir//P28V%2BMJ5,+AB18,+Urumpirai+West/@9.7166336,79.9740837,12z/data=!4m8!4m7!1m0!1m5!1m1!1s0x3afe54f98ebc3b55:0x669397e78d67b186!2m2!1d80.0441243!2d9.7166407';" value="Go Direction" />
                            </td>
                             
                        </tr>
                        
                                                
                    </tbody>
                </table> 
                </div>
                          
                </div>
         
                </div>
                </div>
    


                <div>

                    <div class="col-12 col-md-9">
                    <a class="btn btn-secondary" style="width:210px; margin:5px 0;" href="cus_map.php">Show Less</a>
                        
                    </div>

                </div>
                          
         </div>
         
        </div>
  </div>
    


    <!-- Jquery JS-->
    <script src="vendor/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap JS-->
    <script src="vendor/bootstrap-4.1/popper.min.js"></script>
    <script src="vendor/bootstrap-4.1/bootstrap.min.js"></script>
    <!-- Vendor JS       -->
    <script src="vendor/slick/slick.min.js">
    </script>
    <script src="vendor/wow/wow.min.js"></script>
    <script src="vendor/animsition/animsition.min.js"></script>
    <script src="vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
    </script>
    <script src="vendor/counter-up/jquery.waypoints.min.js"></script>
    <script src="vendor/counter-up/jquery.counterup.min.js">
    </script>
    <script src="vendor/circle-progress/circle-progress.min.js"></script>
    <script src="vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="vendor/chartjs/Chart.bundle.min.js"></script>
    <script src="vendor/select2/select2.min.js">
    </script>

    <!-- Main JS-->
    <script src="js/main.js"></script>

</body>

</html>
<!-- end document-->
