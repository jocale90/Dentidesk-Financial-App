<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Dentidesk</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;1,100;1,200;1,300;1,400;1,500&display=swap" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">

    <style>
            body{
                background-image: url("  {{ asset('img/fondo2.jpg')}} ") !important;
                background-repeat: no-repeat !important;
                background-attachment: fixed !important;
                background-size: cover !important;
                color: #ffffff !important;
            }
    </style>

</head>

<body class=" login">

    <div class="container-fluid">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-4 col-lg-6 col-md-12 mt-5">
                <br><br>
                <div class="card o-hidden border-0 shadow-lg my-5" style="border-radius: 15px;">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="p-5">
                                    <div class="text-center">
                                        <img src="img/enerquinta_gris_header.svg" alt="">
                                    </div>
                                    
                                    <div class="text-center mt-5 ">
                                        <h1 class="h4 text-gray-900 mb-4">Gestor de ingresos y egresos Dentidesk</h1>
                                        <img src="{{ URL::asset('img/logodentidesk.png')}}" alt="">
                                    </div>
                                    <form method="POST" id="login" action="{{ route('validatelogin') }}">
                                    @csrf
                                        <div class="form-group mb-3">
                                            <input type="email" name="mail" id="mail" class="form-control form-control-user"
                                                id="exampleInputEmail" aria-describedby="emailHelp"
                                                placeholder="Nombre de Usuario">
                                        </div>
                                        <div class="form-group">
                                            <input type="password" name="pass" id="pass" class="form-control form-control-user"
                                                id="exampleInputPassword" placeholder="Contraseña">
                                        </div>
                                        <br>
                                        <p id="respuestaerrorlogin" style="color:red; display:none;">Credenciales de acceso incorrectas</p>
                                        <a class="btn btn-primary w-100">
                                           <strong id="gotosite"> INGRESAR  </strong> 
                                        </a>
                                        
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
                                    </form>   
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>


    <script>
        $("#gotosite").click(function(){
            $("#login").submit();
        });
    </script>



@if (Session::has('message'))
        <script>
            $("#respuestaerrorlogin").show();
        </script>
@endif


</body>

</html>