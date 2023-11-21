<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css">
<link rel="stylesheet" href="style.css">
<title>View</title>
</head>
<body class="container">

   <table class="table">
      <thead>
         <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Password</th>
            <th>Action</th>
         </tr>
      </thead>
      <tbody>
         @foreach($student as $std)
         <tr>
            <td>{{$std->name}}</td>
            <td>{{$std->email}}</td>
            <td>{{$std->password}}</td>
            <td>
               <a href="{{url('student/edit')}}/{{$std->id}}" class="btn btn-success">Edit</a>
               <a href="{{url('student/delete')}}/{{$std->id}}" class="btn btn-danger">Delete</a>
            </td>
         </tr>
         @endforeach
      </tbody>
   </table>
   <a href="{{url('student/create')}}" class="btn btn-dark form-control">Add</a>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.13.0/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.min.js"></script>
</body>
</html>