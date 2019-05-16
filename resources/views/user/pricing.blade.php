
    @include('user/head')
<body>
    <div class="wrapper">
        <!-- Sidebar Holder -->
        
        @include('user/sidebar')
        <!-- Page Content Holder -->
        <div id="content">
            <!-- top-bar -->

            @include('user/header')

            <!--// top-bar -->

            <!-- main-heading -->
            <h2 class="main-title-w3layouts mb-2 text-center">Tabla de precios</h2>
            <!--// main-heading -->

            <!-- Pricing tables1 -->
            <section class="pricing-tables">
                <h4 class="tittle-w3-agileits mb-4 mt-3">Precios por cada plan</h4>
                <div class="card-deck text-center row">
                    <div class="card box-shadow col-xl-3 col-md-6">
                        <div class="card-header">
                            <h4 class="py-md-4 py-xl-3 py-2">Básico</h4>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title pricing-card-title">
                                <span class="align-top">$</span>25
                                <small class="text-muted">/ month</small>
                            </h5>
                            <ul class="list-unstyled mt-3 mb-4">
                                <li class="py-2 border-bottom">Advertising</li>
                                <li class="py-2 border-bottom">Branding Services</li>
                                <li class="py-2 border-bottom">Online Marketing</li>
                                <li class="py-2">Creative Marketing</li>
                            </ul>
                            <button type="button" class="btn btn-lg btn-block btn-outline-primary py-2" data-toggle="modal" data-target="#exampleModal">Get Started</button>
                        </div>
                    </div>
                    <div class="card box-shadow col-xl-3 col-md-6 my-lg-0 my-3">
                        <div class="card-header">
                            <h4 class="py-md-4 py-xl-3 py-2">Standard</h4>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title pricing-card-title">
                                <span class="align-top">$</span>59
                                <small class="text-muted">/ month</small>
                            </h5>
                            <ul class="list-unstyled mt-3 mb-4">
                                <li class="py-2 border-bottom">Advertising</li>
                                <li class="py-2 border-bottom">Branding Services</li>
                                <li class="py-2 border-bottom">Online Marketing</li>
                                <li class="py-2">Creative Marketing</li>
                            </ul>
                            <button type="button" class="btn btn-lg btn-block btn-outline-primary py-2" data-toggle="modal" data-target="#exampleModal">Get Started</button>
                        </div>
                    </div>
                    <div class="card box-shadow col-xl-3 col-md-6 mt-lg-0 mt-3">
                        <div class="card-header">
                            <h4 class="py-md-4 py-xl-3 py-2">Experto</h4>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title pricing-card-title">
                                <span class="align-top">$</span>75
                                <small class="text-muted">/ month</small>
                            </h5>
                            <ul class="list-unstyled mt-3 mb-4">
                                <li class="py-2 border-bottom">Advertising</li>
                                <li class="py-2 border-bottom">Branding Services</li>
                                <li class="py-2 border-bottom">Online Marketing</li>
                                <li class="py-2">Creative Marketing</li>
                            </ul>
                            <button type="button" class="btn btn-lg btn-block btn-outline-primary py-2" data-toggle="modal" data-target="#exampleModal">Get Started</button>
                        </div>
                    </div>
                    <div class="card box-shadow col-xl-3 col-md-6">
                        <div class="card-header">
                            <h4 class="py-md-4 py-xl-3 py-2">Premium</h4>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title pricing-card-title">
                                <span class="align-top">$</span>90
                                <small class="text-muted">/ month</small>
                            </h5>
                            <ul class="list-unstyled mt-3 mb-4">
                                <li class="py-2 border-bottom">Advertising</li>
                                <li class="py-2 border-bottom">Branding Services</li>
                                <li class="py-2 border-bottom">Online Marketing</li>
                                <li class="py-2">Creative Marketing</li>
                            </ul>
                            <button type="button" class="btn btn-lg btn-block btn-outline-primary py-2" data-toggle="modal" data-target="#exampleModal">Get Started</button>
                        </div>
                    </div>
                </div>
                <!--//  Pricing tables1 -->
                <!-- Pricing tables2 -->
              
                <!--//  Pricing tables2 -->

                <!--//  Pricing tables3 -->
           
            <!-- Modal -->
 
            <!--// Modal -->
            <!-- Copyright -->
           @include('user/footer')
            <!--// Copyright -->
        </div>
    </div>


    <!-- Required common Js -->
    <script src='js/jquery-2.2.3.min.js'></script>
    <!-- //Required common Js -->

    <!-- Sidebar-nav Js -->
    <script>
        $(document).ready(function () {
            $('#sidebarCollapse').on('click', function () {
                $('#sidebar').toggleClass('active');
            });
        });
    </script>
    <!--// Sidebar-nav Js -->

    <!-- dropdown nav -->
    <script>
        $(document).ready(function () {
            $(".dropdown").hover(
                function () {
                    $('.dropdown-menu', this).stop(true, true).slideDown("fast");
                    $(this).toggleClass('open');
                },
                function () {
                    $('.dropdown-menu', this).stop(true, true).slideUp("fast");
                    $(this).toggleClass('open');
                }
            );
        });
    </script>
    <!-- //dropdown nav -->

    <!-- Js for bootstrap working-->
    <script src="js/bootstrap.min.js"></script>
    <!-- //Js for bootstrap working -->

</body>

</html>