
    @include('user/head')
    
    <body>
        <div class="se-pre-con"></div>
        <div class="wrapper">


            <!-- Sidebar Holder -->
           
            @include('user/sidebar')
            <!-- Page Content Holder -->


            @include('user/header')
                <!--// top-bar -->


                <!-- main-heading -->
                <h2 class="main-title-w3layouts mb-2 text-center">Subir documento</h2>
                <!--// main-heading -->
    
                <!-- Error Page Content -->
                <div class="blank-page-content">
    
                    <!-- Error Page Info -->
                    <div class="outer-w3-agile mt-3">
                            @if ($message = Session::get('Exitoso'))

                            <div class="alert alert-success alert-block">
          
                                <button type="button" class="close" data-dismiss="alert">×</button>
          
                                <strong>{{ $message }}</strong>
          
                            </div>
          
                        @endif
          
                        @if (count($errors) > 0)
                            <div class="alert alert-danger">
                                <strong>Whoops!</strong> Existe un error en la subida del archivo.<br><br>
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        


                            <!--// upload file -->

                            <form action="/proyectotitulo/public/uploadfile" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <input type="file" class="form-control-file" accept="application/pdf"  name="fileToUpload" id="exampleInputFile" aria-describedby="fileHelp">
                                    <br>
                                  <label for="exampleFormControlTextarea1">Descripción</label>
                                  <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>      
                                  <br>
                                    <br>
                                  <small id="fileHelp" class="form-text text-muted">Por favor, solo suba arhcivos de 2MB o menos.</small>
                                    <br>
                                </div>
                                <button type="submit" class="btn btn-primary">Subir</button>
                            </form>



                           

                            








                        <p class="paragraph-agileits-w3layouts">        </p>
                    </div>
                    <!--// Error Page Info -->
    
                </div>
    
                <!--// Error Page Content -->
    

                
                
                <!-- Copyright -->

                @include('user/footer')



                <!--// Copyright -->
            </div>
        </div>
    
    
        <!-- Required common Js -->
        <script src='js/jquery-2.2.3.min.js'></script>
        <!-- //Required common Js -->
        
        <!-- loading-gif Js -->
        <script src="js/modernizr.js"></script>
        <script>
            //paste this code under head tag or in a seperate js file.
            // Wait for window load
            $(window).load(function () {
                // Animate loader off screen
                $(".se-pre-con").fadeOut("slow");;
            });
        </script>
        <!--// loading-gif Js -->
    
        <!-- Sidebar-nav Js -->
        <script>
            $(document).ready(function () {
                $('#sidebarCollapse').on('click', function () {
                    $('#sidebar').toggleClass('active');
                });
            });
        </script>
        <!--// Sidebar-nav Js -->
    
        <!-- Graph -->
        <script src="js/SimpleChart.js"></script>
        <script>
            var graphdata4 = {
                linecolor: "Random",
                title: "Thursday",
                values: [{
                        X: "6",
                        Y: 300.00
                    },
                    {
                        X: "7",
                        Y: 101.98
                    },
                    {
                        X: "8",
                        Y: 140.00
                    },
                    {
                        X: "9",
                        Y: 340.00
                    },
                    {
                        X: "10",
                        Y: 470.25
                    },
                    {
                        X: "11",
                        Y: 180.56
                    },
                    {
                        X: "12",
                        Y: 680.57
                    },
                    {
                        X: "13",
                        Y: 740.00
                    },
                    {
                        X: "14",
                        Y: 800.89
                    },
                    {
                        X: "15",
                        Y: 420.57
                    },
                    {
                        X: "16",
                        Y: 980.24
                    },
                    {
                        X: "17",
                        Y: 1080.00
                    },
                    {
                        X: "18",
                        Y: 140.24
                    },
                    {
                        X: "19",
                        Y: 140.58
                    },
                    {
                        X: "20",
                        Y: 110.54
                    },
                    {
                        X: "21",
                        Y: 480.00
                    },
                    {
                        X: "22",
                        Y: 580.00
                    },
                    {
                        X: "23",
                        Y: 340.89
                    },
                    {
                        X: "0",
                        Y: 100.26
                    },
                    {
                        X: "1",
                        Y: 1480.89
                    },
                    {
                        X: "2",
                        Y: 1380.87
                    },
                    {
                        X: "3",
                        Y: 1640.00
                    },
                    {
                        X: "4",
                        Y: 1700.00
                    }
                ]
            };
            $(function () {
                $("#Hybridgraph").SimpleChart({
                    ChartType: "Hybrid",
                    toolwidth: "50",
                    toolheight: "25",
                    axiscolor: "#E6E6E6",
                    textcolor: "#6E6E6E",
                    showlegends: false,
                    data: [graphdata4],
                    legendsize: "140",
                    legendposition: 'bottom',
                    xaxislabel: 'Hours',
                    title: 'Weekly Profit',
                    yaxislabel: 'Profit in $'
                });
            });
        </script>
        <!--// Graph -->
        <!-- Bar-chart -->
        <script src="js/rumcaJS.js"></script>
        <script src="js/example.js"></script>
        <!--// Bar-chart -->
        <!-- Calender -->
        <script src="js/moment.min.js"></script>
        <script src="js/pignose.calender.js"></script>
        <script>
            //<![CDATA[
            $(function () {
                $('.calender').pignoseCalender({
                    select: function (date, obj) {
                        obj.calender.parent().next().show().text('You selected ' +
                            (date[0] === null ? 'null' : date[0].format('YYYY-MM-DD')) +
                            '.');
                    }
                });
    
                $('.multi-select-calender').pignoseCalender({
                    multiple: true,
                    select: function (date, obj) {
                        obj.calender.parent().next().show().text('You selected ' +
                            (date[0] === null ? 'null' : date[0].format('YYYY-MM-DD')) +
                            '~' +
                            (date[1] === null ? 'null' : date[1].format('YYYY-MM-DD')) +
                            '.');
                    }
                });
            });
            //]]>
        </script>
        <!--// Calender -->
    
        <!-- profile-widget-dropdown js-->
        <script src="js/script.js"></script>
        <!--// profile-widget-dropdown js-->
    
        <!-- Count-down -->
        <script src="js/simplyCountdown.js"></script>
        <link href="css/simplyCountdown.css" rel='stylesheet' type='text/css' />
        <script>
            var d = new Date();
            simplyCountdown('simply-countdown-custom', {
                year: d.getFullYear(),
                month: d.getMonth() + 2,
                day: 25
            });
        </script>
        <!--// Count-down -->
    
        <!-- pie-chart -->
        <script src='js/amcharts.js'></script>
        <script>
            var chart;
            var legend;
    
            var chartData = [{
                    country: "Lithuania",
                    value: 260
                },
                {
                    country: "Ireland",
                    value: 201
                },
                {
                    country: "Germany",
                    value: 65
                },
                {
                    country: "Australia",
                    value: 39
                },
                {
                    country: "UK",
                    value: 19
                },
                {
                    country: "Latvia",
                    value: 10
                }
            ];
    
            AmCharts.ready(function () {
                // PIE CHART
                chart = new AmCharts.AmPieChart();
                chart.dataProvider = chartData;
                chart.titleField = "country";
                chart.valueField = "value";
                chart.outlineColor = "";
                chart.outlineAlpha = 0.8;
                chart.outlineThickness = 2;
                // this makes the chart 3D
                chart.depth3D = 20;
                chart.angle = 30;
    
                // WRITE
                chart.write("chartdiv");
            });
        </script>
        <!--// pie-chart -->
    
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
        <script src="js/uploadfile.js"></script>
        <!-- //Js for bootstrap working -->
    
    </body>
    
 