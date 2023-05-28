@section('content')

<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Admin | Store</title>
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
                    <a class="navbar-brand" href="{{ url('dashboard')}}">

                        <span><img src="{{ asset('backend/images/lo.png')}}" alt="homepage" class="dark-logo" /></span>
                    </a>
                </div>

                <div class="navbar-collapse">
                    <ul class="navbar-nav mr-auto mt-md-0">
                    </ul>




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

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
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
                <div class="col-lg-12">
                    <div class="card card-outline-primary">
                        <div class="card-header">
                            <h4 class="m-b-0 text-white">Admin Dashboard</h4>
                        </div>
                        <div class="row">

                            <div class="col-md-3">
                                <div class="card p-30">
                                    <div class="media">
                                        <div class="media-left meida media-middle">
                                            <span><i class="fa fa-home f-s-40 "></i></span>
                                        </div>
                                        <div class="media-body media-text-right">
                                            <!-- <h2>
               
                                            </h2> -->
                                            <p class="m-b-0"> Category</p>

                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-3">
                                <div class="card p-30">
                                    <div class="media">
                                        <div class="media-left meida media-middle">
                                            <span><i class="fas fa-tshirt f-s-40" aria-hidden="true"></i></span>
                                        </div>
                                        <div class="media-body media-text-right">
                                            <!-- <h2>
  
                                            </h2> -->
                                            <p class="m-b-0">Product</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-3">
                                <div class="card p-30">
                                    <div class="media">
                                        <div class="media-left meida media-middle">
                                            <span><i class="fa fa-users f-s-40" href="{{ url('user')}}"></i></span>
                                        </div>
                                        <div class="media-body media-text-right">
                                            <h2>

                                            </h2>
                                            <p class="m-b-0">Users</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-3">
                                <div class="card p-30">
                                    <div class="media">
                                        <div class="media-left meida media-middle">
                                            <span><i class="fa fa-shopping-cart f-s-40" aria-hidden="true"></i></span>
                                        </div>
                                        <div class="media-body media-text-right">
                                            <!-- <h2>
                                             
                                            </h2> -->
                                            <p class="m-b-0">Total Pesanan</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-4">
                                <div class="card p-30">
                                    <div class="media">
                                        <div class="media-left meida media-middle">
                                            <span><i class="fa fa-th-large f-s-40" aria-hidden="true"></i></span>
                                        </div>
                                        <div class="media-body media-text-right">
                                            <!-- <h2>
                                               
                                            </h2> -->
                                            <p class="m-b-0">Tag</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="card p-30">
                                    <div class="media">
                                        <div class="media-left meida media-middle">
                                            <span><i class="fa fa-spinner f-s-40" aria-hidden="true"></i></span>
                                        </div>
                                        <div class="media-body media-text-right">
                                            <!-- <h2>
                                </h2> -->
                                            <p class="m-b-0">Dalam Perjalanan</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="card p-30">
                                    <div class="media">
                                        <div class="media-left meida media-middle">
                                            <span><i class="fa fa-check f-s-40" aria-hidden="true"></i></span>
                                        </div>
                                        <div class="media-body media-text-right">
                                            <!-- <h2>
       
                                            </h2> -->
                                            <p class="m-b-0">Pesanan Selesai</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-4">
                                <div class="card p-30">
                                    <div class="media">
                                        <div class="media-left meida media-middle">
                                            <span><i class="fa fa-times f-s-40" aria-hidden="true"></i></span>
                                        </div>
                                        <div class="media-body media-text-right">
                                            <!-- <h2>
        
                                            </h2> -->
                                            <p class="m-b-0">Pesanan Batal</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="card p-30">
                                    <div class="media">
                                        <div class="media-left meida media-middle">
                                            <span><i class='fa-solid fa-rupiah-sign f-s-40'></i></span>
                                        </div>
                                        <div class="media-body media-text-right">
                                            <h2>

                                            </h2>
                                            <p class="m-b-0">Total Pendapatan</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
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