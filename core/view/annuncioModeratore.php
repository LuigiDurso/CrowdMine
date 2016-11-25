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
        <script type="text/ng-template" id="sidebar-dropdown.tpl.html">
            <div class="dropdown-background">
            <div class="bg"></div>
            </div>
            <div class="dropdown-container">
            {{list}}
            </div>
        </script>
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
                            <div class="card card-annuncio" style="margin-bottom: 2%;  border-style:solid">
                                <div class="row col-md-12 col-sm-12 col-xs-12 card-header" style="margin-left: 0%">
                                    <div class="col-md-3 col-sm-3 col-xs-3 media-left img-profilo">
                                        <a href="#">
                                            <img src="<?php echo STYLE_DIR; ?>img\logojet.jpg" width="100%;" />
                                        </a>
                                    </div>
                                    <div class="col-md-7 annuncioTitle" style="width: 100%;">
                                        <div class="owner col-md-12 col-sm-12" style="border-bottom: 1px solid #eee;">
                                            <h1>JetBrains</h1>
                                        </div>
                                        <div class="offerta col-md-12 col-sm-12">
                                            <h1>Offerta Programmatore PHP</h1>
                                        </div>
                                    </div>
                                    <div class="col-md-1 col-sm-2 preferites">
                                        <i class="fa fa-star-o" style="font-size: 200%;"></i>
                                        <ul class="card-action">
                                            <li class="dropdown">
                                                <a href="/" class="dropdown-toggle" data-toggle="dropdown">
                                                    <i class="fa fa-cog" style="font-size: 200%;"></i>
                                                </a>
                                                <ul class="dropdown-menu">
                                                    <li><a href="#">Segnala</a></li>
                                                    <li><a href="#">Action 2</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="row col-md-12 col-sm-12 col-xs-12 card-body" style="margin-left: 0%">
                                    <div class="media-body comment more">
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                        Vestibulum laoreet, nunc eget laoreet sagittis,
                                        quam ligula sodales orci, congue imperdiet eros tortor ac lectus.
                                        Duis eget nisl orci. Aliquam mattis purus non mauris
                                        blandit id luctus felis convallis.
                                        Integer varius egestas vestibulum.
                                        Nullam a dolor arcu, ac tempor elit. Donec.
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                        Vestibulum laoreet, nunc eget laoreet sagittis,
                                        quam ligula sodales orci, congue imperdiet eros tortor ac lectus.
                                        Duis eget nisl orci. Aliquam mattis purus non mauris
                                        blandit id luctus felis convallis.
                                        Integer varius egestas vestibulum.
                                        Nullam a dolor arcu, ac tempor elit. Donec.                                        
                                    </div>
                                </div>
                                <div class="row col-md-12 col-sm-12 col-xs-12 media-categories" style="margin-left: 2%; margin-bottom: 2%; margin-top: -2%">
                                    <span class="label label-warning">Informatica</span>
                                    <span class="label label-default">Web Developer</span>
                                </div>
                                <div class="media-moderatore" style=margin-left:70%>
                                    <button type="button" class="btn btn-info">visualizza</button>
                                    <button type="button" class="btn btn-warning">modifica</button>
                                    <button type="button" class="btn btn-danger">elimina</button>
                                </div>
                                <div class="row col-md-12 col-sm-12 card contenitore" style="margin-left: 0; display: none">
                                    <div class="row col-md-12 col-sm-12 comment-body" style="border-bottom: solid 1px #eee; margin-top: 2%; margin-bottom: 1%">
                                        <div class="col-md-1 col-sm-1 media-left img-profilo" style="margin-top: 1%">
                                            <a href="#">
                                                <img src="<?php echo STYLE_DIR; ?>img\logojet.jpg" width="100%;"/>
                                            </a>
                                        </div>
                                        <div class="media-heading">
                                            <h4 class="title">Scott White</h4>
                                            <h5 class="timeing">20 mins ago</h5>
                                        </div>
                                        <div class="media-content">Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate.</div>
                                    </div>
                                    <div class="row col-md-12 col-sm-12 comment-body" style="border-bottom: solid 1px #eee; margin-top: 2%; margin-bottom: 1%">
                                        <div class="col-md-1 col-sm-1 media-left" style="margin-top: 1%">
                                            <a href="#">
                                                <img src="<?php echo STYLE_DIR; ?>img\logojet.jpg" width="100%;"/>
                                            </a>
                                        </div>
                                        <div class="media-heading">
                                            <h4 class="title">Scott White</h4>
                                            <h5 class="timeing">20 mins ago</h5>
                                        </div>
                                        <div class="media-content">Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate.</div>
                                    </div>                                   
                                </div>
                            </div>
                            <div class="card card-annuncio" style=border-style:solid>
                                <div class="row col-md-12 col-sm-12 col-xs-12 card-header" style="margin-left: 0%">
                                    <div class="col-md-3 col-sm-3 media-left">
                                        <a href="#">
                                            <img src="<?php echo STYLE_DIR; ?>img\logojet.jpg" width="100%;"/>
                                        </a>
                                    </div>
                                    <div class="col-md-7 annuncioTitle" style="width: 100%;">
                                        <div class="owner col-md-12 col-sm-12" style="border-bottom: 1px solid #eee;">
                                            <h1>JetBrains</h1>
                                        </div>
                                        <div class="offerta col-md-12 col-sm-12">
                                            <h1>Offerta Programmatore PHP</h1>
                                        </div>
                                    </div>
                                    <div class="col-md-1 col-sm-2 preferites">
                                        <i class="fa fa-star-o" style="font-size: 200%;"></i>
                                        <ul class="card-action">
                                            <li class="dropdown">
                                                <a href="/" class="dropdown-toggle" data-toggle="dropdown">
                                                    <i class="fa fa-cog" style="font-size: 200%;"></i>
                                                </a>
                                                <ul class="dropdown-menu">
                                                    <li><a href="#">Segnala</a></li>
                                                    <li><a href="#">Action 2</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="row col-md-12 col-sm-12 col-xs-12 card-body" style="margin-left: 0%">
                                    <div class="media-body comment more">
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                        Vestibulum laoreet, nunc eget laoreet sagittis,
                                        quam ligula sodales orci, congue imperdiet eros tortor ac lectus.
                                        Duis eget nisl orci. Aliquam mattis purus non mauris
                                        blandit id luctus felis convallis.
                                        Integer varius egestas vestibulum.
                                        Nullam a dolor arcu, ac tempor elit. Donec.
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                        Vestibulum laoreet, nunc eget laoreet sagittis,
                                        quam ligula sodales orci, congue imperdiet eros tortor ac lectus.
                                        Duis eget nisl orci. Aliquam mattis purus non mauris
                                        blandit id luctus felis convallis.
                                        Integer varius egestas vestibulum.
                                        Nullam a dolor arcu, ac tempor elit. Donec.
                                    </div>
                                </div>
                                <div class="row col-md-12 col-sm-12 col-xs-12 media-categories" style="margin-left: 2%; margin-bottom: 2%; margin-top: -2%">
                                    <span class="label label-warning">Informatica</span>
                                    <span class="label label-default">Web Developer</span>
                                </div>
                                <div class="media-moderatore" style=margin-left:70%>
                                    <button type="button" class="btn btn-info responsive">visualizza</button>
                                    <button type="button" class="btn btn-warning responsive">modifica</button>
                                    <button type="button" class="btn btn-danger responsive">elimina</button>
                                </div>
                                <div class="row col-md-12 col-sm-12 card contenitore" style="margin-left: 0; display: none">
                                    <div class="row col-md-12 col-sm-12 comment-body" style="border-bottom: solid 1px #eee; margin-top: 2%; margin-bottom: 1%">
                                        <div class="col-md-1 col-sm-1 media-left" style="margin-top: 1%">
                                            <a href="#">
                                                <img src="<?php echo STYLE_DIR; ?>img\logojet.jpg" width="100%;"/>
                                            </a>
                                        </div>
                                        <div class="media-heading">
                                            <h4 class="title">Scott White</h4>
                                            <h5 class="timeing">20 mins ago</h5>
                                        </div>
                                        <div class="media-content">Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate.</div>
                                    </div>
                                    <div class="row col-md-12 col-sm-12 comment-body" style="border-bottom: solid 1px #eee; margin-top: 2%; margin-bottom: 1%">
                                        <div class="col-md-1 col-sm-1 media-left" style="margin-top: 1%">
                                            <a href="#">
                                                <img src="<?php echo STYLE_DIR; ?>img\logojet.jpg" width="100%;"/>
                                            </a>
                                        </div>
                                        <div class="media-heading">
                                            <h4 class="title">Scott White</h4>
                                            <h5 class="timeing">20 mins ago</h5>
                                        </div>
                                        <div class="media-content">Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate.</div>
                                    </div>                                   
                                </div>
                            </div>

                        </div>
                        <div role="tabpanel" class="tab-pane" id="tab2">
                            <div class="card card-annuncio" style="margin-bottom: 2%;  border-style:solid">
                                <div class="row col-md-12 col-sm-12 col-xs-12 card-header" style="margin-left: 0%">
                                    <div class="col-md-3 col-sm-3 col-xs-3 media-left img-profilo">
                                        <a href="#">
                                            <img src="<?php echo STYLE_DIR; ?>img\logojet.jpg" width="100%;" />
                                        </a>
                                    </div>
                                    <div class="col-md-7 annuncioTitle" style="width: 100%;">
                                        <div class="owner col-md-12 col-sm-12" style="border-bottom: 1px solid #eee;">
                                            <h1>Nicola Barbone</h1>
                                        </div>
                                        <div class="offerta col-md-12 col-sm-12">
                                            <h1>offro lavoro spacciatore</h1>
                                        </div>
                                    </div>
                                    <div class="col-md-1 col-sm-2 preferites">
                                        <i class="fa fa-star-o" style="font-size: 200%;"></i>
                                        <ul class="card-action">
                                            <li class="dropdown">
                                                <a href="/" class="dropdown-toggle" data-toggle="dropdown">
                                                    <i class="fa fa-cog" style="font-size: 200%;"></i>
                                                </a>
                                                <ul class="dropdown-menu">
                                                    <li><a href="#">Segnala</a></li>
                                                    <li><a href="#">Action 2</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="row col-md-12 col-sm-12 col-xs-12 card-body" style="margin-left: 0%">
                                    <div class="media-body comment more">
                                        Cercasi persona seria e motivata per il lavoro di spacciatore.
                                        disponibili 2 modalità di assunzione spacciatore part-time o full-time.
                                        Lo stipendio sarà così elargito: fisso mensile di 500 euro più ottime provvigioni
                                        sul computo totale della droga venduta in 30 giorni lavorativi.
                                    </div>
                                </div>
                                <div class="row col-md-12 col-sm-12 col-xs-12 media-categories" style="margin-left: 2%; margin-bottom: 2%; margin-top: -2%">
                                    <span class="label label-warning">Fai da te</span>
                                    <span class="label label-default">Droga</span>
                                </div>
                                <div class="media-moderatore" style=margin-left:70%>
                                    <button type="button" class="btn btn-info">visualizza</button>
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-group dropdown-toggle" data-toggle="dropdown" aria-expanded="false">Intervieni<span class="caret"></span></button>
                                        <ul class="dropdown-menu" role="menu">
                                            <li><a href="#">Proponi rimozione</a></li>
                                            <li><a href="#">Contatta Admin</a></li>
                                            <li><a href="#">Lascia attivo</a></li>
                                        </ul>
                                    </div> 
                                </div>                            
                            </div>
                            <div class="card card-annuncio" style="margin-bottom: 2%;  border-style:solid">
                                <div class="row col-md-12 col-sm-12 col-xs-12 card-header" style="margin-left: 0%">
                                    <div class="col-md-3 col-sm-3 col-xs-3 media-left img-profilo">
                                        <a href="#">
                                            <img src="<?php echo STYLE_DIR; ?>img\logojet.jpg" width="100%;" />
                                        </a>
                                    </div>
                                    <div class="col-md-7 annuncioTitle" style="width: 100%;">
                                        <div class="owner col-md-12 col-sm-12" style="border-bottom: 1px solid #eee;">
                                            <h1>Gaia Russo</h1>
                                        </div>
                                        <div class="offerta col-md-12 col-sm-12">
                                            <h1>Cerco lavoro come meretrice</h1>
                                        </div>
                                    </div>
                                    <div class="col-md-1 col-sm-2 preferites">
                                        <i class="fa fa-star-o" style="font-size: 200%;"></i>
                                        <ul class="card-action">
                                            <li class="dropdown">
                                                <a href="/" class="dropdown-toggle" data-toggle="dropdown">
                                                    <i class="fa fa-cog" style="font-size: 200%;"></i>
                                                </a>
                                                <ul class="dropdown-menu">
                                                    <li><a href="#">Segnala</a></li>
                                                    <li><a href="#">Action 2</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="row col-md-12 col-sm-12 col-xs-12 card-body" style="margin-left: 0%">
                                    <div class="media-body comment more">
                                        Signora seria , di bella presenza offresi come accompagnatrice per cene , eventi, serate intime
                                        dove potremmo crogiolarci nel piacere.
                                        Disponibilita' a spostarsi in tutta italia .
                                        Prezzo da concordare,spese retribuite, se necessita' possiedo p.iva
                                        Si offre e si richiede max serieta' , astenersi perditempo .
                                    </div>
                                </div>
                                <div class="row col-md-12 col-sm-12 col-xs-12 media-categories" style="margin-left: 2%; margin-bottom: 2%; margin-top: -2%">
                                    <span class="label label-warning">Fai da te</span>                                    
                                </div>
                                <div class="media-moderatore" style=margin-left:70%>
                                    <button type="button" class="btn btn-info">visualizza</button>
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-group dropdown-toggle" data-toggle="dropdown" aria-expanded="false">Intervieni<span class="caret"></span></button>
                                        <ul class="dropdown-menu" role="menu">
                                            <li><a href="#">Proponi rimozione</a></li>
                                            <li><a href="#">Contatta Admin</a></li>
                                            <li><a href="#">Lascia attivo</a></li>
                                        </ul>
                                    </div> 
                                </div>                            
                            </div>
                        </div>
                        <div role="tabpanel" class="tab-pane" id="tab3">
                            <div class="card card-annuncio" style="margin-bottom: 2%;  border-style:solid">
                                <div class="row col-md-12 col-sm-12 col-xs-12 card-header" style="margin-left: 0%">
                                    <div class="col-md-3 col-sm-3 col-xs-3 media-left img-profilo">
                                        <a href="#">
                                            <img src="<?php echo STYLE_DIR; ?>img\logojet.jpg" width="100%;" />
                                        </a>
                                    </div>
                                    <div class="col-md-7 annuncioTitle" style="width: 100%;">
                                        <div class="owner col-md-12 col-sm-12" style="border-bottom: 1px solid #eee;">
                                            <h1>Francesca La Russa</h1>
                                        </div>
                                        <div class="offerta col-md-12 col-sm-12">
                                            <h1>Cerco lavoro come babysitter</h1>
                                        </div>
                                    </div>
                                    <div class="col-md-1 col-sm-2 preferites">
                                        <i class="fa fa-star-o" style="font-size: 200%;"></i>
                                        <ul class="card-action">
                                            <li class="dropdown">
                                                <a href="/" class="dropdown-toggle" data-toggle="dropdown">
                                                    <i class="fa fa-cog" style="font-size: 200%;"></i>
                                                </a>
                                                <ul class="dropdown-menu">
                                                    <li><a href="#">Segnala</a></li>
                                                    <li><a href="#">Action 2</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="row col-md-12 col-sm-12 col-xs-12 card-body" style="margin-left: 0%">
                                    <div class="media-body comment more">
                                        Ho una grande esperienza come baby sitter, attività che già svolgevo occasionalmente 
                                        mentre frequentavo la scuola superiore.Frequentando per due anni l'università "scienze della 
                                        formazione primaria" con vari tirocini in scuole materne ed elementari ho appreso molte nozioni.
                                        Ho frequentato un corso di primo soccorso pediatrico e sono in grado di eseguire manovre salvavita,
                                        in caso di necessità.Negli ultimi anni ho svolto anche mansioni di supporto a bambini in età 
                                        scolare, ai quali ho fornito assistenza nello svolgimento dei compiti a casa. Sono molto paziente
                                        nelle relazioni con i piccoli e riesco a stabilire rapporti di fiducia e di simpatia reciproca.
                                        Le mie caratteristiche peculiari sono flessibilità, puntualità negli orari e capacità 
                                        di organizzare la giornata in modo preciso, nel rispetto delle esigenze dei bambini. Sono stata 
                                        sempre considerata una persona molto affidabile, professionale e competente dalle famiglie presso 
                                        le quali ho prestato servizio.
                                    </div>
                                </div>
                                <div class="row col-md-12 col-sm-12 col-xs-12 media-categories" style="margin-left: 2%; margin-bottom: 2%; margin-top: -2%">
                                    <span class="label label-warning">Casa</span>
                                    <span class="label label-default">babysitter</span>            
                                </div>
                                <div class="media-moderatore" style=margin-left:70%>
                                    <button type="button" class="btn btn-info">visualizza</button>
                                    <button type="button" class="btn btn-success">conferma</button>
                                    <button type="button" class="btn btn-danger">cancella</button>
                                </div>                            
                            </div>
                        </div>
                        <div role="tabpanel" class="tab-pane" id="tab4">
                            <div class="card card-annuncio" style="margin-bottom: 2%;  border-style:solid">
                                <div class="row col-md-12 col-sm-12 col-xs-12 card-header" style="margin-left: 0%">
                                    <div class="col-md-3 col-sm-3 col-xs-3 media-left img-profilo">
                                        <a href="#">
                                            <img src="<?php echo STYLE_DIR; ?>img\logojet.jpg" width="100%;" />
                                        </a>
                                    </div>
                                    <div class="col-md-7 annuncioTitle" style="width: 100%;">
                                        <div class="owner col-md-12 col-sm-12" style="border-bottom: 1px solid #eee;">
                                            <h1>Fasullo S.P.A.</h1>
                                        </div>
                                        <div class="offerta col-md-12 col-sm-12">
                                            <h1>Offro lavoro sviluppatore backend alle Cayman</h1>
                                        </div>
                                    </div>
                                    <div class="col-md-1 col-sm-2 preferites">
                                        <i class="fa fa-star-o" style="font-size: 200%;"></i>
                                        <ul class="card-action">
                                            <li class="dropdown">
                                                <a href="/" class="dropdown-toggle" data-toggle="dropdown">
                                                    <i class="fa fa-cog" style="font-size: 200%;"></i>
                                                </a>
                                                <ul class="dropdown-menu">
                                                    <li><a href="#">Segnala</a></li>
                                                    <li><a href="#">Action 2</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="row col-md-12 col-sm-12 col-xs-12 card-body" style="margin-left: 0%">
                                    <div class="media-body comment more">
                                       Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                        Vestibulum laoreet, nunc eget laoreet sagittis,
                                        quam ligula sodales orci, congue imperdiet eros tortor ac lectus.
                                        Duis eget nisl orci. Aliquam mattis purus non mauris
                                        blandit id luctus felis convallis.
                                        Integer varius egestas vestibulum.
                                        Nullam a dolor arcu, ac tempor elit. Donec.
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                        Vestibulum laoreet, nunc eget laoreet sagittis,
                                        quam ligula sodales orci, congue imperdiet eros tortor ac lectus.
                                        Duis eget nisl orci. Aliquam mattis purus non mauris
                                        blandit id luctus felis convallis.
                                        Integer varius egestas vestibulum.
                                        Nullam a dolor arcu, ac tempor elit. Donec.
                                    </div>
                                </div>
                                <div class="row col-md-12 col-sm-12 col-xs-12 media-categories" style="margin-left: 2%; margin-bottom: 2%; margin-top: -2%">
                                    <span class="label label-warning">Casa</span>
                                    <span class="label label-default">babysitter</span>            
                                </div>
                                <div class="media-moderatore" style=margin-left:70%>
                                    <button type="button" class="btn btn-info">visualizza</button>
                                </div>                            
                            </div>
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
