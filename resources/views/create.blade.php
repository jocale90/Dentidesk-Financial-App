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
                
                <img width="30" src="img/Enerquinta.svg" alt="">
                <div class="sidebar-brand-text mx-3">Dentidesk</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="{{route('dashboard.index')}}">
                    <i class="fa fa-clipboard-list"></i>
                    <span>Solicitudes</span></a>
            </li>
            <!-- Nav Item - Tables -->
            <li class="nav-item ">
                <a class="nav-link" href="{{route('dashboard.create')}}">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Crear</span></a>
            </li>
            <li class="nav-item ">
                <a class="nav-link" href="{{route('dashboard.index')}}">
                    <i class="fas fa-fw fa-user"></i>
                    <span>Usuarios</span></a>
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
                    <h5>Crear transacción</h5>

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
                            <h4 class=" col-sm-8 m-auto text-center">Registrar nueva transacción</h4>
                            <br>
                            <div class="col col-sm-8 m-auto">
                                <div class="stepwizard mt-4">
                                    <div class="stepwizard-row setup-panel" style="display:none">

                                   

                                        
                                    </div>


                                </div>
                                
                                
                                    
                                    <div class="panel panel-primary setup-content" id="step-1">
                                        <div class="card col col-xs-10 col-sm-10 m-auto">
                                            <div class="card-body">
                                                <div class="col-12 col-sm-10 m-auto">
                                                 <input type="hidden" id="inputorden" value="">   
                                                
                                                    <div class="row">
                                                        <div class="col-12 col-sm text-center">
                                                            ¿Qué tipo de transacción desea crear?
                                                            <br>                    
                                                            <br>
                                                            <div class="form-check">
                                                                <input id="crear-contratista" class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">Ingreso
                                                            </div>
                                                            <div class="form-check">
                                                                <input id="crear-backoffice" class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2">Egreso
                                                            </div>
                                                        </div>
                                                    </div>
                                                
                                                <div id="formulario-backoffice" style="display:none;">
                                                    <form action="{{ route('dashboard.processcreate') }}" method="POST">
                                                    @csrf
                                                    <input type="hidden" name="tipo-creacion" value="2">
                                                    <div class="row">
                                                        <div class="col-12 col-sm">
                                                            <br>
                                                            <p class="text-center"> <b> Nuevo egreso  </b> </p>
                                                            <br>
                                                            <div class="row mt-3">        
                                                                <div class="col-12 col-sm">
                                                                    <label for="">Categoria del egreso</label>
                                                                </div>
                                                                <div class="col-12 col-sm">
                                                                    <input type="text" id="nombre" name="categoria" value="" class="form-control">
                                                                </div>
                                                            </div>
                                                            <div class="row mt-3">        
                                                                <div class="col-12 col-sm">
                                                                    <label for="">Descripcion del egreso</label>
                                                                </div>
                                                                <div class="col-12 col-sm">
                                                                    <input type="text" id="telefono" name="descripcion" class="form-control" value="">
                                                                </div>
                                                            </div>
                                                            <div class="row mt-3">
                                                                <div class="col-12 col-sm">
                                                                    <label for="">Monto egresado</label>
                                                                </div>
                                                                <div class="col-12 col-sm">
                                                                    <input type="text" id="correo" name="monto" value="" class="form-control">
                                                                </div>
                                                            </div>
                                                            <div class="row mt-5 text-center">
                                                            <div class="col-md-12">
                                                                <button class="btn btn-primary">Guardar registro</button>
                                                            </div>
                                                            </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div id="formulario-contratista" style="display:none;">

                                                    <form action="{{ route('dashboard.processcreate') }}" method="POST">
                                                    @csrf
                                                    <input type="hidden" name="tipo-creacion" value="1">
                                                    <div class="row">
                                                        <div class="col-12 col-sm">
                                                            <br>
                                                        <p class="text-center"> <b> Nuevo Ingreso  </b> </p>
                                                        <br>
                                                            <div class="row mt-3">        
                                                                <div class="col-12 col-sm">
                                                                    <label for="">Categoria del ingreso</label>
                                                                </div>
                                                                <div class="col-12 col-sm">
                                                                    <input type="text" id="nombre-contratista" name="categoria" value="" class="form-control">
                                                                </div>
                                                            </div>
                                                            <div class="row mt-3">        
                                                                <div class="col-12 col-sm">
                                                                    <label for="">Descripción del ingreso</label>
                                                                </div>
                                                                <div class="col-12 col-sm">
                                                                    <input type="text" id="direccion-contratista" name="descripcion" class="form-control" value="">
                                                                </div>
                                                            </div>
                                                            <div class="row mt-3">        
                                                                <div class="col-12 col-sm">
                                                                    <label for="">Monto Ingresado</label>
                                                                </div>
                                                                <div class="col-12 col-sm">
                                                                    <input type="text" id="telefono-contratista" name="monto" class="form-control" value="">
                                                                </div>
                                                            </div>
                                                            <div class="row mt-5 text-center">
                                                                <div class="col-md-12">
                                                                    <button class="btn btn-primary">Guardar registro</button>
                                                                </div>
                                                            </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <br>
                                                <div class="col-md-12 text-center">
                                                    <a href="{{ route('dashboard.index') }}"> <button type="button" class="btn btn-primary">Volver al listado</button>
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

    <!-- Logout Modal-->
    <div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ingresar observaciones a solicitud N° </h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="col">
                        <div class="row">
                            <div class="col">
                                <textarea name="textobservaciones" id="textobservaciones" maxlength="999" class="form-control w-100" cols="" rows="6"></textarea>
                                <br>
                                <p>Nota: al guardar las observaciones, se regresará la solicitud al cliente con el estado "Rechazada".</p>
                                <p id="texto_error" style="color:red; font-size:14px; display: none;">El campo de texto es requerido</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancelar</button>
                    <a id="gyr" class="btn btn-primary" type="button">Guardar y rechazar</a>
                </div>
            </div>
        </div>
    </div>
    

    <div class="modal fade" id="successmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Asignar Contratista a solicitud N° </h5>
                    <button class="close cerrarreload" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="col">
                        <div class="row my-3">
                            <div class="col">
                                <div class="p-3 mb-2 bg-success text-white">Se ha asiganado contratista a la orden numero</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-secondary cerrarreload" type="button" data-dismiss="modal">Cerrar</button>
                </div>
            </div>
        </div>
    </div>



    

    </div>


    <div class="modal fade" id="modalpreguntaseguridad" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Modificación  de orden </h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                <div class="col">
                        <div class="row my-3">
                            <div class="col">
                                <div class="p-3 mb-2 text-black">¿Está seguro de cambiar el estado a rechazado?</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" id="cancelarpeticion" data-dismiss="modal" >Cancelar</button>
                    <a class="btn btn-primary" id="savecontratista" onclick="rechazarorden()"> Proceder </a>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="modalpreguntaseguridad2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Modificación  de orden </h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                <div class="col">
                        <div class="row my-3">
                            <div class="col">
                                <div class="p-3 mb-2 text-black">¿Está seguro de asignar a contratista?</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" id="cancelarpeticion" data-dismiss="modal" >Cancelar</button>
                    <a class="btn btn-primary" id="savecontratista" onclick="asignarcontratista()"> Proceder </a>
                </div>
            </div>
        </div>
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
        $('#crear-contratista').click(function()
        {
        
            $("#formulario-contratista").show();
            $("#formulario-backoffice").hide();


            $("#nombre").attr("disabled","disabled");
            $("#telefono").attr("disabled","disabled");
            $("#correo").attr("disabled","disabled");
            $("#clave").attr("disabled","disabled");
            $("#repiteclave").attr("disabled","disabled");

            $("#nombre-contratista").removeAttr("disabled","disabled");
            $("#telefono-contratista").removeAttr("disabled","disabled");
            $("#correo-contratista").removeAttr("disabled","disabled");
            $("#clave-contratista").removeAttr("disabled","disabled");
            $("#repiteclave-contratista").removeAttr("disabled","disabled");
            $("#direccion-contratista").removeAttr("disabled","disabled");
        
        });
        
        $('#crear-backoffice').click(function()
        {
        
            $("#formulario-contratista").hide();
            $("#formulario-backoffice").show();

            $("#nombre-contratista").attr("disabled","disabled");
            $("#telefono-contratista").attr("disabled","disabled");
            $("#correo-contratista").attr("disabled","disabled");
            $("#clave-contratista").attr("disabled","disabled");
            $("#repiteclave-contratista").attr("disabled","disabled");
            $("#direccion-contratista").attr("disabled","disabled");

            $("#nombre").removeAttr("disabled");
            $("#telefono").removeAttr("disabled");
            $("#correo").removeAttr("disabled");
            $("#clave").removeAttr("disabled");
            $("#repiteclave").removeAttr("disabled");
        
        });
    </script>


</body>

</html>