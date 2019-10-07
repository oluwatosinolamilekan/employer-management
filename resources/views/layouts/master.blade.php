<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Employer Management</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .content {
                text-align: center;
            }
            .title {
                font-size: 30px;
            }
            .m-b-md {
                margin-bottom: 30px;
            }
            .form_group{
                
            }
            .btn{

            }
        </style>
    </head>
    <body>
            
        <div class="content">
            <div class="title m-b-md">
                @yield('title')
            </div>
            @yield('content')
        </div>
    </body>
</html>
