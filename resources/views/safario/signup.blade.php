@extends('layouts.safario')

@section('content')
    <header id="header" class="ex-2-header">
        <div class="container" style="padding-top: 100px;"> <!-- Aumento de espacio arriba con padding inline -->
            <div class="row justify-content-center">
                <div class="col-lg-6 col-md-8 col-sm-12">
                    <!-- Título y mensaje de bienvenida -->
                    <h1 class="text-center">Sign Up</h1>
                    <p class="text-center">Already have an account? Then please <a class="white" href="login.html">Log In</a></p>

                    <!-- Formulario de registro -->
                    <div class="form-container mt-4"> <!-- Añadido margen superior a la form-container -->
                        <form id="registerForm" data-toggle="validator" data-focus="false">
                            <!-- Campo de Nombres -->
                            <div class="form-group">
                                <label class="label-control" for="fname">First Name</label>
                                <input type="text" class="form-control" id="fname" required placeholder="Enter your first name">
                                <div class="help-block with-errors"></div>
                            </div>

                            <!-- Campo de Apellidos -->
                            <div class="form-group">
                                <label class="label-control" for="lname">Last Name</label>
                                <input type="text" class="form-control" id="lname" required placeholder="Enter your last name">
                                <div class="help-block with-errors"></div>
                            </div>

                            <!-- Campo de Género -->
                            <div class="form-group">
                                <label class="label-control" for="gender">Gender</label>
                                <select class="form-control" id="gender" required>
                                    <option value="" disabled selected>Select your gender</option>
                                    <option value="male">Male</option>
                                    <option value="female">Female</option>
                                    <option value="other">Other</option>
                                </select>
                                <div class="help-block with-errors"></div>
                            </div>

                            <!-- Campo de Email -->
                            <div class="form-group">
                                <label class="label-control" for="email">Email</label>
                                <input type="email" class="form-control" id="email" required placeholder="Enter your email">
                                <div class="help-block with-errors"></div>
                            </div>

                            <!-- Campo de Fecha de Nacimiento -->
                            <div class="form-group">
                                <label class="label-control" for="dob">Date of Birth</label>
                                <input type="date" class="form-control" id="dob" required>
                                <div class="help-block with-errors"></div>
                            </div>

                            <!-- Campo de Dirección -->
                            <div class="form-group">
                                <label class="label-control" for="address">Address</label>
                                <input type="text" class="form-control" id="address" required placeholder="Enter your address">
                                <div class="help-block with-errors"></div>
                            </div>

                            <!-- Campo de Teléfono -->
                            <div class="form-group">
                                <label class="label-control" for="phone">Phone</label>
                                <input type="tel" class="form-control" id="phone" required placeholder="Enter your phone number">
                                <div class="help-block with-errors"></div>
                            </div>

                            <!-- Campo de Contraseña -->
                            <div class="form-group">
                                <label class="label-control" for="password">Password</label>
                                <input type="password" class="form-control" id="password" required placeholder="Enter your password">
                                <div class="help-block with-errors"></div>
                            </div>

                            <!-- Botón de Enviar -->
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary btn-block">SIGN UP</button>
                            </div>

                            <div class="form-message">
                                <div id="msgSubmit" class="h3 text-center hidden"></div>
                            </div>
                        </form>
                    </div> <!-- end of form container -->
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </header> <!-- end of ex-header -->
@endsection
