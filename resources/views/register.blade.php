@include('components.header')

    <body>
    
    <nav class="navbar navbar-expand-lg navbar-light navbar-laravel">
        <div class="container">
            <a class="navbar-brand" href="#">Laravel</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
    
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="/">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/register">Register</a>
                    </li>
                </ul>
    
            </div>
        </div>
    </nav>
    
    <main class="login-form">
        <div class="cotainer">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">Register</div>
                        <div class="card-body">
                           

                            <form action="/store" method="POST">
                                @csrf
                                <div class="form-group row">
                                    <label for="name" class="col-md-4 col-form-label text-md-right">First Name</label>
                                    <div class="col-md-6">
                                        <input type="text" id="name" class="form-control" name="first_name" required autofocus>
                                    </div>
                                    <div class="col-md-7 col-form-label text-md-right text-danger   ">
                                        @error('first_name')
                                         <p style="font-size: x-small">{{$message}}</p>
                                         @enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="name" class="col-md-4 col-form-label text-md-right">Last Name</label>
                                    <div class="col-md-6">
                                        <input type="text" id="name" class="form-control" name="last_name" required autofocus>
                                    </div>
                                </div>
                                <div class="col-md-7 col-form-label text-md-right text-danger">
                                    @error('last_name')
                                     <p style="font-size: x-small">{{$message}}</p>
                                     @enderror
                                </div>
                             

                                <div class="form-group row">
                                    <label for="email" class="col-md-4 col-form-label text-md-right">E-Mail Address</label>
                                    <div class="col-md-6">
                                        <input type="text" id="email" class="form-control" name="email" required autofocus>
                                    </div>
                                </div>
                                <div class="col-md-7 col-form-label text-md-right text-danger">
                                    @error('email')
                                     <p style="font-size: x-small">{{$message}}</p>
                                     @enderror
                                </div>
    
                                <div class="form-group row">
                                    <label for="password" class="col-md-4 col-form-label text-md-right">Password</label>
                                    <div class="col-md-6">
                                        <input type="password" id="password" class="form-control" name="password" required>
                                    </div>
                                </div>
                                <div class="col-md-7 col-form-label text-md-right text-danger">
                                    @error('password')
                                     <p style="font-size: x-small">{{$message}}</p>
                                     @enderror
                                </div>
    
                              
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        Register
                                    </button>
                                    
                                </div>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        </div>
    
    </main>
    
    
   @include('components.footer')
