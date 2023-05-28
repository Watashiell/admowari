@extends('backend/layouts.template')

@section('content')

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" type="image/png" sizes="16x16" href="images/favicon.png">
    <title>owari | Category</title>
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


                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                    style="display: none;">
                                    @csrf
                                </form>
                            </div>

                        </li>
                    </ul>
                </div>
            </nav>
        </div>
        @include('backend/layouts.sidebar')

        <div class="page-wrapper">



            <div class="container-fluid">

                <div class="row">
                    <div class="col-12">






                        <div class="col-lg-12">
                            <div class="card card-outline-primary">
                                <div class="card-header">
                                    <h4 class="m-b-0 text-white">All Category</h4>
                                </div>

                                <div class="table-responsive m-t-40">
                                    <table id="example23"
                                        class="display nowrap table table-hover table-striped table-bordered"
                                        cellspacing="0" width="100%">
                                        <thead class="thead-dark">
                                            <tr>
                                                <th>Category</th>
                                                <th>Nama</th>
                                                <th>Deskripsi</th>
                                                <th>Foto Produk</th>
                                                <th>Tanggal Dibuat</th>
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

    <footer class="footer"> © 2023 - Owri Cloth </footer>

    </div>

    </div>

    <script src="{{ asset('backend/js/lib/jquery/jquery.min.js')}}"></script>
    <script src="{{ asset('backend/js/lib/bootstrap/js/popper.min.js')}}"></script>
    <script src="{{ asset('backend/js/lib/bootstrap/js/bootstrap.min.js')}}"></script>
    <script src="{{ asset('backend/js/jquery.slimscroll.js')}}"></script>
    <script src="{ asset('backend/js/sidebarmenu.js')}}"></script>
    <script src="{{ asset('backend/js/lib/sticky-kit-master/dist/sticky-kit.min.js')}}"></script>
    <script src="{{ asset('backend/js/custom.min.js')}}"></script>

    <script src="{{ asset('backend/js/lib/datatables/datatables.min.js')}}"></script>
    <script src="{{ asset('backend/js/lib/datatables/cdn.datatables.net/buttons/1.2.2/js/dataTables.buttons.min.js')}}">
    </script>
    <script src="{{ asset('backend/js/lib/datatables/cdn.datatables.net/buttons/1.2.2/js/buttons.flash.min.js')}}">
    </script>
    <script src="{{ asset('backend/js/lib/datatables/cdnjs.cloudflare.com/ajax/libs/jszip/2.5.0/jszip.min.js')}}">
    </script>
    <script src="{{ asset('backend/js/lib/datatables/cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/pdfmake.min.js')}}">
    </script>
    <script src="{{ asset('backend/js/lib/datatables/cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/vfs_fonts.js')}}">
    </script>
    <script src="{{ asset('backend/js/lib/datatables/cdn.datatables.net/buttons/1.2.2/js/buttons.html5.min.js')}}">
    </script>
    <script src="{{ asset('backend/js/lib/datatables/datatables-init.js')}}"></script>
</body>

</html>