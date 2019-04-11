<?php
require('db/Connection.php');
ob_start();
session_start();
if(empty($_SESSION['Username']))
{
    header("Location: Login.php");
}
$_Users = mysqli_query($Link,"select * from tbl_users where _email='".$_SESSION[Username]."'");
while ($rUser = mysqli_fetch_array($_Users)) {
    $GlobalId = $rUser[0];
    $Name = $rUser['_first_name']." ". $rUser['_last_name'];
    $UserType = $rUser['_user_type'];
    $_Picture = $rUser['_picture'];
	$_Email = $rUser['_email'];
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Talent Pool</title>
    <!-- HTML5 Shim and Respond.js IE9 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
      <![endif]-->
    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
    <meta name="description" content="Phoenixcoded">
    <meta name="keywords" content=", Flat ui, Admin , Responsive, Landing, Bootstrap, App, Template, Mobile, iOS, Android, apple, creative app">
    <meta name="author" content="Phoenixcoded">
    <!-- Favicon icon -->
    <link rel="icon" href="assets/images/favicon.ico" type="image/x-icon">
    <!-- Google font-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">
    <!-- Required Fremwork -->
    <link rel="stylesheet" type="text/css" href="../bower_components/bootstrap/dist/css/bootstrap.min.css">
    <!-- themify icon -->
    <link rel="stylesheet" type="text/css" href="assets/icon/themify-icons/themify-icons.css">
    <!-- ico font -->
    <link rel="stylesheet" type="text/css" href="assets/icon/icofont/css/icofont.css">
    <!-- flag icon framework css -->
    <link rel="stylesheet" type="text/css" href="assets/pages/flag-icon/flag-icon.min.css">
    <!-- Menu-Search css -->
    <link rel="stylesheet" type="text/css" href="assets/pages/menu-search/css/component.css">
    <!-- Horizontal-Timeline css -->
    <link rel="stylesheet" type="text/css" href="assets/pages/dashboard/horizontal-timeline/css/style.css">
    <!-- amchart css -->
    <link rel="stylesheet" type="text/css" href="assets/pages/dashboard/amchart/css/amchart.css">
    <!-- flag icon framework css -->
    <link rel="stylesheet" type="text/css" href="assets/pages/flag-icon/flag-icon.min.css">
    <!-- Style.css -->
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <!--color css-->
    <link rel="stylesheet" type="text/css" href="assets/css/color/color-1.css" id="color" />
</head>

<body class="header-fixed">
    <!-- Pre-loader start -->
    <div class="theme-loader">
        <div class="ball-scale">
            <div></div>
        </div>
    </div>
    <!-- Pre-loader end -->
    <!-- Menu header start -->
    <nav class="navbar header-navbar">
        <div class="navbar-wrapper">
            <div class="navbar-logo">
                <a class="mobile-menu" id="mobile-collapse" href="#!">
                    <i class="ti-menu"></i>
                </a>
                <a class="mobile-search morphsearch-search" href="#">
                    <i class="ti-search"></i>
                </a>
                <a href="index.php">
                    <img class="img-fluid" src="assets/img/logo.svg" width="150" alt="" />
                </a>
                <a class="mobile-options">
                    <i class="ti-more"></i>
                </a>
            </div>
            <div class="navbar-container container-fluid">
                <div>
                    <ul class="nav-left">
                        <li>
                            <a id="collapse-menu" href="#">
                                <i class="ti-menu"></i>
                            </a>
                        </li>
                        <li>
                            <a class="main-search morphsearch-search" href="#">
                                <!-- themify icon -->
                                <i class="ti-search"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#!" onclick="javascript:toggleFullScreen()">
                                <i class="ti-fullscreen"></i>
                            </a>
                        </li>
                        <li class="mega-menu-top">
                            <a href="#">
              More Options
              <i class="ti-angle-down"></i>
            </a>
                            <ul class="show-notification row">
                                <li class="col-sm-3">
                                    <h6 class="mega-menu-title">Popular Links</h6>
                                    <ul class="mega-menu-links">
                                        <li><a href="form-elements-component.html">Form Elements</a></li>
                                        <li><a href="button.html">Buttons</a></li>
                                        <li><a href="map-google.html">Maps</a></li>
                                        <li><a href="user-card.html">Contact Cards</a></li>
                                        <li><a href="user-profile.html">User Information</a></li>
                                        <li><a href="auth-lock-screen.html">Lock Screen</a></li>
                                    </ul>
                                </li>
                                <li class="col-sm-3">
                                    <h6 class="mega-menu-title">Mailbox</h6>
                                    <ul class="mega-mailbox">
                                        <li>
                                            <a href="#" class="media">
                                                <div class="media-left">
                                                    <i class="ti-folder"></i>
                                                </div>
                                                <div class="media-body">
                                                    <h5>Data Backup</h5>
                                                    <small class="text-muted">Store your data</small>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="media">
                                                <div class="media-left">
                                                    <i class="ti-headphone-alt"></i>
                                                </div>
                                                <div class="media-body">
                                                    <h5>Support</h5>
                                                    <small class="text-muted">24-hour support</small>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="media">
                                                <div class="media-left">
                                                    <i class="ti-dropbox"></i>
                                                </div>
                                                <div class="media-body">
                                                    <h5>Drop-box</h5>
                                                    <small class="text-muted">Store large amount of data in one-box only
                                                    </small>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="media">
                                                <div class="media-left">
                                                    <i class="ti-location-pin"></i>
                                                </div>
                                                <div class="media-body">
                                                    <h5>Location</h5>
                                                    <small class="text-muted">Find Your Location with ease of use</small>
                                                </div>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="col-sm-3">
                                    <h6 class="mega-menu-title">Gallery</h6>
                                    <div class="row m-b-20">
                                        <div class="col-sm-4"><img class="img-fluid img-thumbnail" src="assets/images/mega-menu/01.jpg" alt="Gallery-1">
                                        </div>
                                        <div class="col-sm-4"><img class="img-fluid img-thumbnail" src="assets/images/mega-menu/02.jpg" alt="Gallery-2">
                                        </div>
                                        <div class="col-sm-4"><img class="img-fluid img-thumbnail" src="assets/images/mega-menu/03.jpg" alt="Gallery-3">
                                        </div>
                                    </div>
                                    <div class="row m-b-20">
                                        <div class="col-sm-4"><img class="img-fluid img-thumbnail" src="assets/images/mega-menu/04.jpg" alt="Gallery-4">
                                        </div>
                                        <div class="col-sm-4"><img class="img-fluid img-thumbnail" src="assets/images/mega-menu/05.jpg" alt="Gallery-5">
                                        </div>
                                        <div class="col-sm-4"><img class="img-fluid img-thumbnail" src="assets/images/mega-menu/06.jpg" alt="Gallery-6">
                                        </div>
                                    </div>
                                    <button class="btn btn-primary btn-sm btn-block">Browse Gallery</button>
                                </li>
                                <li class="col-sm-3">
                                    <h6 class="mega-menu-title">Contact Us</h6>
                                    <div class="mega-menu-contact">
                                        <div class="form-group row">
                                            <label for="example-text-input" class="col-3 col-form-label">Name</label>
                                            <div class="col-9">
                                                <input class="form-control" type="text" placeholder="Artisanal kale" id="example-text-input">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="example-search-input" class="col-3 col-form-label">Email</label>
                                            <div class="col-9">
                                                <input class="form-control" type="email" placeholder="Enter your E-mail Id" id="example-search-input">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="example-search-input" class="col-3 col-form-label">Contact</label>
                                            <div class="col-9">
                                                <input class="form-control" type="number" placeholder="+91-9898989898" id="example-search-input">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="exampleTextarea" class="col-3 col-form-label">Message</label>
                                            <div class="col-9">
                                                <textarea class="form-control" id="exampleTextarea" rows="3"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </li>
                    </ul>
                    <ul class="nav-right">
                        <li class="header-notification lng-dropdown">
                            <a href="#" id="dropdown-active-item">
                                <i class="flag-icon flag-icon-gb m-r-5"></i> English
                            </a>
                            <ul class="show-notification">
                                <li>
                                    <a href="#" data-lng="en">
                                        <i class="flag-icon flag-icon-gb m-r-5"></i> English
                                    </a>
                                </li>
                                <li>
                                    <a href="#" data-lng="es">
                                        <i class="flag-icon flag-icon-es m-r-5"></i> Spanish
                                    </a>
                                </li>
                                <li>
                                    <a href="#" data-lng="pt">
                                        <i class="flag-icon flag-icon-pt m-r-5"></i> Portuguese
                                    </a>
                                </li>
                                <li>
                                    <a href="#" data-lng="fr">
                                        <i class="flag-icon flag-icon-fr m-r-5"></i> French
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="header-notification">
                            <a href="#!">
                                <i class="ti-bell"></i>
                                <span class="badge">5</span>
                            </a>
                            <ul class="show-notification">
                                <li>
                                    <h6>Notifications</h6>
                                    <label class="label label-danger">New</label>
                                </li>
                                <li>
                                    <div class="media">
                                        <img class="d-flex align-self-center" src="assets/images/user.png" alt="Generic placeholder image">
                                        <div class="media-body">
                                            <h5 class="notification-user">John Doe</h5>
                                            <p class="notification-msg">Lorem ipsum dolor sit amet, consectetuer elit.</p>
                                            <span class="notification-time">30 minutes ago</span>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="media">
                                        <img class="d-flex align-self-center" src="assets/images/user.png" alt="Generic placeholder image">
                                        <div class="media-body">
                                            <h5 class="notification-user">Joseph William</h5>
                                            <p class="notification-msg">Lorem ipsum dolor sit amet, consectetuer elit.</p>
                                            <span class="notification-time">30 minutes ago</span>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="media">
                                        <img class="d-flex align-self-center" src="assets/images/user.png" alt="Generic placeholder image">
                                        <div class="media-body">
                                            <h5 class="notification-user">Sara Soudein</h5>
                                            <p class="notification-msg">Lorem ipsum dolor sit amet, consectetuer elit.</p>
                                            <span class="notification-time">30 minutes ago</span>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </li>
                    
                        <li class="user-profile header-notification">
                            <a href="#!">
                                <img src="<?php echo $_Picture; ?>" style="width: 40px; height: 40px;" alt="User-Profile-Image" class="user-img img-circle">
                                <span><?php echo $Name; ?></span>
                                <i class="ti-angle-down"></i>
                            </a>
                            <ul class="show-notification profile-notification">
                                
                                <li>
                                    <a href="Profile.php">
                                        <i class="ti-user"></i> Profile
                                    </a>
                                </li>
                                <li>
                                    <a href="ComposeEmail.php">
                                        <i class="ti-email"></i> My Emails
                                    </a>
                                </li>
                                
                                <li>
                                    <a href="Code/Logout.php">
                                        <i class="ti-layout-sidebar-left"></i> Logout
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                    <!-- search -->
                    <div id="morphsearch" class="morphsearch">
                        <form class="morphsearch-form">
                            <input class="morphsearch-input" type="search" placeholder="Search..." />
                            <button class="morphsearch-submit" type="submit">Search</button>
                        </form>
                        <div class="morphsearch-content">
                            <div class="dummy-column">
                                <h2>People</h2>
                                <a class="dummy-media-object" href="#!">
                                    <img class="round" src="http://0.gravatar.com/avatar/81b58502541f9445253f30497e53c280?s=50&d=identicon&r=G" alt="Sara Soueidan" />
                                    <h3>Sara Soueidan</h3>
                                </a>
                                <a class="dummy-media-object" href="#!">
                                    <img class="round" src="http://1.gravatar.com/avatar/9bc7250110c667cd35c0826059b81b75?s=50&d=identicon&r=G" alt="Shaun Dona" />
                                    <h3>Shaun Dona</h3>
                                </a>
                            </div>
                            <div class="dummy-column">
                                <h2>Popular</h2>
                                <a class="dummy-media-object" href="#!">
                                    <img src="assets/images/avatar-1.png" alt="PagePreloadingEffect" />
                                    <h3>Page Preloading Effect</h3>
                                </a>
                                <a class="dummy-media-object" href="#!">
                                    <img src="assets/images/avatar-1.png" alt="DraggableDualViewSlideshow" />
                                    <h3>Draggable Dual-View Slideshow</h3>
                                </a>
                            </div>
                            <div class="dummy-column">
                                <h2>Recent</h2>
                                <a class="dummy-media-object" href="#!">
                                    <img src="assets/images/avatar-1.png" alt="TooltipStylesInspiration" />
                                    <h3>Tooltip Styles Inspiration</h3>
                                </a>
                                <a class="dummy-media-object" href="#!">
                                    <img src="assets/images/avatar-1.png" alt="NotificationStyles" />
                                    <h3>Notification Styles Inspiration</h3>
                                </a>
                            </div>
                        </div>
                        <!-- /morphsearch-content -->
                        <span class="morphsearch-close"><i class="icofont icofont-search-alt-1"></i></span>
                    </div>
                    <!-- search end -->
                </div>
            </div>
        </div>
    </nav>
    <!-- Menu header end -->
    <!-- Menu aside start -->
    <div class="main-menu">
        <div class="main-menu-header">
            <img class="img-40" src="<?php echo $_Picture; ?>" style="width: 40px; height: 40px;" alt="User-Profile-Image" class="user-img img-circle">
            <div class="user-details">
                <span><?php echo $Name; ?></span>
                <span id="more-details">UX Designer<i class="ti-angle-down"></i></span>
            </div>
        </div>
        <div class="main-menu-content">
            <ul class="main-navigation">
                <li class="more-details">
                    <a href="Profile.php"><i class="ti-user"></i>View Profile</a>
                    <a href="ComposeEmail.php"><i class="ti-email"></i>My Emails</a>
                    <a href="Code/Logout.php"><i class="ti-layout-sidebar-left"></i>Logout</a>
                </li>
                <li class="nav-title" data-i18n="nav.category.navigation">
                    <i class="ti-line-dashed"></i>
                    <span>Navigation</span>
                </li>
                <li class="nav-item has-class">
                    <a href="#!">
                        <i class="ti-home"></i>
                        <span data-i18n="nav.dash.main">Dashboard</span>
                    </a>
                    <ul class="tree-1 has-class">
                        <li class="has-class">
                            <a href="index.php" data-i18n="nav.dash.default"> Default </a></li>
                            <li><a href="ReportList.php" data-i18n="nav.dash.ecommerce"> My Projects</a></li>
                             <li><a href="SearchStudents.php" data-i18n="nav.dash.crm">Search Students</a></li>
                             <li><a href="ReportList.php" data-i18n="nav.dash.analytics">Reports</a> </li>
                        <li><a href="ComposeEmail.php" data-i18n="nav.dash.analytics">Compose Email</a> </li>
                        <?php
                        if($UserType == "Admin")
                        {
                        ?>
                        <li><a href="ControlPanel.php" data-i18n="nav.dash.analytics">Control Panel</a> </li>
                        <?php
                        }
                        ?>
                    </ul>
                    </li>
                 
                   
                    
            </ul>
        </div>
    </div>
    <!-- Menu aside end -->