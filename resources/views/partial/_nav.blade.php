<nav class="navbar navbar-transparent navbar-color-on-scroll fixed-top navbar-expand-lg color-on-scroll=100" id="sectionsNav">
    <div class="container">
        <div class="navbar-translate">
            <a class="navbar-brand" href="#">
                Doctor Vai</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="sr-only">Toggle navigation</span>
                <span class="navbar-toggler-icon"></span>
                <span class="navbar-toggler-icon"></span>
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
        <div class="collapse navbar-collapse">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a href="{{url('/')}}" class="dropdown-toggle nav-link">
                        <i class="material-icons">apps</i> Home
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="{{url('medicine_information')}}">
                        <i class="material-icons">unarchive</i> Medicine Information
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="javascript:void(0)" onclick="scrollToDownload()">
                        <i class="material-icons">cloud_download</i> Hospital
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="https://www.creative-tim.com/product/material-kit-pro" target="_blank">
                        <i class="material-icons">unarchive</i> Medicine
                    </a>
                </li>

                <li class="nav-item" id="shopping-cart">
                        <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                        <span class="cart-font-size">(0)</span>
                </li>

                <li class="nav-item">
                    <a class="nav-link" rel="tooltip" title="" data-placement="bottom" href="https://twitter.com/" target="_blank" data-original-title="Follow us on Twitter" rel="nofollow">
                        <i class="fa fa-twitter"></i>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" rel="tooltip" title="" data-placement="bottom" href="https://www.facebook.com/" target="_blank" data-original-title="Like us on Facebook" rel="nofollow">
                        <i class="fa fa-facebook-square"></i>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" rel="tooltip" title="" data-placement="bottom" href="https://www.instagram.com/" target="_blank" data-original-title="Follow us on Instagram" rel="nofollow">
                        <i class="fa fa-instagram"></i>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{url('/login')}}" class="nav-link" rel="tooltip" title="" data-placement="bottom"   data-original-title="Please Login" rel="nofollow">
                        <i class="fa fa-sign-in" aria-hidden="true"></i>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{url('/register')}}"  class="nav-link" rel="tooltip" title="" data-placement="bottom"  data-original-title="Please Register" rel="nofollow">
                        <i class="fa fa-registered" aria-hidden="true"></i>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>

{{--This is cart items--}}
<div class="shoppingCartWrapper" id="shoppingCart"  style="display: none;">

</div>

