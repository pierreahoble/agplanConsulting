<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>AgPlan Consulting- Login</title>

    <!-- Custom fonts for this template-->
    <link href="admin/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="admin/css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-10 col-lg-12 col-md-9">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body ">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg-2">

                            </div>
                            <div class="col-lg-8">
                                @if (Session::has('error'))
                                <div class="container-fluid">
                                    {{-- {{dd($error)}} --}}
                                    <br>
                                    <div class="alert alert-danger alert-block">
                                        <button type="button" class="close" data-dismiss="alert">×</button>
                                        <strong>{{Session::get('error')}}</strong> <i class="fa fa-exclamation-triangle"></i>
                                    </div>
                                </div>
                                @endif
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">Enrégistrez-Vous!</h1>
                                    </div>
                                    <form class="user" action="" method="#">
                                        @csrf
                                        <div class="form-group">
                                            <input type="text" name="nom" class="form-control form-control-user" placeholder="Entrer votre Nom...">
                                        </div>

                                        <div class="form-group">
                                            <input type="text" name="prenom" class="form-control form-control-user" placeholder="Entrer votre Prénom...">
                                        </div>


                                        <div class="form-group">
                                            <input type="email" name="email" class="form-control form-control-user" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Entrer votre email Adresse...">
                                        </div>

                                        <div class="form-group">
                                            <input type="tel" name="tel" class="form-control form-control-user"  placeholder="Entrer votre numéro de téléphone ...">
                                        </div>

                                      
                                        <button type="submit" class="btn btn-primary btn-user btn-block">S'enrégistré</button> 
                                        
                                        <hr> 
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
    <script src="admin/vendor/jquery/jquery.min.js"></script>
    <script src="admin/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="admin/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

</body>

</html>