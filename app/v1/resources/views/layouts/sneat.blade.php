<!DOCTYPE html>
<html lang="en" class="light-style layout-menu-fixed" dir="ltr" data-theme="theme-default"
    data-assets-path="{{ url('/assets') }}" data-template="vertical-menu-template-free">

<head>
    <meta charset="UTF-8">

    <meta name="viewport"
        content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sneat Template</title>

    <link rel="icon" type="image/x-icon" href="{{ url('/assets/img/favicon/favicon.ico') }}" />

    <link
        href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
        rel="stylesheet" />

    {{-- boxicons --}}
    <link rel="stylesheet" href="{{ url('/assets/vendor/fonts/boxicons.css') }}" />
    <link rel="stylesheet" href="{{ url('/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css') }}" />

    {{-- Core Css --}}
    <link rel="stylesheet" href="{{ url('/assets/vendor/css/core.css') }}" class="template-customizer-core-css" />
    <link rel="stylesheet" href="{{ url('/assets/vendor/css/theme-default.css') }}"
        class="template-customizer-theme-css" />
    <link rel="stylesheet" href="{{ url('/assets/css/demo.css') }}" />


    {{-- Page Css --}}
    <link rel="stylesheet" href="{{ url('/assets/vendor/css/pages/page-icons.css') }}" />

    <script src="{{ url('/assets/vendor/js/helpers.js') }}"></script>
    <script src="{{ url('/assets/js/config.js') }}"></script>


    <livewire:styles />
    <script defer src="{{ url('/assets/js/alpine.js') }}"></script>
</head>

