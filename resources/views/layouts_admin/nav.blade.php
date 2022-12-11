<!-- Main navbar -->
<style>
    .shimmer {
        color: grey;
        display: inline-block;
        -webkit-mask: linear-gradient(-60deg, #1d1963 30%, #00fc, #1d1963 70%) right/200% 100%;
        background-repeat: no-repeat;
        animation: shimmer 2.5s infinite;


    }

    @keyframes shimmer {
        100% {
            -webkit-mask-position: left
        }
    }
</style>
<div class="shimmer navbar  navbar-expand-md navbar-dark" style="background: linear-gradient(to right, #010102,#05073b,#1d1963,#3a197b,#4c1f6b,#280e4e, #0e0a2b);   ">
    <div class="navbar-brand wmin-0 mr-5">
        <a href="index.html" class="d-inline-block">
            <img src="../../../../global_assets/images/logo_light.png" alt="">
        </a>
    </div>

    <div class="d-md-none">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-mobile">
            <i class="icon-tree5"></i>
        </button>
    </div>

    <div class="collapse navbar-collapse" id="navbar-mobile">
        <ul class="navbar-nav">
            <li class="nav-item dropdown">
                <a href="#" class="navbar-nav-link dropdown-toggle caret-0" data-toggle="dropdown">
                    <i class="icon-people"></i>
                    <span class="d-md-none ml-2">Users</span>
                    <span class="badge badge-mark border-orange-400 ml-auto ml-md-0"></span>
                </a>

                <div class="dropdown-menu dropdown-content wmin-md-300">


                    <div class="dropdown-content-body dropdown-scrollable">
                        <ul class="media-list">
                            <li class="media">
                                <div class="mr-3">
                                    <img src="../../../../global_assets/images/placeholders/placeholder.jpg" width="36" height="36" class="rounded-circle" alt="">
                                </div>
                                <div class="media-body">
                                    <a href="#" class="media-title font-weight-semibold">Jordana Ansley</a>
                                    <span class="d-block text-muted font-size-sm">Lead web developer</span>
                                </div>
                                <div class="ml-3 align-self-center"><span class="badge badge-mark border-success"></span></div>
                            </li>

                            <li class="media">
                                <div class="mr-3">
                                    <img src="../../../../global_assets/images/placeholders/placeholder.jpg" width="36" height="36" class="rounded-circle" alt="">
                                </div>
                                <div class="media-body">
                                    <a href="#" class="media-title font-weight-semibold">Will Brason</a>
                                    <span class="d-block text-muted font-size-sm">Marketing manager</span>
                                </div>
                                <div class="ml-3 align-self-center"><span class="badge badge-mark border-danger"></span></div>
                            </li>

                            <li class="media">
                                <div class="mr-3">
                                    <img src="../../../../global_assets/images/placeholders/placeholder.jpg" width="36" height="36" class="rounded-circle" alt="">
                                </div>
                                <div class="media-body">
                                    <a href="#" class="media-title font-weight-semibold">Hanna Walden</a>
                                    <span class="d-block text-muted font-size-sm">Project manager</span>
                                </div>
                                <div class="ml-3 align-self-center"><span class="badge badge-mark border-success"></span></div>
                            </li>

                            <li class="media">
                                <div class="mr-3">
                                    <img src="../../../../global_assets/images/placeholders/placeholder.jpg" width="36" height="36" class="rounded-circle" alt="">
                                </div>
                                <div class="media-body">
                                    <a href="#" class="media-title font-weight-semibold">Dori Laperriere</a>
                                    <span class="d-block text-muted font-size-sm">Business developer</span>
                                </div>
                                <div class="ml-3 align-self-center"><span class="badge badge-mark border-warning-300"></span></div>
                            </li>

                            <li class="media">
                                <div class="mr-3">
                                    <img src="../../../../global_assets/images/placeholders/placeholder.jpg" width="36" height="36" class="rounded-circle" alt="">
                                </div>
                                <div class="media-body">
                                    <a href="#" class="media-title font-weight-semibold">Vanessa Aurelius</a>
                                    <span class="d-block text-muted font-size-sm">UX expert</span>
                                </div>
                                <div class="ml-3 align-self-center"><span class="badge badge-mark border-grey-400"></span></div>
                            </li>
                        </ul>
                    </div>

                    <div class="dropdown-content-footer">
                        <a href="#" class="text-default mr-auto">All users</a>
                        <a href="#" class="text-default"><i class="icon-gear"></i></a>
                    </div>
                </div>
            </li>

            <li class="nav-item dropdown">
                <a href="#" class="navbar-nav-link dropdown-toggle caret-0" data-toggle="dropdown">
                    <i class="icon-pulse2"></i>
                    <span class="d-md-none ml-2">Activity</span>
                    <span class="badge badge-mark border-orange-400 ml-auto ml-md-0"></span>
                </a>

                <div class="dropdown-menu dropdown-content wmin-md-350">
                    <div class="dropdown-content-header">
                        <span class="font-weight-semibold">Latest activity</span>
                        <a href="#" class="text-default"><i class="icon-search4 font-size-base"></i></a>
                    </div>

                    <div class="dropdown-content-body dropdown-scrollable">
                        <ul class="media-list">
                            <li class="media">
                                <div class="mr-3">
                                    <a href="#" class="btn bg-success-400 rounded-round btn-icon"><i class="icon-mention"></i></a>
                                </div>

                                <div class="media-body">
                                    <a href="#">Taylor Swift</a> mentioned you in a post "Angular JS. Tips and tricks"
                                    <div class="font-size-sm text-muted mt-1">4 minutes ago</div>
                                </div>
                            </li>

                            <li class="media">
                                <div class="mr-3">
                                    <a href="#" class="btn bg-pink-400 rounded-round btn-icon"><i class="icon-paperplane"></i></a>
                                </div>

                                <div class="media-body">
                                    Special offers have been sent to subscribed users by <a href="#">Donna Gordon</a>
                                    <div class="font-size-sm text-muted mt-1">36 minutes ago</div>
                                </div>
                            </li>

                            <li class="media">
                                <div class="mr-3">
                                    <a href="#" class="btn bg-blue rounded-round btn-icon"><i class="icon-plus3"></i></a>
                                </div>

                                <div class="media-body">
                                    <a href="#">Chris Arney</a> created a new <span class="font-weight-semibold">Design</span> branch in <span class="font-weight-semibold">Limitless</span> repository
                                    <div class="font-size-sm text-muted mt-1">2 hours ago</div>
                                </div>
                            </li>

                            <li class="media">
                                <div class="mr-3">
                                    <a href="#" class="btn bg-purple-300 rounded-round btn-icon"><i class="icon-truck"></i></a>
                                </div>

                                <div class="media-body">
                                    Shipping cost to the Netherlands has been reduced, database updated
                                    <div class="font-size-sm text-muted mt-1">Feb 8, 11:30</div>
                                </div>
                            </li>

                            <li class="media">
                                <div class="mr-3">
                                    <a href="#" class="btn bg-warning-400 rounded-round btn-icon"><i class="icon-comment"></i></a>
                                </div>

                                <div class="media-body">
                                    New review received on <a href="#">Server side integration</a> services
                                    <div class="font-size-sm text-muted mt-1">Feb 2, 10:20</div>
                                </div>
                            </li>

                            <li class="media">
                                <div class="mr-3">
                                    <a href="#" class="btn bg-teal-400 rounded-round btn-icon"><i class="icon-spinner11"></i></a>
                                </div>

                                <div class="media-body">
                                    <strong>January, 2018</strong> - 1320 new users, 3284 orders, $49,390 revenue
                                    <div class="font-size-sm text-muted mt-1">Feb 1, 05:46</div>
                                </div>
                            </li>
                        </ul>
                    </div>

                    <div class="dropdown-content-footer">
                        <a href="#" class="text-default mr-auto">All activity</a>
                        <div>
                            <a href="#" class="text-default" data-popup="tooltip" title="Clear list"><i class="icon-checkmark3"></i></a>
                            <a href="#" class="text-default ml-2" data-popup="tooltip" title="Settings"><i class="icon-gear"></i></a>
                        </div>
                    </div>
                </div>
            </li>
        </ul>

        <!-- <span class="badge bg-success-400 badge-pill my-3 my-md-0 ml-md-3 mr-md-auto">16 orders</span> -->

        <ul class="navbar-nav ml-auto">

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Left Side Of Navbar -->
                <ul class="navbar-nav ml-auto">

                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="navbar-nav ml-auto">
                    <!-- Authentication Links -->

                </ul>
            </div>

        </ul>
    </div>
</div>
<!-- /main navbar -->


<!-- Secondary navbar -->
<div class="navbar navbar-expand-md navbar-light">
    <div class="text-center d-md-none w-100">
        <button type="button" class="navbar-toggler dropdown-toggle" data-toggle="collapse" data-target="#navbar-navigation">
            <i class="icon-unfold mr-2"></i>
            Navigation
        </button>
    </div>

    <div class="navbar-collapse collapse" id="navbar-navigation">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a href="/dashboard" class="navbar-nav-link ">
                    <i class="icon-home4 mr-2"></i>
                    Dashboard
                </a>
            </li>

            <li class="nav-item nav-item-levels mega-menu-full">
                <a href="#" class="navbar-nav-link dropdown-toggle" data-toggle="dropdown">
                    <i class="icon-make-group mr-2"></i>
                    Navigation
                </a>

                <div class="dropdown-menu dropdown-content">
                    <div class="dropdown-content-body">
                        <div class="row">
                            <div class="col-md-3">
                                <div class="font-size-sm line-height-sm font-weight-semibold text-uppercase mt-1">Main</div>
                                <div class="dropdown-divider mb-2"></div>
                                <div class="dropdown-item-group mb-3 mb-md-0">
                                    <ul class="list-unstyled">
                                        <li>
                                            <a href="/user" class="dropdown-item rounded"><i class="icon-copy"></i>Data User</a>
                                        </li>
                                        <li>
                                            <a href="/produk" class="dropdown-item rounded"><i class="icon-color-sampler"></i>Data Barang</a>
                                        </li>
                                        <li>
                                            <a href="/categories" class="dropdown-item rounded"><i class="icon-color-sampler"></i>Data Kategori Barang</a>
                                        </li>
                                        <li>
                                            <a href="/data_pesanan" class="dropdown-item rounded"><i class="icon-color-sampler"></i>Data Pesanan</a>
                                        </li>
                                        <li>
                                            <a href="/chart" class="dropdown-item rounded"><i class="icon-color-sampler"></i>Data Pesanan</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <!-- <div class="col-md-3">
                                <div class="font-size-sm line-height-sm font-weight-semibold text-uppercase mt-1">Layout</div>
                                <div class="dropdown-divider mb-2"></div>
                                <div class="dropdown-item-group mb-3 mb-md-0">
                                    <ul class="list-unstyled">
                                        <li>

                                            <ul class="list-unstyled">
                                                <li><a href="layout_navbar_fixed_main.html" class="dropdown-item rounded">Fixed main navbar</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="font-size-sm line-height-sm font-weight-semibold text-uppercase mt-1">Navigation</div>
                                <div class="dropdown-divider mb-2"></div>
                                <div class="dropdown-item-group mb-3 mb-md-0">
                                    <ul class="list-unstyled">
                                        <li>
                                            <a href="#" class="dropdown-item rounded"><i class="icon-menu3"></i> Navbars</a>
                                            <ul class="list-unstyled">
                                                <li>

                                                    <ul class="list-unstyled">
                                                        <li><a href="navbar_single_top_static.html" class="dropdown-item rounded">Single top static</a></li>

                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                            </div> -->

                        </div>
                    </div>
                </div>
            </li>


        </ul>

        <ul class="navbar-nav ml-md-auto">
            <li class="nav-item dropdown">
                <a href="#" class="navbar-nav-link dropdown-toggle" data-toggle="dropdown">
                    <i class="icon-make-group mr-2"></i>
                    Connect
                </a>

                <div class="dropdown-menu dropdown-menu-right dropdown-content wmin-md-350">
                    <div class="dropdown-content-body p-2">
                        <div class="row no-gutters">
                            <div class="col-12 col-sm-4">
                                <a href="#" class="d-block text-default text-center ripple-dark rounded p-3">
                                    <i class="icon-github4 icon-2x"></i>
                                    <div class="font-size-sm font-weight-semibold text-uppercase mt-2">Github</div>
                                </a>

                                <a href="#" class="d-block text-default text-center ripple-dark rounded p-3">
                                    <i class="icon-dropbox text-blue-400 icon-2x"></i>
                                    <div class="font-size-sm font-weight-semibold text-uppercase mt-2">Dropbox</div>
                                </a>
                            </div>

                            <div class="col-12 col-sm-4">
                                <a href="#" class="d-block text-default text-center ripple-dark rounded p-3">
                                    <i class="icon-dribbble3 text-pink-400 icon-2x"></i>
                                    <div class="font-size-sm font-weight-semibold text-uppercase mt-2">Dribbble</div>
                                </a>

                                <a href="#" class="d-block text-default text-center ripple-dark rounded p-3">
                                    <i class="icon-google-drive text-success-400 icon-2x"></i>
                                    <div class="font-size-sm font-weight-semibold text-uppercase mt-2">Drive</div>
                                </a>
                            </div>

                            <div class="col-12 col-sm-4">
                                <a href="#" class="d-block text-default text-center ripple-dark rounded p-3">
                                    <i class="icon-twitter text-info-400 icon-2x"></i>
                                    <div class="font-size-sm font-weight-semibold text-uppercase mt-2">Twitter</div>
                                </a>

                                <a href="#" class="d-block text-default text-center ripple-dark rounded p-3">
                                    <i class="icon-youtube text-danger icon-2x"></i>
                                    <div class="font-size-sm font-weight-semibold text-uppercase mt-2">Youtube</div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </li>

            <li class="nav-item dropdown">
                <a href="#" class="navbar-nav-link dropdown-toggle" data-toggle="dropdown">
                    <i class="icon-cog3"></i>
                    <span class="d-md-none ml-2">Settings</span>
                </a>

                <div class="dropdown-menu dropdown-menu-right">
                    <a href="#" class="dropdown-item"><i class="icon-user-lock"></i> Account security</a>
                    <a href="#" class="dropdown-item"><i class="icon-statistics"></i> Analytics</a>
                    <a href="#" class="dropdown-item"><i class="icon-accessibility"></i> Accessibility</a>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item"><i class="icon-gear"></i> All settings</a>
                </div>
            </li>

            @guest
            <li class="nav-item">
                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
            </li>
            @if (Route::has('register'))
            <li class="nav-item">
                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
            </li>
            @endif
            @else
            <li class="nav-item dropdown">
                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                    {{ Auth::user()->name }} <span class="caret"></span>
                </a>

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
            @endguest
            </li>
        </ul>
    </div>
</div>
<!-- /secondary navbar -->