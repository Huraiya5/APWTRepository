<html>
    <head>
        <title>Laravel App</title>
   <style type="text/css">

        label.logo{
            color: blue;
            font-weight: bold;
            font-size: 35px;
            line-height: 80px;
            padding: 0 100px;

        }
        nav{
            background: none;
            height: 80px;
            weidth: 100%;

        }
        nav ul{
            float: right;
            margin: center;
            padding: 6 70px;
        }
        nav ul li{
            display: inline-block;
            margin: 0px;
            line-height: 80px;
            text-align: center;
        }
        nav ul li a{
            text-transform: uppercase;
            font-size: 17px;
            color: white;
            border-radius: 9px;
            text-align: center;
            padding: 8 12px;
            font-weight: bold;
            text-decoration: none;
            
        }
   </style> 


    </head>
    <body>
        <div class="container">
            @include('inc.topnav')
            <div align="center">
                @yield('content')
            </div>
        </div>
        
    </body>
</html>