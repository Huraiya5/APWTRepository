@extends('Layouts.App')
@section('content')
<head>
    <title>PUBLIC HOME</title>
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css">
    <style type="text/css">
            body {
            background:#E5CCFF;
            margin:0;
            padding:0;
            font-family: sens-serif;
            
        }
        .box{
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background:white;
            text-align: center;
            border-radius: 10px;
        }

        .col-md-7{
            text-align: left;
        }
        .form-group{
            padding-top: 0%;
            text-align: left;
            margin-left: 20px;
            margin: 1%;
            
        }
        .form-control{
            margin-left: 45px;
            
        }
        .btn{
            margin-top: 6px;
            align-items: center;
            margin-left: 40%;
            width: 90px;
        }
            nav.link a.c,nav a:hover{
            color: red;
            border-style:outset ;
            transition: .8px;


        }
        .id{
            margin-left: 45px;
        }
        .text-danger{
            margin-left: 45px;
        }

        

    </style>
</head>
<body>
    <div class="check">
    
    <table class="box" width="30%"  align="center"  height="20%">

        <tr>
        <td colspan="2">
        <fieldset>
            <legend>REGISTRATION</legend>

<form action="{{route('registration')}}" class="form-group" method="post" align="center">
    <!-- Cross Site Request Forgery-->
    {{csrf_field()}}

 <div class="col-md-9 form-group">
        <span class="id">Name</span>
        <input type="text" name="name" value="{{old('name')}}" class="form-control">
        @error('name')
            <span class="text-danger">{{$message}}</span>
        @enderror
    </div>

    <div class="col-md-9 form-group">
        <span class="id">Id</span>
        <input type="text" name="id" value="{{old('id')}}"class="form-control">
        @error('id')
            <span class="text-danger">{{$message}}</span>
        @enderror
    </div>

    <div class="col-md-9 form-group">
        <span class="id">Date of Birth</span>
        <input type="date" name="dob" value="{{old('dob')}}"class="form-control">
    </div>

        <div class="col-md-9 form-group">
        <span class="id">Username</span>
        <input type="text" name="username" value="{{old('username')}}" class="form-control">
        @error('username')
            <span class="text-danger">{{$message}}</span>
        @enderror
    </div>

    <div class="col-md-9 form-group">
        <span class="id">Email</span>
        <input type="text" name="email" value="{{old('email')}}" class="form-control">
        @error('email')
            <span class="text-danger">{{$message}}</span>
        @enderror
    </div>

    <div class="col-md-9 form-group">
        <span class="id">Phone</span>
        <input type="text" name="phone" value="{{old('phone')}}" class="form-control">
        @error('phone')
            <span class="text-danger">{{$message}}</span>
        @enderror
    </div>
        <div class="col-md-9 form-group">
        <span class="id">Password</span>
        <input type="text" name="password" value="{{old('password')}}" class="form-control">
        @error('password')
            <span class="text-danger">{{$message}}</span>
        @enderror
    </div>
        <div class="col-md-9 form-group">
        <span class="id">Confirm Password</span>
        <input type="text" name="cpassword" value="{{old('cpassword')}}" class="form-control">
       @error('cpassword')
            <span class="text-danger">{{$message}}</span>
        @enderror
    </div>
    <div>
    <input type="submit" class="btn btn-success"  value="Submit"> 
    </div>
      

</form>
</fieldset>
</td>
</tr>
</table>
</div>
    
</body>
</html>
@endsection