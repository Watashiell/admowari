@extends('backend/layouts.template')

@section('content')


<!DOCTYPE html>
<html lang="en">
<!-- <?php
include("../connection/connect.php");
error_reporting(0);
session_start();




if (isset($_POST['submit'])) {







    if (empty($_POST['d_name']) || empty($_POST['about']) || $_POST['price'] == '' || $_POST['res_name'] == '') {
        $error = '<div class="alert alert-danger alert-dismissible fade show">
																<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
																<strong>Semua Kolom Harus Diisi!</strong>
															</div>';



    } else {

        $fname = $_FILES['file']['name'];
        $temp = $_FILES['file']['tmp_name'];
        $fsize = $_FILES['file']['size'];
        $extension = explode('.', $fname);
        $extension = strtolower(end($extension));
        $fnew = uniqid() . '.' . $extension;

        $store = "Res_img/dishes/" . basename($fnew);

        if ($extension == 'jpg' || $extension == 'png' || $extension == 'gif') {
            if ($fsize >= 1000000) {


                $error = '<div class="alert alert-danger alert-dismissible fade show">
																<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
																<strong>Max Image Size is 1024kb!</strong> Try different Image.
															</div>';

            } else {




                $sql = "INSERT INTO dishes(rs_id,title,slogan,price,img) VALUE('" . $_POST['res_name'] . "','" . $_POST['d_name'] . "','" . $_POST['about'] . "','" . $_POST['price'] . "','" . $fnew . "')"; // store the submited data ino the database :images
                mysqli_query($db, $sql);
                move_uploaded_file($temp, $store);

                $success = '<div class="alert alert-success alert-dismissible fade show">
																<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
																 Menu Baru Telah Ditambahkan.
															</div>';


            }
        } elseif ($extension == '') {
            $error = '<div class="alert alert-danger alert-dismissible fade show">
																<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
																<strong>select image</strong>
															</div>';
        } else {

            $error = '<div class="alert alert-danger alert-dismissible fade show">
																<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
																<strong>invalid extension!</strong>png, jpg, Gif are accepted.
															</div>';


        }


    }







}








