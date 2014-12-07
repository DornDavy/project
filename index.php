<?php
    include 'include/config.php';
    include 'include/libraries.php';
    include 'include/resource.php';
?>
<html ng-app="">
<head>
    <?php
    include "inc/css.php";
    ?>
</head>
<body>




    <div class="container">
        <div class="col-lg-12">
            <img src="img/smart.gif" alt="Smart" class="img-responsive"/>
        </div>
    </div>
    <div class="container head">

        <div class="header">
        <nav class="navbar navbar-default" role="navigation">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#example-navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>
            <div class="collapse navbar-collapse" id="example-navbar-collapse">
                <ul class="nav navbar-nav">
                    <li ><a href="#"><span class="glyphicon glyphicon-home"></span>  Home</a></li>
                    <li ><a href="#"><span class="glyphicon glyphicon-phone"></span> Phones</a></li>
                    <li><a href="#"><span class="glyphicon glyphicon-phone"></span>  Conputer</a></li>
                    <li><a href="#">Lands And Houses</a></li>
                    <li><a href="#">Products</a></li>
                    <li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown"> Java <b class="caret"></b> </a>
                        <ul class="dropdown-menu">
                            <li><a href="#" >jmeter</a></li>


                        </ul>
                    </li>

                </ul>
            </div>
        </nav>
     </div>
       <div class="row">
			
            <div class="col-md-3" >

               <div class="panel panel-default" style="margin-top: 10px;">
                   <div class="panel-heading"><span class="glyphicon glyphicon-align-justify"></span> Categories</div>
                   <div class="panel panel-body">
                       <div style="list-style: none;color: #204d74">
                           <li><span class="glyphicon glyphicon-leaf"></span><a href="#">Leaf</li>

                       </div>
                   </div>

               </div>
                <div class="panel panel-default" style="margin-top: 10px;">
                    <div class="panel-heading">Panel Heading</div>
                    <div class="panel panel-body">
                        <div style="list-style: none">
                            <li><span class="glyphicon glyphicon-circle-arrow-right"></span><a href="#">   Computers Computers</a></li>
                            <li><span class="glyphicon glyphicon-circle-arrow-right"></span><a href="#">   Computers Computers</a></li>
                            <li><span class="glyphicon glyphicon-circle-arrow-right"></span><a href="#">   Computers Computers</a></li>

                        </div>
                    </div>

                </div>
                <div class="panel panel-default" style="margin-top: 10px;">
                    <div class="panel-heading">Panel Heading</div>
                    <div class="panel panel-body">
                        <div style="list-style: none">
                            <li><span class="glyphicon glyphicon-circle-arrow-right"></span><a href="#">   Computers Computers</a></li>
                            <li><span class="glyphicon glyphicon-circle-arrow-right"></span><a href="#">   Computers Computers</a></li>
                            <li><span class="glyphicon glyphicon-circle-arrow-right"></span><a href="#">   Computers Computers</a></li>

                        </div>
                    </div>

                </div>
           </div>

           <div class="col-lg-6 alert alert-info" style="margin-top: 10px;">
                <div class="row" style="margin-left: 0px;">
                    <div class="col-lg-4">


                        <form id="e3">
                            <label for="search">Search By *:</label>
                            <input type="text" class="form-control" id="search" placeholder="Search by" ng-model="search"/>

                        </form>

                    </div>
                    <div class="col-lg-4">
                        <label for="Categories">Categories*:</label>
                        <select  class="form-control select" id="e1" data-placeholder="Select Category" data-rel="chosen">
                            <option value=""><?php
                                $record = new Resource();
                                $record->lookup('location','name')
                                ?>
                        </select>

                    </div>
                    <div class="col-lg-4">
                        <label for="location">Location*:</label>
                        <select name="" id="e2" class="form-control select" data-placeholder="Select Location" data-rel="chosen" ng-model="location">
                            <option value=""></option>
                            <?php
                                lookup('location','name')

                            ?>
                        </select>
                    </div>
                </div>
            <div ng-controller="data">
                <table class="table table-responsive table-responsive">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr ng-repeat="location in locations | filter:search | filter:location">
                            <td>{{ location.id}}</td>
                            <td>{{ location.name}}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
           </div>
           <div class="col-md-3" >
               <div class="panel panel-default" style="margin-top: 10px;">
                   <div class="panel-heading">Panel Heading</div>
                   <div class="panel panel-body">
                       <div style="list-style: none">
                           <img src="img/im.png" alt="Image" class="img-responsive img-thumbnail"/>
                       </div>
                   </div>
               </div>
               <div class="panel panel-default" style="margin-top: 10px;">
                   <div class="panel-heading">Panel Heading</div>
                   <div class="panel panel-body">
                       <div style="list-style: none">
                           <li><span class="glyphicon glyphicon-leaf"></span><a href="#">   Computers Computers</a></li>
                           <li><span class="glyphicon glyphicon-leaf"></span><a href="#">   Computers Computers</a></li>
                           <li><span class="glyphicon glyphicon-leaf"></span><a href="#">   Computers Computers</a></li>

                       </div>
                   </div>
               </div>
               <div class="panel panel-default" style="margin-top: 10px;">
                   <div class="panel-heading">Panel Heading</div>
                   <div class="panel panel-body">
                       <div style="list-style: none">
                           <li><span class="glyphicon glyphicon-leaf"></span><a href="#">   Computers Computers</a></li>
                           <li><span class="glyphicon glyphicon-leaf"></span><a href="#">   Computers Computers</a></li>
                           <li><span class="glyphicon glyphicon-leaf"></span><a href="#">   Computers Computers</a></li>

                       </div>
                   </div>
               </div>
           </div>
       </div>
        <footer class="modal-footer">
            <h4 style="text-align: center">&copy;Copy right 2014</h4>

        </footer>
</div>
<?php
    include 'inc/js.php'

?>
    <script>
        function data($scope,$http) {
            $http.get("inc/location.php")
                .success(function (data) {
                     $scope.locations = data;
            }).error('Error');
        }
    </script>
</body>
</html>