<aside>


    <div class="left-sidebar">

        <div class="scroll-sidebar">

            <nav class="sidebar-nav">
                <ul id="sidebarnav">
                    <li class="nav-devider"></li>
                    <li class="nav-label">Home</li>
                    <li> <a href="{{ url ('dashboard')}}"><i class="fa fa-tachometer"></i><span>Dashboard</span></a>
                    </li>
                    <li class="nav-label">Login</li>
                    <li> <a href="{{ url ('user')}}"> <span><i
                                    class="fa fa-user f-s-20 "></i></span><span>Users</span></a>
                    </li>
                    <li> <a class="has-arrow " aria-expanded="false"><i
                                class="fa fa-archive f-s-20 color-warning"></i><span
                                class="hide-menu">Category</span></a>
                        <ul aria-expanded="false" class="show">
                            <li><a href="{{ url ('allCat')}}">All Category</a></li>

                            <li><a href="{{ url ('addCat')}}">Add Category</a></li>

                        </ul>
                    </li>
                    <li> <a class="has-arrow " aria-expanded="false"><i class="fas fa-tshirt"
                                aria-hidden="true"></i><span class="hide-menu">Product</span></a>
                        <ul aria-expanded="false" class="show">
                            <li><a href="{{ url ('allPro')}}"> All Product</a></li>
                            <li><a href="{{ url ('addPro')}}">Add Product</a></li>


                        </ul>
                    </li>


                </ul>
            </nav>

        </div>

    </div>

</aside>