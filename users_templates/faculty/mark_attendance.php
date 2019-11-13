<?php
session_start();
if (isset($_SESSION)){
    if ($_SESSION['type_id'] != 2){
        echo "<script type=\"text/javascript\">location.href = '../../';</script>";
    }
    //        echo "vaild";
//    header("Location : ../../");
}
else
    echo "<script type=\"text/javascript\">location.href = '../../';</script>";
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Mark Attendance</title>

    <!-- Custom fonts for this template-->
    <link href="../../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="../../css/sb-admin-2.min.css" rel="stylesheet">

    <!-- Bootstrap core JavaScript-->
    <script src="../../vendor/jquery/jquery.min.js"></script>
    <script src="../../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="../../vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="../../js/sb-admin-2.min.js"></script>
    <script src="../../js/faculty/pageloder.js"></script>
    <script src="../../js/angular.min.js"></script>
    <script src="../../js/faculty/marks_attendance.js"></script>

</head>

<body id="page-top" ng-app="add_attendance" ng-controller="add_attendance">

<!-- Page Wrapper -->
<div id="wrapper">

    <!-- Sidebar -->
    <div id="sidebar"></div>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

        <!-- Main Content -->
        <div id="content">

            <!-- Topbar -->
            <div id="navbar"></div>
            <!-- End of Topbar -->

            <!-- Begin Page Content -->
            <div class="container-fluid">

                <!-- Page Heading -->
                <h1 class="h3 mb-4 text-gray-800">Mark Attendance</h1>

                <div class="col-8" ng-show="studentListFetched">
                    <div class="alert alert-dark"> Deselect Only the Absentees Roll Number</div>
                        <div class="alert alert-success alert-dismissible" ng-show="success">
                            Attendance entered Succesfully
                        </div>
                        <div class="alert alert-danger alert-dismissible" ng-show="unsuccess" ng-init="unsuccess = 0">{{errorMsg}}</div>

                    <hr>
                    <form class="user" name="add_student" ng-submit="addAttendance()">
                        <div class="form-group row">
                            <div class="col-sm-6 mb-3 mb-sm-0">
                                <select class="form-control" ng-model="list.selected_subject" ng-change="fetch_students()" required>
                                    <option ng-repeat="sub in list.faculty_details" ng-value="sub">{{sub.name}}</option>
                                </select>
                            </div>
                            <div class="col-sm-6 mb-3 mb-sm-0">
                                <input type="date" class="form-control " ng-model="list.date" required>
                            </div>

                        </div>
                        <table class="table table-bordered">
                            <tr>
                                <th>Roll No:</th>
                                <th>Name :</th>
                                <th>Marks :</th>
                            </tr>
                            <tr ng-repeat="stu in list.student" ng->
                                <td>{{stu.rollno}}</td>
                                <td>{{stu.fname | uppercase}} {{stu.lname | uppercase}}</td>
                                <td>
                                        <input type="checkbox" class="form-control form-control-user" ng-model="list.student[$index].att" ng-init="list.student[$index].att = true" checked>
                                </td>
                            </tr>
                        </table>
                        <button class="btn btn-success btn-user" style="float: right;" type="submit" ng-disabled="!list.selected_subject">
                            Add attendence
                        </button>
                    </form>

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- End of Main Content -->


    </div>
    <!-- End of Content Wrapper -->

</div>
<!-- End of Page Wrapper -->

<!-- Scroll to Top Button-->
<span id="scrollTop"></span>

<!-- Logout Modal-->
<span id="logoutModal"></span>



</body>

</html>