?> -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" type="image/png" sizes="16x16" href="images/favicon.png">
    <title>Add Product</title>
    <link href="{{ asset('backend/css/lib/bootstrap/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{ asset('backend/css/helper.css')}}" rel="stylesheet">
    <link href="{{ asset('backend/css/style.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
        integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body class="fix-header">

    <div class="preloader">
        <svg class="circular" viewBox="25 25 50 50">
            <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" />
        </svg>
    </div>

    <div id="main-wrapper">

        <div class="header">
            <nav class="navbar top-navbar navbar-expand-md navbar-light">
                <div class="navbar-header">
                    <a class="navbar-brand" href="dashboard.html">

                        <span><img src="{{ asset('backend/images/lo.png')}}" alt="homepage" class="dark-logo" /></span>
                    </a>
                </div>
                <div class="navbar-collapse">

                    <ul class="navbar-nav mr-auto mt-md-0">




                    </ul>

                    <ul class="navbar-nav my-lg-0">



                        <li class="nav-item dropdown">

                            <div class="dropdown-menu dropdown-menu-right mailbox animated zoomIn">
                                <ul>
                                    <li>
                                        <div class="drop-title">Notifications</div>
                                    </li>

                                    <li>
                                        <a class="nav-link text-center" href="javascript:void(0);"> <strong>Check all
                                                notifications</strong> <i class="fa fa-angle-right"></i> </a>
                                    </li>
                                </ul>
                            </div>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-muted  " href="#" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false"><img
                                    src="{{ asset('backend/images/bookingSystem/user-icn.png')}}" alt="user"
                                    class="profile-pic" /></a>
                            <div class="dropdown-menu dropdown-menu-right animated zoomIn">
                                <ul class="dropdown-user">
                                    <li><a href="logout.php"><i class="fa fa-power-off"></i> Logout</a></li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>

        <div class="left-sidebar">

            <div class="scroll-sidebar">

                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        <li class="nav-devider"></li>
                        <li class="nav-label">Home</li>
                        <li> <a href="dashboard.html"><i class="fa fa-tachometer"></i><span>Dashboard</span></a></li>
                        <li class="nav-label">Log</li>
                        <li> <a href="users.html"> <span><i class="fa fa-user f-s-20 "></i></span><span>Users</span></a>
                        </li>
                        <li> <a class="has-arrow  " href="#" aria-expanded="false"><i
                                    class="fa fa-archive f-s-20 color-warning"></i><span
                                    class="hide-menu">Category</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="all_category.html">All Category</a></li>
                                <li><a href="add_tag.html">Add Tag</a></li>
                                <li><a href="add_category.html">Add Category</a></li>

                            </ul>
                        </li>
                        <li> <a class="has-arrow  " href="#" aria-expanded="false"><i class="fa fa-cutlery"
                                    aria-hidden="true"></i><span class="hide-menu">Product</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="all_product.html">All Product</a></li>
                                <li><a href="add_product.html">Add Product</a></li>


                            </ul>
                        </li>
                        <li> <a href="all_orders.html"><i class="fa fa-shopping-cart"
                                    aria-hidden="true"></i><span>Orders</span></a></li>

                    </ul>
                </nav>

            </div>

        </div>

        <div class="page-wrapper">



            <div class="container-fluid">
                <!-- Start Page Content -->


                <!-- <?php echo $error;
                echo $success; ?> -->




                <div class="col-lg-12">
                    <div class="card card-outline-primary">
                        <div class="card-header">
                            <h4 class="m-b-0 text-white">Add Product</h4>
                        </div>
                        <div class="card-body">
                            <form action='' method='post' enctype="multipart/form-data">
                                <div class="form-body">

                                    <hr>
                                    <div class="row p-t-20">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="control-label">Nama Product</label>
                                                <input type="text" name="d_name" class="form-control">
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group has-danger">
                                                <label class="control-label">Deskripsi</label>
                                                <input type="text" name="about"
                                                    class="form-control form-control-danger">
                                            </div>
                                        </div>

                                    </div>

                                    <div class="row p-t-20">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="control-label">Harga </label>
                                                <input type="text" name="price" class="form-control" placeholder="Rp">
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group has-danger">
                                                <label class="control-label">Foto Produk</label>
                                                <input type="file" name="file" id="lastName"
                                                    class="form-control form-control-danger" placeholder="">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group has-danger">
                                            <label class="control-label">Size Produk</label>
                                            <input type="file" name="file" id="lastName"
                                                class="form-control form-control-danger" placeholder="">
                                        </div>
                                    </div>
                                </div>




                                <div class="row">







                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="control-label">Kategori</label>
                                            <select name="res_name" class="form-control custom-select"
                                                data-placeholder="Choose a Category" tabindex="1">
                                                <option>--Kategori--</option>
                                                <!-- <?php $ssql = "select * from restaurant";
                                                    $res = mysqli_query($db, $ssql);
                                                    while ($row = mysqli_fetch_array($res)) {
                                                        echo ' <option value="' . $row['rs_id'] . '">' . $row['title'] . '</option>';
                                                        ;
                                                    }

                                                    ?> -->
                                            </select>
                                        </div>
                                    </div>



                                </div>

                        </div>
                    </div>
                    <div class="form-actions">
                        <input type="submit" name="submit" class="btn btn-primary" value="Save">
                        <a href="add_menu.php" class="btn btn-inverse">Cancel</a>
                    </div>
                    </form>
                </div>

            </div>
        </div>
        <footer class="footer"> © 2023 - Owari CLoth </footer>
    </div>
    </div>
    </div>
    </div>


    <script src="{{ asset('backend/js/lib/jquery/jquery.min.js')}}"></script>
    <script src="{{ asset('backend/js/lib/bootstrap/js/popper.min.js')}}"></script>
    <script src="{{ asset('backend/js/lib/bootstrap/js/bootstrap.min.js')}}"></script>
    <script src="{{ asset('backend/js/jquery.slimscroll.js')}}"></script>
    <script src="{ asset('backend/js/sidebarmenu.js')}}"></script>
    <script src="{{ asset('backend/js/lib/sticky-kit-master/dist/sticky-kit.min.js')}}"></script>
    <script src="{{ asset('backend/js/custom.min.js')}}"></script>

</body>

</html>