<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Username availability checker</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #000;
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
                text-align: center;
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
        function checkUser() {
            var username = document.getElementById("uname").value;
            var dataString = 'uname=' + username;
            $.ajax({ 
                type: "GET", 
                url: "../availabilitycheck", 
                data: dataString, 
                success: function(data) {
                    console.log(data.availability);
                if (data.availability == "false"){ 
                    console.log("username is unavailable, please choose another");
                    $("#message").html("username is unavailable, please choose another"); 
                    $("#uname").css("color", "red");
                    $("#message").css("color", "red");
                    $("#submit").prop('disabled', true); 
                }
                else if (data.availability == "true"){
                    console.log("username is available, please proceed");
                    $("#message").html("username is available, please proceed"); 
                    $("#uname").css("color", "green");
                    $("#message").css("color", "green");
                    $("#submit").prop('disabled', false);
                }
                }, 
                dataType: "json" 
            });
        }
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
                    Username availability
                </div>

                <div class="links">
                    <a href="/">Home</a>
                    <a href="/about">About</a>
                    <a href="/users">Users</a>
                    <a href="/users/new">New User</a>
                    <a href="/search">Searchbar</a>
                    <a href="/live">Livelist</a>
                </div>
                <h1>Register</h1>
                    <form id="form" name="form" action="insert.php" onsubmit="return checkempty();" method="post">
                    <h3>Fill Your Information!</h3>
                    <label>Firstname :</label>
                    <input class="form-control" id="fname" name="fname" type="text">
                    <br/>
                    <label>Surname :</label>
                    <input class="form-control" id="sname" name="sname" type="text">
                    <br/>
                    <label>Username :</label>
                    <input class="form-control" id="uname" name ="uname" type="text" onblur="checkUser()" ><span id="message"></span>
                    <br/>
                    <label>Password :</label>
                    <input class="form-control" id="pword" name="pword" type="password">
                    <br/>
                    <label>Email :</label>
                    <input  class="form-control" id="email" name="email" type="text">
                    <br>
                    <input class="btn btn-success" id="submit" name="submit" type="submit" value="Submit">
                    </form>
            </div>
        </div>
    </body>
</html>
