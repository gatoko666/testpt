
    @include('user/head')
    
    <body>
        <div class="se-pre-con"></div>
        <div class="wrapper">


            <!-- Sidebar Holder -->
           
            @include('user/sidebar')
            <!-- Page Content Holder -->


            @include('user/header')
                <!--// top-bar -->


         <section class="grids-section bd-content">
                <!-- Grids Info -->
                <div class="outer-w3-agile mt-3">
                    <h4 class="tittle-w3-agileits mb-4">Estadísticas Absentismos	</h4>
                    <div class="container">
                        Desde

                            <input id="datepicker1"  onfocus="this.value=' '"  width="276" />
                            <script>
                                $('#datepicker1').datepicker({
                                    uiLibrary: 'bootstrap4'
                                });
                            </script>
                            Hasta
                            <input id="datepicker2"  onfocus="this.value=' '"   width="276" />
                            <script>
                                $('#datepicker2').datepicker({
                                    uiLibrary: 'bootstrap4'
                                });
                            </script>
                            <button type="button" class="btn btn-primary">
                                    Buscar
                                       
                                    </button> 

                        </div>
                  
                        <br>

                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                
                                <th class="text-center">
                                    Trabajadores
                                    <br>
                                   
                                </th>
                                <th class="text-center">
                                    Horas trabajadas
                                    <br>
                                   
                                </th>
                                <th class="text-center">
                                    Horas planificadas 
                                    <br>
                                    
                                </th>
                                <th class="text-center">
                                   %
                                    <br>
                                 
                                </th>
                               
                                

                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th class="text-nowrap" scope="row">Trabajador 1</th>
                                <td>None (auto)</td>
                                <td>540px</td>
                                <td>720px</td>
                           
                               
                                 
                            </tr>
                            <tr>
                                <th class="text-nowrap" scope="row">Trabajador 2</th>
                                <td>
                                    <code>.col-</code>
                                </td>
                                <td>
                                    <code>.col-sm-</code>
                                </td>
                                <td>
                                    <code>.col-md-</code>
                                </td>
                              
                            
                                
                            </tr>

                            <tr>
                                <th class="text-nowrap" scope="row">Trabajador 3</th>
                                <td>None (auto)</td>
                                <td>540px</td>
                                <td>720px</td>
                           
                             
                                 
                            </tr>
                            <tr>
                                <th class="text-nowrap" scope="row">Trabajador 4</th>
                                <td>
                                    <code>.col-</code>
                                </td>
                                <td>
                                    <code>.col-sm-</code>
                                </td>
                                <td>
                                    <code>.col-md-</code>
                                </td>
                               
                                 
                                
                               
                            </tr>
                            <tr>
                                <th class="text-nowrap" scope="row">Trabajador 5</th>
                                <td>None (auto)</td>
                                <td>540px</td>
                                <td>720px</td>
                              
                             
                                
                            </tr>
                            <tr>
                                <th class="text-nowrap" scope="row">Total</th>
                                <td>
                                    <code>.col-</code>
                                </td>
                                <td>
                                    <code>.col-sm-</code>
                                </td>
                                <td>
                                    <code>.col-md-</code>
                                </td>
                              
                           
                                 
                            </tr>
                           
                        </tbody>
                    </table>
                </div>

         </section>   
         
        
                <!--// Bar-Chart -->
    
                <!--// three-grids -->
                


         




   
                <!--// Countdown -->
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
        <!-- //Js for bootstrap working -->
    
    </body>
    
 