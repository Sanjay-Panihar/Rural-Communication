<div  class="header-top">
    <div class="container">
        <div class="row col-det">
            <div class="col-lg-6 d-none d-lg-block">
                <ul class="ulleft">
                    <li>
                        <i class="far fa-envelope"></i>
                      <a href="mailto:support@ruralcommunication.org">support@ruralcommunication.org </a>
                        <span>|</span></li>
                    <li>
                        <i class="fas fa-phone-volume"></i><a href="tel:011-26972351">011-26972351</a>
                      </li>
                </ul>
            </div>
            <div class="col-lg-3 col-md-6 folouws">

                <ul class="ulright">
                   <li> <small>Folow Us </small>:</li>
                    <li>
                        <i class="fab fa-facebook-square"></i>
                    </li>
                    <li>
                        <i class="fab fa-twitter-square"></i>
                    </li>
                    <li>
                        <i class="fab fa-instagram"></i>
                    </li>
                    <li>
                        <i class="fab fa-linkedin"></i>
                    </li>
                </ul>
            </div>
            <div class="col-lg-3 d-none d-md-block col-md-6 btn-bhed">
                <button class="btn btn-sm btn btn-outline-success">Join Us</button>
                <button class="btn btn-sm btn-default {{ Request::segment(1) == 'donate' ? 'active': '' }}"><a href="/donate">Donate</a></button>
            </div>
        </div>
    </div>
</div>
