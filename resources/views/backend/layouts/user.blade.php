<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>User | Watcher</title>
    <link href="{{ asset('backend/css/lib/bootstrap/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{ asset('backend/css/helper.css')}}" rel="stylesheet">
    <link href="{{ asset('backend/css/style.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
        integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body class="fix-header fix-sidebar">

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
                        <li class="nav-label">Login</li>
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
                        <li> <a class="has-arrow  " href="#" aria-expanded="false"><i class="fas fa-tshirt"
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
                <div class="row">
                    <div class="col-12">

                        <div class="col-lg-12">
                            <div class="card card-outline-primary">
                                <div class="card-header">
                                    <h4 class="m-b-0 text-white">Daftar Pengguna</h4>
                                </div>

                                <div class="table-responsive m-t-40">
                                    <table id="myTable" class="table table-bordered table-striped table-hover">
                                        <thead class="thead-dark">
                                            <tr>
                                                <th>Username</th>
                                                <th>Email</th>
                                                <th>No.Telp</th>
                                                <th>Alamat</th>
                                                <th>Tanggal Buat</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>



                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

    </div>
    <footer class="footer"> © 2023 - Owari Cloth</footer>

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