<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>Demo | sTimeline</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
                
        
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
        <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">

        <link rel="stylesheet" href="css/sTimeline.css" type="text/css" media="screen"/>
        <link rel="stylesheet" href="css/style.css" type="text/css" media="screen"/>
        <!-- Latest compiled and minified JavaScript -->
        <script src="//code.jquery.com/jquery-1.11.2.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
        
        <script src="js/sTimeline.bootstrap.js" type="text/javascript"></script>    
    </head>
    <body>
        <div id="wrapper">

        <!-- Page Content -->
        <div id="page-content-wrapper">
                <div class="row">
                    <div id="container" class="col-lg-12">                        
                        <h1>sTimeline - Demo</h1>
                        <hr />
                        <div id="timeline-controls">
                            <div class="btn-group" role="group">
                                <button type="button" class="btn btn-success" data-toggle="modal" data-target="#newEvent-Modal"><span class="glyphicon glyphicon-plus"></span> Add Event</button>
                                
                                <button type="button" class="btn btn-danger" onclick="sTimeline.removeLastEvent()"><span class="glyphicon glyphicon-minus"></span> Remove Event</button>

                                <div class="btn-group" role="group">
                                    <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                        Functions
                                        <span class="caret"></span>
                                    </button>
                                    <ul class="dropdown-menu" role="menu">
                                        <li><a onclick="sTimeline.autoAlign()">Auto Align Events</a></li>
                                        <li><a onclick="sTimeline.sortById()">Sort by ID</a></li>
                                        <li><a onclick="sTimeline.sortByTime()">Sort by Date</a></li>
                                        <li><a onclick="sTimeline.sortByIcon()">Sort by Icons</a></li>
                                        <li><a onclick="sTimeline.sortByCategory()">Sort by Category</a></li>
                                        <li><a onclick="sTimeline.reverse()">Ascending / Descending</a></li>
                                    </ul>
                                </div>
                                <div class="btn-group" role="group">
                                    <button type="button" class="btn btn-warning dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                        JSON
                                        <span class="caret"></span>
                                    </button>
                                    <ul class="dropdown-menu" role="menu">
                                        <li><a id="downloadJson" data-toggle="modal" data-target="#export-Modal">Export JSON</a></li>
                                        <li><a data-toggle="modal" data-target="#import-Modal">Import JSON</a></li>
                                    </ul>
                                </div>
                            </div>                        
                        </div>
                        <div id="timeline-wrapper"></div>
                    </div>
                </div>
        </div>
        <!-- /#page-content-wrapper -->

    </div>
    <!-- /#wrapper -->
    
    
    <?php 
        include './modals.php';
    ?>
    
    <!-- Menu Toggle Script -->
    <script>
        $("#menu-toggle").click(function(e) {
            e.preventDefault();
            $("#wrapper").toggleClass("toggled");
        });
    </script>
    </body>
</html>
