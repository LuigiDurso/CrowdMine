<?php
/**
 * 
 * @author Fabiano Pecorelli
 * @version 1.0
 * @since 30/05/16
 */
?>

<html>
    <head>
        <title>Flat Admin V.3 - Free flat-design bootstrap administrator templates</title>

        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" type="text/css" href="<?php echo STYLE_DIR ?>/assets/css/vendor.css">
        <link rel="stylesheet" type="text/css" href="<?php echo STYLE_DIR ?>/assets/css/flat-admin.css">

        <!-- Theme -->
        <link rel="stylesheet" type="text/css" href="<?php echo STYLE_DIR ?>/assets/css/theme/blue-sky.css">
        <link rel="stylesheet" type="text/css" href="<?php echo STYLE_DIR ?>/assets/css/theme/blue.css">
        <link rel="stylesheet" type="text/css" href="<?php echo STYLE_DIR ?>/assets/css/theme/red.css">
        <link rel="stylesheet" type="text/css" href="<?php echo STYLE_DIR ?>/assets/css/theme/yellow.css">

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

        <nav class="navbar navbar-default" id="navbar" style="padding: 0px; border-width: 0px; ">
            <div class="container-fluid" style="padding: 0px;">
                <div class="navbar-collapse collapse in" style="background: rgba(16, 14, 23, 0.87);">
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
                    <!-- LOGO x2-->
                    <ul class="nav navbar-nav navbar-left col-md-2" >
                        <li class="logo">
                            <img class="img-responsive" style="height: 75%" src="<?php echo STYLE_DIR ?>/img/Logo_Crowdmine_2.png" />
                        </li>                
                    </ul>
                    <!-- BARRA DI RICERCA x7-->
                    <ul class="nav navbar-nav navbar-center col-md-7"  style="padding-top: 2%">
                        
                        <!-- BARRA DI RICERCA->FORM x12-->
                        <form class="navbar-search hidden-sm col-md-12">
                            
                            <!-- BARRA DI RICERCA->FORM->PRIMA BARRA x7-->
                            <input  class="search-form col-md-6"id="search" type="text" placeholder="Cerca annunci di lavoro..." style="height: 60%; padding-right: 0px; padding-left: 5px">
                            
                            <!-- BARRA DI RICERCA->FORM->SECONDA BARRA x2-->
                            <div class="input_container search_where col-md-2" style="padding-right: 0px; padding-left: 0px">                              
                                <select class="search-form col-md-12" name="ca" id="searcharea" style="height: 60%; padding-right: 0px; padding-left: 0px">
                                    <option value="0_s" selected="selected" >DOVE</option>
                                    <option value="100" disabled="disabled">-- LE REGIONI --</option>
                                    <option value="13_s" data-option-type="region">Abruzzo</option><option value="17_s" data-option-type="region">Basilicata</option><option value="18_s" data-option-type="region">Calabria</option><option value="15_s" data-option-type="region">Campania</option><option value="8_s" data-option-type="region">Emilia-Romagna</option><option value="7_s" data-option-type="region">Friuli-Venezia Giulia</option><option value="11_s" data-option-type="region">Lazio</option><option value="3_s" data-option-type="region">Liguria</option><option value="4_s" data-option-type="region">Lombardia</option><option value="12_s" data-option-type="region">Marche</option><option value="14_s" data-option-type="region">Molise</option><option value="2_s" data-option-type="region">Piemonte</option><option value="16_s" data-option-type="region">Puglia</option><option value="19_s" data-option-type="region">Sardegna</option><option value="20_s" data-option-type="region">Sicilia</option><option value="9_s" data-option-type="region">Toscana</option><option value="5_s" data-option-type="region">Trentino-Alto Adige</option><option value="10_s" data-option-type="region">Umbria</option><option value="1_s" data-option-type="region">Valle d'Aosta</option><option value="6_s" data-option-type="region">Veneto</option>
                                </select>                             
                            </div>
                            
                            <!-- BARRA DI RICERCA->FORM->TERZA BARRA x2-->
                            <div class="input_container search_category col-md-2" style="padding-right: 0px; padding-left: 0px">
                                <select class="col-md-12" name="c" id="cat" style="height: 60%; padding-left: 0px ;">
                                    <option value="0">CATEGORIE</option>

                                    <option value="1">- MOTORI -</option>

                                    <option value="2">Auto</option>
                                    <option value="5">Accessori Auto</option>
                                    <option value="3">Moto e Scooter</option>
                                    <option value="36">Accessori Moto</option>
                                    <option value="22">Nautica</option>
                                    <option value="34">Caravan e Camper</option>
                                    <option value="4">Veicoli commerciali</option>

                                    <option value="6">- IMMOBILI -</option>

                                    <option value="7">Appartamenti</option>
                                    <option value="43">Camere/Posti letto</option>
                                    <option value="29">Ville singole e a schiera</option>
                                    <option value="30">Terreni e rustici</option>
                                    <option value="31">Garage e box</option>
                                    <option value="32">Loft, mansarde e altro</option>
                                    <option value="33">Case vacanza</option>
                                    <option value="8">Uffici e Locali commerciali</option>

                                    <option value="24">- LAVORO E SERVIZI -</option>

                                    <option value="26">Offerte di lavoro</option>
                                    <option value="50">Servizi</option>
                                    <option value="42">Candidati in cerca di lavoro</option>
                                    <option value="25">Attrezzature di lavoro</option>

                                    <option value="9">- ELETTRONICA -</option>

                                    <option value="10">Informatica</option>
                                    <option value="44">Console e Videogiochi</option>
                                    <option value="11">Audio/Video</option>
                                    <option value="40">Fotografia</option>
                                    <option value="12">Telefonia</option>

                                    <option value="13">- PER LA CASA e LA PERSONA -</option>

                                    <option value="14">Arredamento e Casalinghi</option>
                                    <option value="37">Elettrodomestici</option>
                                    <option value="15">Giardino e Fai da te</option>
                                    <option value="16">Abbigliamento e Accessori</option>
                                    <option value="17">Tutto per i bambini</option>

                                    <option value="18">- SPORTS E HOBBY -</option>

                                    <option value="23">Animali</option>
                                    <option value="19">Musica e Film</option>
                                    <option value="38">Libri e Riviste</option>
                                    <option value="39">Strumenti Musicali</option>
                                    <option value="20">Sports</option>
                                    <option value="41">Biciclette</option>
                                    <option value="21">Collezionismo</option>


                                    <option value="27" disabled="disabled">--</option>

                                    <option value="28">Altri</option>
                                </select>
                            </div>
                            
                            <!-- BARRA DI RICERCA->FORM->PULSANTE RICERCA-->
                            <div class="col-md-2" style="padding-right: 0px; padding-left: 5px">
                                <button class="col-md-8" class="btn btn-primary" style="height: 60%;">
                                    <b>CERCA</b>
                                </button>
                                <!-- BARRA DI RICERCA->FORM->SCRITTA AVANZATE-->       
                                <div class="col-md-4" style="padding-right: 10px; padding-left: 10px; padding-top: 7px">
                                     <a href="#" class="text-center ">Avanzata</a>
                                </div>
                            </div>
                            
                             
                            
                        </form>
                    </ul>
                    <!-- PULSANTI x3-->
                    <ul class="nav navbar-nav navbar-right col-md-3" style="padding-left: 0px; padding-right: 0px">
                        <li class="dropdown notification" style="padding-left: 80px; padding-right: 0px">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <div class="icon"><i class="fa fa-shopping-basket" aria-hidden="true"></i></div>
                                <div class="title">New Orders</div>
                                <div class="count">0</div>
                            </a>
                            <div class="dropdown-menu" style="padding-left: 0px; padding-right: 0px">
                                <ul>
                                    <li class="dropdown-header">Ordering</li>
                                    <li class="dropdown-empty">No New Ordered</li>
                                    <li class="dropdown-footer">
                                        <a href="#">View All <i class="fa fa-angle-right" aria-hidden="true"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="dropdown notification warning" style="padding-left: 0px; padding-right: 00px">
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