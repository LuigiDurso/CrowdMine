<!DOCTYPE html>
<html>
    <head>
        <title>Index Amministratore</title>

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
    </head>
    <body>
        <div class="app app-default">
            <aside class="app-sidebar" id="sidebar">
                <div class="sidebar-header">
                    <a class="sidebar-brand" href="#"><span class="highlight">Operazioni Moderatore</span> </a>
                </div>
                <div class="sidebar-menu">
                    <ul class="sidebar-nav">
                        <li class="">
                            <a href="visualizzaUtentiSegnalati">
                                <div class="title">Utenti Segnalati</div>
                            </a>
                        </li>
                        <li class="">
                            <a href="visualizzaUtentiBannati">
                                <div class="title">Utenti Bannati</div>
                            </a>
                        </li>
                        <li class="">
                            <a href="visualizzaAnnunciSegnalati">
                                <div class="title">Annunci Segnalati</div>
                            </a>
                        </li>
                        <li class="">
                            <a href="visualizzaFeedbackSegnalati">
                                <div class="title">Feedback Segnalati</div>
                            </a>
                        </li>
                        <li class="">
                            <a href="visualizzaIndexStatistiche">
                                <div class="title">Statistiche</div>
                            </a>
                        </li>
                        <li class="">
                            <a href="visualizzaRicorsiAnnunci">
                                <div class="title">Ricorso annunci</div>
                            </a>
                        </li>
                        <li class="">
                            <a href="visualizzaRicorsiAlBan">
                                <div class="title">Ricorso al ban</div>
                            </a>
                        </li>
                        <li class="">
                            <a href="visualizzaIndexMacrocategorie">
                                <div class="title">Macrocategorie</div>
                            </a>
                        </li>
                        <li class="">
                            <a href="visualizzaIndexMicrocategorie">
                                <div class="title">Microcategorie</div>
                            </a>
                        </li>
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
                    <ul class="nav navbar-nav navbar-left">
                        <li class="navbar-title">Barra di ricerca</li>
                        <li class="navbar-search hidden-sm">
                            <input id="search" type="text" placeholder="Search..">
                            <button class="btn-search"><i class="fa fa-search"></i></button>
                        </li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        
                        <li class="dropdown notification warning">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <div class="icon"><i class="fa fa-comments" aria-hidden="true"></i></div>
                                <div class="title">Messaggi</div>
                                <div class="count">0</div>
                            </a>
                            <div class="dropdown-menu">
                                <ul>
                                    <li class="dropdown-header">Messagi scambiati</li>
                                    <li>
                                        <a href="#"> <!-- qui va caricato dinamicamente il link alla conversazione -->
                                            <span class="badge badge-warning pull-right">1</span>
                                            <div class="message">
                                                <img class="profile" src="https://placehold.it/100x100">
                                                <div class="content">
                                                    <div class="title">"Ciao, ti contattavo per chiedere..."</div>
                                                    <div class="description">Andrea De Lucia</div>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="dropdown-footer">
                                        <!-- qui sotto va il link alla pagina che mostra tutti i messaggi dell'utente in questione -->
                                        <a href="#">View All <i class="fa fa-angle-right" aria-hidden="true"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="dropdown notification danger">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <div class="icon"><i class="fa fa-bell" aria-hidden="true"></i></div>
                                <div class="title">Notifiche</div>
                                <div class="count">0</div>
                            </a>
                            <div class="dropdown-menu">
                                <ul>
                                    <li class="dropdown-header">Notifiche</li>
                                    <li>
                                        <a href="#">
                                            <div class="message">
                                                <div class="content">
                                                    <div class="title">Aggiunto nuovo annuncio inerente ai tuoi interessi</div>
                                                    <div class="description">SpaceX</div>
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
                        <li class="dropdown profile">
                            <a href="/html/pages/profile.html" class="dropdown-toggle" data-toggle="dropdown">
                                <img class="profile-img" src="<?php echo STYLE_DIR; ?>assets\images\profile.png">
                                <div class="title">Profile</div>
                            </a>
                            <div class="dropdown-menu">
                                <div class="profile-info">
                                    <h4 class="username">Fabiano Pecorelli</h4>
                                </div>
                                <ul class="action">
                                    <li>
                                        <a href="#">
                                            Profilo
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            Impostazioni account
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
                        <div class="app-title">
                            <div class="title"><span class="highlight">Benvenuto alla pagina principale del Moderatore</span></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
    </div>
</div>
    </body>
</html>


