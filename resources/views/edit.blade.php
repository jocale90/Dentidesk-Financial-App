<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Dentidesk</title>

    <!-- Custom fonts for this template-->
    <link href="{{ URL::asset('vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;1,100;1,200;1,300;1,400;1,500&display=swap" rel="stylesheet">

    <!-- Custom styles for this template-->
    <!-- Custom styles for this template-->
    <link href="{{ URL::asset('css/sb-admin-2.css')}}" rel="stylesheet">
    <link href="{{ URL::asset('vendor/datatables/dataTables.bootstrap4.min.css')}}" rel="stylesheet">
    <link href="{{ URL::asset('css/dataTable.min.css')}}" rel="stylesheet" >
    <link href="{{ URL::asset('css/main.css')}}" rel="stylesheet">

</head>

<body id="page-top" class="sidebar-toggled">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion toggled" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{route('dashboard.index')}}">
                

            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link " href="{{route('dashboard.index')}}">
                    <i class="fa fa-clipboard-list"></i>
                    <span>Listado</span></a>
            </li>
            <!-- Nav Item - Tables -->
            <li class="nav-item ">
                <a class="nav-link" href="{{route('dashboard.create')}}">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Crear</span></a>
            </li>
            <li class="nav-item ">
                <a class="nav-link" href="{{route('dashboard.calculo')}}">
                    <i class="fas fa-fw fa-user"></i>
                    <span>Calculo</span></a>
            </li>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item d-none" >
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
                    aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-fw fa-cog"></i>
                    <span>Components</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Custom Components:</h6>
                        <a class="collapse-item" href="buttons.html">Buttons</a>
                        <a class="collapse-item" href="cards.html">Cards</a>
                    </div>
                </div>
            </li>

            <hr class="sidebar-divider d-none d-md-block">


            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>


        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top ">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Search -->
                    <h5>Dentidesk</h5>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                                aria-labelledby="searchDropdown">
                                
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-0 small"
                                            placeholder="Search for..." aria-label="Search"
                                            aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="button">
                                                <i class="fas fa-search fa-sm"></i>
                                            </button>
                                        </div>
                                    </div>
                                
                            </div>
                        </li>
                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">{{ auth()->user()->nombre }}</span>
                                <img class="img-profile rounded-circle"
                                    src="{{ URL::asset('img/undraw_profile.svg')}}">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Salir
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">
                    <!-- Content Row -->
                    <div class="row mt-3">
                        <div class="col pb-3 mt-3">
                            <h4 class=" col-sm-8 m-auto text-center">Editar trasanccion</h4>
                            <br>
                            <div class="col col-sm-8 m-auto">
                                <div class="stepwizard mt-4">
                                    <div class="stepwizard-row setup-panel" style="display:none">

                                   
                                        
                                    <div class="stepwizard-step col-xs-3"> 
                                            <a style="cursor:context-menu !important;" id="step-1" type="button" class="btn btn-default btn-circle" disabled="disabled">1</a>
                                            <p><small>Ingreso</small></p>
                                        </div>

                                        <div class="stepwizard-step col-xs-3"> 
                                            <a style="cursor:context-menu !important;" id="step-2" type="button" class="btn btn-default btn-circle">2</a>
                                            <p><small>En evaluación</small></p>
                                        </div>

                                        <div class="stepwizard-step col-xs-3"> 
                                            <a style="cursor:context-menu !important;" id="step-3" type="button" class="btn btn-default btn-circle" disabled="disabled">3</a>
                                            <p><small>Pendiente de pago</small></p>
                                        </div>
                                        <div class="stepwizard-step col-xs-3"> 
                                            <a style="cursor:context-menu !important;" id="step-4" type="button" class="btn btn-default btn-circle" disabled="disabled">4</a>
                                            <p><small>En construcción</small></p>
                                        </div>
                                        <div class="stepwizard-step col-xs-3"> 
                                            <a style="cursor:context-menu !important;" id="step-5" type="button" class="btn btn-default btn-circle" disabled="disabled">5</a>
                                            <p><small>Cerrada</small></p>
                                        </div>
                                        
                                    </div>


                                </div>
                                
                                
                                    
                                    <div class="panel panel-primary setup-content" id="step-1">
                                        <div class="card col col-xs-10 col-sm-10 m-auto">
                                            <div class="card-body">
                                                <div class="col-12 col-sm-10 m-auto">
                                                 <input type="hidden" id="inputorden" value="">   
                                                
                                                @if(isset($datos))
                                                @foreach($datos as $dato)


                                                <form action="{{ route('dashboard.procesarupdate') }}" method="POST">
                                                @csrf
                                                <input type="hidden" name="iddato" value="{{ $dato->id }}">
                                                    <div class="row">
                                                        <div class="col-12 col-sm">
                                                            
                                                        
                                                            <div class="row mt-3">        
                                                                <div class="col-12 col-sm">
                                                                    <label for="">Decripcion</label>
                                                                </div>
                                                                <div class="col-12 col-sm">
                                                                    <input type="text" id="telefono" maxlength="70" name="descripcion" class="form-control" value="{{ $dato->descripcion }}">
                                                                </div>
                                                            </div>
                                                        
                                                            <div class="row mt-3">        
                                                                <div class="col-12 col-sm">
                                                                    <label for="">Monto</label>
                                                                </div>
                                                                <div class="col-12 col-sm">
                                                                    <input type="text" id="telefono" maxlength="9" name="monto" class="form-control" value="{{ $dato->monto }}">
                                                                    <span style="margin-left: 20px;" id="textoad"></span>
                                                                </div>
                                                            </div>
                                                          
                                                            <div class="row mt-5 text-center">
                                                                <div class="col-md-6">
                                                                    <button class="btn btn-primary">Actualizar datos</button>
                                                                </div>
                                                            </form>

                                                            <div class="col-md-6">
                                                                <a href="{{ route('dashboard.index') }}"> <button type="button" class="btn btn-primary">Volver al dashboard</button>
                                                            </div>
                                                            </div>
                                                        </div>

                                                        @endforeach
                                                    @endif    
                                                    </div>
                                                
<br>                                          
<br>
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
                                                </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

  
   

    </div>


    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Cerrando Sesión</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">¿Desea Cerrar Sesión?</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancelar</button>
                    <a class="btn btn-primary" href="{{route('logout')}}">Salir</a>
                </div>
            </div>
        </div>
    </div>


    
    
    

       <!-- Bootstrap core JavaScript-->
    <script src="{{ URL::asset('vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{ URL::asset('vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

    <!-- Core plugin JavaScript-->
    <script src="{{ URL::asset('vendor/jquery-easing/jquery.easing.min.js')}}"></script>

    <!-- Custom scripts for all pages-->
    <script src="{{ URL::asset('js/sb-admin-2.min.js')}}"></script>
    <!-- Page level plugins -->
    <script src="{{ URL::asset('vendor/datatables/jquery.dataTables.min.js')}}"></script>
    <script src="{{ URL::asset('vendor/datatables/dataTables.bootstrap4.min.js')}}"></script>

    <!-- Page level custom scripts -->
    <script src="{{ URL::asset('js/demo/datatables-demo.js')}}"></script>

    <script>
                $('input[name="monto"]').keyup(function(e)
        {
            let textoad = document.getElementById('textoad');
            textoad.innerHTML = "";

            if (/\D/g.test(this.value))
            {
                this.value = this.value.replace(/\D/g, '');
                textoad.innerHTML = "Ingrese solo numeros";
                
            }
        });
    </script>


    



    

</script>


</body>

</html>