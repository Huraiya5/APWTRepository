<html>
    <head>
        <title>Laravel App</title>
    
    <style type="text/css">
        *{
            padding: 0;
            margin: 0;
            text-decoration: none;
            font: bold;
            background-color: black;
            padding-bottom: 50px;
           
        }
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
            padding: 0 100px;
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
        }


 /*       .c:visited, .c:hover, .c:active, .c:focus 
        {
            background-color: #FF6F00;
            color: #FFFFFF;
        }*/
  
        .h{
            height: 150px;
            width: 150px;
            border-radius: 200px;
            background-color: lightpink;
            padding: 100 100px;
            margin-right: 50%;
            font-family: monospace;
            font-size: 40px;
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