<!DOCTYPE html>
<html>
<head>
    <title>CrowdMine</title>

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
                        <li class="navbar-title">Dashboard</li>
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
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card card-tab">
                    <div class="card-header">
                        <ul class="nav nav-tabs">
                            <li role="tab1" class="active">
                                <a href="#tab1" aria-controls="tab1" role="tab" data-toggle="tab">Generale</a>
                            </li>
                            <li role="tab2">
                                <a href="#tab2" aria-controls="tab1" role="tab" data-toggle="tab">Annunci</a>
                            </li>
                            <li role="tab3">
                                <a href="#tab3" aria-controls="tab1" role="tab" data-toggle="tab">Utenti</a>
                            </li>
                        </ul>
                    </div>
                    <div class="card-body no-padding tab-content">
                        <div role="tabpanel" class="tab-pane active" id="tab1"><!--Inizio tab1-->
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <div class="section">
                                        <div class="section-title">Generale</div>
                                        <div class="section-body">
                                            <!--Da definire-->
                                            <div class="container-canvas">
                                                <canvas id="graficoGeneraleAnnunci"/>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div><!--Fine tab1-->
                        <div role="tabpanel" class="tab-pane" id="tab2"><!--Inizio tab2-->
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12"><!--Macro Categorie-->
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="section">
                                                <div class="section-title">Macro Categorie</div>
                                                <div class="section-body">
                                                    <form method="post" action="StatisticheAdmin.php" name="macroInfoDate"><!--action da cambiare-->
                                                        <div class="row">
                                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                                <select id="selectMacro"style="width:100%" class="select2">
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                                <label for="fromdatemacro">Da</label>
                                                                <input id="fromdatemacro" type="date"
                                                                       class="form-control">
                                                            </div>
                                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                                <label for="atdatemacro">A</label>
                                                                <input id="atdatemacro" type="date"
                                                                       class="form-control">
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                                <div class="form-group">
                                                                    <button id="submitMacro" type="submit"
                                                                            class="btn btn-primary">Mostra Risultati
                                                                    </button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </form>
                                                    <div class="row">
                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                            <!--Da definire -->
                                                            <div class="container-canvas">
                                                                <canvas id="macroCategoriaGrafico"/>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div><!--Fine Macro Categorie-->
                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12"> <!--Micro Categorie-->
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="section">
                                                <div class="section-title">Micro Categorie</div>
                                                <div class="section-body">
                                                    <form method="post" action=TabAnnunci.php" name="microInfoDate">
                                                        <div class="row">
                                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                                <select id="selectMicro" style="width:100%" class="select2">
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                                <label for="fromdatemicro">Da</label>
                                                                <input id="fromdatemicro" type="date"
                                                                       class="form-control">
                                                            </div>
                                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                                <label for="atdatemicro">A</label>
                                                                <input id="atdatemicro" type="date"
                                                                       class="form-control">
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                                <div class="form-group">
                                                                    <button id="submitMicro" type="submit"
                                                                            class="btn btn-primary">Mostra Risultati
                                                                    </button>
                                                                </div>
                                                            </div>
                                                    </form>
                                                    <div class="row">
                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

                                                            <!-- classe da Da definire -->
                                                            <div class="container-canvas">
                                                                <canvas id="microCategoriaGrafico"/>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div><!--Fine Micro Categorie-->
                            </div>
                        </div>
                    </div><!--Fine tab2-->
                    <div role="tabpanel" class="tab-pane" id="tab3"><!--Inizio tab3-->
                        <div class="row"><!--tabella macro-->
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="section">
                                    <div class="section-title">Macro Categorie Preferite Dagli Utenti</div>
                                    <div class="section-body">
                                        <table id= "macroUtenti" class="table">
                                            <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Macro Categoria</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                                <th scope="row">1</th>
                                                <td><a href="#">
                                                        <button type="button" class="btn btn-info">Macro Categoria
                                                        </button>
                                                    </a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th scope="row">2</th>
                                                <td>
                                                    <a href="#">
                                                        <button type="button" class="btn btn-info">Macro Categoria
                                                        </button>
                                                    </a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th scope="row">3</th>
                                                <td>
                                                    <a href="#">
                                                        <button type="button" class="btn btn-info">Macro Categoria
                                                        </button>
                                                    </a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th scope="row">4</th>
                                                <td>
                                                    <a href="#">
                                                        <button type="button" class="btn btn-info">Macro Categoria
                                                        </button>
                                                    </a>
                                                </td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div><!--fine row tabella macro-->
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="section">
                                    <div class="section-title">Micro Categorie di Nome Macro Categoria &nbsp; &nbsp;
                                        &nbsp;
                                        <span><a href="#"><i class="fa fa-level-up"></i>Torna alle Macro Categorie</a></span>
                                    </div>
                                    <div class="section-body">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <table  id="microUtenti" class="table" cellspacing="0" width="100%">
                                            <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Micro Categoria</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                                <th scope="row">1</th>
                                                <td>Lorem</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">2</th>
                                                <td>Lorem</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">3</th>
                                                <td>Lorem</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">4</th>
                                                <td>Lorem</td>
                                            </tr>
                                            </tbody>
                                            </table>
                                        </div>
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <nav>
                                                <ul class="pagination">
                                                    <li>
                                                        <a href="#" aria-label="Previous">
                                                            <span aria-hidden="true">&laquo;</span>
                                                        </a>
                                                    </li>
                                                    <li><a href="#">1</a></li>
                                                    <li class="active"><a href="#">2</a></li>
                                                    <li><a href="#">3</a></li>
                                                    <li><a href="#">4</a></li>
                                                    <li><a href="#">5</a></li>
                                                    <li>
                                                        <a href="#" aria-label="Next">
                                                            <span aria-hidden="true">&raquo;</span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </nav>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div><!--Fine row tabella micro-->
                    </div><!--Fine tab3-->
                </div>
            </div>
        </div>
    </div>
