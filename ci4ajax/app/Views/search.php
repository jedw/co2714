<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search</title>
    <style>
        th,td {
            padding: 5px;
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
                    url: "<?php echo base_url(); ?>/index.php/Home/searchquery",
                    type: "POST",
                    data: dataString,
                    success: function(names){
                        $.each(names, function(i, name) {
                            $("#resultstable ").append("<tr><td>"+name.firstname+"</td><td>"+name.surname+"</td></tr>")	
                        });
                    },
                    dataType: "json"
                });
            });
        });
    </script>

</head>
<body>
    <h1>User search:</h1>
    <label for="searchstring">Enter string here: </label>
    <input type="text" id="searchstring"/>
    <h2>Search results:</h2>
    <table id="resultstable">
        <thead>
            <tr><th>Firstname</th><th>Surname</th><tr>
        </thead>
        <tbody>

        </tbody>
    </table>
</body>
</html>