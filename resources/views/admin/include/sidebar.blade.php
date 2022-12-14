<nav class="navbar-default navbar-static-side" role="navigation">
    <div class="sidebar-collapse">
        <ul class="nav metismenu" id="side-menu">
            <li class="nav-header">
                <div class="dropdown profile-element"> <span>
                        <img alt="image" class="img-circle" src="{{asset('assets/admin/img/profile_small.jpg')}}" />
                         </span>
                    <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                        <span class="clear"> <span class="block m-t-xs"> <strong class="font-bold">{{ Auth::user()->name }}</strong>
                         </span> <span class="text-muted text-xs block">Art Director <b class="caret"></b></span> </span> </a>
                    <ul class="dropdown-menu animated fadeInRight m-t-xs">
                        <li><a href="profile.html">Profile</a></li>
                        <li><a href="contacts.html">Contacts</a></li>
                        <li><a href="mailbox.html">Mailbox</a></li>
                        <li class="divider"></li>
                        <li><a href="{{ route('logout') }}">Logout</a></li>
                    </ul>
                </div>
                <div class="logo-element">
                    IN+
                </div>
            </li>
            <li>
                <a href="/dashboard"><i class="fa fa-th-large"></i> <span class="nav-label">Dashboard</span> </a>

            </li>
            <li>
                <a href="{{URL::to('profile') }}"><i class="fa fa-user-circle-o"></i> <span class="nav-label">Profile</span> </a>

            </li>
            <li>
                <a href="{{ URL::to('donar_details')}}"><i class="fa fa-diamond"></i> <span class="nav-label">Donar Details</span></a>
            </li>
            <li>
                <a href="{{ URL::to('contact-form')}}"><i class="fa fa-edit"></i> <span class="nav-label">Contact Us</span></a>
            </li>
            <li>
                <a href="#"><i class="fa fa-users"></i> <span class="nav-label">Team</span><span class="label label-info pull-right">NEW</span></a>
                <ul class="nav nav-second-level collapse">
                    <li><a href="toastr_notifications.html">Notification</a></li>

                </ul>
            </li>
            <li>
                <a href="#"><i class="fa fa-pencil"></i> <span class="nav-label">Blog</span><span class="fa arrow"></span></a>
                <ul class="nav nav-second-level collapse">
                    <li><a href="typography.html">Typography</a></li>
                </ul>
            </li>

            <li>
                <a href="grid_options.html"><i class="fa fa-laptop"></i> <span class="nav-label">Notifications</span></a>
            </li>
            <li>
                <a href="#"><i class="fa fa-table"></i> <span class="nav-label">Volunteer</span><span class="fa arrow"></span></a>
                <ul class="nav nav-second-level collapse">
                    <li><a href="jq_grid.html">jqGrid</a></li>
                </ul>
            </li>
            <li>
                <a href="#"><i class="fa fa-shopping-cart"></i> <span class="nav-label">E-commerce</span><span class="fa arrow"></span></a>
                <ul class="nav nav-second-level collapse">
                    <li><a href="ecommerce_products_grid.html">Products grid</a></li>
                    <li><a href="ecommerce_product_list.html">Products list</a></li>
                    <li><a href="ecommerce_product.html">Product edit</a></li>
                    <li><a href="ecommerce_product_detail.html">Product detail</a></li>
                    <li><a href="ecommerce-cart.html">Cart</a></li>
                    <li><a href="ecommerce-orders.html">Orders</a></li>
                    <li><a href="ecommerce_payments.html">Credit Card form</a></li>
                </ul>
            </li>
            <li>
                <a href="#"><i class="fa fa-picture-o"></i> <span class="nav-label">Gallery</span><span class="fa arrow"></span></a>
                <ul class="nav nav-second-level collapse">
                    <li><a href="basic_gallery.html">Lightbox Gallery</a></li>
                    <li><a href="slick_carousel.html">Slick Carousel</a></li>
                    <li><a href="carousel.html">Bootstrap Carousel</a></li>

                </ul>
            </li>
        </ul>

    </div>
</nav>
