<!DOCTYPE html>
<html>
<head>
<script
			  src="https://code.jquery.com/jquery-3.5.1.js"
			  integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc="
			  crossorigin="anonymous"></script>
    <script>
        $(document).ready(function(){
           $.ajax({
                url:"<?php echo base_url(); ?>/index.php/Home/things",
                success: function(data){   
                    $.each(data, function(i, item){
                        $("#things").append("<li>"+item.thing+"</li>");
                    })
                },
                datatype: "json"
            });

            $("#submitbtn").click(function(){
                var newThing = $("#thingtoinput").val();
                var datastring = "thing="+newThing;
                $.ajax({
                    url:"<?php echo base_url(); ?>/index.php/Home/addthing",
                    data: datastring,
                    type: "POST",
                    success: function(data){   
                        console.log(datastring);
                    }
                });
                $("#things").append("<li>"+newThing+"</li>");
            });
            
        });
    </script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>
<body>
    <a href="<?php echo base_url();?>/index.php/Home/register">Username Availability Checker</a><br/>
    <hr>
    <h1>Live list</h1>
    <input type="text" name="thingtoinput" id="thingtoinput"/>
    <button id="submitbtn">Press to submit</button>
    <ul id="things">
    </ul>
</body>
</html>