@extends('Layouts.App')
@section('content')
<head>
	<style type="text/css">
		    nav.link a.p,nav a:hover{
            color: red;
            border-style:outset ;
            transition: .8px;



        }
	</style>
</head>
<table border="1" align="center" width="50%" style="color: white;">
    <tr>
        <th>Product Name</th>
        <th>Price</th>
        <th>Details</th>
    </tr>
    @foreach($products as $name=>$price)
    <tr align="center">
        <td>{{$name}}</td>
        <td>{{$price}}</td>
        <td><a href="/studentEdit/{{$name}}/{{$price}}" style="color:greenyellow;">Details</a></td>
        
    </tr>
    @endforeach

</table>

@endsection