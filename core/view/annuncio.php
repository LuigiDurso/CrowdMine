<!DOCTYPE html>
<html>
<head>
    <title></title>

    <link rel="stylesheet" href="<?php echo STYLE_DIR; ?>bootstrap\css\bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo STYLE_DIR; ?>assets\css\vendor.css">
    <link rel="stylesheet" type="text/css" href="<?php echo STYLE_DIR; ?>assets\css\flat-admin.css">
    <link rel="stylesheet" type="text/css" href="<?php echo STYLE_DIR; ?>assets\css\rating.css">
    <link rel="stylesheet" type="text/css" href="<?php echo STYLE_DIR; ?>assets\css\Annunci\Annuncio.css">


    <!-- Theme -->
    <link rel="stylesheet" type="text/css" href="<?php echo STYLE_DIR; ?>assets\css\theme\blue-sky.css">
    <link rel="stylesheet" type="text/css" href="<?php echo STYLE_DIR; ?>assets\css\theme\blue.css">
    <link rel="stylesheet" type="text/css" href="<?php echo STYLE_DIR; ?>assets\css\theme\red.css">
    <link rel="stylesheet" type="text/css" href="<?php echo STYLE_DIR; ?>assets\css\theme\yellow.css">

</head>
<body>
<div class="app app-default">

    <aside class="app-sidebar" id="sidebar">
        <div class="sidebar-header">
            <a class="sidebar-brand" href="#"><span class="highlight">Flat v3</span> Admin</a>
            <button type="button" class="sidebar-toggle">
                <i class="fa fa-times"></i>
            </button>
        </div>
        <div class="sidebar-menu">
            <ul class="sidebar-nav">
                <li class="">
                    <a href="/core/template/index.html">
                        <div class="icon">
                            <i class="fa fa-tasks" aria-hidden="true"></i>
                        </div>
                        <div class="title">Dashboard</div>
                    </a>
                </li>
                <li class="@@menu.messaging">
                    <a href="/core/template/messaging.html">
                        <div class="icon">
                            <i class="fa fa-comments" aria-hidden="true"></i>
                        </div>
                        <div class="title">Messaging</div>
                    </a>
                </li>
                <li class="dropdown active">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <div class="icon">
                            <i class="fa fa-cube" aria-hidden="true"></i>
                        </div>
                        <div class="title">UI Kits</div>
                    </a>
                    <div class="dropdown-menu">
                        <ul>
                            <li class="section"><i class="fa fa-file-o" aria-hidden="true"></i> UI Kits</li>
                            <li><a href="/core/template/uikits/customize.html">Customize</a></li>
                            <li><a href="/core/template/uikits/components.html">Components</a></li>
                            <li><a href="/core/template/uikits/card.html">Card</a></li>
                            <li><a href="/core/template/uikits/form.html">Form</a></li>
                            <li><a href="/core/template/uikits/table.html">Table</a></li>
                            <li><a href="/core/template/uikits/icons.html">Icons</a></li>
                            <li class="line"></li>
                            <li class="section"><i class="fa fa-file-o" aria-hidden="true"></i> Advanced Components</li>
                            <li><a href="/core/template/uikits/pricing-table.html">Pricing Table</a></li>
                            <!-- <li><a href="../uikits/timeline.html">Timeline</a></li> -->
                            <li><a href="/core/template/uikits/chart.html">Chart</a></li>
                        </ul>
                    </div>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <div class="icon">
                            <i class="fa fa-file-o" aria-hidden="true"></i>
                        </div>
                        <div class="title">Pages</div>
                    </a>
                    <div class="dropdown-menu">
                        <ul>
                            <li class="section"><i class="fa fa-file-o" aria-hidden="true"></i> Admin</li>
                            <li><a href="/core/template/pages/form.html">Form</a></li>
                            <li><a href="/core/template/pages/profile.html">Profile</a></li>
                            <li><a href="/core/template/pages/search.html">Search</a></li>
                            <li class="line"></li>
                            <li class="section"><i class="fa fa-file-o" aria-hidden="true"></i> Landing</li>
                            <!-- <li><a href="../pages/landing.html">Landing</a></li> -->
                            <li><a href="/core/template/pages/login.html">Login</a></li>
                            <li><a href="/core/template/pages/register.html">Register</a></li>
                            <!-- <li><a href="../pages/404.html">404</a></li> -->
                        </ul>
                    </div>
                </li>
            </ul>
        </div>
        <div class="sidebar-footer">
            <ul class="menu">
                <li>
                    <a href="/" class="dropdown-toggle" data-toggle="dropdown">
                        <i class="fa fa-cogs" aria-hidden="true"></i>
                    </a>
                </li>
                <li><a href="#"><span class="flag-icon flag-icon-th flag-icon-squared"></span></a></li>
            </ul>
        </div>
    </aside>

    <script type="text/ng-template" id="sidebar-dropdown.tpl.html">
        <div class="dropdown-background">
            <div class="bg"></div>
        </div>
        <div class="dropdown-container">
            {{list}}
        </div>
    </script>

    <div class="app-container">
        <nav class="navbar navbar-default" id="navbar">
            <div class="container-fluid">
                <div class="navbar-collapse collapse in">
                    <ul class="nav navbar-nav navbar-mobile">
                        <li>
                            <button type="button" class="sidebar-toggle">
                                <i class="fa fa-bars"></i>
                            </button>
                        </li>
                        <li class="logo">
                            <a class="navbar-brand" href="#"><span class="highlight">Flat v3</span> Admin</a>
                        </li>
                        <li>
                            <button type="button" class="navbar-toggle">
                                <img class="profile-img" src="/core/template/assets/images/profile.png">
                            </button>
                        </li>
                    </ul>
                    <ul class="nav navbar-nav navbar-left">
                        <li class="navbar-title"><span class="highlight">Card</span>&nbsp;<span>Kits</span></li>
                        <li class="navbar-search hidden-sm">
                            <input id="search" type="text" placeholder="Search..">
                            <button class="btn-search"><i class="fa fa-search"></i></button>
                        </li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <li class="dropdown notification">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <div class="icon"><i class="fa fa-shopping-basket" aria-hidden="true"></i></div>
                                <div class="title">New Orders</div>
                                <div class="count">0</div>
                            </a>
                            <div class="dropdown-menu">
                                <ul>
                                    <li class="dropdown-header">Ordering</li>
                                    <li class="dropdown-empty">No New Ordered</li>
                                    <li class="dropdown-footer">
                                        <a href="#">View All <i class="fa fa-angle-right" aria-hidden="true"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="dropdown notification warning">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <div class="icon"><i class="fa fa-comments" aria-hidden="true"></i></div>
                                <div class="title">Unread Messages</div>
                                <div class="count">99</div>
                            </a>
                            <div class="dropdown-menu">
                                <ul>
                                    <li class="dropdown-header">Message</li>
                                    <li>
                                        <a href="#">
                                            <span class="badge badge-warning pull-right">10</span>
                                            <div class="message">
                                                <img class="profile" src="https://placehold.it/100x100">
                                                <div class="content">
                                                    <div class="title">"Payment Confirmation.."</div>
                                                    <div class="description">Alan Anderson</div>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <span class="badge badge-warning pull-right">5</span>
                                            <div class="message">
                                                <img class="profile" src="https://placehold.it/100x100">
                                                <div class="content">
                                                    <div class="title">"Hello World"</div>
                                                    <div class="description">Marco  Harmon</div>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <span class="badge badge-warning pull-right">2</span>
                                            <div class="message">
                                                <img class="profile" src="https://placehold.it/100x100">
                                                <div class="content">
                                                    <div class="title">"Order Confirmation.."</div>
                                                    <div class="description">Brenda Lawson</div>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="dropdown-footer">
                                        <a href="#">View All <i class="fa fa-angle-right" aria-hidden="true"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="dropdown notification danger">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <div class="icon"><i class="fa fa-bell" aria-hidden="true"></i></div>
                                <div class="title">System Notifications</div>
                                <div class="count">10</div>
                            </a>
                            <div class="dropdown-menu">
                                <ul>
                                    <li class="dropdown-header">Notification</li>
                                    <li>
                                        <a href="#">
                                            <span class="badge badge-danger pull-right">8</span>
                                            <div class="message">
                                                <div class="content">
                                                    <div class="title">New Order</div>
                                                    <div class="description">$400 total</div>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <span class="badge badge-danger pull-right">14</span>
                                            Inbox
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <span class="badge badge-danger pull-right">5</span>
                                            Issues Report
                                        </a>
                                    </li>
                                    <li class="dropdown-footer">
                                        <a href="#">View All <i class="fa fa-angle-right" aria-hidden="true"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="dropdown profile">
                            <a href="/html/pages/profile.html" class="dropdown-toggle"  data-toggle="dropdown">
                                <img class="profile-img" src="/core/template/assets/images/profile.png">
                                <div class="title">Profile</div>
                            </a>
                            <div class="dropdown-menu">
                                <div class="profile-info">
                                    <h4 class="username">Scott White</h4>
                                </div>
                                <ul class="action">
                                    <li>
                                        <a href="#">
                                            Profile
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <span class="badge badge-danger pull-right">5</span>
                                            My Inbox
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            Setting
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            Logout
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <div class="row">
            <div class="col-md-12">
                <div class="col-sm-6 col-xs-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="media-left">
                                <a href="#">
                                    <img src="/core/template/assets/images/logojet.jpg" width="100% "/>
                                </a>
                            </div>
                            <div class="annuncioTitle">
                                <div class="owner">JetBrains</div>
                                <div class="offerta">Offerta Programmatore PHP</div>
                            </div>
                            <div class="preferites">
                                <i class="fa fa-star-o" style="font-size: 200%"></i>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="media">
                            </div>
                            <div class="media-body">
                                <h4 class="media-heading">Media heading</h4>
                                <p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate.</p>
                            </div>
                        </div>
                        <div class="annuncioOperazioni">
                            <button class="btn btn-link">
                                <i class="fa fa-comments-o"></i> 10 Comments
                            </button>
                            <button type="button" class="btn btn-danger">Segnala</button>
                            <button type="button" class="btn btn-success ca">Candidati</button>
                        </div>
                        <div class="media-comment" style="">
                            <input type="text" class="form-control" placeholder="comment..." style="width: 68%">
                            <button type="button" class="btn btn-info btn-sm co">Commenta</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="col-sm-6 col-xs-12 col-md-10">
                    <div class="card">
                        <div class="card-header">
                            <div class="media-left">
                                <a href="#">
                                    <img src="/core/template/assets/images/logojet.jpg" width="100% "/>
                                </a>
                            </div>
                            <div class="annuncioTitle">
                                <div class="owner">JetBrains</div>
                                <div class="offerta">Offerta Programmatore PHP</div>
                            </div>
                            <div class="preferites">
                                <i class="fa fa-star-o" style="font-size: 200%"></i>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="media">
                            </div>
                            <div class="media-body">
                                <h4 class="media-heading">Media heading</h4>
                                <p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate.</p>
                            </div>
                        </div>
                        <div class="annuncioOperazioni">
                            <button class="btn btn-link">
                                <i class="fa fa-comments-o"></i> 10 Comments
                            </button>
                            <button type="button" class="btn btn-danger">Segnala</button>
                            <button type="button" class="btn btn-success ca">Candidati</button>
                        </div>
                        <div class="media-comment" style="">
                            <input type="text" class="form-control" placeholder="comment..." style="width: 68%">
                            <button type="button" class="btn btn-info btn-sm co">Commenta</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </div>

</div>


<script type="text/javascript" src="/core/template/assets/js/vendor.js"></script>
<script type="text/javascript" src="/core/template/assets/js/app.js"></script>

</body>
</html>