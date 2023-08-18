
@if (session()->has('message'))

<div class="alert">
    <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
    {{session('message')}}
  </div> 
  @endif