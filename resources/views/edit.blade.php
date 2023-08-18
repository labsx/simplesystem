@include('components.header')

    <body class="mt-5 ">

    <nav class="navbar navbar-expand-lg navbar-light navbar-laravel">
        <div class="container">
            
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
    </nav>
    
    <main class="login-form">
        <div class="cotainer">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">Edit</div>
                            @if(session()->has('message'))
                                <div class="alert alert-success text-center text-uppercase pt-1 py-0 " > 
                                <p class="mt-3 ">{{session()->get('message')}}</p>
                            </div>
                            @endif
                         <div class="card-body">
                           

                            <form action="/student/{{$student->id}}" method="POST">
                                @method ('PUT')
                                @csrf
                                <div class="form-group row">
                                    <label for="name" class="col-md-4 col-form-label text-md-right">First Name</label>
                                    <div class="col-md-6">
                                        <input type="text" id="name" class="form-control" name="first_name" required autofocus value=" {{$student->first_name}} "> 
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
                                        <input type="text" id="name" class="form-control" name="last_name" required autofocus value=" {{$student->last_name}} "> 
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
                                        <input type="text" id="email" class="form-control" name="email" required autofocus value=" {{$student->email}} ">
                                    </div>
                                </div>
                                <div class="col-md-7 col-form-label text-md-right text-danger">
                                    @error('email')
                                     <p style="font-size: x-small">{{$message}}</p>
                                     @enderror
                                </div>
    
                                <div class="form-group row">
                                    <label for="password" class="col-md-4 col-form-label text-md-right">Age</label>
                                    <div class="col-md-6">
                                        <input type="text" class="form-control" name="age" required value=" {{$student->age}} ">
                                    </div>
                                </div>
                                <div class="col-md-7 col-form-label text-md-right text-danger">
                                    @error('password')
                                     <p style="font-size: x-small">{{$message}}</p>
                                     @enderror
                                </div>
    
                              
                                <div class="col-md-3 float-right">
                                    <button type="submit" class="btn btn-primary">
                                       Edit
                                    </button>
     
                                </div>
                                
                                  

                                
                               
                        </div>
                        </form>
                                <div>
                                    <form action="/index">
                                        <button type="submit" class="col-md-2 offset-md-0 p-2 bg-primary rounded float-right">Back</button>
                                    </form>
                                    <form action="/student/{{$student->id}}" method="POST">
                                         @csrf
                                             @method ('delete')
                                             <button type="submit" class="col-md-2 offset-md-0 p-2 bg-primary rounded float-right">Delete</button>
                                    </form>
                                </div>
                        
                        
                    </div>
                </div>
            </div>
        </div>
        </div>
    
    </main>
    
    
   @include('components.footer')
