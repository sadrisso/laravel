<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css">
<link rel="stylesheet" href="style.css">
<title>Header</title>
</head>
<body>

   <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <ul class="nav ">
         <li class="nav-item">
            <a class="nav-link active" href="#">
               @if(session()->has('Name')) {{session()->get('Name')}} @else Guest @endif
            </a>
         </li>
         <li class="nav-item">
            <a class="nav-link" href="{{url('student/create')}}">Add Student</a>
         </li>
         <li class="nav-item">
            <a class="nav-link " href="{{url('student/view')}}">View Student</a>
         </li>
      </ul>
   </nav>

