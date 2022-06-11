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
            nav.link a.a,nav a:hover{
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
            <legend>Contact Us</legend>

<form action="{{route('contactus')}}" class="form-group" method="post" align="center">
    <!-- Cross Site Request Forgery-->
    {{csrf_field()}}

 <div class="col-md-9 form-group">
        
        <input type="text" name="name" value="{{old('name')}}" class="form-control" placeholder="Enter Your name">
        @error('name')
            <span class="text-danger">{{$message}}</span>
        @enderror
    </div>



    <div class="col-md-9 form-group">
    
        <input type="text" name="email" value="{{old('email')}}" class="form-control" placeholder="Enter your Email">
        @error('email')
            <span class="text-danger">{{$message}}</span>
        @enderror
    </div>


        <div class="col-md-9 form-group">
        <textarea type="text" name="text" value="{{old('text')}}" class="form-control" placeholder="Enter your text"></textarea>
   

       @error('text')
            <span class="text-danger">{{$message}}</span>
        @enderror
    </div>
    <div>
    <input type="submit" class="btn btn-success"  value="Send"> 
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