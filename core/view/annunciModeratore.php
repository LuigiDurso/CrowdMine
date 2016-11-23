<!DOCTYPE html>
<!--
@author Andrea Buonaguro
@version 1.0
@since 17/11/16
-->
<html>
    <head>
        <title>CrowdMine | Annunci Moderatore</title>

        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" type="text/css" href="<?php echo STYLE_DIR; ?>assets/css/vendor.css">
        <link rel="stylesheet" type="text/css" href="<?php echo STYLE_DIR; ?>assets/css/flat-admin.css">
        <link rel="shortcut icon" href="<?php echo STYLE_DIR; ?>img/icon_crowdmine.png" type="image/x-icon" />


        <!-- Theme -->
        <link rel="stylesheet" type="text/css" href="<?php echo STYLE_DIR; ?>assets/css/theme/blue-sky.css">
        <link rel="stylesheet" type="text/css" href="<?php echo STYLE_DIR; ?>assets/css/theme/blue.css">
        <link rel="stylesheet" type="text/css" href="<?php echo STYLE_DIR; ?>assets/css/theme/red.css">
        <link rel="stylesheet" type="text/css" href="<?php echo STYLE_DIR; ?>assets/css/theme/yellow.css">

        <style>
            /*tab a dimensione variabile*/
            .card.card-tab ul.nav-tabs > li{
                width:auto;
                min-width:auto;
            }

            .card.card-tab .card-header {
                overflow: visible;
            }

            .card.card-tab .card-header > ul, .card.card-tab ul.nav-tabs {
                display:block;
            }

            .card.card-tab ul.nav-tabs {
                position: relative;
                overflow: visible;
                border-bottom: none;
            }

            .card.card-tab ul.nav-tabs i {
                position: absolute;
                top: 18px;
                right: 22px;
                font-size: 24px;
            }
            .card.card-tab ul.nav-tabs i.fa-caret-up {
                display: none;
            }

            .card.card-tab ul.nav-tabs > li {
                display: none;
                float: none;
                text-align: center;
                z-index: 0;
                margin-bottom: -1px	;
            }
            .card.card-tab ul.nav-tabs > li:last-of-type > a {
                margin-right: 0;
            }
            .card.card-tab ul.nav-tabs > li > a {
                margin-right: 0;
                background: #fff;
                border: 1px solid #DDDDDD;
                padding: 20px 30px;
            }
            .card.card-tab ul.nav-tabs > li.active {
                display: block;
                border: 0;
            }
            .card.card-tab ul.nav-tabs > li.active a {
                border: 1px solid #DDDDDD !important;
                border-radius: 2px;
            }
            .card.card-tab ul.nav-tabs.open i.fa-caret-up {
                display: block;
            }
            .card.card-tab ul.nav-tabs.open i.fa-caret-down {
                display: none;
            }
            .card.card-tab ul.nav-tabs.open > li {
                display: block;
            }
            .card.card-tab ul.nav-tabs.open > li a {
                border-radius: 0;
            }
            .card.card-tab ul.nav-tabs.open > li:first-of-type a {
                border-radius: 2px 2px 0 0;
            }
            .card.card-tab ul.nav-tabs.open > li:last-of-type a {
                border-radius: 0 0 2px 2px;
            }
            @media (min-width: 846px) {
                .card.card-tab ul.nav-tabs {
                    border-bottom: 1px solid #ddd;
                }
                .card.card-tab ul.nav-tabs i {
                    display: none;
                }
                .card.card-tab ul.nav-tabs > li > a {
                    margin-right: 4px;
                    padding: 14px 12px;
                }
                .card.card-tab ul.nav-tabs > li {
                    display: block;
                    float: left;
                }
                .card.card-tab ul.nav-tabs > li.active a {
                    border-bottom-color: transparent !important;
                }

                .card.card-tab ul.nav-tabs.open i.fa-caret-up {
                    display: none;
                }
            }

        </style>

    </head>

    <body>
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
                                <img class="profile-img" src="<?php echo STYLE_DIR ?>/assets/images/profile.png">
                            </button>
                        </li>
                    </ul>
                    <ul class="nav navbar-nav navbar-left">
                        <li class="navbar-title"><img width="50%" src="<?php echo STYLE_DIR ?>/img/crowdmine_logo_2.png" /></li> <!-- Logo qui -->
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
                                <img class="profile-img" src="<?php echo STYLE_DIR ?>/assets/images/profile.png">
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
        
        <div class="app-container" style="padding-left: 15px;">
        <div class="col-md-12" >
            <div class="card card-tab">
                <div class="card-header" style="overflow:hidden">
                    <ul class="nav nav-tabs" style="overflow: hidden">
                        <li role="tab1" class="active">
                            <a href="#tab1" aria-controls="tab1" role="tab" data-toggle="tab">Annunci</a>
                        </li>
                        <li role="tab2" >
                            <a href="#tab2" aria-controls="tab2" role="tab" data-toggle="tab">Segnalati</a>
                        </li>
                        <li role="tab3" class="">
                            <a href="#tab3" aria-controls="tab3" role="tab" data-toggle="tab">Da verificare</a>
                        </li>
                        <li role="tab4">
                            <a href="#tab4" aria-controls="tab4" role="tab" data-toggle="tab">Reclami</a>
                        </li>
                    </ul>
                </div>
                <div class="card-body tab-content no-padding">
                    <div role="tabpanel" class="tab-pane active" id="tab1">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                    </div>
                    <div role="tabpanel" class="tab-pane" id="tab2">
                        ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nullaip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nullaip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
                    </div>
                    <div role="tabpanel" class="tab-pane" id="tab3">
                        pàsdgkèsdfoagkèadsfgkaè+s gkèsdgk èsd g
                    </div>
                    <div role="tabpanel" class="tab-pane" id="tab4">
                        dasdhffg bh gne gne gne!
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script type="text/javascript" src="<?php echo STYLE_DIR; ?>/assets/js/vendor.js"></script>
    <script type="text/javascript" src="<?php echo STYLE_DIR; ?>/assets/js/app.js"></script>
    <script>
        $.fn.responsiveTabs = function () {
            this.addClass('responsive-tabs');
            this.append($('<i class="fa fa-caret-down" aria-hidden="true"></i>'));
            this.append($('<i class="fa fa-caret-up" aria-hidden="true"></i>'));

            this.on('click', 'li.active > a, i', function () {
                this.toggleClass('open');
            }.bind(this));

            this.on('click', 'li:not(.active) > a', function () {
                this.removeClass('open');
            }.bind(this));
        };

        $('.nav.nav-tabs').responsiveTabs();
    </script>
</body>
</html>
