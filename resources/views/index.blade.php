@include('components.header')
<body>
    <h1>Student List</h1>
  
    <table class="table table-striped table-dark mb-12">
        <thead>
          <tr>
            <th scope="col">First Name</th>
            <th scope="col">Last Name</th>
            <th scope="col">Email</th>
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
                <td>{{ $student->age }} </td>
                <td>
                    <a href="/student/{{$student->id}}" class="link-primary">view</a>
                </td>
          </tr>
          @endforeach 
        </tbody>

      </table        
     
      {{$students->links()}}
@include('components.footer')