<body>

    {{-- @yield('content') --}}

    <div class="layout-wrapper layout-content-navbar">
        <div class="layout-container">

            @includeWhen(true, 'layouts.sneat-sidenav')

            <div class="layout-page">

                <div class="content-wrapper">

                    <nav class="navbar sticky-top bg-dark navbar-dark">
                        <div class="container-fluid">
                            <div class="d-flex">
                                <div class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0 d-xl-none">
                                    <a class="nav-item nav-link px-0 me-xl-4" href="javascript:void(0)">
                                        <i class="bx bx-menu bx-sm"></i>
                                    </a>
                                </div>
                                <a class="navbar-brand"></a>
                            </div>

                            <div class="d-flex">
                                <div class="btn-group">
                                    <button type="button"
                                        class="btn btn-sm btn-primary rounded dropdown-toggle hide-arrow"
                                        data-bs-toggle="dropdown" data-bs-display="static" aria-expanded="false">
                                        <i class="bx bx-cog"></i>
                                    </button>
                                    <ul class="dropdown-menu dropdown-menu-end">
                                        <li><button class="dropdown-item" type="button">Action</button></li>
                                        <li><button class="dropdown-item" type="button">Another action</button></li>
                                        <li><button class="dropdown-item" type="button">Something else here</button>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </nav>

                    <div class="container-xxl flex-grow-1 container-p-y ">
                        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Icons /</span> Box Icons</h4>

                        <p>
                            You can check complete list of box icons from
                            <a href="https://boxicons.com/" target="_blank">https://boxicons.com</a>
                        </p>

                        <div class="d-flex flex-wrap" id="icons-container">
                            <div class="card icon-card cursor-pointer text-center mb-4 mx-2">
                                <div class="card-body">
                                    <i class="bx bxl-adobe mb-2"></i>
                                    <p class="icon-name text-capitalize text-truncate mb-0">adobe</p>
                                </div>
                            </div>
                            <div class="card icon-card cursor-pointer text-center mb-4 mx-2">
                                <div class="card-body">
                                    <i class="bx bxl-algolia mb-2"></i>
                                    <p class="icon-name text-capitalize text-truncate mb-0">algolia</p>
                                </div>
                            </div>
                            <div class="card icon-card cursor-pointer text-center mb-4 mx-2">
                                <div class="card-body">
                                    <i class="bx bxl-audible mb-2"></i>
                                    <p class="icon-name text-capitalize text-truncate mb-0">audible</p>
                                </div>
                            </div>
                            <div class="card icon-card cursor-pointer text-center mb-4 mx-2">
                                <div class="card-body">
                                    <i class="bx bxl-figma mb-2"></i>
                                    <p class="icon-name text-capitalize text-truncate mb-0">figma</p>
                                </div>
                            </div>
                            <div class="card icon-card cursor-pointer text-center mb-4 mx-2">
                                <div class="card-body">
                                    <i class="bx bxl-redbubble mb-2"></i>
                                    <p class="icon-name text-capitalize text-truncate mb-0">redbubble</p>
                                </div>
                            </div>
                            <div class="card icon-card cursor-pointer text-center mb-4 mx-2">
                                <div class="card-body">
                                    <i class="bx bxl-etsy mb-2"></i>
                                    <p class="icon-name text-capitalize text-truncate mb-0">etsy</p>
                                </div>
                            </div>
                            <div class="card icon-card cursor-pointer text-center mb-4 mx-2">
                                <div class="card-body">
                                    <i class="bx bxl-gitlab mb-2"></i>
                                    <p class="icon-name text-capitalize text-truncate mb-0">gitlab</p>
                                </div>
                            </div>
                            <div class="card icon-card cursor-pointer text-center mb-4 mx-2">
                                <div class="card-body">
                                    <i class="bx bxl-patreon mb-2"></i>
                                    <p class="icon-name text-capitalize text-truncate mb-0">patreon</p>
                                </div>
                            </div>
                            <div class="card icon-card cursor-pointer text-center mb-4 mx-2">
                                <div class="card-body">
                                    <i class="bx bxl-facebook-circle mb-2"></i>
                                    <p class="icon-name text-capitalize text-truncate mb-0">facebook-circle</p>
                                </div>
                            </div>
                            <div class="card icon-card cursor-pointer text-center mb-4 mx-2">
                                <div class="card-body">
                                    <i class="bx bxl-imdb mb-2"></i>
                                    <p class="icon-name text-capitalize text-truncate mb-0">imdb</p>
                                </div>
                            </div>
                            <div class="card icon-card cursor-pointer text-center mb-4 mx-2">
                                <div class="card-body">
                                    <i class="bx bxl-jquery mb-2"></i>
                                    <p class="icon-name text-capitalize text-truncate mb-0">jquery</p>
                                </div>
                            </div>
                            <div class="card icon-card cursor-pointer text-center mb-4 mx-2">
                                <div class="card-body">
                                    <i class="bx bxl-pinterest-alt mb-2"></i>
                                    <p class="icon-name text-capitalize text-truncate mb-0">pinterest-alt</p>
                                </div>
                            </div>
                            <div class="card icon-card cursor-pointer text-center mb-4 mx-2">
                                <div class="card-body">
                                    <i class="bx bxl-500px mb-2"></i>
                                    <p class="icon-name text-capitalize text-truncate mb-0">500px</p>
                                </div>
                            </div>
                            <div class="card icon-card cursor-pointer text-center mb-4 mx-2">
                                <div class="card-body">
                                    <i class="bx bxl-airbnb mb-2"></i>
                                    <p class="icon-name text-capitalize text-truncate mb-0">airbnb</p>
                                </div>
                            </div>
                            <div class="card icon-card cursor-pointer text-center mb-4 mx-2">
                                <div class="card-body">
                                    <i class="bx bxl-amazon mb-2"></i>
                                    <p class="icon-name text-capitalize text-truncate mb-0">amazon</p>
                                </div>
                            </div>
                            <div class="card icon-card cursor-pointer text-center mb-4 mx-2">
                                <div class="card-body">
                                    <i class="bx bxl-android mb-2"></i>
                                    <p class="icon-name text-capitalize text-truncate mb-0">android</p>
                                </div>
                            </div>
                            <div class="card icon-card cursor-pointer text-center mb-4 mx-2">
                                <div class="card-body">
                                    <i class="bx bxl-angular mb-2"></i>
                                    <p class="icon-name text-capitalize text-truncate mb-0">angular</p>
                                </div>
                            </div>
                            <div class="card icon-card cursor-pointer text-center mb-4 mx-2">
                                <div class="card-body">
                                    <i class="bx bxl-apple mb-2"></i>
                                    <p class="icon-name text-capitalize text-truncate mb-0">apple</p>
                                </div>
                            </div>
                            <div class="card icon-card cursor-pointer text-center mb-4 mx-2">
                                <div class="card-body">
                                    <i class="bx bxl-baidu mb-2"></i>
                                    <p class="icon-name text-capitalize text-truncate mb-0">baidu</p>
                                </div>
                            </div>
                            <div class="card icon-card cursor-pointer text-center mb-4 mx-2">
                                <div class="card-body">
                                    <i class="bx bxl-behance mb-2"></i>
                                    <p class="icon-name text-capitalize text-truncate mb-0">behance</p>
                                </div>
                            </div>
                            <div class="card icon-card cursor-pointer text-center mb-4 mx-2">
                                <div class="card-body">
                                    <i class="bx bxl-bing mb-2"></i>
                                    <p class="icon-name text-capitalize text-truncate mb-0">bing</p>
                                </div>
                            </div>
                            <div class="card icon-card cursor-pointer text-center mb-4 mx-2">
                                <div class="card-body">
                                    <i class="bx bxl-bitcoin mb-2"></i>
                                    <p class="icon-name text-capitalize text-truncate mb-0">bitcoin</p>
                                </div>
                            </div>
                            <div class="card icon-card cursor-pointer text-center mb-4 mx-2">
                                <div class="card-body">
                                    <i class="bx bxl-blogger mb-2"></i>
                                    <p class="icon-name text-capitalize text-truncate mb-0">blogger</p>
                                </div>
                            </div>
                            <div class="card icon-card cursor-pointer text-center mb-4 mx-2">
                                <div class="card-body">
                                    <i class="bx bxl-bootstrap mb-2"></i>
                                    <p class="icon-name text-capitalize text-truncate mb-0">bootstrap</p>
                                </div>
                            </div>
                        </div>

                        <div class="d-flex justify-content-center mx-auto gap-3 mb-3">
                            <a href="https://boxicons.com/" target="_blank" class="btn btn-primary">View All
                                Icons</a>
                            <a href="https://themeselection.com/demo/sneat-bootstrap-html-admin-template/documentation//Icons.html"
                                class="btn btn-primary" target="_blank">How to use icons?</a>
                        </div>

                        <div class="card icon-card cursor-pointer text-left mb-4">
                            <div class="card-body">
                                @yield('content')
                            </div>
                        </div>

                    </div>

                    @includeWhen(true, 'layouts.sneat-footer')

                    <div class="content-backdrop fade"></div>
                </div>
            </div>
        </div>

        <div class="layout-overlay layout-menu-toggle"></div>
    </div>

    <livewire:scripts />
    <script src="{{ url('/assets/js/jquery.js') }}"></script>
    <script src="{{ url('/assets/vendor/libs/popper/popper.js') }}"></script>
    <script src="{{ url('/assets/vendor/js/bootstrap.js') }}"></script>
    <script src="{{ url('/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js') }}"></script>
    <script src="{{ url('/assets/vendor/js/menu.js') }}"></script>
    <script src="{{ url('/assets/js/main.js') }}"></script>

    <script async defer src="https://buttons.github.io/buttons.js"></script>
</body>

</html>
