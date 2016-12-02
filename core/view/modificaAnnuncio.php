<?php
/**
 *
 * @author Vincenzo Russo
 * @version 1.0
 * @since 30/05/16
 */
include_once VIEW_DIR . 'header.php';

?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/html">
<head>
    <title></title>

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="<?php echo STYLE_DIR; ?>bootstrap\css\bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo STYLE_DIR; ?>assets\css\vendor.css">
    <link rel="stylesheet" type="text/css" href="<?php echo STYLE_DIR; ?>assets\css\flat-admin.css">
    <link rel="stylesheet" type="text/css" href="<?php echo STYLE_DIR; ?>assets\css\rating.css">
    <link rel="stylesheet" type="text/css" href="<?php echo STYLE_DIR; ?>assets\css\Annuncio\annuncioUtenteLoggato.css>

    <!-- Theme -->
    <link rel="stylesheet" type="text/css" href="<?php echo STYLE_DIR; ?>assets\css\theme\blue-sky.css">
    <link rel="stylesheet" type="text/css" href="<?php echo STYLE_DIR; ?>assets\css\theme\blue.css">
    <link rel="stylesheet" type="text/css" href="<?php echo STYLE_DIR; ?>assets\css\theme\red.css">
    <link rel="stylesheet" type="text/css" href="<?php echo STYLE_DIR; ?>assets\css\theme\yellow.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

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

    <div class="col-md-12 col-sm-12 app-container">

        <div class="row" style="margin-right: 20%;">

            <div class="col-md-12">

                <div class="card" style="width auto;">

                    <div class="card-header">Modifica Annuncio</div>

                    <div class="card-body">
                        <div class="row">

                            <div class="col-md-6">

                                <div class="input-group">
                                    <span class="input-group-addon" id="basic-addon1">
                                         <i class="fa fa-certificate" aria-hidden="true"></i></span>
                                    <input type="text" class="form-control" placeholder="Offerta Programmatore PHP" aria-describedby="basic-addon1" value="">
                                </div>
                                <textarea name="name" rows="3" class="form-control" placeholder="Descrizione.."></textarea>

                            </div>

                            <div class="col-md-6">

                                <div class="btn-group">
                                    <button type="button" class="btn btn-default btn-primary dropdown-toggle" data-toggle="dropdown" aria-expanded="false">Macro-Area<span class="caret"></span></button>
                                    <ul class="dropdown-menu" role="menu">
                                        <li><a href="#">Action</a></li>
                                        <li><a href="#">Another action</a></li>
                                        <li><a href="#">Something else here</a></li>
                                        <li class="divider"></li>
                                        <li><a href="#">Separated link</a></li>
                                    </ul>
                                </div>
                                <div class="btn-group">
                                    <button type="button" class="btn btn-default btn-info dropdown-toggle" data-toggle="dropdown" aria-expanded="false">Micro-Area<span class="caret"></span></button>
                                    <ul class="dropdown-menu" role="menu">
                                        <li><a href="#">Action</a></li>
                                        <li><a href="#">Another action</a></li>
                                        <li><a href="#">Something else here</a></li>
                                        <li class="divider"></li>
                                        <li><a href="#">Separated link</a></li>
                                    </ul>
                                </div>
                                <div class="input-group" style="margin-top: 3%">
                                    <span class="input-group-addon" id="basic-addon1">
                                         <i class="fa fa-money" aria-hidden="true"></i></span>
                                    <input type="text" class="form-control" placeholder="200€" aria-describedby="basic-addon1" value="">
                                </div>
                                <div>
                                    <div class="radio radio-inline">
                                        <input type="radio" name="radio2" id="radio5" value="option1">
                                        <label for="radio5">Domanda</label>
                                    </div>
                                    <div class="radio radio-inline">
                                        <input type="radio" name="radio2" id="radio6" value="option2" checked>
                                        <label for="radio6">Offerta</label>
                                    </div>
                                </div>
                                <div>
                                    <button type="button" class="btn btn-danger" style="margin-right: 5%">Cancella</button>
                                    <button type="button" class="btn btn-success" data-toggle="modal" data-target="#myModal">Conferma</button>
                                    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                                    <h4 class="modal-title">Conferma Annuncio</h4>
                                                </div>
                                                <div class="modal-body">
                                                    <p>Il tuo annuncio prima di essere pubblicato sarà sottoposto a controlli da parte del moderatore. Vuoi continuare?</p>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-sm btn-default" data-dismiss="modal">Chiudi</button>
                                                    <button type="button" class="btn btn-sm btn-success">Conferma</button>
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



        <script type="text/javascript" src="<?php echo STYLE_DIR; ?>assets/js/vendor.js"></script>
        <script type="text/javascript" src="<?php echo STYLE_DIR; ?>assets/js/app.js"></script>
        <script type="text/javascript">
            function toggleMe(a){
                var e=document.getElementById(a);
                if(!e)return true;
                if(e.style.display=="none"){
                    e.style.display="block"
                }
                else{
                    e.style.display="none"
                }
                return true;
            }
        </script>
        <script type="text/javascript" src="http://viralpatel.net/blogs/demo/jquery/jquery.shorten.1.0.js"></script>
        <script>
            $(document).ready(function() {
                var showChar = 500;
                var ellipsestext = "...";
                var moretext = "altro";
                var lesstext = "..meno";
                $('.more').each(function() {
                    var content = $(this).html();

                    if(content.length > showChar) {

                        var c = content.substr(0, showChar);
                        var h = content.substr(showChar-1, content.length - showChar);

                        var html = c + '<span class="moreelipses">'+ellipsestext+'</span>&nbsp;<span class="morecontent"><span>' + h + '</span>&nbsp;&nbsp;<a href="" class="morelink">'+moretext+'</a></span>';

                        $(this).html(html);
                    }

                });

                $(".morelink").click(function(){
                    if($(this).hasClass("less")) {
                        $(this).removeClass("less");
                        $(this).html(moretext);
                    } else {
                        $(this).addClass("less");
                        $(this).html(lesstext);
                    }
                    $(this).parent().prev().toggle();
                    $(this).prev().toggle();
                    return false;
                });
            });
        </script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

</body>

</html>
