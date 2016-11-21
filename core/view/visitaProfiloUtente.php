<!DOCTYPE html>
<html>
<head>
    <title>Flat Admin V.3 - Free flat-design bootstrap administrator templates</title>

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="<?php echo STYLE_DIR; ?>bootstrap\css\bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo STYLE_DIR; ?>assets\css\vendor.css">
    <link rel="stylesheet" type="text/css" href="<?php echo STYLE_DIR; ?>assets\css\flat-admin.css">
    <link rel="stylesheet" type="text/css" href="<?php echo STYLE_DIR; ?>assets\css\rating.css">

    <!-- Theme -->
    <link rel="stylesheet" type="text/css" href="<?php echo STYLE_DIR; ?>assets\css\theme\blue-sky.css">
    <link rel="stylesheet" type="text/css" href="<?php echo STYLE_DIR; ?>assets\css\theme\blue.css">
    <link rel="stylesheet" type="text/css" href="<?php echo STYLE_DIR; ?>assets\css\theme\red.css">
    <link rel="stylesheet" type="text/css" href="<?php echo STYLE_DIR; ?>assets\css\theme\yellow.css">

<style>
		a.collapse-title{
			text-decoration:none;
		}
		.panel{
			margin-bottom: 4px;
			color: #666;
		}
		
		.panel .panel-heading{
			padding: 14px;
			color: #666;
			background-color: #f5f5f5;
		}
		
		.panel-heading > p{
			margin: 0px;
		}
	</style>
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
                    <a href="../index.html">
                        <div class="icon">
                            <i class="fa fa-tasks" aria-hidden="true"></i>
                        </div>
                        <div class="title">Dashboard</div>
                    </a>
                </li>
                <li class="@@menu.messaging">
                    <a href="../messaging.html">
                        <div class="icon">
                            <i class="fa fa-comments" aria-hidden="true"></i>
                        </div>
                        <div class="title">Messaging</div>
                    </a>
                </li>
                <li class="dropdown ">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <div class="icon">
                            <i class="fa fa-cube" aria-hidden="true"></i>
                        </div>
                        <div class="title">UI Kits</div>
                    </a>
                    <div class="dropdown-menu">
                        <ul>
                            <li class="section"><i class="fa fa-file-o" aria-hidden="true"></i> UI Kits</li>
                            <li><a href="../uikits/customize.html">Customize</a></li>
                            <li><a href="../uikits/components.html">Components</a></li>
                            <li><a href="../uikits/card.html">Card</a></li>
                            <li><a href="../uikits/form.html">Form</a></li>
                            <li><a href="../uikits/table.html">Table</a></li>
                            <li><a href="../uikits/icons.html">Icons</a></li>
                            <li class="line"></li>
                            <li class="section"><i class="fa fa-file-o" aria-hidden="true"></i> Advanced Components</li>
                            <li><a href="../uikits/pricing-table.html">Pricing Table</a></li>
                            <!-- <li><a href="../uikits/timeline.html">Timeline</a></li> -->
                            <li><a href="../uikits/chart.html">Chart</a></li>
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
                            <li><a href="../pages/form.html">Form</a></li>
                            <li><a href="../pages/profile.html">Profile</a></li>
                            <li><a href="../pages/search.html">Search</a></li>
                            <li class="line"></li>
                            <li class="section"><i class="fa fa-file-o" aria-hidden="true"></i> Landing</li>
                            <!-- <li><a href="../pages/landing.html">Landing</a></li> -->
                            <li><a href="../pages/login.html">Login</a></li>
                            <li><a href="../pages/register.html">Register</a></li>
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
                                <img class="profile-img" src="<?php echo STYLE_DIR; ?>assets\images\profile.png">
                            </button>
                        </li>
                    </ul>
                    <ul class="nav navbar-nav navbar-left">
                        <li class="navbar-title">Profile</li>
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
                                                    <div class="description">Marco Harmon</div>
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
                            <a href="/html/pages/profile.html" class="dropdown-toggle" data-toggle="dropdown">
                                <img class="profile-img" src="<?php echo STYLE_DIR; ?>assets\images\profile.png">
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
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body app-heading">
                        <img class="profile-img" src="<?php echo STYLE_DIR; ?>assets\images\profile.png">
                        <div class="app-title">
                            <div class="title"><span class="highlight">Scott White</span></div>
                            <div class="description">Frontend Developer</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="card card-tab">
                    <div class="card-header">
                        <ul class="nav nav-tabs">
                            <li role="tab1" class="active">
                                <a href="#tab1" aria-controls="tab1" role="tab" data-toggle="tab">Profilo</a>
                            </li>
                            <li role="tab2">
                                <a href="#tab2" aria-controls="tab2" role="tab" data-toggle="tab">Privacy e sicurezza</a>
                            </li>
                            <li role="tab3">
                                <a href="#tab3" aria-controls="tab3" role="tab" data-toggle="tab">Annunci e offerte di lavoro</a>
                            </li>
							<li role="tab4">
                                <a href="#tab4" aria-controls="tab4" role="tab" data-toggle="tab">Segnalazioni</a>
                            </li>
                            <li role="tab5">
                                <a href="#tab5" aria-controls="tab5" role="tab" data-toggle="tab">Feedback</a>
                            </li>
                            <li role="tab6">
                                <a href="#tab6" aria-controls="tab6" role="tab" data-toggle="tab">Statistiche</a>
                            </li>
                        </ul>
                    </div>
                    <div class="card-body no-padding tab-content">
                        <div role="tabpanel" class="tab-pane active" id="tab1">
                            <div class="row">
									<div class="section">
										<div class="section-title"><i class="icon fa fa-user" aria-hidden="true"></i>
                                            Elementi base
                                        </div>
										<div class="panel panel-default">
											<a class="panel-default" data-toggle="collapse" href="#profile-collapse1">
												<div class="panel-heading">
													<h4 class="media-heading">
														Indirizzi Email
													</h4>
													<p>Aggiungi o rimuovi indirizzi email</p>
												</div>
											</a>
											<div id="profile-collapse1" class="panel-collapse collapse">
												<div class="panel-body">Panel Body</div>
											</div>
										</div>
										<div class="panel panel-default">
											<a class="panel-default" data-toggle="collapse" href="#profile-collapse2">
												<div class="panel-heading">
													<h4 class="media-heading">
														Numeri di telefono
													</h4>
													<p>Modifica o aggiungi numeri di telefono</p>
												</div>
											</a>
											<div id="profile-collapse2" class="panel-collapse collapse">
												<div class="panel-body">Panel Body</div>
											</div>
										</div>
										<div class="panel panel-default">
											<a class="panel-default" data-toggle="collapse" href="#profile-collapse3">
												<div class="panel-heading">
													<h4 class="media-heading">
														Cambia password
													</h4>
													<p>Segli un'unica password per proteggere i tuoi dati</p>
												</div>
											</a>
											<div id="profile-collapse3" class="panel-collapse collapse">
												<div class="panel-body">Panel Body</div>
											</div>
										</div>
										<div class="panel panel-default">
											<a class="panel-default" data-toggle="collapse" href="#profile-collapse4">
												<div class="panel-heading">
													<h4 class="media-heading">
														Dati anagrafici
													</h4>
													<p>Visualizza e modifica i dati anagrafici del tuo account</p>
												</div>
											</a>
											<div id="profile-collapse4" class="panel-collapse collapse">
												<div class="panel-body">Panel Body</div>
											</div>
										</div>
									</div>
									<div class="section">
										<div class="section-title"><i class="icon fa fa-user" aria-hidden="true"></i>
                                            Gestione categorie
                                        </div>
										<div class="panel panel-default">
											<a class="panel-default" data-toggle="collapse" href="#profile-collapse5">
												<div class="panel-heading">
													<h4 class="media-heading">
														Visualizza, aggiungi macro-categorie
													</h4>
													<p>Visualizza, aggiungi ed elimina le macro-categorie di competenza</p>
												</div>
											</a>
											<div id="profile-collapse5" class="panel-collapse collapse">
												<div class="panel-body">Panel Body</div>
											</div>
										</div>
										<div class="panel panel-default">
											<a class="panel-default" data-toggle="collapse" href="#profile-collapse6">
												<div class="panel-heading">
													<h4 class="media-heading">
														Visualizza, aggiungi micro-categorie
													</h4>
													<p>Visualizza, aggiungi ed elimina le micro-categorie di competenza</p>
												</div>
											</a>
											<div id="profile-collapse6" class="panel-collapse collapse">
												<div class="panel-body">Panel Body</div>
											</div>
										</div>
										
									</div>
                            </div>
                        </div>
                        <div role="tabpanel" class="tab-pane" id="tab2">
                            <div class="row">
									<div class="section">
										<div class="panel panel-default">
											<a class="panel-default" data-toggle="collapse" href="#privacy-collapse1">
												<div class="panel-heading">
													<h4 class="media-heading">
														Blocca Utente
													</h4>
													<p>Vedi l'elenco ed effettua i cambiamenti che desideri apportare</p>
												</div>
											</a>
											<div id="privacy-collapse1" class="panel-collapse collapse">
												<div class="panel-body">Panel Body</div>
											</div>
										</div>
										<div class="panel panel-default">
											<a class="panel-default" data-toggle="collapse" href="#privacy-collapse2">
												<div class="panel-heading">
													<h4 class="media-heading">
														Condivisione di dati con terze parti
													</h4>
													<p>Scegli se possiamo condividere le informazioni di base del tuo profilo con terze parti</p>
												</div>
											</a>
											<div id="privacy-collapse2" class="panel-collapse collapse">
												<div class="panel-body">Panel Body</div>
											</div>
										</div>
										<div class="panel panel-default">
											<a class="panel-default" data-toggle="collapse" href="#privacy-collapse3">
												<div class="panel-heading">
													<h4 class="media-heading">
														Processo di verifica in due passaggi
													</h4>
													<p>Attiva questa funzionalità per una maggiore protezione nel tuo account</p>
												</div>
											</a>
											<div id="privacy-collapse3" class="panel-collapse collapse">
												<div class="panel-body">Panel Body</div>
											</div>
										</div>
										<div class="panel panel-default">
											<a class="panel-default" data-toggle="collapse" href="#privacy-collapse4">
												<div class="panel-heading">
													<h4 class="media-heading">
														Cancellazione Account
													</h4>
													<p>Se lo desideri, puoi eliminare il tuo account dal sistema</p>
												</div>
											</a>
											<div id="privacy-collapse4" class="panel-collapse collapse">
												<div class="panel-body">Panel Body</div>
											</div>
										</div>
									</div>
								</div>
                        </div>
                        <div role="tabpanel" class="tab-pane" id="tab3">
                            ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in
                            reprehenderit in voluptate velit esse cillum dolore eu fugiat nullaip ex ea commodo
                            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                            fugiat nullaip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
                            velit esse cillum dolore eu fugiat nulla
                        </div>
						<div role="tabpanel" class="tab-pane" id="tab4">
                            ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in
                            reprehenderit in voluptate velit esse cillum dolore eu fugiat nullaip ex ea commodo
                            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                            fugiat nullaip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
                            velit esse cillum dolore eu fugiat nulla
                        </div>
                        <!--Feedback-->
                        <div role="tabpanel" class="tab-pane" id="tab5">
                            <div class="row">
                                <div class="col-md-3 col-xs-12">
                                    <div class="section">
                                        <div class="section-title">
                                            Your user name
                                        </div>
                                        <div class="section-body __indent">
                                            <img src="http://placehold.it/100x100" class="img-responsive">
                                        </div>

                                        <div class="section-title">
                                            Rating
                                        </div>
                                        <div class="section-body" >
                                            <div class="rating">
                                                <input type="radio" id="star5" name="rating" value="5"/><label
                                                    class="full" for="star5" title="Awesome - 5 stars"></label>
                                                <input type="radio" id="star4half" name="rating" value="4.5"/><label
                                                    class="half" for="star4half"
                                                    title="Pretty good - 4.5 stars"></label>
                                                <input type="radio" id="star4" name="rating" value="4"/><label
                                                    class="full" for="star4" title="Pretty good - 4 stars"></label>
                                                <input type="radio" id="star3half" name="rating" value="3.5"/><label
                                                    class="half" for="star3half" title="Meh - 3.5 stars"></label>
                                                <input type="radio" id="star3" name="rating" value="3"/><label
                                                    class="full" for="star3" title="Meh - 3 stars"></label>
                                                <input type="radio" id="star2half" name="rating" value="2.5"/><label
                                                    class="half" for="star2half" title="Kinda bad - 2.5 stars"></label>
                                                <input type="radio" id="star2" name="rating" value="2"/><label
                                                    class="full" for="star2" title="Kinda bad - 2 stars"></label>
                                                <input type="radio" id="star1half" name="rating" value="1.5"/><label
                                                    class="half" for="star1half" title="Meh - 1.5 stars"></label>
                                                <input type="radio" id="star1" name="rating" value="1"/><label
                                                    class="full" for="star1" title="Sucks big time - 1 star"></label>
                                                <input type="radio" id="starhalf" name="rating" value="0.5"/><label
                                                    class="half" for="starhalf"
                                                    title="Sucks big time - 0.5 stars"></label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-7 col-xs-12">
                                    <input type="text" class="form-control"
                                           placeholder="Inserisci il titolo del feedback">
                                    <textarea name="name" rows="3" class="form-control"
                                              placeholder="Descrizione"></textarea>
                                    <button type="button" class="btn btn-success">Inserisci Feeedback</button>

                                    <div class="alert alert-danger  alert-dismissible" role="alert"
                                         style="margin-top:5%">
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">×</span></button>
                                        <strong>Errore!</strong> Conferma la collaborazione prima di inserire il
                                        feedback.
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--Statistiche-->
                        <div role="tabpanel" class="tab-pane" id="tab6">
                            <div class="row">
                                <div class="col-md-3 col-sm-12">
                                    <div class="section">
                                        <div class="section-title">
                                            Your user name
                                        </div>
                                        <div class="section-body __indent">
                                            <img src="http://placehold.it/100x100" class="img-responsive">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
                                    <div class="section">
                                        <div class="section-title">Statistica Feedback Totale</div>
                                        <div class="section-body">
                                            <div class="ct-chart-pie ct-perfect-fourth"></div>
                                            <div class="col-sm-4">
                                                <ul class="chart-label">
                                                    <li class="ct-label ct-series-a">Feedback positivi</li>
                                                    <li class="ct-label ct-series-b">Feedback negativi</li>
                                                </ul>
                                            </div>
                                            <div class="col-md-6">
                                                <table class="table">
                                                    <thead>
                                                    <tr>
                                                        <th>#</th>
                                                        <th>Micro Categoria</th>
                                                        <th>Feedback positivi</th>
                                                        <th>Feedback Negativi</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    <tr>
                                                        <th scope="row">1</th>
                                                        <td>Mark</td>
                                                        <td>Otto</td>
                                                        <td>@mdo</td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">2</th>
                                                        <td>Jacob</td>
                                                        <td>Thornton</td>
                                                        <td>@fat</td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">3</th>
                                                        <td>Larry</td>
                                                        <td>the Bird</td>
                                                        <td>@twitter</td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">4</th>
                                                        <td>Larry</td>
                                                        <td>the Bird</td>
                                                        <td>@twitter</td>
                                                    </tr>
                                                    </tbody>
                                                </table>
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
    </div>
</div>

<script type="text/javascript" src="<?php echo STYLE_DIR; ?>assets\js\vendor.js"></script>
<script type="text/javascript" src="<?php echo STYLE_DIR; ?>assets\js\app.js"></script>
<script>
$.fn.responsiveTabs = function() {
  this.addClass('responsive-tabs');
  this.append($('<span class="glyphicon glyphicon-triangle-bottom"></span>'));
  this.append($('<span class="glyphicon glyphicon-triangle-top"></span>'));

  this.on('click', 'li.active > a, span.glyphicon', function() {
    this.toggleClass('open');
  }.bind(this));

  this.on('click', 'li:not(.active) > a', function() {
    this.removeClass('open');
  }.bind(this));
};

$('.nav.nav-tabs').responsiveTabs();
</script>

</body>
</html>
