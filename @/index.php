<?php
include "../include/css.php";
?>
    <div class="container head">
       <h1>Banner</h1>
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

            <div class="col-lg-3" >

               <div class="panel panel-default" style="margin-top: 10px;">
                   <div class="panel-heading"><span class="glyphicon glyphicon-align-justify"></span> Categories</div>
                   <div class="panel panel-body">
                       <div style="list-style: none;color: #204d74">
                           <li><span class="glyphicon glyphicon-fire"></span><a href="#">   Computers Computers</a></li>
                           <li><span class="glyphicon glyphicon-circle-arrow-right"></span><a href="#">   Computers Computers</a></li>
                           <li><span class="glyphicon glyphicon-circle-arrow-right"></span><a href="#">   Computers Computers</a></li>

                       </div>
                   </div>

               </div>

           </div>

           <div class="col-lg-9 " style="margin-top: 10px; width: 860px;">
               <div class="row" style="margin-left: 0px;" ng-controller="customerCtrl">
                   <a href="create.php" class="btn btn-drop btn-success" id="loginButton">Create</a>
                    <table class="table table-responsive table-responsive" id="data">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Kh Name</th>
                                <th>En Name</th>
                                <th>Sex</th>
                                <th>Date of Birht</th>
                                <th>Place of Birht</th>
                                <th>Address</th>
                                <th>Email</th>
                                <th>Phone</th>
                                <th>Fax</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody >
                            <tr ng-repeat="customer in customers">
                                <td>{{ customer.id}}</td>
                                <td>{{ customer.kh_name}}</td>
                                <td>{{ customer.en_name}}</td>
                                <td>{{ customer.sex}}</td>
                                <td>{{ customer.dob}}</td>
                                <td>{{ customer.pob}}</td>
                                <td>{{ customer.address}}</td>
                                <td>{{ customer.email}}</td>
                                <td>{{ customer.phone}}</td>
                                <td>{{ customer.fax}}</td>
                                <td>
                                    <a href="delete.php?id={{ customer.id}}" class="btn-group btn-group-xs btn btn-sm btn-danger">Delete</a>
                                </td>

                            </tr>

                        </tbody>
                        <tfooter>
                            <tr >
<!--
                                <td  class="alert-danger">Total</td>
                                <td class="alert-danger">10</td>-->
                            </tr>
                        </tfooter>
                    </table>
                   <form action="">
                       <input type="text"/>
                   </form>

               </div>
           </div>

       </div>
        <footer class="header">
            <h4 style="text-align: center">&copy;Copy right 2014</h4>

        </footer>
</div>

<?php
    include('../include/js.php')
?>
<script>
    function customerCtrl($scope,$http) {
        $http.get('customer/customer.php')
            .success(function (data) {
                $scope.customers = data;
            }).error('Error Data');

    }


    $(document).ready(function() {
        $('#loginForm').bootstrapValidator({
            feedbackIcons: {
                valid: 'glyphicon glyphicon-ok',
                invalid: 'glyphicon glyphicon-remove',
                validating: 'glyphicon glyphicon-refresh'
            },
            fields: {
                username: {
                    validators: {
                        notEmpty: {
                            message: 'The username is required'
                        }
                    }
                },
                password: {
                    validators: {
                        notEmpty: {
                            message: 'The password is required'
                        }
                    }
                }
            }
        });


</script>
</body>
</html>