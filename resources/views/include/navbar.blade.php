<div id="menu-jk" class="header-bottom">
    <div class="container">
        <div class="row nav-row">
            <div class="col-lg-3 col-md-12 logo">
                <a href="/">
                    <img src="assets/images/logo.jpg" alt="" height="50px">
                    <a data-toggle="collapse" data-target="#menu" href="#menu"><i class="fas d-block d-lg-none  small-menu fa-bars"></i></a>
                </a>

            </div>
            <div id="menu" class="col-lg-9 col-md-12 d-none d-lg-block nav-col">
                        <ul class="navbad">
                            <li class="nav-item {{ Request::segment(1) == '/' ? 'active': '' }}">
                                <a class="nav-link" href="/">Home
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link {{ Request::segment(1) == 'aboutUs' ? 'active': '' }}" href="/aboutUs">About Us</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link {{ Request::segment(1) == 'services' ? 'active': '' }}" href="/services">Services</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link {{ Request::segment(1) == 'gallery' ? 'active': '' }}" href="/gallery">Gallery</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link {{ Request::segment(1) == 'blog' ? 'active': '' }}" href="/blog">Blog</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link {{ Request::segment(1) == 'contact_us' ? 'active': '' }}" href="/contact_us">Contact US</a>
                            </li>
                        </ul>
                  </div>
              </div>
          </div>
      </div>
