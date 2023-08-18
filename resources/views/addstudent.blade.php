@include('components.header')

    <body>
    
    <nav class="navbar navbar-expand-lg navbar-light navbar-laravel">
        <div class="container">
           
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
    
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                   
                    <li class="nav-item">
                        <a class="nav-link" href="/index">Back</a>
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
                        <div class="card-header">ADD STUDENT INFORMATION</div>
                        <div class="card-body">
                           

                            <form action="/add/student" method="POST">
                                @csrf
                                <div class="form-group row">
                                    <label for="name" class="col-md-4 col-form-label text-md-right">First Name</label>
                                    <div class="col-md-6">
                                        <input type="text" id="name" class="form-control" name="first_name" required autofocus value="{{old('first_name')}}">
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
                                        <input type="text" id="name" class="form-control" name="last_name" required autofocus value="{{old('last_name')}}">
                                    </div>
                                </div>
                                <div class="col-md-7 col-form-label text-md-right text-danger">
                                    @error('last_name')
                                     <p style="font-size: x-small">{{$message}}</p>
                                     @enderror
                                </div>

                                <div class="form-group row">
                                    <label for="name" class="col-md-4 col-form-label text-md-right">Gender</label>
                                    <div class="col-md-6 text-left">
                                        <select type="gender"  name="gender" class="col-md-12 col-form-label text-md-left">
                                            <option value=""{{old('gender') == "" ? 'selected': ''}}></option>
                                            <option value="Male" {{old('gender') == "Male" ? 'selected': ''}}>Male</option>
                                            <option value="Female" {{old('gender') == "Female" ? 'selected': ''}}>Female</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-md-7 col-form-label text-md-right text-danger">
                                    @error('gender')
                                     <p style="font-size: x-small">{{$message}}</p>
                                     @enderror
                                </div>



                                <div class="form-group row">
                                    <label for="email" class="col-md-4 col-form-label text-md-right">E-Mail Address</label>
                                    <div class="col-md-6">
                                        <input type="text" id="email" class="form-control" name="email" required autofocus value="{{old('email')}}">
                                    </div>
                                </div>
                                <div class="col-md-7 col-form-label text-md-right text-danger">
                                    @error('email')
                                     <p style="font-size: x-small">{{$message}}</p>
                                     @enderror
                                </div>
    
                                <div class="form-group row">
                                    <label for="age" class="col-md-4 col-form-label text-md-right">Age</label>
                                    <div class="col-md-6">
                                        <input type="text" id="age" class="form-control" name="age" required value="{{old('age')}}">
                                    </div>
                                </div>
                                <div class="col-md-7 col-form-label text-md-right text-danger">
                                    @error('age')
                                     <p style="font-size: x-small">{{$message}}</p>
                                     @enderror
                                </div>
    
                              
                                <div class="col-md-3 float-right">
                                    <button type="submit" class="btn btn-primary">
                                       ADD
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
