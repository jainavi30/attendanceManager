<?php
session_start();
if (isset($_SESSION)){
    if ($_SESSION['type_id'] != 1){
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

    <title>Add Faculty Subject</title>

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
    <script src="../../js/admin/pageLoader.js"></script>
    <script src="../../js/angular.min.js"></script>
    <script src="../../js/admin/add_faculty_subject.js"></script>

</head>

<body id="page-top" ng-app="add_faculty_subject" ng-controller="add_faculty_subject">

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
                <h1 class="h3 mb-4 text-gray-800">Add Faculty Subject</h1>

                <!--FROM TO ENTER THE STUDENT DATA-->
                <div class="col-md-8">
                    <form class="user" name="add_faculty" ng-submit="addFacultySubject()" STYLE="padding-bottom: 70px;">
                        <div class="form-group row">
                            <div class="col-sm-6 mb-3 mb-sm-0">
                                <select class="form-control" ng-model="faculty_subject.faculty_id" required>
                                    <option ng-repeat="faculty in details.faculty" ng-value="faculty.id">{{faculty.regno}} - {{faculty.fname | uppercase}} {{faculty.lname | uppercase}}</option>
                                </select>
                            </div>
                            <div class="col-sm-6">
                                <select class="form-control" ng-model="faculty_subject.subject_id" required>
                                    <option ng-repeat="subject in details.subject" ng-value="subject.id">{{subject.name}} - {{subject.branch_name}}</option>
                                </select>
                            </div>
                        </div>
                        <button class="btn btn-success btn-user" style="float: right;" type="submit">
                            Add Subject
                        </button>
                    </form>

                </div>
            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- End of Main Content -->

        <!-- Footer -->
        <div id="footer"></div>
        <!-- End of Footer -->

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
