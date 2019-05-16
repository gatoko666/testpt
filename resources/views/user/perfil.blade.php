
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
                    <h4 class="tittle-w3-agileits mb-4">Editar perfil </h4>
                          <br>
                    <table class="table table-bordered table-striped">

                        

                        
                        <thead>
                            <tr>
                                
                                <th class="text-center">
                                    Editar Imágen
                                    <br>
                                   
                                </th>
                                <th class="text-center">
                                    Información Personal
                                    <br>
                                  
                                </th>
                                
                               
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th class="text-nowrap" scope="row">
                                        <!--// upload file -->

                                        <form>
                                            <div class="form-group">
                                              <label for="exampleFormControlFile1">Subir documento</label>
                                              <input type="file" class="form-control-file" id="exampleFormControlFile1">
                                              
                                              
                                              <br>
            
                                            </div>
                                          </form>
                                </th>
                                <td>

                                        <form>
                                          
                                                <div class="form-group row">
                                                  <label for="inputdescripcion" class="col-sm-2 col-form-label">Nombre </label>
                                                  <div class="col-sm-5">
                                                    <input type="text" class="form-control" id="inputdescripcion" placeholder="Nombre">
                                                  </div>
                                                </div>

                                                <div class="form-group row">
                                                        <label for="inputdescripcion" class="col-sm-2 col-form-label">Apellido</label>
                                                        <div class="col-sm-5">
                                                          <input type="text" class="form-control" id="inputdescripcion" placeholder="Apellido">
                                                        </div>
                                                      </div>
                                                      <div class="form-group row">
                                                            <label for="inputdescripcion" class="col-sm-2 col-form-label">Correo</label>
                                                            <div class="col-sm-5">
                                                              <input type="text" class="form-control" id="inputdescripcion" placeholder="Correo">
                                                            </div>
                                                          </div>
                                                          <div class="form-group row">
                                                                <label for="inputdescripcion" class="col-sm-2 col-form-label">Password</label>
                                                                <div class="col-sm-5">
                                                                  <input type="password" class="form-control" id="inputdescripcion" placeholder="Password">
                                                                </div>
                                                              </div>

                                                              <div class="form-group row">
                                                                    <label for="inputdescripcion" class="col-sm-2 col-form-label">Confirmar Password</label>
                                                                    <div class="col-sm-5">
                                                                      <input type="password" class="form-control" id="inputdescripcion" placeholder="Confirmar Password">
                                                                    </div>
                                                                  </div> 
                                                  
                                                
                                                 
                                              </form>

                                </td>
                                
                               
                                
                          

                                <!-- Modal -->
                                <div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel1" aria-hidden="true">
                                  <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                      <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel1">Modal title</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                          <span aria-hidden="true">&times;</span>
                                        </button>
                                      </div>
                                      <div class="modal-body">
                                        Modal 1
                                      </div>
                                      <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                        <button type="button" class="btn btn-primary">Save changes</button>
                                      </div>
                                    </div>
                                  </div>
                                </div>

                                <!-- Modal 2 -->
                                <div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel2" aria-hidden="true">
                                  <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                      <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel2">Confirmación</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                          <span aria-hidden="true">&times;</span>
                                        </button>
                                      </div>
                                      <div class="modal-body">
                                        Eliminar
                                      </div>
                                      <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                                        
                                      </div>
                                    </div>
                                  </div>
                                </div>



























                               
                            </tr>
                        </tbody>
                    </table>
                    <button type="submit" class="btn btn-primary">Guardar Cambios</button>
                </div>
                

         </section>      


       
                     
                     
                
                        <!-- Modal -->
                        <div class="modal fade" id="fee-details1" tabindex="-1" role="dialog" aria-labelledby="fee-details-label" aria-hidden="true">
                            <div class="modal-dialog modal-lg modal-xl">
                                <div class="modal-content">
                                    
                                    <div class="modal-body">
                                      
                                            <section class="grids-section bd-content">
                                                    <!-- Grids Info -->
                                                    <div class="outer-w3-agile mt-3">
                                                        <h4 class="tittle-w3-agileits mb-4">Festivo</h4>
                                                        <table class="table table-bordered table-striped">
                                                            <thead>
                                                                <tr>
                                                                    
                                                                    <th class="text-center">
                                                                        Fecha
                                                                        <br>
                                                                       
                                                                    </th>
                                                                    <th class="text-center">
                                                                        Descripción
                                                                        <br>
                                                                      
                                                                    </th>
                                                                    <th class="text-center">
                                                                        Especial
                                                                        <br>
                                                                       
                                                                    </th>
                                                                   
                                                                    <th class="text-center">
                                                                        Año
                                                                        <br>
                                                                    
                                                                    </th>
                                                                    <th class="text-center">
                                                                            Acción
                                                                            <br>
                                                                        
                                                                        </th>
                                                                   
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr>
                                                                    
                                                                    <th class="text-nowrap" scope="row">25/12/2018</th>
                                                                    <td>Navidad</td>
                                                                    <td>Si</td>
                                                                    <td>Año</td>
                                                                    <td>
                                                                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal3">
                                                                                    Guardar Cambio
                                                                            </button>
                                    
                                                                    </td>
                                                                     
                                                                </tr>
                                                               
                                                               
                                                            </tbody>
                                                        </table>
                                                    </div>
                                    
                                             </section>
                                             <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                                                 
                                                  </div>      
                                    
                                    
                                    </div>
                                </div><!-- /.modal-content -->
                            </div><!-- /.modal-dialog -->
                        </div><!-- /.modal -->








                        <div class="modal fade" id="fee-details2" tabindex="-1" role="dialog" aria-labelledby="fee-details-label" aria-hidden="true">
                                <div class="modal-dialog modal-lg modal-xl">
                                    <div class="modal-content">
                                        
                                        <div class="modal-body">
                                            
                                          
                                                <section class="grids-section bd-content">
                                                        <!-- Grids Info -->
                                                        <div class="outer-w3-agile mt-3">
                                                            <h4 class="tittle-w3-agileits mb-4">Festivos</h4>

                                                            <div class="container">
                                                                    <form>
                                          
                                                                            <div class="form-group row">
                                                                              <label for="inputdescripcion" class="col-sm-2 col-form-label">Descripción</label>
                                                                              <div class="col-sm-5">
                                                                                <input type="text" class="form-control" id="inputdescripcion" placeholder="Descripción">
                                                                              </div>
                                                                            </div>
                                
                                                                              <div class="form-group row">
                                                                              <label for="inputdesde" class="col-sm-2 col-form-label">Fecha</label>
                                                                              <div class="col-sm-10">
                                                                                    <input id="datepicker1" width="276" />
                                                                                                <script>
                                                                                                    $('#datepicker1').datepicker({
                                                                                                        uiLibrary: 'bootstrap4'
                                                                                                    });
                                                                                </script>
                                                                            </div>
                                                                              </div>
                                                                               <div class="form-group row">
                                                                                    <label for="inputcomentario" class="col-sm-2 col-form-label">Repetir anualmente</label>
                                                                                    <div class="col-sm-5">
                                                                                      
                                
                                                                                      <p align="justify"><select name="nombre" size="1">
                                                                                            <option value="valor 1"selected>Si</option>
                                                                                            <option value="valor 2" >No</option>
                                                                                            
                                                                                            </select> </p>
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                                                                    </div>
                                                                                    </div>
                                                                               
                                                                              <div class="form-group row">
                                                                              <label for="inputcomentario" class="col-sm-2 col-form-label">Especial</label>
                                                                              <div class="col-sm-5">
                                                                                    <p align="justify"><select name="nombre" size="1">
                                                                                            <option value="valor 1"selected>Si</option>
                                                                                            <option value="valor 2" >No</option>
                                                                                            
                                                                                            </select> </p>
                                
                                                                              </div>
                                                                              </div>
                                                                               
                                
                                                                              
                                                                            </div>
                                                                            <button type="submit" class="btn btn-primary ">Agregar</button>
                                                                          </form>
                                
                                                            </div>

 
                                                        </div>
                                        
                                                 </section>
                                                 <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                                                     
                                                      </div>      
                                        
                                        
                                        </div>
                                        
                                    </div><!-- /.modal-content -->
                                    
                                    
                                </div><!-- /.modal-dialog -->

                                 

                                @include('user/footer')
                            </div><!-- /.modal -->
   
                <!--// Countdown -->
                <!-- Copyright -->
            </div>
                



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
    
 