</div>
</body>

<script type="text/javascript" src="<?php echo STYLE_DIR; ?>assets\js\vendor.js"></script>
<script type="text/javascript" src="<?php echo STYLE_DIR; ?>assets\js\app.js"></script>
<script src="<?php echo STYLE_DIR; ?>assets\js\Chart.min.js"></script>

<script type="text/javascript">


    //caricamento Generale
    $("#tab1").ready(function () {
        $.ajax({
            type: "POST",
            url: "control/TabGenerale.php",
            dataType: "json",
            data: {},
            success: drawGeneralChart(response)
        });
    });

    //caricamento TabGenerale nell'eventualità che si ritorni sulla pagina
    $("#tab1").click(function () {
        $.ajax({
            type: "POST",
            url: "control/TabGenerale.php",
            dataType: "json",
            data: {},
            success: drawGeneralChart(response)
        });
    });

    //caricamento dinamico ComboBox Macro Categoria
    $("#selectMacro").change(function () {
        $.ajax({
            type: "POST",
            url: "control/TabAnnunci.php",
            dataType: "json",
            data: "selectMacro",
            success: function (response) {
                var arrayMacroElements = $.map(response, function (el) {
                    return el;
                });
                appendMacroElements(arrayMacroElements);


            }
        })
    });

    function appendMacroElements(arrayMacroElements) {
        $.each(arrayMacroElements, function(el){
            $("#selectMacro").append(new Option(el, el))
        });

    }

    //caricamento dinamico ComboBox Micro Categoria
    $("#selectMicro").change(function () {
        $.ajax({
            type: "POST",
            url: "control/TabAnnunci.php",
            dataType: "json",
            data: "selectMicro",
            success: function (response) {
                var arrayMicroElements = $.map(response, function (el) {
                    return el;
                });
                appendMicroElements(arrayMicroElements);
            }
        });
    });

    function appendMicroElements(arrayMicroElements) {
        $.each(arrayMicroElements, function (el) {
            $("#selectMicro").append(new Option(el, el))
        });
    }
        //caricamento Macro
        $("#submitMacro").click(function () {

            var fromdatemacrovalue = $("#fromdatemacro").val();
            var atdatemacrovalue = $("#atdatemacro").val();
            var dataJSON = JSON.stringify({"fromdatemacro": fromdatemacrovalue, "atdatemacro": atdatemacrovalue});

            $.ajax({
                type: "POST",
                url: "control/TabAnnunci.php",
                dataType: "json",
                data: dataJSON,
                success: drawMacroDateChart(response)
            });
        });

        //caricamento Micro
        $("#submitMicro").click(function () {

            var fromdatemaicrovalue = $("#fromdatemicro").val();
            var atdatemicrovalue = $("#atdatemicro").val();
            var dataJSON = JSON.stringify({"fromdatemicro": fromdatemaicrovalue, "atdatemicro": atdatemicrovalue});

            $.ajax({
                type: "POST",
                url: "control/TabAnnunci.php", //controller della pagina
                dataType: "json",
                data: dataJSON,
                success: drawMicroDateChart(response)
            });
        });

        //check date macro
        $("#fromdatemacro, #atdatemacro").change(function () {

            //funzione da attivare ogni qualvolta si seleziona una data.
            var fromDate = $("#fromdatemacro").val();
            var atDate = $("#atdatemacro").val();

            if (fromDate != "" && atDate != "") {
                if (Date.parse(fromDate) > Date.parse(atDate)) {
                    $("#submitMacro").attr("disabled", "true");
                } else {
                    $("#submitMacro").removeAttr("disabled");
                }
            }
        });

        //check date micro
        $("#fromdatemicro, #atdatemicro").change(function () {

            //funzione da attivare ogni qualvolta si seleziona una data.
            var fromDate = $("#fromdatemicro").val();
            var atDate = $("#atdatemicro").val();

            if (fromDate != "" && atDate != "") {

                if (Date.parse(fromDate) > Date.parse(atDate)) {
                    $("#submitMicro").attr("disabled", "true");
                } else {
                    $("#submitMicro").removeAttr("disabled");
                }
            }
        });


        //caricamento macro in tabMacro preferite dall'utenti
        $("#tab3").click(function () {
            $.ajax({
                type: "POST",
                url: "control/TabMacro.php",
                dataType: "json",
                data: {"option:macrocategorie"},
                success: function (response) {
                    var arrayMacro = $.map(response, function (el) {
                        return el;
                    });

                    appendMacroToTable(arrayMacro);
                }
            });
        });

    function appendMacroToTable(arrayMacro) {
        $.each(arrayMacro, function (el) {
            $("#macroUtenti").find("tbody")
                .append($("<tr>")
                    .append($("<th>").attr("scope", "row")
                        .append($("<td>")
                            .append($("<a>").attr("href", "idMacro") //id macro è da prendere dai valori restituiti
                                .append($("<button>")
                                    .attr("type", "button")
                                    .attr("class", "btn btn-info")
                                    .attr("onclick", "bufferingMicroTable(" + el + ")") //da verificare
                                    .attr("text", el)
                                )
                            )
                        )
                    )
                );
        });
    }


    //caricamento micro categorie riferite alla macro categorie selezionata
    function bufferingMicroTable(nameButton) {
        var dataJSON = JSON.stringify({"option": "microcategorie", "macrocategoria": nameButton});

        $.ajax({
            type: "POST",
            url: "control/TabMacro.php",
            dataType: "json",
            data: dataJSON,
            success: function (response) {
                var arrayMicro = $.map(response, function (el) {
                    return el;
                });

                appendMicroToTable(arrayMicro);
            }
        });
    }

    function appendMicroToTable(arrayMicro) {
        $.each(arrayMicro, function (el) {
                $("#microUtenti").find("tbody")
                    .append($("<tr>")
                        .append($("<th>").attr("scope", "row")
                            .append($("<td>").attr("text", el)
                            )
                        )
                    );

            });
    }


    }



    function drawGeneralChart(response) {

        //va fatto il parsing di "response" per poter creare il grafico
        var ctxGenerale = document.getElementById("graficoGeneraleAnnunci").getContext("2d");

        var generaleData = {
            labels: [],
            datasets: [
                {
                    label: ["Numero annunci pubblicati oggi"],
                    data: [], //numero di annunci
                    backgroundColor: "rgba(255, 99, 132, 0.2)",
                    borderColor: "rgba(255,99,132,1)",
                    borderWidth: 1
                }
            ]
        };

        var generaleChart = new Chart.Bar(ctxGenerale, {
            data: generaleData,
            options: {
                pointHitRadius: 3,
                responsive: true,
                tooltipEvents: [],
                showTooltips: true,
                onAnimationComplete: function () {
                    this.showTooltip(this.segments, true);
                },
                tooltipTemplate: "<%= label %>  -  <%= value %>"
            }

        });
    }


    function drawMacroDateChart(response) {

        //va fatto il parsing di "response" per poter creare il grafico
        var ctxMacro = document.getElementById("macroCateogiraGrafico").getContext("2d");

        var macroData = {
            labels: [], //date
            datasets: [
                {
                    label: "", //nome macro
                    data: [], //dati macro
                    backgroundColor: "rgba(255, 99, 132, 0.2)",
                    borderColor: "rgba(255,99,132,1)",
                    borderWidth: 1
                }
            ]

        };

        var macroChart = new Chart.Line(ctxMacro, {
            data: macroData,
            options: {
                pointHitRadius: 3,
                responsive: true,
                tooltipEvents: [],
                showTooltips: true,
                onAnimationComplete: function () {
                    this.showTooltip(this.segments, true);
                },
                tooltipTemplate: "<%= label %>  -  <%= value %>"
            }
        });
    }


    function drawMicroDateChart(response) {

        //va fatto il parsing di "response" per poter creare il grafico
        var ctxMicro = document.getElementById("microCategoriaGrafico").getContext("2d");

        var microData = {
            labels: [], //date
            datasets: [
                {
                    label: "", //nome micro
                    data: [], //dati micro
                    backgroundColor: "rgba(255, 99, 132, 0.2)",
                    borderColor: "rgba(255,99,132,1)",
                    borderWidth: 1
                }
            ]
        };

        var microChart = new Chart.Line(ctxMicro, {
            data: microData,
            options: {
                pointHitRadius: 3,
                responsive: true,
                tooltipEvents: [],
                showTooltips: true,
                onAnimationComplete: function () {
                    this.showTooltip(this.segments, true);
                },
                tooltipTemplate: "<%= label %>  -  <%= value %>"
            }
        });
    }
</script>
</html>