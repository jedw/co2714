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
</head>
<body>
    <a href="<?php echo base_url();?>/index.php/Home/register">Username Availability Checker</a><br>
    <a href="<?php echo base_url();?>/index.php/Home/map">Google maps from webservice</a><br>
    <a href="<?php echo base_url();?>/index.php/Home/search">Live search page</a><br>
    <hr>
    <h1>Live list</h1>
    <ul id="things">
    </ul>
    <input type="text" name="thingtoinput" id="thingtoinput"/>
    <button id="submitbtn">Press to submit</button>
</body>
</html>