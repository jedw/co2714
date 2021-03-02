<!DOCTYPE html>
<html lang="EN">
<head>
<title>Live List</title>
<link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
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
        color: #000;
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
<script src="https://code.jquery.com/jquery-3.4.1.js"></script>
<script>
$(document).ready(function(){
	var newListItem;
	var dataString; 

	$.ajax({
		url: "../ajaxgetthings",
		success: function(users){
			$.each(users, function(i, user) {
				$("#myList").append("<li>"+user.username+"</li>");
			});
		},
		datatype: "json"
	});

	$("#addItem").click(function(){
		newListItem = $("#newItem").val();
		$("#myList").append("<li>"+newListItem+"</li>");
		dataString = "newusername="+newListItem;
		$.ajax({
			url: "../ajaxinsertnew",
			type: "GET",
			data: dataString,
			success: function(data){
				console.log('success');
			}			
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
                    Live List
                </div>

                <div class="links">
                <a href="/">Home</a>
                    <a href="/about">About</a>
                    <a href="/users">Users</a>
                    <a href="/users/new">New User</a>
                    <a href="/search">Searchbar</a>
                    <a href="/live">Livelist</a>
                </div>
                <h1>Live list demo</h1>
		<ul id="myList">
			<!-- items will be added here -->
		</ul>
		
		<input type="text" id="newItem"/>
		<button id="addItem">Add Item</button>
            </div>
        </div>
		<div class="container">
		</div>
	</body>
</html>