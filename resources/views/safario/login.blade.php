@extends('layouts.safario')

@section('content')

    <header id="header" class="ex-2-header">
        <div class="container" style="padding-top: 100px;"> <!-- Aumento de espacio arriba con padding inline -->
            <div class="row justify-content-center">
                <div class="col-lg-6 col-md-8 col-sm-12">
                    <!-- Título y mensaje de bienvenida -->
                    <h1 class="text-center">Log In</h1>
                    <p class="text-center">You don't have a password? Then please <a class="white" href="sign-up.html">Sign Up</a></p>

                    <!-- Formulario de inicio de sesión -->
                    <div class="form-container mt-4"> <!-- Añadido margen superior a la form-container -->
                        <form id="logInForm" data-toggle="validator" data-focus="false">
                            <div class="form-group">
                                <label class="label-control" for="lemail">Email</label>
                                <input type="email" class="form-control" id="lemail" required placeholder="Enter your email">
                                <div class="help-block with-errors"></div>
                            </div>

                            <div class="form-group">
                                <label class="label-control" for="lpassword">Password</label>
                                <input type="password" class="form-control" id="lpassword" required placeholder="Enter your password">
                                <div class="help-block with-errors"></div>
                            </div>

                            <div class="form-group">
                                <button type="submit" class="btn btn-primary btn-block">LOG IN</button>
                            </div>

                            <div class="form-message">
                                <div id="lmsgSubmit" class="h3 text-center hidden"></div>
                            </div>
                        </form>
                    </div> <!-- end of form container -->
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </header> <!-- end of ex-header -->
@endsection
