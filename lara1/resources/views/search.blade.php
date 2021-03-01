<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

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

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: left;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
        <script
			  src="https://code.jquery.com/jquery-3.5.1.js"
			  integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc="
			  crossorigin="anonymous"></script>
        <script>
        $(document).ready(function(){
            var searchString;
            var dataString;
            $("#searchstring").keyup(function(){
                searchString = $("#searchstring").val();
                dataString = 'searchstring='+searchString;
                $("#resultstable tr:gt(0)").remove();
                console.log(dataString);
                $.ajax({
                    url: "../queryresults",
                    type: "GET",
                    data: dataString,
                    success: function(names){
                        $.each(names, function(i, name) {
                            $("#resultstable ").append("<tr><td>"+name.username+"</td><td>"+name.email+"</td></tr>")	
                        });
                    },
                    dataType: "json"
                });
            });
        });
    </script>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    Laravel
                </div>

                <div class="links">
                <a href="/">Home</a>
                    <a href="/about">About</a>
                    <a href="/users">Users</a>
                    <a href="/users/new">New User</a>
                    <a href="/search">Searchbar</a>
                    <a href="/live">Livelist</a>
                </div>
                <h1>User search:</h1>
                    <label for="searchstring">Enter string here: </label>
                    <input type="text" id="searchstring"/>
                    <h2>Search results:</h2>
                    <table id="resultstable">
                        <thead>
                            <tr><th>Username</th><th>Email</th><tr>
                        </thead>
                        <tbody>

                        </tbody>
                    </table>
            </div>
            
        </div>
    </body>
</html>
