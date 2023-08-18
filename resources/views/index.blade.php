@include('components.header')
<body>
  <div> 
   
  <div> 
    <form action="/logout" method="POST">
      @csrf
     <button type="submit" class="col-md-1  p-2 bg-primary rounded float-right mt-2">Log out</button>
    </form>
  </div>
    <h1>Student List</h1>
    
  
    <table class="table table-striped table-dark mb-12">
        <thead>
          <tr>
            <th scope="col">First Name</th>
            <th scope="col">Last Name</th>
            <th scope="col">Email</th>
            <th scope="col">Gender</th>
            <th scope="col">Age</th>
            <th>Manage</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($students as $student)
          <tr>
            
                <td>{{ $student->first_name }} </td>
                <td>{{ $student->last_name }} </td>
                <td>{{ $student->email }} </td>
                <td>{{ $student->gender }} </td>
                <td>{{ $student->age }} </td>
                <td>
                    <a href="/student/{{$student->id}}" class="link-primary">view</a>
                </td>
          </tr>
          @endforeach 
        </tbody>

      </table        
     
      {{$students->links()}}

      <div class="float-right mr-2">
        <a href="/add/student">ADD STUDENT</a>
      </div>
@include('components.footer')